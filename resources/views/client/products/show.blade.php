
@extends('document')
@section('title', "فروشگاه نوترینو")
@section('content')
    <div class="relative z-2 pt-24 md:pt-48 px-2 md:px-10"> 
      <section id="top" class="flex flex-col lg:flex-row gap-x-8">
        <!-- photo -->
        <div class="lg:w-4/12">
          <div class="flex gap-x-5 pr-10">
              <a href="#" class="relative">
                <div class="group cursor-pointer relative inline-block text-center">
                  <svg class="fill-(--color-zinc-700) hover:fill-red-400 transition" xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="" viewBox="0 0 256 256"><path d="M178,32c-20.65,0-38.73,8.88-50,23.89C116.73,40.88,98.65,32,78,32A62.07,62.07,0,0,0,16,94c0,70,103.79,126.66,108.21,129a8,8,0,0,0,7.58,0C136.21,220.66,240,164,240,94A62.07,62.07,0,0,0,178,32ZM128,206.8C109.74,196.16,32,147.69,32,94A46.06,46.06,0,0,1,78,48c19.45,0,35.78,10.36,42.6,27a8,8,0,0,0,14.8,0c6.82-16.67,23.15-27,42.6-27a46.06,46.06,0,0,1,46,46C224,147.61,146.24,196.15,128,206.8Z"></path></svg>
                  <div class="opacity-0 w-28 transition-all bg-zinc-800 text-white text-center text-xs rounded-lg py-2 absolute z-10 -left-11 group-hover:opacity-100 px-3 pointer-events-none">
                    افزودن به علاقه مندی ها
                    <svg class="absolute text-black h-2 w-full left-0 bottom-full rotate-180" x="0px" y="0px" viewBox="0 0 255 255" xml:space="preserve"><polygon class="fill-current" points="0,0 127.5,127.5 255,0"></polygon></svg>
                  </div>
                </div>
              </a>
              <a href="" class="relative">
                <div class="group cursor-pointer relative inline-block text-center">
                  <svg class="fill-(--color-zinc-700) hover:fill-zinc-800 transition" xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="#000000" viewBox="0 0 256 256"><path d="M112,152a8,8,0,0,0-8,8v28.69L75.72,160.4A39.71,39.71,0,0,1,64,132.12V95a32,32,0,1,0-16,0v37.13a55.67,55.67,0,0,0,16.4,39.6L92.69,200H64a8,8,0,0,0,0,16h48a8,8,0,0,0,8-8V160A8,8,0,0,0,112,152ZM40,64A16,16,0,1,1,56,80,16,16,0,0,1,40,64Zm168,97V123.88a55.67,55.67,0,0,0-16.4-39.6L163.31,56H192a8,8,0,0,0,0-16H144a8,8,0,0,0-8,8V96a8,8,0,0,0,16,0V67.31L180.28,95.6A39.71,39.71,0,0,1,192,123.88V161a32,32,0,1,0,16,0Zm-8,47a16,16,0,1,1,16-16A16,16,0,0,1,200,208Z"></path></svg>
                  <div class="opacity-0 w-28 transition-all bg-zinc-800 text-white text-center text-xs rounded-lg py-2 absolute z-10 -left-11 group-hover:opacity-100 px-3 pointer-events-none">
                   افزودن به مقایسه
                    <svg class="absolute text-black h-2 w-full left-0 bottom-full rotate-180" x="0px" y="0px" viewBox="0 0 255 255" xml:space="preserve"><polygon class="fill-current" points="0,0 127.5,127.5 255,0"></polygon></svg>
                  </div>
                </div>
              </a>
              <a href="#" class="relative" onclick="copyToClipboard(event)">
                <div class="group cursor-pointer relative inline-block text-center">
                    <svg class="fill-(--color-zinc-700) hover:fill-zinc-800 transition" xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 256 256">
                        <path d="M176,160a39.89,39.89,0,0,0-28.62,12.09l-46.1-29.63a39.8,39.8,0,0,0,0-28.92l46.1-29.63a40,40,0,1,0-8.66-13.45l-46.1,29.63a40,40,0,1,0,0,55.82l46.1,29.63A40,40,0,1,0,176,160Zm0-128a24,24,0,1,1-24,24A24,24,0,0,1,176,32ZM64,152a24,24,0,1,1,24-24A24,24,0,0,1,64,152Zm112,72a24,24,0,1,1,24-24A24,24,0,0,1,176,224Z"></path>
                    </svg>
                    <div class="opacity-0 w-28 transition-all bg-zinc-800 text-white text-center text-xs rounded-lg py-2 absolute z-10 -left-11 group-hover:opacity-100 px-3 pointer-events-none">
                        اشتراک گذاری
                        <svg class="absolute text-black h-2 w-full left-0 bottom-full rotate-180" x="0px" y="0px" viewBox="0 0 255 255">
                            <polygon class="fill-current" points="0,0 127.5,127.5 255,0"></polygon>
                        </svg>
                    </div>
                </div>
              </a>
            </div>
          <div class="flex flex-col items-center">
            <div class="">
            @if(isset($mainImage))
                <img src="{{ asset('storage/'.$mainImage->path) }}" alt="" class="w-full max-w-96 object-cover rounded-lg">
            @endif
            </div>
            <div class="flex justify-start gap-x-2 mt-4 pb-4 overflow-x-auto
              [&::-webkit-scrollbar]:w-[2px]
              [&::-webkit-scrollbar-thumb]:bg-(--color-primary-500)
              [&::-webkit-scrollbar-thumb]:rounded-full">
              @if(isset($gallery))
              @foreach ($gallery as $img)
                <img src={{ asset('storage/'.$img->path) }} class="w-20 h-20 border-2 border-(--color-zinc-200) rounded-md opacity-70 hover:opacity-100 hover:border-(--color-zinc-300)" alt="img product">
              @endforeach
              @endif
             
            </div>
          </div>
        </div>
        <!-- info -->
        <div class="lg:w-5/12 mt-5 lg:mt-1">
          <div class="mb-7 text-xs flex flex-wrap space-y-2 md:space-y-0 items-center gap-x-2 opacity-90">
            <a href="" class="text-(--color-zinc-500) hover:text-(--color-primary-500) transition">
              کالای دیجیتال
            </a>
            <svg class="size-3 fill-(--color-zinc-500)" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#3d3d3d" viewBox="0 0 256 256"><path d="M165.66,202.34a8,8,0,0,1-11.32,11.32l-80-80a8,8,0,0,1,0-11.32l80-80a8,8,0,0,1,11.32,11.32L91.31,128Z"></path></svg>
            <a href="" class="text-(--color-zinc-500) hover:text-(--color-primary-500) transition">
             موبایل
            </a>
            <svg class="size-3 fill-(--color-zinc-500)" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#3d3d3d" viewBox="0 0 256 256"><path d="M165.66,202.34a8,8,0,0,1-11.32,11.32l-80-80a8,8,0,0,1,0-11.32l80-80a8,8,0,0,1,11.32,11.32L91.31,128Z"></path></svg>
            <a class="text-(--color-primary-500)" href="">
             موبایل آیفون 12pro max
            </a>
          </div>
          <div class="text-(--color-zinc-800) md:text-2xl font-semibold leading-7">
                {{ $product->title }}
          </div>
          <div class="text-xs md:text-sm text-(--color-zinc-400) mt-4">
                {{ $product->title }}
          </div>
          <div class="flex gap-x-5 items-center mt-3">
            <a href="" class="flex items-start gap-x-1 text-sm text-(--color-primary-500)">
              <svg class="fill-(--color-primary-400)" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="" viewBox="0 0 256 256"><path d="M140,128a12,12,0,1,1-12-12A12,12,0,0,1,140,128ZM84,116a12,12,0,1,0,12,12A12,12,0,0,0,84,116Zm88,0a12,12,0,1,0,12,12A12,12,0,0,0,172,116Zm60,12A104,104,0,0,1,79.12,219.82L45.07,231.17a16,16,0,0,1-20.24-20.24l11.35-34.05A104,104,0,1,1,232,128Zm-16,0A88,88,0,1,0,51.81,172.06a8,8,0,0,1,.66,6.54L40,216,77.4,203.53a7.85,7.85,0,0,1,2.53-.42,8,8,0,0,1,4,1.08A88,88,0,0,0,216,128Z"></path></svg>
              <span>
                <span>
                  2
                </span>
                <span>
                  دیدگاه
                </span>
              </span>
            </a>
            <div class="flex items-start gap-x-1 text-sm text-(--color-zinc-400)">
              <span>
                <span>
                  (72)
                </span>
                <span>
                  4.4
                </span>
              </span>
              <svg class="fill-(--color-primary-500)" xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="#f9bc00" viewBox="0 0 256 256"><path d="M234.5,114.38l-45.1,39.36,13.51,58.6a16,16,0,0,1-23.84,17.34l-51.11-31-51,31a16,16,0,0,1-23.84-17.34L66.61,153.8,21.5,114.38a16,16,0,0,1,9.11-28.06l59.46-5.15,23.21-55.36a15.95,15.95,0,0,1,29.44,0h0L166,81.17l59.44,5.15a16,16,0,0,1,9.11,28.06Z"></path></svg>
            </div>
          </div>
          <div class="mt-8 text-(--color-zinc-700)">
            ویژگی های محصول:
          </div>
          <div class="grid grid-cols-2 md:grid-cols-3 max-w-md py-3 mb-5 gap-3">
            @foreach ($attributes as $attribute)
                {{-- @dd($attribute) --}}
                <div class="flex flex-col gap-x-2 justufy-center bg-(--color-zinc-100) rounded-md px-2 py-3">
                    <div class="text-(--color-zinc-500) text-xs">
                        {{ $attribute->key }}
                    </div>
                    <div class="text-(--color-zinc-700) text-sm">
                        {{ $attribute->value }}
                    </div>
                </div>
            @endforeach
            
          </div>
          <div class="flex gap-x-2 mt-2 pt-2 text-(--color-zinc-500) text-xs md:text-sm border-t border-t-(--color-zinc-200) leading-6">
            <svg class="fill-(--color-zinc-500)" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="" viewBox="0 0 256 256"><path d="M128,24A104,104,0,1,0,232,128,104.11,104.11,0,0,0,128,24Zm0,192a88,88,0,1,1,88-88A88.1,88.1,0,0,1,128,216Zm16-40a8,8,0,0,1-8,8,16,16,0,0,1-16-16V128a8,8,0,0,1,0-16,16,16,0,0,1,16,16v40A8,8,0,0,1,144,176ZM112,84a12,12,0,1,1,12,12A12,12,0,0,1,112,84Z"></path></svg>
            {{ $product->summary }}
          </div>
        </div>
        <!-- buy -->
        <div class="lg:w-3/12 mt-5 lg:mt-1">
          <div class="lg:mt-8 mb-8">
            <div class="text-(--color-zinc-700)"> رنگ: </div>
            <ul class="flex flex-wrap gap-2">
                @foreach ($attributes as $attribute)
                    @if($attribute->key == "رنگ")
                    <li>
                        <input type="radio" name="hosting" id="1" class="hidden peer" required>
                        <label for="1" class="flex items-center justify-center py-3 px-2 border-2 border-(--color-zinc-300) rounded-2xl bg-white hover:bg-(--color-zinc-100) peer-checked:border-(--color-primary-400)">
                        <div class="flex flex-row gap-x-2">
                            <div class="w-5 h-5 bg-(--color-zinc-400) rounded-full"></div>
                            <div class="text-sm">{{ $attribute->value }}</div>
                        </div>
                        </label>
                    </li>
                    @endif
                @endforeach
            </ul>
          </div>
          <div class="p-3 border border-(--color-zinc-300) rounded-xl mx-auto divide-y divide-(--color-zinc-200)">
            <div class="flex text-sm text-(--color-zinc-600) pb-5 pt-3 gap-x-1">
              <svg class="fill-(--color-zinc-600)" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="" viewBox="0 0 256 256"><path d="M208,40H48A16,16,0,0,0,32,56v58.78c0,89.61,75.82,119.34,91,124.39a15.53,15.53,0,0,0,10,0c15.2-5.05,91-34.78,91-124.39V56A16,16,0,0,0,208,40Zm0,74.79c0,78.42-66.35,104.62-80,109.18-13.53-4.51-80-30.69-80-109.18V56H208ZM82.34,141.66a8,8,0,0,1,11.32-11.32L112,148.68l50.34-50.34a8,8,0,0,1,11.32,11.32l-56,56a8,8,0,0,1-11.32,0Z"></path></svg>
              <span>
                گارانتی 12 ماهه
              </span>
            </div>
            <div class="flex text-sm text-(--color-zinc-600) py-5 gap-x-1">
              <svg class="fill-(--color-zinc-600)" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="" viewBox="0 0 256 256"><path d="M247.42,117l-14-35A15.93,15.93,0,0,0,218.58,72H184V64a8,8,0,0,0-8-8H24A16,16,0,0,0,8,72V184a16,16,0,0,0,16,16H41a32,32,0,0,0,62,0h50a32,32,0,0,0,62,0h17a16,16,0,0,0,16-16V120A7.94,7.94,0,0,0,247.42,117ZM184,88h34.58l9.6,24H184ZM24,72H168v64H24ZM72,208a16,16,0,1,1,16-16A16,16,0,0,1,72,208Zm81-24H103a32,32,0,0,0-62,0H24V152H168v12.31A32.11,32.11,0,0,0,153,184Zm31,24a16,16,0,1,1,16-16A16,16,0,0,1,184,208Zm48-24H215a32.06,32.06,0,0,0-31-24V128h48Z"></path></svg>
              <span>
                ارسال 3 روز کاری
              </span>
            </div>
            <div class="flex text-sm text-(--color-green-500) py-5 gap-x-1">
              <svg class="fill-(--color-green-500)" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="" viewBox="0 0 256 256"><path d="M234,80.12A24,24,0,0,0,216,72H160V56a40,40,0,0,0-40-40,8,8,0,0,0-7.16,4.42L75.06,96H32a16,16,0,0,0-16,16v88a16,16,0,0,0,16,16H204a24,24,0,0,0,23.82-21l12-96A24,24,0,0,0,234,80.12ZM32,112H72v88H32ZM223.94,97l-12,96a8,8,0,0,1-7.94,7H88V105.89l36.71-73.43A24,24,0,0,1,144,56V80a8,8,0,0,0,8,8h64a8,8,0,0,1,7.94,9Z"></path></svg>
              <span>
                رضایت محصول:
                <span>
                  97%
                </span>
              </span>
            </div>
            <div class="py-5 gap-x-1">
              <div class="text-(--color-zinc-800) text-left">
                <span class="font-yekanBakhExtraBold text-3xl">{{ $product->price }}</span>
                <span class="text-xs">تومان</span>
              </div>
              <div class="text-(--color-red-500) text-xs">
                تنها 1 عدد باقی مانده
              </div>
              <div class="quantity-container mt-5 flex h-10 w-full items-center justify-between rounded-lg border border-gray-100 px-2 py-1">
                <button class="cursor-pointer">
                  <svg class="fill-(--color-green-500) size-5" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 256 256"><path d="M222,128a6,6,0,0,1-6,6H134v82a6,6,0,0,1-12,0V134H40a6,6,0,0,1,0-12h82V40a6,6,0,0,1,12,0v82h82A6,6,0,0,1,222,128Z"></path></svg>
                </button>
                <input value="1" disabled type="number" class="flex h-5 w-full grow select-none items-center justify-center bg-transparent text-center text-sm md:text-lg font-yekanBakhExtraBold text-(--color-zinc-600) outline-none">
                <button class="cursor-pointer">
                  <svg class="fill-(--color-red-500) size-5" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 256 256"><path d="M222,128a6,6,0,0,1-6,6H40a6,6,0,0,1,0-12H216A6,6,0,0,1,222,128Z"></path></svg>
                </button>
              </div>
            </div>
            <button class="hidden lg:block mx-auto cursor-pointer w-full px-2 py-3 text-sm bg-gradient-to-bl from-(--color-primary-400) to-(--color-primary-600) hover:opacity-80 transition text-(--color-zinc-100) rounded-lg">
              افزودن به سبد خرید
            </button>
            <!-- <button class="hidden lg:block mx-auto w-full px-2 py-3 text-sm bg-gradient-to-bl from-(--color-primary-500) to-(--color-primary-400) opacity-80 cursor-not-allowed transition text-(--color-zinc-100) rounded-lg">
              محصول موجود نیست!
            </button> -->
          </div>
          <div class="flex items-center gap-x-1 mt-4 text-(--color-zinc-600) text-xs">
            <svg class="fill-zinc-600" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="" viewBox="0 0 256 256"><path d="M128,24A104,104,0,1,0,232,128,104.11,104.11,0,0,0,128,24Zm0,192a88,88,0,1,1,88-88A88.1,88.1,0,0,1,128,216Zm16-40a8,8,0,0,1-8,8,16,16,0,0,1-16-16V128a8,8,0,0,1,0-16,16,16,0,0,1,16,16v40A8,8,0,0,1,144,176ZM112,84a12,12,0,1,1,12,12A12,12,0,0,1,112,84Z"></path></svg>
            هزینه پست برای سبد خرید بالای 400 هزار تومان رایگان میباشد.
          </div>
          <!-- fixed div buy mobile -->
          <div class="fixed flex bottom-0 right-0 lg:hidden bg-white border-t border-t-zinc-300 w-full px-5 py-3 gap-x-2 z-1000">
            <button class="mx-auto 5 w-1/2 px-2 py-3 text-sm bg-gradient-to-bl from-(--color-primary-400) to-(--color-primary-600) hover:opacity-80 transition text-(--color-zinc-100) rounded-lg">
              افزودن به سبد خرید
            </button>
            <!-- <button class="mx-auto 5 w-1/2 px-2 py-3 text-sm bg-gradient-to-bl from-(--color-primary-500) to-(--color-primary-400) opacity-80 cursor-not-allowed transition text-(--color-zinc-100) rounded-lg">
              محصول موجود نیست!
            </button> -->
            <span class="flex flex-col justify-center items-end w-1/2">
              <div class="text-(--color-zinc-700) text-left">
                <span class="font-yekanBakhExtraBold text-xl">23,380,000</span>
                <span class="text-xs">تومان</span>
              </div>
              <div class="text-xs text-(--color-red-500)">
                تنها 1 عدد در انبار باقی مانده
              </div>
            </span>
          </div>
        </div>
      </section>
      <section class="flex flex-col lg:flex-row mt-22 pb-2 gap-x-8 border-b border-(--color-zinc-200)">
        <a href="#details" class="text-(--color-zinc-600) hover:text-(--color-zinc-800) transition">توضیحات</a>
        <a href="#proper" class="text-(--color-zinc-600) hover:text-(--color-zinc-800) transition">مشخصات</a>
        <a href="#comments" class="text-(--color-zinc-600) hover:text-(--color-zinc-800) transition">دیدگاه ها</a>
        <a href="#comments2" class="text-(--color-zinc-600) hover:text-(--color-zinc-800) transition">پرسش ها</a>
      </section>
      <section class="p-4 border-b border-(--color-zinc-200) scroll-mt-36" id="details">
        <p class="text-zinc-800 md:text-lg mb-1 mt-4">
          توضیحات این محصول
        </p>
        <p class="text-(--color-zinc-600) text-xs md:text-sm leading-8 my-2">
            {{ $product->description }}
        </p>
      </section>
      <section class="p-4 border-b border-(--color-zinc-200) scroll-mt-36" id="proper">
        <p class="text-(--color-zinc-800) lg:text-lg mt-4 mb-1">مشخصات محصول</p>
        <div class="text-gray-500 text-sm divide-y divide-zinc-200">
        @foreach ($attributes as $attribute)
          <div class="flex items-center justify-start p-3 pb-6 w-full my-4">
                <div class="text-sm md:text-basetext-(--color-zinc-700) w-3/12 font-yekanBakhRegular">{{ $attribute->key }}</div>
                <div class="md:text-lg text-(--color-zinc-600) w-9/12 font-yekanBakhExtraBold">
                    {{ $attribute->value  }}
                </div>
            </div>
        @endforeach
          
        </div>
      </section>
      {{-- <section class="p-4 scroll-mt-36" id="comments">
        <p class="text-(--color-zinc-800) md:text-lg mb-1 mt-4">
          دیدگاه ها
        </p>
        <div class="lg:flex gap-5">
          <div class="lg:w-3/12 py-5">
            <div class="mt-4 mb-2 text-sm text-(--color-zinc-700)">
              شما هم دیدگاه خود را ثبت کنید
            </div>
            <ul class="grid my-3 gap-5 grid-cols-2">
              <li>
                <input type="radio" id="yes" name="hosting" value="yes" class="hidden peer" required="">
                <label for="yes" class="inline-flex items-center justify-center w-full px-2 py-3 text-(--color-zinc-600) bg-white border border-(--color-zinc-200) rounded-lg cursor-pointer peer-checked:border-(--color-green-400) peer-checked:text-(--color-green-500) hover:text-(--color-zinc-600) hover:bg-(--color-zinc-100)">                           
                  <div class="flex items-center gap-x-1">
                    <svg class="fill-(--color-green-500)" xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="" viewBox="0 0 256 256"><path d="M234,80.12A24,24,0,0,0,216,72H160V56a40,40,0,0,0-40-40,8,8,0,0,0-7.16,4.42L75.06,96H32a16,16,0,0,0-16,16v88a16,16,0,0,0,16,16H204a24,24,0,0,0,23.82-21l12-96A24,24,0,0,0,234,80.12ZM32,112H72v88H32ZM223.94,97l-12,96a8,8,0,0,1-7.94,7H88V105.89l36.71-73.43A24,24,0,0,1,144,56V80a8,8,0,0,0,8,8h64a8,8,0,0,1,7.94,9Z"></path></svg>
                    <div class="text-sm">پیشنهاد میشود</div>
                  </div>
                </label>
              </li>
              <li>
                <input type="radio" id="no" name="hosting" value="no" class="hidden peer" required="">
                <label for="no" class="inline-flex items-center justify-center w-full px-2 py-3 text-(--color-zinc-600) bg-white border border-(--color-zinc-200) rounded-lg cursor-pointer peer-checked:border-(--color-red-400) peer-checked:text-(--color-red-500) hover:text-(--color-zinc-600) hover:bg-(--color-zinc-100)">                           
                  <div class="flex items-center gap-x-1">
                    <svg class="fill-(--color-red-500)" xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="" viewBox="0 0 256 256"><path d="M239.82,157l-12-96A24,24,0,0,0,204,40H32A16,16,0,0,0,16,56v88a16,16,0,0,0,16,16H75.06l37.78,75.58A8,8,0,0,0,120,240a40,40,0,0,0,40-40V184h56a24,24,0,0,0,23.82-27ZM72,144H32V56H72Zm150,21.29a7.88,7.88,0,0,1-6,2.71H152a8,8,0,0,0-8,8v24a24,24,0,0,1-19.29,23.54L88,150.11V56H204a8,8,0,0,1,7.94,7l12,96A7.87,7.87,0,0,1,222,165.29Z"></path></svg>
                    <div class="text-sm">پیشنهاد نمیشود</div>
                  </div>
                </label>
              </li>
            </ul>
            <textarea placeholder="متن دیدگاه" name="mailTicket" cols="30" rows="7" class="rounded-2xl rounded-tr-sm text-sm text-(--color-zinc-600) w-full bg-white border border-(--color-zinc-200) px-5 py-3.5 placeholder:text-(--color-zinc-400) placeholder:text-xs focus:outline-1 focus:outline-zinc-300"></textarea>
            <button class="hidden lg:block mx-auto cursor-pointer w-full px-2 py-3 text-sm bg-gradient-to-bl from-(--color-primary-400) to-(--color-primary-600) hover:opacity-80 transition text-gray-100 rounded-lg">
              ارسال دیدگاه
            </button>
          </div>
          <div class="lg:w-9/12 divide-y-2 divide-(--color-zinc-300)">
            <div class="px-2 pt-5">
              <div class="text-lg text-(--color-zinc-700)">
                خوب بود ارزش خرید داره
              </div>
              <div class="mt-2 flex gap-x-4 items-center border-b border-(--color-zinc-200) pb-3">
                <div class="text-xs text-(--color-zinc-600)">
                  11 بهمن 1402
                </div>
                <div class="text-xs text-(--color-zinc-600)">
                 امیر محمد سزاوار
                </div>
                <div class="text-xs text-zinc-50 bg-(--color-green-400) rounded-full px-2 py-1">
                  خریدار
                </div>
              </div>
              <div class="flex items-center gap-x-1 pt-3">
                <svg class="fill-(--color-green-500)" xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="" viewBox="0 0 256 256"><path d="M234,80.12A24,24,0,0,0,216,72H160V56a40,40,0,0,0-40-40,8,8,0,0,0-7.16,4.42L75.06,96H32a16,16,0,0,0-16,16v88a16,16,0,0,0,16,16H204a24,24,0,0,0,23.82-21l12-96A24,24,0,0,0,234,80.12ZM32,112H72v88H32ZM223.94,97l-12,96a8,8,0,0,1-7.94,7H88V105.89l36.71-73.43A24,24,0,0,1,144,56V80a8,8,0,0,0,8,8h64a8,8,0,0,1,7.94,9Z"></path></svg>
                <div class="text-sm text-(--color-green-500)">پیشنهاد میشود</div>
              </div>
              <div class="mt-2 text-(--color-zinc-600) text-sm">
                واقعا لپ تاپ عالی از هر نظر نسبت به قیمتش
              </div>
              <div class="flex justify-end items-center gap-x-5 mt-3">
                <div class="text-sm text-(--color-zinc-400)">
                  آیا این دیدگاه برایتان مفید بود؟
                </div>
                <ul class="grid my-3 gap-5 grid-cols-2">
                  <li>
                    <input type="radio" id="selamm" name="what1" value="selamm" class="hidden peer" required="">
                    <label for="selamm" class="inline-flex p-2 border border-(--color-zinc-200) rounded-lg cursor-pointer peer-checked:border-(--color-green-400) hover:bg-(--color-zinc-100)">                           
                      <svg class="fill-(--color-green-500)" xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="" viewBox="0 0 256 256"><path d="M234,80.12A24,24,0,0,0,216,72H160V56a40,40,0,0,0-40-40,8,8,0,0,0-7.16,4.42L75.06,96H32a16,16,0,0,0-16,16v88a16,16,0,0,0,16,16H204a24,24,0,0,0,23.82-21l12-96A24,24,0,0,0,234,80.12ZM32,112H72v88H32ZM223.94,97l-12,96a8,8,0,0,1-7.94,7H88V105.89l36.71-73.43A24,24,0,0,1,144,56V80a8,8,0,0,0,8,8h64a8,8,0,0,1,7.94,9Z"></path></svg>
                    </label>
                  </li>
                  <li>
                    <input type="radio" id="isbad12" name="what1" value="isbad12" class="hidden peer" required="">
                    <label for="isbad12" class="inline-flex p-2 border border-(--color-zinc-200) rounded-lg cursor-pointer peer-checked:border-(--color-red-400) hover:bg-(--color-zinc-100)">                           
                      <svg class="fill-(--color-red-500)" xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="" viewBox="0 0 256 256"><path d="M239.82,157l-12-96A24,24,0,0,0,204,40H32A16,16,0,0,0,16,56v88a16,16,0,0,0,16,16H75.06l37.78,75.58A8,8,0,0,0,120,240a40,40,0,0,0,40-40V184h56a24,24,0,0,0,23.82-27ZM72,144H32V56H72Zm150,21.29a7.88,7.88,0,0,1-6,2.71H152a8,8,0,0,0-8,8v24a24,24,0,0,1-19.29,23.54L88,150.11V56H204a8,8,0,0,1,7.94,7l12,96A7.87,7.87,0,0,1,222,165.29Z"></path></svg>
                    </label>
                  </li>
                </ul>
              </div>
            </div>
            <div class="px-2 pt-5">
              <div class="text-lg text-(--color-zinc-700)">
                تاچ پدش خراب بود، اجازه ی مرجوعی هم ندادن
              </div>
              <div class="mt-2 flex gap-x-4 items-center border-b border-(--color-zinc-200) pb-3">
                <div class="text-xs text-(--color-zinc-600)">
                  10 بهمن 1402
                </div>
                <div class="text-xs text-(--color-zinc-600)">
                 امیر محمد سزاوار
                </div>
                <div class="text-xs text-zinc-50 bg-(--color-green-400) rounded-full px-2 py-1">
                  خریدار
                </div>
              </div>
              <div class="flex items-center gap-x-1 pt-3">
                <svg class="fill-(--color-red-500)" xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="" viewBox="0 0 256 256"><path d="M239.82,157l-12-96A24,24,0,0,0,204,40H32A16,16,0,0,0,16,56v88a16,16,0,0,0,16,16H75.06l37.78,75.58A8,8,0,0,0,120,240a40,40,0,0,0,40-40V184h56a24,24,0,0,0,23.82-27ZM72,144H32V56H72Zm150,21.29a7.88,7.88,0,0,1-6,2.71H152a8,8,0,0,0-8,8v24a24,24,0,0,1-19.29,23.54L88,150.11V56H204a8,8,0,0,1,7.94,7l12,96A7.87,7.87,0,0,1,222,165.29Z"></path></svg>
                <div class="text-sm text-(--color-red-500)">پیشنهاد نمیشود</div>
              </div>
              <div class="mt-2 text-(--color-zinc-600) text-sm">
                واقعا لپ تاپ عالی از هر نظر نسبت به قیمتش
              </div>
              <div class="flex justify-end items-center gap-x-5 mt-3">
                <div class="text-sm text-(--color-zinc-400)">
                  آیا این دیدگاه برایتان مفید بود؟
                </div>
                <ul class="grid my-3 gap-5 grid-cols-2">
                  <li>
                    <input type="radio" id="selamm2" name="what2" value="selamm2" class="hidden peer" required="">
                    <label for="selamm2" class="inline-flex p-2 border border-(--color-zinc-200) rounded-lg cursor-pointer peer-checked:border-(--color-green-400) hover:bg-(--color-zinc-100)">                           
                      <svg class="fill-(--color-green-500)" xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="" viewBox="0 0 256 256"><path d="M234,80.12A24,24,0,0,0,216,72H160V56a40,40,0,0,0-40-40,8,8,0,0,0-7.16,4.42L75.06,96H32a16,16,0,0,0-16,16v88a16,16,0,0,0,16,16H204a24,24,0,0,0,23.82-21l12-96A24,24,0,0,0,234,80.12ZM32,112H72v88H32ZM223.94,97l-12,96a8,8,0,0,1-7.94,7H88V105.89l36.71-73.43A24,24,0,0,1,144,56V80a8,8,0,0,0,8,8h64a8,8,0,0,1,7.94,9Z"></path></svg>
                    </label>
                  </li>
                  <li>
                    <input type="radio" id="isbad2" name="what2" value="isbad2" class="hidden peer" required="">
                    <label for="isbad2" class="inline-flex p-2 border border-(--color-zinc-200) rounded-lg cursor-pointer peer-checked:border-(--color-red-400) hover:bg-(--color-zinc-100)">                           
                      <svg class="fill-(--color-red-500)" xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="" viewBox="0 0 256 256"><path d="M239.82,157l-12-96A24,24,0,0,0,204,40H32A16,16,0,0,0,16,56v88a16,16,0,0,0,16,16H75.06l37.78,75.58A8,8,0,0,0,120,240a40,40,0,0,0,40-40V184h56a24,24,0,0,0,23.82-27ZM72,144H32V56H72Zm150,21.29a7.88,7.88,0,0,1-6,2.71H152a8,8,0,0,0-8,8v24a24,24,0,0,1-19.29,23.54L88,150.11V56H204a8,8,0,0,1,7.94,7l12,96A7.87,7.87,0,0,1,222,165.29Z"></path></svg>
                    </label>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </section> --}}
      {{-- <section class="p-4 scroll-mt-36" id="comments2">
        <p class="text-(--color-zinc-800) md:text-lg mb-1 mt-4">
          پرسش و پاسخ
        </p>
        <div class="lg:flex gap-5">
          <div class="lg:w-3/12 py-5">
            <div class="mt-4 mb-2 text-sm text-(--color-zinc-700)">
              اگر سوالی دارید بپرسید
            </div>
            <textarea placeholder="متن سوال" name="mailTicket" cols="30" rows="7" class="rounded-2xl rounded-tr-sm text-sm text-(--color-zinc-600) w-full bg-white border border-(--color-zinc-200) px-5 py-3.5 placeholder:text-(--color-zinc-400) placeholder:text-xs focus:outline-1 focus:outline-zinc-300"></textarea>
            <button class="hidden lg:block mx-auto cursor-pointer w-full px-2 py-3 text-sm bg-gradient-to-bl from-(--color-primary-400) to-(--color-primary-600) hover:opacity-80 transition text-gray-100 rounded-lg">
              ارسال دیدگاه
            </button>
          </div>
          <div class="lg:w-9/12 divide-y-2 divide-(--color-zinc-300)">
            <div class="px-2 pt-5">
              <div class="text-lg text-(--color-zinc-700)">
                خوب بود ارزش خرید داره
              </div>
              <div class="mt-2 flex gap-x-4 items-center border-b border-(--color-zinc-200) pb-3">
                <div class="text-xs text-(--color-zinc-600)">
                  11 بهمن 1402
                </div>
                <div class="text-xs text-(--color-zinc-600)">
                 امیر محمد سزاوار
                </div>
              </div>
              <div class="mt-4 text-(--color-zinc-600) text-sm">
                آیا ویندوز به صورت پیش فرض روش نصبه یا باید خودمون نصب کنیم؟
              </div>
              <div class="flex justify-end items-center gap-x-5 mt-3">
                <div class="text-sm text-(--color-zinc-400)">
                  آیا این سوال برایتان مفید بود؟
                </div>
                <ul class="grid my-3 gap-5 grid-cols-2">
                  <li>
                    <input type="radio" id="isgood" name="what" value="isgood" class="hidden peer" required="">
                    <label for="isgood" class="inline-flex p-2 border border-(--color-zinc-200) rounded-lg cursor-pointer peer-checked:border-(--color-green-400) hover:bg-(--color-zinc-100)">                           
                      <svg class="fill-(--color-green-500)" xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="" viewBox="0 0 256 256"><path d="M234,80.12A24,24,0,0,0,216,72H160V56a40,40,0,0,0-40-40,8,8,0,0,0-7.16,4.42L75.06,96H32a16,16,0,0,0-16,16v88a16,16,0,0,0,16,16H204a24,24,0,0,0,23.82-21l12-96A24,24,0,0,0,234,80.12ZM32,112H72v88H32ZM223.94,97l-12,96a8,8,0,0,1-7.94,7H88V105.89l36.71-73.43A24,24,0,0,1,144,56V80a8,8,0,0,0,8,8h64a8,8,0,0,1,7.94,9Z"></path></svg>
                    </label>
                  </li>
                  <li>
                    <input type="radio" id="isbad" name="what" value="isbad" class="hidden peer" required="">
                    <label for="isbad" class="inline-flex p-2 border border-(--color-zinc-200) rounded-lg cursor-pointer peer-checked:border-(--color-red-400) hover:bg-(--color-zinc-100)">                           
                      <svg class="fill-(--color-red-500)" xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="" viewBox="0 0 256 256"><path d="M239.82,157l-12-96A24,24,0,0,0,204,40H32A16,16,0,0,0,16,56v88a16,16,0,0,0,16,16H75.06l37.78,75.58A8,8,0,0,0,120,240a40,40,0,0,0,40-40V184h56a24,24,0,0,0,23.82-27ZM72,144H32V56H72Zm150,21.29a7.88,7.88,0,0,1-6,2.71H152a8,8,0,0,0-8,8v24a24,24,0,0,1-19.29,23.54L88,150.11V56H204a8,8,0,0,1,7.94,7l12,96A7.87,7.87,0,0,1,222,165.29Z"></path></svg>
                    </label>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </section> --}}
      <!-- sldier products -->
      
