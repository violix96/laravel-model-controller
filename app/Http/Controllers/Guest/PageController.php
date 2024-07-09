<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Movie;
use Illuminate\Http\Request;



class PageController extends Controller
{
    public function index()
    {
        $movies = Movie::all(); //select * from `movies`
        return view('guest.index', compact('movies'));
    }
}
