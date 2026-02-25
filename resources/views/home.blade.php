@extends('document')
@section('title', "فروشگاه نوترینو")
@section('content')
<div class="relative z-1 top-23 md:top-50">
  <!-- hero slider -->
  <section class="relative w-full">

    <div class="slider relative mx-auto w-[93%] md:w-[95%]">
      <svg class="absolute -left-2 rotate-180 top-7 z-10 w-auto hidden md:block" width="70" height="255" viewBox="0 0 76 285" fill="none" xmlns="http://www.w3.org/2000/svg">
        <g filter="url(#filter0_d_6_41)">
          <path d="M70 275V10C70 86 14 91.0878 14 142.752C14 194.416 70 201 70 275Z" fill="white"></path>
        </g>
        <defs>
          <filter id="filter0_d_6_41" x="0" y="0" width="76" height="285" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
            <feFlood flood-opacity="0" result="BackgroundImageFix"></feFlood>
            <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"></feColorMatrix>
            <feOffset dx="-4"></feOffset>
            <feGaussianBlur stdDeviation="5"></feGaussianBlur>
            <feComposite in2="hardAlpha" operator="out"></feComposite>
            <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.08 0"></feColorMatrix>
            <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_6_41"></feBlend>
            <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_6_41" result="shape"></feBlend>
          </filter>
        </defs>
      </svg>
      <svg class="absolute -right-2 top-7 z-10 w-auto hidden md:block" width="70" height="255" viewBox="0 0 76 285" fill="none" xmlns="http://www.w3.org/2000/svg">
        <g filter="url(#filter0_d_6_41)">
          <path d="M70 275V10C70 86 14 91.0878 14 142.752C14 194.416 70 201 70 275Z" fill="white"></path>
        </g>
        <defs>
          <filter id="filter0_d_6_41" x="0" y="0" width="76" height="285" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
            <feFlood flood-opacity="0" result="BackgroundImageFix"></feFlood>
            <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"></feColorMatrix>
            <feOffset dx="-4"></feOffset>
            <feGaussianBlur stdDeviation="5"></feGaussianBlur>
            <feComposite in2="hardAlpha" operator="out"></feComposite>
            <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.08 0"></feColorMatrix>
            <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_6_41"></feBlend>
            <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_6_41" result="shape"></feBlend>
          </filter>
        </defs>
      </svg>
      <a href="سیلام" class="slides">
        @if($sliders)
        @foreach ($sliders as $slider)
          <div class="slide object-cover w-full h-35 mx-auto md:h-[320px]">
            <img src="{{ asset('storage/'.$slider->slider_img) }}" class="w-full h-full object-cover" alt="">
          </div>
        @endforeach
        @endif
      </a>
      <button class="prev"></button>
      <button class="next"></button>
    </div>
  </section>
  <!-- category -->
  <section class="w-[93%] md:w-[95%] grid grid-cols-3 md:flex flex-wrap justify-center mx-auto gap-4 md:gap-8 mt-20">
    @if($categories)
    @foreach ($categories as $category)
    @if($category->parent_id == 0)
    @if(isset($category->image))
    <a href="" class="category flex flex-col flex justify-center items-center">
      <div class="category_it border-2 border-(--color-zinc-300) rounded-xl hover:border-(--color-primary-500) flex justify-center items-center h-[90px] md:h-[128px] w-[90px] md:w-[128px]">
        <img class="w-13 md:w-20 rounded-xl" src="{{ asset('storage/'.$category->image) }}" alt="">
      </div>
      <span class="md:p-2 text-xs md:text-base">{{ $category->title }}</span>
    </a>
    @endif
    @endif
    @endforeach
    @endif
  </section>
  <!-- filter products -->
  <section class="w-full mt-12 md:mt-20">
        <div class="w-[93%] md:w-[95%] mx-auto flex flex-col gap-4">
          <!-- filter btn -->
      <div class="bg-white px-15 pt-4 w-fit md:w-full hidden md:flex flex-col">
        <!-- filter btn -->
        <h2 class="">دسته بندی ها</h2>
        
        <!-- اسکرول اصلاح شده شبیه به بخش محصولات -->
        <div class="overflow-x-auto w-full
                    [&::-webkit-scrollbar]:h-1.5
                    [&::-webkit-scrollbar-track]:bg-zinc-100
                    [&::-webkit-scrollbar-thumb]:bg-(--color-primary-500)
                    [&::-webkit-scrollbar-thumb]:rounded-full">
            <ul class="flex gap-x-2 whitespace-nowrap pb-2">
                <li><button class="text-right px-4 py-2 rounded-lg text-(--color-primary-500) bg-zinc-100 hover:bg-zinc-200 cursor-pointer text-sm" id="all-categories-btn" data-cat-id="all">همه</button></li>
                
                @if($categories)
                @foreach ($categories as $category)
                    @if($category->parent_id == 0)
                    <li><button class="text-right px-4 py-2 rounded-lg hover:bg-zinc-100 hover:text-(--color-primary-500) cursor-pointer text-sm cats" data-cat-id="{{ $category->id }}">{{ $category->title }}</button></li>
                    @endif
                @endforeach
                @endif
                
                <li>
                    <button class="text-right px-4 py-2 rounded-lg cursor-pointer text-sm hover:text-(--color-primary-700) text-(--color-primary-500) flex items-center gap-x-1 group">
                        همه محصولات
                        <svg class="fill-(--color-primary-500) hover:fill-(--color-primary-700) group-hover:-translate-x-1 transition group-hover:fill-primary-500 size-2.5 md:size-3" xmlns="http://www.w3.org/2000/svg" width="" height="" fill="" viewBox="0 0 256 256">
                            <path d="M224,128a8,8,0,0,1-8,8H59.31l58.35,58.34a8,8,0,0,1-11.32,11.32l-72-72a8,8,0,0,1,0-11.32l72-72a8,8,0,0,1,11.32,11.32L59.31,120H216A8,8,0,0,1,224,128Z"></path>
                        </svg>
                    </button>
                </li>
            </ul>
        </div>
    </div>
      
      <!-- بخش همه محصولات -->
      <div class="overflow-x-auto w-full h-[350px] md:h-[460px] flex flex-row border border-(--color-zinc-100) rounded-xl bg-white mx-auto px-[16px] py-[32px] all-products-section
            [&::-webkit-scrollbar]:h-1.5
            [&::-webkit-scrollbar-track]:bg-zinc-100
            [&::-webkit-scrollbar-thumb]:bg-(--color-primary-500)
            [&::-webkit-scrollbar-thumb]:rounded-full">
        <div class="flex flex-row gap-3">
          @if($products)
          @foreach ($products as $product)
            @if($product->not_show_home == 0)
              <a href="{{ route('product.show' , [$product]) }}">
              <div class="w-[170px] md:w-[245px] h-[300px] md:h-[400px] text-sm border-1 border-(--color-zinc-300) rounded-2xl px-2 hover:shadow-lg transition hover:border-(--color-primary-500) flex flex-col">
                @if($medias)
                @php
                  $productMedia = $medias->where('product_id', $product->id)->first();
                @endphp
                @endif
                @if($productMedia)
                  <div class="flex items-center justify-center h-32 md:h-44 mt-2">
                    <img src="{{ asset('storage/'.$productMedia->path) }}" alt="{{ $product->title }}" class="rounded-xl max-h-full max-w-full object-contain">
                  </div>
                @endif
                <div class="mb-2 text-xs md:text-sm line-clamp-2 mt-10">{{ $product->title }}</div>
                <p class="text-[10px] md:text-xs text-(--color-zinc-500) line-clamp-2 mb-2">{{ $product->summary }}</p>
                <div class="flex flex-row justify-between items-center mt-auto">
                  <div class="flex gap-1">
                    @if($attributes)
                    @foreach ($attributes as $attribute)
                      @if($attribute->product_id == $product->id && $attribute->type == 'color')
                        <div class="w-3 md:w-4 h-3 md:h-4 rounded-full border border-zinc-200" style="background-color: {{ $attribute->value }};"></div>
                      @endif
                    @endforeach
                    @endif
                  </div>
                  <div class="flex items-center gap-0.5">
                    <span class="text-[9px] text-(--color-zinc-500)">(78)</span>
                    <span class="text-xs text-(--color-zinc-500)">4.4</span>
                    <span>
                      <svg class="fill-amber-400" xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 256 256">
                        <path d="M234.5,114.38l-45.1,39.36,13.51,58.6a16,16,0,0,1-23.84,17.34l-51.11-31-51,31a16,16,0,0,1-23.84-17.34L66.61,153.8,21.5,114.38a16,16,0,0,1,9.11-28.06l59.46-5.15,23.21-55.36a15.95,15.95,0,0,1,29.44,0h0L166,81.17l59.44,5.15a16,16,0,0,1,9.11,28.06Z"></path>
                      </svg>
                    </span>
                  </div>
                </div>
                <div class="border-t border-dashed border-(--color-zinc-200) flex justify-end items-center h-10 mt-2">
                  <span class="flex items-center text-sm gap-1">
                    {{ number_format($product->price) }}
                    <span class="text-[10px]">تومان</span>
                  </span>
                </div>
              </div>
              </a>
            @endif
          @endforeach
          @endif
        </div>
      </div>
      
      <!-- محصولات دسته‌بندی‌ها -->
      @if($categories)
      @foreach ($categories as $category)
      <div class="overflow-x-auto w-full h-[350px] md:h-[460px] flex flex-row border border-(--color-zinc-100) rounded-xl bg-white mx-auto px-[16px] py-[32px] category-section
            [&::-webkit-scrollbar]:h-1.5
            [&::-webkit-scrollbar-track]:bg-zinc-100
            [&::-webkit-scrollbar-thumb]:bg-(--color-primary-500)
            [&::-webkit-scrollbar-thumb]:rounded-full" data-category-id="{{ $category->id }}" style="display: none;">
        <div class="flex flex-row gap-3">
          @foreach ($category->products as $product)
            @if($product->not_show_home == 0)
            <a href="{{ route('product.show' , [$product]) }}">
              <div class="w-[170px] md:w-[245px] h-[300px] md:h-[400px] text-sm border-1 border-(--color-zinc-300) rounded-2xl px-2 hover:shadow-lg transition hover:border-(--color-primary-500) flex flex-col">
                @if($medias)
                @php
                  $productMedia = $medias->where('product_id', $product->id)->first();
                @endphp
                @endif
                @if($productMedia)
                  <div class="flex items-center justify-center h-32 md:h-44 mt-2">
                    <img src="{{ asset('storage/'.$productMedia->path) }}" alt="{{ $product->title }}" class="rounded-xl max-h-full max-w-full object-contain">
                  </div>
                @endif
                <div class="mb-2 text-xs md:text-sm line-clamp-2 mt-10">{{ $product->title }}</div>
                <p class="text-[10px] md:text-xs text-(--color-zinc-500) line-clamp-2 mb-2">{{ $product->summary }}</p>
                <div class="flex flex-row justify-between items-center mt-auto">
                  <div class="flex gap-1">
                    @if($attributes)
                    @foreach ($attributes as $attribute)
                      @if($attribute->product_id == $product->id && $attribute->type == 'color')
                        <div class="w-3 md:w-4 h-3 md:h-4 rounded-full border border-zinc-200" style="background-color: {{ $attribute->value }};"></div>
                      @endif
                    @endforeach
                    @endif
                  </div>
                  <div class="flex items-center gap-0.5">
                    <span class="text-[9px] text-(--color-zinc-500)">(78)</span>
                    <span class="text-xs text-(--color-zinc-500)">4.4</span>
                    <span>
                      <svg class="fill-amber-400" xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 256 256">
                        <path d="M234.5,114.38l-45.1,39.36,13.51,58.6a16,16,0,0,1-23.84,17.34l-51.11-31-51,31a16,16,0,0,1-23.84-17.34L66.61,153.8,21.5,114.38a16,16,0,0,1,9.11-28.06l59.46-5.15,23.21-55.36a15.95,15.95,0,0,1,29.44,0h0L166,81.17l59.44,5.15a16,16,0,0,1,9.11,28.06Z"></path>
                      </svg>
                    </span>
                  </div>
                </div>
                <div class="border-t border-dashed border-(--color-zinc-200) flex justify-end items-center h-10 mt-2">
                  <span class="flex items-center text-sm gap-1">
                    {{ number_format($product->price) }}
                    <span class="text-[10px]">تومان</span>
                  </span>
                </div>
              </div>
            </a>
            @endif
          @endforeach
        </div>
      </div>
      @endforeach
      @endif
    </div>
  </section>
  <!-- product slider 1 -->
  <section class="mt-20">
    <div class="w-[93%] md:w-[95%] flex justify-between items-center mx-auto">
      <span class="w-48 min-w-fit text-xs md:text-sm md:font-yekanBakhBold text-(--color-zinc-600)">محصولات پرفروش</span>
      <span class="h-[1px] w-full bg-gradient-to-r from-white via-(--color-zinc-500) to-white "></span>
      <div class="w-32 min-w-fit text-left">
        <a href="" class="text-sm hover:text-(--color-primary-500) text-(--color-zinc-600) flex fle items-center gap-x-1 group">
          مشاهده همه
          <svg class="fill-(--color-zinc-600) hover:fill-(--color-primary-500) group-hover:-translate-x-1 transition group-hover:fill-(--color-primary-500) size-2.5 md:size-3" xmlns="http://www.w3.org/2000/svg" width="" height="" fill="" viewBox="0 0 256 256">
            <path d="M224,128a8,8,0,0,1-8,8H59.31l58.35,58.34a8,8,0,0,1-11.32,11.32l-72-72a8,8,0,0,1,0-11.32l72-72a8,8,0,0,1,11.32,11.32L59.31,120H216A8,8,0,0,1,224,128Z"></path>
          </svg>
        </a>
      </div>
    </div>
    <div class="overflow-x-auto w-[93%] md:w-[95%] h-[350px] md:h-[460px] flex flex-row rounded-xl bg-white mx-auto px-[16px] py-[32px] border border-zinc-100 mt-4
            [&::-webkit-scrollbar]:h-1.5
            [&::-webkit-scrollbar-track]:bg-zinc-100
            [&::-webkit-scrollbar-thumb]:bg-(--color-primary-500)
            [&::-webkit-scrollbar-thumb]:rounded-full">
      <div class="flex flex-row gap-3">
        @if($products)
        @foreach ($products as $product)
          @if($product->not_show_home == 0)
          <a href="{{ route('product.show' , [$product]) }}">
            <div class="w-[170px] md:w-[245px] h-[300px] md:h-[400px] text-sm border-1 border-(--color-zinc-300) rounded-2xl px-2 hover:shadow-lg transition hover:border-(--color-primary-500) flex flex-col">
              @if($medias)
              @php
                $productMedia = $medias->where('product_id', $product->id)->first();
              @endphp
              @endif
              @if($productMedia)
                <div class="flex items-center justify-center h-32 md:h-44 mt-2">
                  <img src="{{ asset('storage/'.$productMedia->path) }}" alt="{{ $product->title }}" class="rounded-xl max-h-full max-w-full object-contain">
                </div>
              @endif
              <div class="mb-2 text-xs md:text-sm line-clamp-2 mt-10">{{ $product->title }}</div>
              <p class="text-[10px] md:text-xs text-(--color-zinc-500) line-clamp-2 mb-2">{{ $product->summary }}</p>
              <div class="flex flex-row justify-between items-center mt-auto">
                <div class="flex gap-1">
                  @if($attributes)
                  @foreach ($attributes as $attribute)
                    @if($attribute->product_id == $product->id && $attribute->type == 'color')
                      <div class="w-3 md:w-4 h-3 md:h-4 rounded-full border border-zinc-200" style="background-color: {{ $attribute->value }};"></div>
                    @endif
                  @endforeach
                  @endif
                </div>
                <div class="flex items-center gap-0.5">
                  <span class="text-[9px] text-(--color-zinc-500)">(78)</span>
                  <span class="text-xs text-(--color-zinc-500)">4.4</span>
                  <span>
                    <svg class="fill-amber-400" xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 256 256">
                      <path d="M234.5,114.38l-45.1,39.36,13.51,58.6a16,16,0,0,1-23.84,17.34l-51.11-31-51,31a16,16,0,0,1-23.84-17.34L66.61,153.8,21.5,114.38a16,16,0,0,1,9.11-28.06l59.46-5.15,23.21-55.36a15.95,15.95,0,0,1,29.44,0h0L166,81.17l59.44,5.15a16,16,0,0,1,9.11,28.06Z"></path>
                    </svg>
                  </span>
                </div>
              </div>
              <div class="border-t border-dashed border-(--color-zinc-200) flex justify-end items-center h-10 mt-2">
                <span class="flex items-center text-sm gap-1">
                  {{ number_format($product->price) }}
                  <span class="text-[10px]">تومان</span>
                </span>
              </div>
            </div>
          </a>
          @endif
        @endforeach
        @endif
      </div>
    </div>
  </section>
  <!-- 2 banner -->
  {{-- @dd($setting) --}}
  <section class="w-[93%] md:w-[95%] mx-auto flex flex-col md:flex-row gap-5 mt-20 p-5">
    @if($HeroBannerRight)
    @foreach ($HeroBannerRight as $rightBanner)
    <a href="" class="rounded-xl w-full md:w-1/2 overflow-hidden group">
      <img src="{{ asset('storage/'.$rightBanner->meta_value) }}" class="rounded-2xl w-full transition-transform duration-300 group-hover:scale-105" alt="">
    </a>
    @endforeach
    @endif
    @if($HeroBannerLeft)
    @foreach ($HeroBannerLeft as $leftBanner)
    <a href="" class="rounded-xl w-full md:w-1/2 overflow-hidden group">
      <img src="{{ asset('storage/'.$leftBanner->meta_value) }}" class="rounded-2xl w-full transition-transform duration-300 group-hover:scale-105" alt="">
    </a>
    @endforeach
    @endif
  </section>
  <!-- product slider 2 -->
    <section class="mt-20">
      <div class="w-[93%] md:w-[95%] flex justify-between items-center mx-auto">
        <span class="w-48 min-w-fit text-xs md:text-sm md:font-yekanBakhBold text-(--color-zinc-600)">جدید ترین محصولات</span>
        <span class="h-[1px] w-full bg-gradient-to-r from-white via-(--color-zinc-500) to-white "></span>
        <div class="w-32 min-w-fit text-left">
          <a href="" class="text-sm hover:text-(--color-primary-500) text-(--color-zinc-600) flex fle items-center gap-x-1 group">
            مشاهده همه
            <svg class="fill-(--color-zinc-600) hover:fill-(--color-primary-500) group-hover:-translate-x-1 transition group-hover:fill-(--color-primary-500) size-2.5 md:size-3" xmlns="http://www.w3.org/2000/svg" width="" height="" fill="" viewBox="0 0 256 256">
              <path d="M224,128a8,8,0,0,1-8,8H59.31l58.35,58.34a8,8,0,0,1-11.32,11.32l-72-72a8,8,0,0,1,0-11.32l72-72a8,8,0,0,1,11.32,11.32L59.31,120H216A8,8,0,0,1,224,128Z"></path>
            </svg>
          </a>
        </div>
      </div>
      <div class="overflow-x-auto w-[93%] md:w-[95%] h-[350px] md:h-[460px] flex flex-row rounded-xl bg-white mx-auto px-[16px] py-[32px] border border-zinc-100 mt-4
              [&::-webkit-scrollbar]:h-1.5
              [&::-webkit-scrollbar-track]:bg-zinc-100
              [&::-webkit-scrollbar-thumb]:bg-(--color-primary-500)
              [&::-webkit-scrollbar-thumb]:rounded-full">
        <div class="flex flex-row gap-3">
          @if($products)
          @foreach ($products as $product)
            @if($product->not_show_home == 0)
            <a href="{{ route('product.show' , [$product]) }}">
              <div class="w-[170px] md:w-[245px] h-[300px] md:h-[400px] text-sm border-1 border-(--color-zinc-300) rounded-2xl px-2 hover:shadow-lg transition hover:border-(--color-primary-500) flex flex-col">
                @if($medias)
                @php
                  $productMedia = $medias->where('product_id', $product->id)->first();
                @endphp
                @endif
                @if($productMedia)
                  <div class="flex items-center justify-center h-32 md:h-44 mt-2">
                    <img src="{{ asset('storage/'.$productMedia->path) }}" alt="{{ $product->title }}" class="rounded-xl max-h-full max-w-full object-contain">
                  </div>
                @endif
                <div class="mb-2 text-xs md:text-sm line-clamp-2 mt-10">{{ $product->title }}</div>
                <p class="text-[10px] md:text-xs text-(--color-zinc-500) line-clamp-2 mb-2">{{ $product->summary }}</p>
                <div class="flex flex-row justify-between items-center mt-auto">
                  <div class="flex gap-1">
                    @if($attributes)
                    @foreach ($attributes as $attribute)
                      @if($attribute->product_id == $product->id && $attribute->type == 'color')
                        <div class="w-3 md:w-4 h-3 md:h-4 rounded-full border border-zinc-200" style="background-color: {{ $attribute->value }};"></div>
                      @endif
                    @endforeach
                    @endif
                  </div>
                  <div class="flex items-center gap-0.5">
                    <span class="text-[9px] text-(--color-zinc-500)">(78)</span>
                    <span class="text-xs text-(--color-zinc-500)">4.4</span>
                    <span>
                      <svg class="fill-amber-400" xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 256 256">
                        <path d="M234.5,114.38l-45.1,39.36,13.51,58.6a16,16,0,0,1-23.84,17.34l-51.11-31-51,31a16,16,0,0,1-23.84-17.34L66.61,153.8,21.5,114.38a16,16,0,0,1,9.11-28.06l59.46-5.15,23.21-55.36a15.95,15.95,0,0,1,29.44,0h0L166,81.17l59.44,5.15a16,16,0,0,1,9.11,28.06Z"></path>
                      </svg>
                    </span>
                  </div>
                </div>
                <div class="border-t border-dashed border-(--color-zinc-200) flex justify-end items-center h-10 mt-2">
                  <span class="flex items-center text-sm gap-1">
                    {{ number_format($product->price) }}
                    <span class="text-[10px]">تومان</span>
                  </span>
                </div>
              </div>
            </a>
            @endif
          @endforeach
          @endif
        </div>
      </div>
    </section>
  <!-- brands -->
  <section class="mt-20">
    <!-- top slider -->
    <div class="w-[93%] md:w-[95%] flex items-center mx-auto">
      <span class="w-48 min-w-fit text-zinc-700 text-xl md:text-sm md:font-yekanBakhBold"> برند ها</span>
      <span class="h-[1px] w-full bg-gradient-to-r from-white via-(--color-zinc-500) to-white "></span>
      <div class="w-32 min-w-fit text-left">
        <a href="" class="text-sm hover:text-(--color-primary-500) text-(--color-zinc-600) flex fle items-center gap-x-1 group">
          مشاهده همه
          <svg class="fill-(--color-zinc-600) hover:fill-(--color-primary-500) group-hover:-translate-x-1 transition group-hover:fill-(--color-primary-500) size-2.5 md:size-3" xmlns="http://www.w3.org/2000/svg" width="" height="" fill="" viewBox="0 0 256 256">
            <path d="M224,128a8,8,0,0,1-8,8H59.31l58.35,58.34a8,8,0,0,1-11.32,11.32l-72-72a8,8,0,0,1,0-11.32l72-72a8,8,0,0,1,11.32,11.32L59.31,120H216A8,8,0,0,1,224,128Z"></path>
          </svg>
        </a>
      </div>
    </div>
    <!-- main slider -->
    <div class="w-[93%] md:w-[95%] mx-auto mt-4">
      <div class="overflow-x-auto px-4 py-6 bg-white rounded-xl border border-zinc-100
            [&::-webkit-scrollbar]:h-1.5
            [&::-webkit-scrollbar-track]:bg-zinc-100
            [&::-webkit-scrollbar-thumb]:bg-(--color-primary-500)
            [&::-webkit-scrollbar-thumb]:rounded-full">
        <div class="flex flex-row gap-6">
          @if($brands)
          @foreach ($brands as $brand)
            <a href="" class="flex flex-col items-center gap-2 min-w-[120px] md:min-w-[150px] group">
              <div class="w-24 h-24 md:w-32 md:h-32 flex items-center justify-center p-3 border border-zinc-200 rounded-2xl group-hover:border-(--color-primary-500) group-hover:shadow-lg transition-all">
                <img src="{{ asset('storage/'.$brand->image) }}" alt="{{ $brand->title }}" class="max-w-full max-h-full object-contain">
              </div>
              <p class="text-sm text-zinc-700 group-hover:text-(--color-primary-500)">{{ $brand->title }}</p>
            </a>
          @endforeach
          @endif
        </div>
      </div>
    </div>
  </section>
  <!-- blog (کامنت شده) -->
  
