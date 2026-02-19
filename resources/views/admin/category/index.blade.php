@extends('admin.app.panel')
@section('title', 'لیست دسته‌ها')
@section('content')
<div class="container mx-auto px-4 py-8">
    <!-- هدر صفحه -->
    <div class="flex justify-between items-center mb-8">
        <div>
            <h1 class="text-3xl font-bold bg-gradient-to-l from-orange-600 to-amber-500 bg-clip-text text-transparent">
                مدیریت دسته‌بندی‌ها
            </h1>
            <p class="text-gray-600 mt-2">لیست تمام دسته‌بندی‌های ایجاد شده</p>
        </div>
        <a href="{{ route('category.create') }}" 
           class="px-6 py-3 bg-gradient-to-l from-orange-500 to-amber-500 hover:from-orange-600 hover:to-amber-600 text-white rounded-xl transition duration-200 shadow-lg shadow-orange-500/30 flex items-center gap-2 transform hover:scale-105">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
            </svg>
            ایجاد دسته‌بندی جدید
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
                        <th class="px-6 py-4 text-right text-sm font-bold text-gray-700">توضیحات</th>
                        <th class="px-6 py-4 text-right text-sm font-bold text-gray-700">والد</th>
                        <th class="px-6 py-4 text-right text-sm font-bold text-gray-700">تصویر</th>
                        <th class="px-6 py-4 text-center text-sm font-bold text-gray-700">عملیات</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-orange-100">
                    @foreach($categories as $index => $category)
                    <tr class="hover:bg-orange-50/50 transition duration-150 group">
                        <td class="px-6 py-4 text-sm text-gray-600">
                            <span class="font-mono bg-gray-100 px-3 py-1.5 rounded-lg font-bold text-orange-600">
                                {{ $index + 1 }}
                            </span>
                        </td>
                    
                        <td class="px-6 py-4">
                            <div class="flex items-center gap-2">
                                <span class="font-semibold text-gray-800">{{ $category->title }}</span>
                                
                            </div>
                        </td>
                        <td class="px-6 py-4 text-sm text-gray-600 max-w-xs">
                            @if($category->description)
                                <div class="line-clamp-2">{{ $category->description }}</div>
                            @else
                                <span class="inline-flex items-center gap-1 px-2 py-1 bg-gray-100 text-gray-500 rounded-lg text-xs">
                                    <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 12H4"></path>
                                    </svg>
                                    بدون توضیحات
                                </span>
                            @endif
                        </td>
                        <td class="px-6 py-4">
                            @if($category->parent)
                                <span class="inline-flex items-center gap-1 px-3 py-1.5 bg-orange-100 text-orange-700 rounded-full text-xs font-medium">
                                    <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l5 5a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-5-5A1.994 1.994 0 013 12V7a4 4 0 014-4z"></path>
                                    </svg>
                                    {{ $category->parent->title }}
                                </span>
                            @else
                                <span class="inline-flex items-center gap-1 px-3 py-1.5 bg-amber-100 text-amber-700 rounded-full text-xs font-medium">
                                    <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"></path>
                                    </svg>
                                    دسته اصلی
                                </span>
                            @endif
                        </td>
                        <td class="px-6 py-4">
                            @if($category->image)
                                <div class="relative w-14 h-14 rounded-xl overflow-hidden border-2 border-orange-200 group-hover:border-orange-400 transition shadow-sm">
                                    <img src="{{ asset('storage/'.$category->image) }}" 
                                         alt="{{ $category->title }}"
                                         class="w-full h-full object-cover group-hover:scale-110 transition duration-300">
                                    <div class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition flex items-center justify-center">
                                        <span class="text-white text-xs bg-black/60 px-2 py-1 rounded-full">تصویر</span>
                                    </div>
                                </div>
                            @else
                                <div class="w-14 h-14 rounded-xl bg-gradient-to-br from-gray-100 to-gray-200 flex items-center justify-center border-2 border-gray-200">
                                    <svg class="w-6 h-6 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                    </svg>
                                </div>
                            @endif
                        </td>
                        <td class="px-6 py-4">
                            <div class="flex items-center justify-center gap-2">
                                <!-- دکمه نمایش -->
                                <a href="{{ route('category.show', [$category]) }}" 
                                   class="p-2.5 text-blue-600 hover:bg-blue-50 rounded-xl transition-all duration-200 group relative hover:scale-110"
                                   title="مشاهده">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                                    </svg>
                                </a>

                                <!-- دکمه ویرایش -->
                                <a href="{{ route('category.edit', [$category]) }}" 
                                   class="p-2.5 text-orange-600 hover:bg-orange-50 rounded-xl transition-all duration-200 group relative hover:scale-110"
                                   title="ویرایش">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                                    </svg>
                                </a>

                                <!-- دکمه حذف -->
                                  <a href="{{ route('category.delete', [$category]) }}" 
                                   class="p-2.5 text-orange-600 hover:bg-orange-50 rounded-xl transition-all duration-200 group relative hover:scale-110"
                                   title="ویرایش">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                                    </svg>
                                </a>
                              

                                <!-- فرم مخفی برای حذف -->
                                <form id="delete-form-{{ $category->id }}" 
                                      action="{{ route('category.delete', [$category]) }}" 
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

    @if($categories->isEmpty())
    <!-- پیام خالی بودن جدول -->
    <div class="text-center py-16 bg-white rounded-2xl shadow-xl border border-orange-100 mt-6">
        <div class="w-24 h-24 mx-auto bg-gradient-to-br from-orange-100 to-amber-100 rounded-full flex items-center justify-center mb-4">
            <svg class="w-12 h-12 text-orange-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4"></path>
            </svg>
        </div>
        <h3 class="text-xl font-bold text-gray-800 mb-2">هنوز دسته‌بندی‌ای ایجاد نشده است</h3>
        <p class="text-gray-600 mb-6">اولین دسته‌بندی را ایجاد کنید</p>
        <a href="{{ route('category.create') }}" 
           class="inline-flex px-6 py-3 bg-gradient-to-l from-orange-500 to-amber-500 hover:from-orange-600 hover:to-amber-600 text-white rounded-xl transition duration-200 shadow-lg shadow-orange-500/30 items-center gap-2">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
            </svg>
            ایجاد دسته‌بندی جدید
        </a>
    </div>
    @endif
