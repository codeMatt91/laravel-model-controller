<?php

namespace App\Http\Controllers;

use App\Movie;

class HomeController extends Controller
{
    //restituisce la home
    public function index()
    {
        $movies = Movie::all(); // SELECT * FROM 'movies'

        return view('movies.index', compact('movies'));
    }

    //gestisce la pagina movie
    public function show($id)
    {

        $movie = Movie::find($id);
        return view('movies.show', compact('movie'));
    }
}
