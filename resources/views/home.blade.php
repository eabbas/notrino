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
  <title>فروشگاه نوترینو</title>
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
                                <a href="{{ route('login') }}" class="text-xs font-bold text-white">ورود | ثبت
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
    <main class="relative z-1 top-23 md:top-50">
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
                <img src="{{ asset('storage/'.$slider->slider_img) }}" class="w-full h-full" alt="">
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
          
        @if(isset($category->image))
        <a href="" class="category flex flex-col flex justify-center items-center">
          <div class="category_it border-2 border-(--color-zinc-300) rounded-xl hover:border-(--color-primary-500) flex justify-center items-center h-[90px] md:h-[128px] w-[90px] md:w-[128px]">
            <img class="w-13 md:w-20 rounded-xl" src="{{ asset('storage/'.$category->image) }}" alt="">
          </div>
          <span class="md:p-2 text-xs md:text-base">{{ $category->title }}</span>
        </a>
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
      <ul class="space-y-2 text-sm md:flex gap-x-2">
        <li><button class="text-right w-full px-4 py-2 rounded-lg text-(--color-primary-500) bg-zinc-100 hover:bg-zinc-200 cursor-pointer text-sm" id="all-categories-btn" data-cat-id="all">همه</button></li>
        @if($categories)
        @foreach ($categories as $category)
          @if($category->parent_id == 0)
            <li><button class="text-right w-full px-4 py-2 rounded-lg hover:bg-zinc-100 hover:text-(--color-primary-500) cursor-pointer text-sm cats" data-cat-id="{{ $category->id }}">{{ $category->title }}</button></li>
          @endif
        @endforeach
        @endif
        <li>
          <button class="text-right w-full px-4 py-2 rounded-lg cursor-pointer text-sm hover:text-(--color-primary-700) text-(--color-primary-500) flex items-center gap-x-1 group" data-category="beauty">
            همه محصولات
            <svg class="fill-(--color-primary-500) hover:fill-(--color-primary-700) group-hover:-translate-x-1 transition group-hover:fill-primary-500 size-2.5 md:size-3" xmlns="http://www.w3.org/2000/svg" width="" height="" fill="" viewBox="0 0 256 256">
              <path d="M224,128a8,8,0,0,1-8,8H59.31l58.35,58.34a8,8,0,0,1-11.32,11.32l-72-72a8,8,0,0,1,0-11.32l72-72a8,8,0,0,1,11.32,11.32L59.31,120H216A8,8,0,0,1,224,128Z"></path>
            </svg>
          </button>
        </li>
      </ul>
    </div>
    
    <!-- بخش همه محصولات -->
    <div class="overflow-x-auto w-full h-[350px] md:h-[460px] flex flex-row border border-(--color-zinc-100) rounded-xl bg-white mx-auto px-[16px] py-[32px] all-products-section
          [&::-webkit-scrollbar]:w-0
          [&::-webkit-scrollbar-thumb]:bg-(--color-primary-500)
          [&::-webkit-scrollbar-thumb]:rounded-full">
      <div class="flex flex-row gap-3">
        @if($products)
        @foreach ($products as $product)
          @if($product->show_home == 1)
            <div class="w-[170px] md:w-[245px] h-[300px] md:h-[400px] text-sm border border-(--color-zinc-300) rounded-2xl px-2 hover:shadow-lg transition">
              @if($medias)
              @php
                $productMedia = $medias->where('product_id', $product->id)->first();
              @endphp
              @endif
              @if($productMedia)
                <a href="" class="flex items-center justify-center">
                  <img src="{{ asset('storage/'.$productMedia->path) }}" alt="{{ $product->title }}" class="rounded-xl mb-3 w-[130px] md:w-[220px]">
                </a>
              @endif
              <a href="" class="mb-3 text-xs md:text-sm">{{ $product->title }}</a>
              <p class="text-[10px] md:text-xs text-(--color-zinc-500) mb-3">{{ $product->summary }}</p>
              <span class="flex flex-row justify-between items-center mb-3">
                <span class="flex gap-1 mt-4">
                  @if($attributes)
                  @foreach ($attributes as $attribute)
                    @if($attribute->product_id == $product->id)
                      <div class="w-3 md:w-4 h-3 md:h-4 rounded-full" style="background-color: {{ $attribute->value }};"></div>
                    @endif
                  @endforeach
                  @endif
                </span>
                <span class="flex items-center gap-0.5">
                  <span class="text-[9px] text-(--color-zinc-500)">(78)</span>
                  <span class="text-xs text-(--color-zinc-500)">4.4</span>
                  <span class="">
                    <svg class="fill-primary-500" xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="#f9bc00" viewBox="0 0 256 256">
                      <path d="M234.5,114.38l-45.1,39.36,13.51,58.6a16,16,0,0,1-23.84,17.34l-51.11-31-51,31a16,16,0,0,1-23.84-17.34L66.61,153.8,21.5,114.38a16,16,0,0,1,9.11-28.06l59.46-5.15,23.21-55.36a15.95,15.95,0,0,1,29.44,0h0L166,81.17l59.44,5.15a16,16,0,0,1,9.11,28.06Z"></path>
                    </svg>
                  </span>
                </span>
              </span>
              <div class="border-dashed border-t-1 border-(--color-zinc-200) flex justify-end items-center h-12">
                <span class="flex items-center text-base md:text-base gap-2">
                  {{ number_format($product->price) }}
                  <span>تومان</span>
                </span>
              </div>
            </div>
          @endif
        @endforeach
        @endif
      </div>
    </div>
    
    <!-- محصولات دسته‌بندی‌ها -->
    @if($categories)
    @foreach ($categories as $category)
    <div class="overflow-x-auto w-full h-[350px] md:h-[460px] flex flex-row border border-(--color-zinc-100) rounded-xl bg-white mx-auto px-[16px] py-[32px] category-section
          [&::-webkit-scrollbar]:w-0
          [&::-webkit-scrollbar-thumb]:bg-(--color-primary-500)
          [&::-webkit-scrollbar-thumb]:rounded-full" data-category-id="{{ $category->id }}" style="display: none;">
      <div class="flex flex-row gap-3">
        @foreach ($category->products as $product)
          @if($product->show_home == 1)
            <div class="w-[170px] md:w-[245px] h-[300px] md:h-[400px] text-sm border border-(--color-zinc-300) rounded-2xl px-2 hover:shadow-lg transition">
              @if($medias)
              @php
                $productMedia = $medias->where('product_id', $product->id)->first();
              @endphp
              @endif
              @if($productMedia)
                <a href="" class="flex items-center justify-center">
                  <img src="{{ asset('storage/'.$productMedia->path) }}" alt="{{ $product->title }}" class="rounded-xl mb-3 w-[130px] md:w-[220px]">
                </a>
              @endif
              <a href="" class="mb-3 text-xs md:text-sm">{{ $product->title }}</a>
              <p class="text-[10px] md:text-xs text-(--color-zinc-500) mb-3">{{ $product->summary }}</p>
              <span class="flex flex-row justify-between items-center mb-3">
                <span class="flex gap-1 mt-4">
                  @if($attributes)
                  @foreach ($attributes as $attribute)
                    @if($attribute->product_id == $product->id)
                      <div class="w-3 md:w-4 h-3 md:h-4 rounded-full" style="background-color: {{ $attribute->value }};"></div>
                    @endif
                  @endforeach
                  @endif
                </span>
                <span class="flex items-center gap-0.5">
                  <span class="text-[9px] text-(--color-zinc-500)">(78)</span>
                  <span class="text-xs text-(--color-zinc-500)">4.4</span>
                  <span class="">
                    <svg class="fill-primary-500" xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="#f9bc00" viewBox="0 0 256 256">
                      <path d="M234.5,114.38l-45.1,39.36,13.51,58.6a16,16,0,0,1-23.84,17.34l-51.11-31-51,31a16,16,0,0,1-23.84-17.34L66.61,153.8,21.5,114.38a16,16,0,0,1,9.11-28.06l59.46-5.15,23.21-55.36a15.95,15.95,0,0,1,29.44,0h0L166,81.17l59.44,5.15a16,16,0,0,1,9.11,28.06Z"></path>
                    </svg>
                  </span>
                </span>
              </span>
              <div class="border-dashed border-t-1 border-(--color-zinc-200) flex justify-end items-center h-12">
                <span class="flex items-center text-base md:text-base gap-2">
                  {{ number_format($product->price) }}
                  <span>تومان</span>
                </span>
              </div>
            </div>
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
        <div class="overflow-x-auto w-[93%] md:w-[95%] h-[350px] md:h-[460px] flex flex-row rounded-xl bg-white mx-auto px-[16px] py-[32px]
                [&::-webkit-scrollbar]:w-0.5
                [&::-webkit-scrollbar-thumb]:bg-(--color-primary-500)
                [&::-webkit-scrollbar-thumb]:rounded-full">
          <div class="flex flex-row gap-3">
            @if($products)
            @foreach ($products as $product)
              @if($product->show_home == 1)
                <div class="w-[170px] md:w-[245px] h-[300px] md:h-[400px] text-sm border border-(--color-zinc-300) rounded-2xl px-2 hover:shadow-lg transition">
                  @if($medias)
                  @php
                    $productMedia = $medias->where('product_id', $product->id)->first();
                  @endphp
                  @endif
                  @if($productMedia)
                    <a href="" class="flex items-center justify-center">
                      <img src="{{ asset('storage/'.$productMedia->path) }}" alt="{{ $product->title }}" class="rounded-xl mb-3 w-[130px] md:w-[220px]">
                    </a>
                  @endif
                  <a href="" class="mb-3 text-xs md:text-sm">{{ $product->title }}</a>
                  <p class="text-[10px] md:text-xs text-(--color-zinc-500) mb-3">{{ $product->summary }}</p>
                  <span class="flex flex-row justify-between items-center mb-3">
                    <span class="flex gap-1 mt-4">
                      @if($attributes)
                      @foreach ($attributes as $attribute)
                        @if($attribute->product_id == $product->id)
                          <div class="w-3 md:w-4 h-3 md:h-4 rounded-full" style="background-color: {{ $attribute->value }};"></div>
                        @endif
                      @endforeach
                      @endif
                    </span>
                    <span class="flex items-center gap-0.5">
                      <span class="text-[9px] text-(--color-zinc-500)">(78)</span>
                      <span class="text-xs text-(--color-zinc-500)">4.4</span>
                      <span class="">
                        <svg class="fill-primary-500" xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="#f9bc00" viewBox="0 0 256 256">
                          <path d="M234.5,114.38l-45.1,39.36,13.51,58.6a16,16,0,0,1-23.84,17.34l-51.11-31-51,31a16,16,0,0,1-23.84-17.34L66.61,153.8,21.5,114.38a16,16,0,0,1,9.11-28.06l59.46-5.15,23.21-55.36a15.95,15.95,0,0,1,29.44,0h0L166,81.17l59.44,5.15a16,16,0,0,1,9.11,28.06Z"></path>
                        </svg>
                      </span>
                    </span>
                  </span>
                  <div class="border-dashed border-t-1 border-(--color-zinc-200) flex justify-end items-center h-12">
                    <span class="flex items-center text-base md:text-base gap-2">
                      {{ number_format($product->price) }}
                      <span>تومان</span>
                      {{-- <img src="img/icons/toman.png" alt="تومان" class="w-4 md:w-5 h-4 md:h-5"> --}}
                    </span>
                  </div>
                </div>
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
        <a href="" class="rounded-xl w-full md:w-1/2">
          <img src="{{ asset('storage/'.$rightBanner->meta_value) }}" class="rounded-2xl" alt="">
        </a>
        @endforeach
        @endif
        @if($HeroBannerLeft)
        @foreach ($HeroBannerLeft as $leftBanner)
        <a href="" class="rounded-xl w-full md:w-1/2">
          <img src="{{ asset('storage/'.$leftBanner->meta_value) }}" class="rounded-2xl" alt="">
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
          <div class="overflow-x-auto w-[93%] md:w-[95%] h-[350px] md:h-[460px] flex flex-row rounded-xl bg-white mx-auto px-[16px] py-[32px]
                  [&::-webkit-scrollbar]:w-0.5
                  [&::-webkit-scrollbar-thumb]:bg-(--color-primary-500)
                  [&::-webkit-scrollbar-thumb]:rounded-full">
            <div class="flex flex-row gap-3">
              @if($products)
              @foreach ($products as $product)
                @if($product->show_home == 1)
                  <div class="w-[170px] md:w-[245px] h-[300px] md:h-[400px] text-sm border border-(--color-zinc-300) rounded-2xl px-2 hover:shadow-lg transition">
                    @if($medias)
                    @php
                      $productMedia = $medias->where('product_id', $product->id)->first();
                    @endphp
                    @endif
                    @if($productMedia)
                      <a href="" class="flex items-center justify-center">
                        <img src="{{ asset('storage/'.$productMedia->path) }}" alt="{{ $product->title }}" class="rounded-xl mb-3 w-[130px] md:w-[220px]">
                      </a>
                    @endif
                    <a href="" class="mb-3 text-xs md:text-sm">{{ $product->title }}</a>
                    <p class="text-[10px] md:text-xs text-(--color-zinc-500) mb-3">{{ $product->summary }}</p>
                    <span class="flex flex-row justify-between items-center mb-3">
                      <span class="flex gap-1 mt-4">
                        @if($attributes)
                        @foreach ($attributes as $attribute)
                          @if($attribute->product_id == $product->id)
                            <div class="w-3 md:w-4 h-3 md:h-4 rounded-full" style="background-color: {{ $attribute->value }};"></div>
                          @endif
                        @endforeach
                        @endif
                      </span>
                      <span class="flex items-center gap-0.5">
                        <span class="text-[9px] text-(--color-zinc-500)">(78)</span>
                        <span class="text-xs text-(--color-zinc-500)">4.4</span>
                        <span class="">
                          <svg class="fill-primary-500" xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="#f9bc00" viewBox="0 0 256 256">
                            <path d="M234.5,114.38l-45.1,39.36,13.51,58.6a16,16,0,0,1-23.84,17.34l-51.11-31-51,31a16,16,0,0,1-23.84-17.34L66.61,153.8,21.5,114.38a16,16,0,0,1,9.11-28.06l59.46-5.15,23.21-55.36a15.95,15.95,0,0,1,29.44,0h0L166,81.17l59.44,5.15a16,16,0,0,1,9.11,28.06Z"></path>
                          </svg>
                        </span>
                      </span>
                    </span>
                    <div class="border-dashed border-t-1 border-(--color-zinc-200) flex justify-end items-center h-12">
                      <span class="flex items-center text-base md:text-base gap-2">
                        {{ number_format($product->price) }}
                        <span>تومان</span>
                        {{-- <img src="img/icons/toman.png" alt="تومان" class="w-4 md:w-5 h-4 md:h-5"> --}}
                      </span>
                    </div>
                  </div>
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
        <div class="w-[93%] md:w-[95%] flex items-center mx-auto">
          <div class="overflow-x-auto flex flex-row rounded-xl bg-white mx-auto px-[16px] py-[32px]
          [&::-webkit-scrollbar]:w-thin
          [&::-webkit-scrollbar-thumb]:bg-(--color-primary-500)
          [&::-webkit-scrollbar-thumb]:rounded-full">
          @if($brands)
          @foreach ($brands as $brand)
            <div class="flex flex-row gap-3">
              <a class="flex flex-col justify-between items-center gap-3 w-full h-36 md:h-48 md:px-4 border border-zinc-100 rounded-2xl hover:shadow-lg transition">
                <div class="w-full h-44 flex justify-center items-center">
                  <img src="{{ asset('storage/'.$brand->image) }}" alt="brands" class="max-w-24 md:max-w-32 mx-auto rounded-2xl">
                </div>
                  <p class="">{{ $brand->title }}</p>
              </a>
            @endforeach
            @endif
            </div>
          </div>
        </div>
      </section>
      <!-- blog -->
      {{-- <section class="mt-20">
        <div class="w-[93%] md:w-[95%] flex items-center mx-auto">
          <span class="w-48 min-w-fit text-zinc-700 text-xs md:text-sm md:font-yekanBakhBold">جدید ترین مقالات</span>
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
        <div class="w-[93%] md:w-[95%] flex items-center mx-auto">
          <div class="overflow-x-auto flex flex-row rounded-xl bg-white mx-auto px-[16px] py-[32px]
          [&::-webkit-scrollbar]:w-0.5
          [&::-webkit-scrollbar-thumb]:bg-(--color-primary-500)
          [&::-webkit-scrollbar-thumb]:rounded-full">
            <div class="flex flex-row gap-3">
              <a href="" class="w-[330px] bg-white min-h-60 rounded-2xl border hover:border-(--color-primary-500) transition border-zinc-300 group p-2 md:p-3 hover:drop-shadow-lg hover:text-(--color-primary-500)">
                <div class="block overflow-hidden rounded-lg md:rounded-2xl">
                  <img src="img/blog/keybl.jpg" alt="vlag" class="rounded-lg md:rounded-2xl max-h-56 w-full transition-transform duration-300 ease-in-out group-hover:rotate-3 group-hover:scale-110">
                </div>
                <div class="p-1 mt-3">
                  <p class="text-xs md:text-sm">
                    بهترین کیبرد بازار برای گیم و برنامه نویسی جی پیشنهاد میشه؟
                  </p>
                  <div class="flex items-center justify-between mt-3">
                    <span class="text-xs text-(--color-zinc-500) flex items-center">
                      <svg
                        class="fill-zinc-400"
                        xmlns="http://www.w3.org/2000/svg"
                        width="16"
                        height="16"
                        fill=""
                        viewBox="0 0 256 256">
                        <path d="M208,32H184V24a8,8,0,0,0-16,0v8H88V24a8,8,0,0,0-16,0v8H48A16,16,0,0,0,32,48V208a16,16,0,0,0,16,16H208a16,16,0,0,0,16-16V48A16,16,0,0,0,208,32ZM72,48v8a8,8,0,0,0,16,0V48h80v8a8,8,0,0,0,16,0V48h24V80H48V48ZM208,208H48V96H208V208Z"></path>
                      </svg>
                      1404/02/19</span>
                    <span class="flex items-center text-xs md:text-sm">
                      ادامه مطلب
                      <svg class="fill-(--color-zinc-600) hover:fill-(--color-primary-500) group-hover:-translate-x-1 transition group-hover:fill-(--color-primary-500) size-2.5 md:size-3" xmlns="http://www.w3.org/2000/svg" width="" height="" fill="" viewBox="0 0 256 256">
                        <path d="M224,128a8,8,0,0,1-8,8H59.31l58.35,58.34a8,8,0,0,1-11.32,11.32l-72-72a8,8,0,0,1,0-11.32l72-72a8,8,0,0,1,11.32,11.32L59.31,120H216A8,8,0,0,1,224,128Z"></path>
                      </svg>
                    </span>
                  </div>
                </div>
              </a>
              <a href="" class="w-[330px] bg-white min-h-60 rounded-2xl border hover:border-(--color-primary-500) transition border-zinc-300 group p-2 md:p-3 hover:drop-shadow-lg hover:text-(--color-primary-500)">
                <div class="block overflow-hidden rounded-lg md:rounded-2xl">
                  <img src="img/blog/2.png" alt="vlag" class="rounded-lg md:rounded-2xl max-h-56 w-full transition-transform duration-300 ease-in-out group-hover:rotate-3 group-hover:scale-110">
                </div>
                <div class="p-1 mt-3">
                  <p class="text-xs md:text-sm">
                    این ابزار لازمت میشه !
                  </p>
                  <div class="flex items-center justify-between mt-3">
                    <span class="text-xs text-(--color-zinc-500) flex items-center">
                      <svg
                        class="fill-zinc-400"
                        xmlns="http://www.w3.org/2000/svg"
                        width="16"
                        height="16"
                        fill=""
                        viewBox="0 0 256 256">
                        <path d="M208,32H184V24a8,8,0,0,0-16,0v8H88V24a8,8,0,0,0-16,0v8H48A16,16,0,0,0,32,48V208a16,16,0,0,0,16,16H208a16,16,0,0,0,16-16V48A16,16,0,0,0,208,32ZM72,48v8a8,8,0,0,0,16,0V48h80v8a8,8,0,0,0,16,0V48h24V80H48V48ZM208,208H48V96H208V208Z"></path>
                      </svg>
                      1404/02/19</span>
                    <span class="flex items-center text-xs md:text-sm">
                      ادامه مطلب
                      <svg class="fill-(--color-zinc-600) hover:fill-(--color-primary-500) group-hover:-translate-x-1 transition group-hover:fill-(--color-primary-500) size-2.5 md:size-3" xmlns="http://www.w3.org/2000/svg" width="" height="" fill="" viewBox="0 0 256 256">
                        <path d="M224,128a8,8,0,0,1-8,8H59.31l58.35,58.34a8,8,0,0,1-11.32,11.32l-72-72a8,8,0,0,1,0-11.32l72-72a8,8,0,0,1,11.32,11.32L59.31,120H216A8,8,0,0,1,224,128Z"></path>
                      </svg>
                    </span>
                  </div>
                </div>
              </a>
              <a href="" class="w-[330px] bg-white min-h-60 rounded-2xl border hover:border-(--color-primary-500) transition border-zinc-300 group p-2 md:p-3 hover:drop-shadow-lg hover:text-(--color-primary-500)">
                <div class="block overflow-hidden rounded-lg md:rounded-2xl">
                  <img src="img/blog/3.png" alt="vlag" class="rounded-lg md:rounded-2xl max-h-56 w-full transition-transform duration-300 ease-in-out group-hover:rotate-3 group-hover:scale-110">
                </div>
                <div class="p-1 mt-3">
                  <p class="text-xs md:text-sm"> سلر استارز های ایران</p>
                  <div class="flex items-center justify-between mt-3">
                    <span class="text-xs text-(--color-zinc-500) flex items-center">
                      <svg
                        class="fill-zinc-400"
                        xmlns="http://www.w3.org/2000/svg"
                        width="16"
                        height="16"
                        fill=""
                        viewBox="0 0 256 256">
                        <path d="M208,32H184V24a8,8,0,0,0-16,0v8H88V24a8,8,0,0,0-16,0v8H48A16,16,0,0,0,32,48V208a16,16,0,0,0,16,16H208a16,16,0,0,0,16-16V48A16,16,0,0,0,208,32ZM72,48v8a8,8,0,0,0,16,0V48h80v8a8,8,0,0,0,16,0V48h24V80H48V48ZM208,208H48V96H208V208Z"></path>
                      </svg>
                      1404/02/19</span>
                    <span class="flex items-center text-xs md:text-sm">
                      ادامه مطلب
                      <svg class="fill-(--color-zinc-600) hover:fill-(--color-primary-500) group-hover:-translate-x-1 transition group-hover:fill-(--color-primary-500) size-2.5 md:size-3" xmlns="http://www.w3.org/2000/svg" width="" height="" fill="" viewBox="0 0 256 256">
                        <path d="M224,128a8,8,0,0,1-8,8H59.31l58.35,58.34a8,8,0,0,1-11.32,11.32l-72-72a8,8,0,0,1,0-11.32l72-72a8,8,0,0,1,11.32,11.32L59.31,120H216A8,8,0,0,1,224,128Z"></path>
                      </svg>
                    </span>
                  </div>
                </div>
              </a>
              <a href="" class="w-[330px] bg-white min-h-60 rounded-2xl border hover:border-(--color-primary-500) transition border-zinc-300 group p-2 md:p-3 hover:drop-shadow-lg hover:text-(--color-primary-500)">
                <div class="block overflow-hidden rounded-lg md:rounded-2xl">
                  <img src="img/blog/4.png" alt="vlag" class="rounded-lg md:rounded-2xl max-h-56 w-full transition-transform duration-300 ease-in-out group-hover:rotate-3 group-hover:scale-110">
                </div>
                <div class="p-1 mt-3">
                  <p class="text-xs md:text-sm">
                    بررسی گوشی پیکسل گوگل - آیا ارزش خرید داره یا نه؟
                  </p>
                  <div class="flex items-center justify-between mt-3">
                    <span class="text-xs text-(--color-zinc-500) flex items-center">
                      <svg
                        class="fill-zinc-400"
                        xmlns="http://www.w3.org/2000/svg"
                        width="16"
                        height="16"
                        fill=""
                        viewBox="0 0 256 256">
                        <path d="M208,32H184V24a8,8,0,0,0-16,0v8H88V24a8,8,0,0,0-16,0v8H48A16,16,0,0,0,32,48V208a16,16,0,0,0,16,16H208a16,16,0,0,0,16-16V48A16,16,0,0,0,208,32ZM72,48v8a8,8,0,0,0,16,0V48h80v8a8,8,0,0,0,16,0V48h24V80H48V48ZM208,208H48V96H208V208Z"></path>
                      </svg>
                      1404/02/19</span>
                    <span class="flex items-center text-xs md:text-sm">
                      ادامه مطلب
                      <svg class="fill-(--color-zinc-600) hover:fill-(--color-primary-500) group-hover:-translate-x-1 transition group-hover:fill-(--color-primary-500) size-2.5 md:size-3" xmlns="http://www.w3.org/2000/svg" width="" height="" fill="" viewBox="0 0 256 256">
                        <path d="M224,128a8,8,0,0,1-8,8H59.31l58.35,58.34a8,8,0,0,1-11.32,11.32l-72-72a8,8,0,0,1,0-11.32l72-72a8,8,0,0,1,11.32,11.32L59.31,120H216A8,8,0,0,1,224,128Z"></path>
                      </svg>
                    </span>
                  </div>
                </div>
              </a>
              <a href="" class="w-[330px] bg-white min-h-60 rounded-2xl border hover:border-(--color-primary-500) transition border-zinc-300 group p-2 md:p-3 hover:drop-shadow-lg hover:text-(--color-primary-500)">
                <div class="block overflow-hidden rounded-lg md:rounded-2xl">
                  <img src="img/blog/2.png" alt="vlag" class="rounded-lg md:rounded-2xl max-h-56 w-full transition-transform duration-300 ease-in-out group-hover:rotate-3 group-hover:scale-110">
                </div>
                <div class="p-1 mt-3">
                  <p class="text-xs md:text-sm">
                    این ابزار لازمت میشه
                  </p>
                  <div class="flex items-center justify-between mt-3">
                    <span class="text-xs text-(--color-zinc-500) flex items-center">
                      <svg
                        class="fill-zinc-400"
                        xmlns="http://www.w3.org/2000/svg"
                        width="16"
                        height="16"
                        fill=""
                        viewBox="0 0 256 256">
                        <path d="M208,32H184V24a8,8,0,0,0-16,0v8H88V24a8,8,0,0,0-16,0v8H48A16,16,0,0,0,32,48V208a16,16,0,0,0,16,16H208a16,16,0,0,0,16-16V48A16,16,0,0,0,208,32ZM72,48v8a8,8,0,0,0,16,0V48h80v8a8,8,0,0,0,16,0V48h24V80H48V48ZM208,208H48V96H208V208Z"></path>
                      </svg>
                      1404/02/19</span>
                    <span class="flex items-center text-xs md:text-sm">
                      ادامه مطلب
                      <svg class="fill-(--color-zinc-600) hover:fill-(--color-primary-500) group-hover:-translate-x-1 transition group-hover:fill-(--color-primary-500) size-2.5 md:size-3" xmlns="http://www.w3.org/2000/svg" width="" height="" fill="" viewBox="0 0 256 256">
                        <path d="M224,128a8,8,0,0,1-8,8H59.31l58.35,58.34a8,8,0,0,1-11.32,11.32l-72-72a8,8,0,0,1,0-11.32l72-72a8,8,0,0,1,11.32,11.32L59.31,120H216A8,8,0,0,1,224,128Z"></path>
                      </svg>
                    </span>
                  </div>
                </div>
              </a>
            </div>
          </div>
        </div>
      </section> --}}
    </main>
    <footer class="relative z-1 top-23 mt-20 md:top-50 border-t-1 border-(--color-zinc-300) px-5 md:px-10 py-5">
      <!-- logo, des, go to up -->

      <section class="flex gap-x-8 gap-y-4 items-center md:items-start flex-wrap md:flex-nowrap justify-between mb-12">
        <!-- <section class="w-[99%] mt-5 md:w-[90%] mx-auto flex flex-col md:flex-row justify-between items-center"> -->
        <div class="w-4/12 md:w-1/12 order-1 md:order-none">
            <a href="">
              @if($footerLogo)
              <!-- <h1 class="font-bold text-base">NOTRINO<span class="text-(--color-primary-500)">SHAP</span></h1>
              <span class="text-[13px]">فروشگاه اینترنتی <span class="text-(--color-primary-500)">نوترینو</span></span> -->
              <img src="{{ asset('storage/'.$footerLogo['meta_value']) }}" alt="logo" class="w-full">
              @endif
            </a>
        </div>
        <div class="md:w-8/12 text-xs text-zinc-400 leading-7 order-3 md:order-none text-justify flex items-center justify-center">
          @if($footerDescription)
          {{ $footerDescription['meta_value'] }}
          @endif
        </div>
        <div class="md:w-1/12 order-2 md:order-none">
          <button onclick="scrollToTop()" class="flex items-center justify-center cursor-pointer w-28 gap-x-2 p-3 text-(--color-zinc-400) text-xs md:text-sm border border-zinc-200 rounded-lg" id="btn-back-to-top" style="display: flex;">
            برو به بالا
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
              <g clip-path="url(#clip0_2028_6)">
                <path d="M12.707 3.63599C12.5194 3.44852 12.2651 3.3432 12 3.3432C11.7348 3.3432 11.4805 3.44852 11.293 3.63599L5.63598 9.29299C5.54047 9.38523 5.46428 9.49558 5.41188 9.61758C5.35947 9.73959 5.33188 9.87081 5.33073 10.0036C5.32957 10.1364 5.35487 10.268 5.40516 10.3909C5.45544 10.5138 5.52969 10.6255 5.62358 10.7194C5.71747 10.8133 5.82913 10.8875 5.95202 10.9378C6.07492 10.9881 6.2066 11.0134 6.33938 11.0122C6.47216 11.0111 6.60338 10.9835 6.72538 10.9311C6.84739 10.8787 6.95773 10.8025 7.04998 10.707L11 6.75699V20C11 20.2652 11.1053 20.5196 11.2929 20.7071C11.4804 20.8946 11.7348 21 12 21C12.2652 21 12.5195 20.8946 12.7071 20.7071C12.8946 20.5196 13 20.2652 13 20V6.75699L16.95 10.707C17.1386 10.8891 17.3912 10.9899 17.6534 10.9877C17.9156 10.9854 18.1664 10.8802 18.3518 10.6948C18.5372 10.5094 18.6424 10.2586 18.6447 9.99639C18.6469 9.73419 18.5461 9.48159 18.364 9.29299L12.707 3.63599Z" fill="#9f9fa9"></path>
              </g>
              <defs>
                <clipPath id="clip0_2028_6">
                  <rect width="24" height="24" fill="white"></rect>
                </clipPath>
              </defs>
            </svg>
          </button>
        </div>
      </section>
      <!-- 5 good box -->
      
      <section class="w-[99%] mt-5 md:w-[90%] mx-auto my-12 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 xl:grid-cols-5 gap-5">
        @if($footer_expresses)
        @foreach ($footer_expresses as $express)
        <div class="flex justify-center items-center gap-2 bg-white border border-zinc-200 rounded-xl p-5">
          <div class="w-[40px] h-[40px]">
               <img src="{{ asset('storage/'.$express->icon) }}" alt="expresses">
          </div>
          <div class="flex flex-col gap-y-2">
            <div class="text-sm text-zinc-600">
              {{ $express->title }}
            </div>
            <div class="text-xs text-zinc-400">
             {{ $express->description }}
            </div>
          </div>
        </div>
     
        @endforeach
        @endif
      </section>
      <!-- links -->
      <section class="relative w-[99%] mt-5 md:w-[90%] mx-auto flex flex-col md:flex-row gap-y-8">
        <div class="md:w-5/12 grid grid-cols-2 md:grid-cols-3">
          <div class="">
            @if($footer['column_one'])
            @foreach($footer['column_one'] as $columnOne)
              {{-- @dd($columnOne); --}}
              @if($columnOne->key == null)
                <div class="text-zinc-500 mb-4 text-sm">{{ $columnOne->column_title }}</div>
              @endif
              <ul class="flex flex-col gap-y-5">
                <li>
                  <a href="{{ $columnOne->value }}" class="text-xs text-(--color-zinc-400) hover:text-(--color-primary-500) transition-all hover:pr-1 ease-out duration-300">{{ $columnOne->key }}</a>
                </li>
              </ul>
              @endforeach
              @endif
            </div>
            
          <div class="">
            @if($footer['column_two'])
            @foreach ($footer['column_two'] as $columnTwo)
              @if($columnTwo->key == null)
                <div class="text-zinc-500 mb-4 text-sm">{{ $columnTwo->column_title }}</div>
              @endif
              <ul class="flex flex-col gap-y-4">
                <li>
                  <a href="{{ $columnTwo->value }}" class="text-xs text-(--color-zinc-400) hover:text-(--color-primary-500) transition-all hover:pr-1 ease-out duration-300">{{ $columnTwo->key }}</a>
                </li>
              </ul>
              @endforeach
              @endif
          </div>
          <div class="">
            @if($footer['column_three'])
            @foreach ($footer['column_three'] as $columnThree)
              @if($columnThree->key == null)
                <div class="text-zinc-500 mb-4 text-sm">{{ $columnThree->column_title }}</div>
              @endif
            <ul class="flex flex-col gap-y-5">
              <li>
                <a href="{{ $columnThree->key }}" class="text-xs text-(--color-zinc-500) flex ">
                  {{ $columnThree->value }}
                </a>
              </li>
            </ul>
            @endforeach
            @endif
          </div>
        </div>
        
        <div class="md:w-4/12 flex justify-center gap-10">
          @if($footer['column_four'])
          @foreach ($footer['column_four'] as $columnFour)
            <div class="w-[100px] md:w-[30%]">
              <img src="{{ asset('storage/'.$columnFour->value) }}" alt="">
            </div>
          @endforeach
          @endif
          @if($footer['column_five'])
          @foreach ($footer['column_five'] as $columnFive)
            <div class="w-[100px] md:w-[30%]">
              <img src="{{ asset('storage/'.$columnFive->value) }}" alt="">
            </div>
          @endforeach
          @endif
        </div>
        <div class="md:w-4/12">
          <p class="text-xs text-zinc-400 pt-6 pb-3 pr-2">
            @if($footer['column_six_title'])
            {{ $footer['column_six_title']['column_title'] }}
            @endif
          </p>
            <div class="grid grid-cols-6">
              @if($footer['column_six'])
              @foreach ($footer['column_six'] as $columnSix)
                  @if($columnSix->key == "Eitaa")
                  <a href="{{ $columnSix->value }}">
                    <svg width="40" height="40" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <g id="Frame" clip-path="url(#clip0_4667_548)">
                        <g id="Isolation Mode">
                          <path id="Vector" fill-rule="evenodd" clip-rule="evenodd" d="M8.72696 8.16637e-05H21.2724C25.8728 8.16637e-05 29.6361 3.75792 29.6361 8.35796V12.3916C25.512 14.2453 21.3518 23.4008 15.2883 21.4114C14.7889 21.7663 13.6378 23.2288 13.557 24.3385C11.4574 24.0589 9.03679 21.6527 9.32727 19.058C5.83255 16.5301 8.71846 11.8638 11.4897 9.9856C17.4293 5.96007 25.6751 9.42212 21.0884 12.3004C18.2994 14.0505 12.3354 15.2066 12.9554 10.9101C11.3194 11.382 10.2721 14.4326 12.2419 16.0223C10.4172 17.815 10.768 21.1105 12.7185 22.1925C14.6912 17.0814 21.5571 17.7494 24.3311 11.6481C26.4182 7.05861 23.3239 1.82911 17.1373 2.63243C12.4682 3.23879 8.09169 7.17735 5.90294 11.8486C3.68218 16.588 4.01267 22.9345 8.57278 26.1331C13.9393 29.8971 19.6528 26.4118 23.1132 21.8565C25.1529 19.1715 26.935 16.1972 29.6361 14.4792V21.6307C29.6361 26.2306 25.8723 30.0001 21.2724 30.0001H8.72696C4.12692 30.0001 0.363281 26.2364 0.363281 21.6364V8.36368C0.363281 3.76364 4.12692 0 8.72696 0V8.16637e-05Z" fill="#EE7F22"></path>
                        </g>
                      </g>
                      <defs>
                        <clipPath id="clip0_4667_548">
                          <rect width="30" height="30" fill="white"></rect>
                        </clipPath>
                      </defs>
                    </svg>
                  </a>
                  @endif
                  @if($columnSix->key == "Instagram")
                  <a href="{{ $columnSix->value }}">
                    <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <g id="Frame">
                        <g id="Vector" filter="url(#filter0_f_4667_553)">
                          <path d="M12.4639 31.5463L12.9732 31.848C15.112 33.1174 17.5644 33.7889 20.0653 33.79H20.0706C27.7508 33.79 34.0013 27.5409 34.0044 19.8602C34.0058 16.1383 32.5578 12.6382 29.927 10.0054C28.6367 8.70693 27.1016 7.67732 25.4107 6.97613C23.7198 6.27495 21.9066 5.91612 20.076 5.92043C12.3899 5.92043 6.1392 12.1688 6.13647 19.8491C6.13268 22.4716 6.87121 25.0417 8.26666 27.2623L8.59819 27.789L7.19029 32.929L12.4639 31.5463ZM3.16504 36.9109L5.54359 28.2265C4.07668 25.6851 3.30494 22.8018 3.30585 19.8479C3.30973 10.6071 10.8298 3.08936 20.0708 3.08936C24.5552 3.09163 28.7643 4.83676 31.9298 8.0046C35.0954 11.1724 36.8371 15.3832 36.8355 19.8614C36.8314 29.1015 29.3102 36.6206 20.0706 36.6206H20.0633C17.2577 36.6195 14.5009 35.9156 12.0522 34.5804L3.16504 36.9109Z" fill="#B3B3B3"></path>
                        </g>
                        <path id="Vector_2" d="M2.99219 36.7385L5.37074 28.0542C3.9013 25.5065 3.12945 22.6166 3.133 19.6756C3.13687 10.4348 10.6569 2.91699 19.8979 2.91699C24.3823 2.91927 28.5914 4.66439 31.757 7.83223C34.9226 11.0001 36.6643 15.2108 36.6627 19.689C36.6586 28.9291 29.1374 36.4483 19.8977 36.4483H19.8904C17.0849 36.4471 14.3281 35.7433 11.8794 34.4081L2.99219 36.7385Z" fill="white"></path>
                        <path id="Vector_3" d="M19.9035 5.74809C12.2173 5.74809 5.96662 11.9965 5.96388 19.6767C5.9601 22.2993 6.69862 24.8694 8.09408 27.0899L8.4256 27.6169L7.0177 32.7568L12.2916 31.374L12.8008 31.6757C14.9397 32.945 17.3921 33.6163 19.893 33.6177H19.8982C27.5784 33.6177 33.8291 27.3686 33.8321 19.6879C33.8379 17.8572 33.4805 16.0436 32.7806 14.352C32.0807 12.6604 31.0522 11.1244 29.7547 9.83303C28.4643 8.53456 26.9292 7.50493 25.2383 6.80375C23.5473 6.10256 21.734 5.74375 19.9035 5.74809Z" fill="url(#paint0_linear_4667_553)"></path>
                        <path id="Vector_4" fill-rule="evenodd" clip-rule="evenodd" d="M15.7086 12.6695C15.3946 11.972 15.0643 11.9579 14.766 11.9458L13.963 11.936C13.6837 11.936 13.2298 12.0408 12.8461 12.4601C12.4624 12.8793 11.3799 13.8926 11.3799 15.9535C11.3799 18.0145 12.881 20.0059 13.0901 20.2857C13.2993 20.5655 15.988 24.9296 20.2459 26.6086C23.7842 28.004 24.5042 27.7265 25.2725 27.6567C26.0408 27.587 27.7509 26.6435 28.0997 25.6653C28.4486 24.6871 28.4488 23.8491 28.3442 23.6739C28.2396 23.4986 27.9603 23.3945 27.541 23.1849C27.1218 22.9753 25.0627 21.962 24.6787 21.8221C24.2948 21.6822 24.0157 21.6127 23.7361 22.032C23.4565 22.4512 22.6547 23.3943 22.4102 23.6739C22.1657 23.9534 21.9217 23.9885 21.5025 23.7791C21.0832 23.5697 19.7343 23.1272 18.1339 21.7002C16.8887 20.5899 16.0481 19.2187 15.8034 18.7996C15.5587 18.3806 15.7774 18.1537 15.9875 17.945C16.1755 17.7572 16.4063 17.4558 16.6162 17.2113C16.826 16.9668 16.8951 16.792 17.0345 16.5129C17.174 16.2338 17.1045 15.9886 16.9996 15.7792C16.8948 15.5698 16.0809 13.498 15.7086 12.6695Z" fill="white"></path>
                      </g>
                      <defs>
                        <filter id="filter0_f_4667_553" x="1.55594" y="1.48026" width="36.8891" height="37.04" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                          <feFlood flood-opacity="0" result="BackgroundImageFix"></feFlood>
                          <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape"></feBlend>
                          <feGaussianBlur stdDeviation="0.804548" result="effect1_foregroundBlur_4667_553"></feGaussianBlur>
                        </filter>
                        <linearGradient id="paint0_linear_4667_553" x1="19.6143" y1="7.42052" x2="19.7556" y2="31.2368" gradientUnits="userSpaceOnUse">
                          <stop stop-color="#57D163"></stop>
                          <stop offset="1" stop-color="#23B33A"></stop>
                        </linearGradient>
                      </defs>
                    </svg>
                  </a>
                  @endif
                  @if($columnSix->key == "WhatsApp")
                  <a href="{{ $columnSix->value }}">
                    <svg width="40" height="40" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <g id="Livello_1" clip-path="url(#clip0_4667_561)">
                        <path id="Vector" d="M16 32C24.8366 32 32 24.8366 32 16C32 7.16344 24.8366 0 16 0C7.16344 0 0 7.16344 0 16C0 24.8366 7.16344 32 16 32Z" fill="url(#paint0_linear_4667_561)"></path>
                        <path id="Vector_2" d="M10.8301 17.1695L12.7283 22.4236C12.7283 22.4236 12.9657 22.9152 13.2198 22.9152C13.4739 22.9152 17.2538 18.9829 17.2538 18.9829L21.4571 10.8643L10.8978 15.8132L10.8301 17.1695Z" fill="#C8DAEA"></path>
                        <path id="Vector_3" d="M13.3473 18.5171L12.9829 22.3899C12.9829 22.3899 12.8304 23.5766 14.0168 22.3899C15.2032 21.2032 16.3388 20.2882 16.3388 20.2882" fill="#A9C6D8"></path>
                        <path id="Vector_4" d="M10.8653 17.3569L6.96047 16.0846C6.96047 16.0846 6.4938 15.8953 6.64407 15.466C6.675 15.3774 6.7374 15.3021 6.92407 15.1726C7.78927 14.5696 22.9382 9.12463 22.9382 9.12463C22.9382 9.12463 23.3659 8.98049 23.6182 9.07636C23.6806 9.09568 23.7368 9.13123 23.7809 9.17937C23.8251 9.22751 23.8557 9.28652 23.8695 9.35036C23.8968 9.46311 23.9082 9.57912 23.9034 9.69503C23.9022 9.79529 23.8901 9.88823 23.8809 10.034C23.7886 11.5226 21.0275 22.633 21.0275 22.633C21.0275 22.633 20.8623 23.2832 20.2705 23.3054C20.125 23.3101 19.9801 23.2855 19.8444 23.233C19.7087 23.1805 19.5849 23.1012 19.4805 22.9998C18.319 22.0008 14.3046 19.3029 13.4175 18.7096C13.3975 18.6959 13.3807 18.6782 13.3681 18.6575C13.3556 18.6368 13.3476 18.6136 13.3447 18.5896C13.3323 18.527 13.4003 18.4496 13.4003 18.4496C13.4003 18.4496 20.3905 12.2362 20.5765 11.584C20.5909 11.5334 20.5365 11.5085 20.4634 11.5306C19.9991 11.7014 11.9509 16.784 11.0626 17.3449C10.9987 17.3642 10.9311 17.3683 10.8653 17.3569Z" fill="white"></path>
                      </g>
                      <defs>
                        <linearGradient id="paint0_linear_4667_561" x1="16" y1="32" x2="16" y2="0" gradientUnits="userSpaceOnUse">
                          <stop stop-color="#1D93D2"></stop>
                          <stop offset="1" stop-color="#38B0E3"></stop>
                        </linearGradient>
                        <clipPath id="clip0_4667_561">
                          <rect width="32" height="32" fill="white"></rect>
                        </clipPath>
                      </defs>
                    </svg>
                  </a>
                  @endif
                  @if($columnSix->key == "Telegram")
                  <a href="{{ $columnSix->value }}">
                    <svg width="40" height="40" viewBox="0 0 512 512" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path fill-rule="evenodd" clip-rule="evenodd" d="M124.541 256.001C124.541 183.397 183.397 124.541 256.001 124.541C328.603 124.541 387.459 183.397 387.459 256.001C387.459 328.603 328.603 387.459 256.001 387.459C183.397 387.459 124.541 328.603 124.541 256.001ZM256 341.333C208.871 341.333 170.667 303.129 170.667 256.001C170.667 208.871 208.871 170.667 256 170.667C303.128 170.667 341.333 208.871 341.333 256.001C341.333 303.129 303.128 341.333 256 341.333Z" fill="url(#paint0_linear_1_921)"></path>
                      <path fill-rule="evenodd" clip-rule="evenodd" d="M124.541 256.001C124.541 183.397 183.397 124.541 256.001 124.541C328.603 124.541 387.459 183.397 387.459 256.001C387.459 328.603 328.603 387.459 256.001 387.459C183.397 387.459 124.541 328.603 124.541 256.001ZM256 341.333C208.871 341.333 170.667 303.129 170.667 256.001C170.667 208.871 208.871 170.667 256 170.667C303.128 170.667 341.333 208.871 341.333 256.001C341.333 303.129 303.128 341.333 256 341.333Z" fill="url(#paint1_radial_1_921)"></path>
                      <path d="M392.653 150.066C409.62 150.066 423.374 136.313 423.374 119.347C423.374 102.38 409.62 88.6263 392.653 88.6263C375.688 88.6263 361.934 102.38 361.934 119.347C361.934 136.313 375.688 150.066 392.653 150.066Z" fill="url(#paint2_linear_1_921)"></path>
                      <path d="M392.653 150.066C409.62 150.066 423.374 136.313 423.374 119.347C423.374 102.38 409.62 88.6263 392.653 88.6263C375.688 88.6263 361.934 102.38 361.934 119.347C361.934 136.313 375.688 150.066 392.653 150.066Z" fill="url(#paint3_radial_1_921)"></path>
                      <path fill-rule="evenodd" clip-rule="evenodd" d="M256.001 0C186.475 0 177.757 0.294696 150.452 1.54055C123.203 2.78335 104.594 7.11132 88.3103 13.4402C71.476 19.9814 57.1995 28.7349 42.9667 42.9667C28.7349 57.1995 19.9814 71.476 13.4402 88.3103C7.11132 104.594 2.78335 123.203 1.54055 150.452C0.294696 177.757 0 186.475 0 256.001C0 325.525 0.294696 334.243 1.54055 361.548C2.78335 388.797 7.11132 407.406 13.4402 423.69C19.9814 440.524 28.7349 454.8 42.9667 469.033C57.1995 483.265 71.476 492.019 88.3103 498.561C104.594 504.889 123.203 509.217 150.452 510.459C177.757 511.705 186.475 512 256.001 512C325.525 512 334.243 511.705 361.548 510.459C388.797 509.217 407.406 504.889 423.69 498.561C440.524 492.019 454.8 483.265 469.033 469.033C483.265 454.8 492.019 440.524 498.561 423.69C504.889 407.406 509.217 388.797 510.459 361.548C511.705 334.243 512 325.525 512 256.001C512 186.475 511.705 177.757 510.459 150.452C509.217 123.203 504.889 104.594 498.561 88.3103C492.019 71.476 483.265 57.1995 469.033 42.9667C454.8 28.7349 440.524 19.9814 423.69 13.4402C407.406 7.11132 388.797 2.78335 361.548 1.54055C334.243 0.294696 325.525 0 256.001 0ZM256.001 46.126C324.355 46.126 332.452 46.3872 359.446 47.6188C384.406 48.757 397.961 52.9274 406.982 56.4333C418.931 61.0773 427.459 66.6247 436.417 75.5835C445.375 84.5412 450.923 93.0691 455.567 105.019C459.073 114.039 463.243 127.594 464.381 152.554C465.613 179.548 465.874 187.645 465.874 256.001C465.874 324.355 465.613 332.452 464.381 359.446C463.243 384.406 459.073 397.961 455.567 406.981C450.923 418.931 445.375 427.459 436.417 436.417C427.459 445.375 418.931 450.923 406.982 455.567C397.961 459.073 384.406 463.243 359.446 464.381C332.456 465.613 324.36 465.874 256.001 465.874C187.64 465.874 179.545 465.613 152.554 464.381C127.594 463.243 114.039 459.073 105.019 455.567C93.0692 450.923 84.5413 445.375 75.5835 436.417C66.6258 427.459 61.0774 418.931 56.4333 406.981C52.9275 397.961 48.757 384.406 47.6189 359.446C46.3873 332.452 46.1261 324.355 46.1261 256.001C46.1261 187.645 46.3873 179.548 47.6189 152.554C48.757 127.594 52.9275 114.039 56.4333 105.019C61.0774 93.0691 66.6248 84.5412 75.5835 75.5835C84.5413 66.6247 93.0692 61.0773 105.019 56.4333C114.039 52.9274 127.594 48.757 152.554 47.6188C179.548 46.3872 187.645 46.126 256.001 46.126Z" fill="url(#paint4_linear_1_921)"></path>
                      <path fill-rule="evenodd" clip-rule="evenodd" d="M256.001 0C186.475 0 177.757 0.294696 150.452 1.54055C123.203 2.78335 104.594 7.11132 88.3103 13.4402C71.476 19.9814 57.1995 28.7349 42.9667 42.9667C28.7349 57.1995 19.9814 71.476 13.4402 88.3103C7.11132 104.594 2.78335 123.203 1.54055 150.452C0.294696 177.757 0 186.475 0 256.001C0 325.525 0.294696 334.243 1.54055 361.548C2.78335 388.797 7.11132 407.406 13.4402 423.69C19.9814 440.524 28.7349 454.8 42.9667 469.033C57.1995 483.265 71.476 492.019 88.3103 498.561C104.594 504.889 123.203 509.217 150.452 510.459C177.757 511.705 186.475 512 256.001 512C325.525 512 334.243 511.705 361.548 510.459C388.797 509.217 407.406 504.889 423.69 498.561C440.524 492.019 454.8 483.265 469.033 469.033C483.265 454.8 492.019 440.524 498.561 423.69C504.889 407.406 509.217 388.797 510.459 361.548C511.705 334.243 512 325.525 512 256.001C512 186.475 511.705 177.757 510.459 150.452C509.217 123.203 504.889 104.594 498.561 88.3103C492.019 71.476 483.265 57.1995 469.033 42.9667C454.8 28.7349 440.524 19.9814 423.69 13.4402C407.406 7.11132 388.797 2.78335 361.548 1.54055C334.243 0.294696 325.525 0 256.001 0ZM256.001 46.126C324.355 46.126 332.452 46.3872 359.446 47.6188C384.406 48.757 397.961 52.9274 406.982 56.4333C418.931 61.0773 427.459 66.6247 436.417 75.5835C445.375 84.5412 450.923 93.0691 455.567 105.019C459.073 114.039 463.243 127.594 464.381 152.554C465.613 179.548 465.874 187.645 465.874 256.001C465.874 324.355 465.613 332.452 464.381 359.446C463.243 384.406 459.073 397.961 455.567 406.981C450.923 418.931 445.375 427.459 436.417 436.417C427.459 445.375 418.931 450.923 406.982 455.567C397.961 459.073 384.406 463.243 359.446 464.381C332.456 465.613 324.36 465.874 256.001 465.874C187.64 465.874 179.545 465.613 152.554 464.381C127.594 463.243 114.039 459.073 105.019 455.567C93.0692 450.923 84.5413 445.375 75.5835 436.417C66.6258 427.459 61.0774 418.931 56.4333 406.981C52.9275 397.961 48.757 384.406 47.6189 359.446C46.3873 332.452 46.1261 324.355 46.1261 256.001C46.1261 187.645 46.3873 179.548 47.6189 152.554C48.757 127.594 52.9275 114.039 56.4333 105.019C61.0774 93.0691 66.6248 84.5412 75.5835 75.5835C84.5413 66.6247 93.0692 61.0773 105.019 56.4333C114.039 52.9274 127.594 48.757 152.554 47.6188C179.548 46.3872 187.645 46.126 256.001 46.126Z" fill="url(#paint5_radial_1_921)"></path>
                      <defs>
                        <linearGradient id="paint0_linear_1_921" x1="29.8736" y1="26.9173" x2="191.303" y2="651.345" gradientUnits="userSpaceOnUse">
                          <stop stop-color="#4E60D3"></stop>
                          <stop offset="0.142763" stop-color="#913BAF"></stop>
                          <stop offset="0.761458" stop-color="#D52D88"></stop>
                          <stop offset="1" stop-color="#F26D4F"></stop>
                        </linearGradient>
                        <radialGradient id="paint1_radial_1_921" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(155.005 512) rotate(32.1601) scale(478.18 344.131)">
                          <stop stop-color="#FED276"></stop>
                          <stop offset="0.17024" stop-color="#FDBD61" stop-opacity="0.975006"></stop>
                          <stop offset="0.454081" stop-color="#F6804D"></stop>
                          <stop offset="1" stop-color="#E83D5C" stop-opacity="0.01"></stop>
                        </radialGradient>
                        <linearGradient id="paint2_linear_1_921" x1="29.8736" y1="26.9173" x2="191.303" y2="651.345" gradientUnits="userSpaceOnUse">
                          <stop stop-color="#4E60D3"></stop>
                          <stop offset="0.142763" stop-color="#913BAF"></stop>
                          <stop offset="0.761458" stop-color="#D52D88"></stop>
                          <stop offset="1" stop-color="#F26D4F"></stop>
                        </linearGradient>
                        <radialGradient id="paint3_radial_1_921" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(155.005 512) rotate(32.1601) scale(478.18 344.131)">
                          <stop stop-color="#FED276"></stop>
                          <stop offset="0.17024" stop-color="#FDBD61" stop-opacity="0.975006"></stop>
                          <stop offset="0.454081" stop-color="#F6804D"></stop>
                          <stop offset="1" stop-color="#E83D5C" stop-opacity="0.01"></stop>
                        </radialGradient>
                        <linearGradient id="paint4_linear_1_921" x1="29.8736" y1="26.9173" x2="191.303" y2="651.345" gradientUnits="userSpaceOnUse">
                          <stop stop-color="#4E60D3"></stop>
                          <stop offset="0.142763" stop-color="#913BAF"></stop>
                          <stop offset="0.761458" stop-color="#D52D88"></stop>
                          <stop offset="1" stop-color="#F26D4F"></stop>
                        </linearGradient>
                        <radialGradient id="paint5_radial_1_921" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(155.005 512) rotate(32.1601) scale(478.18 344.131)">
                          <stop stop-color="#FED276"></stop>
                          <stop offset="0.17024" stop-color="#FDBD61" stop-opacity="0.975006"></stop>
                          <stop offset="0.454081" stop-color="#F6804D"></stop>
                          <stop offset="1" stop-color="#E83D5C" stop-opacity="0.01"></stop>
                        </radialGradient>
                      </defs>
                    </svg>
                  </a>
                  @endif
                @endforeach
                @endif
              </div>
        </div>
        </section>
      <!-- copyright -->
      <div class="relative w-[99%] mt-7 m-b10 md:w-[90%] mx-auto border-t-1 border-(--color-zinc-400) flex flex-col items-center">
        <a href="" class="">
          طراحی و توسعه توسط <span class="text-(--color-primary-500)">فائوس</span>
        </a>
        <a href="tell:09147794595">09147794595</a>
      </div>
    </footer>
  </div>
  <script src="{{ asset('assets/js/hamberger.js') }}"></script>
