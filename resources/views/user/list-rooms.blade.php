@extends('user.master')
@section('main-content')
	<!-- Start main-content -->
	<section class="page-title" style="background-image: url({{asset('fe')}}/images/background/page-title-bg.png);">
		<div class="auto-container">
			<div class="title-outer text-center">
				<h1 class="title">Rooms</h1>
				<ul class="page-breadcrumb">
					<li><a href="index.html">Home</a></li>
					<li>Rooms</li>
				</ul>
			</div>
		</div>
	</section>
	<!-- end main-content -->

  <!-- rooms-section -->
  <section class="rooms-section pb-100">
    <div class="auto-container">
      <div class="row">
        <!-- room-block -->
        <div class="room-block col-lg-6 col-md-6">
          <div class="inner-box wow fadeIn">
            <div class="image-box">
              <figure class="image-2 overlay-anim"><img src="{{asset('fe')}}/images/resource/room-1.jpg" alt=""></figure>
            </div>
            <div class="content-box">
              <h6 class="title"><a href="room-details.html">Junior Suite</a></h6>
              <span class="price">150$ / NIGHT</span>
            </div>
            <div class="box-caption">
              <a href="room-details.html" title="" class="book-btn">book now</a>
              <ul class="bx-links">
                <li><a href="room-details.html" title=""><i class="fa fa-wifi"></i></a></li>
                <li><a href="room-details.html" title=""><i class="fa fa-bed"></i></a></li>
                <li><a href="room-details.html" title=""><i class="fa fa-bath"></i></a></li>
                <li><a href="room-details.html" title=""><i class="fa fa-shower"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
        <!-- room-block -->
        <div class="room-block col-lg-6 col-md-6">
          <div class="inner-box wow fadeIn" data-wow-delay="200ms">
            <div class="image-box">
              <figure class="image-2 overlay-anim"><img src="{{asset('fe')}}/images/resource/room-2.jpg" alt=""></figure>
            </div>
            <div class="content-box">
              <h6 class="title"><a href="room-details.html">Family Room</a></h6>
              <span class="price">200$ / NIGHT</span>
            </div>
            <div class="box-caption">
              <a href="room-details.html" title="" class="book-btn">book now</a>
              <ul class="bx-links">
                <li><a href="room-details.html" title=""><i class="fa fa-wifi"></i></a></li>
                <li><a href="room-details.html" title=""><i class="fa fa-bed"></i></a></li>
                <li><a href="room-details.html" title=""><i class="fa fa-bath"></i></a></li>
                <li><a href="room-details.html" title=""><i class="fa fa-shower"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
        <!-- room-block -->
        <div class="room-block col-lg-3 col-md-6">
          <div class="inner-box wow fadeIn" data-wow-delay="300ms">
            <div class="image-box">
              <figure class="image-2 overlay-anim"><img src="{{asset('fe')}}/images/resource/room-3.jpg" alt=""></figure>
            </div>
            <div class="content-box">
              <h6 class="title"><a href="room-details.html">Double Room</a></h6>
              <span class="price">250$ / NIGHT</span>
            </div>
            <div class="box-caption">
              <a href="room-details.html" title="" class="book-btn">book now</a>
              <ul class="bx-links">
                <li><a href="room-details.html" title=""><i class="fa fa-wifi"></i></a></li>
                <li><a href="room-details.html" title=""><i class="fa fa-bed"></i></a></li>
                <li><a href="room-details.html" title=""><i class="fa fa-bath"></i></a></li>
                <li><a href="room-details.html" title=""><i class="fa fa-shower"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
        <!-- room-block -->
        <div class="room-block col-lg-6 col-md-6">
          <div class="inner-box large-style wow fadeIn" data-wow-delay="400ms">
            <div class="image-box">
              <figure class="image-2 overlay-anim"><img src="{{asset('fe')}}/images/resource/room-4.jpg" alt=""></figure>
            </div>
            <div class="content-box">
              <h6 class="title"><a href="room-details.html">Double Room</a></h6>
              <span class="price">250$ / NIGHT</span>
            </div>
            <div class="box-caption">
              <a href="{{route('user.roomDetail')}}" title="" class="book-btn">book now</a>
              <ul class="bx-links">
                <li><a href="room-details.html" title=""><i class="fa fa-wifi"></i></a></li>
                <li><a href="room-details.html" title=""><i class="fa fa-bed"></i></a></li>
                <li><a href="room-details.html" title=""><i class="fa fa-bath"></i></a></li>
                <li><a href="room-details.html" title=""><i class="fa fa-shower"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
        <!-- room-block -->
        <div class="room-block col-lg-3 col-md-6">
          <div class="inner-box wow fadeIn" data-wow-delay="500ms">
            <div class="image-box">
              <figure class="image-2 overlay-anim"><img src="{{asset('fe')}}/images/resource/room-5.jpg" alt=""></figure>
            </div>
            <div class="content-box">
              <h6 class="title"><a href="room-details.html">Deluxe Room</a></h6>
              <span class="price">300$ / NIGHT</span>
            </div>
            <div class="box-caption">
              <a href="room-details.html" title="" class="book-btn">book now</a>
              <ul class="bx-links">
                <li><a href="room-details.html" title=""><i class="fa fa-wifi"></i></a></li>
                <li><a href="room-details.html" title=""><i class="fa fa-bed"></i></a></li>
                <li><a href="room-details.html" title=""><i class="fa fa-bath"></i></a></li>
                <li><a href="room-details.html" title=""><i class="fa fa-shower"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End rooms-section -->
@endsection
@section('add-js')
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-angle-up"></span></div>
<script src="{{asset('fe')}}/js/jquery.js"></script>
<script src="{{asset('fe')}}/js/popper.min.js"></script>
<script src="{{asset('fe')}}/js/bootstrap.min.js"></script>
<script src="{{asset('fe')}}/js/jquery.fancybox.js"></script>
<script src="{{asset('fe')}}/js/jquery-ui.js"></script>
<script src="{{asset('fe')}}/js/wow.js"></script>
<script src="{{asset('fe')}}/js/appear.js"></script>
<script src="{{asset('fe')}}/js/owl.js"></script>
<script src="{{asset('fe')}}/js/script.js"></script>
@endsection
