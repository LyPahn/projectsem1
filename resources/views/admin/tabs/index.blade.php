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
           <a href="{{route('tabs.create')}}" class="btn btn-success">+Thêm mới tab</a>

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
                  <th>Tên Hotel Tab</th>
                  <th>Ngày tạo</th>
                  <th>Trạng thái</th>
                  <th>Tùy chọn</th>
                </tr>
                @forelse ($tab as $item)
                <td>{{$loop->iteration}}</td>
                <td>{{$item->name}}</td>
                <td>{{$item->created_at}}</td>
                <td>{!!$item->status==1 ? '<span class="label label-danger"> ẩn hiển thị</span>' : '<span class="label label-success">Hiển thị</span>'!!}</td>
                <td>
                <a href="{{route('tabs.edit',$item)}}" class="btn btn-success">Sửa</a>
                <form action="{{route('tabs.destroy',$item->id)}}" method="post">
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