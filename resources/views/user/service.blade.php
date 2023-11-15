@extends('user.master')
@section('main-content')
    <!--============= PAGE-COVER =============-->
    <section class="page-cover" id="service-cover">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="page-title">Dịch vụ</h1>
                    <ul class="breadcrumb justify-content-center">
                        <li class="breadcrumb-item"><a href="{{route('user.index')}}">Trang chủ</a></li>
                        <li class="active breadcrumb-item">Dịch vụ</li>
                    </ul>
                </div><!-- end columns -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section><!-- end page-cover -->


    <!--=============INNERPAGE-WRAPPER ===========-->
    <section id="our-services-2" class="innerpage-wrapper">

        <div id="services-2" class="innerpage-section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-12 col-lg-12 col-xl-12">
                        <div class="page-heading">
                            <h2><span>Dịch vụ</span> tuyệt vời của chúng tôi</h2>
                            <p>Với nhu cầu giải trí, nghỉ dưỡng ngày càng cao, xu hướng sử dụng các dịch vụ đi kèm tiện lợi sẽ đón nhận được sự hài lòng cho khách hàng. Đây là một trong những lý do giúp khách sạn thành công trong việc kinh doanh. Bởi vậy, việc quản trị chất lượng dịch vụ khách sạn cũng vô cùng quan trọng và cần thiết.</p>
                        </div><!-- end page-heading -->

                        <div id="service-blocks">
                            <div class="row">

                                <div class="col-12 col-md-6 col-lg-4 col-xl-4">
                                    <div class="service-block-2">
                                        <span class="main-icon"><i class="fa fa-coffee"></i></span>
                                        <div class="s-2-text">
                                            <h2 class="service-name">Nhà hàng</h2>
                                            <p>Nhà hàng cung cấp đầy đủ các món ăn dành cho bữa ăn sáng, trưa, tối cho du khách, không chỉ là du khách trong nước mà còn cả nước ngoài. Đặc biệt là bữa sáng, du khách có thói quen ăn sáng luôn tại khách sạn nên bữa sáng vô cùng quan trọng để thỏa mãn nhu cầu của khách.</p>
                                        </div><!-- end s-2-text -->

                                        <span class="back-icon"><i class="fa fa-coffee"></i></span>
                                    </div><!-- end service-block-2 -->
                                </div><!-- end columns -->

                                <div class="col-12 col-md-6 col-lg-4 col-xl-4">
                                    <div class="service-block-2">
                                        <span class="main-icon"><i class="fa fa-leaf"></i></span>
                                        <div class="s-2-text">
                                            <h2 class="service-name">Spa</h2>
                                            <p>Dịch vụ Spa thường có ở các khách sạn có quy mô lớn nhưng nếu các khách sạn có thêm dịch vụ này thì sẽ là một điểm cộng đáng kể. Đối với các chị em phụ nữ, không chỉ đi tham quan nghỉ dưỡng mà các chị em phụ nữ muốn chăm sóc sắc đẹp, sức khỏe cũng như tinh thần cho bản thân.</p>
                                        </div><!-- end s-2-text -->

                                        <span class="back-icon"><i class="fa fa-leaf"></i></span>
                                    </div><!-- end service-block-2 -->
                                </div><!-- end columns -->

                                <div class="col-12 col-md-6 col-lg-4 col-xl-4">
                                    <div class="service-block-2">
                                        <span class="main-icon"><i class="fa fa-users"></i></span>
                                        <div class="s-2-text">
                                            <h2 class="service-name">Phòng họp</h2>
                                            <p>Dịch vụ phòng họp tại khách sạn nhằm phục vụ nhu cầu của đối tượng khách hàng là các doanh nghiệp, mong muốn có một nơi nào đó ngoài văn phòng công ty có thể họp, những nơi yên tĩnh để họp, trao đổi, những nơi yên tĩnh để họp, trao đổi.</p>

                                        </div><!-- end s-2-text -->

                                        <span class="back-icon"><i class="fa fa-users"></i></span>
                                    </div><!-- end service-block-2 -->
                                </div><!-- end columns -->

                                <div class="col-12 col-md-6 col-lg-4 col-xl-4">
                                    <div class="service-block-2">
                                        <span class="main-icon"><i class="fa fa-wifi"></i></span>
                                        <div class="s-2-text">
                                            <h2 class="service-name">Miễn phí Wifi</h2>
                                            <p>Đối với các Khách sạn, wifi đã trở thành một dịch vụ free đặc biệt quan trọng. Wifi cho khách sạn đã trở thành một trong những nhu cầu thiết yếu bậc nhất.</p>
                                        </div><!-- end s-2-text -->

                                        <span class="back-icon"><i class="fa fa-wifi"></i></span>
                                    </div><!-- end service-block-2 -->
                                </div><!-- end columns -->

                                <div class="col-12 col-md-6 col-lg-4 col-xl-4">
                                    <div class="service-block-2">
                                        <span class="main-icon"><i class="fa fa-fax"></i></span>
                                        <div class="s-2-text">
                                            <h2 class="service-name">Điện thoại bàn</h2>
                                            <p>là thiết bị cần thiết mà bất kỳ khách sạn nào đều sử dụng. Chúng hữu ích và mang đến sự tiện lợi trong việc kết nối giữa khách sạn với khách nghỉ.</p>
                                        </div><!-- end s-2-text -->

                                        <span class="back-icon"><i class="fa fa-fax"></i></span>
                                    </div><!-- end service-block-2 -->
                                </div><!-- end columns -->

                                <div class="col-12 col-md-6 col-lg-4 col-xl-4">
                                    <div class="service-block-2">
                                        <span class="main-icon"><i class="fa fa-clock-o"></i></span>
                                        <div class="s-2-text">
                                            <h2 class="service-name">Checking</h2>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti sit
                                                dicta quae natus quasi ratione quis id, tenetur atque blanditiis.</p>
                                        </div><!-- end s-2-text -->

                                        <span class="back-icon"><i class="fa fa-clock-o"></i></span>
                                    </div><!-- end service-block-2 -->
                                </div><!-- end columns -->


                            </div><!-- end row -->
                        </div><!-- end service-blocks -->

                    </div><!-- end columns -->
                </div><!-- end row -->
            </div><!-- end container -->
        </div><!-- end services -->

    </section><!-- end innerpage-wrapper -->
@endsection