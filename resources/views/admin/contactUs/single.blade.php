@extends('document')
@section('title', "جزئیات نظر - فروشگاه نوترینو")
@section('content')

<div class="pt-32 px-4 bg-white">
    <div class="max-w-3xl mx-auto pt-24">
        
        <!-- دکمه بازگشت -->
        <a href="{{ route('contactUs.commentList') }}" class="inline-flex items-center gap-2 text-orange-500 hover:text-orange-600 mb-8 group transition-all">
            <svg class="w-5 h-5 group-hover:-translate-x-1 transition" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
            </svg>
            <span>بازگشت به لیست نظرات</span>
        </a>

        <!-- آواتار و نام کاربر -->
        <div class="text-center mb-8">
            <h1 class="text-2xl font-bold text-gray-800">{{ $user->name }} {{ $user->family }}</h1>
            <div class="flex justify-center gap-3 mt-2 text-sm text-gray-500">
                <span>📞 {{ $user->phoneNumber }}</span>
                <span>🆔 {{ $user->id }}</span>
            </div>
        </div>

        <!-- کارت نظر -->
        <div class="bg-white rounded-2xl shadow-lg overflow-hidden border border-orange-200">
            <div class="border-b border-orange-100 px-6 py-3 text-right bg-orange-50/30">
                <span class="text-sm text-orange-500">📅 {{ $user->created_at ?? 'تاریخ نامشخص' }}</span>
            </div>

            <div class="p-8">
                <div class="flex items-center gap-2 mb-4">
                    {{-- <span class="text-orange-500 text-3xl leading-none">"</span> --}}
                    <span class="text-orange-500 font-medium">متن نظر</span>
                </div>
                <p class="text-gray-700 leading-loose text-lg">
                    {{ $user->comment }}
                </p>
            </div>

            {{-- <div class="px-8 py-5 bg-gray-50 border-t border-orange-100 flex justify-between items-center">
                <div class="text-sm text-gray-400">
                    پاسخ شما مودبانه و مفید باشد
                </div>
                <button class="bg-orange-500 hover:bg-orange-600 text-white px-6 py-2 rounded-full transition shadow-md flex items-center gap-2">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h10a8 8 0 018 8v2M3 10l6 6m-6-6l6-6"></path>
                    </svg>
                    پاسخ به نظر
                </button>
            </div> --}}
        </div>

    </div>
</div>

@endsection