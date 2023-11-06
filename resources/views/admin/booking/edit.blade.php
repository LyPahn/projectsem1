@extends('admin.master')
@section('main-content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Quản lý đặt phòng

            </h1>
            {{-- <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Examples</a></li>
        <li class="active">Blank page</li>
      </ol> --}}
        </section>

        <!-- Main content -->
        <section class="content">

            <!-- Default box -->
            <div class="col-md-12">
                <!-- general form elements -->
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Cập nhật đơn đặt phòng</h3>
                    </div>
                    @if ($message = Session::get('error'))
                        <div class="alert alert-danger alert-block">

                            <button type="button" class="close" data-dismiss="alert">×</button>

                            <strong>{{ $message }}</strong>

                        </div>
                    @endif
                    <!-- /.box-header -->
                    <!-- form start -->
                    <form role="form" method="POST" enctype="multipart/form-data"
                        action="{{ route('booking.update', $booking) }}">
                        @csrf
                        @method('PUT')
                        <div class="box-body">
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Tên khách hàng</label>
                                        <select name="user_id" id="input" class="form-control">
                                            @foreach ($users as $item)
                                                <option value="{{ $item->id }}"
                                                    {{ $booking->user_id === $item->id ? 'selected' : '' }}>{{ $item->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div></div> 
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Tên phòng</label>
                                        <select name="room_id" id="input" class="form-control">
                                            @foreach ($rooms as $item)
                                                <option value="{{ $item->id }}"
                                                    {{ $booking->room_id === $item->id ? 'selected' : '' }}>{{ $item->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div></div> 
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Chọn trạng thái</label>
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="status" id="input" value="1"
                                                    {{ $booking->status ? 'checked' : '' }}>
                                                Còn trống
                                            </label>
                                            <label>
                                                <input type="radio" name="status" id="input" value="0"
                                                    {{ !$booking->status ? 'checked' : '' }}>
                                                Đã đặt
                                            </label>
                                        </div>
                                    </div></div> 
                            </div>        
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">check_in</label>
                                        <input type="date" name="check_in" class="form-control"
                                            value="{{ old('check_in') ? old('check_in') : $booking->check_in }}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">check_out</label>
                                        <input type="date" name="check_out" class="form-control"
                                            value="{{ old('check_out') ? old('check_out') : $booking->check_out }}">

                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="disabledTextInput" class="fs-4 text-uppercase">Descripton</label>
                                <textarea name="descripton" id="editor1" rows="10" cols="80">
                      {{ old('description') ? old('description') : $booking->description }}
                    </textarea>
                            </div>
                        </div>
                        <!-- /.box-body -->

                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary">Cập nhật</button>
                        </div>
                    </form>
                </div>

                <!-- /.box -->

            </div>
            <!-- /.box -->

        </section>
        <!-- /.content -->
    </div>
@endsection
