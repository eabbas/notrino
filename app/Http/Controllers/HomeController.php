<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\brands;
use App\Models\category;
use App\Models\footer_express;
use App\Models\footer;
use App\Models\setting;
use App\Models\product;
use App\Models\attribute;
use App\Models\media;
use App\Models\slider;

class HomeController extends Controller
{
   public function index()
   {
      $brands = brands::all();
      $footer_expresses = footer_express::all();
      $footers = footer::all();
      $settings = setting::all();
      $products = product::all();
      $medias = media::all();
      $sliders = slider::all();

      // dd($settings);
      $categories = Category::with(['products' => function ($query) {
         $query->with(['medias', 'attributes']);
      }])->get();


      // // dd($categories);
      // foreach($categories as $category){
      //    foreach($category->products as $product){
      //       dd($product);
      //    }
      // }

      // foreach($products as $key=>$product){
      //    foreach($product->categories as $category){
      //       $product['catIds'][]=$category->id;
      //    }
      // }
      // dd($x);
    
      $attributes = attribute::all();
      foreach($settings as $setting){
         // dd($setting);
         $footerLogo = $setting->where('meta_key' , 'footerLogo')->first();
         $footerDescription = $setting->where('meta_key' , 'footerDescription')->first();
         $HeroBannerRight = $setting->where('meta_key' , 'mainPageRightHeroBanner')->get();
         $HeroBannerLeft = $setting->where('meta_key' , 'mainPageLeftHeroBanner')->get();
      }
      // dd($footerLogo);
      foreach($footers as $value){
         $footer['column_one'] = footer::where('column_id' , '1')->get();
         $footer['column_two'] = footer::where('column_id' , '2')->get();
         $footer['column_three'] = footer::where('column_id' , '3')->get();
         $footer['column_four'] = footer::where('column_id' , '4')->get();
         $footer['column_five'] = footer::where('column_id' , '5')->get();
         $footer['column_six'] = footer::where('column_id' , '6')->get();
         $footer['column_six'] = footer::where('column_id' , '6')->get();
         $footer['column_six_title'] = footer::select('column_title')->where('column_id' , '6')->first();
      }
   //   dd($footerInfo);
      return view("home" , 
      [
         'brands'=>$brands , 
         'footer_expresses'=> $footer_expresses ,
         'footer'=> $footer ,
         'sliders'=> $sliders ,
         'footerLogo'=> $footerLogo ,
         'footerDescription'=> $footerDescription ,
         'HeroBannerRight'=> $HeroBannerRight ,
         'HeroBannerLeft'=> $HeroBannerLeft ,
         'categories'=>$categories,
         'products'=>$products,
         'attributes'=>$attributes,
         'medias'=>$medias
      ]);
   }
}
