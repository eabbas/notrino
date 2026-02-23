@extends('admin.app.panel')
@section('title', 'ایجاد ارتباط با ما')
@section('content')
<div class="min-h-screen bg-gradient-to-br from-orange-50 to-white py-12 px-4 sm:px-6 lg:px-8">
    <div class="max-w-3xl mx-auto">
        <!-- هدر صفحه -->
        <div class="text-center mb-12">
            <h1 class="text-4xl font-extrabold text-gray-900 mb-3">
                ارتباط با ما
            </h1>
            <div class="mt-4 flex justify-center">
                <div class="w-24 h-1.5 bg-gradient-to-r from-orange-400 to-orange-500 rounded-full"></div>
            </div>
        </div>

        <!-- کارت اصلی فرم -->
        <div class="bg-white/90 backdrop-blur-sm rounded-3xl shadow-2xl shadow-orange-200/50 overflow-hidden border border-orange-100">
            <div class="h-2 bg-gradient-to-r from-orange-400 via-orange-500 to-orange-400"></div>
            
            <div class="p-8 sm:p-10">
                <form action="{{ route('contactUs.store') }}" method="post" class="space-y-8">
                    @csrf
               
                    <!-- بخش عنوان -->
                    <div class="space-y-2">
                        <label for="title" class="block text-sm font-semibold text-gray-700">
                            عنوان
                            <span class="text-orange-500 mr-1">*</span>
                        </label>
                        <div class="relative group">
                            <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                                <svg class="h-5 w-5 text-gray-400 group-focus-within:text-orange-500 transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-6l-2-2H5a2 2 0 00-2 2z"></path>
                                </svg>
                            </div>
                            <input type="text" 
                                   name="title" 
                                   id="title" 
                                   required
                                   class="w-full pr-10 pl-4 py-4 text-gray-700 bg-white border-2 border-gray-200 rounded-2xl focus:ring-0 focus:border-orange-400 transition-all duration-300 hover:border-orange-200 focus:bg-white focus:shadow-lg focus:shadow-orange-100"
                                  >
                        </div>
                    </div>

                    <!-- بخش توضیحات -->
                    <div class="space-y-2">
                        <label for="description" class="block text-sm font-semibold text-gray-700">
                            توضیحات
                            <span class="text-orange-500 mr-1">*</span>
                        </label>
                        <div class="relative group">
                            <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                                <svg class="h-5 w-5 text-gray-400 group-focus-within:text-orange-500 transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h7"></path>
                                </svg>
                            </div>
                            <input type="text" 
                                name="description" 
                                id="description" 
                                required
                                class="w-full pr-10 pl-4 py-4 text-gray-700 bg-white border-2 border-gray-200 rounded-2xl focus:ring-0 focus:border-orange-400 transition-all duration-300 hover:border-orange-200 focus:bg-white focus:shadow-lg focus:shadow-orange-100"
                               >
                        </div>
                    </div>

         
             

                    <!-- دکمه‌ها -->
                    <div class="flex flex-col sm:flex-row gap-4 justify-between items-center pt-8 mt-8 border-t-2 border-orange-100">
                        <div class="text-sm text-gray-500 flex items-center gap-2">
                            <span class="w-2 h-2 bg-orange-400 rounded-full"></span>
                            <span>فیلدهای <span class="text-orange-500 font-semibold">*</span> الزامی هستند</span>
                        </div>
                        <div class="flex gap-3">
                        
                            <button type="submit" 
                                    class="px-10 py-3.5 bg-gradient-to-l from-orange-500 to-orange-600 hover:from-orange-600 hover:to-orange-700 text-white rounded-xl transition-all duration-300 shadow-lg shadow-orange-200 font-medium flex items-center gap-2 transform hover:scale-105 hover:shadow-xl">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                ذخیره اطلاعات
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <!-- فوتر با اطلاعات تکمیلی -->
        <div class="mt-8 text-center">
            <p class="text-sm text-gray-500">
                اطلاعات تماس در بخش‌های مختلف سایت نمایش داده می‌شود
            </p>
        </div>
    </div>
</div>

<script>
   
    // انیمیشن برای فیلدها
    document.querySelectorAll('input').forEach(element => {
        element.addEventListener('focus', function() {
            this.parentElement.classList.add('ring-4', 'ring-orange-100');
        });
        
        element.addEventListener('blur', function() {
            this.parentElement.classList.remove('ring-4', 'ring-orange-100');
        });
    });

   


</script>

<style>
    /* انیمیشن برای لود صفحه */
    .max-w-3xl {
        animation: fadeInUp 0.8s cubic-bezier(0.4, 0, 0.2, 1);
    }

    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(30px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    /* استایل برای فیلدها */
    input {
        transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    }

    input:hover {
        transform: translateY(-2px);
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
        transition: width 0.6s, height 0.6s;
    }

    button[type="submit"]:hover::after {
        width: 300px;
        height: 300px;
    }

    /* استایل برای کارت‌های نمونه */
    .cursor-pointer {
        transition: all 0.3s ease;
        cursor: pointer;
    }

    .cursor-pointer:hover {
        transform: translateY(-4px);
        box-shadow: 0 15px 25px -8px rgba(249, 115, 22, 0.2);
    }

    /* استایل برای پس‌زمینه */
    .bg-gradient-to-br {
        background-size: 200% 200%;
        animation: gradientShift 15s ease infinite;
    }

    @keyframes gradientShift {
        0%, 100% { background-position: 0% 0%; }
        50% { background-position: 100% 100%; }
    }

    /* استایل برای فوکوس */
    .ring-4 {
        transition: all 0.2s ease;
    }
</style>
@endsection