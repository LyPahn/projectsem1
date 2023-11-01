@extends('admin.master')
@section('main-content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Quản lý phòng trang giao diện

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
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <a href="{{ route('rooms.create') }}" class="btn btn-success">+Thêm mới phòng</a>
                        <a href="{{ route('rooms_type.trash') }}" class="btn btn-primary "><i
                                class="fa-solid fa-trash"></i>Thùng rác</a>

                        <div class="box-tools">
                            <div class="input-group input-group-sm" style="width: 150px;">
                                <input type="text" name="table_search" class="form-control pull-right"
                                    placeholder="Search">

                                <div class="input-group-btn">
                                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body table-responsive no-padding">
                        @if ($message = Session::get('success'))
                            <div class="alert alert-success alert-block">

                                <button type="button" class="close" data-dismiss="alert">×</button>

                                <strong>{{ $message }}</strong>

                            </div>
                        @endif
                        @if ($message = Session::get('error'))
                            <div class="alert alert-danger alert-block">

                                <button type="button" class="close" data-dismiss="alert">×</button>

                                <strong>{{ $message }}</strong>

                            </div>
                        @endif
                        <table class="table table-hover">
                            <tbody>
                                <tr>
                                    <th>STT</th>
                                    <th>Ảnh</th>
                                    <th>Hạng phòng</th>
                                    <th>Tên phòng</th>
                                    <th>Giá</th>
                                    <th>Số lượng khách</th>
                                    <th>Trạng thái phòng</th>
                                    <th>Trạng thái trang chủ</th>
                                    <th>Tùy chọn</th>
                                </tr>
                                @forelse ($rooms   as $item)
                                    <td>{{ $loop->iteration }}</td>
                                    <td><img src="{{ asset('storage/images/' . $item->image) }}" alt="" srcset=""
                                            width="100px"></td>
                                    <td>{{ $item->typeRooms->room_type }}</td>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ number_format($item->price) }}/night</td>
                                    <td>{{ $item->people }}</td>
                                    <td>
                                        <span
                                            class="{{ $item->isBooked ? 'label label-success btn-md' : 'label label-danger btn-md' }}">{{ $item->isBooked ? 'On' : 'Off' }}</span>
                                    </td>
                                    <td>
                                        <span
                                            class="{{ $item->status ? 'label label-success btn-md' : 'label label-danger btn-md' }}">{{ $item->isBooked ? 'On' : 'Off' }}</span>
                                    </td>
                                    <td>

                                        <a class=" btn btn-info pr-2" href="{{ route('rooms.edit', $item) }}"><i
                                                class="fa-solid fa-wrench"></i></a>
                                        <form class="ms-2" action="{{ route('rooms.destroy', $item) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-danger" href=""><i
                                                    class="fa-solid fa-trash"></i></button>
                                        </form>


                                    </td>
                                    </tr>
                                @empty
                                    <p>CHưa có dữ liệu</p>
                                @endforelse




                            </tbody>
                        </table>
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