</div>

<!-- اسکریپت برای فیلتر دسته‌بندی‌ها -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    const filterButtons = document.querySelectorAll('.cats');
    const allButton = document.getElementById('all-categories-btn');
    const allProductsSection = document.querySelector('.all-products-section');
    const categorySections = document.querySelectorAll('.category-section');
    
    if (allButton) {
        allButton.addEventListener('click', function() {
            allProductsSection.style.display = 'block';
            categorySections.forEach(section => {
                section.style.display = 'none';
            });
            
            // آپدیت استایل دکمه‌ها
            filterButtons.forEach(btn => {
                btn.classList.remove('text-(--color-primary-500)', 'bg-zinc-100');
            });
            allButton.classList.add('text-(--color-primary-500)', 'bg-zinc-100');
        });
    }
    
    filterButtons.forEach(btn => {
        btn.addEventListener('click', function() {
            const catId = this.getAttribute('data-cat-id');
            
            allProductsSection.style.display = 'none';
            categorySections.forEach(section => {
                if (section.getAttribute('data-category-id') == catId) {
                    section.style.display = 'block';
                } else {
                    section.style.display = 'none';
                }
            });
            
            // آپدیت استایل دکمه‌ها
            filterButtons.forEach(btn => {
                btn.classList.remove('text-(--color-primary-500)', 'bg-zinc-100');
            });
            allButton.classList.remove('text-(--color-primary-500)', 'bg-zinc-100');
            this.classList.add('text-(--color-primary-500)', 'bg-zinc-100');
        });
    });
});
</script>
    
@endsection