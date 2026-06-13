<!DOCTYPE html>
<html lang="fe" dir="rtl">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}" type="text/css">
  <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" type="text/css">
  <script src="{{asset('assets/js/tailwind.js')}}"></script>
  <script src="{{asset('assets/js/jquery.js')}}"></script>
  <!-- <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script> -->
  <link rel="shortcut icon" href="{{ asset('storage/img/icons8-mobile-phone-48.png') }}" type="image/png">
  <title>@yield('title')</title>
  {{-- <style>
  .labal_perr_mobile:hover .labal_perrr_mobile {
  visibility: visible;
}
.labal_perr_kaver:hover .labal_perrr_kaver {
  visibility: visible;
}
.labal_perr_paverbank:hover .labal_perrr_paverbank {
  visibility: visible;
}
.labal_perr_eirpad:hover .labal_perrr_eirpad {
  visibility: visible;
}
.labal_perr_hedfone:hover .labal_perrr_hedfone {
  visibility: visible;
}
.labal_perr_lcd:hover .labal_perrr_lcd {
  visibility: visible;
}
.labal_perr_led:hover .labal_perrr_led {
  visibility: visible;
}
.labal_perr_rgb:hover .labal_perrr_rgb {
  visibility: visible;
}

  </style> --}}
  
</head>
<body class="overflow-y-auto
              [&::-webkit-scrollbar]:w-1.5
              [&::-webkit-scrollbar-thumb]:bg-(--color-primary-500)
              [&::-webkit-scrollbar-thumb]:rounded-full">
  <div class="max-w-[1700px] mx-auto">
    {{-- <header class="fixed w-[100%] z-50">
      <!-- top -->
      <section class="relative z-50 max-w-[1700px] h-20 bg-white flex justify-between items-center px-1 md:px-20 shadow-xl">
        <!-- menu-mobile -->
        <div id="hambeger" class="sticy md:absolute pr-4">
          <div class="menu-mobile sticy md:absolute md:hidden" onclick="Hamberger('open',this)">
            <svg class=" sticy md:absolute md:hidden fill-zinc-600" xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#000000" viewBox="0 0 256 256">
              <path d="M224,128a8,8,0,0,1-8,8H40a8,8,0,0,1,0-16H216A8,8,0,0,1,224,128ZM40,72H216a8,8,0,0,0,0-16H40a8,8,0,0,0,0,16ZM216,184H40a8,8,0,0,0,0,16H216a8,8,0,0,0,0-16Z"></path>
            </svg>
          </div>
          <div class="menu-mobile-slid fixed z-50 top-0 -right-full pt-10 flex flex-col bg-white h-[100vh] w-[70%] gap-10 shadow-2xl overflow-y-auto
            [&::-webkit-scrollbar]:w-1.5
            [&::-webkit-scrollbar-thumb]:bg-(--color-primary-500)
            [&::-webkit-scrollbar-thumb]:rounded-full">
            <div class=" w-[90%] h-12 bg-(--color-zinc-100) mx-auto flex justify-between p-3 items-center rounded-2xl">
              <input type="text" name="" placeholder="جستجوی محصول" class="outline-none">
              <button>
                <svg class="size-6 fill-zinc-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256">
                  <path d="M229.66,218.34l-50.07-50.06a88.11,88.11,0,1,0-11.31,11.31l50.06,50.07a8,8,0,0,0,11.32-11.32ZM40,112a72,72,0,1,1,72,72A72.08,72.08,0,0,1,40,112Z"></path>
                </svg>
              </button>
            </div>
            <ul class="flex flex-col justify-start gap-10">
              <li class="px-5"><a href="{{ route('home') }}" class="hover:text-(--color-primary-500)">صفحه اصلی</a></li>
              <li class="labal_3 relative">
                <div class="svg flex items-center text-center cursor-pointer px-5 dashboard">
                 دسته بندی ها
                  <svg class="transition-all duration-300 fill-zinc-600" xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="#000000" viewBox="0 0 256 256">
                    <path d="M213.66,101.66l-80,80a8,8,0,0,1-11.32,0l-80-80A8,8,0,0,1,53.66,90.34L128,164.69l74.34-74.35a8,8,0,0,1,11.32,11.32Z"></path>
                  </svg>
                </div>
                <ul class="labal_3-3 w-full px-3 py-1 bg-white mt-3 flex flex-col transition-all duration-300 max-h-0 overflow-hidden">
                  @if($categories)
                @foreach ($categories as $category)
                    @if($category->parent_id == 0)
                    <li class="border-t border-t-gray-300 py-2 my-1.5"><button class="text-right px-4 py-2 rounded-lg hover:bg-zinc-100 hover:text-(--color-primary-500) cursor-pointer text-sm cats" data-cat-id="{{ $category->id }}">{{ $category->title }}</button></li>
                    @endif
                @endforeach
                @endif
                </ul>
              </li>
              {{-- <li class="hover:text-(--color-primary-500)">درباره ما</li> --}}
              {{-- <li class="px-5"><a href="{{ route('contactUs.userIndex') }}" class="hover:text-(--color-primary-500)">تماس با ما</a></li> --}}
              {{-- <li class="hover:text-(--color-primary-500)">بلاگ</li> --}}
             
            {{-- </ul> --}}
          {{-- </div> --}}

          {{-- <div id="garah" onclick="Hamberger('close',this)" class="w-full h-dvh absolute bg-black/50 top-0 right-full z-30 lg:hidden">
          </div>
        </div> --}}
        <!-- logo -->
        {{-- <a href="{{ route('home') }}" class="relative"> --}}
          {{-- <img src="img/logo/Screenshot 2025-12-16 063243.png" alt="logo" class="w-35 md:w-50">  --}}
          {{-- <img src="{{ asset('storage/img/logo/Screenshot 2025-12-16 063243.png') }}" alt="logo" class="w-35 md:w-50">
          <!-- icon -->
          <div class="absolute -bottom-5.5">
            <svg class="hidden md:flex" width="158" height="19" viewBox="0 0 158 19" fill="white" xmlns="http://www.w3.org/2000/svg">
              <g clip-path="url(#clip0_4623_10410)">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M101.486 -121.419C121.078 -114.984 140.312 -105 160.935 -105H506.5C535.495 -105 559 -81.4949 559 -52.5V-52.5C559 -23.5051 535.495 0 506.5 0H158.936C138.871 0 120.093 9.46189 100.984 15.5822C94.0537 17.8017 86.6668 19 79 19C71.3332 19 63.9463 17.8017 57.0164 15.5822C37.9074 9.46189 19.1287 0 -0.936457 0H-1468.5C-1497.49 0 -1521 -23.5051 -1521 -52.5V-52.5C-1521 -81.4949 -1497.49 -105 -1468.5 -105H-2.93493C17.6877 -105 36.9216 -114.984 56.5145 -121.419C63.5893 -123.743 71.1478 -125 79 -125C86.8522 -125 94.4107 -123.743 101.486 -121.419Z" fill="white"></path>
              </g>
              <defs>
                <clipPath id="clip0_4623_10410">
                  <rect width="158" height="19" fill="white"></rect>
                </clipPath>
              </defs>
            </svg>
          </div>
        </a> --}}
        <!-- search -->
        {{-- <form action="{{ route('search') }}" class="w-[400px] h-12 bg-(--color-zinc-100) hidden md:flex justify-between p-3 items-center rounded-2xl">
          @csrf
          <div class="w-full flex flex-row items-center samim">
              <div class="w-full bg-white flex flex-row rounded-full items-center gap-2 px-3">
                  <input class="outline-none py-2 w-full" type="text" name="search"
                      placeholder="جست و جو" @if(isset($searchTitle))  value="{{ $searchTitle }}" @endif>
              </div>
              <div class="p-2 flex justify-center items-center rounded-full bg-white mr-2 cursor-pointer">
                  <button class="cursor-pointer">
                      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                          stroke-width="1.5" stroke="currentColor" class="size-6">
                          <path stroke-linecap="round" stroke-linejoin="round"
                              d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
                      </svg>
                  </button>
              </div>
          </div>
        </form> --}}
        <!-- buttons -->
        {{-- <div class="gap-2 flex"> --}}
          <!-- login / register -->
          {{-- <div class="flex flex-row justify-end items-center gap-5">
                    
                    <div class="relative hover_profile">
                        @if (Auth::check())
                            <div class="cursor-pointer">
                                @if (!Auth::user()->main_image)
                                    <img src="{{ asset('assets/img/user.png') }}" alt="user__avatar"
                                        class="size-10 rounded-full">
                                @else
                                    <img src="{{ asset('storage/' . Auth::user()->main_image) }}" alt="user__picture"
                                        class="size-10 rounded-full">
                                @endif
                            </div>
                        @else
                            <div>
                                <a href="{{ route('login') }}" class="text-xs font-bold text-black">ورود | ثبت
                                    نام</a>
                            </div>

                        @endif
                        @if (Auth::check())
                            <div class="absolute left-0 pt-5 invisible opacity-0 transition-all duration-300 z-999">
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
                                            <a href="{{ route('user.profile') }}" class="block w-full p-2">پروفایل
                                                من</a>
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
                        @endif
                    </div>
                   
                </div> --}}
          <!-- cart -->
          {{-- <div class="labal_2 relative">
            <button class="relative p-2 border border-(--color-zinc-200) rounded-xl hover:shadow-xl hover:bg-(--color-primary-500)">
              <svg width="22px" height="22px" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <g id="Iconly/Light/Bag" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" stroke-linecap="round" stroke-linejoin="round">
                  <g class="stroke-gray-800" id="Bag" transform="translate(2.500000, 1.500000)" stroke="#200E32" stroke-width="1.5">
                    <path d="M14.01373,20.0000001 L5.66590392,20.0000001 C2.59954235,20.0000001 0.247139589,18.8924486 0.915331812,14.4347827 L1.69336385,8.39359272 C2.10526317,6.16933642 3.52402748,5.31807783 4.76887874,5.31807783 L14.9473685,5.31807783 C16.2105264,5.31807783 17.5469108,6.23340964 18.0228834,8.39359272 L18.8009154,14.4347827 C19.3684211,18.3890161 17.0800916,20.0000001 14.01373,20.0000001 Z" id="Path_33955"></path>
                    <path d="M14.1510298,5.09839819 C14.1510298,2.71232585 12.216736,0.7779932 9.83066366,0.7779932 L9.83066366,0.7779932 C8.68166274,0.773163349 7.57805185,1.22619323 6.76386233,2.03694736 C5.9496728,2.84770148 5.49199087,3.94938696 5.49199087,5.09839819 L5.49199087,5.09839819" id="Path_33956"></path>
                    <line x1="12.7963387" y1="9.60183071" x2="12.7505721" y2="9.60183071" id="Line_192"></line>
                    <line x1="6.96567509" y1="9.60183071" x2="6.9199085" y2="9.60183071" id="Line_193"></line>
                  </g>
                </g>
              </svg>
            </button> --}}
            {{-- <div class="labal_2-2 absolute left-0 shadow-2xl bg-white rounded-xl w-70 md:w-100 p-2 h-95  flex flex-col items-center invisible">
              <!-- Head -->
              <div class="w-full border-b border-(--color-zinc-200)">
                <div class="text-sm w-full h-10 p-3 flex items-center"> 2 کالا</div>
              </div>
              <!-- Items -->
              <div class="w-full bg-white h-60 overflow-y-auto
              [&::-webkit-scrollbar]:w-1.5
              [&::-webkit-scrollbar-thumb]:bg-(--color-primary-500)
              [&::-webkit-scrollbar-thumb]:rounded-full"> --}}
                {{-- <ul class="">
                  <li class=" border-b border-(--color-zinc-100) h-45 flex items-center justify-center">
                    <div class="flex justify-between items-center p-2 h-30 gap-3">
                      <!-- Product -->
                      <div class="">
                        <a href="">
                          <img class="w-30 rounded-lg" src="img/photo_1_2025-11-24_23-49-49.jpg" alt="Items">
                        </a>
                      </div>
                      <div class="flex flex-col justify-between h-full">
                        <!-- Title -->
                        <a href="">
                          ایرپاد mossco
                        </a>
                        <!-- Attribute -->
                        <div class="flex items-center gap-5">
                          <!-- Price -->
                          <div class="">
                            <span class="text-sm">1.800.000</span>
                            <span class="text-sm">تومان</span>
                          </div> --}}
                          <!-- Quantity -->
                          {{-- <div class=" flex h-10 max-w-28 items-center justify-between rounded-lg border border-gray-100 px-2 py-1">
                            <button type="button" data-action="increment">
                              <svg class="fill-green-500" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 256 256">
                                <path d="M222,128a6,6,0,0,1-6,6H134v82a6,6,0,0,1-12,0V134H40a6,6,0,0,1,0-12h82V40a6,6,0,0,1,12,0v82h82A6,6,0,0,1,222,128Z"></path>
                              </svg>
                            </button>
                            <input value="1" disabled type="number" class="flex h-5 w-full grow select-none items-center justify-center bg-transparent text-center text-sm text-zinc-700 outline-none">
                            <button type="button" data-action="decrement">
                              <svg class="fill-red-500" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 256 256">
                                <path d="M222,128a6,6,0,0,1-6,6H40a6,6,0,0,1,0-12H216A6,6,0,0,1,222,128Z"></path>
                              </svg>
                            </button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </li> --}}
                  {{-- <li class=" border-b border-(--color-zinc-100) h-45 flex items-center justify-center">
                    <div class="flex justify-between items-center p-2 h-30 gap-3">
                      <!-- Product -->
                      <div class="">
                        <a href="">
                          <img class="w-30 rounded-lg" src="img/photo_1_2025-11-24_23-49-49.jpg" alt="Items">
                        </a>
                      </div>
                      <div class="flex flex-col justify-between h-full"> --}}
                        <!-- Title -->
                        {{-- <a href="">
                          ایرپاد mossco
                        </a> --}}
                        <!-- Attribute -->
                        {{-- <div class="flex items-center gap-5"> --}}
                          <!-- Price -->
                          {{-- <div class="">
                            <span class="text-sm">1.800.000</span>
                            <span class="text-sm">تومان</span>
                          </div> --}}
                          <!-- Quantity -->
                          {{-- <div class=" flex h-10 max-w-28 items-center justify-between rounded-lg border border-gray-100 px-2 py-1">
                            <button type="button" data-action="increment">
                              <svg class="fill-green-500" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 256 256">
                                <path d="M222,128a6,6,0,0,1-6,6H134v82a6,6,0,0,1-12,0V134H40a6,6,0,0,1,0-12h82V40a6,6,0,0,1,12,0v82h82A6,6,0,0,1,222,128Z"></path>
                              </svg>
                            </button>
                            <input value="1" disabled type="number" class="flex h-5 w-full grow select-none items-center justify-center bg-transparent text-center text-sm text-zinc-700 outline-none">
                            <button type="button" data-action="decrement">
                              <svg class="fill-red-500" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 256 256">
                                <path d="M222,128a6,6,0,0,1-6,6H40a6,6,0,0,1,0-12H216A6,6,0,0,1,222,128Z"></path>
                              </svg>
                            </button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </li> --}}
                  {{-- <li class=" border-b border-(--color-zinc-100) h-45 flex items-center justify-center">
                    <div class="flex justify-between items-center p-2 h-30 gap-3">
                      <!-- Product -->
                      <div class="">
                        <a href="">
                          <img class="w-30 rounded-lg" src="img/photo_1_2025-11-24_23-49-49.jpg" alt="Items">
                        </a>
                      </div>
                      <div class="flex flex-col justify-between h-full"> --}}
                        <!-- Title -->
                        {{-- <a href="">
                          ایرپاد mossco
                        </a> --}}
                        <!-- Attribute -->
                        {{-- <div class="flex items-center gap-5"> --}}
                          <!-- Price -->
                          {{-- <div class="">
                            <span class="text-sm">1.800.000</span>
                            <span class="text-sm">تومان</span>
                          </div> --}}
                          <!-- Quantity -->
                          {{-- <div class=" flex h-10 max-w-28 items-center justify-between rounded-lg border border-gray-100 px-2 py-1">
                            <button type="button" data-action="increment">
                              <svg class="fill-green-500" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 256 256">
                                <path d="M222,128a6,6,0,0,1-6,6H134v82a6,6,0,0,1-12,0V134H40a6,6,0,0,1,0-12h82V40a6,6,0,0,1,12,0v82h82A6,6,0,0,1,222,128Z"></path>
                              </svg>
                            </button>
                            <input value="1" disabled type="number" class="flex h-5 w-full grow select-none items-center justify-center bg-transparent text-center text-sm text-zinc-700 outline-none">
                            <button type="button" data-action="decrement">
                              <svg class="fill-red-500" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 256 256">
                                <path d="M222,128a6,6,0,0,1-6,6H40a6,6,0,0,1,0-12H216A6,6,0,0,1,222,128Z"></path>
                              </svg>
                            </button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </li>
                </ul>
              </div> --}}
              <!-- Down Price -->
              {{-- <div class="flex items-center justify-between text-center w-[90%] h-23">
                <div class="">
                  <div class="">مبلغ قابل پرداخت</div>
                  <div class="">87.000.000تومان</div>
                </div>
                <a href="###" class="bg-(--color-primary-500) px-4 p-3 rounded-xl">
                  <button class="text-white">ثبت سفارش</button>
                </a>
              </div>
            </div>
          </div>
        </div>
      </section> --}}
      <!-- dawn -->
      {{-- <section class="relative z-45 max-w-[1700px] h-20 px-20 bg-(--color-zinc-100) hidden md:flex justify-between items-center"> --}}
        <!-- right -->
        {{-- <div class="">
          <ul class="flex gap-10">
            <li><a href="{{ route('home') }}" class="hover:text-(--color-primary-500)">صفحه اصلی</a></li>
            <li class="labal_3 relative transition-all duration-300"> --}}
              {{-- <div class="svg flex items-center justify-center text-center transition-all duration-300 hover:text-(--color-primary-500)">
                دسته بندی ها
                <svg class="transition-all duration-300 fill-zinc-600 hover:fill-(--color-primary-500)" xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="#000000" viewBox="0 0 256 256">
                  <path d="M213.66,101.66l-80,80a8,8,0,0,1-11.32,0l-80-80A8,8,0,0,1,53.66,90.34L128,164.69l74.34-74.35a8,8,0,0,1,11.32,11.32Z"></path>
                </svg>
              </div> --}}
              {{-- <div class="labal_3 relative transition-all duration-300">
                <li class="svg flex items-center justify-center text-center transition-all duration-300 hover:text-(--color-primary-500)">
                  محصولات
                  <svg class="transition-all duration-300 fill-zinc-600 hover:fill-(--color-primary-500)" xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="#000000" viewBox="0 0 256 256">
                    <path d="M213.66,101.66l-80,80a8,8,0,0,1-11.32,0l-80-80A8,8,0,0,1,53.66,90.34L128,164.69l74.34-74.35a8,8,0,0,1,11.32,11.32Z"></path>
                  </svg>
                </li>
                <div class="labal_3-3 absolute w-50 px-3 py-1 rounded-xl shadow-xl bg-white invisible">
                  <li class="labal_perr_mobile p-3 bg-gradient-to-l hover:from-zinc-100 rounded-lg hover:text-(--color-primary-500)">
                    <a href="" class="flex items-center justify-between">موبایل
                      <svg class="fill-zinc-600" xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="#000000" viewBox="0 0 256 256">
                        <path d="M213.66,101.66l-80,80a8,8,0,0,1-11.32,0l-80-80A8,8,0,0,1,53.66,90.34L128,164.69l74.34-74.35a8,8,0,0,1,11.32,11.32Z"></path>
                      </svg>
                    </a>
                  <div class="z-10 labal_perrr_mobile absolute -left-50 -top-10 bg-white w-50 shadow-xl rounded-xl text-(--color-zinc-800) invisible">
                      <ul class="">
                        <li class="p-3 bg-gradient-to-l hover:from-zinc-100 rounded-lg hover:text-(--color-primary-500)"><a href="">کاور</a></li>
                        <li class="p-3 bg-gradient-to-l hover:from-zinc-100 rounded-lg hover:text-(--color-primary-500)"><a href="">شارژر</a></li>
                        <li class="p-3 bg-gradient-to-l hover:from-zinc-100 rounded-lg hover:text-(--color-primary-500)"><a href="">آویز</a></li>
                        <li class="p-3 bg-gradient-to-l hover:from-zinc-100 rounded-lg hover:text-(--color-primary-500)"><a href="">گلس</a></li>
                        <li class="p-3 bg-gradient-to-l hover:from-zinc-100 rounded-lg hover:text-(--color-primary-500)"><a href="">محافظ لنز</a></li>
                        <li class="p-3 bg-gradient-to-l hover:from-zinc-100 rounded-lg hover:text-(--color-primary-500)"><a href="">کابل شارژر</a></li>
                      </ul>
                    </div></li>
                  <li class="labal_perr_kaver relative p-3 bg-gradient-to-l hover:from-zinc-100 rounded-lg hover:text-(--color-primary-500)">
                    <a href="" class="flex items-center justify-between">لوازم جانبی موبایل 
                      <svg class="fill-zinc-600" xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="#000000" viewBox="0 0 256 256">
                        <path d="M213.66,101.66l-80,80a8,8,0,0,1-11.32,0l-80-80A8,8,0,0,1,53.66,90.34L128,164.69l74.34-74.35a8,8,0,0,1,11.32,11.32Z"></path>
                      </svg>
                    </a>
                    <div class="z-10 labal_perrr_kaver absolute -left-50 -top-10 bg-white w-50 shadow-xl rounded-xl text-(--color-zinc-800) invisible">
                      <ul class="">
                        <li class="p-3 bg-gradient-to-l hover:from-zinc-100 rounded-lg hover:text-(--color-primary-500)"><a href="">کاور</a></li>
                        <li class="p-3 bg-gradient-to-l hover:from-zinc-100 rounded-lg hover:text-(--color-primary-500)"><a href="">شارژر</a></li>
                        <li class="p-3 bg-gradient-to-l hover:from-zinc-100 rounded-lg hover:text-(--color-primary-500)"><a href="">آویز</a></li>
                        <li class="p-3 bg-gradient-to-l hover:from-zinc-100 rounded-lg hover:text-(--color-primary-500)"><a href="">گلس</a></li>
                        <li class="p-3 bg-gradient-to-l hover:from-zinc-100 rounded-lg hover:text-(--color-primary-500)"><a href="">محافظ لنز</a></li>
                        <li class="p-3 bg-gradient-to-l hover:from-zinc-100 rounded-lg hover:text-(--color-primary-500)"><a href="">کابل شارژر</a></li>
                      </ul>
                    </div>
                  </li>
                  <li class="labal_perr_paverbank p-3 bg-gradient-to-l hover:from-zinc-100 rounded-lg hover:text-(--color-primary-500)">
                    <a href="" class="flex items-center justify-between">پاوربانک
                      <svg class="fill-zinc-600" xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="#000000" viewBox="0 0 256 256">
                        <path d="M213.66,101.66l-80,80a8,8,0,0,1-11.32,0l-80-80A8,8,0,0,1,53.66,90.34L128,164.69l74.34-74.35a8,8,0,0,1,11.32,11.32Z"></path>
                      </svg>
                    </a>
                  <div class="z-10 labal_perrr_paverbank absolute -left-50 top-10 bg-white w-50 shadow-xl rounded-xl text-(--color-zinc-800) invisible">
                      <ul class="">
                        <li class="p-3 bg-gradient-to-l hover:from-zinc-100 rounded-lg hover:text-(--color-primary-500)"><a href="">کاور</a></li>
                        <li class="p-3 bg-gradient-to-l hover:from-zinc-100 rounded-lg hover:text-(--color-primary-500)"><a href="">شارژر</a></li>
                        <li class="p-3 bg-gradient-to-l hover:from-zinc-100 rounded-lg hover:text-(--color-primary-500)"><a href="">آویز</a></li>
                        <li class="p-3 bg-gradient-to-l hover:from-zinc-100 rounded-lg hover:text-(--color-primary-500)"><a href="">گلس</a></li>
                        <li class="p-3 bg-gradient-to-l hover:from-zinc-100 rounded-lg hover:text-(--color-primary-500)"><a href="">محافظ لنز</a></li>
                        <li class="p-3 bg-gradient-to-l hover:from-zinc-100 rounded-lg hover:text-(--color-primary-500)"><a href="">کابل شارژر</a></li>
                      </ul>
                    </div>
                  </li>
                  <li class="labal_perr_eirpad p-3 bg-gradient-to-l hover:from-zinc-100 rounded-lg hover:text-(--color-primary-500)">
                    <a href="" class="flex items-center justify-between">ایپاد
                      <svg class="fill-zinc-600" xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="#000000" viewBox="0 0 256 256">
                        <path d="M213.66,101.66l-80,80a8,8,0,0,1-11.32,0l-80-80A8,8,0,0,1,53.66,90.34L128,164.69l74.34-74.35a8,8,0,0,1,11.32,11.32Z"></path>
                      </svg>
                    </a>
                  <div class="z-10 labal_perrr_eirpad absolute -left-50 top-20 bg-white w-50 shadow-xl rounded-xl text-(--color-zinc-800) invisible">
                      <ul class="">
                        <li class="p-3 bg-gradient-to-l hover:from-zinc-100 rounded-lg hover:text-(--color-primary-500)"><a href="">کاور</a></li>
                        <li class="p-3 bg-gradient-to-l hover:from-zinc-100 rounded-lg hover:text-(--color-primary-500)"><a href="">شارژر</a></li>
                        <li class="p-3 bg-gradient-to-l hover:from-zinc-100 rounded-lg hover:text-(--color-primary-500)"><a href="">آویز</a></li>
                        <li class="p-3 bg-gradient-to-l hover:from-zinc-100 rounded-lg hover:text-(--color-primary-500)"><a href="">گلس</a></li>
                        <li class="p-3 bg-gradient-to-l hover:from-zinc-100 rounded-lg hover:text-(--color-primary-500)"><a href="">محافظ لنز</a></li>
                        <li class="p-3 bg-gradient-to-l hover:from-zinc-100 rounded-lg hover:text-(--color-primary-500)"><a href="">کابل شارژر</a></li>
                      </ul>
                    </div>
                  </li>
                  <li class="labal_perr_hedfone p-3 bg-gradient-to-l hover:from-zinc-100 rounded-lg hover:text-(--color-primary-500)">
                    <a href="" class="flex items-center justify-between">هدفون
                      <svg class="fill-zinc-600" xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="#000000" viewBox="0 0 256 256">
                        <path d="M213.66,101.66l-80,80a8,8,0,0,1-11.32,0l-80-80A8,8,0,0,1,53.66,90.34L128,164.69l74.34-74.35a8,8,0,0,1,11.32,11.32Z"></path>
                      </svg>
                    </a>
                  <div class="z-10 labal_perrr_hedfone absolute -left-50 top-30 bg-white w-50 shadow-xl rounded-xl text-(--color-zinc-800) invisible">
                      <ul class="">
                        <li class="p-3 bg-gradient-to-l hover:from-zinc-100 rounded-lg hover:text-(--color-primary-500)"><a href="">کاور</a></li>
                        <li class="p-3 bg-gradient-to-l hover:from-zinc-100 rounded-lg hover:text-(--color-primary-500)"><a href="">شارژر</a></li>
                        <li class="p-3 bg-gradient-to-l hover:from-zinc-100 rounded-lg hover:text-(--color-primary-500)"><a href="">آویز</a></li>
                        <li class="p-3 bg-gradient-to-l hover:from-zinc-100 rounded-lg hover:text-(--color-primary-500)"><a href="">گلس</a></li>
                        <li class="p-3 bg-gradient-to-l hover:from-zinc-100 rounded-lg hover:text-(--color-primary-500)"><a href="">محافظ لنز</a></li>
                        <li class="p-3 bg-gradient-to-l hover:from-zinc-100 rounded-lg hover:text-(--color-primary-500)"><a href="">کابل شارژر</a></li>
                      </ul>
                    </div>
                  </li>
                  <li class="labal_perr_lcd p-3 bg-gradient-to-l hover:from-zinc-100 rounded-lg hover:text-(--color-primary-500)">
                    <a href="" class="flex items-center justify-between">شارژر
                      <svg class="fill-zinc-600" xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="#000000" viewBox="0 0 256 256">
                        <path d="M213.66,101.66l-80,80a8,8,0,0,1-11.32,0l-80-80A8,8,0,0,1,53.66,90.34L128,164.69l74.34-74.35a8,8,0,0,1,11.32,11.32Z"></path>
                      </svg>
                    </a>
                  <div class="z-10 labal_perrr_lcd absolute -left-50 top-40 bg-white w-50 shadow-xl rounded-xl text-(--color-zinc-800) invisible">
                      <ul class="">
                        <li class="p-3 bg-gradient-to-l hover:from-zinc-100 rounded-lg hover:text-(--color-primary-500)"><a href="">کاور</a></li>
                        <li class="p-3 bg-gradient-to-l hover:from-zinc-100 rounded-lg hover:text-(--color-primary-500)"><a href="">شارژر</a></li>
                        <li class="p-3 bg-gradient-to-l hover:from-zinc-100 rounded-lg hover:text-(--color-primary-500)"><a href="">آویز</a></li>
                        <li class="p-3 bg-gradient-to-l hover:from-zinc-100 rounded-lg hover:text-(--color-primary-500)"><a href="">گلس</a></li>
                        <li class="p-3 bg-gradient-to-l hover:from-zinc-100 rounded-lg hover:text-(--color-primary-500)"><a href="">محافظ لنز</a></li>
                        <li class="p-3 bg-gradient-to-l hover:from-zinc-100 rounded-lg hover:text-(--color-primary-500)"><a href="">کابل شارژر</a></li>
                      </ul>
                    </div>
                  </li>
                  <li class="labal_perr_led p-3 bg-gradient-to-l hover:from-zinc-100 rounded-lg hover:text-(--color-primary-500)">
                    <a href="" class="flex items-center justify-between">LCD
                      <svg class="fill-zinc-600" xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="#000000" viewBox="0 0 256 256">
                        <path d="M213.66,101.66l-80,80a8,8,0,0,1-11.32,0l-80-80A8,8,0,0,1,53.66,90.34L128,164.69l74.34-74.35a8,8,0,0,1,11.32,11.32Z"></path>
                      </svg>
                    </a>
                  <div class="z-10 labal_perrr_led absolute -left-50 top-50 bg-white w-50 shadow-xl rounded-xl text-(--color-zinc-800) invisible">
                      <ul class="">
                        <li class="p-3 bg-gradient-to-l hover:from-zinc-100 rounded-lg hover:text-(--color-primary-500)"><a href="">کاور</a></li>
                        <li class="p-3 bg-gradient-to-l hover:from-zinc-100 rounded-lg hover:text-(--color-primary-500)"><a href="">شارژر</a></li>
                        <li class="p-3 bg-gradient-to-l hover:from-zinc-100 rounded-lg hover:text-(--color-primary-500)"><a href="">آویز</a></li>
                        <li class="p-3 bg-gradient-to-l hover:from-zinc-100 rounded-lg hover:text-(--color-primary-500)"><a href="">گلس</a></li>
                        <li class="p-3 bg-gradient-to-l hover:from-zinc-100 rounded-lg hover:text-(--color-primary-500)"><a href="">محافظ لنز</a></li>
                        <li class="p-3 bg-gradient-to-l hover:from-zinc-100 rounded-lg hover:text-(--color-primary-500)"><a href="">کابل شارژر</a></li>
                      </ul>
                    </div>
                  </li>
                  <li class="labal_perr_rgb p-3 bg-gradient-to-l hover:from-zinc-100 rounded-lg hover:text-(--color-primary-500)">
                    <a href="" class="flex items-center justify-between">کاور
                      <svg class="fill-zinc-600" xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="#000000" viewBox="0 0 256 256">
                        <path d="M213.66,101.66l-80,80a8,8,0,0,1-11.32,0l-80-80A8,8,0,0,1,53.66,90.34L128,164.69l74.34-74.35a8,8,0,0,1,11.32,11.32Z"></path>
                      </svg>
                    </a>
                  <div class="z-10 labal_perrr_rgb absolute -left-50 top-60 bg-white w-50 shadow-xl rounded-xl text-(--color-zinc-800) invisible">
                      <ul class="">
                        <li class="p-3 bg-gradient-to-l hover:from-zinc-100 rounded-lg hover:text-(--color-primary-500)"><a href="">کاور</a></li>
                        <li class="p-3 bg-gradient-to-l hover:from-zinc-100 rounded-lg hover:text-(--color-primary-500)"><a href="">شارژر</a></li>
                        <li class="p-3 bg-gradient-to-l hover:from-zinc-100 rounded-lg hover:text-(--color-primary-500)"><a href="">آویز</a></li>
                        <li class="p-3 bg-gradient-to-l hover:from-zinc-100 rounded-lg hover:text-(--color-primary-500)"><a href="">گلس</a></li>
                        <li class="p-3 bg-gradient-to-l hover:from-zinc-100 rounded-lg hover:text-(--color-primary-500)"><a href="">محافظ لنز</a></li>
                        <li class="p-3 bg-gradient-to-l hover:from-zinc-100 rounded-lg hover:text-(--color-primary-500)"><a href="">کابل شارژر</a></li>
                      </ul>
                    </div>
                  </li>
                </div>
              </div>
              <ul class="labal_3-3 absolute w-50 px-3 py-1 rounded-xl shadow-xl bg-white invisible">
                @if($categories)
                @foreach ($categories as $category)
                  @if($category->parent_id == 0)
                    <li class="p-3 bg-gradient-to-l hover:from-zinc-100 rounded-lg hover:text-(--color-primary-500)">
                      <a href="{{ route('category.proList', [$category]) }}" class="">{{ $category->title }}</a>
                    </li>
                  @endif
                @endforeach
                @endif

              
              </ul>
            </li> --}}
            {{-- <li class="hover:text-(--color-primary-500)">درباره ما</li>
            <a href="{{ route('contactUs.userIndex') }}" class="hover:text-(--color-primary-500)">ارتباط با ما</a> --}}
            {{-- <li class="hover:text-(--color-primary-500)">بلاگ</li> --}}
            {{-- <div class="labal_4 relative">
              <li class="svg flex items-center justify-center text-center transition-all duration-300 hover:text-(--color-primary-500)">
                صفحات پروژه
                <svg class="transition-all duration-300 fill-zinc-600 hover:fill-(--color-primary-500)" xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="#000000" viewBox="0 0 256 256">
                  <path d="M213.66,101.66l-80,80a8,8,0,0,1-11.32,0l-80-80A8,8,0,0,1,53.66,90.34L128,164.69l74.34-74.35a8,8,0,0,1,11.32,11.32Z"></path>
                </svg>
              </li>
              <div class="labal_4-4 absolute bg-white px-3 py-1 w-70 rounded-xl shadow-xl invisible transition-all duration-100">
                <li class="p-3 bg-gradient-to-l hover:from-zinc-100 rounded-lg hover:text-(--color-primary-500)"><a href="">صفحه اصلی</a></li>
                <li class="p-3 bg-gradient-to-l hover:from-zinc-100 rounded-lg hover:text-(--color-primary-500)"><a href="">درباره ما</a></li>
                <li class="p-3 bg-gradient-to-l hover:from-zinc-100 rounded-lg hover:text-(--color-primary-500)"><a href="">وبلاگ</a></li>
                <li class="p-3 bg-gradient-to-l hover:from-zinc-100 rounded-lg hover:text-(--color-primary-500)"><a href="./cart/cart.html">سبد خرید</a></li>
                <li class="p-3 bg-gradient-to-l hover:from-zinc-100 rounded-lg hover:text-(--color-primary-500)"><a href="./checkout/checkout.html">پرداخت</a></li>
                <li class="p-3 bg-gradient-to-l hover:from-zinc-100 rounded-lg hover:text-(--color-primary-500)"><a href="">ارتباط با ما</a></li>
                <li class="p-3 bg-gradient-to-l hover:from-zinc-100 rounded-lg hover:text-(--color-primary-500)"><a href="">داشبورد کاربر</a></li>
                <li class="p-3 bg-gradient-to-l hover:from-zinc-100 rounded-lg hover:text-(--color-primary-500)"><a href="./serch/serch.html">جستجوی محصول</a></li>
                <li class="p-3 bg-gradient-to-l hover:from-zinc-100 rounded-lg hover:text-(--color-primary-500)"><a href="./singel/singel.html">جزئیات محصول</a></li>
              </div>
            </div> --}}
          {{-- </ul>
        </div> --}}
        <!-- left -->
        {{-- <div class="flex gap-3 ">
          <div class="text-(--color-zinc-500) text-sm">تماس با پشتیبانی</div>
          <div class="text-(--color-zinc-500) text-sm">|</div>
          <a href="tel:09018741677" class="flex text-sm">
            901-874-1677
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none">
              <path class="stroke-(--color-primary-500)" d="M3 18V12C3 9.61305 3.94821 7.32387 5.63604 5.63604C7.32387 3.94821 9.61305 3 12 3C14.3869 3 16.6761 3.94821 18.364 5.63604C20.0518 7.32387 21 9.61305 21 12V18" stroke="#52525c" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
              <path class="stroke-(--color-primary-500)" d="M21 19C21 19.5304 20.7893 20.0391 20.4142 20.4142C20.0391 20.7893 19.5304 21 19 21H18C17.4696 21 16.9609 20.7893 16.5858 20.4142C16.2107 20.0391 16 19.5304 16 19V16C16 15.4696 16.2107 14.9609 16.5858 14.5858C16.9609 14.2107 17.4696 14 18 14H21V19ZM3 19C3 19.5304 3.21071 20.0391 3.58579 20.4142C3.96086 20.7893 4.46957 21 5 21H6C6.53043 21 7.03914 20.7893 7.41421 20.4142C7.78929 20.0391 8 19.5304 8 19V16C8 15.4696 7.78929 14.9609 7.41421 14.5858C7.03914 14.2107 6.53043 14 6 14H3V19Z" stroke="#52525c" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
          </a>
        </div>
      </section> --}}
    {{-- </header> --}}
        <header class="fixed w-[100%] z-50">
        <!-- top -->
        <section class="relative z-50 max-w-[1700px] h-20 bg-white flex justify-between items-center px-1 md:px-20 shadow-xl">
          <!-- menu-mobile -->
          <div id="hambeger" class="sticy md:absolute">
            <div class="menu-mobile sticy md:absolute md:hidden" onclick="Hamberger('open',this)">
              <svg class=" sticy md:absolute md:hidden fill-zinc-600" xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#000000" viewBox="0 0 256 256"><path d="M224,128a8,8,0,0,1-8,8H40a8,8,0,0,1,0-16H216A8,8,0,0,1,224,128ZM40,72H216a8,8,0,0,0,0-16H40a8,8,0,0,0,0,16ZM216,184H40a8,8,0,0,0,0,16H216a8,8,0,0,0,0-16Z"></path></svg>
            </div>
            <div class="menu-mobile-slid fixed z-50 top-0 -right-full pt-10 flex flex-col bg-white h-[100vh] w-[70%] gap-10 shadow-2xl overflow-y-auto
            [&::-webkit-scrollbar]:w-1.5
            [&::-webkit-scrollbar-thumb]:bg-(--color-primary-500)
            [&::-webkit-scrollbar-thumb]:rounded-full">
              <div class=" w-[90%] h-12 bg-(--color-zinc-100) mx-auto flex justify-between p-3 items-center rounded-2xl">
                <input type="text" name="" placeholder="جستجوی محصول" class="outline-none">
                  <button>
                    <svg class="size-6 fill-zinc-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256">
                      <path d="M229.66,218.34l-50.07-50.06a88.11,88.11,0,1,0-11.31,11.31l50.06,50.07a8,8,0,0,0,11.32-11.32ZM40,112a72,72,0,1,1,72,72A72.08,72.08,0,0,1,40,112Z"></path>
                    </svg>
                  </button>
              </div>
              <ul class="flex flex-col justify-start gap-10 px-8">
                <li><a href="{{ route('home') }}" class="hover:text-(--color-primary-500)">صفحه اصلی</a></li>
                <div class="labal_3 relative">
                  <li class="svg flex items-center text-center hover:text-(--color-primary-500) cursor-pointer">
                    دسته بندی ها
                    <svg class="transition-all duration-300 fill-zinc-600 hover:fill-(--color-primary-500)" xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="#000000" viewBox="0 0 256 256">
                      <path d="M213.66,101.66l-80,80a8,8,0,0,1-11.32,0l-80-80A8,8,0,0,1,53.66,90.34L128,164.69l74.34-74.35a8,8,0,0,1,11.32,11.32Z"></path>
                    </svg>
                  </li>
                  <div class="labal_3-3 absolute z-10 w-50 px-3 py-1 rounded-xl shadow-xl bg-white invisible">
                    @foreach ($categories as $category)
                    @if($category->parent_id == 0)
                    <li class="labal_perr_mobile p-3 bg-gradient-to-l relative hover:from-zinc-100 rounded-lg hover:text-(--color-primary-500)">
                    <a href="{{ route('search', ['category' => $category->id]) }}" class="flex items-center justify-between">{{ $category->title }}
                      <svg class="fill-zinc-600" xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="#000000" viewBox="0 0 256 256">
                        <path d="M213.66,101.66l-80,80a8,8,0,0,1-11.32,0l-80-80A8,8,0,0,1,53.66,90.34L128,164.69l74.34-74.35a8,8,0,0,1,11.32,11.32Z"></path>
                      </svg>
                    </a>
                  <div class="z-10 labal_perrr_mobile absolute -left-50 bottom-0 bg-white w-50 shadow-xl rounded-xl text-(--color-zinc-800) invisible">
                     @foreach ($category->grandchild as $child)
                        <ul class="">
                          <li class="p-3 bg-gradient-to-l hover:from-zinc-100 rounded-lg hover:text-(--color-primary-500)"><a href="{{ route('search', ['category' => $category->id]) }}">{{ $child->title }}</a></li>
                        </ul>
                      @endforeach
                      </div>
                    </li>
                     @endif
                  @endforeach
             
                  </div>
                </div>
                <li class="hover:text-(--color-primary-500) cursor-pointer">درباره ما</li>
                {{-- <li class="hover:text-(--color-primary-500)">تماس با ما</li> --}}
                <li class="hover:text-(--color-primary-500)"><a href="{{ route('contactUs.userIndex') }}" class="hover:text-(--color-primary-500)">تماس با ما</a></li>
                
              </ul>
            </div>
            
            <div id="garah" onclick="Hamberger('close',this)" class="w-full h-dvh absolute bg-black/50 top-0 right-full z-30">
            </div>
          </div>
            <!-- logo -->
          <a href="{{ route('home') }}" class="relative">
            <img src="{{ asset('storage/img/logo/Screenshot 2025-12-16 063243.png') }}"" alt="logo" class="w-35 md:w-50">
            <!-- icon -->
            <div class="absolute -bottom-5.5">
              <svg class="hidden md:flex" width="158" height="19" viewBox="0 0 158 19" fill="white" xmlns="http://www.w3.org/2000/svg">
                <g clip-path="url(#clip0_4623_10410)">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M101.486 -121.419C121.078 -114.984 140.312 -105 160.935 -105H506.5C535.495 -105 559 -81.4949 559 -52.5V-52.5C559 -23.5051 535.495 0 506.5 0H158.936C138.871 0 120.093 9.46189 100.984 15.5822C94.0537 17.8017 86.6668 19 79 19C71.3332 19 63.9463 17.8017 57.0164 15.5822C37.9074 9.46189 19.1287 0 -0.936457 0H-1468.5C-1497.49 0 -1521 -23.5051 -1521 -52.5V-52.5C-1521 -81.4949 -1497.49 -105 -1468.5 -105H-2.93493C17.6877 -105 36.9216 -114.984 56.5145 -121.419C63.5893 -123.743 71.1478 -125 79 -125C86.8522 -125 94.4107 -123.743 101.486 -121.419Z" fill="white"></path>
                </g>
                <defs>
                  <clipPath id="clip0_4623_10410">
                    <rect width="158" height="19" fill="white"></rect>
               </clipPath>
              </defs>
            </svg>
          </div>
          </a>
          <!-- search -->
         <form action="{{ route('search') }}" class="w-[400px] h-12 bg-(--color-zinc-100) hidden md:flex justify-between p-3 items-center rounded-2xl">
          @csrf
          <div class="w-full flex flex-row items-center samim">
              <div class="w-full bg-white flex flex-row rounded-full items-center gap-2 px-3">
                  <input class="outline-none py-2 w-full" type="text" name="search"
                      placeholder="جست و جو" @if(isset($searchTitle))  value="{{ $searchTitle }}" @endif>
                        @if(request('category'))
                          <input type="hidden" name="category" value="{{ request('category') }}">
                        @endif
              </div>
              <div class="p-2 flex justify-center items-center rounded-full bg-white mr-2 cursor-pointer">
                  <button class="cursor-pointer">
                      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                          stroke-width="1.5" stroke="currentColor" class="size-6">
                          <path stroke-linecap="round" stroke-linejoin="round"
                              d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
                      </svg>
                  </button>
              </div>
          </div>
        </form>
          <!-- buttons -->
          <div class="gap-2 flex items-center">
            <!-- login / register -->
            <div class="labal_1 relative">
            <button class=" relative flex border border-(--color-zinc-200) p-2 px-3 rounded-xl hover:shadow-xl">

              <span class="hidden md:block">حساب کاربری</span>
              <svg width="22px" height="22px" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <g id="Iconly/Light/Profile" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" stroke-linecap="round" stroke-linejoin="round">
                  <g class="stroke-gray-800" id="Profile" transform="translate(4.000000, 2.500000)" stroke="#200E32" stroke-width="1.5">
                    <circle id="Ellipse_736" cx="7.57896359" cy="4.77803206" r="4.77803206"></circle>
                    <path d="M5.32907052e-15,16.2013731 C-0.00126760558,15.8654831 0.0738531734,15.5336997 0.219695816,15.2311214 C0.677361723,14.3157895 1.96797958,13.8306637 3.0389178,13.610984 C3.81127745,13.4461621 4.59430539,13.3360488 5.38216724,13.2814646 C6.84083861,13.1533327 8.30793524,13.1533327 9.76660662,13.2814646 C10.5544024,13.3366774 11.3373865,13.4467845 12.1098561,13.610984 C13.1807943,13.8306637 14.4714121,14.270023 14.929078,15.2311214 C15.2223724,15.8479159 15.2223724,16.5639836 14.929078,17.1807781 C14.4714121,18.1418765 13.1807943,18.5812358 12.1098561,18.7917621 C11.3383994,18.9634099 10.5550941,19.0766219 9.76660662,19.1304349 C8.57936754,19.2310812 7.38658584,19.2494317 6.19681255,19.1853548 C5.92221301,19.1853548 5.65676678,19.1853548 5.38216724,19.1304349 C4.59663136,19.077285 3.8163184,18.9640631 3.04807112,18.7917621 C1.96797958,18.5812358 0.686515041,18.1418765 0.219695816,17.1807781 C0.0745982583,16.8746908 -0.000447947969,16.5401098 5.32907052e-15,16.2013731 Z" id="Path_33945"></path>
                  </g>
                </g>
              </svg>
            </button>
            <!-- Modal file -->
          <div id="modal-1" class="Mymodal fixed inset-0 z-50 bg-black/40 flex hidden items-center justify-center">
            <div class="modal-content relative w-full max-w-7xl max-h-[90vh] transform scale-95 transition-all duration-300">
              <div class="bg-white rounded-2xl mx-auto border border-zinc-200 w-11/12 sm:w-7/12 md:w-6/12 lg:w-4/12 h-auto py-5 px-4">
                <img class="w-32 mx-auto" src="./img/logo/Screenshot 2025-12-16 063243.png" alt="">
                <div class="mt-5 text-lg font-semibold text-zinc-800">
                  ورود یا ثبت نام
                </div>
                <div class="my-4 text-xs text-zinc-500">
                  لطفا شماره موبایل خود را وارد کنید
                </div>
                <div class="flex flex-col gap-y-1">
                  <input type="tel" placeholder="شماره تلفن" name="" class="placeholder:text-right text-sm block w-full rounded-md border border-gray-300 px-3 py-3 font-normal text-gray-700 outline-none transition-all focus:border-primary-500 focus:outline-none">
                </div>
                <a href="" class="flex items-center justify-center gap-x-1 text-sm max-w-md mt-10 py-3 rounded-lg text-white bg-gradient-to-bl from-(--color-primary-500) to-(--color-primary-800) hover:opacity-85 transition">
                  ثبت نام
                </a>
              </div>
              <!-- verify -->
              <!-- <div class="bg-white rounded-2xl mx-auto border border-zinc-200 w-11/12 sm:w-7/12 md:w-6/12 lg:w-4/12 h-auto py-5 px-4">
                <img class="w-32 mx-auto" src="./assets/image/logo.png" alt="">
                <div class="mt-5 text-lg font-semibold text-zinc-800">
                  تایید شماره موبایل
                </div>
                <div class="my-4 text-xs text-zinc-500">
                  لطفا کد 6 رقمی ارسال شده به شماره تلفن 09018741677 را وارد کنید.
                </div>
                <div class="input-field mb-5 flex flex-row-reverse gap-x-4 justify-center">
                  <input name="code" class="code-input 213 border border-zinc-200 focus:border-zinc-400 w-10 h-11 rounded-md outline-none text-center focus:outline-0 focus:border focus:shadow-lg" required/>
                  <input name="code" class="code-input border border-zinc-200 focus:border-zinc-400 w-10 h-11 rounded-md outline-none text-center focus:outline-0 focus:border focus:shadow-lg" required/>
                  <input name="code" class="code-input border border-zinc-200 focus:border-zinc-400 w-10 h-11 rounded-md outline-none text-center focus:outline-0 focus:border focus:shadow-lg" required/>
                  <input name="code" class="code-input border border-zinc-200 focus:border-zinc-400 w-10 h-11 rounded-md outline-none text-center focus:outline-0 focus:border focus:shadow-lg" required/>
                  <input name="code" class="code-input border border-zinc-200 focus:border-zinc-400 w-10 h-11 rounded-md outline-none text-center focus:outline-0 focus:border focus:shadow-lg" required/>
                  <input name="code" class="code-input border border-zinc-200 focus:border-zinc-400 w-10 h-11 rounded-md outline-none text-center focus:outline-0 focus:border focus:shadow-lg" required/>
                </div>
                <a href="" class="flex items-center justify-center gap-x-1 text-sm max-w-md mt-10 py-3 rounded-lg text-white bg-gradient-to-bl from-primary-600 to-primary-800 hover:opacity-85 transition">
                  تایید
                </a>
              </div> -->
            </div>
          </div>
            <div class="labal_1-1 absolute left-0 flex flex-col bg-white shadow-xl rounded-2xl w-50 invisible">
              <ul class="p-2">
                <li class="hover:bg-gray-50 rounded-lg">
                  @if(Auth::check())
                  <a href="{{ route('user.profile' , [Auth::id()])}}">
                    <span class="flex p-2 px-1">
                      <span class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#4d4d4d" viewBox="0 0 256 256"><path d="M229.19,213c-15.81-27.32-40.63-46.49-69.47-54.62a70,70,0,1,0-63.44,0C67.44,166.5,42.62,185.67,26.81,213a6,6,0,1,0,10.38,6C56.4,185.81,90.34,166,128,166s71.6,19.81,90.81,53a6,6,0,1,0,10.38-6ZM70,96a58,58,0,1,1,58,58A58.07,58.07,0,0,1,70,96Z"></path></svg>
                      </span>
                      <span class="text-sm">{{ Auth::user()->name ." ". Auth::user()->family }}</span>
                      @if(!Auth::user()->email)
                      <li class="hover:bg-gray-50 rounded-lg">
                        <a href="{{ route('user.compelete_form') }}">
                          <span class="flex p-2 px-1">
                            <span class="">
                              {{-- <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#4d4d4d" viewBox="0 0 256 256"><path d="M237.9,198.36l-14.25-120a14.06,14.06,0,0,0-14-12.36H174V64a46,46,0,0,0-92,0v2H46.33a14.06,14.06,0,0,0-14,12.36l-14.25,120a14,14,0,0,0,14,15.64H223.92a14,14,0,0,0,14-15.64ZM94,64a34,34,0,0,1,68,0v2H94ZM225.5,201.3a2.07,2.07,0,0,1-1.58.7H32.08a2.07,2.07,0,0,1-1.58-.7,1.92,1.92,0,0,1-.49-1.53l14.26-120A2,2,0,0,1,46.33,78H209.67a2,2,0,0,1,2.06,1.77l14.26,120A1.92,1.92,0,0,1,225.5,201.3Z"></path></svg> --}}
                              <svg xmlns="http://www.w3.org/2000/svg"  width="18" height="18" fill="#4d4d4d" viewBox="0 0 512 512"><path d="M395.8 39.6c9.4-9.4 24.6-9.4 33.9 0l42.6 42.6c9.4 9.4 9.4 24.6 0 33.9L417.6 171 341 94.4l54.8-54.8zM318.4 117L395 193.6 159.6 428.9c-7.6 7.6-16.9 13.1-27.2 16.1L39.6 472.4l27.3-92.8c3-10.3 8.6-19.6 16.1-27.2L318.4 117zM452.4 17c-21.9-21.9-57.3-21.9-79.2 0L60.4 329.7c-11.4 11.4-19.7 25.4-24.2 40.8L.7 491.5c-1.7 5.6-.1 11.7 4 15.8s10.2 5.7 15.8 4l121-35.6c15.4-4.5 29.4-12.9 40.8-24.2L495 138.8c21.9-21.9 21.9-57.3 0-79.2L452.4 17z"/></svg>
                            </span>
                            <span class="text-sm">تکمیل پروفایل</span>
                          </span>
                        </a>
                      </li>
                      @endif
                      <li class="hover:bg-gray-50 rounded-lg">
                        <a href="##">
                          <span class="flex p-2 px-1">
                            <span class="">
                              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#4d4d4d" viewBox="0 0 256 256"><path d="M237.9,198.36l-14.25-120a14.06,14.06,0,0,0-14-12.36H174V64a46,46,0,0,0-92,0v2H46.33a14.06,14.06,0,0,0-14,12.36l-14.25,120a14,14,0,0,0,14,15.64H223.92a14,14,0,0,0,14-15.64ZM94,64a34,34,0,0,1,68,0v2H94ZM225.5,201.3a2.07,2.07,0,0,1-1.58.7H32.08a2.07,2.07,0,0,1-1.58-.7,1.92,1.92,0,0,1-.49-1.53l14.26-120A2,2,0,0,1,46.33,78H209.67a2,2,0,0,1,2.06,1.77l14.26,120A1.92,1.92,0,0,1,225.5,201.3Z"></path></svg>
                            </span>
                            <span class="text-sm">سفارش ها</span>
                          </span>
                        </a>
                      </li>
                     
                      <li class="hover:bg-red-200 rounded-lg">
                        <a href="{{ route('user.logout') }}">
                          <span class="flex p-2 px-1">
                            <span class="">
                              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#4d4d4d" viewBox="0 0 256 256"><path d="M110,216a6,6,0,0,1-6,6H48a14,14,0,0,1-14-14V48A14,14,0,0,1,48,34h56a6,6,0,0,1,0,12H48a2,2,0,0,0-2,2V208a2,2,0,0,0,2,2h56A6,6,0,0,1,110,216Zm110.24-92.24-40-40a6,6,0,0,0-8.48,8.48L201.51,122H104a6,6,0,0,0,0,12h97.51l-29.75,29.76a6,6,0,1,0,8.48,8.48l40-40A6,6,0,0,0,220.24,123.76Z"></path></svg>
                            </span>
                            <span class="text-sm text-red-500">خروج از حساب کاربری</span>
                          </span>
                        </a>
                      </li>
                    </span>
               
                  </a>
                    @else
                      <div>
                          <a href="{{ route('login') }}" class="text-xs font-bold text-black">
                            ورود | ثبت نام
                          </a>
                      </div>
                  @endif
                </li>
             
              </ul>
            </div>
            </div>
            <!-- cart -->
            <div class="labal_2 relative p-2 border border-(--color-zinc-200) rounded-xl hover:shadow-xl hover:bg-(--color-primary-500)">
            <a class="relative">
              <svg width="22px" height="22px" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <g id="Iconly/Light/Bag" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" stroke-linecap="round" stroke-linejoin="round">
                  <g class="stroke-gray-800" id="Bag" transform="translate(2.500000, 1.500000)" stroke="#200E32" stroke-width="1.5">
                    <path d="M14.01373,20.0000001 L5.66590392,20.0000001 C2.59954235,20.0000001 0.247139589,18.8924486 0.915331812,14.4347827 L1.69336385,8.39359272 C2.10526317,6.16933642 3.52402748,5.31807783 4.76887874,5.31807783 L14.9473685,5.31807783 C16.2105264,5.31807783 17.5469108,6.23340964 18.0228834,8.39359272 L18.8009154,14.4347827 C19.3684211,18.3890161 17.0800916,20.0000001 14.01373,20.0000001 Z" id="Path_33955"></path>
                    <path d="M14.1510298,5.09839819 C14.1510298,2.71232585 12.216736,0.7779932 9.83066366,0.7779932 L9.83066366,0.7779932 C8.68166274,0.773163349 7.57805185,1.22619323 6.76386233,2.03694736 C5.9496728,2.84770148 5.49199087,3.94938696 5.49199087,5.09839819 L5.49199087,5.09839819" id="Path_33956"></path>
                    <line x1="12.7963387" y1="9.60183071" x2="12.7505721" y2="9.60183071" id="Line_192"></line>
                    <line x1="6.96567509" y1="9.60183071" x2="6.9199085" y2="9.60183071" id="Line_193"></line>
                  </g>
                </g>
              </svg>
            </a>
            <div class="labal_2-2 absolute left-0 shadow-2xl bg-white rounded-xl w-70 md:w-100 p-2 h-95 hidden md:flex flex-col items-center invisible">
              <!-- Head -->
              <div class="w-full border-b border-(--color-zinc-200)">
                <div class="text-sm w-full h-10 p-3 flex items-center"> 2 کالا</div>
              </div>
              <!-- Items -->
              <div class="w-full bg-white h-60 overflow-y-auto
              [&::-webkit-scrollbar]:w-1.5
              [&::-webkit-scrollbar-thumb]:bg-(--color-primary-500)
              [&::-webkit-scrollbar-thumb]:rounded-full">
              <ul class="">
                <li class=" border-b border-(--color-zinc-100) h-45 flex items-center justify-center">
                  <div class="flex justify-between items-center p-2 h-30 gap-3">
                    <!-- Product -->
                    <div class="">
                      <a href="">
                        <img class="w-30 rounded-lg" src="img/photo_1_2025-11-24_23-49-49.jpg" alt="Items">
                      </a>
                    </div>
                    <div class="flex flex-col justify-between h-full">
                      <!-- Title -->
                      <a href="">
                        ایرپاد mossco
                      </a>
                      <!-- Attribute -->
                      <div class="flex items-center gap-5">
                        <!-- Price -->
                        <div class="">
                          <span class="text-sm">1.800.000</span>
                          <span class="text-sm">تومان</span>
                        </div>
                        <!-- Quantity -->
                        <div class=" flex h-10 max-w-28 items-center justify-between rounded-lg border border-gray-100 px-2 py-1">
                          <button type="button" data-action="increment">
                            <svg class="fill-green-500" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 256 256"><path d="M222,128a6,6,0,0,1-6,6H134v82a6,6,0,0,1-12,0V134H40a6,6,0,0,1,0-12h82V40a6,6,0,0,1,12,0v82h82A6,6,0,0,1,222,128Z"></path></svg>
                          </button>
                          <input value="1" disabled type="number" class="flex h-5 w-full grow select-none items-center justify-center bg-transparent text-center text-sm text-zinc-700 outline-none">
                          <button type="button" data-action="decrement">
                            <svg class="fill-red-500" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 256 256"><path d="M222,128a6,6,0,0,1-6,6H40a6,6,0,0,1,0-12H216A6,6,0,0,1,222,128Z"></path></svg>
                          </button>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
                <li class=" border-b border-(--color-zinc-100) h-45 flex items-center justify-center">
                  <div class="flex justify-between items-center p-2 h-30 gap-3">
                    <!-- Product -->
                    <div class="">
                      <a href="">
                        <img class="w-30 rounded-lg" src="img/photo_1_2025-11-24_23-49-49.jpg" alt="Items">
                      </a>
                    </div>
                    <div class="flex flex-col justify-between h-full">
                      <!-- Title -->
                      <a href="">
                        ایرپاد mossco
                      </a>
                      <!-- Attribute -->
                      <div class="flex items-center gap-5">
                        <!-- Price -->
                        <div class="">
                          <span class="text-sm">1.800.000</span>
                          <span class="text-sm">تومان</span>
                        </div>
                        <!-- Quantity -->
                        <div class=" flex h-10 max-w-28 items-center justify-between rounded-lg border border-gray-100 px-2 py-1">
                          <button type="button" data-action="increment">
                            <svg class="fill-green-500" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 256 256"><path d="M222,128a6,6,0,0,1-6,6H134v82a6,6,0,0,1-12,0V134H40a6,6,0,0,1,0-12h82V40a6,6,0,0,1,12,0v82h82A6,6,0,0,1,222,128Z"></path></svg>
                          </button>
                          <input value="1" disabled type="number" class="flex h-5 w-full grow select-none items-center justify-center bg-transparent text-center text-sm text-zinc-700 outline-none">
                          <button type="button" data-action="decrement">
                            <svg class="fill-red-500" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 256 256"><path d="M222,128a6,6,0,0,1-6,6H40a6,6,0,0,1,0-12H216A6,6,0,0,1,222,128Z"></path></svg>
                          </button>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
                <li class=" border-b border-(--color-zinc-100) h-45 flex items-center justify-center">
                  <div class="flex justify-between items-center p-2 h-30 gap-3">
                    <!-- Product -->
                    <div class="">
                      <a href="">
                        <img class="w-30 rounded-lg" src="img/photo_1_2025-11-24_23-49-49.jpg" alt="Items">
                      </a>
                    </div>
                    <div class="flex flex-col justify-between h-full">
                      <!-- Title -->
                      <a href="">
                        ایرپاد mossco
                      </a>
                      <!-- Attribute -->
                      <div class="flex items-center gap-5">
                        <!-- Price -->
                        <div class="">
                          <span class="text-sm">1.800.000</span>
                          <span class="text-sm">تومان</span>
                        </div>
                        <!-- Quantity -->
                        <div class=" flex h-10 max-w-28 items-center justify-between rounded-lg border border-gray-100 px-2 py-1">
                          <button type="button" data-action="increment">
                            <svg class="fill-green-500" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 256 256"><path d="M222,128a6,6,0,0,1-6,6H134v82a6,6,0,0,1-12,0V134H40a6,6,0,0,1,0-12h82V40a6,6,0,0,1,12,0v82h82A6,6,0,0,1,222,128Z"></path></svg>
                          </button>
                          <input value="1" disabled type="number" class="flex h-5 w-full grow select-none items-center justify-center bg-transparent text-center text-sm text-zinc-700 outline-none">
                          <button type="button" data-action="decrement">
                            <svg class="fill-red-500" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 256 256"><path d="M222,128a6,6,0,0,1-6,6H40a6,6,0,0,1,0-12H216A6,6,0,0,1,222,128Z"></path></svg>
                          </button>
                        </div>
                      </div>
                       </div>
                      </div>
                    </li> 
                  </ul>
                </div>
                <!-- Down Price -->
                <div class="flex items-center justify-between text-center w-[90%] h-23">
                  <div class="">
                    <div class="">مبلغ قابل پرداخت</div>
                    <div class="">87.000.000تومان</div>
                  </div>
                  <a href="###" class="bg-(--color-primary-500) px-4 p-3 rounded-xl">
                    <button class="text-white">ثبت سفارش</button>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- dawn -->
        <section class="relative z-45 max-w-[1700px] h-20 px-20 bg-(--color-zinc-100) hidden md:flex justify-between items-center">
          <!-- right -->
          <div class="">
            <ul class="flex gap-8">
              <li><a href="{{ route('home') }}" class="hover:text-(--color-primary-500)">صفحه اصلی</a></li>
              <div class="labal_3 relative transition-all duration-300">
                <li class="svg flex items-center justify-center text-center cursor-pointer transition-all duration-300 hover:text-(--color-primary-500)">
                  دسته بندی ها
                  <svg class="transition-all duration-300 fill-zinc-600 hover:fill-(--color-primary-500)" xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="#000000" viewBox="0 0 256 256">
                    <path d="M213.66,101.66l-80,80a8,8,0,0,1-11.32,0l-80-80A8,8,0,0,1,53.66,90.34L128,164.69l74.34-74.35a8,8,0,0,1,11.32,11.32Z"></path>
                  </svg>
                </li>
                <div class="labal_3-3 absolute w-50 px-3 py-1 rounded-xl shadow-xl bg-white invisible">
                  @foreach ($categories as $category)
                    @if($category->parent_id == 0)
                  <li class="labal_perr_mobile p-3 bg-gradient-to-l relative hover:from-zinc-100 rounded-lg hover:text-(--color-primary-500)">
                      
                      <a href="{{ route('search', ['category' => $category->id]) }}" class="flex items-center justify-between">{{ $category->title }}
                        <svg class="fill-zinc-600" xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="#000000" viewBox="0 0 256 256">
                          <path d="M213.66,101.66l-80,80a8,8,0,0,1-11.32,0l-80-80A8,8,0,0,1,53.66,90.34L128,164.69l74.34-74.35a8,8,0,0,1,11.32,11.32Z"></path>
                        </svg>
                      </a>
                      
                      <div class="z-10 labal_perrr_mobile absolute -left-50 bottom-0 bg-white w-50 shadow-xl rounded-xl text-(--color-zinc-800) invisible">
                        @foreach ($category->grandchild as $child)
                          <ul class="">
                            <li class="p-3 bg-gradient-to-l hover:from-zinc-100 rounded-lg hover:text-(--color-primary-500)"><a href="{{ route('search', ['category' => $category->id]) }}">{{ $child->title }}</a></li>
                          </ul>
                      @endforeach
                    </div>
                  </li>
                  @endif
                  @endforeach
                </div>
              </div>
              <li class="hover:text-(--color-primary-500) cursor-pointer">درباره ما</li>
             <li class="px-5"><a href="{{ route('contactUs.userIndex') }}" class="hover:text-(--color-primary-500) cursor-pointer">تماس با ما</a></li>
              <div class="labal_4 relative">
                <div class="labal_4-4 absolute bg-white px-3 py-1 w-70 rounded-xl shadow-xl invisible transition-all duration-100">
                  <li class="p-3 bg-gradient-to-l hover:from-zinc-100 rounded-lg hover:text-(--color-primary-500)"><a href="">صفحه اصلی</a></li>
                  <li class="p-3 bg-gradient-to-l hover:from-zinc-100 rounded-lg hover:text-(--color-primary-500)"><a href="">درباره ما</a></li>
                  <li class="p-3 bg-gradient-to-l hover:from-zinc-100 rounded-lg hover:text-(--color-primary-500)"><a href="">وبلاگ</a></li>
                  <li class="p-3 bg-gradient-to-l hover:from-zinc-100 rounded-lg hover:text-(--color-primary-500)"><a href="./cart/cart.html">سبد خرید</a></li>
                  <li class="p-3 bg-gradient-to-l hover:from-zinc-100 rounded-lg hover:text-(--color-primary-500)"><a href="./checkout/checkout.html">پرداخت</a></li>
                  <li class="p-3 bg-gradient-to-l hover:from-zinc-100 rounded-lg hover:text-(--color-primary-500)"><a href="./contactUs/contactUs.html">ارتباط با ما</a></li>
                  <li class="p-3 bg-gradient-to-l hover:from-zinc-100 rounded-lg hover:text-(--color-primary-500)"><a href="">داشبورد کاربر</a></li>
                  <li class="p-3 bg-gradient-to-l hover:from-zinc-100 rounded-lg hover:text-(--color-primary-500)"><a href="./serch/serch.html">جستجوی محصول</a></li>
                  <li class="p-3 bg-gradient-to-l hover:from-zinc-100 rounded-lg hover:text-(--color-primary-500)"><a href="./singel/singel.html">جزئیات محصول</a></li>
                </div>
              </div>
            </ul>
          </div>
          <!-- left -->
          <div class="flex gap-3 ">
            <div class="text-(--color-zinc-500) text-sm">تماس با پشتیبانی</div>
            <div class="text-(--color-zinc-500) text-sm">|</div>
            <a href="tel:09018741677" class="flex text-sm">
              901-874-1677
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none">
                <path class="stroke-(--color-primary-500)" d="M3 18V12C3 9.61305 3.94821 7.32387 5.63604 5.63604C7.32387 3.94821 9.61305 3 12 3C14.3869 3 16.6761 3.94821 18.364 5.63604C20.0518 7.32387 21 9.61305 21 12V18" stroke="#52525c" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                <path class="stroke-(--color-primary-500)" d="M21 19C21 19.5304 20.7893 20.0391 20.4142 20.4142C20.0391 20.7893 19.5304 21 19 21H18C17.4696 21 16.9609 20.7893 16.5858 20.4142C16.2107 20.0391 16 19.5304 16 19V16C16 15.4696 16.2107 14.9609 16.5858 14.5858C16.9609 14.2107 17.4696 14 18 14H21V19ZM3 19C3 19.5304 3.21071 20.0391 3.58579 20.4142C3.96086 20.7893 4.46957 21 5 21H6C6.53043 21 7.03914 20.7893 7.41421 20.4142C7.78929 20.0391 8 19.5304 8 19V16C8 15.4696 7.78929 14.9609 7.41421 14.5858C7.03914 14.2107 6.53043 14 6 14H3V19Z" stroke="#52525c" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
              </svg>
            </a>
          </div>
        </section>
    </header>
  </div>
</body>
</html>