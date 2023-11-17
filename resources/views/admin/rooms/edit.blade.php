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
                            action="{{ route('rooms.update', $room) }}">
                            @csrf
                            @method('PUT')
                            <input type="hidden" name="id" value="{{ $room->id }}">
                            <div class="form-row">
                                <div class="col-md">
                                    <div class="form-group">
                                        <label for="inputGroupSelect07" class="">Tên phòng:</label>
                                        <input type="text" class="form-control" required id="inputGroupSelect07"
                                            name="name" value="{{ old('name') ? old('name') : $room->name }}">
                                        @error('name')
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
                                                <label class="input-group-text" for="inputGroupSelect01">Hạng
                                                    phòng:</label>
                                            </div>
                                            <select class="custom-select" id="inputGroupSelect01" name="type_id">
                                                <option selected>Choose...</option>
                                                @foreach ($type_rooms as $item)
                                                    <option value="{{ $item->id }}"
                                                        {{ $room->type_id === $item->id ? 'selected' : '' }}>
                                                        {{ $item->room_type }}</option>
                                                @endforeach
                                            </select>
                                            <i class="fas fa-angle-down"></i>
                                        </div>
                                    </div><!-- end form-group -->
                                </div><!-- end column -->
                                <div class="col-md">
                                    <div class="form-group">
                                        <label for="inputGroupSelect07" class="">Giá:</label>
                                        <input type="text" class="form-control" required id="inputGroupSelect07"
                                            name="price" value="{{ old('price') ? old('price') : $room->price }}">
                                        @error('price')
                                            <span class="help-block " style="color: red">{{ $message }}</span>
                                        @enderror
                                    </div><!-- end form-group -->
                                </div><!-- end column -->
                            </div><!-- end form-row -->
                            <div class="form-row">
                                <div class="col-md">
                                    <div class="form-group ">
                                        <label for="disabledTextInput" class="fs-4 text-uppercase">Ảnh</label>
                                        <input type="file" class="form-control" id="file-input" name="photo"
                                            value="{{ old('photo') ? old('photo') : $room->image }}">
                                        <img src="{{ asset('storage/images/' . $room->image) }}" id="img-preview"
                                            alt="" width="100px">
                                        @error('photo')
                                            <span class="help-block" style="color: red">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div><!-- end column -->
                                <div class="col-md">
                                    <div class="form-group ">
                                        <label for="disabledTextInput" class="fs-4 text-uppercase">Ảnh chi tiết</label>
                                        <input type="file" class="form-control" id="img-preview" name="photos[]"
                                            onchange="preview(this)" multiple>
                                        <div class="row mt-3" id="sub-image-preview">
                                            @foreach ($listimages as $item)
                                                <img class="card-img-bottom"
                                                    src="{{ asset('storage/images/' . $item->image) }}" alt=""
                                                    width="100px">
                                            @endforeach
                                            @error('photo[]')
                                                <span class="help-block">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div><!-- end column -->
                            </div><!-- end form-row -->
                            <div class="form-row">
                                <div class="col-md">
                                    <div class="form-group">
                                        <label for="inputGroupSelect07" class="">Mã phòng:</label>
                                        <input type="text" class="form-control" required id="inputGroupSelect07"
                                            name="room_code"
                                            value="{{ old('room_code') ? old('room_code') : $room->room_code }}">
                                        @error('room_code')
                                            <span class="help-block " style="color: red">{{ $message }}</span>
                                        @enderror
                                    </div><!-- end form-group -->
                                </div><!-- end column -->
                                <div class="col-md">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <label class="input-group-text" for="inputGroupSelect03">Đề xuất:</label>
                                            </div>
                                            <select class="custom-select" id="inputGroupSelect03" name="propose">
                                                <option value="1" selected>On</option>
                                                <option value="0">Off</option>
                                            </select>
                                            <i class="fas fa-angle-down"></i>
                                        </div>
                                    </div><!-- end form-group -->
                                </div><!-- end column -->
                            </div><!-- end form-row -->
                            <div class="form-row">
                                <div class="col-md">
                                    <div class="form-group">
                                        <label for="inputGroupSelect07" class="">Số người lớn:</label>
                                        <input type="number" class="form-control" required id="inputGroupSelect07"
                                            name="adluts" value="{{ old('adluts') ? old('adluts') : $room->adluts }}">
                                        @error('adluts')
                                            <span class="help-block " style="color: red">{{ $message }}</span>
                                        @enderror
                                    </div><!-- end form-group -->
                                </div><!-- end column -->
                                <div class="col-md">
                                    <div class="form-group">
                                        <label for="inputGroupSelect07" class="">Số trẻ em:</label>
                                        <input type="number" class="form-control" required id="inputGroupSelect07"
                                            name="children"
                                            value="{{ old('children') ? old('children') : $room->children }}">
                                        @error('children')
                                            <span class="help-block " style="color: red">{{ $message }}</span>
                                        @enderror
                                    </div><!-- end form-group -->
                                </div><!-- end column -->
                            </div><!-- end form-row -->
                            <div class="form-group">
                                <textarea name="description" id="editor1" rows="10" cols="80">
                                    {{ old('description') ? old('description') : $room->description }}
                                </textarea>
                            </div><!-- end form-group -->
                            <ul class="list-inline">
                                <li class="list-inline-item">
                                    <button type="submit" class="btn">Submit</button>
                                </li>
                                <li class="list-inline-item">
                                    <button class="btn"><a href="{{route('rooms.index')}}" style="color: #fff">Cancel</a></button>
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
    <script src="{{ asset('assets/ckeditor/ckeditor.js') }}"></script>
    <script>
        // Replace the <textarea id="editor1"> with a CKEditor 4
        // instance, using default configuration.
        CKEDITOR.replace('editor1');
    </script>
    <script>
        const input = document.getElementById('file-input');
        const image = document.getElementById('img-preview');

        input.addEventListener('change', (e) => {
            if (e.target.files.length) {
                const src = URL.createObjectURL(e.target.files[0]);
                image.src = src;
            }
        });

        function preview(elem, output = '') {
            Array.from(elem.files).map((file) => {
                const blobUrl = window.URL.createObjectURL(file)
                output +=
                    `<div class="col-lg-3 js-add-image"  id="img-add">
                        <div class="card text-left bg-dark border-danger">
                            <img class="card-img-bottom" src=${blobUrl} alt="" width = "100px">
                        </div>
                    </div>`
            })
            document.getElementById('sub-image-preview').innerHTML = output
        }
    </script>
@endsection
