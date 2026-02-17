<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\brands;
use Illuminate\Support\Facades\Storage;

class BrandsController extends Controller
{
    public function create()
    {
        return view('admin.brand.create');
    }
    public function store(Request $request)
    {
        // dd($request->all());
        $path = null;
        if (isset($request->brandImage)) {
            $name = $request->brandImage->getClientOriginalName();
            $fullName = Str::uuid() . '_' . $name;
            $path = $request->file('brandImage')->storeAs('images', $fullName, 'public');
        }
        brands::create([
            'title' => $request->title,
            'image' => $path
        ]);
        return to_route('brand.list');
    }
    public function index()
    {
        $brands = brands::all();
        return view('admin.brand.index' , ['brands'=>$brands]);
    }
    public function edit(Brands $brand)
    {
        return view('admin.brand.edit' , ['brand'=>$brand]);
    }
    public function update(Request $request)
    {
        $brand = brands::find($request->id);
        $brand->title = $request->title;
       
        if (isset($request->brandImage)) {
            if ($brand->image) {
                Storage::disk('public')->delete($brand->image);
            }
            $name = $request->brandImage->getClientOriginalName();
            $fullName = time() . '_' . $name;
            $path = $request->file('brandImage')->storeAs('images', $fullName, 'public');
            $brand->image = $path;
        }
        $brand->save();
        return to_route('brand.list');
    }
    public function delete(Brands $brand)
    {
        $brand->delete();
        return to_route('brand.list');
    }
}
