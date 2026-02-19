@extends('admin.app.panel')
@section('title', 'ایجاد دسته بندی')
@section('content')
<div class="max-w-4xl mx-auto px-4 py-8">
    <!-- هدر با گرادینت نارنجی -->
    <div class="text-center mb-12">
        <h1 class="text-4xl font-bold bg-gradient-to-l from-orange-600 to-amber-500 bg-clip-text text-transparent">
            ایجاد دسته‌بندی جدید
        </h1>
        <div class="w-24 h-1 bg-gradient-to-l from-orange-500 to-amber-500 mx-auto mt-4 rounded-full"></div>
    </div>

    <!-- کارت اصلی -->
    <div class="bg-white rounded-3xl shadow-2xl overflow-hidden border border-orange-100">
        <!-- نوار بالای کارت -->
        <div class="h-2 bg-gradient-to-l from-orange-500 to-amber-500"></div>
        
        <form action="{{ route('category.store') }}" method="post" class="p-8" enctype="multipart/form-data">
            @csrf
            
            <!-- بخش اطلاعات دسته‌بندی -->
            <div class="mb-10">
                <h2 class="text-xl font-bold text-gray-800 mb-6 flex items-center gap-2 border-r-4 border-orange-500 pr-4">
                    <svg class="w-6 h-6 text-orange-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 13h6m-3-3v6m5 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                    </svg>
                    اطلاعات دسته‌بندی
                </h2>
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <!-- عنوان -->
                    <div class="space-y-2">
                        <label for="title" class="block text-gray-700 font-medium">
                            عنوان دسته‌بندی
                            <span class="text-red-500 mr-1">*</span>
                        </label>
                        <div class="relative group">
                            <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                                <svg class="h-5 w-5 text-gray-400 group-focus-within:text-orange-500 transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-6l-2-2H5a2 2 0 00-2 2z"></path>
                                </svg>
                            </div>
                            <input type="text" id="title" name="title" required 
                                   class="w-full pr-10 py-3.5 outline-none border-2 border-gray-200 rounded-2xl focus:border-orange-500 transition duration-200 hover:bg-white focus:bg-white"
                                   placeholder="مثال: الکترونیک، مد و پوشاک، ...">
                        </div>
                        <p class="text-xs text-gray-500 mt-1">عنوان دسته‌بندی را با دقت وارد کنید</p>
                    </div>

                    <!-- والد -->
                    <div class="space-y-2">
                        <label for="parent_id" class="block text-gray-700 font-medium">
                            دسته‌بندی والد
                        </label>
                        <div class="relative group">
                            <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                                <svg class="h-5 w-5 text-gray-400 group-focus-within:text-orange-500 transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l5 5a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-5-5A1.994 1.994 0 013 12V7a4 4 0 014-4z"></path>
                                </svg>
                            </div>
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <svg class="h-4 w-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                </svg>
                            </div>
                            <select name="parent_id" id="parent_id"
                                    class="w-full px-4 pr-10 py-3.5 outline-none border-2 border-gray-200 rounded-2xl focus:ring-0 focus:border-orange-500 transition duration-200 bg-gray-50/50 hover:bg-white focus:bg-white appearance-none">
                                <option value="0" class="py-2">بدون والد (دسته‌بندی اصلی)</option>
                                @foreach($categories as $category)
                                <option value="{{$category->id}}" class="py-2">
                                    {{ $category->title }}
                                    @if($category->parent)
                                        (زیرمجموعه {{ $category->parent->title }})
                                    @endif
                                </option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <!-- آپلود تصویر -->
                    <div class="space-y-2 md:col-span-2">
                        <label for="image" class="block text-gray-700 font-medium">
                            تصویر دسته‌بندی
                        </label>
                        <div class="relative group">
                            <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                                <svg class="h-5 w-5 text-gray-400 group-focus-within:text-orange-500 transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                </svg>
                            </div>
                            <input type="file" name="image" id="image"
                                   class="w-full pr-10 py-3.5 outline-none border-2 border-gray-200 rounded-2xl focus:ring-0 focus:border-orange-500 transition duration-200 bg-gray-50/50 hover:bg-white focus:bg-white file:mr-4 file:py-2 file:px-4 file:rounded-xl file:border-0 file:text-sm file:font-semibold file:bg-orange-50 file:text-orange-700 hover:file:bg-orange-100"
                                   accept="image/*">
                        </div>
                    </div>

                    <!-- توضیحات -->
                    <div class="md:col-span-2 space-y-2">
                        <label for="description" class="block text-gray-700 font-medium">
                            توضیحات دسته‌بندی
                        </label>
                        <div class="relative group">
                            <div class="absolute top-4 right-0 pr-3 flex items-start pointer-events-none">
                                <svg class="h-5 w-5 text-gray-400 group-focus-within:text-orange-500 transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h7"></path>
                                </svg>
                            </div>
                            <textarea id="description" name="description" rows="5"
                                   class="w-full pr-10 py-3.5 px-4 outline-none border-2 border-gray-200 rounded-2xl focus:ring-0 focus:border-orange-500 transition duration-200 bg-gray-50/50 hover:bg-white focus:bg-white resize-none"
                                   placeholder="توضیحات کامل دسته‌بندی را وارد کنید..."></textarea>
                        </div>
                        <p class="text-xs text-gray-500 mt-1">توضیحات می‌تواند شامل موارد مهم درباره این دسته‌بندی باشد</p>
                    </div>
                </div>
            </div>

            <!-- دکمه‌ فرم -->
            <div class="flex flex-col sm:flex-row gap-4 justify-between items-center pt-8 border-t-2 border-orange-100">
                <div class="text-sm text-gray-500">
                    <span class="text-red-500">*</span> فیلدهای الزامی
                </div>
                <div class="flex gap-3">
                    <button type="submit" 
                            class="px-10 py-3.5 bg-gradient-to-l from-orange-500 to-amber-500 hover:from-orange-600 hover:to-amber-600 text-white rounded-2xl transition duration-200 shadow-lg shadow-orange-500/30 font-medium flex items-center gap-2 transform hover:scale-105">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7H5a2 2 0 00-2 2v9a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-3m-1 4l-3 3m0 0l-3-3m3 3V4"></path>
                        </svg>
                        ایجاد دسته‌بندی
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>

