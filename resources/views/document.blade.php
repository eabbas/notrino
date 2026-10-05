<!DOCTYPE html>
<html lang="fe" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" type="text/css">
    <script src="{{ asset('assets/js/tailwind.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.js') }}"></script>
    <link rel="shortcut icon" href="{{ asset('storage/img/icons8-mobile-phone-48.png') }}" type="image/png">
    <title>@yield('title')</title>
</head>
<body class="overflow-y-auto
              [&::-webkit-scrollbar]:w-1.5
              [&::-webkit-scrollbar-thumb]:bg-(--color-primary-500)
              [&::-webkit-scrollbar-thumb]:rounded-full">
<div class="max-w-[1700px] mx-auto">

    @include('header')

    <main>
        @yield('content')
    </main>

    @include('footer')

</div>
</body>
</html>