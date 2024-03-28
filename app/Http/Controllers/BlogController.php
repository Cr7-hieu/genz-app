<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    function blog(){
        return view('main.blog');
    }
    function details(){
        return view('main.blog-details');
    }
}
