{{-- <body>
    <div class="container p-5">
        <div class="row ">
            <div class="col-lg-4 m-auto">
                <h2 class="text-center">Logon</h2>

                <!-- Pills content -->
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="pills-login" role="tabpanel" aria-labelledby="tab-login">
                        <form method="POST" action="{{ route('logon.store') }}">
                            @csrf
                            @if ($message = Session::get('err'))
                                <div class="alert alert-danger alert-block">

                                    <button type="button" class="close" data-dismiss="alert">×</button>

                                    <strong>{{ $message }}</strong>

                                </div>
                            @endif

                            <!-- Email input -->
                            <div class="form-outline mb-4">
                                <input type="email" name="email" class="form-control" />
                                <label class="form-label" for="loginName">Email</label>
                            </div>

                            <!-- Password input -->
                            <div class="form-outline mb-4">
                                <input type="password" name="password" id="loginPassword" class="form-control" />
                                <label class="form-label" for="loginPassword">Password</label>
                            </div>

                            <!-- 2 column grid layout -->
                            <div class="row mb-4">
                                <div class="col-md-6 d-flex justify-content-center">
                                    <!-- Checkbox -->
                                    <div class="form-check mb-3 mb-md-0">
                                        <input class="form-check-input" type="checkbox" value=""
                                            id="loginCheck" />
                                        <label class="form-check-label" for="loginCheck"> Remember me </label>
                                    </div>
                                </div>

                                <div class="col-md-6 d-flex justify-content-center">
                                    <!-- Simple link -->
                                    <a href="#!">Forgot password?</a>
                                </div>
                            </div>

                            <!-- Submit button -->
                            <button type="submit" class="btn btn-primary btn-block mb-4">Sign in</button>

                            <!-- Register buttons -->
                            <div class="text-center">
                                <p>Not a member? <a href="{{ route('register') }}">Register</a></p>
                            </div>
                        </form>
                    </div>
                    <div class="tab-pane fade" id="pills-register" role="tabpanel" aria-labelledby="tab-register">
                        <form>
                            <div class="text-center mb-3">
                                <p>Sign up with:</p>
                                <button type="button" class="btn btn-link btn-floating mx-1">
                                    <i class="fab fa-facebook-f"></i>
                                </button>

                                <button type="button" class="btn btn-link btn-floating mx-1">
                                    <i class="fab fa-google"></i>
                                </button>

                                <button type="button" class="btn btn-link btn-floating mx-1">
                                    <i class="fab fa-twitter"></i>
                                </button>

                                <button type="button" class="btn btn-link btn-floating mx-1">
                                    <i class="fab fa-github"></i>
                                </button>
                            </div>

                            <p class="text-center">or:</p>

                            <!-- Name input -->
                            <div class="form-outline mb-4">
                                <input type="text" id="registerName" class="form-control" />
                                <label class="form-label" for="registerName">Name</label>
                            </div>

                            <!-- Username input -->
                            <div class="form-outline mb-4">
                                <input type="text" id="registerUsername" class="form-control" />
                                <label class="form-label" for="registerUsername">Username</label>
                            </div>

                            <!-- Email input -->
                            <div class="form-outline mb-4">
                                <input type="email" id="registerEmail" class="form-control" />
                                <label class="form-label" for="registerEmail">Email</label>
                            </div>

                            <!-- Password input -->
                            <div class="form-outline mb-4">
                                <input type="password" id="registerPassword" class="form-control" />
                                <label class="form-label" for="registerPassword">Password</label>
                            </div>

                            <!-- Repeat Password input -->
                            <div class="form-outline mb-4">
                                <input type="password" id="registerRepeatPassword" class="form-control" />
                                <label class="form-label" for="registerRepeatPassword">Repeat password</label>
                            </div>

                            <!-- Checkbox -->
                            <div class="form-check d-flex justify-content-center mb-4">
                                <input class="form-check-input me-2" type="checkbox" value="" id="registerCheck"
                                    checked aria-describedby="registerCheckHelpText" />
                                <label class="form-check-label" for="registerCheck">
                                    I have read and agree to the terms
                                </label>
                            </div>

                            <!-- Submit button -->
                            <button type="submit" class="btn btn-primary btn-block mb-3">Sign in</button>
                        </form>
                    </div>
                </div>
                <!-- Pills content -->
            </div>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.{{asset('fe')}}/js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/{{asset('fe')}}/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body> --}}
<!doctype html>
<html lang="en">

<!-- Mirrored from kiswa.net/themes/star-hotel/demo/demo-ltr/login-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 08 Nov 2023 07:29:59 GMT -->

<head>
    <title>Login 2</title>
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
                                <h3>Login</h3>
                                <form class="text-left" method="POST" action="{{ route('logon.store') }}">
                                    @csrf
                                    @if ($message = Session::get('err'))
                                        <div class="alert alert-danger alert-block">

                                            <button type="button" class="close" data-dismiss="alert">×</button>

                                            <strong>{{ $message }}</strong>

                                        </div>
                                    @endif
                                    <div class="form-group">
                                        <input type="email" name="email" class="form-control" placeholder="Username" required />
                                        <span><i class="fa fa-user"></i></span>
                                    </div>

                                    <div class="form-group">
                                        <input type="password" name="password" class="form-control" placeholder="Password"
                                            required />
                                        <span><i class="fa fa-lock"></i></span>
                                    </div>

                                    <div class="custom-check">
                                        <input type="checkbox" id="check" name="checkbox" />
                                        <label for="check"><span><i class="fa fa-check"></i></span>Remember
                                            Me</label>
                                    </div><!-- end checkbox -->

                                    <button type="submit" class="btn btn-yellow btn-block">Login</button>
                                </form>

                                <div class="other-links">
                                    <p class="link-line">New Here ? <a href="{{ route('register') }}">Signup</a></p>
                                    <a class="simple-link" href="forgot-password-2.html">Forgot Password ?</a>
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

<!-- Mirrored from kiswa.net/themes/star-hotel/demo/demo-ltr/login-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 08 Nov 2023 07:29:59 GMT -->

</html>
