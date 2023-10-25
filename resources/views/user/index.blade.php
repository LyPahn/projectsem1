@extends('user.master')
@section('main-content')
    <!--================Banner Area =================-->
    <section class="banner_area">
        <div class="booking_table d_flex align-items-center">
            <div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background=""></div>
            <div class="container">
                <div class="banner_content text-center">
                    <h2>Relax Your Mind</h2>
                    <p>If you are looking at blank cassettes on the web, you may be very confused at the<br> difference in
                        price. You may see some for as low as $.17 each.</p>
                    <a href="#" class="btn theme_btn button_hover">Get Started</a>
                </div>
            </div>
        </div>

    </section>
    <!--================Banner Area =================-->

    <!--================ Accomodation Area  =================-->
    <section class="accomodation_area section_gap">
        <div class="container">
            <div class="section_title text-center">
                <h2 class="title_color">Hotel Accomodation</h2>
                <p>We all live in an age that belongs to the young at heart. Life that is becoming extremely fast, </p>
            </div>
            <div class="row mb_30">
                <div class="col-lg-3 col-sm-6">
                    <div class="accomodation_item text-center">
                        <div class="hotel_img">
                            <img src="{{ asset('fe') }}/image/room1.jpg" alt="">
                            <a href="#" class="btn theme_btn button_hover">Book Now</a>
                        </div>
                        <a href="#">
                            <h4 class="sec_h4">Double Deluxe Room</h4>
                        </a>
                        <h5>$250<small>/night</small></h5>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="accomodation_item text-center">
                        <div class="hotel_img">
                            <img src="{{ asset('fe') }}/image/room2.jpg" alt="">
                            <a href="#" class="btn theme_btn button_hover">Book Now</a>
                        </div>
                        <a href="#">
                            <h4 class="sec_h4">Single Deluxe Room</h4>
                        </a>
                        <h5>$200<small>/night</small></h5>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="accomodation_item text-center">
                        <div class="hotel_img">
                            <img src="{{ asset('fe') }}/image/room3.jpg" alt="">
                            <a href="#" class="btn theme_btn button_hover">Book Now</a>
                        </div>
                        <a href="#">
                            <h4 class="sec_h4">Honeymoon Suit</h4>
                        </a>
                        <h5>$750<small>/night</small></h5>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="accomodation_item text-center">
                        <div class="hotel_img">
                            <img src="{{ asset('fe') }}/image/room4.jpg" alt="">
                            <a href="#" class="btn theme_btn button_hover">Book Now</a>
                        </div>
                        <a href="#">
                            <h4 class="sec_h4">Economy Double</h4>
                        </a>
                        <h5>$200<small>/night</small></h5>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================ Accomodation Area  =================-->

    <!--================ Facilities Area  =================-->
    <section class="facilities_area section_gap">
        <div class="overlay bg-parallax" data-stellar-ratio="0.8" data-stellar-vertical-offset="0" data-background="">
        </div>
        <div class="container">
            <div class="section_title text-center">
                <h2 class="title_w">Royal Facilities</h2>
                <p>Who are in extremely love with eco friendly system.</p>
            </div>
            <div class="row mb_30">
                <div class="col-lg-4 col-md-6">
                    <div class="facilities_item">
                        <h4 class="sec_h4"><i class="lnr lnr-dinner"></i>Restaurant</h4>
                        <p>Usage of the Internet is becoming more common due to rapid advancement of technology and power.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="facilities_item">
                        <h4 class="sec_h4"><i class="lnr lnr-bicycle"></i>Sports CLub</h4>
                        <p>Usage of the Internet is becoming more common due to rapid advancement of technology and power.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="facilities_item">
                        <h4 class="sec_h4"><i class="lnr lnr-shirt"></i>Swimming Pool</h4>
                        <p>Usage of the Internet is becoming more common due to rapid advancement of technology and power.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="facilities_item">
                        <h4 class="sec_h4"><i class="lnr lnr-car"></i>Rent a Car</h4>
                        <p>Usage of the Internet is becoming more common due to rapid advancement of technology and power.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="facilities_item">
                        <h4 class="sec_h4"><i class="lnr lnr-construction"></i>Gymnesium</h4>
                        <p>Usage of the Internet is becoming more common due to rapid advancement of technology and power.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="facilities_item">
                        <h4 class="sec_h4"><i class="lnr lnr-coffee-cup"></i>Bar</h4>
                        <p>Usage of the Internet is becoming more common due to rapid advancement of technology and power.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================ Facilities Area  =================-->

    <!--================ About History Area  =================-->
    <section class="about_history_area section_gap">
        <div class="container">
            <div class="row">
                <div class="col-md-6 d_flex align-items-center">
                    <div class="about_content ">
                        <h2 class="title title_color">About Us <br>Our History<br>Mission & Vision</h2>
                        <p>inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct
                            standards especially in the workplace. That’s why it’s crucial that, as women, our behavior on
                            the job is beyond reproach. inappropriate behavior is often laughed.</p>
                        <a href="#" class="button_hover theme_btn_two">Request Custom Price</a>
                    </div>
                </div>
                <div class="col-md-6">
                    <img class="img-fluid" src="{{ asset('fe') }}/image/about_bg.jpg" alt="img">
                </div>
            </div>
        </div>
    </section>
    <!--================ About History Area  =================-->



    <!--================ Latest Blog Area  =================-->
    <section class="latest_blog_area section_gap">
        <div class="container">
            <div class="section_title text-center">
                <h2 class="title_color">latest posts from blog</h2>
                <p>The French Revolution constituted for the conscience of the dominant aristocratic class a fall from </p>
            </div>
            <div class="row mb_30">
                @foreach ($blog as $item)
                <div class="col-lg-4 col-md-6">
                    <div class="single-recent-blog-post">
                        <div class="thumb">
                            <img class="img-fluid" src="{{ asset('fe/image/blog/'.$item->image) }}" alt="post">
                        </div>
                        <div class="details">
                            <a href="{{$item->link_blog}}">
                                <h4 class="sec_h4">{{$item->tittle}}</h4>
                            </a>
                            {!!$item->description!!}
                            <h6 class="date title_color">{{$item->created_at}}</h6>
                        </div>
                    </div>
                </div>    
                @endforeach
                
            </div>
        </div>
    </section>
    <!--================ Recent Area  =================-->
@endsection
