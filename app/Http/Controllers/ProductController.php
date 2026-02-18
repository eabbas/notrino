<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\category;
use App\Models\product;
use Illuminate\Support\Str;
use App\Models\media;
use App\Models\attribute;
use App\Models\product_category;
use Illuminate\Support\Facades\Storage;



class ProductController extends Controller
{
    public function create()
    {
        $categories = category::all();
        return view('admin.products.create' , ['categories'=>$categories]);
    }
    public function store(Request $request)
    {
       
        $productId = product::insertGetId([
            'title'=>$request->title ,
            'description'=>$request->description ,
            'summary'=>$request->summary,
            'price'=>$request->price,
            'discount'=>isset($request->discount) ? $request->discount : 0,
            'show_home' => isset($request->show_home) ? $request->show_home : 0,
        ]);
        if(isset($request->mainImage)){
            $type = $request->mainImage->getClientOriginalExtension();
            $name = $request->mainImage->getClientOriginalName();
            $fullName = Str::uuid() . "_" . $name;
            $path = $request->file('mainImage')->storeAs('images', $fullName, 'public');
            $products[] = ['product_id' => $productId, 'type' => $type, 'path' => $path, 'is_main' => 1];
            media::insert($products);
        }
        if(isset($request->gallery)){
            foreach ($request->gallery as $gallery) {
                $typeGallery = $gallery->getClientOriginalExtension();
                $nameGallery = $gallery->getClientOriginalName();
                $fullNameGallery = Str::uuid() . "_" . $nameGallery;
                $gallertPath = $gallery->storeAs('images', $fullNameGallery, 'public');
                $products[] = ['product_id' => $productId, 'type' => $typeGallery, 'path' => $gallertPath, 'is_main' => 0];
            }

            media::insert($products);
        }

        foreach ($request['attribute_keys'] as $key => $value) {
            attribute::create([
                'key' => $value,
                'value' => $request['attribute_units'][$key],
                'product_id' => $productId,
            ]);
        }
        foreach ($request->categories as $categoryId) {
            product_category::create([
                'product_id' => $productId,
                'category_id' => $categoryId
            ]);
        }
        return to_route('product.list');
    }

    public function index()
    {
       $products = product::all();
       $attributes = attribute::all();
       $proCats = product_category::all();
       $medias = media::all();
       $categories = category::all();
       return view('admin.products.index' , ['products'=>$products , 'attributes'=>$attributes , 'proCats'=>$proCats , 'medias'=>$medias , 'categories'=>$categories]);

    }

    public function show(product $product)
    {
       
        if (!$product) {
            return redirect()->route('product.list')->with('error', 'محصول مورد نظر یافت نشد');
        }

        $medias = media::where('product_id', $product->id)->get();
        $attributes = attribute::where('product_id', $product->id)->get();
        $productCategories = product_category::where('product_id', $product->id)->get();


        $categoryIds = $productCategories->pluck('category_id')->toArray();
        $categories = category::whereIn('id', $categoryIds)->get();


        $finalPrice = $product->price - ($product->price * $product->discount / 100);

   
        $mainImage = $medias->where('is_main', 1)->first();

       
        $gallery = $medias->where('is_main', 0);

        return view('admin.products.show', [
            'product'=>$product,
            'medias'=>$medias,
            'attributes'=>$attributes,
            'categories'=>$categories,
            'finalPrice'=>$finalPrice,
            'mainImage'=>$mainImage,
            'gallery'=>$gallery
        ]);
    }

    public function edit(product $product)
    {
        $categories = category::all();
        $medias = media::where('product_id', $product->id)->get();
        $attributes = attribute::where('product_id', $product->id)->get();
        $productCategories = product_category::where('product_id', $product->id)->pluck('category_id')->toArray();

        $mainImage = $medias->where('is_main', 1)->first();
        $gallery = $medias->where('is_main', 0);

        return view('admin.products.edit', [
            'product' => $product,
            'categories' => $categories,
            'medias' => $medias,
            'attributes' => $attributes,
            'productCategories' => $productCategories,
            'mainImage' => $mainImage,
            'gallery' => $gallery
        ]);
    }
    public function update(Request $request)
    {
        // dd($request->all());
        $product = product::find($request->product_id);
        // dd($product);
        $product->title = $request->title;
        $product->description = $request->description;
        $product->summary = $request->summary;
        $product->price = $request->price;
        $product->discount = $request->discount;
        $product->show_home = isset($request->show_home) ? 1 : 0;

        $product->save();

        if (isset($request->remove_main_image)) {
            $mainImage = media::where('product_id', $product->id)->where('is_main', 1)->first();
            if ($mainImage) {
                Storage::disk('public')->delete($mainImage->path);
                $mainImage->delete();
            }
        }

        if ($request->hasFile('mainImage')) {
            $oldMainImage = media::where('product_id', $product->id)->where('is_main', 1)->first();
            if ($oldMainImage) {
                Storage::disk('public')->delete($oldMainImage->path);
                $oldMainImage->delete();
            }

            $type = $request->mainImage->getClientOriginalExtension();
            $name = $request->mainImage->getClientOriginalName();
            $fullName = Str::uuid() . "_" . $name;
            $path = $request->file('mainImage')->storeAs('images', $fullName, 'public');

            media::create([
                'product_id' => $product->id,
                'type' => $type,
                'path' => $path,
                'is_main' => 1
            ]);
        }

        if (isset($request->remove_gallery)) {
            foreach ($request->remove_gallery as $mediaId) {
                $media = media::find($mediaId);
                if ($media) {
                    Storage::disk('public')->delete($media->path);
                    $media->delete();
                }
            }
        }

        if ($request->hasFile('gallery')) {
            $galleryData = [];
            foreach ($request->file('gallery') as $gallery) {
                $typeGallery = $gallery->getClientOriginalExtension();
                $nameGallery = $gallery->getClientOriginalName();
                $fullNameGallery = Str::uuid() . "_" . $nameGallery;
                $galleryPath = $gallery->storeAs('images', $fullNameGallery, 'public');

                $galleryData[] = [
                    'product_id' => $product->id,
                    'type' => $typeGallery,
                    'path' => $galleryPath,
                    'is_main' => 0,
                    'created_at' => now(),
                    'updated_at' => now()
                ];
            }

            if (!empty($galleryData)) {
                media::insert($galleryData);
            }
        }

        attribute::where('product_id', $product->id)->delete();

        if (isset($request->attribute_keys)) {
            foreach ($request->attribute_keys as $key => $value) {
                if (!empty($value) && !empty($request->attribute_units[$key])) {
                    attribute::create([
                        'key' => $value,
                        'value' => $request->attribute_units[$key],
                        'product_id' => $product->id,
                    ]);
                }
            }
        }

        product_category::where('product_id', $product->id)->delete();

        if (isset($request->categories)) {
            foreach ($request->categories as $categoryId) {
                product_category::create([
                    'product_id' => $product->id,
                    'category_id' => $categoryId
                ]);
            }
        }

        return redirect()->route('product.list')->with('success', 'محصول با موفقیت بروزرسانی شد.');
    }

    public function delete(product $product)
    {
        $medias = media::where('product_id', $product->id)->get();
        foreach ($medias as $media) {
            Storage::disk('public')->delete($media->path);
            $media->delete();
        }
        product_category::where('product_id', $product->id)->delete();
        attribute::where('product_id', $product->id)->delete();

        $product->delete();
        return redirect()->route('product.list')
            ->with('success', 'محصول با موفقیت حذف شد.');
    }
}

