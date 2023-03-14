<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Blog;

class FrontController extends Controller

//  public function index(){
//       $categories=Category::all();
//       $blogs=Blog::all();
//       $latests= Blog::latest()->first();
//      return view('home',compact('categories','blogs','latests'));
//     }
//     public function detail($id)
//     {
//         $blogs = Blog::with('category')->find($id);
//         $data=Category::all();
//         return view('details', compact('blogs','data'));
//     }




{
    public function index(){
        return view('welcome');

    }
    public function master(){
        return view('layouts.master');

    }

    public function dashbord(){
        return view('dashbord');
}

    public function about(){
        return view('about');

    }


    public function contact(){
        return view('contact');

    }
    public function home(){
        return view('home');

    }
}










