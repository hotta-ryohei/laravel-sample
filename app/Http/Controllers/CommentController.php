<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;


class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $comments = Comment::all();
        
        return view('comment', [
          'title' => 'Comment一覧',
          'comments' => $comments,
        ]);
      }
}