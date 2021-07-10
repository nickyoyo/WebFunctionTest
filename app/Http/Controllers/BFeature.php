<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BFeature extends Controller
{
    public function index()
    {
        return view('BFeature.BFeature');
    }
    public function ONE()
    {
        return view('BFeature.BFeature1');
    }
    public function TWO()
    {
        return view('BFeature.BFeature2');
    }
}
