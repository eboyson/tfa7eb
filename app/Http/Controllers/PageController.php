<?php

namespace App\Http\Controllers;

class PageController extends Controller
{
    public function home() { return view('home', ['title' => 'Laravel POS Eloquent']); }
    public function about() { return view('about', ['title' => 'About This Application']); }
}
