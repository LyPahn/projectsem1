@extends('admin.master')
@section('main-content')
    <section>
        <div class="content add-details">
            <div class="in-content-wrapper">
                <div class="row no-gutters">

                    <div class="col">
                        <div class="heading-messages">
                            <h3>Hạng phòng</h3>
                        </div><!-- End heading-messages -->
                    </div><!-- End column -->
                    <div class="col-md-4">
                        <div class="breadcrumb">
                            <div class="breadcrumb-item"><i class="fas fa-angle-right"></i><a href="{{ route('rooms_type.index') }}">Danh sách</a>
                            </div>
                            <div class="breadcrumb-item active"><i class="fas fa-angle-right"></i>Cập nhật
                            </div>
                        </div><!-- end breadcrumb-->
                    </div><!-- end column -->

                </div><!-- end row -->

                <div class="box">

                    <div class="row">
                        <div class="col">
                            <div class="details-text">
                                <h4>Cập nhật</h4>
                            </div><!-- end details-text -->
                        </div><!-- End column -->
                    </div><!-- end row -->
                    <div class="hotel-listing-form">
                        <form class="text-center" role="form" method="POST" enctype="multipart/form-data"
                            action="{{ route('rooms_type.update', $rooms_type) }}">
                            @method('PUT')
                            @csrf
                            <div class="form-row">
                                <div class="col-md">
                                    <div class="form-group">
                                        <label for="inputGroupSelect07" class="">Hạng phòng</label>
                                        <input type="text" class="form-control" required id="inputGroupSelect07"
                                            name="room_type" value="{{ $rooms_type->room_type }}">
                                        @error('room_type')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div><!-- end form-group -->
                                </div><!-- end column -->
                            </div><!-- end form-row -->
                            <ul class="list-inline">
                                <li class="list-inline-item">
                                    <button type="submit" class="btn">Cập nhật</button>
                                </li>
                                <li class="list-inline-item">
                                    <button class="btn"><a href="{{ route('rooms_type.index') }}"
                                            style="color: #fff">Cancel</a></button>
                                </li>
                            </ul>

                        </form>
                    </div><!-- end hotel-listing-form -->
                </div><!-- end box -->
            </div><!-- end in-content-wrapper -->
        </div><!-- end add-details -->
    </section>
@endsection
@section('add-js')
    <script src="{{ asset('assets') }}/js/jquery-3.3.1.min.js"></script>
    <script src="{{ asset('assets') }}/js/popper.min.js"></script>
    <script src="{{ asset('assets') }}/js/bootstrap.min4.2.1.js"></script>
    <script src="{{ asset('assets') }}/vendors/dropzone-5.5.0/dist/min/dropzone.min.js"></script>
    <script src="{{ asset('assets') }}/js/customscriptfile.js"></script>
@endsection
