<?php

namespace App\Http\Controllers;


class HomeController extends Controller
{
    //restituisce la home
    public function index()
    {
        return view('movies.index');
    }

    //gestisce la pagina movie
    public function show()
    {
        return view('movies.show');
    }
}
