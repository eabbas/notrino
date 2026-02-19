@extends('admin.app.panel')
@section('title', 'لیست اسلایدر')
@section('content')
<div class="container mx-auto px-4 py-8">
    <!-- هدر صفحه -->
    <div class="flex justify-between items-center mb-8">
        <div>
            <h1 class="text-3xl font-bold bg-gradient-to-l from-orange-600 to-amber-500 bg-clip-text text-transparent">
                مدیریت اسلایدرها
            </h1>
            <p class="text-gray-600 mt-2">لیست تمام اسلایدرهای ایجاد شده</p>
        </div>
        <a href="{{ route('slider.sliderCreate') }}" 
           class="px-6 py-3 bg-gradient-to-l from-orange-500 to-amber-500 hover:from-orange-600 hover:to-amber-600 text-white rounded-xl transition duration-200 shadow-lg shadow-orange-500/30 flex items-center gap-2 transform hover:scale-105">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
            </svg>
            ایجاد اسلایدر جدید
        </a>
    </div>

    <!-- کارت اصلی جدول -->
    <div class="bg-white rounded-2xl shadow-xl overflow-hidden border border-orange-100">
        <div class="h-2 bg-gradient-to-l from-orange-500 to-amber-500"></div>


        <!-- جدول داده‌ها -->
        <div class="overflow-x-auto">
            <table class="w-full">
                <thead>
                    <tr class="bg-gradient-to-l from-orange-100 to-amber-100 border-b-2 border-orange-200">
                        <th class="px-6 py-4 text-right text-sm font-bold text-gray-700">ردیف</th>
                        <th class="px-6 py-4 text-right text-sm font-bold text-gray-700">عنوان</th>
                        <th class="px-6 py-4 text-right text-sm font-bold text-gray-700">تصویر</th>
                        <th class="px-6 py-4 text-center text-sm font-bold text-gray-700">عملیات</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-orange-100">
                    @foreach($sliders as $index => $slider)
                    <tr class="hover:bg-orange-50/50 transition duration-150 group">
                        <td class="px-6 py-4 text-sm text-gray-600">
                            <span class="font-mono bg-gray-100 px-3 py-1.5 rounded-lg font-bold text-orange-600">
                                {{ $index + 1 }}
                            </span>
                        </td>
                     
                        <td class="px-6 py-4">
                            <div class="flex items-center gap-2">
                                <span class="font-semibold text-gray-800">{{ $slider->title }}</span>
                            </div>
                        </td>
                        <td class="px-6 py-4">
                            <div class="relative w-40 h-20 rounded-xl overflow-hidden border-2 border-orange-200 group-hover:border-orange-400 transition shadow-sm">
                                <img src="{{ asset('storage/'.$slider->slider_img) }}" 
                                     alt="{{ $slider->title }}"
                                     class="w-full h-full object-cover group-hover:scale-110 transition duration-300">
                                <div class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition flex items-center justify-center">
                                </div>
                            </div>
                        </td>
                      
                        <td class="px-6 py-4">
                            <div class="flex items-center justify-center gap-2">
                                <!-- دکمه ویرایش -->
                                <a href="{{ route('slider.edit', [$slider]) }}" 
                                   class="p-2.5 text-orange-600 hover:bg-orange-50 rounded-xl transition-all duration-200 group relative hover:scale-110"
                                   title="ویرایش">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                                    </svg>
                                </a>
                                <a href="{{ route('slider.delete', [$slider]) }}" 
                                   class="p-2.5 text-orange-600 hover:bg-orange-50 rounded-xl transition-all duration-200 group relative hover:scale-110"
                                   title="حذف">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                                    </svg>
                                </a>

                                <!-- فرم مخفی برای حذف -->
                                <form id="delete-form-{{ $slider->id }}" 
                                      action="{{ route('slider.delete', [$slider]) }}" 
                                      method="POST" 
                                      class="hidden">
                                    @csrf
                                    @method('DELETE')
                                </form>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        
    </div>

 
</div>


<script>
تا
    // انیمیشن برای هاور ردیف‌ها
    document.querySelectorAll('tbody tr').forEach(row => {
        row.addEventListener('mouseenter', function() {
            this.classList.add('bg-orange-50/50');
        });
        row.addEventListener('mouseleave', function() {
            this.classList.remove('bg-orange-50/50');
        });
    });
</script>

<style>
    /* استایل برای شماره ردیف */
    .font-mono {
        font-family: 'Vazir', monospace;
    }

    /* استایل برای pagination */
    .pagination {
        display: flex;
        gap: 0.5rem;
    }
    
    .pagination a, .pagination span {
        padding: 0.5rem 1rem;
        border-radius: 0.75rem;
        border: 2px solid #fed7aa;
        color: #4b5563;
        transition: all 0.2s;
    }
    
    .pagination a:hover {
        background: linear-gradient(to left, #f97316, #f59e0b);
        color: white;
        border-color: transparent;
        transform: scale(1.05);
    }
    
    .pagination .active span {
        background: linear-gradient(to left, #f97316, #f59e0b);
        color: white;
        border-color: transparent;
    }

    /* انیمیشن برای modal */
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

    /* استایل برای تصاویر */
    .w-24.h-20 {
        transition: all 0.3s ease;
    }

    .group:hover .w-24.h-20 {
        border-color: #f97316;
        box-shadow: 0 10px 15px -3px rgba(249, 115, 22, 0.2);
    }

    /* استایل برای اسکرول افقی جدول */
    .overflow-x-auto {
        scrollbar-width: thin;
        scrollbar-color: #f97316 #fed7aa;
    }

    .overflow-x-auto::-webkit-scrollbar {
        height: 8px;
    }

    .overflow-x-auto::-webkit-scrollbar-track {
        background: #fed7aa;
        border-radius: 10px;
    }

    .overflow-x-auto::-webkit-scrollbar-thumb {
        background: #f97316;
        border-radius: 10px;
    }

    .overflow-x-auto::-webkit-scrollbar-thumb:hover {
        background: #ea580c;
    }

    /* انیمیشن برای لود صفحه */
    .container {
        animation: fadeInPage 0.5s ease-out;
    }

    @keyframes fadeInPage {
        from {
            opacity: 0;
            transform: translateY(20px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
</style>
@endsection