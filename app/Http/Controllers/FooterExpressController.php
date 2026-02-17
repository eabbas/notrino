<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\footer_express;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;


class FooterExpressController extends Controller
{
    public function create()
    {
        return view('admin.express.create');
    }
    public function store(Request $request)
    {
        $path = null;
        if(isset($request->expressImage)){
            $name = $request->expressImage->getClientOriginalName();
            $fullName = Str::uuid() . '_' . $name;
            $path = $request->file('expressImage')->storeAs('images', $fullName, 'public');
        }
        footer_express::create([
            'title'=>$request->expressName ,
            'description'=>$request->description ,
            'icon'=>$path
        ]);
        return to_route('express.list');
    }
    public function index()
    {
 
        $footer_expresses = footer_express::all();
        return view('admin.express.index' , ['footer_expresses'=> $footer_expresses]);
    }
    public function edit(footer_express $express)
    {
        return view('admin.express.edit' , ['express'=>$express]);
    }
    public function update(Request $request)
    {
        $footerExpress = footer_express::find($request->id);
        $footerExpress->title = $request->expressName;
        $footerExpress->description = $request->description;
        if (isset($request->expressImage)) {
            if ($footerExpress->icon) {
                Storage::disk('public')->delete($footerExpress->icon);
            }
            $name = $request->expressImage->getClientOriginalName();
            $fullName = time() . '_' . $name;
            $path = $request->file('expressImage')->storeAs('images', $fullName, 'public');
            $footerExpress->icon = $path;
        }
        $footerExpress->save();
        return to_route('express.list');
    }
    public function delete(footer_express $express)
    {
        $express->delete();
        return to_route('express.list');
    }
}
