@extends('admin.app.panel')
@section('title', 'ایجاد بنر های فوتر')

@section('content')
<div class="container mx-auto px-4 py-8 max-w-3xl" dir="rtl">
    <!-- سکشن اصلی فرم -->
    <div class="bg-white rounded-2xl shadow-xl overflow-hidden border border-gray-100">
        <!-- هدر سکشن با تم نارنجی -->
        <div class="bg-gradient-to-l from-orange-500 to-orange-400 px-8 py-6">
            <div class="flex items-center gap-4">
                <div class="bg-white/20 backdrop-blur-sm p-3 rounded-xl">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                    </svg>
                </div>
                <div>
                    <h1 class="text-2xl font-bold text-white">ایجاد بنر فوتر</h1>
                    <p class="text-orange-100 text-sm mt-1">سرویس اکسپرس جدید اضافه کنید</p>
                </div>
            </div>
        </div>

        <div class="p-8">
            <form action="{{ route('express.store') }}" method="post" enctype="multipart/form-data">
                @csrf

                <div class="mb-10">
                    <div class="flex items-center gap-3 mb-6">
                        <div class="w-8 h-8 bg-orange-100 rounded-full flex items-center justify-center">
                            <span class="text-orange-500 font-bold text-sm">۱</span>
                        </div>
                        <h2 class="font-semibold text-gray-800 text-lg">اطلاعات سرویس</h2>
                        <div class="flex-1 h-px bg-gray-200 mr-3"></div>
                    </div>

                    <div class="grid grid-cols-1 gap-6 pr-4">
                        <div>
                            <label for="expressName" class="block text-gray-700 font-medium mb-2">
                                نام سرویس اکسپرس
                                <span class="text-orange-500 mr-1">*</span>
                            </label>
                            <div class="relative">
                                <div class="absolute right-3 top-1/2 -translate-y-1/2 text-gray-400">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                    </svg>
                                </div>
                                <input type="text" name="expressName" id="expressName" 
                                    class="w-full pr-12 px-4 py-3 border border-gray-200 rounded-xl focus:outline-none focus:border-orange-400 focus:ring-2 focus:ring-orange-100 transition-all duration-200"
                                    placeholder="مثال: پست پیشتاز" required>
                            </div>
                        </div>
                        <div>
                            <label for="description" class="block text-gray-700 font-medium mb-2">
                                توضیحات سرویس
                            </label>
                            <div class="relative">
                                <div class="absolute right-3 top-3 text-gray-400">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h7" />
                                    </svg>
                                </div>
                                <input type="text" name="description" id="description" 
                                    class="w-full pr-12 px-4 py-3 border border-gray-200 rounded-xl focus:outline-none focus:border-orange-400 focus:ring-2 focus:ring-orange-100 transition-all duration-200"
                                    placeholder="توضیحات مختصر درباره سرویس...">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mb-10">
                    <div class="flex items-center gap-3 mb-6">
                        <div class="w-8 h-8 bg-orange-100 rounded-full flex items-center justify-center">
                            <span class="text-orange-500 font-bold text-sm">۲</span>
                        </div>
                        <h2 class="font-semibold text-gray-800 text-lg">تصویر سرویس</h2>
                        <div class="flex-1 h-px bg-gray-200 mr-3"></div>
                    </div>

                    <div class="pr-4">
                        <div class="border-2 border-dashed border-gray-200 rounded-xl p-6 hover:border-orange-300 transition-colors duration-200">
                            <div class="flex flex-col items-center justify-center gap-3">
                                <div class="w-16 h-16 bg-orange-50 rounded-full flex items-center justify-center">
                                    <svg class="w-8 h-8 text-orange-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                    </svg>
                                </div>
                                
                                <div class="text-center">
                                    <p class="text-gray-600 mb-2">عکس سرویس را آپلود کنید</p>
                                    {{-- <p class="text-sm text-gray-400">فرمت‌های مجاز: JPG, PNG, GIF</p> --}}
                                </div>
                                <div class="relative mt-2 w-full max-w-xs">
                                    <input type="file" name="expressImage" id="expressImage" class="absolute inset-0 w-full h-full opacity-0 cursor-pointer z-10" accept="image/*">
                                    <div class="bg-orange-50 text-orange-500 px-6 py-3 rounded-xl border border-orange-200 flex items-center justify-center gap-2 hover:bg-orange-100 transition-colors">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-8l-4-4m0 0L8 8m4-4v12" />
                                        </svg>
                                        <span>انتخاب فایل</span>
                                    </div>
                                </div>
                                
                           
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mb-6">
                    <div class="flex items-center gap-3 mb-6">
                        <div class="w-8 h-8 bg-orange-100 rounded-full flex items-center justify-center">
                            <span class="text-orange-500 font-bold text-sm">۳</span>
                        </div>
                        <h2 class="font-semibold text-gray-800 text-lg">ثبت نهایی</h2>
                        <div class="flex-1 h-px bg-gray-200 mr-3"></div>
                    </div>

                    <div class="pr-4">
                        <!-- کارت پیش‌نمایش ساده -->
                        <div class="bg-gray-50 rounded-xl p-4 mb-6 border border-gray-100">
                            <div class="flex items-center gap-4">
                                <div class="w-12 h-12 bg-orange-100 rounded-lg flex items-center justify-center">
                                    <svg class="w-6 h-6 text-orange-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                </div>
                                <div>
                                    <p class="text-sm text-gray-500">بعد از ثبت، بنر شما در فوتر نمایش داده می‌شود</p>
                                    <p class="text-xs text-gray-400 mt-1">مطمئن شوید اطلاعات به درستی وارد شده باشد</p>
                                </div>
                            </div>
                        </div>

                        <!-- دکمه ثبت -->
                        <button type="submit" class="w-full bg-gradient-to-l from-orange-500 to-orange-400 text-white font-bold py-4 px-6 rounded-xl hover:from-orange-600 hover:to-orange-500 transform hover:scale-[1.02] transition-all duration-200 shadow-lg shadow-orange-200 flex items-center justify-center gap-2">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            ثبت بنر فوتر
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>



@endsection