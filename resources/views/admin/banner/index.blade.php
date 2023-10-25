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
      <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
           <a href="{{route('banner.create')}}" class="btn btn-success">+Thêm mới banner</a>

              <div class="box-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                  <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

                  <div class="input-group-btn">
                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tbody><tr>
                  <th></th>
                  <th>Kiểu banner</th>
                  <th>Ngày tạo</th>
                  <th>Trạng thái</th>
                  <th>Tùy chọn</th>
                </tr>
                @forelse ($banner as $item)
                <td><img src="{{asset('storage/images/'.$item->banner_image)}}" alt="" width="100px"></td>
                <td>{{$item->banner_name}}</td>
                <td>{{$item->created_at}}</td>
                <td>{!!$item->status ? '<span class="label label-danger"> ẩn hiển thị</span>' : '<span class="label label-success">Hiển thị</span>'!!}</td>
                <td>
                <a href="{{route('banner.edit',$item)}}" class="btn btn-success">Sửa</a>
                <form action="{{route('banner.destroy',$item->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button type="submit" class="btn btn-danger" onclick="return confirm('chắc chắn chứ')">Xoá</button>
                </form>
                
                  
                </td>
              </tr>  
                @empty
                    <p>CHưa có dữ liệu</p>
                @endforelse

                  
                
                
              </tbody></table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      <!-- /.box -->

    </section>
    <!-- /.content -->
</div>
@endsection