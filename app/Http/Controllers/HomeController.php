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
use App\Models\carts;
use Illuminate\Support\Facades\Auth;

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
      $cartCount = 0;
      $userCart = null;
      if (isset(Auth::user()->carts)) {
         foreach (Auth::user()->carts as $cart) {
            $userCart = carts::where('product_id', $cart->product_id)->where('user_id', Auth::id())->where('order_id', null)->first();
         }
         if ($userCart) {
            $cartCount += $userCart->quantity;
         }
      }
      // dd(Auth::user()->carts);
    $categories = Category::with(['products' => function ($query) {
        $query->with(['medias', 'attributes']);
    }])->where('id', '!=', 1)->get();
     
      
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
      return view("home" , 
      [
         'brands'=>isset($brands) ? $brands : null , 
         'sliders'=> isset($sliders) ? $sliders : null ,
         'footer_expresses'=> isset($footer_expresses) ? $footer_expresses : null ,
         'footer'=> isset($footer) ? $footer : null ,
         'footerLogo'=> isset($footerLogo) ? $footerLogo : null ,
         'footerDescription'=> isset($footerDescription) ?  $footerDescription : null,
         'HeroBannerRight'=> isset($HeroBannerRight) ?  $HeroBannerRight : null,
         'HeroBannerLeft'=> isset($HeroBannerLeft) ? $HeroBannerLeft : null,
         'categories'=>isset($categories) ? $categories : null,
         'products'=>isset($products) ? $products : null,
         'attributes'=>isset($attributes) ? $attributes : null,
         'medias'=>isset($medias) ? $medias : null,
         'cartCount' => $cartCount,
         'userCart' => $userCart
      ]);
   }
   //   public function search(Request $request)
   //    {

   //       if (!$request->search) {

   //          $request->search = '';
   //       }
   //       $datas = [];
   //       $datas['title'] = $request->search;
   //       $datas['product'] = product::where('title', 'like', "%" . $request->search . "%")->paginate('3');

   //       $brands = brands::all();
   //       $footer_expresses = footer_express::all();
   //       $footers = footer::all();
   //       $settings = setting::all();
   //       $products = product::all();
   //       $medias = media::all();
   //       $sliders = slider::all();

   //       $categories = Category::with(['products' => function ($query) {
   //          $query->with(['medias', 'attributes']);
   //       }])->get();

   //       $attributes = attribute::all();
   //       foreach ($settings as $setting) {
   //          // dd($setting);
   //          $footerLogo = $setting->where('meta_key', 'footerLogo')->first();
   //          $footerDescription = $setting->where('meta_key', 'footerDescription')->first();
   //          $HeroBannerRight = $setting->where('meta_key', 'mainPageRightHeroBanner')->get();
   //          $HeroBannerLeft = $setting->where('meta_key', 'mainPageLeftHeroBanner')->get();
   //       }
   //       foreach ($footers as $value) {
   //          $footer['column_one'] = footer::where('column_id', '1')->get();
   //          $footer['column_two'] = footer::where('column_id', '2')->get();
   //          $footer['column_three'] = footer::where('column_id', '3')->get();
   //          $footer['column_four'] = footer::where('column_id', '4')->get();
   //          $footer['column_five'] = footer::where('column_id', '5')->get();
   //          $footer['column_six'] = footer::where('column_id', '6')->get();
   //          $footer['column_six'] = footer::where('column_id', '6')->get();
   //          $footer['column_six_title'] = footer::select('column_title')->where('column_id', '6')->first();
   //       }
   //       return view('client.search.index', [
   //          'datas' => $datas, 
   //          'searchTitle' => $request->search ,
   //          'brands' => isset($brands) ? $brands : null,
   //          'sliders' => isset($sliders) ? $sliders : null,
   //          'footer_expresses' => isset($footer_expresses) ? $footer_expresses : null,
   //          'footer' => isset($footer) ? $footer : null,
   //          'footerLogo' => isset($footerLogo) ? $footerLogo : null,
   //          'footerDescription' => isset($footerDescription) ?  $footerDescription : null,
   //          'HeroBannerRight' => isset($HeroBannerRight) ?  $HeroBannerRight : null,
   //          'HeroBannerLeft' => isset($HeroBannerLeft) ? $HeroBannerLeft : null,
   //          'categories' => isset($categories) ? $categories : null,
   //          'products' => isset($products) ? $products : null,
   //          'attributes' => isset($attributes) ? $attributes : null,
   //          'medias' => isset($medias) ? $medias : null
   //          ]);
   //    }
   public function search(Request $request)
   {
      if (!$request->search) {
         $request->search = '';
      }

      $datas = [];

      if ($request->search != '') {
         $datas['title'] = $request->search;
      } elseif (isset($request->category) && $request->category != '') {
         $category = Category::find($request->category);
         $datas['title'] = $category ? $category->title : '';
      } else {
         $datas['title'] = '';
      }

      $productQuery = product::where('title', 'like', "%" . $request->search . "%");

      if (isset($request->category) && $request->category != '') {
         $productQuery->whereHas('categories', function ($query) use ($request) {
            $query->where('category_id', $request->category);
         });
         $datas['category_id'] = $request->category;
      }

      $datas['product'] = $productQuery->paginate(3);

      
      $brands = brands::all();
      $footer_expresses = footer_express::all();
      $footers = footer::all();
      $settings = setting::all();
      $products = product::all();
      $medias = media::all();
      $sliders = slider::all();

      $categories = Category::with(['products' => function ($query) {
         $query->with(['medias', 'attributes']);
      }])->get();

      $attributes = attribute::all();

      foreach ($settings as $setting) {
         $footerLogo = $setting->where('meta_key', 'footerLogo')->first();
         $footerDescription = $setting->where('meta_key', 'footerDescription')->first();
         $HeroBannerRight = $setting->where('meta_key', 'mainPageRightHeroBanner')->get();
         $HeroBannerLeft = $setting->where('meta_key', 'mainPageLeftHeroBanner')->get();
      }

      foreach ($footers as $value) {
         $footer['column_one'] = footer::where('column_id', '1')->get();
         $footer['column_two'] = footer::where('column_id', '2')->get();
         $footer['column_three'] = footer::where('column_id', '3')->get();
         $footer['column_four'] = footer::where('column_id', '4')->get();
         $footer['column_five'] = footer::where('column_id', '5')->get();
         $footer['column_six'] = footer::where('column_id', '6')->get();
         $footer['column_six_title'] = footer::select('column_title')->where('column_id', '6')->first();
      }

      return view('client.search.index', [
         'datas' => $datas,
         'searchTitle' => $request->search,
         'selectedCategory' => isset($request->category) ? $request->category : null,
         'brands' => isset($brands) ? $brands : null,
         'sliders' => isset($sliders) ? $sliders : null,
         'footer_expresses' => isset($footer_expresses) ? $footer_expresses : null,
         'footer' => isset($footer) ? $footer : null,
         'footerLogo' => isset($footerLogo) ? $footerLogo : null,
         'footerDescription' => isset($footerDescription) ? $footerDescription : null,
         'HeroBannerRight' => isset($HeroBannerRight) ? $HeroBannerRight : null,
         'HeroBannerLeft' => isset($HeroBannerLeft) ? $HeroBannerLeft : null,
         'categories' => isset($categories) ? $categories : null,
         'products' => isset($products) ? $products : null,
         'attributes' => isset($attributes) ? $attributes : null,
         'medias' => isset($medias) ? $medias : null
      ]);
   }
   public function filter(Request $request)
   {
      $datas = [];

      if (isset($request->category_id) && $request->category_id != '') {
         $category = Category::find($request->category_id);
         $datas['products'] = product::with('medias')
            ->whereHas('categories', function ($query) use ($request) {
               $query->where('category_id', $request->category_id);
            })
            ->get();
         $datas['title'] = $category ? $category->title : '';
      } elseif (isset($request->dataTitle) && $request->dataTitle != '') {
         $category = category::where('title', 'like', "%" . $request->dataTitle . "%")->first();

         if ($category) {
            $datas['products'] = product::with('medias')
               ->whereHas('categories', function ($query) use ($category) {
                  $query->where('category_id', $category->id);
               })
               ->get();
            $datas['title'] = $category->title;
         } else {
            $datas['products'] = product::whereNotNull('id')->get();
            $datas['title'] = $request->dataTitle;
         }

         $datas['categories'] = category::whereNotNull('id')->get();

      } else {
         $datas['products'] = product::whereNotNull('id')->get();
         $datas['title'] = 'همه محصولات';
      }

      return response()->json([
         'products' => $datas['products'],
         'categories' => $datas['categories'] ?? category::whereNotNull('id')->get(), 
         'category_title' => $datas['title'] ?? null
      ]);
   }
   public function filterBrand(Request $request)
   {
      $brands = $request->selectedBrands ?? [];
      $searchTitle = $request->searchTitle;

      $query = Product::with('medias');


      if (!empty($searchTitle)) {
         $query->where('title', 'like', '%' . $searchTitle . '%');
      }


      if (!empty($brands)) {
         $query->whereIn('brand_id', $brands);
      }

      $datas['products'] = $query->get();
      $datas['brands'] = !empty($brands) ? brands::whereIn('id', $brands)->get() : [];

      return response()->json($datas);
   }

}
