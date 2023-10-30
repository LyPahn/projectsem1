@extends('user.master')
@section('main-content')
    <!--================Breadcrumb Area =================-->
    <section class="breadcrumb_area">
        <div class="overlay bg-parallax" data-stellar-ratio="0.8" data-stellar-vertical-offset="0" data-background=""></div>
        <div class="container">
            <div class="page-cover text-center">
                <h2 class="page-cover-tittle">Danh sách phòng</h2>
                <ol class="breadcrumb">
                    <li><a href="index.html">Trang chủ</a></li>
                    <li class="active">Danh sách phòng</li>
                </ol>
            </div>
        </div>
    </section>
    <!--================Breadcrumb Area =================-->

    <!--================ Accomodation Area  =================-->
    <section class="accomodation_area section_gap">
        <div class="container">
            <div class="row mb_30">
                @foreach ($room as $item)
                <div class="col-lg-3 col-sm-6">
                    <div class="accomodation_item text-center">
                        <div class="hotel_img">
                            <img src="{{asset('storage/images/'.$item->image)}}" alt="" width="100%">
                            <a href="#" class="btn theme_btn button_hover">Đặt phòng</a>
                        </div>
                        <a href="#">
                            <h4 class="sec_h4">{{$item->name}}</h4>
                        </a>
                        <h5>{{number_Format($item->price)}}VND<small>/Đêm</small></h5>
                    </div>
                </div>
                @endforeach
                
                
            </div>
            <div>{{$room->links()}}</div>
        </div>
        
    </section>
    <!--================ Accomodation Area  =================-->
@endsection
