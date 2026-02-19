@extends('admin.app.panel')
@section('title', 'صفحه تک دسته‌بندی')
@section('content')
<div class="container mx-auto px-4 py-8">
    <!-- هدر صفحه -->
    <div class="flex justify-between items-center mb-8">
        <div>
            <h1 class="text-3xl font-bold bg-gradient-to-l from-orange-600 to-amber-500 bg-clip-text text-transparent">
                نمایش دسته‌بندی
            </h1>
            <p class="text-gray-600 mt-2">مشاهده جزئیات دسته‌بندی "{{ $category->title }}"</p>
        </div>
        <div class="flex gap-3">
        
            <a href="{{ route('category.list') }}" 
               class="px-5 py-2.5 bg-gray-100 hover:bg-gray-200 text-gray-700 rounded-xl transition duration-200 flex items-center gap-2">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                </svg>
                بازگشت به لیست
            </a>
        </div>
    </div>

    <!-- کارت اصلی نمایش اطلاعات -->
    <div class="bg-white rounded-3xl shadow-2xl overflow-hidden border border-orange-100">
        <!-- نوار بالای کارت -->
        <div class="h-2 bg-gradient-to-l from-orange-500 to-amber-500"></div>
        
        <div class="p-8">
            <!-- هدر کارت با عنوان و وضعیت -->
            <div class="flex flex-col md:flex-row justify-between items-start md:items-center gap-4 mb-8 pb-6 border-b-2 border-orange-100">
                <div class="flex items-center gap-4">
                    <div class="w-16 h-16 rounded-2xl bg-gradient-to-br from-orange-100 to-amber-100 flex items-center justify-center">
                        <svg class="w-8 h-8 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l5 5a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-5-5A1.994 1.994 0 013 12V7a4 4 0 014-4z"></path>
                        </svg>
                    </div>
                    <div>
                        <h2 class="text-2xl font-bold text-gray-800">{{ $category->title }}</h2>
                        <div class="flex items-center gap-3 mt-1">
                            <span class="inline-flex items-center gap-1 px-3 py-1 text-xs font-medium rounded-full 
                                @if($category->parent) bg-orange-100 text-orange-700 @else bg-amber-100 text-amber-700 @endif">
                                @if($category->parent)
                                    <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l5 5a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-5-5A1.994 1.994 0 013 12V7a4 4 0 014-4z"></path>
                                    </svg>
                                    زیرمجموعه
                                @else
                                    <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"></path>
                                    </svg>
                                    دسته اصلی
                                @endif
                            </span>
                        </div>
                    </div>
                </div>
              
            </div>

            <!-- محتوای اصلی دو ستونه -->
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                <!-- ستون راست - تصویر -->
                <div class="lg:col-span-1">
                    <div class="bg-gradient-to-br from-orange-50 to-amber-50 rounded-2xl p-6 border-2 border-orange-200 sticky top-4">
                        <h3 class="text-lg font-semibold text-gray-800 mb-4 flex items-center gap-2">
                            <svg class="w-5 h-5 text-orange-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                            </svg>
                            تصویر دسته‌بندی
                        </h3>
                        
                        @if($category->image)
                            <div class="relative group">
                                <div class="rounded-2xl overflow-hidden border-4 border-white shadow-xl">
                                    <img src="{{ asset('storage/'.$category->image) }}" 
                                         alt="{{ $category->title }}"
                                         class="w-full h-64 object-cover transform group-hover:scale-105 transition duration-500">
                                </div>
                                <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent opacity-0 group-hover:opacity-100 transition rounded-2xl flex items-end justify-center pb-4">
                                    <span class="text-white text-sm bg-black/50 backdrop-blur-sm px-4 py-2 rounded-full">
                                        {{ $category->title }}
                                    </span>
                                </div>
                            </div>
                        @else
                            <div class="bg-white rounded-2xl p-12 text-center border-3 border-dashed border-orange-200">
                                <svg class="w-20 h-20 mx-auto text-orange-300 mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                </svg>
                                <p class="text-gray-500">تصویری برای این دسته‌بندی آپلود نشده است</p>
                            </div>
                        @endif
                    </div>
                </div>

                <!-- ستون چپ - اطلاعات -->
                <div class="lg:col-span-2 space-y-6">
                    <!-- کارت اطلاعات -->
                    <div class="bg-gradient-to-br from-gray-50 to-white rounded-2xl p-6 border border-gray-200">
                        <h3 class="text-lg font-semibold text-gray-800 mb-4 flex items-center gap-2">
                            <svg class="w-5 h-5 text-orange-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            اطلاعات کامل
                        </h3>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <!-- عنوان -->
                            <div class="bg-white rounded-xl p-4 border border-gray-200">
                                <div class="flex items-center gap-2 text-orange-500 mb-2">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-6l-2-2H5a2 2 0 00-2 2z"></path>
                                    </svg>
                                    <span class="text-xs font-medium text-gray-500">عنوان</span>
                                </div>
                                <p class="text-gray-800 font-medium pr-6">{{ $category->title }}</p>
                            </div>

                            <!-- وضعیت والد -->
                            <div class="bg-white rounded-xl p-4 border border-gray-200">
                                <div class="flex items-center gap-2 text-orange-500 mb-2">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l5 5a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-5-5A1.994 1.994 0 013 12V7a4 4 0 014-4z"></path>
                                    </svg>
                                    <span class="text-xs font-medium text-gray-500">والد</span>
                                </div>
                                @if($category->parent)
                                    <div class="flex items-center gap-2 pr-6">
                                        <span class="text-gray-800 font-medium">{{ $category->parent->title }}</span>
                                    </div>
                                @else
                                    <p class="text-gray-500 pr-6">بدون والد (دسته اصلی)</p>
                                @endif
                            </div>

                            <!-- توضیحات (تمام عرض) -->
                            <div class="md:col-span-2 bg-white rounded-xl p-4 border border-gray-200">
                                <div class="flex items-center gap-2 text-orange-500 mb-3">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h7"></path>
                                    </svg>
                                    <span class="text-xs font-medium text-gray-500">توضیحات</span>
                                </div>
                                @if($category->description)
                                    <p class="text-gray-700 leading-relaxed pr-6">{{ $category->description }}</p>
                                @else
                                    <p class="text-gray-400 pr-6">توضیحاتی برای این دسته‌بندی وارد نشده است.</p>
                                @endif
                            </div>
                        </div>
                    </div>

               

                
                </div>
            </div>

            
        </div>
    </div>
</div>


<script>

    // انیمیشن برای اسکرول
    window.addEventListener('scroll', function() {
        const stickyBox = document.querySelector('.lg\\:col-span-1 > div');
        if (stickyBox) {
            if (window.scrollY > 100) {
                stickyBox.classList.add('shadow-2xl');
            } else {
                stickyBox.classList.remove('shadow-2xl');
            }
        }
    });
</script>

<style>

    .container {
        animation: fadeIn 0.5s ease-out;
    }

    @keyframes fadeIn {
        from {
            opacity: 0;
            transform: translateY(20px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }


    .lg\:col-span-1 > div {
        transition: all 0.3s ease;
    }


    #deleteModal {
        animation: fadeIn 0.2s ease-out;
    }

    #deleteModal .bg-white {
        animation: slideUp 0.3s ease-out;
    }

    @keyframes slideUp {
        from {
            opacity: 0;
            transform: translateY(20px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }




    .group:hover img {
        transform: scale(1.05);
    }
</style>
@endsection