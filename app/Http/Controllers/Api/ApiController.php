<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post; // Import model Post
use App\Models\Galeri; // Import model Galeri

class ApiController extends Controller
{
    public function post(){
        $data_post = Post::with(['category', 'user:id,name,img'])
            ->where('active', '1')
            ->orderBy('created_at', 'desc')
            ->take(10)
            ->get();

        // Menambahkan URL dasar ke 'img' pada setiap gambar
           foreach ($data_post as $post) {
            $post->image = 'https://pmiiuninus.com/storage/img/' . $post->image;
        }

        return response()->json([
         'data'=>$data_post
        ]);
    }

    public function show($slug){
        $show_post = Post::where('slug', $slug)
            ->with(['category', 'comments', 'user:id,name,img'])
            ->where('active', 1)
            ->orderBy('created_at', 'desc')
            ->firstOrFail();

             // Menambahkan URL dasar ke 'image'
             $show_post->image = 'https://pmiiuninus.com/storage/img/' . $show_post->image;
             $show_post->user->img = 'https://pmiiuninus.com/storage/img/' . $show_post->user->img;

            return response()->json([
             'data'=>$show_post
            ]);
    }

    public function galeri() {
        $galeri = Galeri::with('user:id,name,img')->where('status', 1)->latest()->get();

           // Menambahkan URL dasar ke 'img' pada setiap gambar
           foreach ($galeri as $galery) {
            $galery->img = 'https://pmiiuninus.com/storage/img/' . $galery->img;
        }

        return response()->json([
         'data'=>$galeri
        ]);
    }
}
