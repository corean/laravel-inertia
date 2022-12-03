<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostRequest;
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

    public function create(): \Inertia\Response
    {
        return Inertia::render('Posts/Create');
    }

    public function store(StorePostRequest $request): \Symfony\Component\HttpFoundation\Response
    {
        // sleep(1);
        Post::create($request->validated());

        return redirect()
            ->route('posts.index')
            ->with('success', 'Post created successfully.');
    }
}