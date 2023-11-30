@extends('user.master')
@section('main-content')
<!--============= PAGE-COVER =============-->
<section class="page-cover" id="error-cover">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="page-title">Đặt phòng thành công </h1>
                <ul class="breadcrumb justify-content-center">
                    <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
                    <li class="active breadcrumb-item">Đặt phòng thành công</li>
                </ul>
            </div><!-- end columns -->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end page-cover -->


<!--=============INNERPAGE-WRAPPER ===========-->
<section id="error-page" class="innerpage-wrapper">

    <div id="error-text" class="innerpage-section-padding">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-12 col-lg-12 col-xl-12 text-center">
                    <h2>Cảm ơn bạn đã đặt phòng</h2>
                    <div class="butn text-center">
                        <a href="{{route('user.index')}}" class="btn btn-padding btn-yellow">Trang chủ</a>
                    </div><!-- end butn -->
                </div><!-- end columns -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end error-text -->

</section><!-- end innerpage-wrapper -->
@endsection