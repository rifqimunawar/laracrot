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

class TagController extends Controller
{
    /**
     * Display tags.
     *
     * @param  $slug
     * @return Application|Factory|View
     */
    public function show($slug)
    {
        $user=Auth::user();
        $tag = Tag::with('posts')
            ->where('slug', $slug)
            ->orderBy('title')
            ->firstOrFail();
        $tags = Tag::with('posts')
            ->whereHas('posts', function ($query) {
                $query->where('active', 1);
            })
            ->orderBy('title')
            ->get();
        $posts = $tag->posts()
            ->with('category')
            ->with('user')
            ->where('active', '1')
            ->orderBy('created_at', 'desc')
            ->paginate(4);
        $post_categories = Category::has('posts')
            ->orderBy('title')
            ->latest()
            ->get();
        $trending = Post::with('category', 'user')
            ->where('active', '1')
            ->orderBy('views', 'desc')
            ->paginate(15);

        return view('user.blog.tag', compact('tag', 'tags', 'posts', 'post_categories', 'user', 'trending'));
    }
}
