<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TentangController extends Controller
{
public function __invoke()
{
    return view('tentang.index');
}
}
