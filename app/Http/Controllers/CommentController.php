<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
  public function store(Request $request)
  {
      $request->validate([
          'comment' => 'required',
          'post_id' => 'required|exists:posts,id',
      ]);
  
      $comment = new Comment();
      $comment->user_id = Auth::user()->id;
      $comment->post_id = $request->post_id;
      $comment->comment = $request->comment;
      $comment->save();
  
      return redirect()->back();
  }
  
}
