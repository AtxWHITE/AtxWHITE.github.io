@extends('backend.layouts.master')

@section('main-content')

<div class="card">
    <h5 class="card-header">Profile</h5>
    <div class="card-body">
        <form method="post" action="">
            @csrf
            {{-- @method('PATCH') --}}

            <div class="form-group">
                <label for="inputPhoto" class="col-form-label">Photo <span class="text-danger">*</span></label>
                <div class="input-group">
                    <span class="input-group-btn">
                        <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary">
                            <i class="fa fa-picture-o"></i> Choose
                        </a>
                    </span>
                    <!-- //image  -->
                    <img src="{{ $data->photo }}" alt="" style="margin-top:15px;max-height:100px;">
                    <input id="thumbnail" class="form-control" type="text" name="photo" value="{{$data->photo}}">
                </div>
                <div id="holder" style="margin-top:15px;max-height:100px;"></div>
                @error('photo')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <!-- nama  -->
            <div class="form-group">
                <label for="name" class="col-form-label">Name <span class="text-danger">*</span></label>
                <input type="text" class="form-control" name="name" required value="{{$data->name}}">
                @error('name')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <!-- username  -->

            <!-- email  -->
            <div class="form-group">
                <label for="email" class="col-form-label">Email <span class="text-danger">*</span></label>
                <input type="email" class="form-control" name="email" required value="{{$data->email}}">
                @error('email')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <!-- alamat  -->
            <div class="form-group">
                <label for="alamat" class="col-form-label">Alamat <span class="text-danger">*</span></label>
                <input type="text" class="form-control" name="alamat" required value="{{$data->profile->alamat}}">
                @error('alamat')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <!-- ktp  -->
            <div class="form-group">
                <label for="ktp" class="col-form-label">KTP <span class="text-danger">*</span></label>
                <input type="text" class="form-control" name="ktp" required value="{{$data->profile->ktp}}">
                @error('ktp')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <div class="form-group mb-3">
                <button class="btn btn-success" type="submit">Update</button>
            </div>
        </form>
    </div>
</div>
@endsection

@push('styles')
<link rel="stylesheet" href="{{asset('backend/summernote/summernote.min.css')}}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.css" />

@endpush
@push('scripts')
<script src="/vendor/laravel-filemanager/js/stand-alone-button.js"></script>
<script src="{{asset('backend/summernote/summernote.min.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>

<script>
    $('#lfm').filemanager('image');
    $('#lfm1').filemanager('image');
    $(document).ready(function() {
        $('#summary').summernote({
            placeholder: "Write short description.....",
            tabsize: 2,
            height: 150
        });
    });

    $(document).ready(function() {
        $('#quote').summernote({
            placeholder: "Write short Quote.....",
            tabsize: 2,
            height: 100
        });
    });
    $(document).ready(function() {
        $('#description').summernote({
            placeholder: "Write detail description.....",
            tabsize: 2,
            height: 150
        });
    });
</script>
@endpush