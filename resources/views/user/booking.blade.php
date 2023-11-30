@extends('user.master')
@section('main-content')
    <!--============= PAGE-COVER =============-->
    <section class="page-cover" id="reservation-cover">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="page-title">Đặt phòng</h1>
                    <ul class="breadcrumb justify-content-center">
                        <li class="breadcrumb-item"><a href="{{route('user.index')}}">Trang chủ</a></li>
                        <li class="active breadcrumb-item">Đặt phòng</li>
                    </ul>
                </div><!-- end columns -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section><!-- end page-cover -->
    
    
    <!--=============INNERPAGE-WRAPPER ===========-->
    <section id="reservation-page" class="innerpage-wrapper">
        
        <div id="reservation" class="search-bar">
            <div class="container">
                <div class="row">

                    <div class="col-12 col-md-12 col-lg-4 col-xl-4 side-bar left-side-bar">
                        <div class="selected-room-block">
                            <div class="selected-room-img">
                                <img src="{{asset('storage/images/'.$room->image)}}" class="img-fluid" alt="selected-room" />
                            </div><!-- end selected-room-img -->
                            
                            <div class="selected-room-detail">
                                <h2>{{$room->name}}</h2>
                                <div class="rating">
                                    <span><i class="fa fa-star"></i></span>
                                    <span><i class="fa fa-star"></i></span>
                                    <span><i class="fa fa-star"></i></span>
                                    <span><i class="fa fa-star"></i></span>
                                    <span><i class="fa fa-star-o"></i></span>
                                </div><!-- end rating -->
                                
                                <p>{!!$room->description!!}</p>
                                
                                <p class="selected-room-price">Giá <span>{{number_format($room->price)}}đ</span> / Đêm</p>
                            </div><!-- end selected-room-detail -->
                        </div><!-- end selected-room-block -->
                    </div><!-- end columns -->
                    
                    <div class="col-12 col-md-12 col-lg-8 col-xl-8">  
                        <div class="space-left">                    
                            <div class="innerpage-heading">
                                <h1>Đặt phòng</h1>
                            </div><!-- end innerpage-heading -->
                            
                            <form method="POST" action="{{route('UserBooking.store')}}">
                                @csrf
                                <div class="row">
                                    <input type="hidden" name="room_id" value="{{$room->id}}">
                                    {{-- <div class="col-12 col-md-6 col-lg-6 col-xl-6">
                                        <div class="form-group">    
                                            <input type="text" class="form-control" placeholder="First Name" required/>
                                            <span><i class="fa fa-user"></i></span>
                                        </div>
                                    </div><!-- end columns --> --}}
                                    
                                    <div class="col-12 col-md-12 col-lg-12 col-xl-12">
                                        <div class="form-group">
                                            <input type="text" name="name" class="form-control" placeholder="Tên người đặt" required/>
                                            <span><i class="fa fa-user"></i></span>
                                        </div>
                                    </div><!-- end columns -->
                                    
                                    <div class="col-12 col-md-6 col-lg-6 col-xl-6">
                                        <div class="form-group">    
                                            <input type="email" name="email" class="form-control" placeholder="Email" required/>
                                            <span><i class="fa fa-envelope"></i></span>
                                        </div>
                                    </div><!-- end columns -->
                                    
                                    <div class="col-12 col-md-6 col-lg-6 col-xl-6">
                                        <div class="form-group">
                                            <input type="text" name="phone" class="form-control" placeholder="Số điện thoại" required/>
                                            <span><i class="fa fa-phone"></i></span>
                                        </div>
                                    </div><!-- end columns -->
                                    
                                    <div class="col-12 col-md-6 col-lg-6 col-xl-6">
                                        <div class="form-group">    
                                            <input type="date" name="check_in" class="form-control dpd1" placeholder="Check-in" required/>
                                            <span><i class="fa fa-calendar"></i></span>
                                        </div>
                                    </div><!-- end columns -->
                                    
                                    <div class="col-12 col-md-6 col-lg-6 col-xl-6">
                                        <div class="form-group">
                                            <input type="date" class="form-control dpd2" placeholder="Check-out" name="check_out" required/>
                                            <span><i class="fa fa-calendar"></i></span>
                                        </div>
                                    </div><!-- end columns -->
                                    

                                    
                                    <div class="col-12 col-md-12 col-lg-12 col-xl-12">
                                        <div class="form-group">
                                            <textarea class="form-control" name="description" rows="5" placeholder="Enter Message"></textarea>
                                        </div>
                                    </div><!-- end columns -->
                                    
                                    <div class="col-12 col-md-12 col-lg-12 col-xl-12">
                                        <button type="submit" class="btn btn-yellow" style="padding-top: 0px; ">Đặt ngay</button>
                                    </div><!-- end columns -->
                                    
                                </div><!-- end row -->
                            </form>
                        </div><!-- end space-left -->
                    </div><!-- end columns -->
                </div><!-- end row -->
            </div><!-- end container -->
        </div><!-- end reservation -->
    </section><!-- end innerpage-wrapper -->
    
    
@endsection