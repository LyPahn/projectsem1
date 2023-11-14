@extends('user.master')
@section('main-content')
	<!--============= PAGE-COVER =============-->
	<section class="page-cover" id="room-details-cover">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h1 class="page-title">Chi tiết phòng</h1>
					<ul class="breadcrumb justify-content-center">
						<li class="breadcrumb-item"><a href="{{route('user.index')}}">Trang chủ</a></li>
						<li class="active breadcrumb-item">Chi tiết phòng</li>
					</ul>
				</div><!-- end columns -->
			</div><!-- end row -->
		</div><!-- end container -->
	</section><!-- end page-cover -->
	
	
	<!--============= SEARCH-BAR =============-->
	<section class="search-bar">
		<div class="container">
			<div class="row">
				<div class="col-12 col-md-12 col-lg-12 col-xl-12">
				
					<form>
						<div class="row">
							<div class="col-12 col-md-12 col-lg-10 col-xl-10">
								<div class="row">
									<div class="col-12 col-md-6 col-lg-3 col-xl-3">
										<div class="form-group">    
											<input type="text" class="form-control dpd1" placeholder="Check-in" id="datepicker1" required/>
											<span><i class="fa fa-calendar"></i></span>
										</div>
									</div><!-- end columns -->
									
									<div class="col-12 col-md-6 col-lg-3 col-xl-3">
										<div class="form-group">
											<input type="text" class="form-control dpd2" placeholder="Check-out" id="datepicker2" required/>
											<span><i class="fa fa-calendar"></i></span>
										</div>
									</div><!-- end columns -->
									
									<div class="col-12 col-md-6 col-lg-3 col-xl-3">
										<div class="form-group">
											<span><i class="fa fa-angle-down"></i></span>
											<select class="form-control">
												<option selected>Người lớn</option>
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
												<option selected>Trẻ em</option>
												<option>1</option>
												<option>2</option>
												<option>3</option>
											</select>
										</div>
									</div><!-- end columns -->
								</div>
							</div>
							
							<div class="col-12 col-md-12 col-lg-2 col-xl-2 text-center avail">
								<a href="#" class="btn btn-default btn-black">Tìm kiếm</a>
							</div><!-- end columns -->
							
						</div><!-- end row -->
					</form>
					
				</div><!-- end columns -->
			</div><!-- end row -->
		</div><!-- end container -->
	</section><!-- end search-bar -->
	
	
	<!--=============INNERPAGE-WRAPPER ===========-->
	<section id="room-details-page" class="innerpage-wrapper">
	
		<div id="room-details" class="innerpage-section-padding">
			<div class="container">
				<div class="row">
					<div class="col-12 col-md-12 col-lg-3 col-xl-3 side-bar left-side-bar">
						
						<div class="row">
							<div class="col-12 col-md-6 col-lg-12 col-xl-12">
								<div class="side-bar-block support-block">
									<h3>Liên hệ hỗ trợ</h3>
									<p class="query">Nếu bạn có bất kỳ câu hỏi nào xin vui lòng liên hệ với chúng tôi</p>
									<ul class="list-unstyled">
										<li>
											<span><i class="fa fa-phone"></i></span>
											<div class="text">
												<p>+00 123 4567</p>
												<p>+00 123 4568</p>
											</div><!-- end text -->
										</li>
										
										<li>
											<span><i class="fa fa-envelope"></i></span>
											<div class="text">
												<p>info.com</p>
												<p>support.com</p>
											</div> <!-- end text -->
										</li>
									</ul>
								</div><!-- end side-bar-block -->
							</div><!-- end columns -->
							
							<div class="col-12 col-md-6 col-lg-12 col-xl-12">
								<div class="side-bar-block special-offer">
									<div id="circle">
										<span>Ưu đãi</span>
										<h3>Tháng 12</h3>
										<p>Giảm đến 20%</p>
									</div>
									<p id="offer-text">Lorem ipsum dolor sit amet, consectetur adipisi cing elit, sed do eius mod tempor.</p>
									<a href="#" class="btn">Đặt ngay</a>
								</div><!-- end side-bar-block -->
							</div><!-- end columns -->
							
						</div><!-- end row -->
						
					</div><!-- end columns -->
					
					<div class="col-12 col-md-12 col-lg-9 col-xl-9 content-side">
						
						<div class="room-description">
							
							<div id="room-inner-carousel" class="carousel slide" data-ride="carousel">
								
								<div class="price-tag">
									<p><span>{{number_format($detail->price)}}đ /</span> Đêm</p>
								</div><!-- end price-tag -->
								
								<ol class="carousel-indicators">
									<li data-target="#room-inner-carousel" data-slide-to="0" class="active"></li>
									<li data-target="#room-inner-carousel" data-slide-to="1"></li>
									<li data-target="#room-inner-carousel" data-slide-to="2"></li>
									<li data-target="#room-inner-carousel" data-slide-to="3"></li>
								</ol>
								
								<div class="carousel-inner">
									@foreach ($detail->images as $item)
										
									<div class="carousel-item {{$loop->index == 0 ? 'active' : ''}}">
										<img src="{{asset('storage/images/'.$item->image)}}" class="img-fluid" alt="Los Angeles" width="100%">
									</div><!-- end item -->
									@endforeach
									
									{{-- <div class="carousel-item">
										  <img src="images/room-inner-1.jpg" class="img-fluid" alt="Chicago">
									</div><!-- end item -->
									
									<div class="carousel-item">
										  <img src="images/room-inner-1.jpg" class="img-fluid" alt="Los Angeles">
									</div><!-- end item -->
									
									<div class="carousel-item">
										  <img src="images/room-inner-1.jpg" class="img-fluid" alt="Chicago">
									</div><!-- end item --> --}}
									
								</div><!-- end carousel-inner -->
							</div><!-- end room-inner-casrousel -->

							<div id="room-facilities">
								<div class="row">
								
									<div class="col-12 col-md-4 col-lg-4 col-xl-2 no-padding">
										<div class="facility-block">
											<span><i class="fa fa-wifi"></i></span>
											<p>Miễn phí Internet</p>
										</div><!-- end facility-block -->
									</div><!-- end columns -->
									
									<div class="col-12 col-md-4 col-lg-4 col-xl-2 no-padding">
										<div class="facility-block">
											<span><i class="fa fa-coffee"></i></span>
											<p>Máy pha cà phê</p>
										</div><!-- end facility-block -->
									</div><!-- end columns -->
									
									<div class="col-12 col-md-4 col-lg-4 col-xl-2 no-padding">
										<div class="facility-block">
											<span><i class="fa fa-dribbble"></i></span>
											<p>Hoạt động thể thao</p>
									   </div><!-- end facility-block -->
									</div><!-- end columns -->
									
									<div class="col-12 col-md-4 col-lg-4 col-xl-2 no-padding">
										<div class="facility-block">
											<span><i class="fa fa-fax"></i></span>
											<p>Điện thoại bàn</p>
										</div><!-- end facility-block -->
									</div><!-- end columns -->
									
									<div class="col-12 col-md-4 col-lg-4 col-xl-2 no-padding">
										<div class="facility-block">
											<span><i class="fa fa-cutlery"></i></span>
											<p>Bữa sáng miễn phí</p>
										</div><!-- end facility-block -->
									</div><!-- end columns -->
									
									<div class="col-12 col-md-4 col-lg-4 col-xl-2 no-padding">
										<div class="facility-block">
											<span><i class="fa fa-television"></i></span>
											<p>TV LCD</p>
										</div><!-- end facility-block -->
									</div><!-- end columns -->
									
								</div><!-- end row -->
							</div><!-- end room-facilities -->
							
							<div id="description">
								{{$detail->description}}
								<a href="{{route('UserBooking.index',$item->id)}}" class="btn btn-yellow btn-lg btn-block">Đặt phòng</a>
							</div><!-- end description -->
							
						</div><!-- end room-description -->
					</div><!-- end columns -->

				</div><!-- end row -->
			</div><!-- end container -->
		</div><!-- end room-details -->

	
		<div id="rooms" class="innerpage-section-padding no-pd-top"> 
			<div class="container">
				<div class="row">
					
					<div class="col-12 col-md-12 col-lg-12 col-xl-12">
						<div class="innerpage-heading">
							<h1>Phòng tương tự</h1>
						</div><!-- end innerpage-heading -->
					</div><!-- end columns -->
					@foreach ($similar as $item)
						
					<div class="col-12 col-md-6 col-lg-4 col-xl-4">
						<div class="room-block">
							<div class="room-img">
								<img src="{{asset('storage/images/'.$item->image)}}" class="img-fluid" alt="room-image" />
								<div class="room-title">
									<a href="#"><h3>{{$item->name}}</h3></a>
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
									<li>{{number_format($item->price)}}đ / Đêm <span class="link"><a href="{{route('room.detail',$item->id)}}">Chi tiết</a></span></li>
								</ul>
							</div><!-- end room-price -->
						</div><!-- end room-block -->
					</div><!-- end columns -->
					@endforeach
					

				</div><!-- end row -->
			</div><!-- end container -->
		</div><!-- end rooms -->

	</section> <!-- end innerpage-wrapper -->
	
	
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
								<input type="email" class="form-control input-lg" placeholder="your email id" required/>
								<span class="input-group-btn"><button class="btn btn-lg"><i class="fa fa-paper-plane"></i></button></span>
							</div>
						</div>
					</form>
				</div><!-- end columns -->
			</div><!-- end row -->
		</div><!-- end container -->
	</section><!-- end newsletter -->
@endsection
