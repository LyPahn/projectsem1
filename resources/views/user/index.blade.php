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
                                <h1 id="welcome">Welcome To Star Hotel</h1>
                                <h3 id="tagline">Enjoy Your Life With Us!</h3>
                                <div class="hero-text">
                                    <form>
                                        <div class="row">
                                            <div class="col-12 col-md-6 col-lg-3 col-xl-3">
                                                <div class="form-group">
                                                    <input type="text" class="form-control dpd1"
                                                        placeholder="Arrival Date" id="datepicker" required />
                                                    <span><i class="fa fa-calendar"></i></span>
                                                </div>
                                            </div><!-- end columns -->

                                            <div class="col-12 col-md-6 col-lg-3 col-xl-3">
                                                <div class="form-group">
                                                    <input type="text" class="form-control dpd2"
                                                        placeholder="Departure Date" id="datepicker1" required />
                                                    <span><i class="fa fa-calendar"></i></span>
                                                </div>
                                            </div><!-- end columns -->

                                            <div class="col-12 col-md-6 col-lg-3 col-xl-3">
                                                <div class="form-group">
                                                    <span><i class="fa fa-angle-down"></i></span>
                                                    <select class="form-control">
                                                        <option selected>Adults</option>
                                                        <option>1</option>
                                                        <option>2</option>
                                                        <option>3</option>
                                                    </select>
                                                </div>
                                            </div><!-- end columns -->

                                            <div class="col-12 col-md-6 col-lg-3 col-xl-3">
                                                <div class="form-group">
                                                    <span><i class="fa fa-angle-down"></i></span>
                                                    <select class="form-control">
                                                        <option selected>Children</option>
                                                        <option>1</option>
                                                        <option>2</option>
                                                        <option>3</option>
                                                    </select>
                                                </div>
                                            </div><!-- end columns -->

                                            <div class="col-12 col-md-12 col-lg-12 col-xl-12 text-center">
                                                <a href="#" class="btn btn-default btn-lg btn-padding">Check
                                                    Availability</a>
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
                <h2>About Star Hotel</h2>
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt
                    ut laoreet dolore magna aliquam erat volutpat.</p>
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt
                    ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci
                    tation ullamcorper suscipit.</p>
                <a href="about-1.html" class="btn btn-lg btn-padding">View More</a>
            </div><!-- end columns -->

            <div class="col-12 col-md-6 col-lg-6 col-xl-6">

            </div><!-- end columns -->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end about -->


{{-- <!--=============== BANNER-1 ==============-->
<section id="banner-1" class="banner-padding">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-12 col-lg-12 col-xl-12 text-center">
                <h2>Get 25% off on Any Other Events</h2>
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt
                    ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci
                    tation ullamcorper suscipit.</p>
                <div class="row">
                    <div class="col-12 col-md-6 col-lg-6 col-xl-6 text-center text-md-right">
                        <a href="#" class="btn btn-lg btn-padding btn-w-border" id="btn-price">From 99 $</a>
                    </div><!-- end columns -->

                    <div class="col-12 col-md-6 col-lg-6 col-xl-6 text-center text-md-left">
                        <a href="#" class="btn btn-lg btn-padding btn-yellow">Book Now</a>
                    </div><!-- end columns -->
                </div><!-- end row -->
            </div><!-- end columns -->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end banner-1 --> --}}