<script>
    // انیمیشن برای فیلدها
    document.querySelectorAll('input, select, textarea').forEach(element => {
        element.addEventListener('focus', function() {
            this.closest('.relative').classList.add('ring-4', 'ring-orange-100');
        });
        
        element.addEventListener('blur', function() {
            this.closest('.relative').classList.remove('ring-4', 'ring-orange-100');
        });
    });

    // تغییر استایل هنگام انتخاب والد
    const parentSelect = document.getElementById('parent_id');
    parentSelect.addEventListener('change', function() {
        if (this.value !== '0') {
            this.classList.add('border-orange-500', 'bg-orange-50');
        } else {
            this.classList.remove('border-orange-500', 'bg-orange-50');
        }
    });

    // پیش‌نمایش تصویر
    document.getElementById('image').addEventListener('change', function(e) {
        if (this.files && this.files[0]) {
            // می‌توانید پیش‌نمایش تصویر را اضافه کنید
            console.log('فایل انتخاب شد:', this.files[0].name);
        }
    });

    // اعتبارسنجی ساده سمت کلاینت
    document.querySelector('form').addEventListener('submit', function(e) {
        const title = document.getElementById('title');
        if (title.value.trim() === '') {
            e.preventDefault();
            title.classList.add('border-red-500');
            title.focus();
            alert('لطفاً عنوان دسته‌بندی را وارد کنید');
        }
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

    .max-w-4xl {
        animation: fadeInUp 0.6s ease-out;
    }

    /* استایل اسکرول بار برای textarea */
    textarea::-webkit-scrollbar {
        width: 8px;
    }

    textarea::-webkit-scrollbar-track {
        background: #f1f1f1;
        border-radius: 10px;
    }

    textarea::-webkit-scrollbar-thumb {
        background: #f97316;
        border-radius: 10px;
    }

    textarea::-webkit-scrollbar-thumb:hover {
        background: #ea580c;
    }

    /* استایل برای آیکون‌های فیلدها */
    .relative svg {
        transition: color 0.2s ease;
    }

    /* استایل برای حالت هاور کارت */
    .bg-white {
        transition: box-shadow 0.3s ease;
    }

    .bg-white:hover {
        box-shadow: 0 25px 50px -12px rgba(249, 115, 22, 0.25);
    }

    /* استایل برای select option */
    select option {
        padding: 12px;
        background-color: white;
        color: #374151;
    }

    select option:hover {
        background-color: #fff7ed;
    }

    /* انیمیشن برای دکمه ایجاد */
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

    /* استایل برای فوتر */
    .border-t-2 {
        border-image: linear-gradient(to left, #f97316, #f59e0b) 1;
    }
</style>
@endsection