<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\slider;
use Illuminate\Support\Facades\Storage;


class SliderController extends Controller
{
    public function create()
    {
        return view('admin.sliders.create');
    }

    public function store(Request $request)
    {
        // dd($request->all());
        if(isset($request->sliders)){
            foreach($request->sliders as $slider){
                $sliderName = $slider->getClientOriginalName();
                $fullNameSlider = Str::uuid() . "_" . $sliderName;
                $sliderPath = $slider->storeAs('images', $fullNameSlider, 'public');
                $products[] = ['title' => $request->title, 'slider_img' => $sliderPath];
            }
        }
        slider::insert($products);
    
        return to_route('slider.list');
    }
    public function index()
    {
        $sliders = slider::all();
        return view('admin.sliders.index' , ['sliders'=>$sliders]);
    }
    public function edit(slider $slider)
    {
        // dd($slider);
        return view('admin.sliders.edit' , ['slider'=>$slider]);
    }
    public function update(Request $request)
    {
        $slider = slider::find($request->id);
        $slider->title = $request->title;
        if (isset($request->sliders)) {
            foreach ($request->sliders as $slider) {
                $sliderName = $slider->getClientOriginalName();
                $fullNameSlider = Str::uuid() . "_" . $sliderName;
                $sliderPath = $slider->storeAs('images', $fullNameSlider, 'public');
                $products[] = ['title' => $request->title, 'slider_img' => $sliderPath];
            }
        }
        slider::insert($products);
        return to_route('slider.list');
    }
    public function delete(slider $slider)
    {
        Storage::disk('public')->delete($slider->slider_img);
        $slider->delete();
        return to_route('slider.list');
    }
}
