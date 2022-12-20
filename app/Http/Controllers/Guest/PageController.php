<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Movie;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {

        return view('welcome');
    }
    public function info()
    {
        return view('info');
    }
    public function card()
    {
        $movies = Movie::all();
        return view('card', compact('movies'));
    }
    public function about()
    {
        return view('about');
    }
}
