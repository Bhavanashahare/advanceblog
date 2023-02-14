<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;
class BlogController extends Controller
{
    public function create(){
        return view('blog.create');
    }




    public function store(Request $request){
        $this->validate($request,[
            'title'=>'required',
            'description'=>'required',
            'image'=>'required'
        ]);
        $blog=new Blog();
        $blog->title=$request->title;
        $blog->description=$request->description;

         if($request->hasFile('image'))
        {
             $file=$request->image;
            $extension=$file->getClientOriginalExtension();
           $filename=time().'.'.$extension;
          $file->move('uploads',$filename);
            $blog->image=$filename;

        }
        $blog->save();



    }





    public function table(){

        $blog=Blog::paginate(5);
        return view('blog.table',compact('blog'));

        }



        public function edit($id){

            $blog=Blog::find($id);
            return view('blog.edit',compact('blog'));
        }

        public function update(Request $request , $id){
            $this->validate($request,[

                'title'=>'required',
                'description'=>'required',
            
            ]);
            $blog=Blog::find($id);
            $blog->title=$request->title;
            $blog->description=$request->description;

            if($request->hasFile('image'))
            {
                $file=$request->image;
                $extension=$file->getClientOriginalExtension();
                $filename=time().'.'.$extension;
                $file->move('uploads',$filename);
                $blog->image=$filename;

            }
            $blog->save();

            return redirect()->route('blog.table');

        }

        public function delete($id){
          $blog=Blog::find($id);
          $blog->delete();
           return redirect()->route('blog.table');
        }
    }






