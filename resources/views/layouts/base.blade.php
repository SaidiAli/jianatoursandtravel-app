<!DOCTYPE html>
<html lang="en">


<head>
        <meta charset="utf-8" />
        <title>Jiana Tours & Travel</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Jiana tours and Travel agency" name="description" />
        <meta content="IsikoSaidiali" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="csrf-token" content="{{csrf_token()}}">

        <!-- App favicon -->
        <link rel="shortcut icon" href="/backend/assets/images/favicon.ico">

        <!-- plugins -->
        <link href="/backend/assets/libs/flatpickr/flatpickr.min.css" rel="stylesheet" type="text/css" />

        <!-- App css -->
    <link rel="stylesheet" href="/backend/assets/libs/dropzone/dropzone.min.css">

    <link href="/backend/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="/backend/assets/css/icons.min.css" rel="stylesheet" type="text/css">
    <link href="/css/app.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="/css/styles.css">

    {{-- Flickity --}}
    <link rel="stylesheet" href="/css/flickity.css">



    <!-- Other Style CSS -->
        @yield('custom_css')


</head>

<body>

        <!-- Begin page -->
        <div id="wrapper">
            {{-- @include('partials.bsidebar') --}}

    <!--====================  heaer area ====================-->
            @include('partials.nav')
    <!--====================  End of heaer area  ====================-->
    <div class="content">
        @yield('content')
    </div>

    <!--====================  footer area ====================-->
    @include('partials.footer')
    <!--====================  End of footer area  ====================-->
    </div>


        </div>

    <!-- JS
============================================ -->

   <!-- Vendor js -->
   <script src="/backend/assets/js/vendor.min.js"></script>
   <script src="/backend/assets/libs/dropzone/dropzone.min.js"></script>

   <!-- optional plugins -->
   <script src="/backend/assets/libs/moment/moment.min.js"></script>
   <script src="/backend/assets/libs/apexcharts/apexcharts.min.js"></script>
   <script src="/backend/assets/libs/flatpickr/flatpickr.min.js"></script>

   <!-- page js -->
   <script src="/backend/assets/js/pages/dashboard.init.js"></script>

   <!-- App js -->
   <script src="/backend/assets/js/app.min.js"></script>

   {{-- Flickity --}}
    <script src="/js/flickity.js"></script>

    <script src="/js/custom.js"></script>


    @yield('javascript')
</body>

</html>
