<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\HBN;
use App\Models\Post;
use App\Models\User;
use Inertia\Inertia;
use App\Models\Agenda;
use App\Models\Galeri;
use App\Models\Perpus;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class MobileHomeController extends Controller
{
 public function homepage()
 {
     $user_pkn = User::where('kaderisasi', 'PKN')->count(); //total pengguna yang sudah pkn
     $user_pkl = User::whereIn('kaderisasi', ['PKL', 'PKN'])->count(); //total pkl
     $user_pkd = User::whereIn('kaderisasi', ['PKD', 'PKL', 'PKN'])->count(); //total pkd
     $user_mapaba = User::whereIn('kaderisasi', ['Mapaba', 'PKD', 'PKL', 'PKN'])->count(); // Total mapaba

     $posts = Post::latest()->where('active', '1')->paginate(5);
     $galeries = Galeri::with('user')->where('status', 1)->latest()->get();
     $users = User::with('rayon')->latest()->paginate(5);

     // dd($posts);
     return view('mobile.home.index', compact('users', 'galeries', 
     'posts', 'user_pkn', 'user_pkl', 'user_pkd', 'user_mapaba'));
 }
 
 public function search(Request $request) {
  if ($request->has('search')) {
      $users = User::where('username', 'LIKE', '%' . $request->search . '%')
          ->orwhere('name', 'LIKE', '%' . $request->search . '%')
          ->orwhere('nim', 'LIKE', '%' . $request->search . '%')
          ->paginate(25);
  } else {
      $users = User::with('rayon')->latest()->paginate(25);
  }
  // dd($users);
  return view('mobile.search.index', compact( 'users'));
 }
 
 public function book() {
  $books = Perpus::with('categorybooks')->latest()->get();
  // dd($books);
  return view('mobile.book.index', compact('books'));
 }
 public function bookShow($id, Request $request) {
  $books = Perpus::find($id);
  return view('mobile.book.show', compact('books'));
 }
 
 public function galery() {
  $galeries = Galeri::with('user')->where('status', 1)->latest()->get();
  // dd($galeries);
  return view('mobile.galery.index', compact('galeries'));
 }
 
 public function post(Request $request) {
  $posts = Post::with('category', 'user')
  ->where('active', '1')
  ->orderBy('created_at', 'desc')->get();

  $on_page = is_null($request->get('page')) ? 2 : $request->get('page');

  $res = Http::get('https://nuonline.cms.nu.or.id/api/v3/articles?lang=id&limit=5' . $on_page);

  $data['users'] = $res->json()['data'];

  // dd($posts);
  return view('mobile.post.index', compact('posts', 'data'));
 }

 public function show($slug) {
  
  $post = Post::where('slug', $slug)
  ->with('category', 'comments', 'user')
  ->where('active', 1)
  ->orderBy('created_at', 'desc')
  ->firstOrFail();

  $trending = Post::with('category', 'user')
            ->where('active', '1')
            ->orderBy('views', 'desc')
            ->paginate(4);
  
  // dd($post);
  return view('mobile.post.show', compact('post', 'trending'));
 }

 function nuShow($slug, Request $request)
    {
        $on_page = is_null($request->get('page')) ? 2 : $request->get('page');
    
        $res = Http::get('https://nuonline.cms.nu.or.id/api/v3/articles?lang=id&limit=5' . $on_page);
    
        $data['users'] = $res->json()['data'];
    
        $post = collect($data['users'])->where('slug', $slug)->first();
    
        $id = $post['id'];
        $title = $post['title'];
        $url = $post['url'];
        $preview = $post['preview'];
        $category = $post['category'];
    
        $full = $post['image']['full'];
         
        // Check if 'author' array and index 1 exist before accessing it
        $author = isset($post['author'][1]['name']) ? $post['author'][1]['name'] : '';

        
        $date = $post['date']['published'];
        
        $trending = Post::with('category', 'user')
            ->where('active', '1')
            ->orderBy('views', 'desc')
            ->paginate(4);

        // dd($post);
        return view("mobile.post.showNu", compact(
         'post', 'trending', 'id', 'title', 'url', 'preview', 'category', 'full', 'author', 'date',
     ));
 }










 public function mobileUpload() {
  return "upload";
 }
 public function calender() {
  $hbns = HBN::latest()->take(5)->get();
  $events = Agenda::all();
// ddd($events);
  return view('mobile.calender.index', compact('events', 'hbns'));
 }
 
 public function profile() {
  return view('mobile.profile.index');
 }
}
