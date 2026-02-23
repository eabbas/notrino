<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\contactUs;
use App\Models\category;
use App\Models\attribute;
use App\Models\setting;
use App\Models\brands;
use App\Models\footer;
use App\Models\product;
use App\Models\media;
use App\Models\slider;
use App\Models\footer_express;

class ContactUsController extends Controller
{
    public function create()
    {
        $contactUs = contactUs::all();
        // dd($contactUs);
        return view('admin.contactUs.create' , ['contactUs'=> $contactUs]);
    }
    public function store(Request $request)
    {
        // dd($request->all());
        contactUs::create([
            'title'=>$request->title,
            'description'=>$request->description
        ]);
       return to_route('contactUs.list');
    }
    public function index()
    {
        $contactUs = contactUs::all();
        return view('admin.contactUs.index' , ['contactUs'=>$contactUs]);
    }
    public function edit(contactUs $contact)
    {
        // dd($contact);
        return view('admin.contactUs.edit' , ['contact'=>$contact]);
    }
    public function update(Request $request)
    {
        $contactUs = contactUs::find($request->id);
        $contactUs->title = $request->title;
        $contactUs->description = $request->description;

        $contactUs->save();
        return to_route('contactUs.list');
    }
    public function delete(contactUs $contact)
    {
        $contact->delete();
        return to_route('contactUs.list');
    }
    public function userIndex()
    {
        $brands = brands::all();
        $footer_expresses = footer_express::all();
        $footers = footer::all();
        $settings = setting::all();
        $products = product::all();
        $medias = media::all();
        $sliders = slider::all();
        $contactUs = contactUs::all();

        $categories = Category::with(['products' => function ($query) {
            $query->with(['medias', 'attributes']);
        }])->get();

        $attributes = attribute::all();
        foreach ($settings as $setting) {
            // dd($setting);
            $footerLogo = $setting->where('meta_key', 'footerLogo')->first();
            $footerDescription = $setting->where('meta_key', 'footerDescription')->first();
            $HeroBannerRight = $setting->where('meta_key', 'mainPageRightHeroBanner')->get();
            $HeroBannerLeft = $setting->where('meta_key', 'mainPageLeftHeroBanner')->get();
        }
        // dd($footerLogo);
        foreach ($footers as $value) {
            $footer['column_one'] = footer::where('column_id', '1')->get();
            $footer['column_two'] = footer::where('column_id', '2')->get();
            $footer['column_three'] = footer::where('column_id', '3')->get();
            $footer['column_four'] = footer::where('column_id', '4')->get();
            $footer['column_five'] = footer::where('column_id', '5')->get();
            $footer['column_six'] = footer::where('column_id', '6')->get();
            $footer['column_six'] = footer::where('column_id', '6')->get();
            $footer['column_six_title'] = footer::select('column_title')->where('column_id', '6')->first();
        }




        return view('client.contactUs.index',
        [
            'brands' => isset($brands) ? $brands : null,
            'sliders' => isset($sliders) ? $sliders : null,
            'footer_expresses' => isset($footer_expresses) ? $footer_expresses : null,
            'footer' => isset($footer) ? $footer : null,
            'footerLogo' => isset($footerLogo) ? $footerLogo : null,
            'footerDescription' => isset($footerDescription) ?  $footerDescription : null,
            'HeroBannerRight' => isset($HeroBannerRight) ?  $HeroBannerRight : null,
            'HeroBannerLeft' => isset($HeroBannerLeft) ? $HeroBannerLeft : null,
            'categories' => isset($categories) ? $categories : null,
            'products' => isset($products) ? $products : null,
            'attributes' => isset($attributes) ? $attributes : null,
            'contactUs' => isset($contactUs) ? $contactUs : null,
        ]);
    }
}
