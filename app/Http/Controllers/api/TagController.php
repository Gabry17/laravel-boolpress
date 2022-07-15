<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    public function show($slug){
        $tag = Tag::where('slug', '=', $slug)->with(['posts'])->first();

        if($tag){
            return response()->json([
                'success' => true,
                'results' => $tag
            ]);
        }

        return response()->json([
            'success' => false,
            'results' => 'Tag non trovato'
        ]);
    }
}
