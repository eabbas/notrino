@extends('admin.app.panel')
@section('title', 'لیست برندها')
@section('content')
<div class="container mx-auto px-4 py-8">
    <!-- هدر صفحه -->
    <div class="flex justify-between items-center mb-8">
        <div>
            <h1 class="text-3xl font-bold bg-gradient-to-l from-orange-600 to-amber-500 bg-clip-text text-transparent">
                مدیریت برندها
            </h1>
            <p class="text-gray-600 mt-2">لیست تمام برندهای موجود در فروشگاه</p>
        </div>
        <a href="{{ route('brand.brandCreate') }}" 
           class="px-6 py-3 bg-gradient-to-l from-orange-500 to-amber-500 hover:from-orange-600 hover:to-amber-600 text-white rounded-xl transition duration-200 shadow-lg shadow-orange-500/30 flex items-center gap-2 transform hover:scale-105">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
            </svg>
            ایجاد برند جدید
        </a>
    </div>



    @if($brands->isEmpty())
    <!-- پیام خالی بودن لیست -->
    <div class="text-center py-16 bg-white rounded-2xl shadow-xl border border-orange-100">
        <div class="w-24 h-24 mx-auto bg-gradient-to-br from-orange-100 to-amber-100 rounded-full flex items-center justify-center mb-4">
            <svg class="w-12 h-12 text-orange-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 4h2a2 2 0 012 2v14a2 2 0 01-2 2H6a2 2 0 01-2-2V6a2 2 0 012-2h2"></path>
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 2v4h-4V2h4z"></path>
            </svg>
        </div>
        <h3 class="text-xl font-bold text-gray-800 mb-2">هنوز برندی ثبت نشده است</h3>
        <p class="text-gray-600 mb-6">اولین برند را به فروشگاه اضافه کنید</p>
        <a href="{{ route('brand.create') }}" 
           class="inline-flex px-6 py-3 bg-gradient-to-l from-orange-500 to-amber-500 hover:from-orange-600 hover:to-amber-600 text-white rounded-xl transition duration-200 shadow-lg shadow-orange-500/30 items-center gap-2">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
            </svg>
            ایجاد برند جدید
        </a>
    </div>
    @else
    <!-- نمایش برندها به صورت گرید -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6" id="brandsContainer">
        @foreach ($brands as $brand)
        <div class="brand-item group bg-white rounded-2xl shadow-md hover:shadow-2xl transition-all duration-300 border-2 border-transparent hover:border-orange-300 overflow-hidden">
            <div class="relative">
                <!-- نوار بالای کارت با گرادینت -->
                <div class="h-1.5 w-full bg-gradient-to-l from-orange-500 to-amber-500"></div>
                
                <!-- محتوای اصلی کارت -->
                <div class="p-6">
                    <!-- تصویر برند -->
                    <div class="w-full h-36 flex justify-center items-center mb-4">
                        <div class="relative w-32 h-32 rounded-2xl overflow-hidden border-3 border-orange-100 group-hover:border-orange-300 transition-all duration-300 shadow-lg group-hover:shadow-orange-200/50">
                            <img src="{{ asset('storage/'.$brand->image) }}" 
                                 alt="{{ $brand->title }}"
                                 class="w-full h-full object-contain p-2 group-hover:scale-110 transition-transform duration-300">
                        </div>
                    </div>

                    <!-- عنوان برند -->
                    <h3 class="text-center font-bold text-gray-800 text-lg mb-4 group-hover:text-orange-600 transition">
                        {{ $brand->title }}
                    </h3>

                    <!-- اطلاعات اضافی (مخفی - برای جستجو) -->
                    <div class="hidden search-data">
                        <span class="brand-id">{{ $brand->id }}</span>
                        <span class="brand-title">{{ $brand->title }}</span>
                    </div>

                    <!-- دکمه‌های عملیات -->
                    <div class="flex justify-center gap-3 mt-4 pt-4 border-t border-gray-100">
                        <!-- دکمه ویرایش -->
                        <a href="{{ route('brand.edit', [$brand]) }}" 
                           class="flex-1 flex items-center justify-center gap-2 px-3 py-2.5 bg-orange-50 hover:bg-orange-100 text-orange-600 rounded-xl transition-all duration-200 group-hover:shadow-md">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                            </svg>
                            <span class="text-sm font-medium">ویرایش</span>
                        </a>
                        <a href="{{ route('brand.delete', [$brand]) }}" 
                           class="flex-1 flex items-center justify-center gap-2 px-3 py-2.5 bg-orange-50 hover:bg-orange-100 text-orange-600 rounded-xl transition-all duration-200 group-hover:shadow-md">
                             <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                            </svg>
                            <span class="text-sm font-medium">حذف</span>
                        </a>

                        <!-- دکمه حذف -->
                        {{-- <button onclick="confirmDelete({{ $brand->id }}, '{{ $brand->title }}')"
                                class="flex-1 flex items-center justify-center gap-2 px-3 py-2.5 bg-red-50 hover:bg-red-100 text-red-600 rounded-xl transition-all duration-200 group-hover:shadow-md">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                            </svg>
                            <span class="text-sm font-medium">حذف</span>
                        </button> --}}

                       
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>


    @endif
</div>





<style>



    /* استایل برای hover کارت */
    .brand-item {
        transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    }

    .brand-item:hover {
        transform: translateY(-8px);
    }

    /* استایل برای تصویر */
    .brand-item img {
        transition: all 0.5s cubic-bezier(0.4, 0, 0.2, 1);
    }

    .brand-item:hover img {
        transform: scale(1.15) rotate(2deg);
    }

    /* استایل برای دکمه‌ها */
    .brand-item .flex.justify-center.gap-3 a,
    .brand-item .flex.justify-center.gap-3 button {
        transition: all 0.2s ease;
        position: relative;
        overflow: hidden;
    }

    .brand-item .flex.justify-center.gap-3 a::after,
    .brand-item .flex.justify-center.gap-3 button::after {
        content: '';
        position: absolute;
        top: 50%;
        left: 50%;
        width: 0;
        height: 0;
        border-radius: 50%;
        background: rgba(255, 255, 255, 0.3);
        transform: translate(-50%, -50%);
        transition: width 0.3s, height 0.3s;
    }

    .brand-item .flex.justify-center.gap-3 a:hover::after,
    .brand-item .flex.justify-center.gap-3 button:hover::after {
        width: 150px;
        height: 150px;
    }

    /* استایل برای modal */
    #deleteModal {
        animation: fadeIn 0.2s ease-out;
    }

    #deleteModal .bg-white {
        animation: slideUp 0.3s ease-out;
    }

    @keyframes fadeIn {
        from { opacity: 0; }
        to { opacity: 1; }
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

    /* استایل برای اسکرول */
    ::-webkit-scrollbar {
        width: 10px;
        height: 10px;
    }

    ::-webkit-scrollbar-track {
        background: #fff7ed;
        border-radius: 10px;
    }

    ::-webkit-scrollbar-thumb {
        background: linear-gradient(to bottom, #f97316, #f59e0b);
        border-radius: 10px;
    }

    ::-webkit-scrollbar-thumb:hover {
        background: linear-gradient(to bottom, #ea580c, #d97706);
    }
</style>
@endsection