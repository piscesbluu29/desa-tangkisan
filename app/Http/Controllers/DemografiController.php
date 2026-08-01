<?php

namespace App\Http\Controllers;

class DemografiController extends Controller
{
    public function __invoke()
    {
        return view('demografi.index');
    }
}