@extends('user.master')
@section('main-content')
   <!-- banner section two -->
   <section class="banner-section-two">
    <div class="banner-slider">
      <div class="banner-slide-v2">
        <div class="outer-box">
          <figure class="image wow fadeInUp"><img src="{{asset('fe')}}/images/banner/banner-2.jpg" alt=""></figure>
          <div class="content-box">
            <span class="sub-title" data-animation-in="fadeInUp" data-delay-in="0.1">unique place and luxury hotel</span>
            <h1 data-animation-in="fadeInUp" data-delay-in="0.3">life enjoy with <br>the great moments</h1>
            <a href="page-about.html" class="btn" data-animation-in="fadeInUp" data-delay-in="0.5">rooms & suites</a>
          </div>
        </div>
      </div>
      <div class="banner-slide-v2">
        <div class="outer-box">
          <figure class="image wow fadeInUp"><img src="{{asset('fe')}}/images/banner/banner-2.jpg" alt=""></figure>
          <div class="content-box">
            <span class="sub-title" data-animation-in="fadeInUp" data-delay-in="0.1">unique place and luxury hotel</span>
            <h1 data-animation-in="fadeInUp" data-delay-in="0.3">life enjoy with <br>the great moments</h1>
            <a href="page-about.html" class="btn" data-animation-in="fadeInUp" data-delay-in="0.5">rooms & suites</a>
          </div>
        </div>
      </div>
      <div class="banner-slide-v2">
        <div class="outer-box">
          <figure class="image wow fadeInUp"><img src="{{asset('fe')}}/images/banner/banner-2.jpg" alt=""></figure>
          <div class="content-box">
            <span class="sub-title" data-animation-in="fadeInUp" data-delay-in="0.1">unique place and luxury hotel</span>
            <h1 data-animation-in="fadeInUp" data-delay-in="0.3">life enjoy with <br>the great moments</h1>
            <a href="page-about.html" class="btn" data-animation-in="fadeInUp" data-delay-in="0.5">rooms & suites</a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End banner section -->
  
  <div class="checkout-form-section v2 wow slideInUp">
    <div class="auto-container">
      <div class="checkout-form">
        <div class="checkout-field">
          <h6>Check in</h6>
          <div class="chk-field">
            <input class="date-pick" type="text" placeholder="20 June, 2023" />
            <i class="fa fa-calendar"></i>
          </div>
        </div>
        <div class="checkout-field">
          <h6>Check out</h6>
          <div class="chk-field">
            <input class="date-pick" type="text" placeholder="20 June, 2023" />
            <i class="fa fa-calendar"></i>
          </div>
        </div>
        <div class="checkout-field br-0">
          <h6>Room</h6>
          <div class="chk-field">
            <i class="fa fa-angle-down"></i>
            <select>
              <option>Standard Room Size </option>
              <option>Standard Room Size </option>
              <option>Standard Room Size </option>
              <option>Standard Room Size </option>
            </select>
          </div>
        </div>
        <a href="#" class="theme-btn btn-style-one"><span class="btn-title">check now</span></a>
      </div>
    </div>
  </div>

  <!-- About Section -->
  <section class="about-section-two">
    <div class="auto-container">
      <div class="row">
        <!-- Content Column -->
        <div class="content-column col-lg-7 wow fadeInRight" data-wow-delay="600ms">
          <div class="inner-column">
            <div class="sec-title">
              <span class="sub-title">Hoexr Luxury Hotel</span>
              <h2>Chúng tôi cung cấp ngoài trời <br>Hoạt động dành cho tất cả du khách</h2>
              <div class="text">San Francisco có những ngọn đồi với quang cảnh, bờ biển và những món ăn tuyệt vời & <br>đã được bình chọn là thành phố hạnh phúc nhất, lành mạnh nhất và khỏe mạnh nhất ở<br>Kỳ nhiều lần.</div>
            </div>
            <div class="outer-box">
              <div class="info-block">
                <div class="inner">
                  <div class="icon-box"><i class="flaticon-light"></i></div>
                  <h4 class="title">Ánh sáng <br>Tốt nhất</h4>
                </div>
              </div>
              <div class="info-block">
                <div class="inner">
                  <div class="icon-box"><i class="flaticon-pool"></i></div>
                  <h4 class="title">Bể bơi <br>Tốt nhất</h4>
                </div>
              </div>
            </div>
            {{-- <ul class="list-style-two">
              <li><i class="icon fa fa-circle-check"></i>Một thực tế lâu dài là người đọc sẽ bị phân tâm bởi nội dung có thể đọc được</li>
              <li><i class="icon fa fa-circle-check"></i>Lorem Ipsum is simply dummy of the printing and industry</li>
              <li><i class="icon fa fa-circle-check"></i>There are many variations of Lorem Ipsum majority</li>
            </ul> --}}
            <div class="btn-box">
              <a href="page-about.html" class="theme-btn btn-style-one"><span class="btn-title">Khám phá nhiều hơn</span></a>
            </div>
          </div>
        </div>
        <!-- Image Column -->
        <div class="image-column col-lg-5">
          <div class="inner-column wow fadeInLeft">
            <figure class="image-1 overlay-anim wow fadeInUp"><img src="{{asset('fe')}}/images/resource/about2-1.jpg" alt=""></figure>
            <figure class="image-2 overlay-anim wow fadeInLeft"><img src="{{asset('fe')}}/images/resource/about2-2.jpg" alt=""></figure>
            <div class="exp-box bounce-y">
              <figure class=" overlay-anim wow fadeInLeft"><img src="{{asset('fe')}}/images/resource/exp-icon.png" alt=""></figure>
              <h4 class="title">Phòng Luxury</h4>
              <div class="text">Donec in quis the asd <br>pellentesque velit. Donec id <br>velit arcu posuere blane.</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--Emd About Section -->

  <!-- service section two -->
  <section class="service-section-two">
    <div class="auto-container">
      <div class="sec-title text-center wow fadeInUp"> <span class="sub-title">Hoexr SERVICES</span>
        <h2>Các tiện ích của khách sạn</h2>
      </div>
      <div class="row"> 
        <!-- service-block -->
        <div class="service-block-two col-lg-4 col-sm-6">
          <div class="inner-box wow fadeInLeft">
            <div class="image-box">
              <div class="icon-box wow fadeInUp"><i class="flaticon-bed-2"></i></div>
              <h4 class="title"><a href="page-service-details.html">Dịch vụ phòng</a></h4>
            </div>
            <div class="content-box">
              <div class="text">Orci varius natoque penatibus magnis ders disney parturient ridiculus</div>
            </div>
          </div>
        </div>
        <!-- service-block -->
        <div class="service-block-two col-lg-4 col-sm-6">
          <div class="inner-box wow fadeInLeft" data-wow-delay="200ms">
            <div class="image-box">
              <div class="icon-box wow fadeInUp"><i class="flaticon-swimming-pool"></i></div>
              <h4 class="title"><a href="page-service-details.html">Hồ bơi</a></h4>
            </div>
            <div class="content-box">
              <div class="text">Orci varius natoque penatibus magnis ders disney parturient ridiculus</div>
            </div>
          </div>
        </div>
        <!-- service-block -->
        <div class="service-block-two col-lg-4 col-sm-6">
          <div class="inner-box wow fadeInLeft" data-wow-delay="300ms">
            <div class="image-box">
              <div class="icon-box wow fadeInUp"><i class="flaticon-car"></i></div>
              <h4 class="title"><a href="page-service-details.html">Chỗ đậu xe</a></h4>
            </div>
            <div class="content-box">
              <div class="text">Orci varius natoque penatibus magnis ders disney parturient ridiculus</div>
            </div>
          </div>
        </div>
        <!-- service-block -->
        <div class="service-block-two col-lg-4 col-sm-6">
          <div class="inner-box wow fadeInLeft" data-wow-delay="400ms">
            <div class="image-box">
              <div class="icon-box wow fadeInUp"><i class="flaticon-breakfast"></i></div>
              <h4 class="title"><a href="page-service-details.html">Bữa sáng</a></h4>
            </div>
            <div class="content-box">
              <div class="text">Orci varius natoque penatibus magnis ders disney parturient ridiculus</div>
            </div>
          </div>
        </div>
        <!-- service-block -->
        <div class="service-block-two col-lg-4 col-sm-6">
          <div class="inner-box wow fadeInLeft" data-wow-delay="500ms">
            <div class="image-box">
              <div class="icon-box wow fadeInUp"><i class="flaticon-travel"></i></div>
              <h4 class="title"><a href="page-service-details.html">Đón và trả khách</a></h4>
            </div>
            <div class="content-box">
              <div class="text">Orci varius natoque penatibus magnis ders disney parturient ridiculus</div>
            </div>
          </div>
        </div>
        <!-- service-block -->
        <div class="service-block-two col-lg-4 col-sm-6">
          <div class="inner-box-two wow fadeInLeft" data-wow-delay="600ms">
            <div class="image-box">
              <figure class="image wow fadeInUp overlay-anim"><img src="{{asset('fe')}}/images/resource/service2-1.jpg" alt=""></figure>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End news section -->



  

  <!-- call-to-action -->
  {{-- <section class="call-to-action pt-0">
    <div class="auto-container">
      <div class="row">
        <div class="content-colum col-lg-6 col-md-12 col-sm-12">
          <div class="inner-column wow fadeInLeft">
            <div class="sec-title"> <span class="sub-title">CALL TO ACTION</span>
              <h2>The Thin Escape.</h2>
            </div>
            <!-- call-block -->
            <div class="call-block">
              <div class="inner-box">
                <div class="icon-box"> <i class="flaticon-airplane"></i> </div>
                <h4 class="title">Vận chuyển dễ dàng và miễn phí</h4>
                <div class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, <br>
                  eiusmod tempor incididunt dolore magna aliqua.</div>
              </div>
            </div>
            <!-- call-block -->
            <div class="call-block">
              <div class="inner-box">
                <div class="icon-box"> <i class="flaticon-fast-food"></i> </div>
                <h4 class="title">Thực Phẩm Sạch & Tươi</h4>
                <div class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, <br>
                  eiusmod tempor incididunt dolore magna aliqua.</div>
              </div>
            </div>
            <!-- call-block -->
            <div class="call-block">
              <div class="inner-box">
                <div class="icon-box"> <i class="flaticon-swimming-pool-1"></i> </div>
                <h4 class="title">Sân chơi & Bể bơi</h4>
                <div class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, <br>
                  eiusmod tempor incididunt dolore magna aliqua.</div>
              </div>
            </div>
            <div class="btn-box"> <a href="#" class="read-more">Đặt phòng</a> </div>
          </div>
        </div>
        <div class="col-lg-6 booking-form-column">
          <div class="inner-column wow fadeInRight" data-wow-delay="200ms">
            <div class="sec-title"> <span class="sub-title">ROOMS & SUITES</span>
              <h2>Đặt phòng khách sạn</h2>
            </div>
            <form class="bk-form" method="POST">
              <div class="frm-field">
                <input type="text" name="check-in" class="date-pick" placeholder="Check in" />
                <img src="{{asset('fe')}}/images/icons/mail.png" alt="" /> </div>
              <div class="frm-field">
                <input type="text" name="check-in" class="date-pick" placeholder="Check out" />
                <img src="{{asset('fe')}}/images/icons/mail.png" alt="" /> </div>
              <div class="frm-field">
                <select>
                  <option>Adult</option>
                  <option>Adult</option>
                  <option>Adult</option>
                  <option>Adult</option>
                </select>
                <i class="fa fa-angle-down"></i> </div>
              <div class="frm-field">
                <select>
                  <option>Children</option>
                  <option>Children</option>
                  <option>Children</option>
                  <option>Children</option>
                </select>
                <i class="fa fa-angle-down"></i> </div>
              <div class="form-submit">
                <button type="submit">Check Availability</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section> --}}

  


  <!-- news-section two -->
  <section class="news-section-two">
    <div class="auto-container">
      <div class="sec-title text-center wow fadeInUp"> <span class="sub-title">Hoexr Hotel News</span>
        <h2>Cập nhật tin tức mới nhất</h2>
      </div>
      <div class="row"> 
        <!-- News Block -->
        <div class="news-block-two col-lg-4 col-sm-6 wow fadeInUp">
          <div class="inner-box wow fadeInLeft">
            <div class="image-box">
              <figure class="image overlay-anim"><a href="news-details.html"><img src="{{asset('fe')}}/images/resource/news2-1.jpg" alt=""></a></figure>
            </div>
            <div class="content-box">
                <h4 class="title"><a href="news-details.html">Retore Lighting Design <br> in The Hotel</a></h4>
              <div class="btn-box">
                <span><i class="icon fa fa-comments"></i>0 Comments</span>
                <a href="news-details.html" class="read-more">Read More<i class="fa-solid fa-arrow-right"></i></a>
              </div>
            </div>
          </div>
        </div>
        <!-- News Block -->
        <div class="news-block-two col-lg-4 col-sm-6 wow fadeInUp" data-wow-delay="300ms">
          <div class="inner-box wow fadeInLeft" data-wow-delay="200ms">
            <div class="image-box">
              <figure class="image overlay-anim"><a href="news-details.html"><img src="{{asset('fe')}}/images/resource/news-2.jpg" alt=""></a></figure>
              <span class="date">DEC<br>
              <small>20</small></span> </div>
            <div class="content-box">
              <div class="info-box">
                <figure class="thumb"><a href="news-details.html"><img src="{{asset('fe')}}/images/resource/news-thumb.jpg" alt=""></a></figure>
                <span class="designation">Jonica Michel</span>
              </div>
              <h4 class="title"><a href="news-details.html">Swiming Benefits is <br> Good For Your Health</a></h4>
              <div class="btn-box">
                <span><i class="icon fa fa-comments"></i>0 Comments</span>
                <a href="news-details.html" class="read-more">Read More<i class="fa-solid fa-arrow-right"></i></a>
              </div>
            </div>
          </div>
        </div>
        <!-- News Block -->
        <div class="news-block-two col-lg-4 col-sm-6 wow fadeInUp" data-wow-delay="600ms">
          <div class="inner-box wow fadeInLeft" data-wow-delay="300ms">
            <div class="image-box">
              <figure class="image overlay-anim"><a href="news-details.html"><img src="{{asset('fe')}}/images/resource/news-3.jpg" alt=""></a></figure>
              <span class="date">DEC<br>
              <small>20</small></span> </div>
            <div class="content-box">
              <div class="info-box">
                <figure class="thumb"><a href="news-details.html"><img src="{{asset('fe')}}/images/resource/news-thumb.jpg" alt=""></a></figure>
                <span class="designation">Jonica Michel</span>
              </div>
              <h4 class="title"><a href="news-details.html">Avalible Now Health <br> Club For Your Fitness </a></h4>
              <div class="btn-box">
                <span><i class="icon fa fa-comments"></i>0 Comments</span>
                <a href="news-details.html" class="read-more">Read More<i class="fa-solid fa-arrow-right"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End news section --> 

  <!-- client-section two -->
  <section class="client-section-two">
    <div class="auto-container">
      <div class="client-slider wow fadeInUp"> 
        <!-- client-block -->
        <div class="client-block-two">
          <div class="inner-box">
            <figure class="image"><a href="#"><img src="{{asset('fe')}}/images/resource/client1-1.png" alt=""></a></figure>
          </div>
        </div>
        <!-- client-block -->
        <div class="client-block-two">
          <div class="inner-box">
            <figure class="image"><a href="#"><img src="{{asset('fe')}}/images/resource/client1-2.png" alt=""></a></figure>
          </div>
        </div>
        <!-- client-block -->
        <div class="client-block-two">
          <div class="inner-box">
            <figure class="image"><a href="#"><img src="{{asset('fe')}}/images/resource/client1-3.png" alt=""></a></figure>
          </div>
        </div>
        <!-- client-block -->
        <div class="client-block-two">
          <div class="inner-box">
            <figure class="image"><a href="#"><img src="{{asset('fe')}}/images/resource/client1-4.png" alt=""></a></figure>
          </div>
        </div>
        <!-- client-block -->
        <div class="client-block-two">
          <div class="inner-box">
            <figure class="image"><a href="#"><img src="{{asset('fe')}}/images/resource/client1-5.png" alt=""></a></figure>
          </div>
        </div>
        <!-- client-block -->
        <div class="client-block-two">
          <div class="inner-box">
            <figure class="image"><a href="#"><img src="{{asset('fe')}}/images/resource/client1-1.png" alt=""></a></figure>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End client section -->
@endsection
@section('add-js')
<script src="{{asset('fe')}}/js/jquery.js"></script> 
<script src="{{asset('fe')}}/js/popper.min.js"></script>
<script src="{{asset('fe')}}/js/bootstrap.min.js"></script>
<script src="{{asset('fe')}}/js/jquery.fancybox.js"></script>
<script src="{{asset('fe')}}/js/slick.min.js"></script>
<script src="{{asset('fe')}}/js/slick-animation.min.js"></script>
<script src="{{asset('fe')}}/js/wow.js"></script>
<script src="{{asset('fe')}}/js/appear.js"></script>
<script src="{{asset('fe')}}/js/mixitup.js"></script>
<script src="{{asset('fe')}}/js/flatpickr.js"></script>
<script src="{{asset('fe')}}/js/script.js"></script>
@endsection