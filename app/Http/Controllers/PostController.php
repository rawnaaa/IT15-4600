<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post; // Add this line at the top

class PostController extends Controller
{
    public function index() 
    {
        $posts = Post::all(); 
        return view('second', compact('posts'));
    }
}