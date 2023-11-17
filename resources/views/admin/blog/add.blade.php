@extends('admin.master')
@section('main-content')
  <section>
    <div class="content add-details">
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
                        <div class="breadcrumb-item active"><i class="fas fa-angle-right"></i>Create
                        </div>
                    </div><!-- end breadcrumb-->
                </div><!-- end column -->

            </div><!-- end row -->

            <div class="box">
                @if ($message = Session::get('error'))
                    <div class="alert alert-danger alert-block">

                        <button type="button" class="close" data-dismiss="alert">×</button>

                        <strong>{{ $message }}</strong>

                    </div>
                @endif
                <div class="row">
                    <div class="col">
                        <div class="details-text">
                            <h4>Add Details</h4>
                        </div><!-- end details-text -->
                    </div><!-- End column -->
                </div><!-- end row -->
                <div class="hotel-listing-form">
                    <form class="text-center" role="form" method="POST" enctype="multipart/form-data"
                        action="{{ route('blog.store') }}">
                        @csrf
                        <div class="form-row">
                            <div class="col-md">
                                <div class="form-group">
                                    <label for="inputGroupSelect07" class="">Tên blog</label>
                                    <input type="text" class="form-control" required id="inputGroupSelect07"
                                        name="tittle" value="{{ old('tittle') }}">
                                    @error('tittle')
                                        <span class="help-block " style="color: red">{{ $message }}</span>
                                    @enderror
                                </div><!-- end form-group -->
                            </div><!-- end column -->
                            <div class="col-md">
                                <div class="form-group">
                                    <label for="inputGroupSelect07" class="">link blog</label>
                                    <input type="text" class="form-control" required id="inputGroupSelect07"
                                        name="link_blog" value="{{ old('link_blog') }}">
                                    @error('link_blog')
                                        <span class="help-block " style="color: red">{{ $message }}</span>
                                    @enderror
                                </div><!-- end form-group -->
                            </div><!-- end column -->
                        </div><!-- end form-row -->
                        <div class="form-row">
                            <div class="col-md">
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <label class="input-group-text" for="inputGroupSelect01">Chọn trạng thái</label>
                                        </div>
                                        <select class="custom-select" id="inputGroupSelect01" name="type_id">
                                            <option selected name="status" value="0">Hiện</option>
                                            <option name="status" value="1">Ẩn</option>
                                        </select>
                                        <i class="fas fa-angle-down"></i>
                                    </div>
                                </div><!-- end form-group -->
                            </div><!-- end column -->
                            <div class="col-md">
                              <div class="form-group ">
                                  <label for="disabledTextInput" class="fs-4 text-uppercase">Ảnh</label>
                                  <input type="file" class="form-control" id="file-input" name="photo"
                                      value="{{ old('photo') }}">
                                  <img src="" id="img-preview" alt="">
                                  @error('photo')
                                      <span class="help-block" style="color: red">{{ $message }}</span>
                                  @enderror
                              </div>
                          </div><!-- end column -->
                        </div><!-- end form-row -->
                        <div class="form-group">
                            <textarea name="description" id="editor1" rows="10" cols="80"></textarea>
                            {{-- <textarea class="form-control textarea text-left p-3 h-100" id="exampleFormControlTextarea1" rows="5"
                                placeholder="Room Details" name="descripton"></textarea> --}}
                        </div><!-- end form-group -->
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <button type="submit" class="btn">Submit</button>
                            </li>
                            <li class="list-inline-item">
                                <button class="btn"><a href="{{route('blog.index')}}" style="color: #fff">Cancel</a></button>
                            </li>
                        </ul>

                    </form>
                </div><!-- end hotel-listing-form -->
            </div><!-- end box -->
        </div><!-- end in-content-wrapper -->
    </div><!-- end add-details -->
</section>
@endsection
@section('add-js')
<script src="{{ asset('assets') }}/js/jquery-3.3.1.min.js"></script>
<script src="{{ asset('assets') }}/js/popper.min.js"></script>
<script src="{{ asset('assets') }}/js/bootstrap.min4.2.1.js"></script>
<script src="{{ asset('assets') }}/vendors/dropzone-5.5.0/dist/min/dropzone.min.js"></script>
<script src="{{ asset('assets') }}/js/customscriptfile.js"></script>
<script src="{{asset('assets/ckeditor/ckeditor.js')}}"></script>
<script>
// Replace the <textarea id="editor1"> with a CKEditor 4
// instance, using default configuration.
CKEDITOR.replace( 'editor1' );
</script>
@endsection