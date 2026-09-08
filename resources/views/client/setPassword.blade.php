<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ذخیره رمز جدید | نوترینو</title>
    <script src="{{ asset('assets/js/jquery.js') }}"></script>
    <script src="{{ asset('assets/js/tailwind.js') }}"></script>
    <style>
        :root {
            --primary-color: #eb3254;
            --hover-primary-color: #d52b4a;
        }
        body {
            font-family: system-ui, -apple-system, 'Segoe UI', Roboto, 'Helvetica Neue', sans-serif;
            background-color: #F9FAFB;
            padding-bottom: 0;
        }
        .bg-\[\--primary-color\] { background-color: var(--primary-color); }
        .hover\:bg-\[\--hover-primary-color\]:hover { background-color: var(--hover-primary-color); }
        .border-\[\--primary-color\] { border-color: var(--primary-color); }
        .text-\[\--primary-color\] { color: var(--primary-color); }
        .focus\:border-\[\--primary-color\]:focus { border-color: var(--primary-color); }
        
        /* استایل‌های reader برای QR */
        #reader {
            width: 100%;
            height: 100%;
        }
        #reader > video {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        /* لودر */
        .loading-wave {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 8px;
        }
        .loading-bar {
            width: 8px;
            height: 30px;
            background: var(--primary-color);
            border-radius: 4px;
            animation: wave 1.2s ease-in-out infinite;
        }
        .loading-bar:nth-child(2) { animation-delay: 0.2s; }
        .loading-bar:nth-child(3) { animation-delay: 0.4s; }
        .loading-bar:nth-child(4) { animation-delay: 0.6s; }
        @keyframes wave {
            0%, 100% { transform: scaleY(0.5); }
            50% { transform: scaleY(1.5); }
        }
    </style>
</head>
<body>
    <!-- Main Container -->
    <div class="w-full min-h-screen flex flex-col justify-start items-center md:flex-row-reverse">
        <!-- Right side (branding) - با پس‌زمینه قرمز و نوشته نوترینو -->
        <div class="flex justify-center max-sm:h-30 max-md:h-35 md:h-dvh md:w-4/12 lg:w-5/12 xl:w-6/12 bg-[#eb3254]">
            <div class="flex flex-col my-12 items-center justify-center w-full">
                <a href="#" class="w-full flex flex-row justify-center items-center">
                    <!-- جایگزین لوگو با نوشته نوترینو به رنگ سفید -->
                    <span class="text-4xl md:text-5xl font-extrabold text-white tracking-tight drop-shadow-lg">نوترینو</span>
                </a>
                <p class="mt-4 text-white/80 text-sm">پلتفرم هوشمند یادگیری</p>
            </div>
        </div>

        <!-- Left side (form) -->
        <div class="w-10/12 md:w-8/12 bg-white h-full flex flex-col max-md:justify-start justify-center mt-5 items-center px-4 py-8 md:py-0">
            <div class="w-full flex flex-col items-center justify-center md:justify-center lg:w-115 md:w-10/12 px-4">
                <!-- نمایش نوشته نوترینو در موبایل (به رنگ قرمز) -->
                <div class="lg:hidden mb-6">
                    <span class="text-3xl font-bold text-[#eb3254]">نوترینو</span>
                </div>
                <h1 class="text-base md:text-2xl font-bold text-gray-800">ذخیره رمز جدید</h1>
                <div class="flex flex-col w-full">
                    <form action="{{ route('save_password') }}" class="flex flex-col items-center my-6 gap-3 w-full" method="post" id="checkCodeForm">
                        @csrf
                        <input type="hidden" name="user_id" value="{{ $user->id ?? '' }}">
                        <input type="password" class="placeholder-gray-400 focus:border-1 focus:border-[#eb3254] p-2 md:p-[9px] mb-1 rounded-[7px] border-1 border-[#eb3254] focus:outline-none w-full" name="password" placeholder="رمز عبور" required>
                        <button class="focus:bg-[#eb3254] hover:bg-[#d52b4a] transition-all duration-400 text-center w-full bg-[#eb3254] p-2 md:p-3 rounded-[10px] text-white cursor-pointer">ثبت</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- QR Popup (برای اسکن) -->
    <div class="fixed bg-black/50 w-full h-full top-0 right-0 flex justify-center items-center invisible opacity-0 transition-all duration-300 z-50" id="popupQr">  
        <div class="w-9/12 h-1/2 rounded-sm flex justify-center items-center p-5 transition-all duration-300 scale-95 relative bg-white">
            <div class="absolute w-full h-full bg-white flex flex-row items-center justify-center invisible opacity-0 rounded-md" id="loading">
                <div class="loading-wave">
                    <div class="loading-bar"></div>
                    <div class="loading-bar"></div>
                    <div class="loading-bar"></div>
                    <div class="loading-bar"></div>
                </div>
            </div>
            <div class="p-3 rounded-full bg-white absolute top-1 right-1 z-50 cursor-pointer" onclick="scanQr('close')">
                <svg xmlns="http://www.w3.org/2000/svg" class="size-4" viewBox="0 0 384 512">
                    <path fill="red" d="M345 137c9.4-9.4 9.4-24.6 0-33.9s-24.6-9.4-33.9 0l-119 119L73 103c-9.4-9.4-24.6-9.4-33.9 0s-9.4 24.6 0 33.9l119 119L39 375c-9.4 9.4-9.4 24.6 0 33.9s24.6 9.4 33.9 0l119-119L311 409c9.4 9.4 24.6 9.4 33.9 0s9.4-24.6 0-33.9l-119-119L345 137z"/>
                </svg>
            </div>
            <div id="reader"></div>
        </div>
    </div>

    <script>
        // توابع مربوط به QR (برای حفظ عملکرد)
        let popupQr = document.getElementById('popupQr');
        let loading = document.getElementById('loading');

        function scanQr(state) {
            if (state == 'open') {
                popupQr.classList.remove('invisible', 'opacity-0');
                popupQr.classList.add('visible', 'opacity-100');
                // نمایش لودر شبیه‌سازی
                if (loading) {
                    loading.classList.remove('invisible', 'opacity-0');
                    loading.classList.add('visible', 'opacity-100');
                }
                // شبیه‌سازی اسکن (در حالت واقعی کتابخانه Html5Qrcode اینجا قرار می‌گیرد)
            }
            if (state == 'close') {
                popupQr.classList.add('invisible', 'opacity-0');
                popupQr.classList.remove('visible', 'opacity-100');
                if (loading) {
                    loading.classList.add('invisible', 'opacity-0');
                    loading.classList.remove('visible', 'opacity-100');
                }
            }
        }

        // تابع openUserOptions برای سازگاری (در صورت نیاز)
        function openUserOptions(state) {
            console.log('User options:', state);
        }

        console.log('صفحه ذخیره رمز جدید - نوترینو');
    </script>

    <!-- در صورت نیاز به اسکریپت‌های اضافی -->
    @stack('scripts')
</body>
</html>