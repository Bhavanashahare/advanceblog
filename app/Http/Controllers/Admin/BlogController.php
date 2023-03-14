<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Category;

class BlogController extends Controller
{
    public function create()
    {

        $categories = Category::all();
        return view('blog.create', compact('categories'));
    }




    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'description' => 'required',

        ]);
        $blog = new Blog();
        $blog->title = $request->title;
        $blog->description = $request->description;
        $blog->category_id = $request->category_id;

        if ($request->hasFile('image')) {
            $file = $request->image;
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('uploads', $filename);
            $blog->image = $filename;
        }
        $blog->save();

return redirect()->route('blog.table');
    }

    public function table()
    {
        $blog = Blog::with('category')->get();
        return view('blog.table', compact('blog'));
    }


    public function edit($id)
    {
        $category = Category::all();
        $blog = Blog::find($id);
        return view('blog.edit', compact('blog', 'category'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [

            'title' => 'required',
            'description' => 'required',

        ]);

        $blog = Blog::find($id);
        $blog->title = $request->title;
        $blog->description = $request->description;
        $blog->category_id = $request->category_id;


        if ($request->hasFile('image')) {
            $file = $request->image;
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('uploads', $filename);
            $blog->image = $filename;
        }
        $blog->save();

        return redirect()->route('blog.table');
    }

    public function delete($id)
    {
        $blog = Blog::find($id);
        $blog->delete();
        return redirect()->route('blog.table');
    }
}
