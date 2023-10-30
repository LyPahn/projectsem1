<header class="header_area">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light">
            <!-- Brand and toggle get grouped for better mobile display -->
            <a class="navbar-brand logo_h" href="index.html"><img src="{{ asset('fe') }}/image/Logo.png"
                    alt=""></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                <ul class="nav navbar-nav menu_nav ml-auto">
                    <li class="nav-item active"><a class="nav-link" href="index.html">Trang chủ</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{route('user.listRoom')}}">Danh sách phòng</a></li>
                    
                    <li class="nav-item submenu dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button"
                            aria-haspopup="true" aria-expanded="false">Blog</a>
                        <ul class="dropdown-menu">
                            <li class="nav-item"><a class="nav-link" href="blog.html">Blog</a></li>
                            <li class="nav-item"><a class="nav-link" href="blog-single.html">Blog Details</a></li>
                        </ul>
                    </li>
                    
                    <li class="nav-item"><a class="nav-link" href="contact.html">Liên hệ</a></li>
                    {{-- <span>{{Auth::user()->name}}</span> --}}
                    @if (isset(Auth::user()->name))
                        {{-- <li class="nav-item">

                        <div class="dropdown">
                            <a id="my-dropdown" class="btn " data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user"></i>{{Auth::user()->name}}</a>
                            <div class="dropdown-menu" aria-labelledby="my-dropdown">
                                <a class="dropdown-item active" href="#">Text</a>
                            </div>
                        </div>
                    </li> --}}
                        <li class="nav-item submenu dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button"
                                aria-haspopup="true" aria-expanded="false"><i
                                    class="fa fa-user"></i>{{ Auth::user()->name }}</a>
                            <ul class="dropdown-menu" style="min-width: 175px; left: -92px;">
                                <li class="nav-item"><a class="nav-link" href="blog.html">Quản lí tài khoản</a></li>
                                <li class="nav-item"><a class="nav-link" href="{{route('user.logout')}}">Đăng xuất</a>
                                </li>
                            </ul>
                        </li>
                    @else
                        <li class="nav-item d-flex"><a class="nav-link" href="{{ route('login') }}"><i
                                    class="fa fa-user"></i> đăng nhập</a><span class="nav-link">/</span><a
                                class="nav-link" href="{{ route('register') }}">Đăng kí</a>
                        </li>
                    @endif

                </ul>
            </div>
        </nav>
    </div>
</header>
