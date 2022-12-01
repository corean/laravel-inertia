<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Inertia\Inertia;

class PostController extends Controller
{
    public function index(): \Inertia\Response
    {
        return Inertia::render('Posts/Index', [
            'posts' => Post::latest()->paginate(10),
        ]);
    }
}