<!--================ ROOMS ==============-->
<section id="rooms" class="section-padding">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-12 col-lg-12 col-xl-12">
                <div class="page-heading">
                    <h2>Our <span>Best Rooms</span></h2>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod
                        tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                </div><!-- end page-heading -->

                <div class="owl-carousel owl-theme" id="owl-rooms">

                    <div>
                        <div class="grid">
                            <div class="room-block">
                                <div class="room-img">
                                    <img src="{{asset('fe')}}/images/room-1.jpg" class="img-fluid" alt="room-image" />
                                    <div class="room-title">
                                        <a href="#">
                                            <h3>Single Room</h3>
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
                                        <li>89$ / Night <span class="link"><a
                                                    href="room-details-left-sidebar.html">View Details</a></span>
                                        </li>
                                    </ul>
                                </div><!-- end room-price -->
                            </div><!-- end room-block -->
                        </div><!-- end grid -->

                        <div class="grid">
                            <div class="room-block">
                                <div class="room-img">
                                    <img src="{{asset('fe')}}/images/room-2.jpg" class="img-fluid" alt="room-image" />
                                    <div class="room-title">
                                        <a href="#">
                                            <h3>Pro Delux Room</h3>
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
                                        <li>89$ / Night <span class="link"><a
                                                    href="room-details-left-sidebar.html">View Details</a></span>
                                        </li>
                                    </ul>
                                </div><!-- end room-price -->
                            </div><!-- end room-block -->
                        </div><!-- end grid -->
                    </div><!-- end item -->

                    <div>
                        <div class="grid">
                            <div class="room-block">
                                <div class="room-img">
                                    <img src="{{asset('fe')}}/images/room-3.jpg" class="img-fluid" alt="room-image" />
                                    <div class="room-title">
                                        <a href="#">
                                            <h3>Delux Room</h3>
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
                                        <li>89$ / Night <span class="link"><a
                                                    href="room-details-left-sidebar.html">View Details</a></span>
                                        </li>
                                    </ul>
                                </div><!-- end room-price -->
                            </div><!-- end room-block -->
                        </div><!-- end grid -->

                        <div class="grid">
                            <div class="room-block">
                                <div class="room-img">
                                    <img src="{{asset('fe')}}/images/room-4.jpg" class="img-fluid" alt="room-image" />
                                    <div class="room-title">
                                        <a href="#">
                                            <h3>Double Room</h3>
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
                                        <li>89$ / Night <span class="link"><a
                                                    href="room-details-left-sidebar.html">View Details</a></span>
                                        </li>
                                    </ul>
                                </div><!-- end room-price -->
                            </div><!-- end room-block -->
                        </div><!-- end grid -->
                    </div><!-- end item -->

                    <div>
                        <div class="grid">
                            <div class="room-block">
                                <div class="room-img">
                                    <img src="{{asset('fe')}}/images/room-5.jpg" class="img-fluid" alt="room-image" />
                                    <div class="room-title">
                                        <a href="#">
                                            <h3>Royal Room</h3>
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
                                        <li>89$ / Night <span class="link"><a
                                                    href="room-details-left-sidebar.html">View Details</a></span>
                                        </li>
                                    </ul>
                                </div><!-- end room-price -->
                            </div><!-- end room-block -->
                        </div><!-- end grid -->

                        <div class="grid">
                            <div class="room-block">
                                <div class="room-img">
                                    <img src="{{asset('fe')}}/images/room-6.jpg" class="img-fluid" alt="room-image" />
                                    <div class="room-title">
                                        <a href="#">
                                            <h3>Single Room</h3>
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
                                        <li>89$ / Night <span class="link"><a
                                                    href="room-details-left-sidebar.html">View Details</a></span>
                                        </li>
                                    </ul>
                                </div><!-- end room-price -->
                            </div><!-- end room-block -->
                        </div><!-- end grid -->
                    </div><!-- end item -->

                    <div>
                        <div class="grid">
                            <div class="room-block">
                                <div class="room-img">
                                    <img src="{{asset('fe')}}/images/room-3.jpg" class="img-fluid" alt="room-image" />
                                    <div class="room-title">
                                        <a href="#">
                                            <h3>Delux Room</h3>
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
                                        <li>89$ / Night <span class="link"><a
                                                    href="room-details-left-sidebar.html">View Details</a></span>
                                        </li>
                                    </ul>
                                </div><!-- end room-price -->
                            </div><!-- end room-block -->
                        </div><!-- end grid -->

                        <div class="grid">
                            <div class="room-block">
                                <div class="room-img">
                                    <img src="{{asset('fe')}}/images/room-4.jpg" class="img-fluid" alt="room-image" />
                                    <div class="room-title">
                                        <a href="#">
                                            <h3>Double Room</h3>
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
                                        <li>89$ / Night <span class="link"><a
                                                    href="room-details-left-sidebar.html">View Details</a></span>
                                        </li>
                                    </ul>
                                </div><!-- end room-price -->
                            </div><!-- end room-block -->
                        </div><!-- end grid -->
                    </div><!-- end item -->

                    <div>
                        <div class="grid">
                            <div class="room-block">
                                <div class="room-img">
                                    <img src="{{asset('fe')}}/images/room-1.jpg" class="img-fluid" alt="room-image" />
                                    <div class="room-title">
                                        <a href="#">
                                            <h3>Single Room</h3>
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
                                        <li>89$ / Night <span class="link"><a
                                                    href="room-details-left-sidebar.html">View Details</a></span>
                                        </li>
                                    </ul>
                                </div><!-- end room-price -->
                            </div><!-- end room-block -->
                        </div><!-- end grid -->

                        <div class="grid">
                            <div class="room-block">
                                <div class="room-img">
                                    <img src="{{asset('fe')}}/images/room-2.jpg" class="img-fluid" alt="room-image" />
                                    <div class="room-title">
                                        <a href="#">
                                            <h3>Pro Delux Room</h3>
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
                                        <li>89$ / Night <span class="link"><a
                                                    href="room-details-left-sidebar.html">View Details</a></span>
                                        </li>
                                    </ul>
                                </div><!-- end room-price -->
                            </div><!-- end room-block -->
                        </div><!-- end grid -->
                    </div><!-- end item -->

                    <div>
                        <div class="grid">
                            <div class="room-block">
                                <div class="room-img">
                                    <img src="{{asset('fe')}}/images/room-5.jpg" class="img-fluid" alt="room-image" />
                                    <div class="room-title">
                                        <a href="#">
                                            <h3>Royal Room</h3>
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
                                        <li>89$ / Night <span class="link"><a
                                                    href="room-details-left-sidebar.html">View Details</a></span>
                                        </li>
                                    </ul>
                                </div><!-- end room-price -->
                            </div><!-- end room-block -->
                        </div><!-- end grid -->

                        <div class="grid">
                            <div class="room-block">
                                <div class="room-img">
                                    <img src="{{asset('fe')}}/images/room-6.jpg" class="img-fluid" alt="room-image" />
                                    <div class="room-title">
                                        <a href="#">
                                            <h3>Single Room</h3>
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
                                        <li>89$ / Night <span class="link"><a
                                                    href="room-details-left-sidebar.html">View Details</a></span>
                                        </li>
                                    </ul>
                                </div><!-- end room-price -->
                            </div><!-- end room-block -->
                        </div><!-- end grid -->
                    </div><!-- end item -->

                    <div>
                        <div class="grid">
                            <div class="room-block">
                                <div class="room-img">
                                    <img src="{{asset('fe')}}/images/room-3.jpg" class="img-fluid" alt="room-image" />
                                    <div class="room-title">
                                        <a href="#">
                                            <h3>Delux Room</h3>
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
                                        <li>89$ / Night <span class="link"><a
                                                    href="room-details-left-sidebar.html">View Details</a></span>
                                        </li>
                                    </ul>
                                </div><!-- end room-price -->
                            </div><!-- end room-block -->
                        </div><!-- end grid -->

                        <div class="grid">
                            <div class="room-block">
                                <div class="room-img">
                                    <img src="{{asset('fe')}}/images/room-4.jpg" class="img-fluid" alt="room-image" />
                                    <div class="room-title">
                                        <a href="#">
                                            <h3>Double Room</h3>
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
                                        <li>89$ / Night <span class="link"><a
                                                    href="room-details-left-sidebar.html">View Details</a></span>
                                        </li>
                                    </ul>
                                </div><!-- end room-price -->
                            </div><!-- end room-block -->
                        </div><!-- end grid -->
                    </div><!-- item -->

                </div><!-- end owl-rooms -->
            </div><!-- end columns -->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end rooms -->


