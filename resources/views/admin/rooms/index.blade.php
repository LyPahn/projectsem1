@extends('admin.master')
@section('main-content')x`
    <section>
        <div class="content listing-content">
            <div class="in-content-wrapper">
                <div class="row no-gutters">
                    <div class="col">
                        <div class="heading-messages">
                            <h3>Phòng chi tiết</h3>
                        </div><!-- End heading-messages -->
                    </div><!-- End column -->
                    <div class="col-md-4">
                        <div class="breadcrumb">
                            <div class="breadcrumb-item"><i class="fas fa-angle-right"></i><a href="#">Danh sách</a>
                            </div>
                        </div><!-- end breadcrumb -->
                    </div><!-- End column -->
                </div><!-- end row -->
                <div class="box">
                    <div class="row no-gutters">
                        <div class="col text-left">
                            <div class="add-new">
                                <a href="{{ route('rooms.create') }}">Thêm mới<i class="fas fa-plus"></i></a>
                                <a href="{{ route('rooms.trash') }}">Thùng rác<i class="fas"></i></a>
                            </div><!-- End add-new-->
                        </div><!-- End column-->
                        <div class="col text-right">
                            <div class="tools-btns">
                                <a href="#"><i class="fas fa-print" data-toggle="tooltip" data-html="true"
                                        title="Print"></i></a>
                                <a href="#"><i class="fas fa-file-pdf" data-toggle="tooltip" data-html="true"
                                        title="Pdf"></i></a>
                                <a href="#"><i class="fas fa-file-excel" data-toggle="tooltip" data-html="true"
                                        title="Excel"></i></a>
                            </div><!-- End tool-btns-->
                        </div><!-- End text-right-->
                    </div><!-- end row -->
                    @if ($message = Session::get('error'))
                        <div class="alert alert-danger alert-block">
                            <button type="button" class="close" data-dismiss="alert">×</button>
                            <strong>{{ $message }}</strong>
                        </div>
                    @endif
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success alert-block">
                            <button type="button" class="close" data-dismiss="alert">×</button>
                            <strong>{{ $message }}</strong>
                        </div>
                    @endif
                    <div class="row no-gutters">
                        <div class="col">
                            <table id="example" class="display table-hover table-responsive-xl listing">
                                <thead>
                                    <tr>
                                        <th>Mã phòng</th>
                                        <th>Hạng phòng</th>
                                        <th>Tên phòng</th>
                                        <th>Giá</th>
                                        <th>Số lượng người lớn</th>
                                        <th>Số lượng trẻ em</th>
                                        <th>Trạng thái phòng</th>
                                        <th>Ngày tạo</th>
                                        <th>Tùy chọn</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($rooms as $item)
                                        <tr>
                                            <td>{{ $item->room_code }}</td>
                                                <td>{{ $item->typeRooms->room_type }}</td>
                                                <td>{{ $item->name }}</td>
                                                <td>{{ number_format($item->price) }}/Đêm</td>
                                                <td>{{ $item->adluts }}</td>
                                                <td>{{ $item->children }}</td>
                                                <td >
                                                    <span>{{$item->booking ? 'Đã đặt' : 'Còn trống'}}</span>
                                                </td>
                                                <td>{{$item->created_at}}</td>
                                            <td>
                                                <a href="{{ route('rooms.edit', $item) }}"><i
                                                        class="fas fa-edit" style="color: black"></i></a>
                                                <form action="{{ route('rooms.destroy', $item->id) }}" method="post">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" onclick="return confirm('chắc chắn chứ')"
                                                        style="border: 0"><i class="fas fa-trash-alt"></i></button>
                                                </form>
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
