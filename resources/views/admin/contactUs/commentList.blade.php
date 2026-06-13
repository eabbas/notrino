@extends('admin.app.panel')
@section('title', "فروشگاه نوترینو")
@section('content')

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <!-- هدر -->
        <div class="mb-10">
            <h1 class="text-3xl font-bold text-[#f28822]">  <!-- حذف pt-10 -->
                نظرات کاربران
            </h1>
            <div class="w-16 h-1 bg-orange-500 mt-2 rounded-full"></div>
            <p class="text-gray-500 mt-3 text-sm">
                تعداد کل نظرات: {{ $comments->count() }}
            </p>
        </div>

        <!-- گرید ۳ ستونه -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            
            @foreach ($comments as $userComment)
                <a href="{{ route('contactUs.single' , [$userComment->id]) }}" class="block group">
                    <div class="bg-white rounded-xl shadow-md hover:shadow-lg transition-all duration-300 overflow-hidden border-1 border-gray-200 hover:border-[#f28822]">
                        <!-- هدر کامنت -->
                        <div class="px-4 pt-4 pb-2">
                            <div class="flex justify-between items-start">
                                <div>
                                    <h3 class="text-base font-semibold text-gray-800">
                                        {{ $userComment->name . " " . $userComment->family}}
                                    </h3>
                                    <p class="text-xs text-orange-600 mt-1">
                                        {{ $userComment->phoneNumber }}
                                    </p>
                                </div>
                                <span class="text-[11px] text-gray-400">
                                    {{ $userComment->created_at }}
                                </span>
                            </div>
                        </div>
                        
                        <!-- متن کامنت -->
                        <div class="px-4 py-2">
                            <p class="text-gray-600 text-sm leading-relaxed">
                                {{ $userComment->comment }}
                            </p>
                        </div>
                        
                        <!-- فوتر کامنت -->
                        <div class="px-4 py-2.5 border-t border-gray-100 flex justify-between items-center text-xs">
                            <span class="text-gray-500">
                                کد کاربر: {{ $userComment->user_id }}
                            </span>
                            <span class="text-orange-600 opacity-0 group-hover:opacity-100 transition-all duration-200 text-xs">
                                مشاهده ←
                            </span>
                        </div>
                    </div>
                </a>
            @endforeach

        </div>

        @if(count($comments) == 0)
            <div class="text-center py-20 text-gray-400">
                هنوز نظری ثبت نشده است
            </div>
        @endif
    </div>
@endsection