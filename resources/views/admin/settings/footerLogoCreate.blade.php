@extends('admin.app.panel')
@section('title', 'لوگوی فوتر')

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
                    <h1 class="text-2xl font-bold text-white">لوگوی فوتر</h1>
                    <p class="text-orange-100 text-sm mt-1">تصویر لوگوی بخش فوتر را آپلود کنید</p>
                </div>
            </div>
        </div>

        <!-- محتوای فرم -->
        <div class="p-8">
            <form action="{{ route('setting.upsertLogo') }}" method="post" enctype="multipart/form-data">
                @csrf

                <!-- سکشن ۱: آپلود لوگو -->
                <div class="mb-8">
                    <div class="flex items-center gap-3 mb-6">
                        <div class="w-8 h-8 bg-orange-100 rounded-full flex items-center justify-center">
                            <span class="text-orange-500 font-bold text-sm">1</span>
                        </div>
                        <h2 class="font-semibold text-gray-800 text-lg">آپلود لوگو</h2>
                        <div class="flex-1 h-px bg-gray-200 mr-3"></div>
                    </div>

                    <div class="pr-4">
                        <!-- فیلد آپلود فایل -->
                        <div>
                            <label for="footer_logo" class="block text-gray-700 font-medium mb-3">
                                تصویر لوگو
                                <span class="text-orange-500 mr-1">*</span>
                            </label>

                            <!-- منطقه آپلود با طراحی دراپ‌زون -->
                            <div class="border-3 border-dashed border-gray-200 rounded-2xl p-8 hover:border-orange-300 transition-all duration-300 bg-gray-50/30" id="dropzone">
                                <div class="flex flex-col items-center justify-center gap-4">
                                    <!-- آیکون اصلی آپلود -->
                                    <div class="w-24 h-24 bg-gradient-to-br from-orange-50 to-orange-100 rounded-2xl flex items-center justify-center shadow-inner">
                                        <svg class="w-12 h-12 text-orange-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                        </svg>
                                    </div>

                                    <!-- متن راهنما -->
                                    <div class="text-center">
                                        <p class="text-gray-600 text-lg font-medium mb-1">لوگوی فوتر را آپلود کنید</p>
                                        <p class="text-sm text-gray-400">فرمت‌های مجاز: JPG, PNG, SVG, GIF</p>
                                        <p class="text-xs text-gray-300 mt-1">حداکثر حجم: ۲ مگابایت</p>
                                    </div>

                                    <!-- دکمه انتخاب فایل -->
                                    <div class="relative mt-4 w-full max-w-sm">
                                        <input type="file" name="footerImage" id="footer_logo" class="absolute inset-0 w-full h-full opacity-0 cursor-pointer z-20" accept="image/*">
                                        <div class="bg-white text-orange-500 px-8 py-4 rounded-xl border-2 border-orange-200 flex items-center justify-center gap-3 hover:bg-orange-50 hover:border-orange-300 transition-all duration-200 shadow-sm">
                                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-8l-4-4m0 0L8 8m4-4v12" />
                                            </svg>
                                            <span class="font-medium">انتخاب فایل</span>
                                        </div>
                                    </div>

                                    <!-- نمایش نام فایل انتخاب شده -->
                                    <div id="file-name-display" class="text-sm text-gray-500 mt-2 flex items-center gap-2 bg-white px-4 py-2 rounded-full shadow-sm">
                                        <svg class="w-4 h-4 text-orange-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                                        </svg>
                                        <span id="file-name-text">هیچ فایلی انتخاب نشده</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

             
                <!-- سکشن ۳: ثبت نهایی -->
                <div class="mb-2">
                    <div class="flex items-center gap-3 mb-6">
                        <div class="w-8 h-8 bg-orange-100 rounded-full flex items-center justify-center">
                            <span class="text-orange-500 font-bold text-sm">2</span>
                        </div>
                        <h2 class="font-semibold text-gray-800 text-lg">ذخیره تغییرات</h2>
                        <div class="flex-1 h-px bg-gray-200 mr-3"></div>
                    </div>

                    <div class="pr-4">
                        <!-- کارت تایید نهایی -->
                        <div class="bg-orange-50/50 rounded-xl p-5 mb-6 border border-orange-100">
                            <div class="flex items-start gap-3">
                                <div class="bg-orange-100 p-2 rounded-lg">
                                    <svg class="w-5 h-5 text-orange-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                </div>
                                <div>
                                    <p class="text-sm text-gray-700 font-medium">بررسی نهایی</p>
                                    <p class="text-xs text-gray-500 mt-1">پس از ذخیره، لوگوی جدید در فوتر سایت نمایش داده می‌شود</p>
                                </div>
                            </div>
                        </div>

                        <!-- دکمه ذخیره -->
                        <button type="submit" class="w-full bg-gradient-to-l from-orange-500 to-orange-400 text-white font-bold py-4 px-6 rounded-xl hover:from-orange-600 hover:to-orange-500 transform hover:scale-[1.01] transition-all duration-200 shadow-lg shadow-orange-200 flex items-center justify-center gap-3 text-lg">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4" />
                            </svg>
                            ذخیره لوگوی فوتر
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>



<!-- استایل اضافه -->
<style>
    .border-3 {
        border-width: 3px;
    }
    
    /* انیمیشن برای هاور */
    #dropzone {
        transition: all 0.3s ease;
    }
    
    #dropzone:hover {
        transform: translateY(-2px);
    }
</style>
@endsection