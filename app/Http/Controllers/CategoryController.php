<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\category;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = category::with('parent')->get();
        return view("admin.category.index", ['categories' => $categories]);
    }
    public function create()
    {
        $categories = category::all();
        return view('admin.category.create', ['categories' => $categories]);
    }
    public function store(Request $request)
    {
        // dd($request->all());
        $path = null;
        if(isset($request->image)){
            // $type = request()->footerImage->getClientOriginalExtension();
            $name = $request->image->getClientOriginalName();
            $fullName = Str::uuid() . '_' . $name;
            $path = $request->file('image')->storeAs('logo', $fullName, 'public');

        }
        category::create([
            'title' => $request->title,
            'parent_id' => $request->parent_id ,
            'image'=>$path,
            'description'=>$request->description
        ]);
        return to_route('category.list');
    }
    public function show(category $category)
    {
        // dd($category);
        // $category =  category::find($id);
        $category->parent;
        return view("admin.category.single", ['category' => $category]);
    }
    public function edit(category $category)
    {
        $categories = category::all();
        return view('admin.category.edit', ['category' => $category, 'categories' => $categories]);
    }
    public function update(Request $request)
    {
        // dd($request->all());
        $category = category::find($request->id);
        $category->title = $request->title;
        $category->description = $request->description;
        $category->parent_id = $request->parent_id;
        $category->save();
        return to_route('category.list');
    }
    public function delete(category $category)
    {
        $category->delete();
        return to_route('category.list');
    }
    public function proList(category $category)
    {
       return view('admin.category.proList' , ['category'=>$category]);
        // dd($category->products);
    }
}
