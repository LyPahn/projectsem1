@extends('admin.master')
@section('main-content')
<section>
  <div class="content listing-content">
      <div class="in-content-wrapper">
          <div class="row no-gutters">
              <div class="col">
                  <div class="heading-messages">
                      <h3>Trash Listing</h3>
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
                  <div class="col">
                      <table id="example" class="display table-hover table-responsive-xl listing">
                          <thead>
                              <tr>
                                <th>Img</th>
                                <th>Tittle</th>
                                <th>Trạng thái</th>
                                <th>Ngày tạo</th>
                                <th>Tùy chọn</th>
                              </tr>
                          </thead>
                          <tbody>
                              @forelse ($deleted_at as $item)
                                  <tr>
                                      <td><img src="{{ asset('storage/images/' . $item->image) }}" alt="table-img"
                                          class="img-fluid rounded-circle" width="40px"></td>
                                          <td>{{ $item->tittle }}</td>
                                          <td>{!! $item->status
                                            ? '<span class="label label-danger"> ẩn hiển thị</span>'
                                            : '<span class="label label-success">Hiển thị</span>' !!}</td>
                                            </td>
                                          <td>{{$item->created_at}}</td>
                                          <td>
                                            <a class=" btn btn-info"
                                                href="{{ route('blog.restore', $item->id) }}">Khôi phục</i></a>
                                            <a class=" btn btn-danger"
                                                href="{{ route('blog.forceDeleted', $item->id) }}">Xóa vĩnh
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