@extends('admin.master')
@section('main-content')x`
    <section>
        <div class="content listing-content">
            <div class="in-content-wrapper">
                <div class="row no-gutters">
                    <div class="col">
                        <div class="heading-messages">
                            <h3>Hotel Listing</h3>
                        </div><!-- End heading-messages -->
                    </div><!-- End column -->
                    <div class="col-md-4">
                        <div class="breadcrumb">
                            <div class="breadcrumb-item"><i class="fas fa-angle-right"></i><a href="#">Listing</a>
                            </div>
                            <div class="breadcrumb-item active"><i class="fas fa-angle-right"></i>All
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
<<<<<<< Updated upstream
                                        <th>Mã phòng</th>
=======
                                        <th>
                                            <div class="form-check">
                                                <input class="form-check-input" id="master-checkbox" onclick="checkbox()" type="checkbox">
                                            </div>
                                        </th>
                                        <th>STT</th>
>>>>>>> Stashed changes
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
                                    @forelse ($rooms as $item)
                                        <tr>
<<<<<<< Updated upstream
                                            <td>{{ $item->room_code }}</td>
                                            <td><img src="{{ asset('storage/images/' . $item->image) }}" alt="table-img"
                                                class="img-fluid rounded-circle" width="40px"></td>
                                                <td>{{ $item->typeRooms->room_type }}</td>
                                                <td>{{ $item->name }}</td>
                                                <td>{{ number_format($item->price) }}/night</td>
                                                <td>{{ $item->adluts }}</td>
                                                <td>{{ $item->children }}</td>
                                                <td >
                                                    @if (isset($status))
                                                        @if ($status == 0)
                                                        <span>Đã đặt</span>        
                                                        @else
                                                        <span>{{ $item->status ? 'Còn trống' : 'Đã đặt' }}</span>        
                                                        @endif
                                                    
                                                    @else
                                                    
                                                    @endif
                                                    
                                                </td>
                                                <td>{{$item->created_at}}</td>
=======
                                            <td>
                                                <div class="form-check">
                                                    <input class="form-check-input de " name="sub" type="checkbox"
                                                        id="{{ $item->id }}">
                                                </div>
                                            </td>
                                            <td>{{ $loop->iteration }}</td>
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
>>>>>>> Stashed changes
                                            <td>
                                                <a href="{{ route('rooms.edit', $item) }}"><i
                                                        class="fas fa-edit"></i></a>
                                                <form action="{{ route('rooms.destroy', $item) }}" method="post">
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
