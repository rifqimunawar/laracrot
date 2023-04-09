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

class CategoryController extends Controller
{
    /**
     * Display categories.
     *
     * @param  $slug
     * @return Application|Factory|View
     */
    public function show($slug)
    {
        $user=Auth::user();
        $category = Category::with('posts')
            ->where('slug', $slug)
            ->whereHas('posts', function ($query) {
                $query->where('active', 1);
            })
            ->orderBy('title')
            ->firstOrFail();
        $trending = Post::with('category', 'user')
            ->where('active', '1')
            ->orderBy('views', 'desc')
            ->paginate(15);
        $post_categories = Category::with('posts')
            ->whereHas('posts', function ($query) {
                $query->where('active', 1);
            })
            ->orderBy('title')
            ->latest()
            ->get();
        $posts = $category->posts()
            ->with('category', 'user')
            ->with('user')
            ->where('active','1')
            ->orderBy('created_at', 'desc')
            ->paginate(4);
        $tags = Tag::with('posts')
            ->whereHas('posts', function ($query) {
                $query->where('active', 1);
            })
            ->orderBy('title')
            ->get();

        return view('user.blog.category', compact('category', 'posts', 'tags', 'post_categories', 'user', 'trending'));
    }
}
