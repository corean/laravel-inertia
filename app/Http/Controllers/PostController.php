<?php

namespace App\Http\Controllers;

use App\Http\Resources\PostResource;
use App\Models\Post;
use Inertia\Inertia;

class PostController extends Controller
{
    public function index(): \Inertia\Response
    {
        $posts = PostResource::collection(Post::latest()->paginate(10));
        // $posts = Post::latest()->paginate(10);
        return Inertia::render('Posts/Index', [
            'posts' => $posts,
        ]);
    }
}