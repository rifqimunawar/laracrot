<?php

namespace App\Http\Controllers\Blog;

use App\Models\Tag;
use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\SearchRequest;

class SearchController extends Controller
{
    public function index(Request $request)
    {
        $query = new Post();
        $search = $request->s;

        if ($search) {
            $query = Post::with('category', 'tags')
                ->where('title', 'like', "%$search%")
                ->where('active', 1);
        }

        $tags = Tag::with('posts')
            ->whereHas('posts', function ($query) {
                $query->where('active', 1);
            })
            ->orderBy('title')
            ->get();
        $search_results = $query->paginate(4);

        return view('blog.search', compact('search', 'search_results', 'tags'));
    }
}
