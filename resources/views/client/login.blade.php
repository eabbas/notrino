<!doctype html>
<html lang="fa" dir="rtl">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    {{-- <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script> --}}
    <script src="{{ asset('assets/js/jquery.js') }}"></script>
    <script src="{{ asset('assets/js/tailwind.js') }}"></script>
    <title>ورود | فروشگاه آنلاین</title>
   <style>
    /* استایل کلی برای inputها */
    input {
        transition: all 0.3s ease;
        color: #374151 !important; /* خاکستری تیره برای متن */
    }
    
    /* استایل برای placeholder */
    input::placeholder {
        color: #9ca3af !important; /* خاکستری روشن */
        opacity: 1;
    }
    
    /* حالت focus */
    input:focus {
        border-color: #f97316 !important;
        box-shadow: 0 0 0 3px rgba(249, 115, 22, 0.1) !important;
        color: #f97316 !important; /* نارنجی برای متن در حالت focus */
        outline: none !important;
    }
    
    /* placeholder در حالت focus */
    input:focus::placeholder {
        color: #fed7aa !important; /* نارنجی روشن */
        opacity: 0.8;
    }
    
    /* آیکون‌ها */
    input:focus + span svg,
    .group:focus-within span svg {
        color: #f97316 !important;
    }
    
    /* حذف هرگونه رنگ آبی پیش‌فرض مرورگر */
    input:-webkit-autofill,
    input:-webkit-autofill:hover, 
    input:-webkit-autofill:focus, 
    input:-webkit-autofill:active {
        -webkit-background-clip: text;
        -webkit-text-fill-color: #374151 !important;
        transition: background-color 5000s ease-in-out 0s;
        box-shadow: inset 0 0 20px 20px #fff9f0 !important;
    }
    
    /* بقیه استایل‌ها */
    @keyframes fadeIn {
        from { opacity: 0; transform: translateY(20px); }
        to { opacity: 1; transform: translateY(0); }
    }
    
    .animate-fadeIn {
        animation: fadeIn 0.8s ease-out;
    }
    
    .bg-orange-gradient {
        background: linear-gradient(135deg, #fb923c 0%, #f97316 50%, #ea580c 100%);
    }
    
    .btn-orange {
        background: linear-gradient(to left, #f97316, #fb923c);
        transition: all 0.3s ease;
    }
    
    .btn-orange:hover {
        background: linear-gradient(to left, #ea580c, #f97316);
        transform: translateY(-2px);
        box-shadow: 0 10px 20px -5px rgba(249, 115, 22, 0.3);
    }
    
    .footer-orange {
        background: linear-gradient(to right, #f97316, #fb923c, #f97316);
    }
</style>
</head>

<body>
   <!-- جایگزین بخش message موجود -->
<div class="fixed top-5 right-1/2 translate-x-1/2 w-2/3 lg:w-1/3 bg-white rounded-lg shadow-lg transition-all duration-500 z-50 opacity-0 invisible" id="message">
    <div class="relative p-4">
        <svg xmlns="http://www.w3.org/2000/svg"
            class="size-4 absolute top-1/2 -translate-y-1/2 left-3 cursor-pointer text-gray-500 hover:text-gray-700 transition-colors" 
            onclick="showMessage('close')"
            viewBox="0 0 384 512">
            <path d="M345 137c9.4-9.4 9.4-24.6 0-33.9s-24.6-9.4-33.9 0l-119 119L73 103c-9.4-9.4-24.6-9.4-33.9 0s-9.4 24.6 0 33.9l119 119L39 375c-9.4 9.4-9.4 24.6 0 33.9s24.6 9.4 33.9 0l119-119L311 409c9.4 9.4 24.6 9.4 33.9 0s9.4-24.6 0-33.9l-119-119L345 137z"/>
        </svg>
        <div id="messageContent" class="pr-6"></div>
    </div>
</div>
    <div class="w-full flex flex-col justify-start items-center md:flex-row-reverse">
         <a href="{{ route('home') }}" class="absolute top-5 right-5 flex items-center gap-2 bg-orange-100 hover:bg-orange-200 text-orange-600 hover:text-orange-700 px-4 py-2.5 rounded-2xl transition-all duration-300 shadow-sm hover:shadow-md border border-orange-200/50 backdrop-blur-sm font-medium text-sm group">
            <svg class="w-4 h-4 transition-transform duration-300 group-hover:-translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-4 0a1 1 0 01-1-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 01-1 1h-2z"/>
            </svg>
            <span>خانه</span>
        </a>
        <!-- بخش راست با تم نارنجی -->
        <div class="flex justify-center max-sm:h-30 max-md:h-35 md:h-dvh bg-orange-gradient relative overflow-hidden w-full lg:w-1/2">
            <!-- المان‌های تزئینی -->
            <div class="absolute inset-0 opacity-10">
                <div class="absolute top-10 left-10 w-40 h-40 bg-white rounded-full blur-3xl"></div>
                <div class="absolute bottom-10 right-10 w-60 h-60 bg-orange-300 rounded-full blur-3xl"></div>
            </div>
            
            <div class="flex flex-col my-12 items-center justify-center relative z-10 w-full">
                <div class="w-full flex flex-row justify-center items-center animate-fadeIn">
                    {{-- <img class="max-md:w-4/12 w-8/12" src="{{ asset('assets/img/e125edbd-f303-47f3-9dbc-af414f99ccb2.webp') }}" alt=""> --}}
                    <div class="text-center">
                        <a href="{{ route('home') }}" class="text-center font-bold text-white text-5xl mb-2 drop-shadow-lg">notrino</a>
                        <div class="w-20 h-1 bg-white mx-auto rounded-full"></div>
                        <p class="text-white/80 text-sm mt-2">فروشگاه آنلاین</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- بخش فرم ورود -->
        <div class="w-full md:w-8/12 bg-white h-full flex flex-col max-md:justify-start justify-center mt-5 items-center px-4 lg:w-1/2">
            <div class="w-full flex flex-col items-center justify-center md:justify-center lg:w-115 md:w-10/12 px-4 animate-fadeIn">
                <h1 class="text-2xl md:text-3xl font-bold text-gray-800 mb-2">ورود به حساب کاربری</h1>
                <p class="text-gray-500 text-sm mb-8">برای ورود اطلاعات خود را وارد کنید</p>
                
                <div class="flex flex-col w-full">
                    <form action="{{ route('user.check') }}" class="flex flex-col items-center my-2 gap-4 w-full"
                        method="post">
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
                        @csrf
                        
                        <!-- فیلد شماره تلفن -->
                        {{-- <div class="relative w-full group">
                            
                            <input type="text"
                                class="w-full pr-10 pl-4 py-3 rounded-xl border-2 border-gray-200 focus:border-orange-500 focus:ring-0 focus:outline-none transition-all duration-300 hover:border-orange-200 bg-gray-50/50"
                                name="phoneNumber" 
                                placeholder="شماره تلفن"
                                dir="ltr">
                        </div> --}}
                            <div class="relative w-full group">

                            <input type="number"
                                class="w-full pr-10 pl-4 py-3 rounded-xl border-2 border-gray-200 focus:border-orange-500 focus:ring-0 focus:outline-none transition-all duration-300 hover:border-orange-200 bg-gray-50/50"
                                name="phoneNumber" 
                                id="phoneNumber"
                                placeholder="شماره تلفن">
                        </div>
                        
                        <!-- فیلد کلمه عبور -->
                        <!--<div class="relative w-full group">-->
                        <!--    <span class="absolute right-3 top-1/2 -translate-y-1/2 text-gray-400 group-focus-within:text-orange-500 transition-colors">-->
                        <!--        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">-->
                        <!--            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path>-->
                        <!--        </svg>-->
                        <!--    </span>-->
                        <!--    <input type="password"-->
                        <!--        class="w-full pr-10 pl-4 py-3 rounded-xl border-2 border-gray-200 focus:border-orange-500 focus:ring-0 focus:outline-none transition-all duration-300 hover:border-orange-200 bg-gray-50/50"-->
                        <!--        name="password" -->
                        <!--        placeholder="کلمه عبور">-->
                        <!--</div>-->
                         <div class="w-full" id="login">
                            <div class="w-full flex flex-row items-center gap-3">
                                <input type="number"
                                    class="w-full pr-10 pl-4 py-3 rounded-xl border-2 border-gray-200 focus:border-orange-500 focus:ring-0 focus:outline-none transition-all duration-300 bg-gray-50/50"
                                    name="code" placeholder="کد" required id="code">
                                <button type="button"
                                    class="w-4/12 text-xs lg:text-base h-full p-2 md:p-[9px] rounded-[7px] bg-[#f77219]  text-white cursor-pointer"
                                    onclick="sendCode()" id="countDown">ارسال کد </button>
                            </div>
                        </div>
                        <div class="w-full flex flex-row items-center justify-between" id="loginWay">
                            <a href="{{ route('forget_password') }}"
                                class="text-[#f26b18] inline-block max-md:my-1 my-4 max-md:text-sm">فراموشی رمز عبور</a>
                            <span class="text-[#f26b18] inline-block max-md:my-1 my-4 max-md:text-sm cursor-pointer"
                                onclick="loginWithPassKey(this)">ورود با رمز عبور</span>
                        </div>
                        <!-- دکمه ورود -->
                        <button type="submit"
                            class="btn-orange w-full text-center text-white p-3.5 rounded-xl font-medium text-lg mt-4 cursor-pointer shadow-lg shadow-orange-200">
                            ورود به حساب
                        </button>
                        
                        <!-- لینک ثبت نام -->
                        <div class="w-full text-center mt-4">
                            <span class="text-gray-600">
                                حساب کاربری ندارید؟
                                <a href="{{ route('signup') }}" class="text-orange-500 font-semibold hover:text-orange-600 transition-colors mr-1">
                                    ثبت نام کنید!
                                </a>
                            </span>
                        </div>
                    </form>
                </div>
                
             
                
            </div>
        </div>
    </div>
    
    <!-- فوتر موبایل -->
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

    <!-- فوتر دسکتاپ (اختیاری) -->
    <div class="hidden md:block fixed bottom-4 right-4">
        <a href="tel:09147794595" class="flex items-center gap-2 bg-white px-4 py-2 rounded-full shadow-lg hover:shadow-xl transition-shadow border border-orange-100">
            <div class="w-8 h-8 bg-orange-100 rounded-full flex items-center justify-center">
                <svg class="w-4 h-4 text-orange-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                </svg>
            </div>
            <span class="text-gray-700 font-medium">09147794595</span>
        </a>
    </div>
    <script>
     let phoneNumber = document.getElementById('phoneNumber')


        let message = document.getElementById('message')
        let code = document.getElementById('code')
        let element = document.createElement('div')
        element.classList = "text-sm font-bold flex flex-row items-center justify-center py-3 gap-2 lg:gap-3"

        function sendCode() {
           
            let phoneNumber = document.getElementById('phoneNumber')
            if (phoneNumber.value == "") {
                showMessage('open')
                element.innerHTML = `
                        <span class="text-red-500 z-9999 inset-0">!</span>
                        <span>لطفا شماره تلفن را وارد کنید</span>
                    `
                message.children[0].appendChild(element)
                setTimeout(() => {
                    showMessage('close')
                }, 2000)
            } else {
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': "{{ csrf_token() }}"
                    }
                })
                $.ajax({
                    url: "{{ route('loginWithActivationCode') }}",
                    type: "POST",
                    dataType: "json",
                    data: {
                        'phoneNumber': phoneNumber.value,
                    },
                    success: function(data) {
                        console.log(data)
                        if (!data) {
                            showMessage('open')
                            element.innerHTML = `
                                <span>✅</span>
                                <span class="text-shadw-lg">کد ارسال شد</span>
                            `
                             counter()
                            message.children[0].appendChild(element)
                            setTimeout(() => {
                                showMessage('close')
                            }, 2000)
                        } else {
                            showMessage('open')
                            element.innerHTML = `
                                <span class="text-red-500">ابتدا ثبت نام کنید !</span>
                            `
                            message.children[0].appendChild(element)
                            setTimeout(() => {
                                showMessage('close')
                                // location.assign("{{ route('login') }}")
                            }, 2000)
                        }
                    },
                    error: function() {
                        showMessage('open')
                        element.innerHTML = `
                            <span>❌</span>
                            <span class="text-shadw-lg">خطا در دریافت اطلاعات!</span>
                        `
                        message.children[0].appendChild(element)
                        setTimeout(() => {
                            showMessage('close')
                        }, 2500)
                    }
                })
            }
        }
        function showMessage(state) {
            if (state == 'open') {
                message.classList.remove('top-0')
                message.classList.remove('opacity-0')
                message.classList.remove('invisible')
                message.classList.add('top-2/10')
            }
            if (state == 'close') {
                message.classList.remove('top-2/10')
                message.classList.add('top-0')
                message.classList.add('opacity-0')
                message.classList.add('invisible')
            }
        }
         function counter() {
            let phoneNumber = document.getElementById('phoneNumber')
            countDown.classList.add('cursor-no-drop')
            countDown.classList.remove('cursor-pointer')
            countDown.classList.remove('hover:bg-[#f77219]')
            countDown.classList.add('hover:bg-[#f77219]')
            countDown.classList.remove('bg-(--primary-color)')
            countDown.classList.add('bg-(--primary-color)/50')
            countDown.setAttribute('disabled', true)
            countDown.setAttribute('dir', 'ltr')
            let count = 120
            let result = setInterval(() => {
                let minute = Math.floor(count / 60)
                let seconds = count % 60
                count -= 1
                if (count < 0) {

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
                        success: function(data) {
                            console.log(data)
                            countDown.classList.remove('cursor-no-drop')
                            countDown.classList.add('bg-(--primary-color)')
                            countDown.classList.remove('bg-(--primary-color)/50')
                            countDown.classList.add('cursor-pointer')
                            countDown.classList.add('hover:bg-(--hover-primary-color)')
                            countDown.classList.remove('hover:bg-(--hover-primary-color)/50')
                            countDown.removeAttribute('disabled')
                            countDown.removeAttribute('dir')
                            countDown.innerText = "ارسال مجدد"
                        },
                        error: function() {
                            showMessage('open')
                            element.innerHTML = `
                                <span>❌</span>
                                <span class="text-shadw-lg">خطا در دریافت اطلاعات!</span>
                            `
                            message.children[0].appendChild(element)
                            setTimeout(() => {
                                showMessage('close')
                            }, 2500)
                        }
                    })
                    clearInterval(result)
                }
                countDown.innerText = minute.toString().padStart(2, "0") + " : " + seconds.toString().padStart(2,
                    "0");
            }, 1000)
        }
     let login = document.getElementById('login')
        let loginWay = document.getElementById('loginWay')
         function loginWithPassKey(el) {
            login.innerHTML = `
                                    <input type="password"
                                        class="w-full pr-10 pl-4 py-3 rounded-xl border-2 border-gray-200 focus:border-orange-500 focus:ring-0 focus:outline-none transition-all duration-300 hover:border-orange-200 bg-gray-50/50"
                                        name="password" placeholder="کلمه عبور" required>
                                `
            el.parentElement.children[1].remove()
            let span = document.createElement('span')
            span.classList = "text-[#f77219] inline-block max-md:my-1 my-4 max-md:text-sm cursor-pointer"
            span.setAttribute('onclick', 'loginWithActivationCode(this)')
            span.innerText = "ورود با کد فعال ساز"
            loginWay.appendChild(span)
        }
          function loginWithActivationCode(el) {
            login.innerHTML = `
                                    <div class="w-full flex flex-row items-center gap-3">
                                        <input type="number"
                                            class="w-full pr-10 pl-4 py-3 rounded-xl border-2 border-gray-200 focus:border-orange-500 focus:ring-0 focus:outline-none transition-all duration-300 hover:border-orange-200 bg-gray-50/50"
                                            name="code" placeholder="کد" required id="code">
                                        <button type="button"
                                            class="w-4/12 text-xs lg:text-base h-full p-2 md:p-[9px] rounded-[7px] bg-[#f77219] text-white cursor-pointer"
                                            onclick="sendCode()" id="countDown">ارسال کد </button>
                                    </div>
                                `
            el.parentElement.children[1].remove()
            let span = document.createElement('span')
            span.classList = "text-[#f77219] inline-block max-md:my-1 my-4 max-md:text-sm cursor-pointer"
            span.setAttribute('onclick', 'loginWithPassKey(this)')
            span.innerText = "ورود با رمز عبور"
            loginWay.appendChild(span)
        }
    </script>
</body>

</html>