{{-- <!--==================== OFFERS ==================-->
<section id="offers" class="section-padding bg-grey">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-12 col-lg-12 col-xl-12">
                <div class="page-heading">
                    <h2>Latest <span>Offers</span></h2>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod
                        tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis
                        nostrud exerci tation ullamcorper suscipit.</p>
                </div><!-- end page-heading -->

                <div class="row" id="offer-blocks">

                    <div class="col-12 col-md-12 col-lg-6 col-xl-6">
                        <a href="#">
                            <div class="offer-block" id="offer-1">
                                <div class="offer-mask">
                                    <p class="tag">Enjoy with 25% OFF</p>
                                    <div class="offer-info">
                                        <h2>Dining Offer</h2>
                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam
                                            nonummy nibh.</p>
                                        <ul class="list-unstyled">
                                            <li>- Flight Ticket</li>
                                            <li>- Restaurant (Full Board)</li>
                                            <li>- Music Concert</li>
                                            <li>- Airport Pick-up</li>
                                            <li>- Sport Activities</li>
                                        </ul>
                                    </div><!-- end offer-info -->
                                </div><!-- end offer-mask -->
                            </div><!-- end offer-block -->
                        </a>
                    </div><!-- end columns -->

                    <div class="col-12 col-md-12 col-lg-6 col-xl-6">
                        <a href="#">
                            <div class="offer-block" id="offer-2">
                                <div class="offer-img">
                                    <div class="offer-mask">
                                        <p class="tag">Enjoy with 25% OFF</p>
                                        <div class="offer-info">
                                            <h2>Weekend Spa Offer</h2>
                                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam
                                                nonummy nibh.</p>
                                            <ul class="list-unstyled">
                                                <li>- Flight Ticket</li>
                                                <li>- Restaurant (Full Board)</li>
                                                <li>- Music Concert</li>
                                                <li>- Airport Pick-up</li>
                                                <li>- Sport Activities</li>
                                            </ul>
                                        </div><!-- end offer-info -->
                                    </div><!-- end offer-mask -->
                                </div><!-- end offer-img -->
                            </div><!-- end offer-block -->
                        </a>
                    </div><!-- end columns -->

                </div><!-- end row -->

                <div class="butn text-center">
                    <a href="offers.html" class="btn btn-lg btn-padding btn-g-border">View More Offers</a>
                </div><!-- end butn -->

            </div><!-- end columns -->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end offers --> --}}


<!--================ SERVICES ==============-->
<section id="services" class="section-padding">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-12 col-lg-12 col-xl-12">
                <div class="page-heading">
                    <h2>Our <span>Awesome Services</span></h2>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod
                        tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis
                        nostrud exerci tation ullamcorper suscipit.</p>
                </div><!-- end page-heading -->

                <div id="service-blocks">
                    <div class="row">

                        <div class="col-12 col-md-6 col-lg-3 col-xl-3">
                            <div class="service-block">
                                <span><i class="fa fa-coffee"></i></span>
                                <h2 class="service-name">Restaurant</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti sit dicta quae
                                    natus quasi ratione quis id, tenetur atque blanditiis.</p>
                            </div><!-- end service-block -->
                        </div><!-- end columns -->

                        <div class="col-12 col-md-6 col-lg-3 col-xl-3">
                            <div class="service-block">
                                <span><i class="fa fa-leaf"></i></span>
                                <h2 class="service-name">Spa</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti sit dicta quae
                                    natus quasi ratione quis id, tenetur atque blanditiis.</p>
                            </div><!-- end service-block -->
                        </div><!-- end columns -->

                        <div class="col-12 col-md-6 col-lg-3 col-xl-3">
                            <div class="service-block">
                                <span><i class="fa fa-users"></i></span>
                                <h2 class="service-name">Meeting Rooms</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti sit dicta quae
                                    natus quasi ratione quis id, tenetur atque blanditiis.</p>
                            </div><!-- end service-block -->
                        </div><!-- end columns -->

                        <div class="col-12 col-md-6 col-lg-3 col-xl-3">
                            <div class="service-block">
                                <span><i class="fa fa-wifi"></i></span>
                                <h2 class="service-name">Free Wifi</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti sit dicta quae
                                    natus quasi ratione quis id, tenetur atque blanditiis.</p>
                            </div><!-- end service-block -->
                        </div><!-- end columns -->
                    </div><!-- end row -->
                </div><!-- end service-blocks -->

                <div class="butn text-center">
                    <a href="services-1.html" class="btn btn-lg btn-padding btn-g-border">More Services</a>
                </div><!-- end butn -->

            </div><!-- end columns -->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end services -->


