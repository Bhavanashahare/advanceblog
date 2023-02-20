<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Blog;

class FrontController extends Controller
{
 public function index(){
      $categories=Category::all();
      $blogs=Blog::all();
      $latests= Blog::latest()->first();
     return view('home',compact('categories','blogs','latests'));
    }
}







