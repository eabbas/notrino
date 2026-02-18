<!DOCTYPE html>
<html lang="fe" dir="rtl">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}" type="text/css">
  <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" type="text/css">
  <script src="{{asset('assets/js/tailwind.js')}}"></script>
  <!-- <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script> -->
  <link rel="shortcut icon" href="{{ asset('storage/img/icons8-mobile-phone-48.png') }}" type="image/png">
  <title>@yield('title')</title>
  
</head>

<body class="overflow-y-auto
              [&::-webkit-scrollbar]:w-1.5
              [&::-webkit-scrollbar-thumb]:bg-(--color-primary-500)
              [&::-webkit-scrollbar-thumb]:rounded-full">
  <div class="max-w-[1700px] mx-auto">
    <header class="fixed w-[100%] z-50">
      <!-- top -->
      <section class="relative z-50 max-w-[1700px] h-20 bg-white flex justify-between items-center px-1 md:px-20 shadow-xl">
        <!-- menu-mobile -->
        <div id="hambeger" class="sticy md:absolute">
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
            <ul class="flex flex-col justify-start gap-10 px-8">
              <li class="hover:text-(--color-primary-500)">صفحه اصلی</li>
              <div class="labal_3 relative">
                <li class="svg flex items-center text-center hover:text-(--color-primary-500)">
                  محصولات
                  <svg class="transition-all duration-300 fill-zinc-600 hover:fill-(--color-primary-500)" xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="#000000" viewBox="0 0 256 256">
                    <path d="M213.66,101.66l-80,80a8,8,0,0,1-11.32,0l-80-80A8,8,0,0,1,53.66,90.34L128,164.69l74.34-74.35a8,8,0,0,1,11.32,11.32Z"></path>
                  </svg>
                </li>
                <div class="labal_3-3 absolute z-10 w-50 px-3 py-1 rounded-xl shadow-xl bg-white invisible">
                  <li class="p-3 bg-gradient-to-l hover:from-zinc-100 rounded-lg hover:text-(--color-primary-500)"><a href="" class="">موبایل</a></li>
                  <li class="p-3 bg-gradient-to-l hover:from-zinc-100 rounded-lg hover:text-(--color-primary-500)"><a href="" class="">کاور</a></li>
                  <li class="p-3 bg-gradient-to-l hover:from-zinc-100 rounded-lg hover:text-(--color-primary-500)"><a href="" class="">پاوربانک</a></li>
                  <li class="p-3 bg-gradient-to-l hover:from-zinc-100 rounded-lg hover:text-(--color-primary-500)"><a href="" class="">ایپاد</a></li>
                  <li class="p-3 bg-gradient-to-l hover:from-zinc-100 rounded-lg hover:text-(--color-primary-500)"><a href="" class="">هدفون</a></li>
                  <li class="p-3 bg-gradient-to-l hover:from-zinc-100 rounded-lg hover:text-(--color-primary-500)"><a href="" class="">شارژر</a></li>
                  <li class="p-3 bg-gradient-to-l hover:from-zinc-100 rounded-lg hover:text-(--color-primary-500)"><a href="" class="">LCD</a></li>
                  <li class="p-3 bg-gradient-to-l hover:from-zinc-100 rounded-lg hover:text-(--color-primary-500)"><a href="" class="">لوازم جانبی موبایل</a></li>
                </div>
              </div>
              <li class="hover:text-(--color-primary-500)">درباره ما</li>
              <li class="hover:text-(--color-primary-500)">تماس با ما</li>
              <li class="hover:text-(--color-primary-500)">بلاگ</li>
              <div class="labal_4 relative">
                <li class="svg flex items-center text-center hover:text-(--color-primary-500)">
                  صفحات پروژه
                  <svg class="transition-all duration-300 fill-zinc-600 hover:fill-(--color-primary-500)" xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="#000000" viewBox="0 0 256 256">
                    <path d="M213.66,101.66l-80,80a8,8,0,0,1-11.32,0l-80-80A8,8,0,0,1,53.66,90.34L128,164.69l74.34-74.35a8,8,0,0,1,11.32,11.32Z"></path>
                  </svg>
                </li>
                <div class="labal_4-4 absolute bg-white px-3 py-1 w-50 rounded-xl shadow-xl invisible">
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
              </div>
            </ul>
          </div>

          <div id="garah" onclick="Hamberger('close',this)" class="w-full h-dvh absolute bg-black/50 top-0 right-full z-30">
          </div>
        </div>
        <!-- logo -->
        <a href="#" class="relative">
          {{-- <img src="img/logo/Screenshot 2025-12-16 063243.png" alt="logo" class="w-35 md:w-50">  --}}
          <img src="{{ asset('storage/img/logo/Screenshot 2025-12-16 063243.png') }}" alt="logo" class="w-35 md:w-50">
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
        <div class=" w-[400px] h-12 bg-(--color-zinc-100) hidden md:flex justify-between p-3 items-center rounded-2xl">
          <input type="text" name="" placeholder="جستجوی محصول" class="outline-none">
          <button>
            <svg class="size-6 fill-zinc-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256">
              <path d="M229.66,218.34l-50.07-50.06a88.11,88.11,0,1,0-11.31,11.31l50.06,50.07a8,8,0,0,0,11.32-11.32ZM40,112a72,72,0,1,1,72,72A72.08,72.08,0,0,1,40,112Z"></path>
            </svg>
          </button>
        </div>
        <!-- buttons -->
        <div class="gap-2 flex">
          <!-- login / register -->
          <div class="flex flex-row justify-end items-center gap-5">
                    
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
                    <div class="size-7 relative cursor-pointer">
                        <span class="absolute text-white text-sm -left-2 -top-3" id="shoppingCartCount">0</span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="size-full rotate-y-180" viewBox="0 0 576 512">
                            <path fill="white" d="M24 0C10.7 0 0 10.7 0 24S10.7 48 24 48H69.5c3.8 0 7.1 2.7 7.9 6.5l51.6 271c6.5 34 36.2 58.5 70.7 58.5H488c13.3 0 24-10.7 24-24s-10.7-24-24-24H199.7c-11.5 0-21.4-8.2-23.6-19.5L170.7 288H459.2c32.6 0 61.1-21.8 69.5-53.3l41-152.3C576.6 57 557.4 32 531.1 32h-411C111 12.8 91.6 0 69.5 0H24zM131.1 80H520.7L482.4 222.2c-2.8 10.5-12.3 17.8-23.2 17.8H161.6L131.1 80zM176 512a48 48 0 1 0 0-96 48 48 0 1 0 0 96zm336-48a48 48 0 1 0 -96 0 48 48 0 1 0 96 0z"/>
                        </svg>
                    </div>
                </div>
          <!-- cart -->
          <div class="labal_2 relative">
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
            </button>
            <div class="labal_2-2 absolute left-0 shadow-2xl bg-white rounded-xl w-70 md:w-100 p-2 h-95  flex flex-col items-center invisible">
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
          <ul class="flex gap-10">
            <li class="hover:text-(--color-primary-500)">صفحه اصلی</li>
            <div class="labal_3 relative transition-all duration-300">
              <li class="svg flex items-center justify-center text-center transition-all duration-300 hover:text-(--color-primary-500)">
                دسته بندی ها
                <svg class="transition-all duration-300 fill-zinc-600 hover:fill-(--color-primary-500)" xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="#000000" viewBox="0 0 256 256">
                  <path d="M213.66,101.66l-80,80a8,8,0,0,1-11.32,0l-80-80A8,8,0,0,1,53.66,90.34L128,164.69l74.34-74.35a8,8,0,0,1,11.32,11.32Z"></path>
                </svg>
              </li>
              <div class="labal_3-3 absolute w-50 px-3 py-1 rounded-xl shadow-xl bg-white invisible">
                @if($categories)
                @foreach ($categories as $category)
                  @if($category->parent_id == 0)
                    <li class="p-3 bg-gradient-to-l hover:from-zinc-100 rounded-lg hover:text-(--color-primary-500)"><a href="{{ route('category.proList', [$category]) }}" class="">{{ $category->title }}</a></li>
                  @endif
                @endforeach
                @endif
              
              </div>
            </div>
            <li class="hover:text-(--color-primary-500)">درباره ما</li>
            <li class="hover:text-(--color-primary-500)">تماس با ما</li>
            <li class="hover:text-(--color-primary-500)">بلاگ</li>
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
          </ul>
        </div>
        <!-- left -->
        <div class="flex gap-3 ">
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
      </section>
    </header>