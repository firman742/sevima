<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Bootstrap -->

        <!-- Styles -->
        <link rel="icon" href="{{ asset('assets/images/favicon.ico') }}" type="image/x-icon">
        <!-- Google font-->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600" rel="stylesheet">
        <!-- Required Fremwork -->
        <link rel="stylesheet" type="text/css" href="{{ asset('backend/css/bootstrap/css/bootstrap.min.css') }}">
        <!-- themify-icons line icon -->
        <link rel="stylesheet" type="text/css" href="{{ asset('backend/assets/icon/themify-icons/themify-icons.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('backend/assets/icon/font-awesome/css/font-awesome.min.css') }}">
        <!-- ico font -->
        <link rel="stylesheet" type="text/css" href="{{ asset('backend/assets/icon/icofont/css/icofont.css') }}">
        <!-- Style.css -->
        <link rel="stylesheet" type="text/css" href="{{ asset('backend/css/style.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('backend/css/jquery.mCustomScrollbar.css') }}">

        <!-- Scripts -->
        <script src="{{ asset('backend/js/app.js') }}" defer></script>
    </head>
    <body>
        <div class="container">
            <div class="row min-vh-100 align-items-center justify-content-center">
                <div class="col-md-6">
                     {{ $slot }}
                </div>
            </div>
        </div>

          <!-- Required Jquery -->
       <script type="text/javascript" src="{{ asset('backend/js/jquery/jquery.min.js') }}"></script>
       <script type="text/javascript" src="{{ asset('backend/js/jquery-ui/jquery-ui.min.js') }}"></script>
       <script type="text/javascript" src="{{ asset('backend/js/popper.js/popper.min.js') }}"></script>
       <script type="text/javascript" src="{{ asset('backend/js/bootstrap/js/bootstrap.min.js') }}"></script>
       <!-- jquery slimscroll js -->
       <script type="text/javascript" src="{{ asset('backend/js/jquery-slimscroll/jquery.slimscroll.js') }}"></script>
       <!-- modernizr js -->
       <script type="text/javascript" src="{{ asset('backend/js/modernizr/modernizr.js') }}"></script>
       <!-- am chart -->
       <script src="{{ asset('backend/assets/pages/widget/amchart/amcharts.min.js') }}"></script>
       <script src="{{ asset('backend/assets/pages/widget/amchart/serial.min.js') }}"></script>
       <!-- Chart js -->
       <script type="text/javascript" src="{{ asset('backend/js/chart.js/Chart.js') }}"></script>
       <!-- Todo js -->
       <script type="text/javascript " src="{{ asset('backend/assets/pages/todo/todo.js') }} "></script>
       <!-- Custom js -->
       <script type="text/javascript" src="{{ asset('backend/assets/pages/dashboard/custom-dashboard.min.js') }}"></script>
       <script type="text/javascript" src="{{ asset('backend/js/script.js') }}"></script>
       <script type="text/javascript " src="{{ asset('backend/js/SmoothScroll.js') }}js/SmoothScroll.js"></script>
       <script src="{{ asset('backend/js/pcoded.min.js') }}"></script>
       <script src="{{ asset('backend/js/vartical-demo.js') }}"></script>
       <script src="{{ asset('backend/js/jquery.mCustomScrollbar.concat.min.js') }}"></script>
    </body>
</html>