</div>

<!-- Modal تایید حذف -->
<div id="deleteModal" class="fixed inset-0 bg-gray-900/50 backdrop-blur-sm hidden items-center justify-center z-50">
    <div class="bg-white rounded-2xl shadow-2xl max-w-md w-full mx-4 transform transition-all">
        <div class="p-6">
            <div class="w-16 h-16 mx-auto bg-red-100 rounded-full flex items-center justify-center mb-4">
                <svg class="w-8 h-8 text-red-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"></path>
                </svg>
            </div>
            <h3 class="text-xl font-bold text-gray-900 text-center mb-2">حذف دسته‌بندی</h3>
            <p class="text-gray-600 text-center mb-4" id="deleteModalMessage">آیا از حذف این دسته‌بندی اطمینان دارید؟</p>
            <p class="text-sm text-gray-500 text-center mb-6">این عملیات قابل بازگشت نیست.</p>
            <div class="flex gap-3 justify-center">
                <button onclick="closeDeleteModal()" 
                        class="px-6 py-2.5 bg-gray-100 hover:bg-gray-200 text-gray-700 rounded-lg transition">
                    انصراف
                </button>
                <button onclick="proceedDelete()" 
                        class="px-6 py-2.5 bg-gradient-to-l from-red-500 to-red-600 hover:from-red-600 hover:to-red-700 text-white rounded-lg transition shadow-lg shadow-red-500/30">
                    تایید و حذف
                </button>
            </div>
        </div>
    </div>
</div>

<script>
   
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

    /* استایل برای محدود کردن تعداد خطوط توضیحات */
    .line-clamp-2 {
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        overflow: hidden;
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

    /* استایل برای تصاویر */
    .w-14.h-14 {
        transition: all 0.3s ease;
    }

    .group:hover .w-14.h-14 {
        border-color: #f97316;
        box-shadow: 0 10px 15px -3px rgba(249, 115, 22, 0.2);
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