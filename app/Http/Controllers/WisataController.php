<?php

namespace App\Http\Controllers;

class WisataController extends Controller
{
    public function index()
    {
        $places = config('wisata.places');

        return view('wisata.index', compact('places'));
    }

    public function show($slug)
    {
        $place = collect(config('wisata.places'))
            ->firstWhere('slug', $slug);

        abort_if(!$place, 404);

        return view('wisata.show', compact('place'));
    }
}