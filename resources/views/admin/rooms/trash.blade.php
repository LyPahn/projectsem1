@extends('admin.master')
@section('main-content')
    <section>
        <div class="content listing-content">
            <div class="in-content-wrapper">
                <div class="row no-gutters">
                    <div class="col">
                        <div class="heading-messages">
                            <h3>Thùng rác</h3>
                        </div><!-- End heading-messages -->
                    </div><!-- End column -->
                    <div class="col-md-4">
                        <div class="breadcrumb">
                            <div class="breadcrumb-item"><i class="fas fa-angle-right"></i><a href="{{route('rooms.index')}}">Danh sách</a>
                            </div>
                            <div class="breadcrumb-item active"><i class="fas fa-angle-right"></i>Thùng rác
                            </div>
                        </div><!-- end breadcrumb -->
                    </div><!-- End column -->
                </div><!-- end row -->
                <div class="box">
                    <div class="row no-gutters">
                        <div class="col">
                            <table id="example" class="display table-hover table-responsive-xl listing">
                                <thead>
                                    <tr>
                                        <th>STT</th>
                                        <th>Img</th>
                                        <th>Hạng phòng</th>
                                        <th>Tên phòng</th>
                                        <th>Mã phòng</th>
                                        <th>Giá</th>
                                        <th>Số lượng người lớn</th>
                                        <th>Số lượng trẻ em</th>
                                        <th>Trạng thái phòng</th>
                                        <th>Ngày tạo</th>
                                        <th>Tùy chọn</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($deleted_at as $item)
                                        <tr>
                                            <<td>{{ $loop->iteration }}</td>
                                                <td><img src="{{ asset('storage/images/' . $item->image) }}" alt="table-img"
                                                        class="img-fluid rounded-circle" width="40px"></td>
                                                <td>{{ $item->typeRooms->room_type }}</td>
                                                <td>{{ $item->name }}</td>
                                                <td>{{ $item->room_code }}</td>
                                                <td>{{ number_format($item->price) }}/night</td>
                                                <td>{{ $item->adluts }}</td>
                                                <td>{{ $item->children }}</td>
                                                <td class="{{ $item->isBooked ? 'active' : 'draft' }}">
                                                    <span>{{ $item->isBooked ? 'On' : 'Off' }}</span>
                                                </td>
                                                <td>{{ $item->created_at }}</td>
                                                <td>
                                                    <a class=" btn btn-info"
                                                        href="{{ route('rooms.restore', $item->id) }}">Khôi phục</i></a>
                                                    <a class=" btn btn-danger"
                                                        href="{{ route('rooms.forceDeleted', $item->id) }}">Xóa vĩnh
                                                        viễn</a>
                                                </td>
                                        </tr>
                                    @empty
                                    @endforelse
                                </tbody>
                            </table>
                        </div><!-- end column -->
                    </div><!-- end row -->
                </div><!-- end box -->
            </div><!-- end in-content-wrapper -->
        </div><!-- end listing-content -->
    </section>
@endsection
@section('add-js')
    <script src="{{ asset('assets') }}/js/jquery-3.3.1.min.js"></script>
    <script src="{{ asset('assets') }}/js/popper.min.js"></script>
    <script src="{{ asset('assets') }}/js/bootstrap.min4.2.1.js"></script>
    <script src="{{ asset('assets') }}/vendors/datatables/datatables.min.js"></script>
    <script src="{{ asset('assets') }}/js/customscriptfile.js"></script>
    <script>
        $(document).ready(function() {
            $('#example').DataTable();
        });
    </script>
@endsection
