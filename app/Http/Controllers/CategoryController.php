<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\category;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

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
    // public function update(Request $request)
    // {
    //     // dd($request->all());
    //     $category = category::find($request->id);
    //     $category->title = $request->title;
    //     $category->description = $request->description;
    //     $category->parent_id = $request->parent_id;
    //     $category->save();
    //     return to_route('category.list');
    // }
    public function update(Request $request)
{
    $category = Category::find($request->id);
    

    $category->title = $request->title;
    $category->description = $request->description;
    $category->parent_id = $request->parent_id ?? 0;


    if ($request->hasFile('image')) {
 
        if ($category->image) {
            Storage::disk('public')->delete($category->image);
        }

        $imagePath = $request->file('image')->store('categories', 'public');
        $category->image = $imagePath;
    }

 
    if ($request->has('remove_image')) {
        if ($category->image) {
            Storage::disk('public')->delete($category->image);
            $category->image = null;
        }
    }


    $category->save();


    return to_route('category.list')->with('success', 'دسته‌بندی با موفقیت بروزرسانی شد.');
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
