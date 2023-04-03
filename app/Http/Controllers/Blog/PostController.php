<?php

namespace App\Http\Controllers\Blog;

use App\Models\Tag;
use App\Models\Post;
use App\Models\Category;
use Illuminate\Contracts\View\View;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\Foundation\Application;

class PostController extends Controller
{


    /**
     * Show post page
     *
     * @return Application|Factory|View
     */
    public function index()
    {
        $user=Auth::user();
        $recent_posts = Post::with('category', 'user')
            ->where('active', '1')
            ->orderBy('created_at', 'desc')
            ->paginate(15);
        $old_posts = Post::with('category', 'user')
            ->where('active', '1')
            ->orderBy('created_at', 'desc')
            ->paginate(8);
        $post_categories = Category::with('posts')
            ->whereHas('posts', function ($query) {
                $query->where('active', 1);})
            ->orderBy('title')
            ->latest()
            ->get();
        $tags = Tag::with('posts')
            ->whereHas('posts', function ($query) {
                $query->where('active', 1);
            })
            ->orderBy('title')
            ->get();

        return view('user.blog.index', compact('recent_posts', 'post_categories', 'old_posts', 'tags', 'user'));
    }


    /**
     * Display single post.
     *
     * @param  $slug
     * @return Application|Factory|View
     */
    public function show($slug)
    {
        $user=Auth::user();
        $post = Post::where('slug', $slug)
            ->with('category', 'user')
            ->where('active', 1)
            ->orderBy('created_at', 'desc')
            ->firstOrFail();
        $post_categories = Category::with('posts')
            ->whereHas('posts', function ($query) {
                $query->where('active', 1);
            })
            ->orderBy('title')
            ->latest()
            ->get();
        $tags = Tag::with('posts')
            ->whereHas('posts', function ($query) {
                $query->where('active', 1);
            })
            ->orderBy('title')
            ->latest()
            ->get();

        ++$post->views;
        $post->update();

        return view("user.blog.post", compact('post', 'post_categories', 'tags', 'user'));
    }
}
