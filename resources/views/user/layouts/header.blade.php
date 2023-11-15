<!--========== TOP-BAR ==========-->
<div id="top-bar">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-8 col-lg-8 col-xl-8">
                <div id="info">
                    <ul class="list-unstyled list-inline">
                        <li class="list-inline-item"><span><i class="fa fa-map-marker"></i></span>29 Land St, Lorem
                            City, CA</li>
                        <li class="list-inline-item"><span><i class="fa fa-phone"></i></span>+00 123 4567</li>
                    </ul>
                </div><!-- end info -->
            </div><!-- end columns -->

            <div class="col-12 col-md-4 col-lg-4 col-xl-4">
                <div id="links">
                    <ul class="list-unstyled list-inline">
                        <li class="list-inline-item"><a href="#"><span><i class="fa fa-facebook"></i></span></a>
                        </li>
                        <li class="list-inline-item"><a href="#"><span><i class="fa fa-twitter"></i></span></a></li>
                        <li class="list-inline-item"><a href="#"><span><i class="fa fa-google-plus"></i></span></a>
                        </li>
                        <li class="list-inline-item"><a href="#"><span><i class="fa fa-pinterest-p"></i></span></a>
                        </li>
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


<div class="header-absolute">
    <nav class="navbar navbar-expand-xl navbar-custom fixed-top header-1 landing-page" id="main_navbar">
        <div class="container">

            <a href="{{route('user.index')}}" class="navbar-brand"><span>STAR</span>HOTEL</a>
            <button type="button" class="navbar-toggler" data-toggle="collapse"
                data-target="#navbarSupportedContent">
                <i class="fa fa-bars"></i>
            </button>


            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('user.index')}}">Trang chủ <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('user.listRoom')}}">Danh sách phòng</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('user.about')}}">Giới thiệu</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('user.service')}}">Dịch vụ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('user.contact')}}">Liên hệ</a>
                    </li>
                </ul>
            </div><!-- end navbar collapse -->
        </div><!-- end container -->
    </nav><!-- end navbar -->
</div><!-- end header-absolute -->