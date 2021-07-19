<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AFeature extends Controller
{
    public function index()
    {
        return view('AFeature.AFeature');
    }
    public function ONE()
    {
        return view('AFeature.AFeature1');
    }
    public function TWO()
    {
        return view('AFeature.AFeature2');
    }
}
