@extends('user.master')
@section('main-content')
    <!--============= PAGE-COVER =============-->
    <section class="page-cover" id="about-cover">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="page-title">Giới thiệu Star Hotel</h1>
                    <ul class="breadcrumb justify-content-center">
                        <li class="breadcrumb-item"><a href="{{route('user.index')}}">Trang chủ</a></li>
                        <li class="active breadcrumb-item">Giới thiệu</li>
                    </ul>
                </div><!-- end columns -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section><!-- end page-cover -->


    <!--============== INNERPAGE-WRAPPER ==============-->
    <section id="about-us-2" class="innerpage-wrapper">

        <div id="intro" class="innerpage-section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-12 col-lg-4 col-xl-4 text-center" id="intro-img">
                        <img src="{{asset('fe')}}/images/about-us.jpg" class="img-fluid" alt="about-us" />
                    </div><!-- end columns -->

                    <div class="col-12 col-md-12 col-lg-8 col-xl-8" id="intro-text">
                        <div class="innerpage-heading">
                            <h1>Chúng tôi là ai ?</h1>
                        </div><!-- end innerpage-heading -->

                        <p>Khách sạn Star Hotel tự hào là một trong những khách sạn 5 sao có chất lượng dịch vụ cao cấp nhất khu vực Đông Nam Á kể từ khi hoạt động vào tháng 10 năm 2013.

                            Tọa lạc tại trung tâm thương mại mới của Hà Nội cách sân bay Nội Bài 27km, vị trí của khách sạn tạo điều kiện thuận lợi cho việc đi lại của khách hàng trong và ngoài nước. Nằm cạnh Trung Tâm Hội Nghị Quốc Gia và tòa nhà Landmark cao nhất Việt Nam, Star Hotel đảm bảo sẽ đáp ứng mọi nhu cầu làm việc và giải trí của khách hàng.
                        </p>
                        <p>Được thiết kế bởi công ty kiến trúc Carlos Zapata Studio nổi tiếng lấy cảm hứng từ hình ảnh con rồng huyền thoại trong dân gian và những đường bờ biển tuyệt đẹp của Việt Nam, khách sạn JW Marriott Hanoi gây được thiện cảm trong lòng khách hàng bởi một phong cách hiện đại nhưng vẫn mang đậm nét văn hóa truyền thống Việt Nam.</p>
                    </div><!-- end columns -->

                    <div class="col-12 col-md-12 col-lg-12 col-xl-12">
                        <div id="features">

                            <ul class="list-inline list-unstyled">
                                <li class="list-inline-item">
                                    <div class="feature-block">
                                        <span><i class="fa fa-wifi"></i></span>
                                        <p>Miễn phí mạng</p>
                                    </div><!-- end feature-block -->
                                </li>
                                <li class="list-inline-item">
                                    <div class="feature-block">
                                        <span><i class="fa fa-leaf"></i></span>
                                        <p>Spa & Làm đẹp</p>
                                    </div><!-- end feature-block -->
                                </li>
                                <li class="list-inline-item">
                                    <div class="feature-block">
                                        <span><i class="fa fa-dribbble"></i></span>
                                        <p>Hoạt động thể thao</p>
                                    </div><!-- end feature-block -->
                                </li>
                                <li class="list-inline-item">
                                    <div class="feature-block">
                                        <span><i class="fa fa-car"></i></span>
                                        <p>Taxi sân bay</p>
                                    </div><!-- end feature-block -->
                                </li>
                                <li class="list-inline-item">
                                    <div class="feature-block">
                                        <span><i class="fa fa-cutlery"></i></span>
                                        <p>Bữa sáng</p>
                                    </div><!-- end feature-block -->
                                </li>
                                <li class="list-inline-item">
                                    <div class="feature-block">
                                        <span><i class="fa fa-television"></i></span>
                                        <p>Tivi LCD</p>
                                    </div><!-- end feature-block -->
                                </li>
                            </ul>

                        </div><!-- end features -->
                    </div><!-- end columns -->
                </div><!-- end row -->
            </div><!-- end container -->
        </div><!-- end intro -->

        <div id="video" class="innerpage-banner-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="innerpage-heading">
                            <h1>VIDEO TOUR</h1>
                            <p>Đến với khách sạn JW Marriott Hanoi, khách hàng sẽ được chào đón bởi sự thân thiện của đội ngũ nhân viên tận tình và tân hưởng những dịch vụ cao cấp bậc nhất khu vực, đảm bảo sẽ mang đến cho khách hàng một trải nghiệm ấn tượng không thể nào quên.
                            </p>
                        </div><!-- end innerpage-heading -->

                        <div class="embed-responsive embed-responsive-16by9" id="myvideo">
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/qoFOK1B7S3A?si=OW_MbREGXiKKfi2b" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                        </div>

                        <button class="btn popup-youtube" id="play-button"><span><i class="fa fa-play"></i></span></button>
                    </div><!-- end columns -->
                </div><!-- end row -->
            </div><!-- end container -->
        </div><!-- end video -->


    </section><!-- end innerpage-wrapper -->
@endsection