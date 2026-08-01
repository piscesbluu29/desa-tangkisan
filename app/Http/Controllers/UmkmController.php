<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UmkmController extends Controller
{
    public function index()
    {
        $products = config('umkm.products');

        return view('umkm.index', compact('products'));
    }

    public function show($slug)
    {
        $product = collect(config('umkm.products'))
            ->firstWhere('slug', $slug);

        abort_if(!$product, 404);

        return view('umkm.show', compact('product'));
    }
}