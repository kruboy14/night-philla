<?php

namespace App\Http\Controllers;

use App\Review;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('index');
    }

    public function menu()
    {
        return view('menu');
    }

    public function contacts()
    {
        return view('contacts');
    }

    public function gallery()
    {
        return view('gallery');
    }

    public function chat()
    {
        $reviews = Review::all();
        return view('chat',compact('reviews'));
    }
}