<script>
    function scrollToTop(){
        window.scrollTo(0,0)
    }

  
        const categoryButtons = document.querySelectorAll('.cats');
        const categorySections = document.querySelectorAll('.category-section');
        const allProductsSection = document.querySelector('.all-products-section');
        const allButton = document.getElementById('all-categories-btn');
        
        if(allProductsSection) {
            allProductsSection.style.display = 'flex';
        }
        
        if(allButton) {
            allButton.addEventListener('click', function() {
                if(allProductsSection) {
                    allProductsSection.style.display = 'flex';
                }
                categoryButtons.forEach(btn => {
                    btn.classList.remove('text-(--color-primary-500)', 'bg-zinc-100');
                });
                this.classList.add('text-(--color-primary-500)', 'bg-zinc-100');
            });
        }
        
        categoryButtons.forEach(button => {
            button.addEventListener('click', function() {
                const catId = this.getAttribute('data-cat-id');
                
                if(allProductsSection) {
                    allProductsSection.style.display = 'none';
                }
                
                categorySections.forEach(section => {
                    section.style.display = 'none';
                });
                
                const selectedSection = document.querySelector(`.category-section[data-category-id="${catId}"]`);
                if(selectedSection) {
                    selectedSection.style.display = 'flex';
                }
                
                categoryButtons.forEach(btn => {
                    btn.classList.remove('text-(--color-primary-500)', 'bg-zinc-100');
                });
                if(allButton) {
                    allButton.classList.remove('text-(--color-primary-500)', 'bg-zinc-100');
                }
                this.classList.add('text-(--color-primary-500)', 'bg-zinc-100');
            });
        });

</script>

</body>

</html>