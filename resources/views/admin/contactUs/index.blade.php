@extends('admin.app.panel')
@section('title', 'صفحه ارتباط با ما')
@section('content')
<div class="min-h-screen bg-gradient-to-br from-orange-50 to-white py-12 px-4 sm:px-6 lg:px-8">
    <div class="max-w-7xl mx-auto">
        <!-- هدر صفحه -->
        <div class="text-center mb-12">
            <div class="inline-flex items-center justify-center w-20 h-20 rounded-full bg-gradient-to-br from-orange-400 to-orange-500 text-white shadow-xl shadow-orange-200 mb-6">
                <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                </svg>
            </div>
            <h1 class="text-4xl font-extrabold text-gray-900 mb-3">
                ارتباط ما
            </h1>
       
            <div class="mt-4 flex justify-center">
                <div class="w-24 h-1.5 bg-gradient-to-r from-orange-400 to-orange-500 rounded-full"></div>
            </div>
        </div>

        @if($contactUs->isEmpty())
        <!-- پیام خالی بودن -->
        <div class="text-center py-20 bg-white/90 backdrop-blur-sm rounded-3xl shadow-2xl shadow-orange-200/50 border border-orange-100">
            <div class="w-28 h-28 mx-auto bg-gradient-to-br from-orange-100 to-orange-200 rounded-full flex items-center justify-center mb-6">
                <svg class="w-14 h-14 text-orange-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                </svg>
            </div>
            <h3 class="text-2xl font-bold text-gray-800 mb-3">هنوز اطلاعاتی ثبت نشده است</h3>
            <p class="text-gray-600 mb-8"> ایجاد کنید</p>
            <a href="{{ route('contactUs.create') }}" 
               class="inline-flex px-8 py-4 bg-gradient-to-l from-orange-500 to-orange-600 hover:from-orange-600 hover:to-orange-700 text-white rounded-xl transition-all duration-300 shadow-lg shadow-orange-200 font-medium items-center gap-2 transform hover:scale-105">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
                </svg>
                ایجاد ارتباط با ما
            </a>
        </div>
        @else
        <!-- گرید اطلاعات تماس -->
        <div class="w-full">
            @foreach ($contactUs as $index => $contact)
            <div class="group bg-white/90 backdrop-blur-sm rounded-3xl shadow-xl hover:shadow-2xl shadow-orange-200/30 border border-orange-100 overflow-hidden transition-all duration-500 hover:-translate-y-2"
                 style="animation: fadeInUp 0.5s ease-out {{ $index * 0.1 }}s both;">
                
                <!-- نوار بالای کارت با گرادینت -->
                <div class="h-2 w-full bg-gradient-to-r from-orange-400 to-orange-500"></div>
                
                <div class="p-8">
              

                    <!-- عنوان -->
                    <h3 class="text-xl font-bold text-gray-900 mb-3 flex items-center gap-2">
                        <span class="w-1 h-6 bg-orange-400 rounded-full"></span>
                        {{ $contact->title }}
                    </h3>

                    <!-- توضیحات -->
                    <div class="bg-orange-50/50 rounded-2xl p-5 mb-6 border border-orange-100">
                        <p class="text-gray-700 leading-relaxed">
                            {{ $contact->description }}
                        </p>
                    </div>

                    <!-- دکمه‌های عملیات -->
                    <div class="flex gap-2 pt-4 border-t border-orange-100">
                        <a href="{{ route('contactUs.edit', [$contact]) }}" 
                        class="flex items-center justify-center gap-1 py-1.5 px-4 bg-white border border-orange-300 hover:bg-orange-50 text-orange-600 rounded-lg transition-all duration-300 shadow-sm hover:shadow-md transform hover:scale-105 text-xs font-medium">
                            <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                            </svg>
                            <span>ویرایش</span>
                        </a>
                        <a href="{{ route('contactUs.delete', [$contact]) }}" 
                        class="flex items-center justify-center gap-1 py-1.5 px-3 bg-white border border-red-300 hover:bg-red-50 text-red-600 rounded-lg transition-all duration-300 shadow-sm hover:shadow-md transform hover:scale-105 text-xs font-medium">
                            <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                            </svg>
                            <span>حذف</span>
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        @endif
    </div>
</div>



<script>
 

    // انیمیشن برای هاور کارت‌ها
    document.querySelectorAll('.group').forEach(card => {
        card.addEventListener('mouseenter', function() {
            this.classList.add('shadow-2xl');
        });
        card.addEventListener('mouseleave', function() {
            this.classList.remove('shadow-2xl');
        });
    });
</script>

<style>
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

    /* انیمیشن برای لود صفحه */
    .max-w-7xl {
        animation: fadeInPage 0.8s cubic-bezier(0.4, 0, 0.2, 1);
    }

    @keyframes fadeInPage {
        from {
            opacity: 0;
            transform: translateY(30px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    /* استایل برای کارت‌ها */
    .group {
        transition: all 0.5s cubic-bezier(0.4, 0, 0.2, 1);
    }

    /* استایل برای modal */
    #deleteModal {
        animation: fadeIn 0.3s ease-out;
    }

    #deleteModal .bg-white {
        animation: slideUp 0.4s cubic-bezier(0.4, 0, 0.2, 1);
    }

    @keyframes fadeIn {
        from { opacity: 0; }
        to { opacity: 1; }
    }

    @keyframes slideUp {
        from {
            opacity: 0;
            transform: translateY(30px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    /* استایل برای دکمه‌ها */
    button, a {
        transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
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
        background: linear-gradient(to bottom, #f97316, #fb923c);
        border-radius: 10px;
    }

    ::-webkit-scrollbar-thumb:hover {
        background: linear-gradient(to bottom, #ea580c, #f97316);
    }
</style>
@endsection