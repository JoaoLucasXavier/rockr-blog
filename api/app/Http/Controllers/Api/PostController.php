<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function index(): \Illuminate\Http\JsonResponse
    {
        $posts = Post::all();
        return response()->json(['Posts' => $posts], 200);
    }

    public function show($id): \Illuminate\Http\JsonResponse
    {
        $post = DB::table('posts AS p')
            ->select(DB::raw('p.id, p.author, p.title, p.text, p.image, p.created_at '))
            ->where('p.id', $id)
            ->get();
        return response()->json(['Post' => $post], 200);
    }
}
