<!doctype html>
<html lang="fa" dir="rtl">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="{{ asset('assets/js/jquery.js') }}"></script>
    <script src="{{ asset('assets/js/tailwind.js') }}"></script>
    <title>فراموشی رمز عبور | نوترینو</title>
    <style>
        input {
            transition: all 0.3s ease;
            color: #374151 !important;
        }

        input::placeholder {
            color: #9ca3af !important;
            opacity: 1;
        }

        input:focus {
            border-color: #f77219 !important;
            box-shadow: 0 0 0 3px rgba(247, 114, 25, 0.1) !important;
            color: #f77219 !important;
            outline: none !important;
        }

        input:focus::placeholder {
            color: #fbbf8c !important;
            opacity: 0.8;
        }

        input:focus+span svg,
        .group:focus-within span svg {
            color: #f77219 !important;
        }

        input:-webkit-autofill,
        input:-webkit-autofill:hover,
        input:-webkit-autofill:focus,
        input:-webkit-autofill:active {
            -webkit-background-clip: text;
            -webkit-text-fill-color: #374151 !important;
            transition: background-color 5000s ease-in-out 0s;
            box-shadow: inset 0 0 20px 20px #fef3e8 !important;
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

        .animate-fadeIn {
            animation: fadeIn 0.8s ease-out;
        }

        .bg-orange-gradient {
            background: linear-gradient(135deg, #fbbf8c 0%, #f77219 50%, #e06612 100%);
        }

        .btn-orange {
            background: linear-gradient(to left, #f77219, #fbbf8c);
            transition: all 0.3s ease;
        }

        .btn-orange:hover {
            background: linear-gradient(to left, #e06612, #f77219);
            transform: translateY(-2px);
            box-shadow: 0 10px 20px -5px rgba(247, 114, 25, 0.3);
        }

        .footer-orange {
            background: linear-gradient(to right, #f77219, #fbbf8c, #f77219);
        }

        /* استایل پیام */
        #message {
            transition: all 0.5s ease;
            z-index: 100;
        }
        #message.top-1\/10 {
            top: 10%;
        }

        /* استایل دکمه ارسال کد */
        .btn-send-code {
            background: #f77219;
            transition: all 0.3s ease;
        }
        .btn-send-code:hover {
            background: #e06612;
            transform: translateY(-1px);
            box-shadow: 0 4px 12px rgba(247, 114, 25, 0.3);
        }
        .btn-send-code:disabled {
            background: #fbbf8c;
            cursor: not-allowed;
            transform: none !important;
            box-shadow: none !important;
        }
    </style>
</head>

<body>

    <!-- پیام سیستم -->
    <div class="absolute top-0 opacity-0 invisible right-1/2 translate-x-1/2 w-2/3 lg:w-1/3 bg-white rounded-lg shadow-md transition-all duration-500 z-50" id="message">
        <div class="relative p-4">
            <svg xmlns="http://www.w3.org/2000/svg" class="size-4 absolute top-1/2 -translate-y-1/2 left-3 cursor-pointer" onclick="showMessage('close')" viewBox="0 0 384 512">
                <path d="M345 137c9.4-9.4 9.4-24.6 0-33.9s-24.6-9.4-33.9 0l-119 119L73 103c-9.4-9.4-24.6-9.4-33.9 0s-9.4 24.6 0 33.9l119 119L39 375c-9.4 9.4-9.4 24.6 0 33.9s24.6 9.4 33.9 0l119-119L311 409c9.4 9.4 24.6 9.4 33.9 0s9.4-24.6 0-33.9l-119-119L345 137z"/>
            </svg>
            <div id="messageContent"></div>
        </div>
    </div>

    <div class="w-full flex flex-col justify-start items-center md:flex-row-reverse">
        <!-- بخش تصویر و برند (نارنجی) -->
        <div class="flex justify-center max-sm:h-30 max-md:h-35 md:h-dvh bg-[#f77219] relative overflow-hidden w-full lg:w-1/2">
            <div class="absolute inset-0 opacity-10">
                <div class="absolute top-10 left-10 w-40 h-40 bg-white rounded-full blur-3xl"></div>
                <div class="absolute bottom-10 right-10 w-60 h-60 bg-orange-300 rounded-full blur-3xl"></div>
            </div>

            <div class="flex flex-col my-12 items-center justify-center relative z-10 w-full">
                <div class="w-full flex flex-row justify-center items-center animate-fadeIn">
                    <div class="text-center">
                        <h2 class="text-center font-bold text-white text-5xl mb-2 drop-shadow-lg">notrino</h2>
                        <div class="w-20 h-1 bg-white mx-auto rounded-full"></div>
                        <p class="text-white/80 text-sm mt-2">فروشگاه آنلاین</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- بخش فرم فراموشی رمز عبور -->
        <div class="w-full md:w-8/12 bg-white h-full flex flex-col max-md:justify-start justify-center mt-5 items-center px-4 lg:w-1/2">
            <div class="w-full flex flex-col items-center justify-center md:justify-center lg:w-115 md:w-10/12 px-4 animate-fadeIn">
                <h1 class="text-2xl md:text-3xl font-bold text-gray-800 mb-2">فراموشی رمز عبور</h1>
                <p class="text-gray-500 text-sm mb-8">برای بازیابی رمز عبور، شماره تلفن خود را وارد کنید</p>

                <div class="flex flex-col w-full">
                    <form action="{{ route('set_password') }}" class="flex flex-col items-center my-2 gap-4 w-full"
                        method="post" id="checkCodeForm">
                        @csrf

                        @if(session('error'))
                        <div class="w-full mb-4 p-3 bg-red-50 border-r-4 border-red-500 rounded-lg">
                            <div class="flex items-center gap-2 text-red-600">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                                <span>{{ session('error') }}</span>
                            </div>
                        </div>
                        @endif

                        <!-- فیلد شماره تلفن -->
                        <div class="relative w-full group">
                            <span class="absolute right-3 top-1/2 -translate-y-1/2 text-gray-400 group-focus-within:text-orange-500 transition-colors">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                                </svg>
                            </span>
                            <input type="text"
                                class="w-full pr-10 pl-4 py-3 rounded-xl border-2 border-gray-200 focus:border-orange-500 focus:ring-0 focus:outline-none transition-all duration-300 hover:border-orange-200 bg-gray-50/50"
                                name="phoneNumber" id="phoneNumber"
                                placeholder="شماره تلفن" required>
                        </div>

                        <!-- فیلد کد و دکمه ارسال -->
                        <div class="relative w-full group">
                            <span class="absolute right-3 top-1/2 -translate-y-1/2 text-gray-400 group-focus-within:text-orange-500 transition-colors">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 7a2 2 0 012 2m4 0a6 6 0 01-7.743 5.743L11 17H9v2H7v2H4a1 1 0 01-1-1v-2.586a1 1 0 01.293-.707l5.964-5.964A6 6 0 1121 9z"></path>
                                </svg>
                            </span>
                            <div class="flex flex-row items-center gap-2 w-full">
                                <input type="number"
                                    class="w-7/12 pr-10 pl-4 py-3 rounded-xl border-2 border-gray-200 focus:border-orange-500 focus:ring-0 focus:outline-none transition-all duration-300 hover:border-orange-200 bg-gray-50/50"
                                    name="code" placeholder="کد فعال‌سازی" required id="code">
                                <button type="button"
                                    class="w-5/12 text-sm lg:text-base h-full py-3 rounded-xl text-white cursor-pointer transition-all duration-300 shadow-md hover:shadow-lg btn-send-code"
                                    onclick="sendCode()" id="countDown">ارسال کد</button>
                            </div>
                        </div>

                        <!-- دکمه بازیابی -->
                        <!-- دکمه بازیابی -->
                        <button type="button" onclick="check(event)"
                            class="focus:bg-[#f77219] transition-all duration-400 text-center w-full bg-[#f77219] p-2 md:p-3 rounded-[10px] text-white cursor-pointer">
                            بازیابی رمز عبور
                        </button>

                        <!-- لینک‌های ورود و ثبت نام -->
                        <div class="w-full text-center mt-4">
                            <span class="text-gray-600">
                                <a href="{{ route('login') }}" class="text-orange-500 font-semibold hover:text-orange-600 transition-colors">ورود</a>
                                <span class="mx-2 text-gray-300">|</span>
                                <a href="{{ route('signup') }}" class="text-orange-500 font-semibold hover:text-orange-600 transition-colors">ثبت نام</a>
                            </span>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- فوتر موبایل (نارنجی) -->
    <footer class="md:hidden">
        <div class="footer-orange w-full h-12 absolute bottom-0 flex flex-row gap-4 justify-center items-center text-white shadow-lg">
            <div class="flex items-center gap-2">
                <span class="text-sm">آکادمی فائوس</span>
            </div>
            <a href="tel:09147794595" class="text-sm hover:underline flex items-center gap-1">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                </svg>
                <b>09147794595</b>
            </a>
        </div>
    </footer>

    <!-- فوتر دسکتاپ (نارنجی) -->
    <div class="hidden md:block fixed bottom-4 left-4">
        <a href="tel:09147794595" class="flex items-center gap-2 bg-white px-4 py-2 rounded-full shadow-lg hover:shadow-xl transition-shadow border border-orange-100">
            <div class="w-8 h-8 bg-orange-100 rounded-full flex items-center justify-center">
                <svg class="w-4 h-4 text-orange-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                </svg>
            </div>
            <span class="text-gray-700 font-medium">09147794595</span>
        </a>
    </div>

    <!-- پاپ‌آپ اسکن QR -->
    <div class="fixed bg-black/50 w-full h-full top-0 right-0 flex justify-center items-center invisible opacity-0 transition-all duration-300 z-50" id="popupQr">  
        <div class="w-9/12 h-1/2 rounded-sm flex justify-center items-center p-5 transition-all duration-300 scale-95 relative">
            <div class="absolute w-full h-full bg-white flex flex-row items-center justify-center invisible opacity-0 rounded-md" id="loading"></div>
            <div class="p-3 rounded-full bg-white absolute top-1 right-1 z-50">
                <svg xmlns="http://www.w3.org/2000/svg" class="size-4" onclick="scanQr('close')" viewBox="0 0 384 512">
                    <path fill="red" d="M345 137c9.4-9.4 9.4-24.6 0-33.9s-24.6-9.4-33.9 0l-119 119L73 103c-9.4-9.4-24.6-9.4-33.9 0s-9.4 24.6 0 33.9l119 119L39 375c-9.4 9.4-9.4 24.6 0 33.9s24.6 9.4 33.9 0l119-119L311 409c9.4 9.4 24.6 9.4 33.9 0s9.4-24.6 0-33.9l-119-119L345 137z"/>
                </svg>
            </div>
            <div id="reader"></div>
        </div>
    </div>

    <style>
        #reader{
            width: 100%;
            height: 100%;
        }
        #reader>video{
            width: 100%;
            height: 100%;
        }
    </style>

    <script>
        let message = document.getElementById('message')
        let code = document.getElementById('code')
        let element = document.createElement('div')
        element.classList = "text-sm font-bold flex flex-row items-center justify-center py-2 gap-2 lg:gap-3"

        function sendCode() {
            let phoneNumber = document.getElementById('phoneNumber')
            if (phoneNumber.value == "") {
                showMessage('open')
                element.innerHTML = `
                    <span class="text-red-500">!</span>
                    <span>لطفا شماره تلفن را وارد کنید</span>
                `
                document.getElementById('messageContent').innerHTML = ''
                document.getElementById('messageContent').appendChild(element)
                setTimeout(()=>{
                    showMessage('close')
                }, 2000)
            } else {
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': "{{ csrf_token() }}"
                    }
                })
                $.ajax({
                    url: "{{ route('send_code') }}",
                    type: "POST",
                    dataType: "json",
                    data: {
                        'phoneNumber': phoneNumber.value,
                    },
                    success: function(data) {
                        console.log(data)
                        counter()
                        console.log(data)
                        showMessage('open')
                        element.innerHTML = `
                            <span>✅</span>
                            <span class="text-shadw-lg">کد ارسال شد</span>
                        `
                        document.getElementById('messageContent').innerHTML = ''
                        document.getElementById('messageContent').appendChild(element)
                        setTimeout(()=>{
                            showMessage('close')
                        }, 2000)
                    },
                    error: function() {
                        showMessage('open')
                        element.innerHTML = `
                            <span>❌</span>
                            <span class="text-shadw-lg">خطا در دریافت داده!</span>
                        `
                        document.getElementById('messageContent').innerHTML = ''
                        document.getElementById('messageContent').appendChild(element)
                        setTimeout(()=>{
                            showMessage('close')
                        }, 2500)
                    }
                })
            }
        }
        
        let countDown = document.getElementById('countDown')
        function counter(){
            let phoneNumber = document.getElementById('phoneNumber')
            countDown.disabled = true
            countDown.setAttribute('dir', 'ltr')
            let count = 120
            let result = setInterval(()=>{
                let minute = Math.floor(count/60)
                let seconds = count % 60
                count -=1
                if(count < 0){
                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': "{{ csrf_token() }}"
                        }
                    })
                    $.ajax({
                        url: "{{ route('removeActivationCode') }}",
                        type: "POST",
                        dataType: "json",
                        data: {
                            'phoneNumber': phoneNumber.value
                        },
                        success: function(data){
                            console.log(data)
                            countDown.disabled = false
                            countDown.removeAttribute('dir')
                            countDown.innerText = "ارسال مجدد"
                        },
                        error: function(){
                            showMessage('open')
                            element.innerHTML = `
                                <span>❌</span>
                                <span class="text-shadw-lg">خطا در دریافت اطلاعات!</span>
                            `
                            document.getElementById('messageContent').innerHTML = ''
                            document.getElementById('messageContent').appendChild(element)
                            setTimeout(()=>{
                                showMessage('close')
                            }, 2500)
                        }
                    })
                    clearInterval(result)
                }
                countDown.innerText = minute.toString().padStart(2,"0") + " : " + seconds.toString().padStart(2,"0");
            }, 1000)
        }

        let checkCodeForm = document.getElementById('checkCodeForm')

        function check(e) {
            e.preventDefault()
            let phoneNumber = document.getElementById('phoneNumber')
            console.log(phoneNumber)
            if (phoneNumber.value == "") {
                showMessage('open')
                element.innerHTML = `
                    <span class="text-red-500">!</span>
                    <span>لطفا شماره تلفن را وارد کنید</span>
                `
                document.getElementById('messageContent').innerHTML = ''
                document.getElementById('messageContent').appendChild(element)
                setTimeout(()=>{
                    showMessage('close')
                }, 2000)
            } else if (code.value == "") {
                showMessage('open')
                element.innerHTML = `
                    <span class="text-red-500">!</span>
                    <span>لطفا کد را وارد کنید</span>
                `
                document.getElementById('messageContent').innerHTML = ''
                document.getElementById('messageContent').appendChild(element)
                setTimeout(()=>{
                    showMessage('close')
                }, 2000)
            } else {
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': "{{ csrf_token() }}"
                    }
                })
                $.ajax({
                    url: "{{ route('checkAuth') }}",
                    type: "POST",
                    dataType: "json",
                    data: {
                        'phoneNumber': phoneNumber.value,
                        'code': code.value
                    },
                    success: function(user) {
                        console.log(user)
                        if (!user.validate) {
                            showMessage('open')
                            element.innerHTML = `
                                <span class="text-red-500">شما قبلا ثبت نام نکرده اید!</span>
                            `
                            document.getElementById('messageContent').innerHTML = ''
                            document.getElementById('messageContent').appendChild(element)
                            setTimeout(()=>{
                                showMessage('close')
                                location.assign("{{ route('signup') }}")
                            }, 2000)
                        } else {
                            if (!user.checkCode) {
                                showMessage('open')
                                element.innerHTML = `
                                    <span>❌</span>
                                    <span class="text-shadw-lg">کد وارد شده نامعتبر!</span>
                                `
                                document.getElementById('messageContent').innerHTML = ''
                                document.getElementById('messageContent').appendChild(element)
                                setTimeout(()=>{
                                    showMessage('close')
                                }, 2000)
                            }
                            if (user.checkCode) {
                                checkCodeForm.submit()
                            }
                        }
                    },
                    error: function() {
                        showMessage('open')
                        element.innerHTML = `
                            <span>❌</span>
                            <span class="text-shadw-lg">خطا در دریافت اطلاعات!</span>
                        `
                        document.getElementById('messageContent').innerHTML = ''
                        document.getElementById('messageContent').appendChild(element)
                        setTimeout(()=>{
                            showMessage('close')
                        }, 2500)
                    }
                })
            }
        }
        
        function showMessage(state){
            if(state == 'open'){
                message.classList.remove('top-0')
                message.classList.remove('opacity-0')
                message.classList.remove('invisible')
                message.classList.add('top-1/10')
            }
            if(state == 'close'){
                message.classList.remove('top-1/10')
                message.classList.add('top-0')
                message.classList.add('opacity-0')
                message.classList.add('invisible')
            }
        }
        
        document.addEventListener('DOMContentLoaded', function() {
            let shopIcon = document.getElementById('shopIcon');
            let comingSoon = document.getElementById('comingSoon');
            let contentCommingSoon = document.getElementById('contentCommingSoon');
            let closeBtn = document.getElementById('closeModal');
            let confirmBtn = document.getElementById('closeForm');

            if (shopIcon) {
                shopIcon.addEventListener('click', function(e) {
                    e.preventDefault()
                    openModal()
                })
            }

            function openModal() {
                comingSoon.classList.remove('hidden')
                contentCommingSoon.classList.remove('scale-95', 'opacity-0')
                contentCommingSoon.classList.add('scale-100', 'opacity-100')
            }

            function closeModal() {
                contentCommingSoon.classList.remove('scale-100', 'opacity-100')
                contentCommingSoon.classList.add('scale-95', 'opacity-0')
                comingSoon.classList.add('hidden')
            }

            if (closeBtn) closeBtn.addEventListener('click', closeModal)
            if (confirmBtn) confirmBtn.addEventListener('click', closeModal)
        })

        let cartIcon = document.getElementById('cartIcon');
        let cartModal = document.getElementById('cart');
        let cartContent = document.getElementById('contentCart');
        let closeCartBtn = document.getElementById('closeCart');
        let closeCartForm = document.getElementById('closeFormCart');

        if (cartIcon) {
            cartIcon.addEventListener('click', function(e) {
                e.preventDefault();
                openCartModal();
            });
        }

        function openCartModal() {
            cartModal.classList.remove('hidden')
            cartContent.classList.remove('scale-95', 'opacity-0')
            cartContent.classList.add('scale-100', 'opacity-100')
        }

        function closeCart() {
            cartContent.classList.remove('scale-100', 'opacity-100')
            cartContent.classList.add('scale-95', 'opacity-0')
            cartModal.classList.add('hidden')
        }
        if (closeCartBtn) closeCartBtn.addEventListener('click', closeCart)
        if (closeCartForm) closeCartForm.addEventListener('click', closeCart)
        
        function scanQr(state) {
            // تابع اسکن QR
        }
    </script>
</body>
</html>