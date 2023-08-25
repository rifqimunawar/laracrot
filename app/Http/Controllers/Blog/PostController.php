<?php

namespace App\Http\Controllers\Blog;

use App\Models\Tag;
use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\Foundation\Application;

class PostController extends Controller
{


    /**
     * Show post page
     *
     * @return Application|Factory|View
     */
    public function index(Request $request)
    {
        $user = Auth::user();
        $recent_posts = Post::with('category', 'user')
            ->where('active', '1')
            ->orderBy('created_at', 'desc')
            ->paginate(15);
        $trending = Post::with('category', 'user')
            ->where('active', '1')
            ->orderBy('views', 'desc')
            ->paginate(15);
        $old_posts = Post::with('category', 'user')
            ->where('active', '1')
            ->orderBy('created_at', 'desc')
            ->paginate(8);
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
            ->get();



        // test api 
        $on_page = is_null($request->get('page')) ? 2 : $request->get('page');

        $res = Http::get('https://nuonline.cms.nu.or.id/api/v3/articles?lang=id&limit=2' . $on_page);

        $data['users'] = $res->json()['data'];
        // $data['max_pages'] = $res->json()['total_pages'];

        // dd($data);
        return view('user.blog.index', compact(
            'data',
            'recent_posts',
            'post_categories',
            'old_posts',
            'tags',
            'user',
            'trending'
        ));
    }


    /**
     * Display single post.
     *
     * @param  $slug
     * @return Application|Factory|View
     */
    public function show($slug)
    {
        $user = Auth::user();
        $post = Post::where('slug', $slug)
            ->with('category', 'comments', 'user')
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
        $trending = Post::with('category', 'user')
            ->where('active', '1')
            ->orderBy('views', 'desc')
            ->paginate(15);
        $tags = Tag::with('posts')
            ->whereHas('posts', function ($query) {
                $query->where('active', 1);
            })
            ->orderBy('title')
            ->latest()
            ->get();

        ++$post->views;
        $post->update();


        return view("user.blog.post", compact('post', 'post_categories', 'tags', 'user', 'trending'));
    }

    function nushow($slug, Request $request)
    {
        // {{ route('post', ['slug' => $nuonline['slug']]) }}
    
        $on_page = is_null($request->get('page')) ? 2 : $request->get('page');
    
        $res = Http::get('https://nuonline.cms.nu.or.id/api/v3/articles?lang=id&limit=2' . $on_page);
    
        $data['users'] = $res->json()['data'];
    
        $user = Auth::user();
        $post = collect($data['users'])->where('slug', $slug)->first();
    
        $id = $post['id'];
        $title = $post['title'];
        $url = $post['url'];
        $preview = $post['preview'];
        $category = $post['category'];
    
        $full = $post['image']['full'];
        $author = $post['author'][1]['name'];
        
        $date = $post['date']['published'];
    
        // $post['views']++;
        // $post->save();
    
        // dd($date);
        // return  $full;

        return view("user.blog.post-nu", compact(
            'post', 'user',
            'full', 'title',
            'preview', 'url',
            'category', 'date',
            'author', 'data',
        ));

    }
    
    
}