{{-- <!--===================== PHOTO-GALLERY ===================-->
<section id="photo-gallery" class="section-padding no-pd-top">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-12 col-lg-12 col-xl-12">
                <div class="page-heading">
                    <h2>Picture <span>Gallery</span></h2>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod
                        tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis
                        nostrud exerci tation ullamcorper suscipit.</p>
                </div><!-- end page-heading -->

                <div id="filter-buttons" class="text-center">
                    <button class="btn filter-button active" data-filter="filter">Cafe</button>
                    <button class="btn filter-button first-btn" data-filter="meeting">Meeting Rooms</button>
                    <button class="btn filter-button" data-filter="spa">SPA</button>
                    <button class="btn filter-button" data-filter="pool">Pool</button>
                    <button class="btn filter-button" data-filter="deluxe">Deluxe Rooms</button>
                </div><!-- end filter-buttons -->
            </div><!-- end columns -->
        </div><!-- end row -->
    </div><!-- end container -->


    <div class="container-fluid no-padding">
        <div class="row">
            <div id="gallery">

                <div class="gallery-product col-12 col-md-4 col-lg-3 col-xl-15  filter work video no-padding">
                    <div class="gallery-block">
                        <a href="{{asset('fe')}}/images/gallery-1.jpg" title="image-1" class="with-caption image-link">
                            <div class="gallery-img">
                                <img class="img-fluid" src="{{asset('fe')}}/images/gallery-1.jpg" alt="image-1">

                                <div class="gallery-mask">
                                    <div class="gallery-title">
                                        <h2>Spa and Beauty</h2>
                                        <p>2 Pictures</p>
                                    </div> <!-- end gallery-title -->
                                </div><!-- end gallery-mask -->
                            </div><!-- end gallery-img -->
                        </a>
                    </div><!-- end gallery-block -->
                </div><!-- end gallery-product -->

                <div class="gallery-product col-12 col-md-4 col-lg-3 col-xl-15  filter cafe video no-padding">
                    <div class="gallery-block">
                        <a href="{{asset('fe')}}/images/gallery-2.jpg" title="image-2" class="with-caption image-link">
                            <div class="gallery-img">
                                <img class="img-fluid" src="{{asset('fe')}}/images/gallery-2.jpg" alt="image-2">

                                <div class="gallery-mask">
                                    <div class="gallery-title">
                                        <h2>Spa and Beauty</h2>
                                        <p>2 Pictures</p>
                                    </div> <!-- end gallery-title -->
                                </div><!-- end gallery-mask -->
                            </div><!-- end gallery-img -->
                        </a>
                    </div><!-- end gallery-block -->
                </div><!-- end gallery-product -->

                <div class="gallery-product col-12 col-md-4 col-lg-3 col-xl-15  filter spa video no-padding">
                    <div class="gallery-block">
                        <a href="{{asset('fe')}}/images/gallery-3.jpg" title="image-3" class="with-caption image-link">
                            <div class="gallery-img">
                                <img class="img-fluid" src="{{asset('fe')}}/images/gallery-3.jpg" alt="image-3">

                                <div class="gallery-mask">
                                    <div class="gallery-title">
                                        <h2>Spa and Beauty</h2>
                                        <p>2 Pictures</p>
                                    </div> <!-- end gallery-title -->
                                </div><!-- end gallery-mask -->
                            </div><!-- end gallery-img -->
                        </a>
                    </div><!-- end gallery-block -->
                </div><!-- end gallery-product -->

                <div class="gallery-product col-12 col-md-4 col-lg-3 col-xl-15  filter pool video no-padding">
                    <div class="gallery-block">
                        <a href="{{asset('fe')}}/images/gallery-4.jpg" title="image-4" class="with-caption image-link">
                            <div class="gallery-img">
                                <img class="img-fluid" src="{{asset('fe')}}/images/gallery-4.jpg" alt="image-4">

                                <div class="gallery-mask">
                                    <div class="gallery-title">
                                        <h2>Spa and Beauty</h2>
                                        <p>2 Pictures</p>
                                    </div> <!-- end gallery-title -->
                                </div><!-- end gallery-mask -->
                            </div><!-- end gallery-img -->
                        </a>
                    </div><!-- end gallery-block -->
                </div><!-- end gallery-product -->

                <div class="gallery-product col-12 col-md-4 col-lg-3 col-xl-15  filter room video no-padding">
                    <div class="gallery-block">
                        <a href="{{asset('fe')}}/images/gallery-5.jpg" title="image-5" class="with-caption image-link">
                            <div class="gallery-img">
                                <img class="img-fluid" src="{{asset('fe')}}/images/gallery-5.jpg" alt="image-5">

                                <div class="gallery-mask">
                                    <div class="gallery-title">
                                        <h2>Spa and Beauty</h2>
                                        <p>2 Pictures</p>
                                    </div> <!-- end gallery-title -->
                                </div><!-- end gallery-mask -->
                            </div><!-- end gallery-img -->
                        </a>
                    </div><!-- end gallery-block -->
                </div><!-- end gallery-product -->

                <div class="gallery-product col-12 col-md-4 col-lg-3 col-xl-15  filter deluxe video no-padding">
                    <div class="gallery-block">
                        <a href="{{asset('fe')}}/images/gallery-6.jpg" title="image-6" class="with-caption image-link">
                            <div class="gallery-img">
                                <img class="img-fluid" src="{{asset('fe')}}/images/gallery-6.jpg" alt="image-6">

                                <div class="gallery-mask">
                                    <div class="gallery-title">
                                        <h2>Spa and Beauty</h2>
                                        <p>2 Pictures</p>
                                    </div> <!-- end gallery-title -->
                                </div><!-- end gallery-mask -->
                            </div><!-- end gallery-img -->
                        </a>
                    </div><!-- end gallery-block -->
                </div><!-- end gallery-product -->

                <div class="gallery-product col-12 col-md-4 col-lg-3 col-xl-15  filter deluxe video no-padding">
                    <div class="gallery-block">
                        <a href="{{asset('fe')}}/images/gallery-7.jpg" title="image-7" class="with-caption image-link">
                            <div class="gallery-img">
                                <img class="img-fluid" src="{{asset('fe')}}/images/gallery-7.jpg" alt="image-7">

                                <div class="gallery-mask">
                                    <div class="gallery-title">
                                        <h2>Spa and Beauty</h2>
                                        <p>2 Pictures</p>
                                    </div> <!-- end gallery-title -->
                                </div><!-- end gallery-mask -->
                            </div><!-- end gallery-img -->
                        </a>
                    </div><!-- end gallery-block -->
                </div><!-- end gallery-product -->

                <div class="gallery-product col-12 col-md-4 col-lg-3 col-xl-15  filter deluxe video no-padding">
                    <div class="gallery-block">
                        <a href="{{asset('fe')}}/images/gallery-8.jpg" title="image-8" class="with-caption image-link">
                            <div class="gallery-img">
                                <img class="img-fluid" src="{{asset('fe')}}/images/gallery-8.jpg" alt="image-8">

                                <div class="gallery-mask">
                                    <div class="gallery-title">
                                        <h2>Spa and Beauty</h2>
                                        <p>2 Pictures</p>
                                    </div> <!-- end gallery-title -->
                                </div><!-- end gallery-mask -->
                            </div><!-- end gallery-img -->
                        </a>
                    </div><!-- end gallery-block -->
                </div><!-- end gallery-product -->

                <div class="gallery-product col-12 col-md-4 col-lg-3 col-xl-15  filter meeting video no-padding">
                    <div class="gallery-block">
                        <a href="{{asset('fe')}}/images/gallery-9.jpg" title="image-9" class="with-caption image-link">
                            <div class="gallery-img">
                                <img class="img-fluid" src="{{asset('fe')}}/images/gallery-9.jpg" alt="image-9">

                                <div class="gallery-mask">
                                    <div class="gallery-title">
                                        <h2>Spa and Beauty</h2>
                                        <p>2 Pictures</p>
                                    </div> <!-- end gallery-title -->
                                </div><!-- end gallery-mask -->
                            </div><!-- end gallery-img -->
                        </a>
                    </div><!-- end gallery-block -->
                </div><!-- end gallery-product -->

                <div class="gallery-product col-12 col-md-4 col-lg-3 col-xl-15  filter cafe video no-padding">
                    <div class="gallery-block">
                        <a href="{{asset('fe')}}/images/gallery-10.jpg" title="image-10" class="with-caption image-link">
                            <div class="gallery-img">
                                <img class="img-fluid" src="{{asset('fe')}}/images/gallery-10.jpg" alt="image-10">

                                <div class="gallery-mask">
                                    <div class="gallery-title">
                                        <h2>Spa and Beauty</h2>
                                        <p>2 Pictures</p>
                                    </div> <!-- end gallery-title -->
                                </div><!-- end gallery-mask -->
                            </div><!-- end gallery-img -->
                        </a>
                    </div><!-- end gallery-block -->
                </div><!-- end gallery-product -->

            </div><!-- end gallery -->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end gallery --> --}}


