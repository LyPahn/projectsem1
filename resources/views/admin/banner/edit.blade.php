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
              <h3 class="box-title">Cập nhật banner</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="POST" enctype="multipart/form-data" action="{{route('banner.update',$banner)}}">
                @csrf
                @method('PUT')
                {{-- <input type="hidden" name="" value="{{$banner->id}}"> --}}
                <div class="box-body">
                  <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                          <label for="exampleInputEmail1">Tên banner</label>
                          <input type="text" class="form-control" id="exampleInputEmail1" name="banner_name" value="{{$banner->banner_name}}">
                          @error('banner_name')
                              <small class="text-danger">{{$message}}</small>
                          @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="exampleInputEmail1">link banner</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" name="banner_link" value="{{$banner->banner_link}}">
                        @error('banner_link')
                              <small class="text-danger">{{$message}}</small>
                          @enderror
                      </div>
                    </div>
                  </div>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Caption</label>
                      <input type="text" class="form-control" id="exampleInputEmail1" name="caption" value="{{$banner->caption}}">
                      @error('caption')
                            <small class="text-danger">{{$message}}</small>
                        @enderror
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Chọn banner</label>
                      <div class="radio">
                        <label>
                          <input type="file" name="photo" id="input " value="{{$banner->banner_image}}">
                          @error('photo')
                            <small class="text-danger">{{$message}}</small>
                        @enderror
                          
                        </label>
                      </div>
                    </div>
                  </div>
                </div>
                
                
                
              

                <div class="form-group">
                  <label for="exampleInputEmail1">Chọn trạng thái</label>
                  <div class="radio">
                    <label>
                      <input type="radio" name="status" id="input" value="0" {{!$banner->status ? 'checked' : ''}}>
                      Hiện
                    </label>
                    <label>
                      <input type="radio" name="status" id="input" value="1" {{$banner->status ? 'checked' : ''}}>
                      Ẩn
                    </label>
                    @error('status')
                        <small class="text-danger">{{$message}}</small>
                    @enderror
                  </div>
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