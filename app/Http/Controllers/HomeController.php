<?php

namespace App\Http\Controllers;


class HomeController extends Controller
{
    //restituisce la home
    public function index()
    {
        return view('movies.index');
    }
}
