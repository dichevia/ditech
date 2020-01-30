<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{

    public function index() {

        $articles = \App\Article::all();


        return view('article.index', compact('articles'));
    }

    public function store(){
        $data = request()->validate([
            'title' => 'required|min:3',
            'description' => 'required|min:5|max:30',
            'content' => 'required|min:10',
        ]);

        \App\Article::create($data);

        return redirect()->back();
    }
}
