<!doctype html>
<html lang="en">
    
<!-- Mirrored from kiswa.net/themes/star-hotel/demo/demo-ltr/login-1.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 08 Nov 2023 07:28:13 GMT -->
<head>
        <title>Login 1</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <link rel="icon" href="{{asset('fe')}}/images/favicon.png" type="image/x-icon">
        
        <!-- Google Fonts -->	
        <link href="https://fonts.googleapis.com/css?family=Lato:300,300i,400,400i,700,700i,900,900i%7CPlayfair+Display:400,400i,700,700i,900,900i" rel="stylesheet">
        
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
        
        
        <!--========== TOP-BAR ==========-->
        <div id="top-bar">
            <div class="container">
                <div class="row">          
                    <div class="col-12 col-md-8 col-lg-8 col-xl-8">
                        <div id="info">
                            <ul class="list-unstyled list-inline">
                                <li class="list-inline-item"><span><i class="fa fa-map-marker"></i></span>29 Land St, Lorem City, CA</li>
                                <li class="list-inline-item"><span><i class="fa fa-phone"></i></span>+00 123 4567</li>
                            </ul>
                        </div><!-- end info -->
                    </div><!-- end columns -->
                    
                    <div class="col-12 col-md-4 col-lg-4 col-xl-4">
                        <div id="links">
                            <ul class="list-unstyled list-inline">
                                <li class="list-inline-item"><a href="#"><span><i class="fa fa-facebook"></i></span></a></li>
                                <li class="list-inline-item"><a href="#"><span><i class="fa fa-twitter"></i></span></a></li>
                                <li class="list-inline-item"><a href="#"><span><i class="fa fa-google-plus"></i></span></a></li>
                                <li class="list-inline-item"><a href="#"><span><i class="fa fa-pinterest-p"></i></span></a></li>
                                <li class="list-inline-item">
                                    <form>
                                        <div class="form-group">
                                            <span><i class="fa fa-angle-down"></i></span>
                                            <select class="form-control">
                                                <option value="">EN</option>
                                                <option value="">UR</option>
                                                <option value="">FR</option>
                                                <option value="">IT</option>
                                            </select>
                                        </div><!-- end form-group -->
                                    </form>
                                </li>
                            </ul>
                        </div><!-- end links -->
                    </div><!-- end columns -->				
                </div><!-- end row -->
            </div><!-- end container -->
        </div><!-- end top-bar -->
        
        
        <!--================== INNERPAGE-WRAPPER ================-->
        <section id="custom-form-wrapper" class="innerpage-wrapper">
        
        	<div id="login" class="innerpage-section-padding">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="custom-form">
                                <h3>Đăng nhập</h3>
                                <form class="text-left" action="{{route('login.store')}}" method="POST">
                                    @csrf
                                    @if ($message = Session::get('success'))
                                        <div class="alert alert-success alert-block" role="alert">
                                            <button type="button" class="close" data-dismiss="alert">x</button>
                                            <strong>{{$message}}</strong>
                                        </div>
                                    @endif
                                    @if ($message = Session::get('err'))
                                        <div class="alert alert-danger alert-block" role="alert">
                                            <button type="button" class="close" data-dismiss="alert">x</button>
                                            <strong>{{$message}}</strong>
                                        </div>
                                    @endif
                                    <div class="form-group">
                                         <input type="text" class="form-control" placeholder="Email" name="email"  required/>
                                         <span><i class="fa fa-user"></i></span>
                                    </div>
                                    
                                    <div class="form-group">
                                         <input type="password" class="form-control" placeholder="Mật khẩu" name="password" required/>
                                         <span><i class="fa fa-lock"></i></span>
                                    </div>
                                    
                                    
                                    <button class="btn btn-yellow btn-block" type="submit">Đăng nhập</button>
                                </form>
                                
                                <div class="other-links">
                                    <p class="link-line">New Here ? <a href="{{route('register')}}">Signup</a></p>
                                    <a class="simple-link" href="forgot-password-1.html">Forgot Password ?</a>
                                </div><!-- end other-links -->
                            </div><!-- end custom-form -->
                            
                        </div><!-- end columns -->
                    </div><!-- end row -->
                </div><!-- end container -->         
            </div><!-- end login -->
            
        </section><!-- end innerpage-wrapper -->
        
        
        
        
        <!-- Page Scripts Starts -->
        <script src="{{asset('fe')}}/js/jquery-3.3.1.min.js"></script>
        <script src="{{asset('fe')}}/js/bootstrap.min4.3.1.js"></script>
        <script src="{{asset('fe')}}/js/custom-navigation.js"></script>
        <!-- Page Scripts Ends -->
        
	</body>

<!-- Mirrored from kiswa.net/themes/star-hotel/demo/demo-ltr/login-1.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 08 Nov 2023 07:28:13 GMT -->
</html>