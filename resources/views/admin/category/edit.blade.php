@extends('admin.app.panel')
@section('title', 'ویرایش دسته')
@section('content')
<div class="max-w-4xl mx-auto px-4 py-8">
    <!-- هدر با گرادینت نارنجی -->
    <div class="text-center mb-10">
        <h1 class="text-4xl font-bold bg-gradient-to-l from-orange-600 to-amber-500 bg-clip-text text-transparent">
            ویرایش دسته‌بندی
        </h1>
        <p class="text-gray-600 mt-3 text-lg">اطلاعات دسته‌بندی "{{ $category->title }}" را ویرایش کنید</p>
        <div class="w-24 h-1 bg-gradient-to-l from-orange-500 to-amber-500 mx-auto mt-4 rounded-full"></div>
    </div>

    <!-- کارت اصلی فرم -->
    <div class="bg-white rounded-3xl shadow-2xl overflow-hidden border border-orange-100">
        <!-- نوار بالای کارت -->
        <div class="h-2 bg-gradient-to-l from-orange-500 to-amber-500"></div>
        
        <form action="{{ route('category.update') }}" method="post" class="p-8">
            @csrf
            <input type="hidden" name="id" value="{{ $category->id }}">

            <!-- بخش اطلاعات دسته‌بندی -->
            <div class="mb-8">
                <h2 class="text-xl font-bold text-gray-800 mb-6 flex items-center gap-2 border-r-4 border-orange-500 pr-4">
                    <svg class="w-6 h-6 text-orange-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                    </svg>
                    اطلاعات اصلی
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
                            <input type="text" id="title" name="title" value="{{ $category->title }}" required
                                   class="w-full pr-10 py-3.5 border-2 border-gray-200 rounded-2xl focus:ring-0 focus:border-orange-500 transition duration-200 bg-gray-50/50 hover:bg-white focus:bg-white"
                                   placeholder="عنوان دسته‌بندی را وارد کنید">
                        </div>
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
                                    class="w-full px-4 pr-10 py-3.5 border-2 border-gray-200 rounded-2xl focus:ring-0 focus:border-orange-500 transition duration-200 bg-gray-50/50 hover:bg-white focus:bg-white appearance-none cursor-pointer">
                                <option value="0" @if(!$category->parent) selected @endif class="py-2 font-medium">بدون والد (دسته اصلی)</option>
                                @foreach($categories as $cat)
                                    @if($cat->id != $category->id) {{-- جلوگیری از انتخاب خودش --}}
                                    <option value="{{ $cat->id }}" @if($cat->id == $category->parent_id) selected @endif class="py-2">
                                        {{ $cat->title }}
                                        @if($cat->parent)
                                            (زیرمجموعه {{ $cat->parent->title }})
                                        @endif
                                    </option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                        <p class="text-xs text-gray-500 mt-1">در صورت اصلی بودن، گزینه "بدون والد" را انتخاب کنید</p>
                    </div>
                </div>
            </div>

            <!-- بخش توضیحات -->
            <div class="mb-8">
                <h2 class="text-xl font-bold text-gray-800 mb-6 flex items-center gap-2 border-r-4 border-orange-500 pr-4">
                    <svg class="w-6 h-6 text-orange-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h7"></path>
                    </svg>
                    توضیحات
                </h2>
                
                <div class="space-y-2">
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
                               class="w-full pr-10 py-3.5 px-4 border-2 border-gray-200 rounded-2xl focus:ring-0 focus:border-orange-500 transition duration-200 bg-gray-50/50 hover:bg-white focus:bg-white resize-none"
                               placeholder="توضیحات مربوط به این دسته‌بندی را وارد کنید...">{{ $category->description }}</textarea>
                    </div>
                    <p class="text-xs text-gray-500 mt-1">توضیحات می‌تواند شامل جزئیات مهم درباره این دسته‌بندی باشد</p>
                </div>
            </div>

         

            <!-- دکمه‌های فرم -->
            <div class="flex flex-col sm:flex-row gap-4 justify-between items-center pt-8 border-t-2 border-orange-100">
                <div class="text-sm text-gray-500">
                    <span class="text-red-500">*</span> فیلدهای الزامی
                </div>
                <div class="flex gap-3">

                    <button type="submit" 
                            class="px-10 py-3.5 bg-gradient-to-l from-orange-500 to-amber-500 hover:from-orange-600 hover:to-amber-600 text-white rounded-2xl transition duration-200 shadow-lg shadow-orange-500/30 font-medium flex items-center gap-2 transform hover:scale-105">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        بروزرسانی دسته‌بندی
                    </button>
                </div>
            </div>
        </form>
    </div>

    <!-- هشدار برای دسته‌بندی‌های دارای زیرمجموعه -->
    @if($category->children->count() > 0)
    <div class="mt-6 bg-amber-50 border-r-4 border-amber-500 rounded-2xl p-5 shadow-md">
        <div class="flex items-start gap-3">
            <svg class="w-6 h-6 text-amber-600 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"></path>
            </svg>
            <div>
                <h4 class="font-bold text-amber-800 text-lg">توجه: این دسته‌بندی دارای زیرمجموعه است</h4>
                <p class="text-amber-700 mt-1">
                    این دسته‌بندی دارای {{ $category->children->count() }} زیرمجموعه است. 
                    تغییر والد می‌تواند بر ساختار دسته‌بندی‌ها تأثیر بگذارد.
                </p>
                <div class="mt-3 flex flex-wrap gap-2">
                    @foreach($category->children as $child)
                    <span class="inline-flex items-center gap-1 px-3 py-1.5 bg-white text-amber-700 rounded-full text-xs font-medium border border-amber-300">
                        <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l5 5a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-5-5A1.994 1.994 0 013 12V7a4 4 0 014-4z"></path>
                        </svg>
                        {{ $child->title }}
                    </span>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    @endif
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

    // اعتبارسنجی ساده سمت کلاینت
    document.querySelector('form').addEventListener('submit', function(e) {
        const title = document.getElementById('title');
        if (title.value.trim() === '') {
            e.preventDefault();
            title.classList.add('border-red-500');
            title.focus();
            
            // نمایش پیام خطا (اختیاری)
            const errorDiv = document.createElement('div');
            errorDiv.className = 'text-red-500 text-xs mt-1';
            errorDiv.innerText = 'عنوان دسته‌بندی نمی‌تواند خالی باشد';
            
            const parent = title.closest('.space-y-2');
            const existingError = parent.querySelector('.text-red-500.text-xs');
            if (!existingError) {
                parent.appendChild(errorDiv);
            }
        }
    });

    // حذف پیام خطا هنگام تایپ
    document.getElementById('title').addEventListener('input', function() {
        this.classList.remove('border-red-500');
        const errorMsg = this.closest('.space-y-2').querySelector('.text-red-500.text-xs');
        if (errorMsg) {
            errorMsg.remove();
        }
    });

    // تنظیم اولیه استایل برای والد
    document.addEventListener('DOMContentLoaded', function() {
        const parentSelect = document.getElementById('parent_id');
        if (parentSelect.value !== '0') {
            parentSelect.classList.add('border-orange-500', 'bg-orange-50');
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

    /* استایل برای اسکرول بار textarea */
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

    /* استایل برای select option */
    select option {
        padding: 12px;
        background-color: white;
        color: #374151;
    }

    select option:hover {
        background-color: #fff7ed;
    }

    select option:checked {
        background: linear-gradient(to left, #f97316, #f59e0b);
        color: white;
    }

    /* استایل برای hover روی کارت */
    .bg-white {
        transition: box-shadow 0.3s ease;
    }

    .bg-white:hover {
        box-shadow: 0 25px 50px -12px rgba(249, 115, 22, 0.25);
    }

    /* انیمیشن برای دکمه بروزرسانی */
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

    /* استایل برای فیلدها */
    input, select, textarea {
        transition: all 0.2s ease;
    }

    /* استایل برای پیام خطا */
    .text-red-500.text-xs {
        animation: shake 0.3s ease-in-out;
    }

    @keyframes shake {
        0%, 100% { transform: translateX(0); }
        25% { transform: translateX(-5px); }
        75% { transform: translateX(5px); }
    }
</style>
@endsection