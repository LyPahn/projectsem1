<!doctype html>
<html lang="en">


<!-- Mirrored from kiswa.net/themes/star-hotel/demo/demo-ltr/homepage-1-landing.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 08 Nov 2023 07:27:50 GMT -->
<head>
    <title>Homepage 1 Landing Page</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="icon" href="{{asset('fe')}}/images/favicon.png" type="image/x-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Lato:300,300i,400,400i,700,700i,900,900i%7CPlayfair+Display:400,400i,700,700i,900,900i"
        rel="stylesheet">

    <!-- Bootstrap Stylesheet -->
    <link rel="stylesheet" href="{{asset('fe')}}/css/bootstrap.min4.3.1.css">

    <!-- Font Awesome Stylesheet -->
    <link rel="stylesheet" href="{{asset('fe')}}/css/font-awesome.min.css">

    <!-- Custom Stylesheets -->
    <link rel="stylesheet" href="{{asset('fe')}}/css/style.css">
    <link rel="stylesheet" id="cpswitch" href="{{asset('fe')}}/css/yellow.css">
    <link rel="stylesheet" href="{{asset('fe')}}/css/responsive.css">

    <!-- Owl Carousel Stylesheet -->
    <link rel="stylesheet" href="{{asset('fe')}}/css/owl.carousel.css">
    <link rel="stylesheet" href="{{asset('fe')}}/css/owl.theme.css">

    <!-- Flex Slider Stylesheet -->
    <link rel="stylesheet" href="{{asset('fe')}}/css/flexslider.css" type="text/css" />

    <!--Date-Picker Stylesheet-->
    <link rel="stylesheet" href="{{asset('fe')}}/vendors/gijgo-combined-1.9.13/css/gijgo.min.css">

    <!-- Magnific Gallery -->
    <link rel="stylesheet" href="{{asset('fe')}}/css/magnific-popup.css">
</head>


<body id="homepage-4" data-spy="scroll" data-target="#mynavbar">

    <!--====== LOADER =====-->
    <div class="loader"></div>


    @include('user.layouts.header')

    @yield('main-content')


    @include('user.layouts.footer')


    <!-- Page Scripts Starts -->
    <script src="{{asset('fe')}}/js/jquery-3.3.1.min.js"></script>
    <script src="{{asset('fe')}}/js/jquery.magnific-popup.min.js"></script>
    <script src="{{asset('fe')}}/js/bootstrap.min4.3.1.js"></script>
    <script src="{{asset('fe')}}/js/jquery.flexslider.js"></script>
    
    <script src="{{asset('fe')}}/js/owl.carousel.min.js"></script>
    <script src="{{asset('fe')}}/js/custom-gallery.js"></script>
    <script src="{{asset('fe')}}/js/custom-navigation.js"></script>
    <script src="{{asset('fe')}}/vendors/gijgo-combined-1.9.13/js/gijgo.min.js"></script>
    <script src="{{asset('fe')}}/js/custom-flex.js"></script>
    <script src="{{asset('fe')}}/js/custom-owl.js"></script>
    <!-- Page Scripts Ends -->

    <script>
        $('#datepicker').datepicker({
            uiLibrary: 'bootstrap4'
        });
        $('#datepicker1').datepicker({
            uiLibrary: 'bootstrap4'
        });
    </script>
</body>


<!-- Mirrored from kiswa.net/themes/star-hotel/demo/demo-ltr/homepage-1-landing.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 08 Nov 2023 07:27:50 GMT -->
</html>