@extends('user.master')
@section('main-content')
    <!--============= PAGE-COVER =============-->
    <section class="page-cover" id="room-grid-cover">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="page-title">Danh sách phòng</h1>
                    <ul class="breadcrumb justify-content-center">
                        <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
                        <li class="active breadcrumb-item">Danh sách phòng</li>
                    </ul>
                </div><!-- end columns -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section><!-- end page-cover -->


    <!--============= INNERPAGE-WRAPPER ============-->
    <section id="rooms-grid" class="innerpage-wrapper">

        <div id="rooms" class="innerpage-section-padding">
            <div class="container">
                @if (isset($roomSearch) == '')
                <div class="row">
                    @forelse ($room as $item)
                        <div class="col-12 col-md-6 col-lg-4 col-xl-4">
                            <div class="room-block">
                                <div class="room-img">
                                    <img src="{{ asset('storage/images/' . $item->image) }}" class="img-fluid"
                                        alt="room-image" />
                                    <div class="room-title">
                                        <a href="{{ route('room.detail',$item->id) }}">
                                            <h3>{{ $item->name }}</h3>
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
                                        <li>{{ number_format($item->price) }}đ / đêm <span class="link"><a
                                                    href="{{ route('room.detail',$item->id) }}">Chi tiết</a></span>
                                        </li>
                                    </ul>
                                </div><!-- end room-price -->
                            </div><!-- end room-block -->
                        </div><!-- end columns -->

                    @empty
                        <h2>Chưa có dữ liệu</h2>
                    @endforelse


                </div><!-- end row -->
                {{ $room->links() }}
                @else
                <div class="row">
                    @forelse ($roomSearch as $item)
                        <div class="col-12 col-md-6 col-lg-4 col-xl-4">
                            <div class="room-block">
                                <div class="room-img">
                                    <img src="{{ asset('storage/images/' . $item->image) }}" class="img-fluid"
                                        alt="room-image" />
                                    <div class="room-title">
                                        <a href="{{ route('room.detail',$item->id) }}">
                                            <h3>{{ $item->name }}</h3>
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
                                        <li>{{ number_format($item->price) }}đ / đêm <span class="link"><a
                                                    href="{{ route('room.detail',$item->id) }}">Chi tiết</a></span>
                                        </li>
                                    </ul>
                                </div><!-- end room-price -->
                            </div><!-- end room-block -->
                        </div><!-- end columns -->

                    @empty
                        <h2>Chưa có dữ liệu</h2>
                    @endforelse


                </div><!-- end row -->
                @endif
                
            </div><!-- end container -->
        </div><!-- end rooms -->

    </section><!-- end innerpage-wrapper -->

@endsection