@if(isset($relatedProducts) && count($relatedProducts) > 0)
<section class="">
    <div class="w-[93%] md:w-full flex justify-between items-center mx-auto">
        <span class="w-48 min-w-fit text-xs md:text-sm md:font-yekanBakhBold text-(--color-zinc-600)">محصولات مرتبط</span>
        <span class="h-[1px] w-full bg-gradient-to-r from-white via-(--color-zinc-500) to-white "></span>
        <div class="w-32 min-w-fit text-left">
            <a href="" class="text-sm hover:text-(--color-primary-500) text-(--color-zinc-600) flex fle items-center gap-x-1 group">
                مشاهده همه
                <svg class="fill-(--color-zinc-600) hover:fill-(--color-primary-500) group-hover:-translate-x-1 transition group-hover:fill-(--color-primary-500) size-2.5 md:size-3" xmlns="http://www.w3.org/2000/svg" width="" height="" fill="" viewBox="0 0 256 256"><path d="M224,128a8,8,0,0,1-8,8H59.31l58.35,58.34a8,8,0,0,1-11.32,11.32l-72-72a8,8,0,0,1,0-11.32l72-72a8,8,0,0,1,11.32,11.32L59.31,120H216A8,8,0,0,1,224,128Z"></path></svg>        
            </a>
        </div>
    </div>
    
    <div class="overflow-x-auto w-[93%] md:w-full h-[350px] md:h-[460px] flex flex-row rounded-xl bg-white mx-auto px-[16px] py-[32px]
        [&::-webkit-scrollbar]:w-0.5
        [&::-webkit-scrollbar-thumb]:bg-(--color-primary-500)
        [&::-webkit-scrollbar-thumb]:rounded-full">
        <div class="flex flex-row gap-3">
            @foreach($relatedProducts as $item)
            <div class="w-[170px] md:w-[245px] h-[300px] md:h-[400px] text-sm border-1 border-(--color-zinc-300) rounded-2xl px-2 hover:shadow-lg transition">
                <a href="{{ route('product.show', $item->id) }}" class="flex items-center justify-center">
                    @php
                        $itemMainImage = $item->medias->where('is_main', 1)->first();
                    @endphp
                    
                    @if($itemMainImage)
                        <img src="{{ asset('storage/'.$itemMainImage->path) }}" alt="{{ $item->title }}" class="rounded-xl mb-3 w-[130px] md:w-[220px] h-[130px] md:h-[220px] object-cover">
                    @else
                        <img src="{{ asset('img/products/default.jpg') }}" alt="{{ $item->title }}" class="rounded-xl mb-3 w-[130px] md:w-[220px] h-[130px] md:h-[220px] object-cover">
                    @endif
                </a>
                
                
                <a href="{{ route('product.show', $item->id) }}" class="mb-3 text-xs md:text-sm line-clamp-2">
                    {{ $item->title }}
                </a>
                
                <span class="flex flex-row justify-between items-center mb-3">
                    <span class="flex gap-1 mt-4">
                        @php
                            $colors = $item->attributes->where('key', 'رنگ');
                        @endphp
                        
                        @foreach($colors as $color)
                            <div class="w-3 md:w-4 h-3 md:h-4 rounded-full" style="background-color: {{ $color->value }}"></div>
                        @endforeach
                    </span>
                    
                    <span class="flex items-center gap-0.5">
                        <span class="text-[9px] text-(--color-zinc-500)">({{ $item->comments_count ?? 0 }})</span>
                        <span class="text-xs text-(--color-zinc-500)">{{ $item->rating ?? '4.4' }}</span>
                        <span class="">
                            <svg class="fill-primary-500" xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="#f9bc00" viewBox="0 0 256 256"><path d="M234.5,114.38l-45.1,39.36,13.51,58.6a16,16,0,0,1-23.84,17.34l-51.11-31-51,31a16,16,0,0,1-23.84-17.34L66.61,153.8,21.5,114.38a16,16,0,0,1,9.11-28.06l59.46-5.15,23.21-55.36a15.95,15.95,0,0,1,29.44,0h0L166,81.17l59.44,5.15a16,16,0,0,1,9.11,28.06Z"></path></svg>
                        </span>
                    </span>
                </span>
                
                <div class="border-dashed border-t-1 border-(--color-zinc-200) flex justify-end items-center h-12">
                    <span class="flex items-center text-base md:text-base gap-2">
                        @php
                            // $finalPrice = $item->price - ($item->price * ($item->discount ?? 0) / 100);
                            $finalPrice = (int)$item->price - ((int)$item->price * (int)$item->discount / 100);
                        @endphp
                        {{ number_format($finalPrice) }}
                        <span>تومان</span>
                    </span>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endif
    </div>
@endsection



