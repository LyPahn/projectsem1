<!-- Main Header-->
<header class="main-header header-style-two">
    <div class="auto-container">
        <div class="header-top">
            <div class="inner-box">
                <!-- top-left -->
                <div class="top-left">
                    <span><i class="icon fa fa-location"></i>1247/Plot No. 39, 15th Phase, USA</span>
                </div>
                <!-- Top-right -->
                <div class="top-right">
                    <ul class="social-icon-one">
                        <li>Follow Us :</li>
                        <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa-brands fa-linkedin"></i></a></li>
                        <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Main box -->
        <div class="main-box">
            <div class="logo-box">
                <div class="logo"><a href="{{ route('user.index') }}"><img
                            src="{{ asset('fe') }}/images/logo-v5-black.png" alt="" title="Tronis"></a></div>
            </div>
            <!--Nav Box-->
            <div class="nav-outer">
                <nav class="nav main-menu">
                    <ul class="navigation">
                        <li class="sub-menu"><a href="{{ route('user.index') }}">Trang chủ</a></li>
                        <li class="sub-menu"><a href="{{ route('user.listRoom') }}">Danh sách phòng</a></li>
                        <li class="sub-menu"><a href="#">Blog</a></li>
                        <li><a href="">Liên hệ</a></li>
                        @if (isset(Auth::user()->name))
                            <li class="dropdown"><a href="#"><i class="fa fa-user"></i>
                                    {{ Auth::user()->name }}</a>
                                <ul>
                                    <li><a href="register">Quản lí tài khoản</a></li>
                                    <li><a href="{{route('user.logout')}}">Đăng xuất</a></li>

                                </ul>
                            </li>
                        @else
                            <li class="dropdown"><a href="#"><i class="fa fa-user"></i> Tài khoản</a>
                                <ul>
                                    <li><a href="register">dang ki</a></li>
                                    <li><a href="login">dang nhap</a></li>

                                </ul>
                            </li>
                        @endif

                    </ul>
                </nav>
                <!-- Main Menu End-->
            </div>
            <div class="outer-box">
                <div class="mobile-nav-toggler"><i class="icon fa fa-bars"></i></div>
                <!-- Mobile Nav toggler -->
            </div>
        </div>
        <!-- Mobile Menu  -->
        <div class="mobile-menu">
            <div class="menu-backdrop"></div>
            <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
            <nav class="menu-box">
                <div class="upper-box">
                    <div class="nav-logo"><a href="index.html"><img src="{{ asset('fe') }}/images/logo-2.png"
                                alt="" title=""></a></div>
                    <div class="close-btn"><i class="icon fa fa-times"></i></div>
                </div>
                <ul class="navigation clearfix">
                    <!--Keep This Empty / Menu will come through Javascript-->
                </ul>
                <ul class="contact-list-one">
                    <li>
                        <!-- Contact Info Box -->
                        <div class="contact-info-box">
                            <i class="icon lnr-icon-phone-handset"></i>
                            <span class="title">Call Now</span>
                            <a href="tel:+92880098670">+92 (8800) - 98670</a>
                        </div>
                    </li>
                    <li>
                        <!-- Contact Info Box -->
                        <div class="contact-info-box">
                            <span class="icon lnr-icon-envelope1"></span>
                            <span class="title">Send Email</span>
                            <a href="mailto:help@company.com">help@company.com</a>
                        </div>
                    </li>
                    <li>
                        <!-- Contact Info Box -->
                        <div class="contact-info-box">
                            <span class="icon lnr-icon-clock"></span>
                            <span class="title">Send Email</span>
                            Mon - Sat 8:00 - 6:30, Sunday - CLOSED
                        </div>
                    </li>
                </ul>
                <ul class="social-links">
                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="#"><i class="fab fa-pinterest"></i></a></li>
                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                </ul>
            </nav>
        </div><!-- End Mobile Menu -->
        <!-- Header Search -->
        <div class="search-popup">
            <span class="search-back-drop"></span>
            <button class="close-search"><span class="fa fa-times"></span></button>
            <div class="search-inner">
                <form method="post" action="https://kodesolution.com/html/2023/hoexr-html/index.html">
                    <div class="form-group">
                        <input type="search" name="search-field" value="" placeholder="Search..." required="">
                        <button type="submit"><i class="fa fa-search"></i></button>
                    </div>
                </form>
            </div>
        </div>
        <!-- End Header Search -->

        <!-- Sticky Header  -->
        <div class="sticky-header">
            <div class="auto-container">
                <div class="inner-container">
                    <!--Logo-->
                    <div class="logo">
                        <a href="index.html" title=""><img src="{{ asset('fe') }}/images/logo-v5-black.png"
                                alt="" title=""></a>
                    </div>
                    <!--Right Col-->
                    <div class="nav-outer">
                        <!-- Main Menu -->
                        <nav class="main-menu">
                            <div class="navbar-collapse show collapse clearfix">
                                <ul class="navigation clearfix">
                                    <!--Keep This Empty / Menu will come through Javascript-->
                                </ul>
                            </div>
                        </nav><!-- Main Menu End-->
                        <!--Mobile Navigation Toggler-->
                        <div class="mobile-nav-toggler"><span class="icon lnr-icon-bars"></span></div>
                    </div>
                </div>
            </div>
        </div><!-- End Sticky Menu -->
    </div>
</header>
<!--End Main Header -->
