@extends('admin.app.panel')
@section('title', 'ایجاد اسلایدر')
@section('content')
<div class="container mx-auto px-4 py-8">
    <!-- هدر صفحه -->
    <div class="text-center mb-10">
        <h1 class="text-4xl font-bold bg-gradient-to-l from-orange-600 to-amber-500 bg-clip-text text-transparent">
            ایجاد اسلایدر جدید
        </h1>
        <div class="w-24 h-1 bg-gradient-to-l from-orange-500 to-amber-500 mx-auto mt-4 rounded-full"></div>
    </div>

    <!-- کارت اصلی فرم -->
    <div class="max-w-3xl mx-auto">
        <div class="bg-white rounded-3xl shadow-2xl overflow-hidden border border-orange-100">
            <!-- نوار بالای کارت -->
            <div class="h-2 bg-gradient-to-l from-orange-500 to-amber-500"></div>
            
            <form action="{{ route('slider.store') }}" method="post" enctype="multipart/form-data" class="p-8">
                @csrf

                <!-- بخش عنوان اسلایدر -->
                <div class="mb-8">
                    <h2 class="text-xl font-bold text-gray-800 mb-6 flex items-center gap-2 border-r-4 border-orange-500 pr-4">
                        <svg class="w-6 h-6 text-orange-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-6l-2-2H5a2 2 0 00-2 2z"></path>
                        </svg>
                        اطلاعات اسلایدر
                    </h2>
                    
                    <div class="space-y-2">
                        <label for="title" class="block text-gray-700 font-medium">
                            نام اسلایدر
                            <span class="text-red-500 mr-1">*</span>
                        </label>
                        <div class="relative group">
                            <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                                <svg class="h-5 w-5 text-gray-400 group-focus-within:text-orange-500 transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-6l-2-2H5a2 2 0 00-2 2z"></path>
                                </svg>
                            </div>
                            <input type="text" name="title" id="title" required
                                   class="w-full pr-10 py-3.5 border-2 border-gray-200 rounded-2xl focus:ring-0 focus:border-orange-500 transition duration-200 bg-gray-50/50 hover:bg-white focus:bg-white"
                                   placeholder="مثال: اسلایدر اصلی صفحه، اسلایدر محصولات، ...">
                        </div>
                        <p class="text-xs text-gray-500 mt-1">یک نام مناسب برای شناسایی این اسلایدر انتخاب کنید</p>
                    </div>
                </div>

                <!-- بخش آپلود تصاویر -->
                <div class="mb-8">
                    <h2 class="text-xl font-bold text-gray-800 mb-6 flex items-center gap-2 border-r-4 border-orange-500 pr-4">
                        <svg class="w-6 h-6 text-orange-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                        </svg>
                        آپلود تصاویر
                    </h2>
                    
                    <div class="space-y-4">
                        <!-- منطقه آپلود فایل -->
                        <div class="relative">
                            <div class="border-3 border-dashed border-orange-200 rounded-2xl p-8 text-center hover:border-orange-400 transition bg-orange-50/30 group">
                                <input type="file" name="sliders[]" id="sliders" multiple accept="image/*"
                                       class="absolute inset-0 w-full h-full opacity-0 cursor-pointer z-10">
                                
                                <div class="space-y-3">
                                    <div class="w-20 h-20 mx-auto bg-gradient-to-br from-orange-100 to-amber-100 rounded-2xl flex items-center justify-center group-hover:scale-110 transition-transform">
                                        <svg class="w-10 h-10 text-orange-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12"></path>
                                        </svg>
                                    </div>
                                    <div>
                                    </div>
                                    <p class="text-xs text-orange-500 font-medium">انتخاب چند فایل همزمان مجاز است</p>
                                </div>
                            </div>
                        </div>

                      
                    </div>
                </div>

           
                <!-- دکمه‌های فرم -->
                <div class="flex flex-col sm:flex-row gap-4 justify-between items-center pt-6 border-t-2 border-orange-100">
                    <div class="text-sm text-gray-500">
                        <span class="text-red-500">*</span> فیلدهای الزامی
                    </div>
                    <div class="flex gap-3">
                       
                        <button type="submit" 
                                class="px-10 py-3.5 bg-gradient-to-l from-orange-500 to-amber-500 hover:from-orange-600 hover:to-amber-600 text-white rounded-2xl transition duration-200 shadow-lg shadow-orange-500/30 font-medium flex items-center gap-2 transform hover:scale-105">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7H5a2 2 0 00-2 2v9a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-3m-1 4l-3 3m0 0l-3-3m3 3V4"></path>
                            </svg>
                            ایجاد اسلایدر
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
  

    // انیمیشن برای فیلدها
    document.querySelectorAll('input').forEach(element => {
        element.addEventListener('focus', function() {
            this.closest('.relative')?.classList.add('ring-4', 'ring-orange-100');
        });
        
        element.addEventListener('blur', function() {
            this.closest('.relative')?.classList.remove('ring-4', 'ring-orange-100');
        });
    });

</script>

<style>
    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(20px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .max-w-3xl {
        animation: fadeInUp 0.6s ease-out;
    }

    /* استایل برای پیش‌نمایش تصاویر */
    .preview-item {
        animation: fadeIn 0.3s ease-out;
    }

    @keyframes fadeIn {
        from {
            opacity: 0;
            transform: scale(0.9);
        }
        to {
            opacity: 1;
            transform: scale(1);
        }
    }

    /* استایل برای ناحیه آپلود */
    .border-dashed {
        transition: all 0.3s ease;
    }

    .border-dashed:hover {
        transform: translateY(-2px);
    }

    /* استایل برای aspect ratio */
    .aspect-w-16 {
        position: relative;
        padding-bottom: 56.25%; /* 16:9 Aspect Ratio */
    }

    .aspect-w-16 img {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
    }

    /* استایل برای دکمه ایجاد */
    button[type="submit"] {
        position: relative;
        overflow: hidden;
    }

    button[type="submit"]::after {
        content: '';
        position: absolute;
        top: 50%;
        left: 50%;
        width: 0;
        height: 0;
        border-radius: 50%;
        background: rgba(255, 255, 255, 0.2);
        transform: translate(-50%, -50%);
        transition: width 0.3s, height 0.3s;
    }

    button[type="submit"]:hover::after {
        width: 300px;
        height: 300px;
    }
</style>
@endsection