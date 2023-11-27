@extends('user.master')
@section('main-content')
   <!--== HOME CONTAINER ===-->
   <div class="home-container">

    <div class="flexslider" id="slider">
        <ul class="slides">
            <li class="item-1"></li>
            <li class="item-2"></li>
        </ul><!-- end slides -->

        <div id="hero-main">
            <div class="hero-content">
                <div class="text-align">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 col-md-12 col-lg-12 col-xl-12">
                                <h1 id="welcome">Chào mừng đến Star Hotel</h1>
                                <h3 id="tagline">Tận hưởng cuộc sống của bạn</h3>
                                <div class="hero-text">
                                    <form method="POST" action="{{route('user.search')}}">
                                        @csrf
                                        <div class="row">
                                            <div class="col-12 col-md-6 col-lg-3 col-xl-3">
                                                <div class="form-group">
                                                    <input type="text" class="form-control dpd1"
                                                        placeholder="Check-in" id="datepicker" required />
                                                    <span><i class="fa fa-calendar"></i></span>
                                                </div>
                                            </div><!-- end columns -->

                                            <div class="col-12 col-md-6 col-lg-3 col-xl-3">
                                                <div class="form-group">
                                                    <input type="text" class="form-control dpd2"
                                                        placeholder="check-out" id="datepicker1" required />
                                                    <span><i class="fa fa-calendar"></i></span>
                                                </div>
                                            </div><!-- end columns -->

                                            <div class="col-12 col-md-6 col-lg-3 col-xl-3">
                                                <div class="form-group">
                                                    <span><i class="fa fa-angle-down"></i></span>
                                                    <select class="form-control" name="adluts">
                                                        <option value="" selected>Người lớn</option>
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                    </select>
                                                </div>
                                            </div><!-- end columns -->

                                            <div class="col-12 col-md-6 col-lg-3 col-xl-3">
                                                <div class="form-group">
                                                    <span><i class="fa fa-angle-down"></i></span>
                                                    <select class="form-control" name="children">
                                                        <option value="" selected>Trẻ em</option>
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                    </select>
                                                </div>
                                            </div><!-- end columns -->

                                            <div class="col-12 col-md-12 col-lg-12 col-xl-12 text-center">
                                                <button type="submit" class="btn btn-default btn-lg btn-padding">Tìm kiếm</button>
                                            </div><!-- end columns -->

                                        </div><!-- end row -->
                                    </form>
                                </div><!-- end hero text -->
                            </div><!-- end col-md-12 -->
                        </div><!-- end row -->
                    </div><!-- end container -->
                </div><!-- end text align -->
            </div><!-- end hero content -->
        </div><!-- end hero main -->
    </div><!-- end slider -->
</div><!-- end home-container -->


<!--=============== ABOUT ===============-->
<section id="about">
    <div class="container">
        <div class="row" id="about-img">
            <div class="col-12 col-md-6 col-lg-6 col-xl-6" id="about-text">
                <h2>Giới thiệu về Star Hotel</h2>
                <p>Khách sạn Star Hotel tự hào là một trong những khách sạn 5 sao có chất lượng dịch vụ cao cấp nhất khu vực Đông Nam Á kể từ khi hoạt động vào tháng 10 năm 2013.</p>
                <p>Được thiết kế bởi công ty kiến trúc Carlos Zapata Studio nổi tiếng lấy cảm hứng từ hình ảnh con rồng huyền thoại trong dân gian và những đường bờ biển tuyệt đẹp của Việt Nam, khách sạn Star Hotel gây được thiện cảm trong lòng khách hàng bởi một phong cách hiện đại nhưng vẫn mang đậm nét văn hóa truyền thống Việt Nam.</p>
                <a href="{{route('user.about')}}" class="btn btn-lg btn-padding">Chi tiết</a>
            </div><!-- end columns -->

            <div class="col-12 col-md-6 col-lg-6 col-xl-6">

            </div><!-- end columns -->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end about -->



