<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
class CategoryController extends Controller
{
    public function create(){
        return view('category.create');
    }

    public function store(Request $request){
        $this->validate($request,[
            'name'=>'required'
        ]);
        $category=new Category();
        $category->name=$request->name;
        $category->save();
        return redirect()->route('category.table');

    }
    public function table(){
        $category=Category::paginate(5);
        return view('category.table',compact('category'));
    }
    public function edit($id){
        $category=Category::find($id);
        return view('category.edit',compact('category'));

    }
    public function update(Request $request,$id){
        $this->validate($request,[
            'name'=>'required'
        ]);
        $category=Category::find($id);
        $category->name=$request->name;
        $category->save();
        return redirect()->route('category.table');
    }
    public function delete($id){
        
     $category=Category::find($id);
     $category->delete();
     return redirect()->route('category.table');
    }
}
