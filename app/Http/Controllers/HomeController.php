<?php

namespace App\Http\Controllers;

use App\Movie;

class HomeController extends Controller
{
    //restituisce la home
    public function index()
    {
        $movies = [];
        return view('movies.index');
    }

    //gestisce la pagina movie
    public function show()
    {
        return view('movies.show');
    }
}
