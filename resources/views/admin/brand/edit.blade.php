@extends('admin.app.panel')
@section('title', 'ویرایش برند')
@section('content')
<div class="container mx-auto px-4 py-8">
    <!-- هدر صفحه -->
    <div class="text-center mb-10">
        <h1 class="text-4xl font-bold bg-gradient-to-l from-orange-600 to-amber-500 bg-clip-text text-transparent">
            ویرایش برند
        </h1>
        <p class="text-gray-600 mt-3 text-lg">در حال ویرایش برند "{{ $brand->title }}"</p>
        <div class="w-24 h-1 bg-gradient-to-l from-orange-500 to-amber-500 mx-auto mt-4 rounded-full"></div>
    </div>

    <!-- کارت اصلی فرم -->
    <div class="max-w-2xl mx-auto">
        <div class="bg-white rounded-3xl shadow-2xl overflow-hidden border border-orange-100">
            <!-- نوار بالای کارت -->
            <div class="h-2 bg-gradient-to-l from-orange-500 to-amber-500"></div>
            
            <div class="p-8">
  
           

                <!-- فرم ویرایش برند -->
                <form action="{{ route('brand.update') }}" method="post" enctype="multipart/form-data" class="space-y-8">
                    @csrf
                    <input type="hidden" name="id" value="{{ $brand->id }}">

                    <!-- بخش اطلاعات برند -->
                    <div>
                        <h2 class="text-xl font-bold text-gray-800 mb-6 flex items-center gap-2 border-r-4 border-orange-500 pr-4">
                            <svg class="w-6 h-6 text-orange-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 4h2a2 2 0 012 2v14a2 2 0 01-2 2H6a2 2 0 01-2-2V6a2 2 0 012-2h2"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 2v4h-4V2h4z"></path>
                            </svg>
                            ویرایش اطلاعات
                        </h2>
                        
                        <div class="space-y-6">
                            <!-- فیلد اسم برند -->
                            <div class="space-y-2">
                                <label for="title" class="block text-gray-700 font-medium">
                                    نام برند
                                    <span class="text-red-500 mr-1">*</span>
                                </label>
                                <div class="relative group">
                                    <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                                        <svg class="h-5 w-5 text-gray-400 group-focus-within:text-orange-500 transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-6l-2-2H5a2 2 0 00-2 2z"></path>
                                        </svg>
                                    </div>
                                    <!-- input با name="title" و value={{ $brand->title }} دقیقا مثل کد اصلی -->
                                    <input type="text" name="title" id="title" value="{{ $brand->title }}" required
                                           class="w-full pr-10 py-3.5 border-2 border-gray-200 rounded-2xl focus:ring-0 focus:border-orange-500 transition duration-200 bg-gray-50/50 hover:bg-white focus:bg-white"
                                           placeholder="نام برند را وارد کنید">
                                </div>
                            </div>

                            <!-- فیلد تصویر برند -->
                            <div class="space-y-2">
                                <label for="image" class="block text-gray-700 font-medium">
                                    تصویر جدید برند
                                    <span class="text-sm text-gray-500 mr-1">(اختیاری)</span>
                                </label>

                                <!-- منطقه آپلود فایل -->
                                <div class="relative group">
                                    <div class="border-3 border-dashed border-orange-200 rounded-2xl p-8 text-center hover:border-orange-400 transition bg-orange-50/30 group">
                                        <!-- input با name="brandImage" دقیقا مثل کد اصلی -->
                                        <input type="file" name="brandImage" id="image" accept="image/*"
                                               class="absolute inset-0 w-full h-full opacity-0 cursor-pointer z-10">
                                        
                                        <div class="space-y-4">
                                            <div class="w-24 h-24 mx-auto bg-gradient-to-br from-orange-100 to-amber-100 rounded-2xl flex items-center justify-center group-hover:scale-110 transition-transform">
                                                <svg class="w-12 h-12 text-orange-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12"></path>
                                                </svg>
                                            </div>
                                            <div>
                                                <p class="text-gray-700 font-medium text-lg">برای تغییر تصویر کلیک کنید</p>
                                                <p class="text-sm text-gray-500 mt-2">فرمت‌های مجاز: JPG، PNG، SVG</p>
                                            </div>
                                            <div class="flex justify-center">
                                                <span class="inline-flex items-center gap-2 px-4 py-2 bg-orange-100 text-orange-700 rounded-xl text-sm">
                                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12"></path>
                                                    </svg>
                                                    انتخاب تصویر جدید
                                                </span>
                                            </div>
                                        </div>
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
                            <a href="{{ route('brand.list') }}" 
                               class="px-8 py-3.5 bg-gray-100 hover:bg-gray-200 text-gray-700 rounded-2xl transition duration-200 font-medium flex items-center gap-2">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                                </svg>
                                انصراف
                            </a>
                            <!-- button با متن "ثبت" دقیقا مثل کد اصلی -->
                            <button type="submit" 
                                    class="px-10 py-3.5 bg-gradient-to-l from-orange-500 to-amber-500 hover:from-orange-600 hover:to-amber-600 text-white rounded-2xl transition duration-200 shadow-lg shadow-orange-500/30 font-medium flex items-center gap-2 transform hover:scale-105">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                به‌روزرسانی برند
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
 

    // پاک کردن تصویر انتخاب شده
    function clearImage() {
        const fileInput = document.getElementById('image');
        fileInput.value = '';
        document.getElementById('preview-container').classList.add('hidden');
    }

    // انیمیشن برای فیلدها
    document.querySelectorAll('input').forEach(element => {
        element.addEventListener('focus', function() {
            this.closest('.relative')?.classList.add('ring-4', 'ring-orange-100');
        });
        
        element.addEventListener('blur', function() {
            this.closest('.relative')?.classList.remove('ring-4', 'ring-orange-100');
        });
    });

    // اعتبارسنجی ساده سمت کلاینت
    document.querySelector('form').addEventListener('submit', function(e) {
        const title = document.getElementById('title');
        
        if (title.value.trim() === '') {
            e.preventDefault();
            title.classList.add('border-red-500');
            
            const errorDiv = document.createElement('div');
            errorDiv.className = 'text-red-500 text-xs mt-1';
            errorDiv.innerText = 'نام برند نمی‌تواند خالی باشد';
            
            const parent = title.closest('.space-y-2');
            const existingError = parent.querySelector('.text-red-500.text-xs');
            if (!existingError) {
                parent.appendChild(errorDiv);
            }
            
            window.scrollTo({ top: 0, behavior: 'smooth' });
        }
    });

    // حذف پیام خطا هنگام تایپ
    document.getElementById('title').addEventListener('input', function() {
        this.classList.remove('border-red-500');
        const errorMsg = this.closest('.space-y-2')?.querySelector('.text-red-500.text-xs');
        if (errorMsg) {
            errorMsg.remove();
        }
    });

    // افکت درگ اند دراپ
    const dropZone = document.querySelector('.border-dashed');
    
    ['dragenter', 'dragover', 'dragleave', 'drop'].forEach(eventName => {
        dropZone.addEventListener(eventName, preventDefaults, false);
    });

    function preventDefaults(e) {
        e.preventDefault();
        e.stopPropagation();
    }

    ['dragenter', 'dragover'].forEach(eventName => {
        dropZone.addEventListener(eventName, highlight, false);
    });

    ['dragleave', 'drop'].forEach(eventName => {
        dropZone.addEventListener(eventName, unhighlight, false);
    });

    function highlight() {
        dropZone.classList.add('border-orange-500', 'bg-orange-100/50');
    }

    function unhighlight() {
        dropZone.classList.remove('border-orange-500', 'bg-orange-100/50');
    }

    dropZone.addEventListener('drop', function(e) {
        const dt = e.dataTransfer;
        const files = dt.files;
        document.getElementById('image').files = files;
        
        // trigger change event برای پیش‌نمایش
        const event = new Event('change', { bubbles: true });
        document.getElementById('image').dispatchEvent(event);
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
        animation: slideIn 0.4s ease-out;
    }

    @keyframes slideIn {
        from {
            opacity: 0;
            transform: translateY(-10px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

 
    .group:hover .w-32.h-32 {
        transform: scale(1.05);
        box-shadow: 0 20px 25px -5px rgba(249, 115, 22, 0.3);
    }

    /* استایل برای دکمه به‌روزرسانی */
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

    /* استایل برای فوتر */
    .border-t-2 {
        border-image: linear-gradient(to left, #f97316, #f59e0b) 1;
    }
</style>
@endsection