<!--===================== TEAM ===================-->
<section id="team" class="section-padding no-pd-top">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-12 col-lg-12 col-xl-12">
                <div class="page-heading">
                    <h2>Meet <span>Our Team</span></h2>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod
                        tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis
                        nostrud exerci tation ullamcorper suscipit.</p>
                </div><!-- end page-heading -->

                <div class="owl-carousel owl-theme" id="owl-team">

                    <div class="item">
                        <div class="member-block">
                            <div class="member-img">
                                <img src="{{asset('fe')}}/images/team-1.jpg" class="img-fluid" alt="Member-Img" />
                                <div class="title">
                                    <p class="member-name">John Doe</p>
                                    <p class="member-status">Director</p>
                                </div><!-- end title -->
                            </div><!-- end member-img -->

                            <div class="member-info">
                                <p>Ipsum dolor Voluptates praesentium nulla cupiditate explicabo ad!</p>
                                <ul class="list-inline list-unstyled connect">
                                    <li class="list-inline-item"><a class="fb" href="#"><span><i
                                                    class="fa fa-facebook-square"></i></span></a></li>
                                    <li class="list-inline-item"><a class="tw" href="#"><span><i
                                                    class="fa fa-twitter-square"></i></span></a></li>
                                    <li class="list-inline-item"><a class="ln" href="#"><span><i
                                                    class="fa fa-linkedin-square"></i></span></a></li>
                                </ul>
                            </div><!-- end member-info -->
                        </div><!-- end member-block -->
                    </div><!-- end item -->

                    <div class="item">
                        <div class="member-block">
                            <div class="member-img">
                                <img src="{{asset('fe')}}/images/team-2.jpg" class="img-fluid" alt="Member-Img" />
                                <div class="title">
                                    <p class="member-name">John Doe</p>
                                    <p class="member-status">Director</p>
                                </div><!-- end title -->
                            </div><!-- end member-img -->

                            <div class="member-info">
                                <p>Ipsum dolor Voluptates praesentium nulla cupiditate explicabo ad!</p>
                                <ul class="list-inline list-unstyled connect">
                                    <li class="list-inline-item"><a class="fb" href="#"><span><i
                                                    class="fa fa-facebook-square"></i></span></a></li>
                                    <li class="list-inline-item"><a class="tw" href="#"><span><i
                                                    class="fa fa-twitter-square"></i></span></a></li>
                                    <li class="list-inline-item"><a class="ln" href="#"><span><i
                                                    class="fa fa-linkedin-square"></i></span></a></li>
                                </ul>
                            </div><!-- end member-info -->
                        </div><!-- end member-block -->
                    </div><!-- end item -->

                    <div class="item">
                        <div class="member-block">
                            <div class="member-img">
                                <img src="{{asset('fe')}}/images/team-3.jpg" class="img-fluid" alt="Member-Img" />
                                <div class="title">
                                    <p class="member-name">John Doe</p>
                                    <p class="member-status">Director</p>
                                </div><!-- end title -->
                            </div><!-- end member-img -->

                            <div class="member-info">
                                <p>Ipsum dolor Voluptates praesentium nulla cupiditate explicabo ad!</p>
                                <ul class="list-inline list-unstyled connect">
                                    <li class="list-inline-item"><a class="fb" href="#"><span><i
                                                    class="fa fa-facebook-square"></i></span></a></li>
                                    <li class="list-inline-item"><a class="tw" href="#"><span><i
                                                    class="fa fa-twitter-square"></i></span></a></li>
                                    <li class="list-inline-item"><a class="ln" href="#"><span><i
                                                    class="fa fa-linkedin-square"></i></span></a></li>
                                </ul>
                            </div><!-- end member-info -->
                        </div><!-- end member-block -->
                    </div><!-- end item -->

                    <div class="item">
                        <div class="member-block">
                            <div class="member-img">
                                <img src="{{asset('fe')}}/images/team-4.jpg" class="img-fluid" alt="Member-Img" />
                                <div class="title">
                                    <p class="member-name">John Doe</p>
                                    <p class="member-status">Director</p>
                                </div><!-- end title -->
                            </div><!-- end member-img -->

                            <div class="member-info">
                                <p>Ipsum dolor Voluptates praesentium nulla cupiditate explicabo ad!</p>
                                <ul class="list-inline list-unstyled connect">
                                    <li class="list-inline-item"><a class="fb" href="#"><span><i
                                                    class="fa fa-facebook-square"></i></span></a></li>
                                    <li class="list-inline-item"><a class="tw" href="#"><span><i
                                                    class="fa fa-twitter-square"></i></span></a></li>
                                    <li class="list-inline-item"><a class="ln" href="#"><span><i
                                                    class="fa fa-linkedin-square"></i></span></a></li>
                                </ul>
                            </div><!-- end member-info -->
                        </div><!-- end member-block -->
                    </div><!-- end item -->

                    <div class="item">
                        <div class="member-block">
                            <div class="member-img">
                                <img src="{{asset('fe')}}/images/team-2.jpg" class="img-fluid" alt="Member-Img" />
                                <div class="title">
                                    <p class="member-name">John Doe</p>
                                    <p class="member-status">Director</p>
                                </div><!-- end title -->
                            </div><!-- end member-img -->

                            <div class="member-info">
                                <p>Ipsum dolor Voluptates praesentium nulla cupiditate explicabo ad!</p>
                                <ul class="list-inline list-unstyled connect">
                                    <li class="list-inline-item"><a class="fb" href="#"><span><i
                                                    class="fa fa-facebook-square"></i></span></a></li>
                                    <li class="list-inline-item"><a class="tw" href="#"><span><i
                                                    class="fa fa-twitter-square"></i></span></a></li>
                                    <li class="list-inline-item"><a class="ln" href="#"><span><i
                                                    class="fa fa-linkedin-square"></i></span></a></li>
                                </ul>
                            </div><!-- end member-info -->
                        </div><!-- end member-block -->
                    </div><!-- end item -->

                    <div class="item">
                        <div class="member-block">
                            <div class="member-img">
                                <img src="{{asset('fe')}}/images/team-1.jpg" class="img-fluid" alt="Member-Img" />
                                <div class="title">
                                    <p class="member-name">John Doe</p>
                                    <p class="member-status">Director</p>
                                </div><!-- end title -->
                            </div><!-- end member-img -->

                            <div class="member-info">
                                <p>Ipsum dolor Voluptates praesentium nulla cupiditate explicabo ad!</p>
                                <ul class="list-inline list-unstyled connect">
                                    <li class="list-inline-item"><a class="fb" href="#"><span><i
                                                    class="fa fa-facebook-square"></i></span></a></li>
                                    <li class="list-inline-item"><a class="tw" href="#"><span><i
                                                    class="fa fa-twitter-square"></i></span></a></li>
                                    <li class="list-inline-item"><a class="ln" href="#"><span><i
                                                    class="fa fa-linkedin-square"></i></span></a></li>
                                </ul>
                            </div><!-- end member-info -->
                        </div><!-- end member-block -->
                    </div><!-- end item -->

                    <div class="item">
                        <div class="member-block">
                            <div class="member-img">
                                <img src="{{asset('fe')}}/images/team-2.jpg" class="img-fluid" alt="Member-Img" />
                                <div class="title">
                                    <p class="member-name">John Doe</p>
                                    <p class="member-status">Director</p>
                                </div><!-- end title -->
                            </div><!-- end member-img -->

                            <div class="member-info">
                                <p>Ipsum dolor Voluptates praesentium nulla cupiditate explicabo ad!</p>
                                <ul class="list-inline list-unstyled connect">
                                    <li class="list-inline-item"><a class="fb" href="#"><span><i
                                                    class="fa fa-facebook-square"></i></span></a></li>
                                    <li class="list-inline-item"><a class="tw" href="#"><span><i
                                                    class="fa fa-twitter-square"></i></span></a></li>
                                    <li class="list-inline-item"><a class="ln" href="#"><span><i
                                                    class="fa fa-linkedin-square"></i></span></a></li>
                                </ul>
                            </div><!-- end member-info -->
                        </div><!-- end member-block -->
                    </div><!-- end item -->

                    <div class="item">
                        <div class="member-block">
                            <div class="member-img">
                                <img src="{{asset('fe')}}/images/team-3.jpg" class="img-fluid" alt="Member-Img" />
                                <div class="title">
                                    <p class="member-name">John Doe</p>
                                    <p class="member-status">Director</p>
                                </div><!-- end title -->
                            </div><!-- end member-img -->

                            <div class="member-info">
                                <p>Ipsum dolor Voluptates praesentium nulla cupiditate explicabo ad!</p>
                                <ul class="list-inline list-unstyled connect">
                                    <li class="list-inline-item"><a class="fb" href="#"><span><i
                                                    class="fa fa-facebook-square"></i></span></a></li>
                                    <li class="list-inline-item"><a class="tw" href="#"><span><i
                                                    class="fa fa-twitter-square"></i></span></a></li>
                                    <li class="list-inline-item"><a class="ln" href="#"><span><i
                                                    class="fa fa-linkedin-square"></i></span></a></li>
                                </ul>
                            </div><!-- end member-info -->
                        </div><!-- end member-block -->
                    </div><!-- end item -->

                    <div class="item">
                        <div class="member-block">
                            <div class="member-img">
                                <img src="{{asset('fe')}}/images/team-4.jpg" class="img-fluid" alt="Member-Img" />
                                <div class="title">
                                    <p class="member-name">John Doe</p>
                                    <p class="member-status">Director</p>
                                </div><!-- end title -->
                            </div><!-- end member-img -->

                            <div class="member-info">
                                <p>Ipsum dolor Voluptates praesentium nulla cupiditate explicabo ad!</p>
                                <ul class="list-inline list-unstyled connect">
                                    <li class="list-inline-item"><a class="fb" href="#"><span><i
                                                    class="fa fa-facebook-square"></i></span></a></li>
                                    <li class="list-inline-item"><a class="tw" href="#"><span><i
                                                    class="fa fa-twitter-square"></i></span></a></li>
                                    <li class="list-inline-item"><a class="ln" href="#"><span><i
                                                    class="fa fa-linkedin-square"></i></span></a></li>
                                </ul>
                            </div><!-- end member-info -->
                        </div><!-- end member-block -->
                    </div><!-- end item -->

                    <div class="item">
                        <div class="member-block">
                            <div class="member-img">
                                <img src="{{asset('fe')}}/images/team-2.jpg" class="img-fluid" alt="Member-Img" />
                                <div class="title">
                                    <p class="member-name">John Doe</p>
                                    <p class="member-status">Director</p>
                                </div><!-- end title -->
                            </div><!-- end member-img -->

                            <div class="member-info">
                                <p>Ipsum dolor Voluptates praesentium nulla cupiditate explicabo ad!</p>
                                <ul class="list-inline list-unstyled connect">
                                    <li class="list-inline-item"><a class="fb" href="#"><span><i
                                                    class="fa fa-facebook-square"></i></span></a></li>
                                    <li class="list-inline-item"><a class="tw" href="#"><span><i
                                                    class="fa fa-twitter-square"></i></span></a></li>
                                    <li class="list-inline-item"><a class="ln" href="#"><span><i
                                                    class="fa fa-linkedin-square"></i></span></a></li>
                                </ul>
                            </div><!-- end member-info -->
                        </div><!-- end member-block -->
                    </div><!-- end item -->

                </div><!-- end owl-team -->
            </div><!-- end columns -->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end team -->


