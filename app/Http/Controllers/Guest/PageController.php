<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
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
    public function contatcs()
    {
        return view('contatcs');
    }
    public function about()
    {
        return view('about');
    }
}
