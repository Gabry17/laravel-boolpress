<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        $posts = Post::with(['category'])->paginate(6);

        foreach ($posts as $post) {
            if($post->cover) {
                $post->cover = url('storage/' . $post->cover);
            }
        }

        return response()->json([
            'success' => true,
            'results' => $posts
        ]);
    }

    public function show($slug){
        $post = Post::where('slug', '=', $slug)->with(['category', 'tags'])->first();

        if ($post) {
            if($post->cover) {
                $post->cover = url('storage/' . $post->cover);
            }

            return response()->json([
                'success' => true,
                'results' => $post
            ]);
        }

        return response()->json([
            'success' => false,
            'error' =>  'post non trovato'
        ]);
    }
}
