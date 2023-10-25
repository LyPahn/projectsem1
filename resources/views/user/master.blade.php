<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="{{asset('fe')}}/image/favicon.png" type="{{asset('fe')}}/image/png">
        <title>Royal Hotel</title>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="{{asset('fe')}}/css/bootstrap.css">
        <link rel="stylesheet" href="{{asset('fe')}}/vendors/linericon/style.css">
        <link rel="stylesheet" href="{{asset('fe')}}/css/font-awesome.min.css">
        <link rel="stylesheet" href="{{asset('fe')}}/vendors/owl-carousel/owl.carousel.min.css">
        <link rel="stylesheet" href="{{asset('fe')}}/vendors/bootstrap-datepicker/bootstrap-datetimepicker.min.css">
        <link rel="stylesheet" href="{{asset('fe')}}/vendors/nice-select/css/nice-select.css">
        <link rel="stylesheet" href="{{asset('fe')}}/vendors/owl-carousel/owl.carousel.min.css">
        <!-- main css -->
        <link rel="stylesheet" href="{{asset('fe')}}/css/style.css">
        <link rel="stylesheet" href="{{asset('fe')}}/css/responsive.css">
    </head>
    <body>
        <!--================Header Area =================-->
        @include('user.layouts.header')
        <!--================Header Area =================-->
        
        @yield('main-content')
        
        <!--================ start footer Area  =================-->	
        @include('user.layouts.footer')
		<!--================ End footer Area  =================-->
        
        
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="{{asset('fe')}}/js/jquery-3.2.1.min.js"></script>
        <script src="{{asset('fe')}}/js/popper.js"></script>
        <script src="{{asset('fe')}}/js/bootstrap.min.js"></script>
        <script src="{{asset('fe')}}vendors/owl-carousel/owl.carousel.min.js"></script>
        <script src="{{asset('fe')}}/js/jquery.ajaxchimp.min.js"></script>
        <script src="{{asset('fe')}}/js/mail-script.js"></script>
        <script src="{{asset('fe')}}/vendors/bootstrap-datepicker/bootstrap-datetimepicker.min.js"></script>
        <script src="{{asset('fe')}}/vendors/nice-select/{{asset('fe')}}/js/jquery.nice-select.js"></script>
        <script src="{{asset('fe')}}/js/mail-script.js"></script>
        <script src="{{asset('fe')}}/js/stellar.js"></script>
        <script src="{{asset('fe')}}/vendors/lightbox/simpleLightbox.min.js"></script>
        <script src="{{asset('fe')}}/js/custom.js"></script>
    </body>
</html>