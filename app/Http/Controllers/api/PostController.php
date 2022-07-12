<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        $posts = Post::all();
        return response()->json([
            'success' => true,
            'results' => $posts
        ]);
    }
}
