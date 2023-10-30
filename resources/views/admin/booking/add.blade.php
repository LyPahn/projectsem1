@extends('admin.master')
@section('main-content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Quản lý banner trang giao diện
       
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Examples</a></li>
        <li class="active">Blank page</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
     <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Thêm mới blog</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="POST" enctype="multipart/form-data" action="{{route('booking.store')}}">
                @csrf
                <div class="form-group">
                  <label for="exampleInputEmail1">Tên khách hàng</label>
                  <select name="user_id" id="input" class="form-control">
                    @foreach ($users as $item)
                        <option value="{{$item->id}}">{{$item->name}}</option>
                    @endforeach
                  </select>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Tên phòng</label>
                  <select name="room_id" id="input" class="form-control">
                    @foreach ($rooms as $item)
                        <option value="{{$item->id}}">{{$item->name}}</option>
                    @endforeach
                  </select>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Chọn trạng thái</label>
                  <div class="radio">
                    <label>
                      <input type="radio" name="status" id="input" value="1" checked="checked">
                      1
                    </label>
                    <label>
                      <input type="radio" name="status" id="input" value="0" >
                      0
                    </label>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="exampleInputEmail1">check_in</label>
                      <input type="datetime" name="check_in" class="form-control">
                      @error('check_in')
                            <span class="help-block " style="color: red">{{$message}}</span>
                        @enderror
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="exampleInputEmail1">check_out</label>
                      <input type="datetime" name="check_out" class="form-control">
                      @error('check_out')
                            <span class="help-block " style="color: red">{{$message}}</span>
                        @enderror
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label for="disabledTextInput" class="fs-4 text-uppercase">Descripton</label>
                  <textarea name="description" id="editor1" rows="10" cols="80">
                  
                  </textarea>
                </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Thêm mới</button>
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