@extends('admin.master')
@section('main-content')
    <section>
        <div class="content add-details">
            <div class="in-content-wrapper">
                <div class="row no-gutters">

                    <div class="col">
                        <div class="heading-messages">
                            <h3>Đơn đặt phòng</h3>
                        </div><!-- End heading-messages -->
                    </div><!-- End column -->
                    <div class="col-md-4">
                        <div class="breadcrumb">
                            <div class="breadcrumb-item"><i class="fas fa-angle-right"></i><a href="#">Danh sách</a>
                            </div>
                            <div class="breadcrumb-item active"><i class="fas fa-angle-right"></i>Sửa
                            </div>
                        </div><!-- end breadcrumb-->
                    </div><!-- end column -->

                </div><!-- end row -->

                <div class="box">
                    @if ($message = Session::get('error'))
                        <div class="alert alert-danger alert-block">

                            <button type="button" class="close" data-dismiss="alert">×</button>

                            <strong>{{ $message }}</strong>

                        </div>
                    @endif
                    <div class="row">
                        <div class="col">
                            <div class="details-text">
                                <h4>Quản lý đặt phòng</h4>
                            </div><!-- end details-text -->
                        </div><!-- End column -->
                    </div><!-- end row -->
                    <div class="hotel-listing-form">
                        <form class="text-center" role="form" method="POST" enctype="multipart/form-data"
                            action="{{ route('booking.update', $booking) }}">
                            @csrf
                            @method('PUT')
                            <div class="form-row">
                                <div class="col-md">
                                    <div class="form-group">
                                    <label for="inputGroupSelect07" class="">Tên khách hàng:</label>
                                    <input type="text" class="form-control" required id="inputGroupSelect07"
                                            name="name" value="{{ old('name') ? old('name') : $booking->name }}">
                                        @error('name')
                                            <span class="help-block " style="color: red">{{ $message }}</span>
                                        @enderror
                                    </div><!-- end form-group -->
                                </div>
                                <div class="col-md">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <label class="input-group-text" for="inputGroupSelect01">Phòng:</label>
                                            </div>
                                            <select class="custom-select" id="inputGroupSelect01" name="room_id">
                                                <option selected>Choose...</option>
                                                @foreach ($rooms as $item)
                                                    <option value="{{ $item->id }}" {{ $booking->room_id === $item->id ? 'selected' : '' }}>{{ $item->name }}</option>
                                                @endforeach
                                            </select>
                                            <i class="fas fa-angle-down"></i>
                                        </div>
                                    </div><!-- end form-group -->
                                </div><!-- end column -->
                            </div><!-- end form-row -->
                            
                            <div class="form-row">
                                <div class="col-md">
                                    <div class="form-group">
                                        <label for="inputGroupSelect07" class="">Số điện thoại</label>
                                        <input type="number" class="form-control" required id="inputGroupSelect07"
                                            name="phone" value="{{ old('phone') ? old('phone') : $booking->phone }}">
                                        @error('phone')
                                            <span class="help-block " style="color: red">{{ $message }}</span>
                                        @enderror
                                    </div><!-- end form-group -->
                                </div><!-- end column -->
                                <div class="col-md">
                                    <div class="form-group">
                                        <label for="inputGroupSelect07" class="">Email</label>
                                        <input type="email" class="form-control" required id="inputGroupSelect07"
                                            name="email" value="{{ old('email') ? old('email') : $booking->email }}">
                                        @error('email')
                                            <span class="help-block " style="color: red">{{ $message }}</span>
                                        @enderror
                                    </div><!-- end form-group -->
                                </div><!-- end column -->
                            </div><!-- end form-row -->
                            
                            <div class="form-row">
                                <div class="col-md">
                                    <div class="form-group">
                                        <label for="inputGroupSelect07" class="">check_in:</label>
                                        <input type="date" class="form-control" required id="inputGroupSelect07"
                                            name="check_in" value="{{ old('check_in') ? old('check_in') : $booking->check_in }}">
                                        @error('check_in')
                                            <span class="help-block " style="color: red">{{ $message }}</span>
                                        @enderror
                                    </div><!-- end form-group -->
                                </div><!-- end column -->
                                <div class="col-md">
                                    <div class="form-group">
                                        <label for="inputGroupSelect07" class="">check_out:</label>
                                        <input type="date" class="form-control" required id="inputGroupSelect07"
                                            name="check_out" value="{{ old('check_out') ? old('check_out') : $booking->check_out }}">
                                        @error('check_out')
                                            <span class="help-block " style="color: red">{{ $message }}</span>
                                        @enderror
                                    </div><!-- end form-group -->
                                </div><!-- end column -->    
                            </div><!-- end form-row -->
                            <div class="form-group">
                                <textarea name="description" id="editor1" rows="10" cols="80" >{{ old('description') ? old('description') : $booking->description }}</textarea>
                            </div><!-- end form-group -->
                            <ul class="list-inline">
                                <li class="list-inline-item">
                                    <button type="submit" class="btn">Thêm mới</button>
                                </li>
                                <li class="list-inline-item">
                                    <button class="btn"><a href="{{route('booking.index')}}" style="color: #fff">Trở về</a></button>
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
    <script src="{{asset('assets/ckeditor/ckeditor.js')}}"></script>
<script>
  // Replace the <textarea id="editor1"> with a CKEditor 4
  // instance, using default configuration.
  CKEDITOR.replace( 'editor1' );
</script>
@endsection
