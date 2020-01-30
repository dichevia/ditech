<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;

class HelloController extends Controller {

    public function about() {


        return view('about');
    }

}
