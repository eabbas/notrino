@extends('admin.app.panel')
@section('title', 'ایجاد بنر سمت راست')
@section('content')
<div class="container mx-auto px-4 py-8">
    <!-- هدر صفحه -->
    <div class="text-center mb-10">
        <h1 class="text-4xl font-bold bg-gradient-to-l from-orange-600 to-amber-500 bg-clip-text text-transparent">
            ایجاد بنر سمت راست
        </h1>
        <div class="w-24 h-1 bg-gradient-to-l from-orange-500 to-amber-500 mx-auto mt-4 rounded-full"></div>
    </div>

    <!-- کارت اصلی فرم -->
    <div class="max-w-2xl mx-auto">
        <div class="bg-white rounded-3xl shadow-2xl overflow-hidden border border-orange-100">
            <!-- نوار بالای کارت -->
            <div class="h-2 bg-gradient-to-l from-orange-500 to-amber-500"></div>
            
            <form action="{{ route('setting.upsertHeroBannerRight') }}" method="post" enctype="multipart/form-data" class="p-8">
                @csrf

                <!-- بخش آپلود بنر -->
                <div class="mb-8">
                    <h2 class="text-xl font-bold text-gray-800 mb-6 flex items-center gap-2 border-r-4 border-orange-500 pr-4">
                        <svg class="w-6 h-6 text-orange-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                        </svg>
                        آپلود بنر
                    </h2>
                    
                    <div class="space-y-4">
                        <!-- label با همین name -->
                        <label for="heroBanner" class="block text-gray-700 font-medium">
                            تصویر بنر سمت راست
                            <span class="text-red-500 mr-1">*</span>
                        </label>

                        <!-- منطقه آپلود فایل -->
                        <div class="relative group">
                            <div class="border-3 border-dashed border-orange-200 rounded-2xl p-8 text-center hover:border-orange-400 transition bg-orange-50/30 group">
                                <!-- input با name="heroBannerRigth" دقیقا مثل کد اصلی (با املای اشتباه) -->
                                <input type="file" name="heroBannerRigth" id="heroBanner" accept="image/*" required
                                       class="absolute inset-0 w-full h-full opacity-0 cursor-pointer z-10">
                                
                                <div class="space-y-4">
                                    <div class="w-24 h-24 mx-auto bg-gradient-to-br from-orange-100 to-amber-100 rounded-2xl flex items-center justify-center group-hover:scale-110 transition-transform">
                                        <svg class="w-12 h-12 text-orange-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                        </svg>
                                    </div>
                                    <div>
                                        <p class="text-gray-700 font-medium text-lg">برای آپلود کلیک کنید</p>
                                    </div>
                                    <div class="flex justify-center">
                                        <span class="inline-flex items-center gap-2 px-4 py-2 bg-orange-100 text-orange-700 rounded-xl text-sm">
                                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12"></path>
                                            </svg>
                                            انتخاب تصویر
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- پیش‌نمایش تصویر انتخاب شده -->
                        <div id="preview-container" class="mt-8 hidden">
                            <h3 class="text-sm font-medium text-gray-700 mb-4 flex items-center gap-2">
                                <svg class="w-4 h-4 text-orange-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                </svg>
                                پیش‌نمایش بنر
                            </h3>
                            <div class="flex justify-center">
                                <div class="relative w-96 rounded-2xl overflow-hidden border-4 border-orange-200 shadow-xl group" id="preview-image-container">
                                    <img src="" alt="پیش‌نمایش بنر" class="w-full h-auto" id="preview-image">
                                    <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent opacity-0 group-hover:opacity-100 transition flex items-end justify-center pb-4">
                                        <span class="text-white text-sm bg-black/60 px-3 py-1.5 rounded-full">
                                            بنر سمت راست
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

              
                <!-- دکمه‌های فرم -->
                <div class="flex flex-col sm:flex-row gap-4 justify-between items-center pt-6 border-t-2 border-orange-100">
                    <div class="text-sm text-gray-500">
                        <span class="text-red-500">*</span> انتخاب تصویر الزامی است
                    </div>
                    <div class="flex gap-3">
                     
                        <!-- button با متن "ذخیره اطلاعات" دقیقا مثل کد اصلی -->
                        <button type="submit" 
                                class="px-10 py-3.5 bg-gradient-to-l from-orange-500 to-amber-500 hover:from-orange-600 hover:to-amber-600 text-white rounded-2xl transition duration-200 shadow-lg shadow-orange-500/30 font-medium flex items-center gap-2 transform hover:scale-105">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7H5a2 2 0 00-2 2v9a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-3m-1 4l-3 3m0 0l-3-3m3 3V4"></path>
                            </svg>
                            ذخیره اطلاعات
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<script>


    // انیمیشن برای فیلدها
    document.querySelectorAll('input[type="file"]').forEach(element => {
        element.addEventListener('focus', function() {
            this.closest('.relative')?.classList.add('ring-4', 'ring-orange-100');
        });
        
        element.addEventListener('blur', function() {
            this.closest('.relative')?.classList.remove('ring-4', 'ring-orange-100');
        });
    });

    // اعتبارسنجی ساده سمت کلاینت (اختیاری)
    document.querySelector('form').addEventListener('submit', function(e) {
        const fileInput = document.getElementById('heroBanner');
        
        if (fileInput.files.length === 0) {
            e.preventDefault();
            
            // هایلایت کردن ناحیه آپلود
            const dropZone = document.querySelector('.border-dashed');
            dropZone.classList.add('border-red-500', 'bg-red-50');
            
           
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

    .max-w-2xl {
        animation: fadeInUp 0.6s ease-out;
    }

    /* استایل برای ناحیه آپلود */
    .border-dashed {
        transition: all 0.3s ease;
        cursor: pointer;
    }

    .border-dashed:hover {
        transform: translateY(-4px);
        box-shadow: 0 20px 25px -5px rgba(249, 115, 22, 0.2);
    }

    /* استایل برای پیش‌نمایش */
    #preview-container {
        animation: fadeIn 0.5s ease-out;
    }

    @keyframes fadeIn {
        from {
            opacity: 0;
            transform: scale(0.95);
        }
        to {
            opacity: 1;
            transform: scale(1);
        }
    }

    /* استایل برای تصویر پیش‌نمایش */
    #preview-image-container {
        transition: all 0.3s ease;
    }

    #preview-image-container:hover {
        transform: scale(1.02);
        box-shadow: 0 25px 30px -8px rgba(249, 115, 22, 0.3);
    }

    /* استایل برای دکمه ذخیره */
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

    /* استایل برای حالت خطا */
    .border-red-500 {
        transition: all 0.3s ease;
    }

    /* استایل برای آیکون‌ها */
    .text-orange-500 {
        transition: color 0.2s ease;
    }
</style>
@endsection