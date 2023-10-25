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
            <form role="form" method="POST" enctype="multipart/form-data" action="{{route('blog.store')}}">
                @csrf
                <div class="box-body">
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Tên blog</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" name="tittle">
                        @error('tittle')
                            <small class="text-danger">{{$message}}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">link blog</label>
                      <input type="text" class="form-control" id="exampleInputEmail1" name="link_blog">
                      @error('link_blog')
                            <small class="text-danger">{{$message}}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Chọn ảnh</label>
                      <div class="radio">
                        <label>
                          <input type="file" name="photo" id="input " value="">
                          @error('photo')
                            <small class="text-danger">{{$message}}</small>
                        @enderror
                        </label>
                      </div>
                    </div>
    
                    <div class="form-group">
                      <label for="exampleInputEmail1">Chọn trạng thái</label>
                      <div class="radio">
                        <label>
                          <input type="radio" name="status" id="input" value="0" checked="checked">
                          Hiện
                        </label>
                        <label>
                          <input type="radio" name="status" id="input" value="1" >
                          Ẩn
                        </label>
                      </div>
                    </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Mô tả</label>
                        <textarea name="description" id="editor1" rows="10" cols="80">
                          
                      </textarea>
                      </div>
                    </div>
                  </div>
                
                
                
                
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