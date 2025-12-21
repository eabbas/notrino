<!doctype html>
<html lang="fa" dir="rtl">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <link rel="stylesheet" href="{{ url('assets/css/style.css') }}" type="text/css">
    <title>@yield('title')</title>
</head>

<body>

    <div class="w-full flex flex-row">
        <div class="hidden lg:block lg:w-[265px] bg-[#0D0E12] fixed z-50 right-0 top-0 h-dvh px-5 text-sm">
            <div class="w-full">
            </div>
            <div class="py-5 h-[90%] overflow-y-auto flex flex-col gap-5" style="scrollbar-width: none;">
               
                <div class="flex flex-row items-start gap-2.5">
                    <svg xmlns="http://www.w3.org/2000/svg" class="size-5" viewBox="0 0 576 512">
                        <path fill="white"
                            d="M575.8 255.5c0 18-15 32.1-32 32.1h-32l.7 160.2c0 2.7-.2 5.4-.5 8.1V472c0 22.1-17.9 40-40 40H456c-1.1 0-2.2 0-3.3-.1c-1.4 .1-2.8 .1-4.2 .1H416 392c-22.1 0-40-17.9-40-40V448 384c0-17.7-14.3-32-32-32H256c-17.7 0-32 14.3-32 32v64 24c0 22.1-17.9 40-40 40H160 128.1c-1.5 0-3-.1-4.5-.2c-1.2 .1-2.4 .2-3.6 .2H104c-22.1 0-40-17.9-40-40V360c0-.9 0-1.9 .1-2.8V287.6H32c-18 0-32-14-32-32.1c0-9 3-17 10-24L266.4 8c7-7 15-8 22-8s15 2 21 7L564.8 231.5c8 7 12 15 11 24z" />
                    </svg>
                    <a href="{{ route('user.profile', [Auth::id()]) }}" class="block w-full text-white py-1">
                        داشبورد
                    </a>
                </div>
                @if (Auth::user()->role[0]->title == 'admin')
                <div class="dashboard">
                    <div class="flex flex-row-reverse justify-between">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                            class="size-6 fill-white w-[15px]">
                            <path fill-rule="evenodd"
                                d="M12.53 16.28a.75.75 0 0 1-1.06 0l-7.5-7.5a.75.75 0 0 1 1.06-1.06L12 14.69l6.97-6.97a.75.75 0 1 1 1.06 1.06l-7.5 7.5Z"
                                clip-rule="evenodd" />
                        </svg>
                        <div class="flex flex-row-reverse items-center gap-2">
                            <span class=" text-[white] flex justify-end font-bold">کاربران</span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="size-5" viewBox="0 0 448 512">
                                <path fill="white"
                                    d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3z" />
                            </svg>
                        </div>
                    </div>
                    <ul class="mt-2.5 mb-2.5 pr-3 transition-all duration-500 overflow-hidden">
                        <li class="flex flex-row items-center gap-2.5 mt-2.5 mb-2.5 mr-5">
                            <span class="size-1 bg-white rounded-sm"></span>
                            <a href="{{ route('user.list') }}" class="text-white py-1">
                                مشاهده همه کاربران
                            </a>
                        </li>
                        <li class="flex flex-row items-center gap-2.5 mt-2.5 mb-2.5 mr-5">
                            <span class="size-1 bg-white rounded-sm"></span>
                            <a href="{{ route('user.create_user') }}" class="text-white py-1">
                                ایجاد کاربر جدید
                            </a>
                        </li>

                    </ul>
                </div>
                @endif
            
                <div class="dashboard">
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
                  
                </div>
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
            <!-- hamburger menu -->
            <div
                class="w-full h-dvh fixed top-0 -right-full bg-black/50 flex flex-row-reverse z-50 transition-all duration-500 backdrop-blur-sm">
                <div class="w-1/3 bg-inherit h-full relative" onclick="hamburgerMenu('close', this)">
                    <svg xmlns="http://www.w3.org/2000/svg" class="size-6 absolute top-5 left-5 cursor-pointer"
                        viewBox="0 0 384 512">
                        <path fill="white"
                            d="M324.5 411.1c6.2 6.2 16.4 6.2 22.6 0s6.2-16.4 0-22.6L214.6 256 347.1 123.5c6.2-6.2 6.2-16.4 0-22.6s-16.4-6.2-22.6 0L192 233.4 59.5 100.9c-6.2-6.2-16.4-6.2-22.6 0s-6.2 16.4 0 22.6L169.4 256 36.9 388.5c-6.2 6.2-6.2 16.4 0 22.6s16.4 6.2 22.6 0L192 278.6 324.5 411.1z" />
                    </svg>
                </div>
                <div class="w-2/3 bg-white h-full p-2 flex flex-col justify-between">
                    <div>
                        <div class="flex flex-row items-center gap-3 pb-2 border-b border-gray-300">
                            <div>
                                @if (!Auth::user()->main_image)
                                    <img src="{{ asset('assets/img/user.png') }}" alt="user__avatar"
                                        class="size-16 rounded-xl">
                                @else
                                    <img src="{{ asset('storage/' . Auth::user()->main_image) }}" alt="user__picture"
                                        class="size-16 rounded-xl">
                                @endif
                            </div>
                            <div>
                                <span class="text-lg text-gray-700 font-semibold">{{ Auth::user()->name }}
                                    {{ Auth::user()?->family }}</span>
                            </div>
                        </div>
                        <div class="overflow-y-auto [&::-webkit-scrollbar]:hidden h-[calc(100vh-134px)]">
                            <div class="pt-2 flex flex-col">
                                {{-- <div>
                                    <a href="{{ route('home') }}" class="block text-gray-700 py-2 text-md">
                                        بازدید از سایت
                                    </a>
                                </div> --}}
                                @if (!Auth::user()->email)
                                    <div>
                                        <a href="{{ route('user.compelete_form') }}"
                                            class="block text-gray-700 py-2 text-md">
                                            تکمیل پروفایل
                                        </a>
                                    </div>
                                @endif
                                <div>
                                    <a href="{{ route('user.setting') }}" class="block text-gray-700 py-2 text-md">
                                        تنظیمات اکانت
                                    </a>
                                </div>
                            </div>


                          

                         
                            
                            @if (Auth::user()->role[0]->title == 'admin')
                                <div class="pt-3">
                                    <h3 class="text-md font-semibold text-gray-800 mb-1.5">کاربران</h3>
                                    <ul class="pr-3.5">
                                        <li>
                                            <a href="{{ route('user.list') }}"
                                                class="block text-gray-700 py-2 text-md">
                                                مشاهده همه کاربران
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ route('user.create_user') }}"
                                                class="block text-gray-700 py-2 text-md">
                                                ایجاد کاربر جدید
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            @endif

                        

                            
                       



                        </div>
                        <div class="mb-3 sticky bottom-0 right-0 py-3 bg-white border-t border-gray-300">
                            <a href="{{ route('user.logout') }}"
                                class="block text-rose-700 py-1 font-medium text-sm text-center">خروج از حساب
                                کاربری</a>
                        </div>
                    </div>
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
    {{-- <script src="{{ asset('assets/js/ecomm_product_create.js') }}"></script> --}}

    @yield('ajax')



</body>

</html>
