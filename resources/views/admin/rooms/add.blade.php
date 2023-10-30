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
              <h3 class="box-title">Thêm mới Phòng</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="POST" enctype="multipart/form-data" action="{{route('rooms.store')}}">
                @csrf
                <div class="box-body">
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group ">
                        <label for="disabledTextInput" class="fs-4 text-uppercase">Mã phòng</label>
                        <input type="text" class="form-control" id="productName" name="room_code" value="{{old('name')}}">
                        @error('room_code')
                            <span class="help-block " style="color: red">{{$message}}</span>
                        @enderror
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="">Tên phòng</label>
                        <input type="text" name="name" id="" class="form-control" placeholder="" aria-describedby="helpId">
                        @error('name')
                            <span class="help-block " style="color: red">{{$message}}</span>
                        @enderror
                      </div>
                    </div>
                  </div>
                  
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group ">
                        <label for="disabledTextInput" class="fs-4 text-uppercase">Ảnh</label>
                        <input type="file" class="form-control" id="file-input" name="photo" value="{{old('photo')}}">
                        <img src="" id="img-preview" alt="">
                        @error('photo')
                            <span class="help-block" style="color: red">{{$message}}</span>
                        @enderror
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group ">
                        <label for="disabledTextInput" class="fs-4 text-uppercase">Ảnh chi tiết</label>
                        <input type="file" class="form-control" id="exampleInputEmail1" name="photos[]" onchange="preview(this)" multiple >
                        <div class="row mt-3" id="sub-image-preview">
                        @error('photo')
                            <span class="help-block" style="color: red">{{$message}}</span>
                        @enderror
                      </div>
                    </div>
                  </div>
                </div>
                  
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="disabledTextInput" class="fs-4 text-uppercase">Hạng phòng</label>
                        <select class="form-control" name="type_id" id="">
                          
                          @foreach ($type_rooms as $item)
                            <option value="{{$item->id}}">{{$item->room_type}}</option>
                          @endforeach
                        </select>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group ">
                        <label for="disabledTextInput" class="fs-4 text-uppercase">Giá</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" name="price" value="{{old('price')}}">
                        @error('price')
                            <span class="help-block" style="color: red">{{$message}}</span>
                        @enderror
                      </div>
                    </div>
                  </div>
                  
                  <div class="row">
                    <div class="col-md-4">
                      <div class="mb-3">
                        <label for="disabledTextInput" class="fs-4 text-uppercase">Trạng thái</label>
                        <div class="d-flex">
                          <div class="form-check">
                            <label class="form-check-label">
                              <input type="radio" class="form-check-input" name="isBooked" id="" value="1" checked>
                              On
                            </label>
                          </div>
                          <div class="form-check ms-2">
                            <label class="form-check-label">
                              <input type="radio" class="form-check-input" name="isBooked" id="" value="0" >
                              Off
                            </label>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="mb-3">
                        <label for="disabledTextInput" class="fs-4 text-uppercase">Đề xuất</label>
                        <div class="d-flex">
                          <div class="form-check">
                            <label class="form-check-label">
                              <input type="radio" class="form-check-input" name="status" id="" value="1" checked>
                              On
                            </label>
                          </div>
                          <div class="form-check ms-2">
                            <label class="form-check-label">
                              <input type="radio" class="form-check-input" name="status" id="" value="0" >
                              Off
                            </label>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label for="">Số Người</label>
                        <input type="number" name="people" id="" class="form-control" placeholder="" aria-describedby="helpId"> 
                        @error('people')
                            <span class="help-block " style="color: red">{{$message}}</span>
                        @enderror
                      </div>
                    </div>
                  </div>
                  
                  
                  <div class="form-group">
                    <label for="disabledTextInput" class="fs-4 text-uppercase">Descripton</label>
                    <textarea name="descripton" id="editor1" rows="10" cols="80">
                      This is my textarea to be replaced with CKEditor 4.
                    </textarea>
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