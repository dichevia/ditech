<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){

        $articles = \App\Article::all();

        return view('article.index', compact('articles'));
    }

    public function create()
    {


        return view('article.create');
    }

    public function store()
    {
        $data = request()->validate([
            'title' => 'required|min:3',
            'description' => 'required|min:5|max:30',
            'content' => 'required|min:10',
        ]);

        // $data['user_id'] = auth()->user()->id;

        // $article = \App\Article::create($data);

        $article = auth()->user()->articles()->create($data);

        return redirect('articles/' . $article->id);
    }

    public function show($articleId)
    {
        $article = \App\Article::findOrFail($articleId);

        return view('article.show', compact('article'));
    }
}
