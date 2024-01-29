<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;


class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::all();
        
        return view('post', [
          'title' => 'Post一覧',
          'posts' => $posts,
        ]);
      }
}