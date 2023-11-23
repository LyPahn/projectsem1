<!doctype html>
<html lang="en">


<!-- Mirrored from kiswa.net/themes/star-hotel/demo/demo-ltr/error-page.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 08 Nov 2023 07:28:22 GMT -->
<head>
    <title>Error Page</title>
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
</head>


<body>

    <div class="wrapper">
        <!--====== LOADER =====-->
        <div class="loader"></div>
    
        {{-- <!--============= PAGE-COVER =============-->
        <section class="page-cover" id="error-cover">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-title">404 Page</h1>
                        <ul class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="active breadcrumb-item">404 Page</li>
                        </ul>
                    </div><!-- end columns -->
                </div><!-- end row -->
            </div><!-- end container -->
        </section><!-- end page-cover --> --}}
    
    
        <!--=============INNERPAGE-WRAPPER ===========-->
        <section id="error-page" class="innerpage-wrapper">
    
            <div id="error-text" class="innerpage-section-padding">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-md-12 col-lg-12 col-xl-12 text-center">
                            <h1 id="code">4 <span><i class="fa fa-frown-o"></i></span>4</h1>
                            <h3>Page Not Found</h3>
                            <div class="butn text-center">
                                <a href="{{route('user.index')}}" class="btn btn-padding btn-yellow">Trang chủ</a>
                            </div><!-- end butn -->
                        </div><!-- end columns -->
                    </div><!-- end row -->
                </div><!-- end container -->
            </div><!-- end error-text -->
    
        </section><!-- end innerpage-wrapper -->
    
    
    
    </div>


    <!-- Page Scripts Starts -->
    <script src="{{asset('fe')}}/js/jquery-3.3.1.min.js"></script>
    <script src="{{asset('fe')}}/js/bootstrap.min4.3.1.js"></script>
    <script src="{{asset('fe')}}/js/custom-navigation.js"></script>
    <!-- Page Scripts Ends -->

</body>


<!-- Mirrored from kiswa.net/themes/star-hotel/demo/demo-ltr/error-page.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 08 Nov 2023 07:28:22 GMT -->
</html>