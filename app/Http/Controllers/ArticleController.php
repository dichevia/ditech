<?php

namespace App\Http\Controllers;

use App\Traits\UploadTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ArticleController extends Controller
{
    use UploadTrait;

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {

        $articles = \App\Article::all();

        return view('article.index', compact('articles'));
    }

    public function create()
    {
        $categories = \App\Category::all();

        return view('article.create', compact('categories'));
    }

    public function store()
    {
        $data = $this->validateData();

        if (request()->has('image')) {
            $data = $this->processImage($data);
        }

        // $data['user_id'] = auth()->user()->id;
        // $article = \App\Article::create($data);

        $article = auth()->user()->articles()->create($data);

        return redirect('/articles/' . $article->id);
    }

    public function show($articleId)
    {
        $article = \App\Article::findOrFail($articleId);

        return view('article.show', compact('article'));
    }

    public function edit($articleId)
    {

        $article = \App\Article::findOrFail($articleId);
        $categories = \App\Category::all();

        return view('article.edit', compact('article', 'categories'));
    }

    public function update($articleId)
    {

        $data = $this->validateData();

        if (request()->has('image')) {
            $data = $this->processImage($data);
        }

        $article = \App\Article::findOrFail($articleId);
        $article->update($data);

        return redirect('/articles/' . $article->id);
    }

    public function destroy($articleId)
    {

        $article = \App\Article::findOrFail($articleId);
        $article->delete();

        return redirect('/articles/');
    }

    protected function validateData()
    {
        return request()->validate([
            'title' => 'required|min:3',
            'description' => 'required|min:5|max:30',
            'content' => 'required|min:10',
            'category_id' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);
    }

    protected function processImage($data){
        //get image file
        $image = request()->file('image');
        //make image name base on article title and current timestamp
        $name = Str::slug(request()->input('title') . '_' . time());
        //folder path
        $folder = '/uploads/images/article/';
        //file path where image is stored
        $filePath = $folder . $name . '.' . $image->getClientOriginalExtension();
        //upload image
        $this->uploadOne($image, $folder, 'public', $name);
        //Set article image path in database to filePath
        $data['image'] = $filePath;

        return $data;
    }
}
