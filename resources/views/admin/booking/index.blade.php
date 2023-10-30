@extends('admin.master')
@section('main-content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Quản lý Blog trang giao diện
       
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
              <a href="{{route('booking.create')}}" class="btn btn-success">+Thêm mới blog</a>
              <a href="{{route('booking.trash')}}" class="btn btn-primary "><i class="fa-solid fa-trash"></i>Thùng rác</a>

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
                  <th>STT</th>
                  <th>Tên phòng đã đặt</th>
                  <th>Tên khách hàng</th>
                  <th>status</th>
                  <th>check_in</th>
                  <th>check_out</th>
                  <th>Tùy chọn</th>
                </tr>
                @forelse ($bookings  as $item)
                <td>{{$loop->iteration}}</td>
                <td>{{$item->rooms->name}}</td>
                <td>{{$item->users->name}}</td>
                <td>{{$item->status}}</td>
                <td>{{$item->check_in}}</td>
                <td>{{$item->check_out}}</td>
                <td>

                  <a href="{{route('booking.edit',$item)}}" class="btn btn-success">Sửa</a>
                  <form action="{{route('booking.destroy',$item)}}" method="post">
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