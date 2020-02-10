<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index(){

        $articles = \App\Article::all()->take(3);

        return view('welcome', compact('articles'));
    }
}
