<?php

namespace App\Http\Controllers;

use \App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {

        $categories = \App\Category::where('active',$request->query('active', '1'))->get();

        return view('category.index', compact('categories'));
    }

    public function create()
    {
        $category = new Category();

        return view('category.create', compact('category'));
    }

    public function store()
    {

        $data = $this->validateData();

        $category = Category::create($data);

        return redirect('/categories/'.$category->id);
    }

    public function show($categoryId)
    {

        $category = \App\Category::findOrFail($categoryId);

        return view('category.show', compact('category'));
    }

    public function edit($categoryId)
    {

        $category = \App\Category::findOrFail($categoryId);

        return view('category.edit', compact('category'));
    }

    public function update($categoryId)
    {

        $data = request()->validate([
            'name' => 'required|min:3',
        ]);

        $category = \App\Category::findOrFail($categoryId);

        $category->update($data);

        return redirect('/categories/' . $category->id);
    }

    public function destroy($categoryId){

        $category = \App\Category::findOrFail($categoryId);

        $category->delete();

        return redirect('/categories/');
    }

    protected function validateData(){

        return request()->validate([
            'name' => 'required|min:3',
        ]);
    }
}
