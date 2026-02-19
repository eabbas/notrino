@extends('admin.app.panel')
@section('title', 'توضیحات فوتر')

@section('content')
<div class="container mx-auto px-4 py-8 max-w-3xl" dir="rtl">
    <!-- سکشن اصلی فرم -->
    <div class="bg-white rounded-2xl shadow-xl overflow-hidden border border-gray-100">
        <!-- هدر سکشن با تم نارنجی -->
        <div class="bg-gradient-to-l from-orange-500 to-orange-400 px-8 py-6">
            <div class="flex items-center gap-4">
                <div class="bg-white/20 backdrop-blur-sm p-3 rounded-xl">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h7" />
                    </svg>
                </div>
                <div>
                    <h1 class="text-2xl font-bold text-white">توضیحات فوتر</h1>
                    <p class="text-orange-100 text-sm mt-1">متن توضیحات بخش فوتر را وارد کنید</p>
                </div>
            </div>
        </div>

        <!-- محتوای فرم -->
        <div class="p-8">
            <form action="{{ route('setting.upsertDescription') }}" method="post">
                @csrf

                <!-- سکشن ۱: ویرایش توضیحات -->
                <div class="mb-8">
                    <div class="flex items-center gap-3 mb-6">
                        <div class="w-8 h-8 bg-orange-100 rounded-full flex items-center justify-center">
                            <span class="text-orange-500 font-bold text-sm">1</span>
                        </div>
                        <h2 class="font-semibold text-gray-800 text-lg">متن توضیحات</h2>
                        <div class="flex-1 h-px bg-gray-200 mr-3"></div>
                    </div>

                    <div class="pr-4">
                        <!-- فیلد توضیحات -->
                        <div>
                            <label for="description" class="block text-gray-700 font-medium mb-3">
                                توضیحات فوتر
                                <span class="text-orange-500 mr-1">*</span>
                            </label>
                            
                            <div class="relative">
                                <!-- آیکون بالای تکست‌اریا -->
                                <div class="absolute -top-3 right-4 bg-white px-2 text-orange-400 text-sm">
                                    <svg class="w-4 h-4 inline ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                    </svg>
                                    متن خود را وارد کنید
                                </div>
                                
                                <!-- تکست‌اریا با طراحی زیبا -->
                                <textarea 
                                    name="description" 
                                    id="description"
                                    cols="40" 
                                    rows="10"
                                    class="w-full px-5 py-5 border-2 border-gray-100 rounded-xl focus:outline-none focus:border-orange-300 focus:ring-4 focus:ring-orange-50 transition-all duration-200 text-gray-700 text-base leading-relaxed resize-y"
                                    placeholder="توضیحات مربوط به فوتر را اینجا بنویسید..."
                                ></textarea>
                            </div>
                            
                            <!-- راهنما -->
                            <div class="mt-3 flex items-start gap-2 text-sm text-gray-500 bg-gray-50 p-3 rounded-lg">
                                <svg class="w-5 h-5 text-orange-400 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                <span>این متن در بخش فوتر سایت نمایش داده می‌شود. می‌توانید از توضیحات کامل درباره فروشگاه، قوانین یا اطلاعات تماس استفاده کنید.</span>
                            </div>
                        </div>
                    </div>
                </div>

            

         
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
                                    <p class="text-sm text-gray-700 font-medium">اطلاعات با دقت بررسی شود</p>
                                    <p class="text-xs text-gray-500 mt-1">پس از ذخیره، تغییرات در فوتر سایت اعمال خواهد شد</p>
                                </div>
                            </div>
                        </div>

                        <!-- دکمه ذخیره -->
                        <button type="submit" class="w-full bg-gradient-to-l from-orange-500 to-orange-400 text-white font-bold py-4 px-6 rounded-xl hover:from-orange-600 hover:to-orange-500 transform hover:scale-[1.01] transition-all duration-200 shadow-lg shadow-orange-200 flex items-center justify-center gap-3 text-lg">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7H5a2 2 0 00-2 2v9a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-3m-1 4l-3 3m0 0l-3-3m3 3V4" />
                            </svg>
                            ذخیره توضیحات فوتر
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>


<style>

    textarea::-webkit-scrollbar {
        width: 8px;
    }
    
    textarea::-webkit-scrollbar-track {
        background: #f1f1f1;
        border-radius: 10px;
    }
    
    textarea::-webkit-scrollbar-thumb {
        background: #ff8c42;
        border-radius: 10px;
    }
    
    textarea::-webkit-scrollbar-thumb:hover {
        background: #ff5722;
    }
    

    textarea::placeholder {
        text-align: right;
        font-family: inherit;
    }
</style>
@endsection