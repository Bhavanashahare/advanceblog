<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
class FrontController extends Controller
{
public function index(){
    $category=Category::all();
    return view('home' ,compact('category'));
}
}
