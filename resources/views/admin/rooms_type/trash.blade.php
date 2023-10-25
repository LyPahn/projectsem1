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
                  <th>Room Name</th>
                  <th>Tùy chọn</th>
                </tr>
                @forelse ($deleted_at   as $item)
                <td>{{$loop->iteration}}</td>
                <td>{{$item->room_type}}</td>
                <td>
                  <a class=" btn btn-info pr-2" href="{{route('rooms_type.restore',$item->id)}}"><i class="fa-solid fa-trash-can-arrow-up"></i></i></a>                                                
                  <a class=" btn btn-danger pr-2" href="{{route('rooms_type.forceDeleted',$item->id)}}"><i class="fa-solid fa-trash"></i></i></a>
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