@extends('user.master')
@section('main-content')
    <!--============== PAGE-COVER ==============-->
    <section class="page-cover" id="contact-cover">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="page-title">Contact Us</h1>
                    <ul class="breadcrumb justify-content-center">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="active breadcrumb-item">Contact-1</li>
                    </ul>
                </div><!-- end columns -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section><!-- end page-cover -->
    
    
    <!--=============INNERPAGE-WRAPPER =============-->
    <section id="contact-page" class="innerpage-wrapper">
               
        <div id="contact-blocks" class="section-padding">
            <div class="container text-center">       
                <div class="row no-gutters">
                    <div class="col-md-12 offset-xl-1 col-xl-10 offset-xl-1">
                        <ul class="list-unstyled">
                            <li>
                                <div class="contact-block">
                                    <span><i class="fa fa-envelope"></i></span>
                                    <p>Nếu bạn đang di chuyển và vẫn muốn đặt câu hỏi, chỉ cần gửi email cho chúng tôi.</p>
                                    <p class="support">lyphanc@gmail.com</p>
                                </div><!-- end contact-block -->
                            </li>
                            <li>
                                <div class="contact-block">
                                    <span><i class="fa fa-phone"></i></span>
                                    <p>If you're on the go and still want to ask a question, just give us a call..</p>
                                    <p class="support">+0865921904</p>
                                </div><!-- end contact-block -->
                            </li>
                            <li>
                                <div class="contact-block">
                                    <span><i class="fa fa-map-marker"></i></span>
                                    <p>Địa chỉ: No 8 Do Duc Duc Road ME Tri, Từ Liêm, Hà Nội 100000,</p>
                                    <p class="support">Hà Nội</p>
                                </div><!-- end contact-block -->
                            </li>
                        </ul>
                    </div><!-- end columns -->
                </div><!-- end row -->
            </div><!-- end container -->
        </div><!-- end contact-blocks -->
        

    </section><!-- end innerpage-wrapper -->
    
    
    <!--===== MAP ====-->
    <section class="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14898.565702963178!2d105.7831221!3d21.007006!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135acacbb621a31%3A0x6b9d241f84cd960!2sJW%20Marriott%20Hotel%20Hanoi!5e0!3m2!1svi!2s!4v1700034683475!5m2!1svi!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </section><!-- end map -->
@endsection