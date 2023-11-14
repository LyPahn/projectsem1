<!doctype html>
<html lang="en">

<!-- Mirrored from kiswa.net/themes/star-hotel/demo/demo-ltr/registration-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 08 Nov 2023 07:29:59 GMT -->

<head>
    <title>Registration 2</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="icon" href="{{asset('fe')}}/images/favicon.png" type="{{asset('fe')}}/image/x-icon">

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

    <!--====== LOADER =====-->
    <div class="loader"></div>


    <!--===== FULL-PAGE-BODY ====-->
    <section class="full-page-body">
        <div class="full-page-wrapper">
            <div class="full-page-content">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-5 col-xl-6 full-page-txt">
                            <div class="about-intro-text mg-top-50">
                                <h4>Welcome to Star Hotel</h4>
                                <h2>Provide the best quality services in hoteling</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eget commodo
                                    orci. Integer varius nibh eu mattis porta. Pellentesque dictum sem eget cursus
                                    semper. Nullam quis blandit lorem.</p>
                            </div><!-- end about-intro-text -->
                        </div><!-- end columns -->

                        <div class="col-lg-7 col-xl-6 full-page-form">
                            <div class="custom-form">
                                <h3>Registration</h3>
                                <form method="POST" action="{{ route('register.store') }}">
                                    @csrf
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Username"
                                            name="name" required />
                                        <span><i class="fa fa-user"></i></span>
                                        @error('name')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <input type="email" class="form-control" placeholder="Email"
                                            name="email" required />
                                        <span><i class="fa fa-envelope"></i></span>
                                        @error('email')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <input type="password" class="form-control" placeholder="Password"
                                            name="password" required />
                                        <span><i class="fa fa-lock"></i></span>
                                        @error('password')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <input type="password" class="form-control" placeholder="Confirm Password"
                                            name="Rpassword" required />
                                        <span><i class="fa fa-lock"></i></span>
                                        @error('Rpassword')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                        @if ($message = Session::get('error'))
                                            <p class="text-danger">{{ $message }}</p>
                                        @endif
                                    </div>

                                    <button class="btn btn-yellow btn-block" type="submit">Register</button>
                                </form>

                                <div class="other-links">
                                    <p class="link-line">Already Have An Account ? <a href="login-2.html">Login
                                            Here</a></p>
                                </div><!-- end other-links -->
                            </div><!-- end custom-form -->
                        </div><!-- end columns -->

                    </div><!-- end row -->
                </div><!-- end container -->
            </div><!-- end full-page-content -->
        </div><!-- end full-page-wrapper -->
    </section><!-- end full-page-body -->


    <!-- Page Scripts Starts -->
    <script src="{{asset('fe')}}/js/jquery-3.3.1.min.js"></script>
    <script src="{{asset('fe')}}/js/bootstrap.min4.3.1.js"></script>
    <script src="{{asset('fe')}}/js/custom-navigation.js"></script>
    <!-- Page Scripts Ends -->

</body>

<!-- Mirrored from kiswa.net/themes/star-hotel/demo/demo-ltr/registration-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 08 Nov 2023 07:29:59 GMT -->

</html>
