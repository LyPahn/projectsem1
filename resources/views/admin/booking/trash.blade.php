@extends('admin.master')
@section('main-content')
<section>
  <div class="content listing-content">
      <div class="in-content-wrapper">
          <div class="row no-gutters">
              <div class="col">
                  <div class="heading-messages">
                      <h3>Thùng rác đơn phòng</h3>
                  </div><!-- End heading-messages -->
              </div><!-- End column -->
              <div class="col-md-4">
                  <div class="breadcrumb">
                      <div class="breadcrumb-item"><i class="fas fa-angle-right"></i><a href="{{route('booking.index')}}">Danh sách</a>
                      </div>
                      <div class="breadcrumb-item active"><i class="fas fa-angle-right"></i>Thùng rác
                      </div>
                  </div><!-- end breadcrumb -->
              </div><!-- End column -->
          </div><!-- end row -->
          <div class="box">
              <div class="row no-gutters">
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
                                  <th>STT</th>
                                  <th>Tên phòng đã đặt</th>
                                  <th>Tên khách hàng</th>
                                  <th>check_in</th>
                                  <th>check_out</th>
                                  <th>Tùy chọn</th>
                              </tr>
                          </thead>
                          <tbody>
                              @forelse ($deleted_at as $item)
                                  <tr>
                                      <td>{{ $loop->iteration }}</td>
                                      <td>{{ $item->rooms->name }}</td>
                                      <td>{{ $item->name }}</td>
                                      <td>{{ $item->check_in }}</td>
                                      <td>{{ $item->check_out }}</td>
                                      <td>
                                        <a class=" btn btn-info"
                                            href="{{ route('booking.restore', $item->id) }}">Khôi phục</i></a>
                                        <a class=" btn btn-danger"
                                            href="{{ route('booking.forceDeleted', $item->id) }}">Xóa vĩnh
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