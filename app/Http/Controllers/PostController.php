<?php

namespace App\Http\Controllers;

use App\Http\Resources\PostResource;
use App\Models\Post;
use Illuminate\Http\Request;
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

    public function create(): \Inertia\Response
    {
        return Inertia::render('Posts/Create');
    }

    public function store(Request $request): \Symfony\Component\HttpFoundation\Response
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
        ]);

        Post::create($request->all());

        return Inertia::location(route('posts.index'));
    }
}