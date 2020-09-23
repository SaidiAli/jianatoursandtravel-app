<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Jiana Tours & Travel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500&family=Raleway&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link href="/backend/assets/libs/flatpickr/flatpickr.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="/backend/assets/libs/dropzone/dropzone.min.css">

    <link href="/css/app.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/styles.css">
    <link rel="stylesheet" href="/css/fontawesome-free/css/all.min.css">
    <link href="/backend/assets/css/icons.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="/css/flickity.css">
    @yield('custom_css')
</head>
<body>
    <div id="app">

        @include('partials.nav')

        <main>
            <div class="content">
                @yield('content')
            </div>
        </main>

        @include('partials.footer')
        
    </div>
   <!-- Vendor js -->
   <script src="/backend/assets/js/vendor.min.js"></script>
   <script src="/backend/assets/libs/dropzone/dropzone.min.js"></script>
   
   <script src="/backend/assets/libs/flatpickr/flatpickr.min.js"></script>

   {{-- Flickity --}}
    <script src="/js/flickity.js"></script>

    <script src="/js/custom.js"></script>
    <script src="/js/main.js"></script>
    <script src="/backend/assets/js/app.min.js"></script>
    @yield('javascript')

</body>
</html>