{{-- <!--=============== TESTIMONIALS ==============-->
<section id="testimonials" class="banner-padding">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-12 col-lg-12 col-xl-12">

                <div class="carousel slide review-carousel" data-ride="carousel">

                    <div class="row">
                        <div class="col-3 col-md-1 col-lg-1 col-xl-1">
                            <ol class="carousel-indicators">
                                <li data-target=".review-carousel" data-slide-to="0" class="active"></li>
                                <li data-target=".review-carousel" data-slide-to="1"></li>
                                <li data-target=".review-carousel" data-slide-to="2"></li>
                            </ol>
                        </div><!-- end columns -->

                        <div class="col-12 col-md-11 col-lg-11 col-xl-11">
                            <div class="row">
                                <div class="col-12 offset-md-4 col-md-8 offset-lg-3 col-lg-7 offset-xl-3 col-xl-7">
                                    <h2>What People Say About Us</h2>
                                </div><!-- end columns -->
                            </div><!-- end row -->

                            <div class="carousel-inner">

                                <div class="carousel-item active">
                                    <div class="row">

                                        <div class="col-12 col-md-4 col-lg-3 col-xl-3 reviewer-image">
                                            <img src="{{asset('fe')}}/images/reviewer-1.jpg" alt="reviewer-image"
                                                class="rounded-circle">
                                        </div><!-- end columns -->

                                        <div class="col-12 col-md-8 col-lg-9 col-xl-9">
                                            <p class="review-text">Lorem ipsum dolor sit amet, consectetuer
                                                adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet
                                                dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam,
                                                quis nostrud exerci tation ullamcorper suscipit.</p>
                                            <div class="rating">
                                                <span><i class="fa fa-star"></i></span>
                                                <span><i class="fa fa-star"></i></span>
                                                <span><i class="fa fa-star star-opacity"></i></span>
                                                <span><i class="fa fa-star star-opacity"></i></span>
                                                <span><i class="fa fa-star star-opacity"></i></span>
                                            </div><!-- end rating -->
                                            <p class="reviewer-name">Lorem Ipsum</p>
                                        </div><!-- end columns -->

                                    </div><!-- end row -->
                                </div><!-- end item -->

                                <div class="carousel-item">
                                    <div class="row">

                                        <div class="col-12 col-md-4 col-lg-3 col-xl-3 reviewer-image">
                                            <img src="{{asset('fe')}}/images/reviewer-1.jpg" alt="reviewer-image"
                                                class="rounded-circle">
                                        </div><!-- end columns -->

                                        <div class="col-12 col-md-8 col-lg-9 col-xl-9">
                                            <p class="review-text">Lorem ipsum dolor sit amet, consectetuer
                                                adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet
                                                dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam,
                                                quis nostrud exerci tation ullamcorper suscipit.</p>
                                            <div class="rating">
                                                <span><i class="fa fa-star"></i></span>
                                                <span><i class="fa fa-star"></i></span>
                                                <span><i class="fa fa-star star-opacity"></i></span>
                                                <span><i class="fa fa-star star-opacity"></i></span>
                                                <span><i class="fa fa-star star-opacity"></i></span>
                                            </div><!-- end rating -->

                                            <p class="reviewer-name">Lorem Ipsum</p>
                                        </div><!-- end columns -->

                                    </div><!-- end row -->
                                </div><!-- end item -->

                                <div class="carousel-item">
                                    <div class="row">

                                        <div class="col-12 col-md-4 col-lg-3 col-xl-3 reviewer-image">
                                            <img src="{{asset('fe')}}/images/reviewer-1.jpg" alt="reviewer-image"
                                                class="rounded-circle">
                                        </div><!-- end columns -->

                                        <div class="col-12 col-md-8 col-lg-9 col-xl-9">
                                            <p class="review-text">Lorem ipsum dolor sit amet, consectetuer
                                                adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet
                                                dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam,
                                                quis nostrud exerci tation ullamcorper suscipit.</p>
                                            <div class="rating">
                                                <span><i class="fa fa-star"></i></span>
                                                <span><i class="fa fa-star"></i></span>
                                                <span><i class="fa fa-star star-opacity"></i></span>
                                                <span><i class="fa fa-star star-opacity"></i></span>
                                                <span><i class="fa fa-star star-opacity"></i></span>
                                            </div><!-- end rating -->

                                            <p class="reviewer-name">Lorem Ipsum</p>
                                        </div><!-- end columns -->

                                    </div><!-- end row -->
                                </div><!-- end item -->

                            </div><!-- end carousel-inner -->
                        </div><!-- end columns -->
                    </div><!-- end row -->
                </div><!-- end review-carousel -->
            </div><!-- end columns -->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end testimonials -->


<!--================ BANNER-2 =============-->
<section id="banner-2" class="banner-padding">
    <div class="container">
        <div class="row">

            <div class="col-12 col-md-6 col-lg-3 col-xl-3">
                <div class="highlight-box">
                    <h2>112+</h2>
                    <h4>New Friendships</h4>
                </div><!-- end highlight-box -->
            </div><!-- end columns -->

            <div class="col-12 col-md-6 col-lg-3 col-xl-3">
                <div class="highlight-box">
                    <h2>254+</h2>
                    <h4>Five Star Ratings</h4>
                </div><!-- end highlight-box -->
            </div><!-- end columns -->

            <div class="col-12 col-md-6 col-lg-3 col-xl-3">
                <div class="highlight-box">
                    <h2>430+</h2>
                    <h4>International Guests</h4>
                </div><!-- end highlight-box -->
            </div><!-- end columns -->

            <div class="col-12 col-md-6 col-lg-3 col-xl-3">
                <div class="highlight-box">
                    <h2>745+</h2>
                    <h4>Breakfast Served</h4>
                </div><!-- end highlight-box -->
            </div><!-- end columns -->

        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end banner-2 --> --}}