<!--================ ROOMS ==============-->
<section id="rooms" class="section-padding">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-12 col-lg-12 col-xl-12">
                <div class="page-heading">
                    <h2>Phòng <span>mới nhất</span> </h2>
                    
                </div><!-- end page-heading -->

                <div class="owl-carousel owl-theme" id="owl-rooms">
                    @forelse ($room as $item)
                        
                        <div class="row">
                            <div class="col-lg-12" style="height: 350px">
                                <div class="grid">
                                    <div class="room-block">
                                        <div class="room-img" style="height: 250px">
                                            <img src="{{asset('storage/images/'.$item->image)}}" class="img-fluid" alt="room-image" width="100%" />
                                            <div class="room-title">
                                                <a href="#">
                                                    <h3>{{$item->name}}</h3>
                                                </a>
                                                <div class="rating">
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star-o"></i></span>
                                                </div><!-- end rating -->
                                            </div><!-- end room-title -->
                                        </div><!-- end room-img -->
        
                                        <div class="room-price">
                                            <ul class="list-unstyled">
                                                <li>{{number_format($item->price)}}đ / Đêm <span class="link"><a
                                                            href="{{route('room.detail',$item->id)}}">Xem chi tiết</a></span>
                                                </li>
                                            </ul>
                                        </div><!-- end room-price -->
                                    </div><!-- end room-block -->
                                </div><!-- end grid -->

                            </div>
                        </div>
                    
                    @empty
                        <span>Chưa có dữ liệu</span>
                    @endforelse

                </div><!-- end owl-rooms -->
            </div><!-- end columns -->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end rooms -->



<!--================ SERVICES ==============-->
<section id="services" class="section-padding pt-1">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-12 col-lg-12 col-xl-12">
                <div class="page-heading">
                    <h2>Dịch vụ <span>tuyệt vời</span> của chúng tôi</h2>
                    <p>Với nhu cầu giải trí, nghỉ dưỡng ngày càng cao, xu hướng sử dụng các dịch vụ đi kèm tiện lợi sẽ đón nhận được sự hài lòng cho khách hàng. Đây là một trong những lý do giúp khách sạn thành công trong việc kinh doanh. Bởi vậy, việc quản trị chất lượng dịch vụ khách sạn cũng vô cùng quan trọng và cần thiết.</p>
                </div><!-- end page-heading -->

                <div id="service-blocks">
                    <div class="row">

                        <div class="col-12 col-md-6 col-lg-3 col-xl-3">
                            <div class="service-block">
                                <span><i class="fa fa-coffee"></i></span>
                                <h2 class="service-name">Nhà hàng</h2>
                                <p>Nhà hàng cung cấp đầy đủ các món ăn dành cho bữa ăn sáng, trưa, tối cho du khách, không chỉ là du khách trong nước mà còn cả nước ngoài.</p>
                            </div><!-- end service-block -->
                        </div><!-- end columns -->

                        <div class="col-12 col-md-6 col-lg-3 col-xl-3">
                            <div class="service-block">
                                <span><i class="fa fa-leaf"></i></span>
                                <h2 class="service-name">Spa</h2>
                                <p>Đối với các chị em phụ nữ, không chỉ đi tham quan nghỉ dưỡng mà các chị em phụ nữ muốn chăm sóc sắc đẹp, sức khỏe cũng như tinh thần cho bản thân.</p>
                            </div><!-- end service-block -->
                        </div><!-- end columns -->

                        <div class="col-12 col-md-6 col-lg-3 col-xl-3">
                            <div class="service-block">
                                <span><i class="fa fa-users"></i></span>
                                <h2 class="service-name">Phòng họp</h2>
                                <p>Dịch vụ phòng họp tại khách sạn nhằm phục vụ nhu cầu của đối tượng khách hàng là các doanh nghiệp, mong muốn có một nơi nào đó ngoài văn phòng công ty có thể họp, những nơi yên tĩnh để họp, trao đổi.</p>
                            </div><!-- end service-block -->
                        </div><!-- end columns -->

                        <div class="col-12 col-md-6 col-lg-3 col-xl-3">
                            <div class="service-block">
                                <span><i class="fa fa-wifi"></i></span>
                                <h2 class="service-name">Free Wifi</h2>
                                <p>Wifi vẫn luôn nằm trong tiêu chuẩn cơ bản của khách sạn. Ở các tầng của khách sạn đều sẽ có thiết bị phát wifi.</p>
                            </div><!-- end service-block -->
                        </div><!-- end columns -->
                    </div><!-- end row -->
                </div><!-- end service-blocks -->

                <div class="butn text-center">
                    <a href="{{route('user.service')}}" class="btn btn-lg btn-padding btn-g-border">Chi tiết dịch vụ</a>
                </div><!-- end butn -->

            </div><!-- end columns -->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end services -->





@endsection
