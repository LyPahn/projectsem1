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
            @if ($message = Session::get('error'))

<div class="alert alert-danger alert-block">

	<button type="button" class="close" data-dismiss="alert">×</button>	

        <strong>{{ $message }}</strong>

</div>

@endif
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="POST" enctype="multipart/form-data" action="{{route('rooms.update',$room)}}">
                @csrf
                @method("PUT")
                <div class="box-body">
                  <input type="hidden" name="id" value="{{$room->id}}">
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group ">
                        <label for="disabledTextInput" class="fs-4 text-uppercase">Name</label>
                        <input type="text" class="form-control" id="productName" name="name" value="{{old('name') ? old('name') : $room->name}}">
                        @error('name')
                            <span class="help-block">{{$message}}</span>
                        @enderror
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group ">
                        <label for="disabledTextInput" class="fs-4 text-uppercase">Price</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" name="price" value="{{old('price') ? old('price') : $room->price}}">
                        @error('price')
                            <span class="help-block">{{$message}}</span>
                        @enderror
                      </div>
                    </div>
                  </div>
              
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group ">
                        <label for="disabledTextInput" class="fs-4 text-uppercase">Avatar</label>
                        <input type="file" class="form-control" id="file-input" name="photo" value="{{$room->image}}">
                        <img src="{{asset('storage/images/'.$room->image)}}" id="img-preview" alt="" width="300px">
                        @error('photo')
                        <span class="help-block">{{$message}}</span>
                        @enderror
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group ">
                        <label for="disabledTextInput" class="fs-4 text-uppercase">Image_Room</label>
                        <input type="file" class="form-control" id="file-inputs" name="photos[]" onchange="preview(this)" multiple>
                        <div class="row mt-3" id="sub-image-preview">
                        @foreach ($listimages as $item)
                        
                            <img class="card-img-bottom" src="{{ asset('storage/images/'.$item->image)  }}" alt="" width="100px">
                          
                        @endforeach
                        @error('photo')
                            <span class="help-block">{{$message}}</span>
                        @enderror
                      </div>
                    </div>
                  </div>
                  
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="disabledTextInput" class="fs-4 text-uppercase">Rooms Type</label>
                    <select class="form-control" name="type_id" id="">
                      <option value="">Chọn id Cha</option>
                      @foreach ($type_rooms as $item)
                        <option value="{{$item->id}}" {{($room->type_id === $item->id)?'selected':''}}>{{$item->room_type}}</option>
                      @endforeach
                    </select>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="">People</label>
                    <select class="form-control" name="people" id="">
                      <option value="2" >2</option>
                      <option value="4" >4</option>
                      <option value="6" >6</option>
                      
                    </select>
                  </div>
                  {{-- @error('name')
                      <span class="help-block">{{$message}}</span>
                  @enderror --}}
                </div>
              </div>
              
              <div class="row">
                <div class="col-md-6">
                  <div class="mb-3">
                    <label for="disabledTextInput" class="fs-4 text-uppercase">IsBooked</label>
                    <div class="d-flex">
                      <div class="form-check">
                        <label class="form-check-label">
                          <input type="radio" class="form-check-input" name="isBooked" id="" value="1" {{($room->isBooked == 1)?'checked':''}}>
                          On
                        </label>
                      </div>
                      <div class="form-check ms-2">
                        <label class="form-check-label">
                          <input type="radio" class="form-check-input" name="isBooked" id="" value="0" {{($room->isBooked == 0)?'checked':''}}>
                          Off
                        </label>
                      </div>
                    </div>
                    
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="mb-3">
                    <label for="disabledTextInput" class="fs-4 text-uppercase">Đề Xuất</label>
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