@extends('document')
@section('title', "صفحه ارتباط با ما")
@section('content')

    <main class="pt-24 md:pt-48 px-2 md:px-10">
        <div class="mb-8 border-1 border-zinc-200 rounded-2xl p-4">
                @if($contactUs)
                @foreach ($contactUs as $contact)
                <p class="text-xl md:text-3xl text-(--color-primary-600) font-DANAEXTRABOLD mt-6 mb-10 text-center md:max-w-4xl mx-auto">
                    {{ $contact->title }}
                </p>
  
                <ul class="text-zinc-800 font-DANALIGHT text-xs md:text-sm leading-7 md:leading-7 leading-7 mt-5 space-y-6 md:max-w-4xl mx-auto">
                    <li>
                        {{ $contact->description }}
                    </li>
               
                </ul>
         
            @endforeach
            @endif
            <div class="md:max-w-2xl mx-auto mt-10">
              <span class="text-(--color-primary-600) text-lg font-DANABOLD">
                ارسال نظرات
              </span>
              <form action="{{ route('comment.store') }}" method="post">
                @csrf
              <div class="py-3">
                <div class="mt-6 mb-2 text-sm text-zinc-700">
                  ما آماده انتقادات و پیشنهادات شما هستم
                </div>
                <input type="text" name="name" placeholder="نام  " class="mb-4 focus:shadow-primary-outline text-sm leading-5.6 block w-full appearance-none rounded-lg border-1 border-solid border-(--color-zinc-300) bg-white bg-clip-padding p-3 font-normal text-(--color-zinc-700) outline-none transition-all focus:border-(--color-primary-300) focus:outline-none" required>
                <input type="text" name="family" placeholder="نام خانوادگی  " class="mb-4 focus:shadow-primary-outline text-sm leading-5.6 block w-full appearance-none rounded-lg border-1 border-solid border-(--color-zinc-300) bg-white bg-clip-padding p-3 font-normal text-(--color-zinc-700) outline-none transition-all focus:border-(--color-primary-300) focus:outline-none" required>
                <input type="text" name="enmail" placeholder="ایمیل" class="mb-4 focus:shadow-primary-outline text-sm leading-5.6 block w-full appearance-none rounded-lg border-1 border-solid border-(--color-zinc-300) bg-white bg-clip-padding p-3 font-normal text-(--color-zinc-700) outline-none transition-all focus:border-(--color-primary-300) focus:outline-none">
                <input type="text" name="phoneNumber" placeholder="شماره تماس" class="mb-4 focus:shadow-primary-outline text-sm leading-5.6 block w-full appearance-none rounded-lg border-1 border-solid border-(--color-zinc-300) bg-white bg-clip-padding p-3 font-normal text-(--color-zinc-700) outline-none transition-all focus:border-(--color-primary-300) focus:outline-none" required>
                <textarea name="comment" placeholder="متن پیام" name="mailTicket" cols="30" rows="7" class="focus:shadow-primary-outline text-sm leading-5.6 ease block w-full appearance-none rounded-lg border-1 border-solid border-(--color-zinc-300) bg-white bg-clip-padding p-3 font-normal text-(--color-zinc-700) outline-none transition-all focus:border-(--color-primary-400) focus:outline-none" required></textarea>
                <button class="mx-auto w-full cursor-pointer px-2 py-3 mt-5 text-sm bg-(--color-primary-500) hover:bg-(--color-primary-400) transition text-(--color-zinc-100) rounded-lg">
                  ارسال پیام
                </button>
              </div>
              </form>
            </div>
        </div>
    </main>

    <script src="{{ asset('assets/js/hamberger.js') }}"></script>

@endsection