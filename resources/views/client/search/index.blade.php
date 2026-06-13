{{-- @extends('document')
@section('title', 'نوترینو | جست و جو')
@section('content')
    <div class="relative z-2 pt-24 md:pt-48 px-2 md:px-10">
      <section class="text-lg md:text-3xl text-zinc-800 px-4 md:px-20 pb-6 pt-5 md:py-2">
        <input type="hidden" id="searchTitle" value="{{ $searchTitle }}">
            
            نتایج مرتبط با
                "{{ $datas['title'] }}"
        
         
      </section>
      <section class="flex flex-col lg:flex-row md:px-8 md:mt-10 gap-5">
      <!-- filters -->
        <div class="lg:w-3/12">
          <div class="mx-auto">
            <a href="#selectCategory" onclick="filterclick('open',this)" class="md:hidden border border-zinc-200 bg-(--color-primary-500) fixed p-4 bottom-5 right-5 z-10 rounded-2xl">
              <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#fff" viewBox="0 0 256 256"><path d="M230.6,49.53A15.81,15.81,0,0,0,216,40H40A16,16,0,0,0,28.19,66.76l.08.09L96,139.17V216a16,16,0,0,0,24.87,13.32l32-21.34A16,16,0,0,0,160,194.66V139.17l67.74-72.32.08-.09A15.8,15.8,0,0,0,230.6,49.53ZM40,56h0Zm106.18,74.58A8,8,0,0,0,144,136v58.66L112,216V136a8,8,0,0,0-2.16-5.47L40,56H216Z"></path></svg>
            </a>
            <div id="closeFilter" class="fixed bottom-full right-4 z-50 my-auto border border-(--color-primary-500) rounded-lg bg-white gap-x-4 px-3 pt-1 w-[90%] h-100 md:w-full flex md:hidden flex-col mx-auto">
              <button  onclick="filterclick('close',this)" type="button" class="md:hidden mb-4 text-(--color-zinc-400) cursor-pointer bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 inline-flex items-center">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>  
              </button>
              <div class="menu mt-3 border border-(--color-zinc-100) h-fit rounded-2xl py-2 hover:shadow-sm transition-all">
                <button class="menub flex items-center justify-between w-full py-3 px-4 rounded-2xl cursor-pointer">
                  <span class="text-(--color-zinc-700) text-sm">دسته بندی</span>
                  <svg  class="transition-all duration-300 fill-(--color-zinc-600)" xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="#000000" viewBox="0 0 256 256">
                    <path d="M213.66,101.66l-80,80a8,8,0,0,1-11.32,0l-80-80A8,8,0,0,1,53.66,90.34L128,164.69l74.34-74.35a8,8,0,0,1,11.32,11.32Z"></path>
                  </svg>
                </button>
                <ul class="submenu transition-all duration-300 overflow-hidden max-h-0 mt-2">
                  <li>
                    <button class="text-xs flex justify-between w-full py-2 px-4 text-(--color-zinc-700)">
                      <a href="">طراحی گرافیک</a>
                    </button>
                  </li>
                  <li>
                    <button class="text-xs flex justify-between w-full py-2 px-4 text-(--color-zinc-700)">
                      <a href="">طراحی گرافیک</a>
                    </button>
                  </li>
                  <li>
                    <button class="text-xs flex justify-between w-full py-2 px-4 text-(--color-zinc-700)">
                      <a href="">طراحی گرافیک</a>
                    </button>
                  </li>
                  <li>
                    <button class="text-xs flex justify-between w-full py-2 px-4 text-(--color-zinc-700)">
                      <a href="">طراحی گرافیک</a>
                    </button>
                  </li>
                  <li>
                    <button class="text-xs flex justify-between w-full py-2 px-4 text-(--color-zinc-700)">
                      <a href="">طراحی گرافیک</a>
                    </button>
                  </li>
                  <li>
                    <button class="text-xs flex justify-between w-full py-2 px-4 text-(--color-zinc-700)">
                      <a href="">طراحی گرافیک</a>
                    </button>
                  </li>
                </ul>
              </div>
              <div class="menu mt-3 border border-(--color-zinc-100) h-fit rounded-2xl py-2 hover:shadow-sm transition-all">
                <button class="menub flex items-center justify-between w-full py-3 px-4 rounded-2xl cursor-pointer">
                  <span class="text-(--color-zinc-700) text-sm">برند ها</span>
                  <svg class="menubbb transition-all duration-300 fill-(--color-zinc-600)" xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="#000000" viewBox="0 0 256 256">
                    <path d="M213.66,101.66l-80,80a8,8,0,0,1-11.32,0l-80-80A8,8,0,0,1,53.66,90.34L128,164.69l74.34-74.35a8,8,0,0,1,11.32,11.32Z"></path>
                  </svg>
                </button>
                <ul class="submenu transition-all duration-300 overflow-hidden max-h-0 mt-2">
                  <li>
                    <div class="flex w-full items-center gap-x-2 py-1 px-4">
                      <input id="c1" type="checkbox" value="" class="h-4 w-4 accent-(--color-primary-500) cursor-pointer rounded-xl border-gray-300 bg-gray-100">
                      <label for="c1" class="w-full cursor-pointer py-2 pl-4 text-(--color-zinc-600) text-xs">
                        <span>
                          کالای دیجیتال
                        </span>
                      </label>
                    </div>
                  </li>
                  <li>
                    <div class="flex w-full items-center gap-x-2 py-1 px-4">
                      <input id="c2" type="checkbox" value="" class="h-4 w-4 accent-(--color-primary-500) cursor-pointer rounded-xl border-gray-300 bg-gray-100">
                      <label for="c2" class="w-full cursor-pointer py-2 pl-4 text-(--color-zinc-600) text-xs">
                        <span>
                          کالای دیجیتال
                        </span>
                      </label>
                    </div>
                  </li>
                  <li>
                    <div class="flex w-full items-center gap-x-2 py-1 px-4">
                      <input id="c3" type="checkbox" value="" class="h-4 w-4 accent-(--color-primary-500) cursor-pointer rounded-xl border-gray-300 bg-gray-100">
                      <label for="c3" class="w-full cursor-pointer py-2 pl-4 text-(--color-zinc-600) text-xs">
                        <span>
                          کالای دیجیتال
                        </span>
                      </label>
                    </div>
                  </li>
                  <li>
                    <div class="flex w-full items-center gap-x-2 py-1 px-4">
                      <input id="c4" type="checkbox" value="" class="h-4 w-4 accent-(--color-primary-500) cursor-pointer rounded-xl border-gray-300 bg-gray-100">
                      <label for="c4" class="w-full cursor-pointer py-2 pl-4 text-(--color-zinc-600) text-xs">
                        <span>
                          کالای دیجیتال
                        </span>
                      </label>
                    </div>
                  </li>
                  <li>
                    <div class="flex w-full items-center gap-x-2 py-1 px-4">
                      <input id="c5" type="checkbox" value="" class="h-4 w-4 accent-(--color-primary-500) cursor-pointer rounded-xl border-gray-300 bg-gray-100">
                      <label for="c5" class="w-full cursor-pointer py-2 pl-4 text-(--color-zinc-600) text-xs">
                        <span>
                          کالای دیجیتال
                        </span>
                      </label>
                    </div>
                  </li>
                </ul>
              </div>
              <div class="menu mt-3 border border-(--color-zinc-100) h-fit rounded-2xl py-2 hover:shadow-sm transition-all">
                <button class="menub flex justify-between w-full py-3 px-4 rounded-2xl cursor-pointer">
                  <span class="text-(--color-zinc-700) text-sm">فیلتر بر اساس قیمت</span>
                  <svg class="menubbb transition-all duration-300 fill-(--color-zinc-600)" xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="#000000" viewBox="0 0 256 256"><path d="M213.66,101.66l-80,80a8,8,0,0,1-11.32,0l-80-80A8,8,0,0,1,53.66,90.34L128,164.69l74.34-74.35a8,8,0,0,1,11.32,11.32Z"></path></svg>
                </button>
                <ul class="submenu transition-all duration-300 overflow-hidden max-h-0 mt-2">
                  <div class="space-y-4 px-6">
                    <div id="shop-price-slider"></div>
                    <div class="flex items-center justify-between">
                      <div
                        class="text-(--color-primary-400)">
                        <span
                          class="text-xs font-semibold xl:text-sm"
                          id="shop-price-slider-min">
                        </span>
                        <span class="text-xs">تومان</span>
                      </div>
                      <div
                        class="text-(--color-primary-400)">
                        <span
                          class="text-xs font-semibold xl:text-sm"
                          id="shop-price-slider-max">
                        </span>
                        <span class="text-xs">تومان</span>
                      </div>
                    </div>
                  </div>
                </ul>
              </div>
              <label class="border border-(--color-zinc-100) h-fit rounded-2xl hover:shadow-sm transition-all flex justify-between w-full py-5 px-4 cursor-pointer" for="onlyAvailableDesktope">
                <div class="text-(--color-zinc-700) text-sm">
                  فقط کالا های موجود
                </div>
                <div class="relative inline-flex cursor-pointer items-center">
                  <input class="peerrr sr-only" id="onlyAvailableDesktope" type="checkbox">
                  <div class="peerrr h-6 w-11 rounded-full bg-gray-200 after:absolute after:left-[2px] after:top-0.5 after:h-5 after:w-5 after:rounded-full after:bg-white after:transition-all after:content-[''] peer-checked:bg-(--color-primary-400) peer-checked:after:translate-x-full peer-focus:ring-(--color-primary-400)"></div>
                </div>
              </label>
            </div>
          </div>
          <div class="hidden md:block space-y-5 transform translate-y-full md:translate-y-0 transition-transform duration-300 ease-in-out bg-white pb-5">
            <div class="menu border-1 border-(--color-zinc-100) h-fit rounded-2xl py-3 hover:shadow-sm transition-all">
                <div class="svg flex items-center justify-between text-center cursor-pointer px-5 text-sm dashboard">
                 دسته بندی ها
                  <svg class="transition-all duration-300 fill-zinc-600" xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="#000000" viewBox="0 0 256 256">
                    <path d="M213.66,101.66l-80,80a8,8,0,0,1-11.32,0l-80-80A8,8,0,0,1,53.66,90.34L128,164.69l74.34-74.35a8,8,0,0,1,11.32,11.32Z"></path>
                  </svg>
                </div>
                <ul class="labal_3-3 w-full px-3 py-1 bg-white mt-3 flex flex-col transition-all duration-300 max-h-0 overflow-hidden">
                  @if($categories)
                @foreach ($categories as $category)
                    @if($category->parent_id == 0)
                    <li class="border-t border-t-gray-300 py-2 my-1.5"><button class="text-right px-4 py-2 rounded-lg hover:bg-zinc-100 hover:text-(--color-primary-500) cursor-pointer text-sm cats" data-title="{{ $category->title }}">{{ $category->title }}</button></li>
                    @endif
                @endforeach
                @endif
                </ul>
            </div>
            {{-- <div class="menu border-1 border-(--color-zinc-100) h-fit rounded-2xl py-2 hover:shadow-sm transition-all">
              <button class="menub flex items-center justify-between w-full py-3 px-4 rounded-2xl cursor-pointer">
                <span class="text-(--color-zinc-700) text-sm">برند ها</span>
                <svg class="menubbb transition-all duration-300 fill-(--color-zinc-600)" xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="#000000" viewBox="0 0 256 256">
                  <path d="M213.66,101.66l-80,80a8,8,0,0,1-11.32,0l-80-80A8,8,0,0,1,53.66,90.34L128,164.69l74.34-74.35a8,8,0,0,1,11.32,11.32Z"></path>
                </svg>
              </button>
              <ul class="submenu transition-all duration-300 overflow-hidden max-h-0 mt-2">
                <li>
                  <div class="flex w-full items-center gap-x-2 py-1 px-4">
                    <input id="c1" type="checkbox" value="" class="h-4 w-4 accent-(--color-primary-500) cursor-pointer rounded-xl border-gray-300 bg-gray-100">
                    <label for="c1" class="w-full cursor-pointer py-2 pl-4 text-(--color-zinc-600) text-xs">
                      <span>
                        کالای دیجیتال
                      </span>
                    </label>
                  </div>
                </li>
                <li>
                  <div class="flex w-full items-center gap-x-2 py-1 px-4">
                    <input id="c2" type="checkbox" value="" class="h-4 w-4 accent-(--color-primary-500) cursor-pointer rounded-xl border-gray-300 bg-gray-100">
                    <label for="c2" class="w-full cursor-pointer py-2 pl-4 text-(--color-zinc-600) text-xs">
                      <span>
                        کالای دیجیتال
                      </span>
                    </label>
                  </div>
                </li>
                <li>
                  <div class="flex w-full items-center gap-x-2 py-1 px-4">
                    <input id="c3" type="checkbox" value="" class="h-4 w-4 accent-(--color-primary-500) cursor-pointer rounded-xl border-gray-300 bg-gray-100">
                    <label for="c3" class="w-full cursor-pointer py-2 pl-4 text-(--color-zinc-600) text-xs">
                      <span>
                        کالای دیجیتال
                      </span>
                    </label>
                  </div>
                </li>
                <li>
                  <div class="flex w-full items-center gap-x-2 py-1 px-4">
                    <input id="c4" type="checkbox" value="" class="h-4 w-4 accent-(--color-primary-500) cursor-pointer rounded-xl border-gray-300 bg-gray-100">
                    <label for="c4" class="w-full cursor-pointer py-2 pl-4 text-(--color-zinc-600) text-xs">
                      <span>
                        کالای دیجیتال
                      </span>
                    </label>
                  </div>
                </li>
                <li>
                  <div class="flex w-full items-center gap-x-2 py-1 px-4">
                    <input id="c5" type="checkbox" value="" class="h-4 w-4 accent-(--color-primary-500) cursor-pointer rounded-xl border-gray-300 bg-gray-100">
                    <label for="c5" class="w-full cursor-pointer py-2 pl-4 text-(--color-zinc-600) text-xs">
                      <span>
                        کالای دیجیتال
                      </span>
                    </label>
                  </div>
                </li>
              </ul>
            </div> --}}
            {{-- <div class="menu border-1 border-(--color-zinc-100) h-fit rounded-2xl py-4 hover:shadow-sm transition-all">
             <div class="svg flex items-center justify-between text-center cursor-pointer px-5 text-sm dashboard">
                  فیلتر بر اساس قیمت
                  <svg class="transition-all duration-300 fill-zinc-600" xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="#000000" viewBox="0 0 256 256">
                    <path d="M213.66,101.66l-80,80a8,8,0,0,1-11.32,0l-80-80A8,8,0,0,1,53.66,90.34L128,164.69l74.34-74.35a8,8,0,0,1,11.32,11.32Z"></path>
                  </svg>
                </div>
              <ul class="submenu transition-all duration-300 overflow-hidden max-h-0 mt-2">
                <div class="space-y-4 px-6">
                  <div id="shop-price-slider"></div>
                  <div class="flex items-center justify-between">
                    <div
                      class="text-(--color-primary-400)">
                      <span
                        class="text-xs font-semibold xl:text-sm"
                        id="shop-price-slider-min">
                      </span>
                      <span class="text-xs">تومان</span>
                    </div>
                    <div
                      class="text-(--color-primary-400)">
                      <span
                        class="text-xs font-semibold xl:text-sm"
                        id="shop-price-slider-max">
                      </span>
                      <span class="text-xs">تومان</span>
                    </div>
                  </div>
                </div>
              </ul>
            </div>
            <label class="border border-(--color-zinc-100) h-fit rounded-2xl hover:shadow-sm transition-all flex justify-between w-full py-5 px-4 cursor-pointer" for="onlyAvailableDesktop">
                <div class="text-(--color-zinc-700) text-sm">
                  فقط کالا های موجود
                </div>
                <div class="relative inline-flex cursor-pointer items-center">
                  <input class="peer sr-only" id="onlyAvailableDesktop" type="checkbox">
                  <div class="peer h-6 w-11 rounded-full bg-gray-200 after:absolute after:left-[2px] after:top-0.5 after:h-5 after:w-5 after:rounded-full after:bg-white after:transition-all after:content-[''] peer-checked:bg-(--color-primary-400) peer-checked:after:translate-x-full peer-focus:ring-(--color-primary-400)"></div>
                </div>
            </label>
          </div>
        </div>
      <!-- products -->
        <div class="lg:w-9/12">
          <div class="flex flex-wrap gap-3 md:gap-5 justify-start items-center bg-white shadow-box-sm rounded-3xl px-5 py-6 border-1 border-zinc-100 mb-5">
            <div class="text-(--color-zinc-700) text-sm">
            مرتب سازی:
            </div>
            <div class="text-(--color-primary-500) cursor-pointer text-xs">
            محبوب ترین
            </div>
            <div class="text-(--color-zinc-500) hover:text-(--color-primary-500) cursor-pointer text-xs">
            پرفروش ترین
            </div>
          </div>
           <div class="overflow-x-auto w-full h-[350px] md:h-[460px] flex flex-row border border-(--color-zinc-100) rounded-xl bg-white mx-auto px-[16px] py-[32px] all-products-section
            [&::-webkit-scrollbar]:h-1.5
            [&::-webkit-scrollbar-track]:bg-zinc-100
            [&::-webkit-scrollbar-thumb]:bg-(--color-primary-500)
            [&::-webkit-scrollbar-thumb]:rounded-full">
          <div class="flex flex-row gap-3">
            @foreach ($datas['product'] as $product)
              <a href="{{ route('product.show' , [$product]) }}">
              <div class="w-[170px] md:w-[245px] h-[300px] md:h-[400px] text-sm border-1 border-(--color-zinc-300) rounded-2xl px-2 hover:shadow-lg transition hover:border-(--color-primary-500) flex flex-col">
                @if($medias)
                @php
                  $productMedia = $medias->where('product_id', $product->id)->first();
                @endphp
                @endif
                @if(isset($productMedia))
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
            @endforeach
       
          </div>
        </div>
        </div>
      </section>
       {{-- {{ $datas['product']->links() }} --}}
    {{-- </div> --}}
   

  {{-- <script src="./hamberger.js"></script> --}}
    {{-- <script src="{{ asset('assets/js/hamberger.js') }}"></script>
    <script>
      let filterCats = document.querySelectorAll('.cats')
      let searchTitle = document.getElementById('searchTitle')
      let dataTitle = "" --}}
      {{-- // filterCats.forEach((item) => {
          // item.addEventListener('click' , ()=>{
          //   let dataTitle = item.getAttribute('data-title')
            
          //   $.ajaxSetup({
          //       headers: {
          //           'X-CSRF-TOKEN': "{{ csrf_token() }}"
          //       }
          //   })
          //   $.ajax({
          //     url : "{{ route('filter') }}" ,
          //     type : "POST" ,
          //     dataType : "json" ,
          //     datas : {
          //       'dataTitle' : dataTitle ,
          //       'searchTitle' : searchTitle.value
          //     },
          //     success: function(data){
          //       console.log(datas)
          //     },
          //     error: function(){
          //         alert('خطا  در ارسال داده')
          //     }
          //   })

          // }) --}}
            {{-- filterCats.forEach((item)=>{
            item.addEventListener('click', ()=>{
                dataTitle = item.getAttribute('data-title')
                // console.log(dataTitle)
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': "{{ csrf_token() }}"
                    }
                })
                
                $.ajax({
                    url: "{{ route('filter') }}",
                    type: "POST",
                    dataType: "json",
                    data: {
                        'dataTitle' : dataTitle ,
                        'searchTitle': searchTitle.value,
                    },
                    success: function(datas){
                        console.log(datas)
                    },
                    error: function(){
                        alert('خطا  در ارسال داده')
                    }
                })
                
            })
        })
      // }) --}}

    {{-- </script> --}}
{{-- @endsection --}}



@extends('document')
@section('title', 'نوترینو | جست و جو')
@section('content')
   
    <div class="relative z-2 pt-24 md:pt-48 px-2 md:px-10">
      <section class="text-lg md:text-3xl text-zinc-800 px-4 md:px-20 pb-6 pt-5 md:py-2">
        <div class="flex flex-row gap-3" id="parentSearch">
          <input type="hidden" id="searchTitle" value="{{ $searchTitle }}">
                 نتایج مرتبط با
                 {{ $datas['title'] }}
        </div>
      </section>
      <section class="flex flex-col lg:flex-row md:px-8 md:mt-10 gap-5 pb-20">
      <!-- filters -->
        <div class="lg:w-3/12">
          <div class="mx-auto">
            <a href="#selectCategory" onclick="filterclick('open',this)" class="md:hidden border border-zinc-200 bg-(--color-primary-500) fixed p-4 bottom-5 right-5 z-10 rounded-2xl">
              <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#fff" viewBox="0 0 256 256"><path d="M230.6,49.53A15.81,15.81,0,0,0,216,40H40A16,16,0,0,0,28.19,66.76l.08.09L96,139.17V216a16,16,0,0,0,24.87,13.32l32-21.34A16,16,0,0,0,160,194.66V139.17l67.74-72.32.08-.09A15.8,15.8,0,0,0,230.6,49.53ZM40,56h0Zm106.18,74.58A8,8,0,0,0,144,136v58.66L112,216V136a8,8,0,0,0-2.16-5.47L40,56H216Z"></path></svg>
            </a>
            <div id="closeFilter" class="fixed bottom-full right-4 z-50 my-auto border border-(--color-primary-500) rounded-lg bg-white gap-x-4 px-3 pt-1 w-[90%] h-100 md:w-full flex md:hidden flex-col mx-auto">
              <button  onclick="filterclick('close',this)" type="button" class="md:hidden mb-4 text-(--color-zinc-400) cursor-pointer bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 inline-flex items-center">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>  
              </button>
              <div class="menu mt-3 border border-(--color-zinc-100) h-fit rounded-2xl py-2 hover:shadow-sm transition-all">
                <button class="menub flex items-center justify-between w-full py-3 px-4 rounded-2xl cursor-pointer">
                  <span class="text-(--color-zinc-700) text-sm">دسته بندی</span>
                  <svg  class="transition-all duration-300 fill-(--color-zinc-600)" xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="#000000" viewBox="0 0 256 256">
                    <path d="M213.66,101.66l-80,80a8,8,0,0,1-11.32,0l-80-80A8,8,0,0,1,53.66,90.34L128,164.69l74.34-74.35a8,8,0,0,1,11.32,11.32Z"></path>
                  </svg>
                </button>
                <ul class="submenu transition-all duration-300 overflow-hidden max-h-0 mt-2">
                  @foreach ($categories as $category)
                    <li>
                      <button class="text-xs flex justify-between w-full py-2 px-4 text-(--color-zinc-700) cursor-pointer cats" data-title="{{ $category->title }}">
                        <div>{{ $category->title }}</div>
                      </button>
                    </li>
                  @endforeach
                  
                </ul>
              </div>
              <div class="menu mt-3 border border-(--color-zinc-100) h-fit rounded-2xl py-2 hover:shadow-sm transition-all">
                <button class="menub flex items-center justify-between w-full py-3 px-4 rounded-2xl cursor-pointer">
                  <span class="text-(--color-zinc-700) text-sm">برند ها</span>
                  <svg class="menubbb transition-all duration-300 fill-(--color-zinc-600)" xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="#000000" viewBox="0 0 256 256">
                    <path d="M213.66,101.66l-80,80a8,8,0,0,1-11.32,0l-80-80A8,8,0,0,1,53.66,90.34L128,164.69l74.34-74.35a8,8,0,0,1,11.32,11.32Z"></path>
                  </svg>
                </button>
                <ul class="submenu transition-all duration-300 overflow-hidden max-h-0 mt-2">
                  @foreach ($brands as $brand)
                    <li>
                      <div class="flex w-full items-center gap-x-2 py-1 px-4">
                        <input id="{{ 'b'.$brand->id }}" type="checkbox" onchange="brandCheckBox(this)" value="" class="h-4 w-4 accent-(--color-primary-500) cursor-pointer rounded-xl border-gray-300 bg-gray-100">
                        <label for="{{ 'b'.$brand->id }}" class="w-full cursor-pointer py-2 pl-4 text-(--color-zinc-600) text-xs">
                          <span>
                          {{ $brand->title }}
                          </span>
                        </label>
                      </div>
                    </li>
                  @endforeach
                </ul>
              </div>
              {{-- <div class="menu mt-3 border border-(--color-zinc-100) h-fit rounded-2xl py-2 hover:shadow-sm transition-all">
                <button class="menub flex justify-between w-full py-3 px-4 rounded-2xl cursor-pointer">
                  <span class="text-(--color-zinc-700) text-sm">فیلتر بر اساس قیمت</span>
                  <svg class="menubbb transition-all duration-300 fill-(--color-zinc-600)" xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="#000000" viewBox="0 0 256 256"><path d="M213.66,101.66l-80,80a8,8,0,0,1-11.32,0l-80-80A8,8,0,0,1,53.66,90.34L128,164.69l74.34-74.35a8,8,0,0,1,11.32,11.32Z"></path></svg>
                </button>
                <ul class="submenu transition-all duration-300 overflow-hidden max-h-0 mt-2">
                  <div class="space-y-4 px-6">
                    <div id="shop-price-slider"></div>
                    <div class="flex items-center justify-between">
                      <div
                        class="text-(--color-primary-400)">
                        <span
                          class="text-xs font-semibold xl:text-sm"
                          id="shop-price-slider-min">
                        </span>
                        <span class="text-xs">تومان</span>
                      </div>
                      <div
                        class="text-(--color-primary-400)">
                        <span
                          class="text-xs font-semibold xl:text-sm"
                          id="shop-price-slider-max">
                        </span>
                        <span class="text-xs">تومان</span>
                      </div>
                    </div>
                  </div>
                </ul>
              </div> --}}
              <label class="border border-(--color-zinc-100) h-fit rounded-2xl hover:shadow-sm transition-all flex justify-between w-full py-5 px-4 cursor-pointer" for="onlyAvailableDesktope">
                <div class="text-(--color-zinc-700) text-sm">
                  فقط کالا های موجود
                </div>
                <div class="relative inline-flex cursor-pointer items-center">
                  <input class="peerrr sr-only" id="onlyAvailableDesktope" type="checkbox">
                  <div class="peerrr h-6 w-11 rounded-full bg-gray-200 after:absolute after:left-[2px] after:top-0.5 after:h-5 after:w-5 after:rounded-full after:bg-white after:transition-all after:content-[''] peer-checked:bg-(--color-primary-400) peer-checked:after:translate-x-full peer-focus:ring-(--color-primary-400)"></div>
                </div>
              </label>
            </div>
          </div>
          <div class="hidden md:block space-y-5 transform translate-y-full md:translate-y-0 transition-transform duration-300 ease-in-out bg-white pb-5">
            <div class="menu border border-(--color-zinc-100) h-fit rounded-2xl py-2 hover:shadow-sm transition-all">
              <button class="menub flex items-center justify-between w-full py-3 px-4 rounded-2xl cursor-pointer">
                <span class="text-(--color-zinc-700) text-sm">دسته بندی</span>
                <svg id="menubbb" class="menubbb transition-all duration-300 fill-(--color-zinc-600)" xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="#000000" viewBox="0 0 256 256">
                  <path d="M213.66,101.66l-80,80a8,8,0,0,1-11.32,0l-80-80A8,8,0,0,1,53.66,90.34L128,164.69l74.34-74.35a8,8,0,0,1,11.32,11.32Z"></path>
                </svg>
              </button>
              <ul class="submenu transition-all duration-300 overflow-hidden max-h-0 mt-2">
                @foreach ($categories as $category)
                  @if($category->parent_id == 0)
                    <li>
                      <button class="text-xs flex justify-between w-full py-2 px-4 text-(--color-zinc-700) cursor-pointer cats" data-title="{{ $category->title }}">
                        <div>{{ $category->title }}</div>
                      </button>
                    </li>
                  @endif
                  @endforeach
              </ul>
            </div>
            <div class="menu border border-(--color-zinc-100) h-fit rounded-2xl py-2 hover:shadow-sm transition-all">
              <button class="menub flex items-center justify-between w-full py-3 px-4 rounded-2xl cursor-pointer">
                <span class="text-(--color-zinc-700) text-sm">برند ها</span>
                <svg class="menubbb transition-all duration-300 fill-(--color-zinc-600)" xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="#000000" viewBox="0 0 256 256">
                  <path d="M213.66,101.66l-80,80a8,8,0,0,1-11.32,0l-80-80A8,8,0,0,1,53.66,90.34L128,164.69l74.34-74.35a8,8,0,0,1,11.32,11.32Z"></path>
                </svg>
              </button>
              <ul class="submenu transition-all duration-300 overflow-hidden max-h-0 mt-2">
                @foreach ($brands as $brand)
                <li>
                  <div class="flex w-full items-center gap-x-2 py-1 px-4">
                    <input id="{{ 'bd'.$brand->id }}" type="checkbox" onchange="brandCheckBox(this, {{ $brand->id }})" value="{{ $brand->id }}" class="h-4 w-4 accent-(--color-primary-500) cursor-pointer rounded-xl border-gray-300 bg-gray-100 brands">
                    <label for="{{ 'bd'.$brand->id }}" class="w-full cursor-pointer py-2 pl-4 text-(--color-zinc-600) text-xs">
                      <span>
                       {{ $brand->title }}
                      </span>
                    </label>
                  </div>
                </li>
                @endforeach
              </ul>
            </div>
            {{-- <div class="menu border border-(--color-zinc-100) h-fit rounded-2xl py-2 hover:shadow-sm transition-all">
              <button class="menub flex justify-between w-full py-3 px-4 rounded-2xl cursor-pointer">
                <span class="text-(--color-zinc-700) text-sm">فیلتر بر اساس قیمت</span>
                <svg class="menubbb transition-all duration-300 fill-(--color-zinc-600)" xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="#000000" viewBox="0 0 256 256"><path d="M213.66,101.66l-80,80a8,8,0,0,1-11.32,0l-80-80A8,8,0,0,1,53.66,90.34L128,164.69l74.34-74.35a8,8,0,0,1,11.32,11.32Z"></path></svg>
              </button>
              <ul class="submenu transition-all duration-300 overflow-hidden max-h-0 mt-2">
                <div class="space-y-4 px-6">
                  <div id="shop-price-slider"></div>
                  <div class="flex items-center justify-between">
                    <div
                      class="text-(--color-primary-400)">
                      <span
                        class="text-xs font-semibold xl:text-sm"
                        id="shop-price-slider-min">
                      </span>
                      <span class="text-xs">تومان</span>
                    </div>
                    <div
                      class="text-(--color-primary-400)">
                      <span
                        class="text-xs font-semibold xl:text-sm"
                        id="shop-price-slider-max">
                      </span>
                      <span class="text-xs">تومان</span>
                    </div>
                  </div>
                </div>
              </ul>
            </div> --}}
            <label class="border border-(--color-zinc-100) h-fit rounded-2xl hover:shadow-sm transition-all flex justify-between w-full py-5 px-4 cursor-pointer" for="onlyAvailableDesktop">
                <div class="text-(--color-zinc-700) text-sm">
                  فقط کالا های موجود
                </div>
                <div class="relative inline-flex cursor-pointer items-center">
                  <input class="peer sr-only" id="onlyAvailableDesktop" type="checkbox">
                  <div class="peer h-6 w-11 rounded-full bg-gray-200 after:absolute after:left-[2px] after:top-0.5 after:h-5 after:w-5 after:rounded-full after:bg-white after:transition-all after:content-[''] peer-checked:bg-(--color-primary-400) peer-checked:after:translate-x-full peer-focus:ring-(--color-primary-400)"></div>
                </div>
            </label>
          </div>
        </div>
      <!-- products -->
        <div class="lg:w-9/12">
          <div class="flex flex-wrap gap-3 md:gap-5 justify-start items-center bg-white shadow-box-sm rounded-3xl px-5 py-6 border border-zinc-100 mb-5">
            <div class="text-(--color-zinc-700) text-sm">
            مرتب سازی:
            </div>
            <div class="text-(--color-primary-500) cursor-pointer text-xs">
            محبوب ترین
            </div>
            <div class="text-(--color-zinc-500) hover:text-(--color-primary-500) cursor-pointer text-xs">
            پرفروش ترین
            </div>
            <div class="text-(--color-zinc-500) hover:text-(--color-primary-500) cursor-pointer text-xs">
            ارزان ترین
            </div>
            <div class="text-(--color-zinc-500) hover:text-(--color-primary-500) cursor-pointer text-xs">
            گران ترین
            </div>
            <div class="text-(--color-zinc-500) hover:text-(--color-primary-500) cursor-pointer text-xs">
            جدیدترین
            </div>
            <div class="text-(--color-zinc-500) hover:text-(--color-primary-500) cursor-pointer text-xs">
            پربازدیدترین
            </div>
          </div>
          <div class="grid grid-cols-2 lg:grid-cols-3 gap-3 w-11/12 mr-11" id="parentDiv">
            @foreach ($datas['product'] as $product)
            <a href="{{ route('product.show' , [$product]) }}">
              <div class="w-[135px] sm:w-[170px] md:w-[245px] h-[300px] md:h-[400px] text-sm border-1 border-(--color-zinc-300) rounded-2xl px-2 hover:shadow-lg transition">
                @if($medias)
                  @php
                    $productMedia = $medias->where('product_id', $product->id)->first();
                  @endphp
                @endif
                @if(isset($productMedia))
                <div class="flex items-center justify-center">
                  <img src="{{ asset('storage/'.$productMedia->path) }}" alt="{{ $product->title }}" class="rounded-xl mb-3 max-w-[130px] min-w-[130px] max-h-[100px] min-h-[100px] md:max-w-[200px] main-w-[200px] max-h-[200px] min-h-[200px]">
                </div>
                @endif
                <div class="text-[10px] md:text-xs text-(--color-zinc-500) mb-3">{{ $product->title }}</div>
                <p class="w-full mb-3 text-xs md:text-sm truncate">{{ $product->summary }}</p>
                <span class="flex flex-row justify-between items-center mb-3">
                  <span class="flex gap-1 mt-4">
                    @if($attributes)
                      @foreach ($attributes as $attribute)
                        @if($attribute->product_id == $product->id && $attribute->type == 'color')
                          <div class="w-3 md:w-4 h-3 md:h-4 rounded-full border border-zinc-200" style="background-color: {{ $attribute->value }};"></div>
                        @endif
                      @endforeach
                    @endif
                  </span>
                  <span class="flex items-center gap-0.5">
                    <span class="text-[9px] text-(--color-zinc-500)">(78)</span>
                    <span class="text-xs text-(--color-zinc-500)">4.4</span>
                    <span class="">
                      <svg class="fill-primary-500" xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="#f9bc00" viewBox="0 0 256 256"><path d="M234.5,114.38l-45.1,39.36,13.51,58.6a16,16,0,0,1-23.84,17.34l-51.11-31-51,31a16,16,0,0,1-23.84-17.34L66.61,153.8,21.5,114.38a16,16,0,0,1,9.11-28.06l59.46-5.15,23.21-55.36a15.95,15.95,0,0,1,29.44,0h0L166,81.17l59.44,5.15a16,16,0,0,1,9.11,28.06Z"></path></svg>
                    </span>
                  </span>
                </span>
                <div class="border-dashed border-t-1 border-(--color-zinc-200) flex justify-end items-center h-12">
                  <span class="flex items-center text-base md:text-base gap-2">
                    {{ number_format($product->price) }}
                    <span class="text-[10px]">تومان</span>
                  </span>
                </div>
              </div>
            </a>
            @endforeach
              
          </div>
        </div>
      </section>
      <!-- pagination -->
      {{ $datas['product']->links() }}
    </div>
 

<script>
  let selectedBrands = []
  let brands = document.querySelectorAll('.brands')
  let filterCats = document.querySelectorAll('.cats')
  let searchTitle = document.getElementById('searchTitle')
  let parentSearch = document.getElementById('parentSearch')
  let parentDiv = document.getElementById('parentDiv')
  let dataTitle = ""
      filterCats.forEach((item)=>{
        console.log('item' + item)
        item.addEventListener('click', ()=>{
          dataTitle = item.getAttribute('data-title')
          $.ajaxSetup({
              headers: {
                  'X-CSRF-TOKEN': "{{ csrf_token() }}"
              }
          })
          
          $.ajax({
              url: "{{ route('filter') }}",
              type: "POST",
              dataType: "json",
              data: {
                  'dataTitle' : dataTitle ,
                  'searchTitle': searchTitle.value,
              },
              success: function(datas){
                console.log(datas.products.length)
                parentSearch.innerHTML ="نتایج مرتبط با" + `<div>${datas.category_title}</div>`
                parentDiv.innerHTML = ''
                
                if(datas.products.length === 0) {
                  parentDiv.innerHTML = `
                  <div class="col-span-full text-center py-20">
                    <p class="text-gray-500">هیچ محصولی برای این دسته‌بندی یافت نشد</p>
                    </div>
                    `
                    return
                  }
                if(datas.categories.length === 0) {
                  parentDiv.innerHTML = `
                  <div class="col-span-full text-center py-20">
                    <p class="text-gray-500">هیچ محصولی برای این دسته‌بندی یافت نشد</p>
                    </div>
                    `
                    return
                  }
                  
     
                  datas.products.forEach(function(product) {
                  
                    let productHtml = `
                        <a href="/product/${product.id}">
                            <div class="w-[135px] sm:w-[170px] md:w-[245px] h-[300px] md:h-[400px] text-sm border-1 border-(--color-zinc-300) rounded-2xl px-2 hover:shadow-lg transition">
                                <div class="flex items-center justify-center">

                                    <img src="${product.medias[0].path ? '{{ asset("storage/") }}/'+product.medias[0].path : null}" alt="${product.title}" class="rounded-xl mb-3 max-w-[130px] min-w-[130px] max-h-[100px] min-h-[100px] md:max-w-[200px] main-w-[200px] max-h-[200px] min-h-[200px]">
                                </div>
                                <div class="text-[10px] md:text-xs text-(--color-zinc-500) mb-3">${product.title}</div>
                                <p class="w-full mb-3 text-xs md:text-sm truncate">${product.summary}</p>
                                <div class="border-dashed border-t-1 border-(--color-zinc-200) flex justify-end items-center h-12">
                                    <span class="flex items-center text-base md:text-base gap-2">
                                        ${Number(product.price).toLocaleString()}
                                        <span class="text-[10px]">تومان</span>
                                    </span>
                                </div>
                            </div>
                        </a>
                    `
                    parentDiv.innerHTML += productHtml
                })
              },
              error: function(){
                  alert('خطا  در ارسال داده')
              }
          })
          
        })
    })

  function brandCheckBox(el, brandId){
    console.log(brandId)
      if(el.checked){
        selectedBrands.push(brandId)
      }
      else{
        selectedBrands = selectedBrands.filter(id => id !== brandId)
      }
      $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': "{{ csrf_token() }}"
        }
      })
      $.ajax({
        url : "{{ route('filterBrand') }}",
        type : "POST",
        dataType : "json",
        data : {
          'selectedBrands' : selectedBrands,
        },
        success: function(datas){
            let brandTitles = '';
            
            datas.brands.forEach(function(brand, index){
                if(index === 0) {
                    brandTitles = brand.title;
                } else {
                    brandTitles = brandTitles + '، ' + brand.title;
                }
            })
            parentSearch.innerHTML = `نتایج مرتبط با ${brandTitles}`;
            
            parentDiv.innerHTML = '';
            
            datas.products.forEach(function(product) {
                let productHtml = `
                    <a href="/product/${product.id}">
                        <div class="w-[135px] sm:w-[170px] md:w-[245px] h-[300px] md:h-[400px] text-sm border-1 border-(--color-zinc-300) rounded-2xl px-2 hover:shadow-lg transition">
                            <div class="flex items-center justify-center">
                                <img src="${product.medias[0]?.path ? '{{ asset("storage/") }}/'+product.medias[0].path : ''}" alt="${product.title}" class="rounded-xl mb-3 max-w-[130px] min-w-[130px] max-h-[100px] min-h-[100px] md:max-w-[200px] main-w-[200px] max-h-[200px] min-h-[200px]">
                            </div>
                            <div class="text-[10px] md:text-xs text-(--color-zinc-500) mb-3">${product.title}</div>
                            <p class="w-full mb-3 text-xs md:text-sm truncate">${product.summary}</p>
                            <div class="border-dashed border-t-1 border-(--color-zinc-200) flex justify-end items-center h-12">
                                <span class="flex items-center text-base md:text-base gap-2">
                                    ${Number(product.price).toLocaleString()}
                                    <span class="text-[10px]">تومان</span>
                                </span>
                            </div>
                        </div>
                    </a>
                `;
                parentDiv.innerHTML += productHtml;
            });
        },
        error: function(){
          alert('خطا  در ارسال داده')
        }
      })

  }
  
</script>
@endsection