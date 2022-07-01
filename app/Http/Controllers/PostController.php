<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function store(Request $request)
    {
        $post = new Post();
        $post->slug = $request->slug;
        $post->title = $request->title;
        $post->body = $request->body;
        $post->save();

        return response()->json($post, 200);
    }
    public function show($slug)
    {
        try {
            $data = Post::firstWhere('slug', $slug);
            return response()->json($data, 200);
        } catch (QueryException $th) {
            return response()->json($th->errorInfo);
        }
    }
}
