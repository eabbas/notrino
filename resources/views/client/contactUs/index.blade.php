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
    <script>
       let link = "{{ url('/') }}/";

    // ================ سبد هدر ================
    function renderCartHeader() {
        let cart = JSON.parse(localStorage.getItem("cart") || "[]");

        let cartCountHeader = document.getElementById('cartCountHeader');
        let cartCountHeaderBox = document.getElementById('cartCountHeaderBox');
        let cartItemsBox = document.getElementById('cartItemsBox');
        let cartTotalPrice = document.getElementById('cartTotalPrice');
        let cartEmpty = document.getElementById('cartEmpty');
        let cartFooter = document.getElementById('cartFooter');

        if (!cartItemsBox) return;

        let totalCount = 0;
        let totalPrice = 0;
        for (let i = 0; i < cart.length; i++) {
            totalCount += cart[i].quantity;
            totalPrice += cart[i].price * cart[i].quantity;
        }

        if (totalCount > 0) {
            cartCountHeader.classList.remove('hidden');
            cartCountHeader.classList.add('flex');
            cartCountHeader.querySelector('span').innerText = totalCount;
        } else {
            cartCountHeader.classList.add('hidden');
            cartCountHeader.classList.remove('flex');
        }

        cartCountHeaderBox.innerText = totalCount;

        if (cart.length === 0) {
            cartItemsBox.innerHTML = "";
            cartEmpty.classList.remove('hidden');
            cartEmpty.classList.add('flex');
            cartFooter.classList.add('hidden');
            return;
        }

        cartEmpty.classList.add('hidden');
        cartEmpty.classList.remove('flex');
        cartFooter.classList.remove('hidden');

        let html = "";
        for (let i = 0; i < cart.length; i++) {
            let item = cart[i];
            let img = item.image ? item.image : "{{ asset('storage/img/logo/Screenshot 2025-12-16 063243.png') }}";

            html += `
                <li class="border-b border-zinc-100 flex items-center p-2 gap-3">
                    <a href="${link}products/show/${item.id}" class="shrink-0">
                        <img src="${img}" alt="${item.title}" class="w-16 h-16 object-cover rounded-lg">
                    </a>
                    <div class="flex-1 min-w-0 flex flex-col gap-2">
                        <a href="${link}products/show/${item.id}" class="text-sm text-zinc-700 truncate">${item.title}</a>
                        <div class="flex items-center justify-between gap-2">
                            <div class="text-xs text-zinc-600">${Number(item.price).toLocaleString('fa-IR')} تومان</div>
                            <div class="flex h-8 items-center rounded-lg border border-gray-200 px-1">
                                <button type="button" onclick="changeCartCount(${item.id}, '+')" class="p-1 cursor-pointer">
                                    <svg class="fill-green-500" xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 256 256"><path d="M222,128a6,6,0,0,1-6,6H134v82a6,6,0,0,1-12,0V134H40a6,6,0,0,1,0-12h82V40a6,6,0,0,1,12,0v82h82A6,6,0,0,1,222,128Z"></path></svg>
                                </button>
                                <span class="text-sm text-zinc-700 w-6 text-center">${item.quantity}</span>
                                <button type="button" onclick="changeCartCount(${item.id}, '-')" class="p-1 cursor-pointer">
                                    <svg class="fill-red-500" xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 256 256"><path d="M222,128a6,6,0,0,1-6,6H40a6,6,0,0,1,0-12H216A6,6,0,0,1,222,128Z"></path></svg>
                                </button>
                            </div>
                        </div>
                    </div>
                </li>
            `;
        }
        cartItemsBox.innerHTML = html;
        cartTotalPrice.innerText = Number(totalPrice).toLocaleString('fa-IR');
    }

    function changeCartCount(proId, state) {
        let cart = JSON.parse(localStorage.getItem("cart") || "[]");

        let foundIndex = -1;
        for (let i = 0; i < cart.length; i++) {
            if (cart[i].id == proId) { foundIndex = i; break; }
        }
        if (foundIndex === -1) return;

        if (state === '+') cart[foundIndex].quantity++;
        if (state === '-') cart[foundIndex].quantity--;

        if (cart[foundIndex].quantity <= 0) {
            cart.splice(foundIndex, 1);
        }

        localStorage.setItem("cart", JSON.stringify(cart));
        renderCartHeader();
    }

    document.addEventListener('DOMContentLoaded', function() {
        renderCartHeader();
    });
    </script>

@endsection