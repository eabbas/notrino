<!doctype html>
<html lang="fa" dir="rtl">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <link rel="stylesheet" href="{{ url('assets/css/style.css') }}" type="text/css">
    <title>@yield('title')</title>
    <style>
        /* استایل‌های اضافی برای منوی موبایل */
        .mobile-menu-item {
            transition: all 0.3s ease;
        }
        
        .mobile-submenu {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.3s ease-out;
            padding-right: 1rem;
        }
        
        .mobile-submenu.open {
            max-height: 500px;
            transition: max-height 0.5s ease-in;
        }
        
        .mobile-menu-header svg.rotate {
            transform: rotate(180deg);
        }
        
        /* استایل اسکرول برای منوی موبایل */
        .mobile-menu-scroll {
            scrollbar-width: none;
            -ms-overflow-style: none;
        }
        
        .mobile-menu-scroll::-webkit-scrollbar {
            display: none;
        }
    </style>
</head>

<body>

    <div class="w-full flex flex-row">
        <div class="hidden lg:block lg:w-[265px] bg-[#0D0E12] fixed z-50 right-0 top-0 h-dvh px-5 text-sm">
            <div class="w-full">
                <a href="{{ route('home') }}"
                    class="block w-full py-3 text-center font-bold text-3xl text-white border-b border-[darkslategray]">
                        notrino.com
                </a>
            </div>
            <div class="py-5 h-[90%] overflow-y-auto flex flex-col gap-5" style="scrollbar-width: none;">
               
                <div class="flex flex-row items-start gap-2.5">
                    <svg xmlns="http://www.w3.org/2000/svg" class="size-5" viewBox="0 0 576 512">
                        <path fill="white"
                            d="M575.8 255.5c0 18-15 32.1-32 32.1h-32l.7 160.2c0 2.7-.2 5.4-.5 8.1V472c0 22.1-17.9 40-40 40H456c-1.1 0-2.2 0-3.3-.1c-1.4 .1-2.8 .1-4.2 .1H416 392c-22.1 0-40-17.9-40-40V448 384c0-17.7-14.3-32-32-32H256c-17.7 0-32 14.3-32 32v64 24c0 22.1-17.9 40-40 40H160 128.1c-1.5 0-3-.1-4.5-.2c-1.2 .1-2.4 .2-3.6 .2H104c-22.1 0-40-17.9-40-40V360c0-.9 0-1.9 .1-2.8V287.6H32c-18 0-32-14-32-32.1c0-9 3-17 10-24L266.4 8c7-7 15-8 22-8s15 2 21 7L564.8 231.5c8 7 12 15 11 24z" />
                    </svg>
                    <a href="{{ route('home') }}" class="block w-full text-white py-1" target="_blank">
                        بازدید از سایت
                    </a>
                </div>
                





                    @if (Auth::user()->role[0]->title == 'ادمین') 
                    <div class="dashboard">
                    <div
                        class="flex justify-between flex-row-reverse cursor-pointer px-2 rounded-sm py-1.5 @if (Route::is('user.list') ||
                                Route::is('user.create_user')) bg-gray-700 @endif">
                        <svg xmlns="http://www.w3.org/2000/svg"
                            class="size-4 transition-all duration-200 @if (Route::is('user.list') ||
                                    Route::is('user.create_user')) rotate-180 @endif"
                            viewBox="0 0 448 512">
                            <path fill="white"
                                d="M241 337c-9.4 9.4-24.6 9.4-33.9 0L47 177c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l143 143L367 143c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9L241 337z" />
                        </svg>
                        <div class="flex flex-row-reverse items-center gap-2">
                            <span class=" text-[white] flex justify-end font-bold">کاربران</span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="size-5" viewBox="0 0 448 512">
                                <path fill="white"
                                    d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3z" />
                            </svg>
                        </div>
                    </div>
                    <ul
                        class="my-1 pr-3 transition-all duration-500 overflow-hidden @if (Route::is('user.list') ||
                                Route::is('user.create_user')) max-h-[500px] @else max-h-0 @endif">
                        <li
                            class="flex flex-row items-center gap-2.5 mt-2.5 mb-2.5 pr-5 rounded-sm @if (Route::is('user.list')) bg-gray-700 @endif">
                            <span class="size-1 bg-white rounded-sm"></span>
                            <a href="{{ route('user.list') }}" class="text-white py-1 block">
                                مشاهده همه کاربران
                            </a>
                        </li>
                        <li
                            class="flex flex-row items-center gap-2.5 mt-2.5 mb-2.5 pr-5 rounded-sm @if (Route::is('user.create_user')) bg-gray-700 @endif">
                            <span class="size-1 bg-white rounded-sm"></span>
                            <a href="{{ route('user.create_user') }}" class="text-white py-1 block">
                                ایجاد کاربر جدید
                            </a>
                        </li>
                    </ul>
                </div>
                @endif




                    @if (Auth::user()->role[0]->title == 'ادمین') 
                    <div class="dashboard">
                    <div
                        class="flex justify-between flex-row-reverse cursor-pointer px-2 rounded-sm py-1.5 @if (Route::is('footer.footerCreate') ||
                                Route::is('express.expressCreate') || 
                                Route::is('setting.createDescription') ||
                                Route::is('setting.createLogo')) bg-gray-700 @endif">
                        <svg xmlns="http://www.w3.org/2000/svg"
                            class="size-4 transition-all duration-200 @if (Route::is('footer.footerCreate') ||
                                    Route::is('express.expressCreate') || 
                                    Route::is('setting.createDescription')||
                                    Route::is('setting.createLogo')) rotate-180 @endif"
                            viewBox="0 0 448 512">
                            <path fill="white"
                                d="M241 337c-9.4 9.4-24.6 9.4-33.9 0L47 177c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l143 143L367 143c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9L241 337z" />
                        </svg>
                        <div class="flex flex-row-reverse items-center gap-2">
                            <span class=" text-[white] flex justify-end font-bold">فوتر</span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="size-5" viewBox="0 0 448 512">
                                <path fill="white"
                                    d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3z" />
                            </svg>
                        </div>
                    </div>
                    <ul
                        class="my-1 pr-3 transition-all duration-500 overflow-hidden @if (Route::is('footer.footerCreate') ||
                                 Route::is('express.expressCreate') || 
                                Route::is('setting.createDescription') ||
                                Route::is('setting.createLogo')) max-h-[500px] @else max-h-0 @endif">
                        <li
                            class="flex flex-row items-center gap-2.5 mt-2.5 mb-2.5 pr-5 rounded-sm @if (Route::is('footer.footerCreate')) bg-gray-700 @endif">
                            <span class="size-1 bg-white rounded-sm"></span>
                            <a href="{{ route('footer.footerCreate') }}" class="text-white py-1 block">
                                ایجاد ستون های فوتر
                            </a>
                        </li>
                        <li
                            class="flex flex-row items-center gap-2.5 mt-2.5 mb-2.5 pr-5 rounded-sm @if (Route::is('express.expressCreate')) bg-gray-700 @endif">
                            <span class="size-1 bg-white rounded-sm"></span>
                            <a href="{{ route('express.expressCreate') }}" class="text-white py-1 block">
                                ایجاد بنر های فوتر 
                            </a>
                        </li>
                        <li
                            class="flex flex-row items-center gap-2.5 mt-2.5 mb-2.5 pr-5 rounded-sm @if (Route::is('setting.createDescription')) bg-gray-700 @endif">
                            <span class="size-1 bg-white rounded-sm"></span>
                            <a href="{{ route('setting.createDescription') }}" class="text-white py-1 block">
                                توضیحات فوتر  
                            </a>
                        </li>
                        <li
                            class="flex flex-row items-center gap-2.5 mt-2.5 mb-2.5 pr-5 rounded-sm @if (Route::is('setting.createLogo')) bg-gray-700 @endif">
                            <span class="size-1 bg-white rounded-sm"></span>
                            <a href="{{ route('setting.createLogo') }}" class="text-white py-1 block">
                                توضیحات فوتر  
                            </a>
                        </li>
                       
                    </ul>
                </div>
                @endif

                
                @if (Auth::user()->role[0]->title == 'ادمین') 
                <div class="dashboard">
                <div
                    class="flex justify-between flex-row-reverse cursor-pointer px-2 rounded-sm py-1.5 @if (Route::is('product.create') ||
                            Route::is('product.list')) bg-gray-700 @endif">
                    <svg xmlns="http://www.w3.org/2000/svg"
                        class="size-4 transition-all duration-200 @if (Route::is('product.create') ||
                                Route::is('product.list')) rotate-180 @endif"
                        viewBox="0 0 448 512">
                        <path fill="white"
                            d="M241 337c-9.4 9.4-24.6 9.4-33.9 0L47 177c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l143 143L367 143c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9L241 337z" />
                    </svg>
                    <div class="flex flex-row-reverse items-center gap-2">
                        <span class=" text-[white] flex justify-end font-bold">محصولات</span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="size-5" viewBox="0 0 448 512">
                            <path fill="white"
                                d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3z" />
                        </svg>
                    </div>
                </div>
                <ul
                    class="my-1 pr-3 transition-all duration-500 overflow-hidden @if (Route::is('product.create') ||
                            Route::is('product.list')) max-h-[500px] @else max-h-0 @endif">
                    <li
                        class="flex flex-row items-center gap-2.5 mt-2.5 mb-2.5 pr-5 rounded-sm @if (Route::is('product.create')) bg-gray-700 @endif">
                        <span class="size-1 bg-white rounded-sm"></span>
                        <a href="{{ route('product.create') }}" class="text-white py-1 block">
                            ایجاد محصولات 
                        </a>
                    </li>
                    <li
                        class="flex flex-row items-center gap-2.5 mt-2.5 mb-2.5 pr-5 rounded-sm @if (Route::is('product.list')) bg-gray-700 @endif">
                        <span class="size-1 bg-white rounded-sm"></span>
                        <a href="{{ route('product.list') }}" class="text-white py-1 block">
                             لیست محصولات   
                        </a>
                    </li>
                </ul>
            </div>
            @endif



                @if (Auth::user()->role[0]->title == 'ادمین') 
                <div class="dashboard">
                <div
                    class="flex justify-between flex-row-reverse cursor-pointer px-2 rounded-sm py-1.5 @if (Route::is('category.create') ||
                            Route::is('category.list')) bg-gray-700 @endif">
                    <svg xmlns="http://www.w3.org/2000/svg"
                        class="size-4 transition-all duration-200 @if (Route::is('category.create') ||
                                Route::is('category.list')) rotate-180 @endif"
                        viewBox="0 0 448 512">
                        <path fill="white"
                            d="M241 337c-9.4 9.4-24.6 9.4-33.9 0L47 177c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l143 143L367 143c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9L241 337z" />
                    </svg>
                    <div class="flex flex-row-reverse items-center gap-2">
                        <span class=" text-[white] flex justify-end font-bold">دسته ها</span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="size-5" viewBox="0 0 448 512">
                            <path fill="white"
                                d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3z" />
                        </svg>
                    </div>
                </div>
                <ul
                    class="my-1 pr-3 transition-all duration-500 overflow-hidden @if (Route::is('category.create') ||
                            Route::is('category.list')) max-h-[500px] @else max-h-0 @endif">
                    <li
                        class="flex flex-row items-center gap-2.5 mt-2.5 mb-2.5 pr-5 rounded-sm @if (Route::is('category.create')) bg-gray-700 @endif">
                        <span class="size-1 bg-white rounded-sm"></span>
                        <a href="{{ route('category.create') }}" class="text-white py-1 block">
                            ایجاد دسته بندی 
                        </a>
                    </li>
                    <li
                        class="flex flex-row items-center gap-2.5 mt-2.5 mb-2.5 pr-5 rounded-sm @if (Route::is('category.list')) bg-gray-700 @endif">
                        <span class="size-1 bg-white rounded-sm"></span>
                        <a href="{{ route('category.list') }}" class="text-white py-1 block">
                             لیست دسته ها   
                        </a>
                    </li>
                </ul>
            </div>
            @endif

                @if (Auth::user()->role[0]->title == 'ادمین') 
                <div class="dashboard">
                <div
                    class="flex justify-between flex-row-reverse cursor-pointer px-2 rounded-sm py-1.5 @if (Route::is('slider.sliderCreate') ||
                            Route::is('slider.list')||
                            Route::is('setting.createHeroBannerRight')||
                            Route::is('setting.createHeroBannerLeft')||
                            Route::is('brand.brandCreate')||
                            Route::is('brand.list')) bg-gray-700 @endif">
                    <svg xmlns="http://www.w3.org/2000/svg"
                        class="size-4 transition-all duration-200 @if (Route::is('slider.sliderCreate') ||
                            Route::is('slider.list')||
                            Route::is('setting.createHeroBannerRight')||
                            Route::is('setting.createHeroBannerLeft')||
                            Route::is('brand.brandCreate')||
                            Route::is('brand.list')) rotate-180 @endif"
                        viewBox="0 0 448 512">
                        <path fill="white"
                            d="M241 337c-9.4 9.4-24.6 9.4-33.9 0L47 177c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l143 143L367 143c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9L241 337z" />
                    </svg>
                    <div class="flex flex-row-reverse items-center gap-2">
                        <span class=" text-[white] flex justify-end font-bold">تنظیمات سایت</span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="size-5" viewBox="0 0 448 512">
                            <path fill="white"
                                d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3z" />
                        </svg>
                    </div>
                </div>
                <ul
                    class="my-1 pr-3 transition-all duration-500 overflow-hidden @if (Route::is('slider.sliderCreate') ||
                            Route::is('slider.list')||
                            Route::is('setting.createHeroBannerRight')||
                            Route::is('setting.createHeroBannerLeft')||
                            Route::is('brand.brandCreate')||
                            Route::is('brand.list')) max-h-[500px] @else max-h-0 @endif">
                    <li
                        class="flex flex-row items-center gap-2.5 mt-2.5 mb-2.5 pr-5 rounded-sm @if (Route::is('slider.sliderCreate')) bg-gray-700 @endif">
                        <span class="size-1 bg-white rounded-sm"></span>
                        <a href="{{ route('slider.sliderCreate') }}" class="text-white py-1 block">
                            ایجاد اسلایدر  
                        </a>
                    </li>
                    <li
                        class="flex flex-row items-center gap-2.5 mt-2.5 mb-2.5 pr-5 rounded-sm @if (Route::is('slider.list')) bg-gray-700 @endif">
                        <span class="size-1 bg-white rounded-sm"></span>
                        <a href="{{ route('slider.list') }}" class="text-white py-1 block">
                             لیست اسلایدر  
                        </a>
                    </li>
                    <li
                        class="flex flex-row items-center gap-2.5 mt-2.5 mb-2.5 pr-5 rounded-sm @if (Route::is('setting.createHeroBannerRight')) bg-gray-700 @endif">
                        <span class="size-1 bg-white rounded-sm"></span>
                        <a href="{{ route('setting.createHeroBannerRight') }}" class="text-white py-1 block">
                              ایجاد بنر سمت راست
                        </a>
                    </li>
                    <li
                        class="flex flex-row items-center gap-2.5 mt-2.5 mb-2.5 pr-5 rounded-sm @if (Route::is('setting.createHeroBannerLeft')) bg-gray-700 @endif">
                        <span class="size-1 bg-white rounded-sm"></span>
                        <a href="{{ route('setting.createHeroBannerLeft') }}" class="text-white py-1 block">
                              ایجاد بنر سمت چپ
                        </a>
                    </li>
                    <li
                        class="flex flex-row items-center gap-2.5 mt-2.5 mb-2.5 pr-5 rounded-sm @if (Route::is('brand.brandCreate')) bg-gray-700 @endif">
                        <span class="size-1 bg-white rounded-sm"></span>
                        <a href="{{ route('brand.brandCreate') }}" class="text-white py-1 block">
                              ایجاد برند
                        </a>
                    </li>
                    <li
                        class="flex flex-row items-center gap-2.5 mt-2.5 mb-2.5 pr-5 rounded-sm @if (Route::is('brand.list')) bg-gray-700 @endif">
                        <span class="size-1 bg-white rounded-sm"></span>
                        <a href="{{ route('brand.list') }}" class="text-white py-1 block">
                              لیست برند
                        </a>
                    </li>
                </ul>
            </div>
            @endif



            
                {{-- <div class="dashboard">
                    <div class="flex flex-row-reverse justify-between">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                            class="size-6 fill-white w-[15px]">
                            <path fill-rule="evenodd"
                                d="M12.53 16.28a.75.75 0 0 1-1.06 0l-7.5-7.5a.75.75 0 0 1 1.06-1.06L12 14.69l6.97-6.97a.75.75 0 1 1 1.06 1.06l-7.5 7.5Z"
                                clip-rule="evenodd" />
                        </svg>
                        <div class="flex flex-row-reverse items-center gap-2">
                            <span class=" text-[white] flex justify-end font-bold">درباره ما</span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="size-6" viewBox="0 0 640 512">
                                <path fill="white"
                                    d="M144 0a80 80 0 1 1 0 160A80 80 0 1 1 144 0zM512 0a80 80 0 1 1 0 160A80 80 0 1 1 512 0zM0 298.7C0 239.8 47.8 192 106.7 192h42.7c15.9 0 31 3.5 44.6 9.7c-1.3 7.2-1.9 14.7-1.9 22.3c0 38.2 16.8 72.5 43.3 96c-.2 0-.4 0-.7 0H21.3C9.6 320 0 310.4 0 298.7zM405.3 320c-.2 0-.4 0-.7 0c26.6-23.5 43.3-57.8 43.3-96c0-7.6-.7-15-1.9-22.3c13.6-6.3 28.7-9.7 44.6-9.7h42.7C592.2 192 640 239.8 640 298.7c0 11.8-9.6 21.3-21.3 21.3H405.3zM224 224a96 96 0 1 1 192 0 96 96 0 1 1 -192 0zM128 485.3C128 411.7 187.7 352 261.3 352H378.7C452.3 352 512 411.7 512 485.3c0 14.7-11.9 26.7-26.7 26.7H154.7c-14.7 0-26.7-11.9-26.7-26.7z" />
                            </svg>
                        </div>
                    </div>
                  
                </div> --}}
                {{-- @endif --}}
            </div>
        </div>
    </div>
    <div class="w-full">
        <header class="w-full fixed top-0 right-0 z-10">
            <div
                class="w-full float-end lg:w-[calc(100%-265px)] py-3 hidden lg:flex flex-row-reverse px-5 backdrop-blur-sm shadowHeader relative z-20">
                <div class="w-6/12 flex flex-row-reverse items-center">
                    <div class="relative hover_profile">
                        <div class="cursor-pointer">
                            @if (!Auth::user()->main_image)
                                <img src="{{ asset('assets/img/user.png') }}" alt="user__avatar"
                                    class="size-10 rounded-xl">
                            @else
                                <img src="{{ asset('storage/' . Auth::user()->main_image) }}" alt="user__picture"
                                    class="size-10 rounded-xl">
                            @endif
                        </div>
                        <div class="absolute left-0 pt-5 invisible opacity-0 transition-all duration-300">
                            <div class="w-[250px] rounded-xl  py-4 bg-white shadow__all__prof">
                                <div class="text-center px-2">
                                    <span class="font-bold">
                                        {{ Auth::user()->name }} {{ Auth::user()?->family }}
                                    </span>
                                </div>
                                <div class="w-full h-px bg-gray-300 mt-4 "></div>
                                <ul class="rtl text-right ">
                                    <li
                                        class="hover:text-[#1B84FF] hover:bg-[#F1F1F4] mt-1 w-11/12 ml-auto mr-auto rounded-lg">
                                        <a href="{{ route('user.profile', [Auth::user()]) }}"
                                            class="block w-full p-2">پروفایل من</a>
                                    </li>
                                    @if (!Auth::user()->email)
                                        <li
                                            class="hover:text-[#1B84FF] hover:bg-[#F1F1F4]  mt-1 w-11/12 ml-auto mr-auto rounded-lg">
                                            <a href="{{ route('user.compelete_form') }}"
                                                class="block w-full p-2">تکمیل
                                                پروفایل</a>
                                        </li>
                                    @endif

                                </ul>
                                <div class="w-full h-px bg-gray-300 my-2 "></div>
                                <div class="rtl text-right ">
                                    <div
                                        class="hover:text-[#1B84FF] hover:bg-[#F1F1F4] flex flex-row justify-between mt-1 w-11/12 ml-auto mr-auto rounded-lg">
                                        <a href="{{ route('user.setting') }}" class="block w-full p-2">تنظیمات
                                            اکانت</a>
                                    </div>
                                    <div
                                        class="hover:text-[#1B84FF] hover:bg-[#F1F1F4] flex flex-row justify-between mt-1 w-11/12 ml-auto mr-auto rounded-lg">
                                        <a href="{{ route('user.logout') }}" class="p-2 block w-full">خروج</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-6/12 flex justify-start">
                    <h3 class="text-2xl font-bold text-[#4B5675]">
                        <a href="{{ route('user.profile', [Auth::id()]) }}">
                            داشبورد
                        </a>
                    </h3>
                </div>
            </div>
            <div
                class="flex lg:hidden flex-row justify-between items-center py-2 px-5 backdrop-blur-sm shadowHeader relative z-20">
                <div class="flex flex-col w-8 h-5 justify-between cursor-pointer"
                    onclick="hamburgerMenu('open', this)">
                    <span class="w-full h-0.5 bg-black transition-all duration-300"></span>
                    <span class="w-full h-0.5 bg-black transition-all duration-300"></span>
                    <span class="w-full h-0.5 bg-black transition-all duration-300"></span>
                </div>
                @if (!Auth::user()->main_image)
                    <img src="{{ asset('assets/img/user.png') }}" alt="user__avatar" class="size-16 rounded-xl">
                @else
                    <img src="{{ asset('storage/' . Auth::user()->main_image) }}" alt="user__picture"
                        class="size-16 rounded-xl">
                @endif
            </div>
            <!-- hamburger menu - بازطراحی شده شبیه دسکتاپ -->
            <div id="mobileMenu" class="w-full h-dvh fixed top-0 -right-full bg-black/50 flex flex-row z-50 transition-all duration-500 backdrop-blur-sm">
                <div class="w-2/3 bg-[#0D0E12] h-full p-4 flex flex-col overflow-y-auto mobile-menu-scroll" style="scrollbar-width: none;">
                    <!-- پروفایل در منوی موبایل -->
                    <div class="flex flex-col items-center gap-3 pb-4 border-b border-gray-700 mb-4">
                        <div>
                            @if (!Auth::user()->main_image)
                                <img src="{{ asset('assets/img/user.png') }}" alt="user__avatar"
                                    class="size-20 rounded-xl border-2 border-gray-600">
                            @else
                                <img src="{{ asset('storage/' . Auth::user()->main_image) }}" alt="user__picture"
                                    class="size-20 rounded-xl border-2 border-gray-600">
                            @endif
                        </div>
                        <div class="text-center">
                            <span class="text-lg text-white font-semibold block">{{ Auth::user()->name }} {{ Auth::user()?->family }}</span>
                            @if(Auth::user()->role[0]->title)
                                <span class="text-sm text-gray-400 mt-1 block">{{ Auth::user()->role[0]->title }}</span>
                            @endif
                        </div>
                    </div>

                    <!-- لینک بازدید از سایت -->
                    <div class="flex flex-row items-center gap-2.5 py-3 px-2 hover:bg-gray-800 rounded-lg transition-all duration-300 mb-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="size-5" viewBox="0 0 576 512">
                            <path fill="white" d="M575.8 255.5c0 18-15 32.1-32 32.1h-32l.7 160.2c0 2.7-.2 5.4-.5 8.1V472c0 22.1-17.9 40-40 40H456c-1.1 0-2.2 0-3.3-.1c-1.4 .1-2.8 .1-4.2 .1H416 392c-22.1 0-40-17.9-40-40V448 384c0-17.7-14.3-32-32-32H256c-17.7 0-32 14.3-32 32v64 24c0 22.1-17.9 40-40 40H160 128.1c-1.5 0-3-.1-4.5-.2c-1.2 .1-2.4 .2-3.6 .2H104c-22.1 0-40-17.9-40-40V360c0-.9 0-1.9 .1-2.8V287.6H32c-18 0-32-14-32-32.1c0-9 3-17 10-24L266.4 8c7-7 15-8 22-8s15 2 21 7L564.8 231.5c8 7 12 15 11 24z" />
                        </svg>
                        <a href="{{ route('home') }}" class="block w-full text-white py-1 text-base font-medium">
                            بازدید از سایت
                        </a>
                    </div>

                    <!-- لینک‌های پروفایل -->
                    @if (!Auth::user()->email)
                    <div class="flex flex-row items-center gap-2.5 py-3 px-2 hover:bg-gray-800 rounded-lg transition-all duration-300 mb-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="size-5" viewBox="0 0 512 512" fill="white">
                            <path d="M256 48a208 208 0 1 1 0 416 208 208 0 1 1 0-416zm0 464A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM175 289c-9.4-9.4-24.6-9.4-33.9 0s-9.4 24.6 0 33.9l80 80c9.4 9.4 24.6 9.4 33.9 0l80-80c9.4-9.4 9.4-24.6 0-33.9s-24.6-9.4-33.9 0L288 321.9V168c0-13.3-10.7-24-24-24s-24 10.7-24 24V321.9l-49-49z"/>
                        </svg>
                        <a href="{{ route('user.compelete_form') }}" class="block w-full text-white py-1 text-base font-medium">
                            تکمیل پروفایل
                        </a>
                    </div>
                    @endif

                    <div class="flex flex-row items-center gap-2.5 py-3 px-2 hover:bg-gray-800 rounded-lg transition-all duration-300 mb-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="size-5" viewBox="0 0 512 512" fill="white">
                            <path d="M495.9 166.6c3.2 8.7 .5 18.4-6.4 24.6l-43.3 39.4c1.1 8.3 1.7 16.8 1.7 25.4s-.6 17.1-1.7 25.4l43.3 39.4c6.9 6.2 9.6 15.9 6.4 24.6c-4.4 11.9-9.7 23.3-15.8 34.3l-4.7 8.1c-6.6 11-14 21.4-22.1 31.2c-5.9 7.2-15.7 9.6-24.5 6.8l-55.7-17.7c-13.4 10.3-28.2 18.9-44 25.4l-12.5 57.1c-2 9.1-9 16.3-18.2 17.8c-13.8 2.3-28 3.5-42.5 3.5s-28.7-1.2-42.5-3.5c-9.2-1.5-16.2-8.7-18.2-17.8l-12.5-57.1c-15.8-6.5-30.6-15.1-44-25.4L83.1 425.9c-8.8 2.8-18.6 .3-24.5-6.8c-8.1-9.8-15.5-20.2-22.1-31.2l-4.7-8.1c-6.1-11-11.4-22.4-15.8-34.3c-3.2-8.7-.5-18.4 6.4-24.6l43.3-39.4C64.6 273.1 64 264.6 64 256s.6-17.1 1.7-25.4L22.4 191.2c-6.9-6.2-9.6-15.9-6.4-24.6c4.4-11.9 9.7-23.3 15.8-34.3l4.7-8.1c6.6-11 14-21.4 22.1-31.2c5.9-7.2 15.7-9.6 24.5-6.8l55.7 17.7c13.4-10.3 28.2-18.9 44-25.4l12.5-57.1c2-9.1 9-16.3 18.2-17.8C227.3 1.2 241.5 0 256 0s28.7 1.2 42.5 3.5c9.2 1.5 16.2 8.7 18.2 17.8l12.5 57.1c15.8 6.5 30.6 15.1 44 25.4l55.7-17.7c8.8-2.8 18.6-.3 24.5 6.8c8.1 9.8 15.5 20.2 22.1 31.2l4.7 8.1c6.1 11 11.4 22.4 15.8 34.3zM256 336a80 80 0 1 0 0-160 80 80 0 1 0 0 160z"/>
                        </svg>
                        <a href="{{ route('user.setting') }}" class="block w-full text-white py-1 text-base font-medium">
                            تنظیمات اکانت
                        </a>
                    </div>

                    <div class="w-full h-px bg-gray-700 my-3"></div>

                    @if (Auth::user()->role[0]->title == 'ادمین')
                        <!-- کاربران -->
                        <div class="mobile-menu-item mb-2">
                            <div class="flex flex-row justify-between items-center py-3 px-2 hover:bg-gray-800 rounded-lg cursor-pointer" onclick="toggleMobileSubmenu(this)">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-5 fill-white transition-transform duration-300">
                                    <path fill-rule="evenodd" d="M12.53 16.28a.75.75 0 0 1-1.06 0l-7.5-7.5a.75.75 0 0 1 1.06-1.06L12 14.69l6.97-6.97a.75.75 0 1 1 1.06 1.06l-7.5 7.5Z" clip-rule="evenodd" />
                                </svg>
                                <div class="flex flex-row items-center gap-2 flex-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="size-5" viewBox="0 0 448 512">
                                        <path fill="white" d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3z" />
                                    </svg>
                                    <span class="text-white font-bold">کاربران</span>
                                </div>
                            </div>
                            <ul class="mobile-submenu pr-4">
                                <li class="flex flex-row items-center gap-2.5 py-2 pr-6 hover:bg-gray-800 rounded-lg">
                                    <span class="size-1.5 bg-white rounded-sm"></span>
                                    <a href="{{ route('user.list') }}" class="text-white py-1 text-sm">مشاهده همه کاربران</a>
                                </li>
                                <li class="flex flex-row items-center gap-2.5 py-2 pr-6 hover:bg-gray-800 rounded-lg">
                                    <span class="size-1.5 bg-white rounded-sm"></span>
                                    <a href="{{ route('user.create_user') }}" class="text-white py-1 text-sm">ایجاد کاربر جدید</a>
                                </li>
                            </ul>
                        </div>

                        <!-- فوتر -->
                        <div class="mobile-menu-item mb-2">
                            <div class="flex flex-row justify-between items-center py-3 px-2 hover:bg-gray-800 rounded-lg cursor-pointer" onclick="toggleMobileSubmenu(this)">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-5 fill-white transition-transform duration-300">
                                    <path fill-rule="evenodd" d="M12.53 16.28a.75.75 0 0 1-1.06 0l-7.5-7.5a.75.75 0 0 1 1.06-1.06L12 14.69l6.97-6.97a.75.75 0 1 1 1.06 1.06l-7.5 7.5Z" clip-rule="evenodd" />
                                </svg>
                                <div class="flex flex-row items-center gap-2 flex-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" fill="currentColor" class="size-5 fill-white">
                                        <path d="M448 64c0 17.7-14.3 32-32 32H192c-17.7 0-32-14.3-32-32s14.3-32 32-32H416c17.7 0 32 14.3 32 32zm0 256c0 17.7-14.3 32-32 32H192c-17.7 0-32-14.3-32-32s14.3-32 32-32H416c17.7 0 32 14.3 32 32zM0 192c0-17.7 14.3-32 32-32H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32c-17.7 0-32-14.3-32-32zM448 448c0 17.7-14.3 32-32 32H32c-17.7 0-32-14.3-32-32s14.3-32 32-32H416c17.7 0 32 14.3 32 32z"/>
                                    </svg>
                                    <span class="text-white font-bold">فوتر</span>
                                </div>
                            </div>
                            <ul class="mobile-submenu pr-4">
                                <li class="flex flex-row items-center gap-2.5 py-2 pr-6 hover:bg-gray-800 rounded-lg">
                                    <span class="size-1.5 bg-white rounded-sm"></span>
                                    <a href="{{ route('footer.footerCreate') }}" class="text-white py-1 text-sm">ایجاد ستون های فوتر</a>
                                </li>
                                <li class="flex flex-row items-center gap-2.5 py-2 pr-6 hover:bg-gray-800 rounded-lg">
                                    <span class="size-1.5 bg-white rounded-sm"></span>
                                    <a href="{{ route('express.expressCreate') }}" class="text-white py-1 text-sm">ایجاد بنر های فوتر</a>
                                </li>
                                <li class="flex flex-row items-center gap-2.5 py-2 pr-6 hover:bg-gray-800 rounded-lg">
                                    <span class="size-1.5 bg-white rounded-sm"></span>
                                    <a href="{{ route('setting.createDescription') }}" class="text-white py-1 text-sm">توضیحات فوتر</a>
                                </li>
                                <li class="flex flex-row items-center gap-2.5 py-2 pr-6 hover:bg-gray-800 rounded-lg">
                                    <span class="size-1.5 bg-white rounded-sm"></span>
                                    <a href="{{ route('setting.createLogo') }}" class="text-white py-1 text-sm">لوگوی فوتر</a>
                                </li>
                            </ul>
                        </div>

                        <!-- محصولات -->
                        <div class="mobile-menu-item mb-2">
                            <div class="flex flex-row justify-between items-center py-3 px-2 hover:bg-gray-800 rounded-lg cursor-pointer" onclick="toggleMobileSubmenu(this)">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-5 fill-white transition-transform duration-300">
                                    <path fill-rule="evenodd" d="M12.53 16.28a.75.75 0 0 1-1.06 0l-7.5-7.5a.75.75 0 0 1 1.06-1.06L12 14.69l6.97-6.97a.75.75 0 1 1 1.06 1.06l-7.5 7.5Z" clip-rule="evenodd" />
                                </svg>
                                <div class="flex flex-row items-center gap-2 flex-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" fill="currentColor" class="size-5 fill-white">
                                        <path d="M64 0C28.7 0 0 28.7 0 64V448c0 35.3 28.7 64 64 64H384c35.3 0 64-28.7 64-64V64c0-35.3-28.7-64-64-64H64zm0 112c0-8.8 7.2-16 16-16h32c8.8 0 16 7.2 16 16v32c0 8.8-7.2 16-16 16H80c-8.8 0-16-7.2-16-16V112zm0 128c0-8.8 7.2-16 16-16h32c8.8 0 16 7.2 16 16v32c0 8.8-7.2 16-16 16H80c-8.8 0-16-7.2-16-16V240zM80 352h32c8.8 0 16 7.2 16 16v32c0 8.8-7.2 16-16 16H80c-8.8 0-16-7.2-16-16V368c0-8.8 7.2-16 16-16zm112 32c0-8.8 7.2-16 16-16H368c8.8 0 16 7.2 16 16s-7.2 16-16 16H208c-8.8 0-16-7.2-16-16zm16-272H368c8.8 0 16 7.2 16 16s-7.2 16-16 16H208c-8.8 0-16-7.2-16-16s7.2-16 16-16zM192 256c0-8.8 7.2-16 16-16H368c8.8 0 16 7.2 16 16s-7.2 16-16 16H208c-8.8 0-16-7.2-16-16z"/>
                                    </svg>
                                    <span class="text-white font-bold">محصولات</span>
                                </div>
                            </div>
                            <ul class="mobile-submenu pr-4">
                                <li class="flex flex-row items-center gap-2.5 py-2 pr-6 hover:bg-gray-800 rounded-lg">
                                    <span class="size-1.5 bg-white rounded-sm"></span>
                                    <a href="{{ route('product.create') }}" class="text-white py-1 text-sm">ایجاد محصولات</a>
                                </li>
                                <li class="flex flex-row items-center gap-2.5 py-2 pr-6 hover:bg-gray-800 rounded-lg">
                                    <span class="size-1.5 bg-white rounded-sm"></span>
                                    <a href="{{ route('product.list') }}" class="text-white py-1 text-sm">لیست محصولات</a>
                                </li>
                            </ul>
                        </div>

                        <!-- دسته ها -->
                        <div class="mobile-menu-item mb-2">
                            <div class="flex flex-row justify-between items-center py-3 px-2 hover:bg-gray-800 rounded-lg cursor-pointer" onclick="toggleMobileSubmenu(this)">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-5 fill-white transition-transform duration-300">
                                    <path fill-rule="evenodd" d="M12.53 16.28a.75.75 0 0 1-1.06 0l-7.5-7.5a.75.75 0 0 1 1.06-1.06L12 14.69l6.97-6.97a.75.75 0 1 1 1.06 1.06l-7.5 7.5Z" clip-rule="evenodd" />
                                </svg>
                                <div class="flex flex-row items-center gap-2 flex-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" fill="currentColor" class="size-5 fill-white">
                                        <path d="M0 96C0 78.3 14.3 64 32 64H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32C14.3 128 0 113.7 0 96zM0 256c0-17.7 14.3-32 32-32H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32c-17.7 0-32-14.3-32-32zM448 416c0 17.7-14.3 32-32 32H32c-17.7 0-32-14.3-32-32s14.3-32 32-32H416c17.7 0 32 14.3 32 32z"/>
                                    </svg>
                                    <span class="text-white font-bold">دسته ها</span>
                                </div>
                            </div>
                            <ul class="mobile-submenu pr-4">
                                <li class="flex flex-row items-center gap-2.5 py-2 pr-6 hover:bg-gray-800 rounded-lg">
                                    <span class="size-1.5 bg-white rounded-sm"></span>
                                    <a href="{{ route('category.create') }}" class="text-white py-1 text-sm">ایجاد دسته بندی</a>
                                </li>
                                <li class="flex flex-row items-center gap-2.5 py-2 pr-6 hover:bg-gray-800 rounded-lg">
                                    <span class="size-1.5 bg-white rounded-sm"></span>
                                    <a href="{{ route('category.list') }}" class="text-white py-1 text-sm">لیست دسته ها</a>
                                </li>
                            </ul>
                        </div>

                        <!-- تنظیمات سایت -->
                        <div class="mobile-menu-item mb-2">
                            <div class="flex flex-row justify-between items-center py-3 px-2 hover:bg-gray-800 rounded-lg cursor-pointer" onclick="toggleMobileSubmenu(this)">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-5 fill-white transition-transform duration-300">
                                    <path fill-rule="evenodd" d="M12.53 16.28a.75.75 0 0 1-1.06 0l-7.5-7.5a.75.75 0 0 1 1.06-1.06L12 14.69l6.97-6.97a.75.75 0 1 1 1.06 1.06l-7.5 7.5Z" clip-rule="evenodd" />
                                </svg>
                                <div class="flex flex-row items-center gap-2 flex-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" fill="currentColor" class="size-5 fill-white">
                                        <path d="M345 39.1L472.8 168.4c52.4 53 52.4 138.2 0 191.2L360.8 472.9c-9.3 9.4-24.5 9.5-33.9 .2s-9.5-24.5-.2-33.9L438.6 325.9c33.9-34.3 33.9-89.4 0-123.7L310.9 72.9c-9.3-9.4-9.2-24.6 .2-33.9s24.6-9.2 33.9 .2zM0 229.5V80C0 53.5 21.5 32 48 32H197.5c17 0 33.3 6.7 45.3 18.7l168 168c25 25 25 65.5 0 90.5L277.3 442.7c-25 25-65.5 25-90.5 0l-168-168C6.7 262.7 0 246.5 0 229.5zM144 144a32 32 0 1 0 -64 0 32 32 0 1 0 64 0z"/>
                                    </svg>
                                    <span class="text-white font-bold">تنظیمات سایت</span>
                                </div>
                            </div>
                            <ul class="mobile-submenu pr-4">
                                <li class="flex flex-row items-center gap-2.5 py-2 pr-6 hover:bg-gray-800 rounded-lg">
                                    <span class="size-1.5 bg-white rounded-sm"></span>
                                    <a href="{{ route('slider.sliderCreate') }}" class="text-white py-1 text-sm">ایجاد اسلایدر</a>
                                </li>
                                <li class="flex flex-row items-center gap-2.5 py-2 pr-6 hover:bg-gray-800 rounded-lg">
                                    <span class="size-1.5 bg-white rounded-sm"></span>
                                    <a href="{{ route('slider.list') }}" class="text-white py-1 text-sm">لیست اسلایدر</a>
                                </li>
                                <li class="flex flex-row items-center gap-2.5 py-2 pr-6 hover:bg-gray-800 rounded-lg">
                                    <span class="size-1.5 bg-white rounded-sm"></span>
                                    <a href="{{ route('setting.createHeroBannerRight') }}" class="text-white py-1 text-sm">ایجاد بنر سمت راست</a>
                                </li>
                                <li class="flex flex-row items-center gap-2.5 py-2 pr-6 hover:bg-gray-800 rounded-lg">
                                    <span class="size-1.5 bg-white rounded-sm"></span>
                                    <a href="{{ route('setting.createHeroBannerLeft') }}" class="text-white py-1 text-sm">ایجاد بنر سمت چپ</a>
                                </li>
                                <li class="flex flex-row items-center gap-2.5 py-2 pr-6 hover:bg-gray-800 rounded-lg">
                                    <span class="size-1.5 bg-white rounded-sm"></span>
                                    <a href="{{ route('brand.brandCreate') }}" class="text-white py-1 text-sm">ایجاد برند</a>
                                </li>
                                <li class="flex flex-row items-center gap-2.5 py-2 pr-6 hover:bg-gray-800 rounded-lg">
                                    <span class="size-1.5 bg-white rounded-sm"></span>
                                    <a href="{{ route('brand.list') }}" class="text-white py-1 text-sm">لیست برند</a>
                                </li>
                            </ul>
                        </div>
                    @endif

                    <!-- دکمه خروج در پایین -->
                    <div class="mt-auto pt-4 border-t border-gray-700">
                        <div class="flex flex-row items-center gap-2.5 py-3 px-2 hover:bg-red-900/30 rounded-lg transition-all duration-300">
                            <svg xmlns="http://www.w3.org/2000/svg" class="size-5" viewBox="0 0 512 512" fill="#ef4444">
                                <path d="M377.9 105.9L500.7 228.7c7.2 7.2 11.3 17.1 11.3 27.3s-4.1 20.1-11.3 27.3L377.9 406.1c-6.4 6.4-15 9.9-24 9.9c-18.7 0-33.9-15.2-33.9-33.9V320H192c-17.7 0-32-14.3-32-32V224c0-17.7 14.3-32 32-32H320V128c0-18.7 15.2-33.9 33.9-33.9c9 0 17.6 3.6 24 9.9zM160 96H96c-17.7 0-32 14.3-32 32V384c0 17.7 14.3 32 32 32h64c17.7 0 32 14.3 32 32s-14.3 32-32 32H96c-53 0-96-43-96-96V128C0 75 43 32 96 32h64c17.7 0 32 14.3 32 32s-14.3 32-32 32z"/>
                            </svg>
                            <a href="{{ route('user.logout') }}" class="block w-full text-red-500 py-1 text-base font-medium">
                                خروج از حساب کاربری
                            </a>
                        </div>
                    </div>
                </div>
                
                <!-- قسمت نیمه شفاف برای بستن منو -->
                <div class="w-1/3 bg-inherit h-full relative" onclick="hamburgerMenu('close', this)">
                    <svg xmlns="http://www.w3.org/2000/svg" class="size-8 absolute top-5 left-5 cursor-pointer bg-black/50 rounded-full p-1.5 hover:bg-black/70 transition-all" viewBox="0 0 384 512">
                        <path fill="white" d="M324.5 411.1c6.2 6.2 16.4 6.2 22.6 0s6.2-16.4 0-22.6L214.6 256 347.1 123.5c6.2-6.2 6.2-16.4 0-22.6s-16.4-6.2-22.6 0L192 233.4 59.5 100.9c-6.2-6.2-16.4-6.2-22.6 0s-6.2 16.4 0 22.6L169.4 256 36.9 388.5c-6.2 6.2-6.2 16.4 0 22.6s16.4 6.2 22.6 0L192 278.6 324.5 411.1z" />
                    </svg>
                </div>
            </div>
            <!-- hamburger menu end -->
        </header>
        <div class="w-full h-dvh lg:w-[calc(100%-265px)] float-end pt-20 lg:px-5 overflow-y-auto px-5 relative bg-[#F2F2F2]"
            style="scrollbar-width:none;">
            @yield('content')
        </div>
    </div>

      <script src="{{ asset('assets/js/userPanel.js') }}"></script>

    <script>
   
        function hamburgerMenu(action, element) {
            const menu = document.getElementById('mobileMenu');
            if (action === 'open') {
                menu.classList.remove('-right-full');
                menu.classList.add('right-0');
                document.body.style.overflow = 'hidden';
            } else {
                menu.classList.remove('right-0');
                menu.classList.add('-right-full');
                document.body.style.overflow = 'auto';
            }
        }


        function toggleMobileSubmenu(headerElement) {
            const submenu = headerElement.nextElementSibling;
            const arrowIcon = headerElement.querySelector('svg:first-child');
            
            submenu.classList.toggle('open');
            arrowIcon.classList.toggle('rotate');
        }


        document.addEventListener('DOMContentLoaded', function() {
            const mobileMenuLinks = document.querySelectorAll('#mobileMenu a');
            mobileMenuLinks.forEach(link => {
                link.addEventListener('click', function() {
                    setTimeout(() => {
                        hamburgerMenu('close', null);
                    }, 200);
                });
            });
        });
    </script>

    @yield('ajax')

</body>

</html>