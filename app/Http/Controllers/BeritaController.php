<?php

namespace App\Http\Controllers;

class BeritaController extends Controller
{
    public function index()
    {
        $posts = config('berita.posts');

        return view('berita.index', compact('posts'));
    }

    public function show($slug)
    {
        $post = collect(config('berita.posts'))
            ->firstWhere('slug', $slug);

        abort_if(!$post, 404);

        return view('berita.show', compact('post'));
    }
}