{{-- <!--=============== PRICING ===============-->
<section id="pricing" class="section-padding">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-12 col-lg-12 col-xl-12">
                <div class="page-heading">
                    <h2>Our <span>Pricing</span></h2>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod
                        tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis
                        nostrud exerci tation ullamcorper suscipit.</p>
                </div><!-- end page-heading -->

                <div class="row" id="price-tables">

                    <div class="col-12 col-md-6 col-lg-4 col-xl-4 column-padding text-center">
                        <div class="price-table">
                            <div class="p-table-heading">
                                <h2 class="title">Luxury Room</h2>
                                <h2 class="price">99$<span>/night</span></h2>
                            </div><!-- end p-table-heading -->

                            <div class="features">
                                <ul class=" list-unstyled text-center">
                                    <li>Breakfast</li>
                                    <li>Private Balcony</li>
                                    <li>Sea View</li>
                                    <li>Free Wifi</li>
                                    <li>Bathroom</li>
                                    <li>Water Heated pool</li>
                                </ul>
                                <a href="#" class="btn btn-black btn-padding">Book Now</a>
                            </div><!-- end features -->
                        </div><!-- end price-table -->
                    </div><!-- end columns -->


                    <div class="col-12 col-md-6 col-lg-4 col-xl-4 column-padding text-center">
                        <div class="price-table">
                            <div class="p-table-heading">
                                <h2 class="title">Comfort Room</h2>
                                <h2 class="price">199$<span>/night</span></h2>
                            </div><!-- end p-table-heading -->

                            <div class="features">
                                <ul class=" list-unstyled text-center">
                                    <li>Breakfast</li>
                                    <li>Private Balcony</li>
                                    <li>Sea View</li>
                                    <li>Free Wifi</li>
                                    <li>Bathroom</li>
                                    <li>Water Heated pool</li>
                                </ul>
                                <a href="#" class="btn btn-black btn-padding">Book Now</a>
                            </div><!-- end features -->
                        </div><!-- end price-table -->
                    </div><!-- end columns -->


                    <div class="col-12 col-md-6 col-lg-4 col-xl-4 column-padding text-center">
                        <div class="price-table">
                            <div class="p-table-heading">
                                <h2 class="title">Deluxe Room</h2>
                                <h2 class="price">99$<span>/night</span></h2>
                            </div><!-- end p-table-heading -->

                            <div class="features">
                                <ul class=" list-unstyled text-center">
                                    <li>Breakfast</li>
                                    <li>Private Balcony</li>
                                    <li>Sea View</li>
                                    <li>Free Wifi</li>
                                    <li>Bathroom</li>
                                    <li>Water Heated pool</li>
                                </ul>
                                <a href="#" class="btn btn-black btn-padding">Book Now</a>
                            </div><!-- end features -->
                        </div><!-- end price-table -->
                    </div><!-- end columns -->

                </div><!-- end row -->
            </div><!-- end columns -->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end pricing --> --}}


<!--===================== LATEST-BLOG ===================-->
<section id="latest-blog" class="section-padding no-pd-top">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-12 col-lg-12 col-xl-12">
                <div class="page-heading">
                    <h2>Latest <span>Blog</span></h2>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod
                        tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis
                        nostrud exerci tation ullamcorper suscipit.</p>
                </div><!-- end page-heading -->

                <div class="row">

                    <div class="col-12 col-md-6 col-lg-4 col-xl-4">
                        <div class="latest-block">
                            <div class="latest-img">
                                <img src="{{asset('fe')}}/images/blog-1.jpg" class="img-fluid" alt="Blog-Image" />

                                <div class="latest-info">
                                    <p><span><i class="fa fa-calendar"></i></span> 29 April, 2017</p>
                                    <h2>Lorem ipsum dolor sit amet</h2>
                                    <a href="blog-details-left-sidebar.html">View More</a>
                                </div><!-- end latest-info -->
                            </div><!-- end latest-img -->
                        </div><!-- end latest-block -->
                    </div><!-- end columns -->

                    <div class="col-12 col-md-6 col-lg-4 col-xl-4">
                        <div class="latest-block">
                            <div class="latest-img">
                                <img src="{{asset('fe')}}/images/blog-2.jpg" class="img-fluid" alt="Blog-Image" />

                                <div class="latest-info">
                                    <p><span><i class="fa fa-calendar"></i></span> 29 April, 2017</p>
                                    <h2>Lorem ipsum dolor sit amet</h2>
                                    <a href="blog-details-left-sidebar.html">View More</a>
                                </div><!-- end latest-info -->
                            </div><!-- end latest-img -->
                        </div><!-- end latest-block -->
                    </div><!-- end columns -->

                    <div class="col-12 col-md-6 col-lg-4 col-xl-4">
                        <div class="latest-block">
                            <div class="latest-img">
                                <img src="{{asset('fe')}}/images/blog-3.jpg" class="img-fluid" alt="Blog-Image" />

                                <div class="latest-info">
                                    <p><span><i class="fa fa-calendar"></i></span> 29 April, 2017</p>
                                    <h2>Lorem ipsum dolor sit amet</h2>
                                    <a href="blog-details-left-sidebar.html">View More</a>
                                </div><!-- end latest-info -->
                            </div><!-- end latest-img -->
                        </div><!-- end latest-block -->
                    </div><!-- end columns -->

                </div><!-- end row -->

                <div class="butn text-center">
                    <a href="blog-listings-left-sidebar.html" class="btn btn-lg btn-padding btn-g-border">View
                        More</a>
                </div><!-- end butn -->

            </div><!-- end columns -->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end blog -->


<!--============== NEWSLETTER ===============-->
<section id="newsletter" class="banner-padding">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-12 col-lg-12 col-xl-12 text-center">
                <h2>Our Newsletter</h2>
                <p>Sign up here to receive interesting updates</p>
                <form>
                    <div class="form-group">
                        <div class="input-group">
                            <input type="email" class="form-control input-lg" placeholder="your email id"
                                required />
                            <span class="input-group-btn"><button class="btn btn-lg"><i
                                        class="fa fa-paper-plane"></i></button></span>
                        </div>
                    </div>
                </form>
            </div><!-- end columns -->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end newsletter -->
@endsection
