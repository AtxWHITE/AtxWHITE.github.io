@extends('backend.layouts.master')
@section('main-content')
    <!-- //messege  -->
    <!-- if messege status == success -->

    <div class="card">
        @if (Session::has('success'))
            <div class="alert alert-success">
                {{ Session::get('success') }}
            </div>
        @endif
        <!-- if messege status == error -->
        @if (Session::has('error'))
            <div class="alert alert-danger">
                {{ Session::get('error') }}
            </div>
        @endif
        <h5 class="card-header">Profile</h5>
        <div class="card-body">
            <form method="post" action="{{ url('admin/updateProfil', $data->id) }}" enctype="multipart/form-data">
                @csrf
                {{-- @method('PATCH') --}}

                <div class="form-group">
                    <label for="inputPhoto" class="col-form-label">Foto <span class="text-danger">*</span></label>
                    <div class="input-group" style="margin-bottom: 10px;">
                    </div>
                    <div class="input-group">
                        <input id="photo" class="form-control" type="file" name="foto" value="">
                    </div>

                    <div id="holder" style="margin-top:15px;max-height:100px;"></div>
                    @error('photo')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <!-- nama  -->
                <div class="form-group">
                    <label for="name" class="col-form-label">Name <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" name="name" required value="{{ $data->name }}">
                    @error('name')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <!-- ktp =no_ktp  -->
                <div class="form-group">
                    <label for="ktp" class="col-form-label">No KTP <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" name="ktp" required value="">
                    @error('ktp')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <!-- jenis kelamin select option  -->
                <div class="form-group">
                    <label for="jenis_kelamin" class="col-form-label">Jenis Kelamin <span
                            class="text-danger">*</span></label>
                    <select name="jenis_kelamin" class="form-control">
                        <option value="Laki-laki" @if ($data->profile->jenis_kelamin == 'Laki-laki') selected @endif>Laki-laki</option>
                        <option value="Perempuan" @if ($data->profile->jenis_kelamin == 'Perempuan') selected @endif>Perempuan</option>
                    </select>
                    @error('jenis_kelamin')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <!-- no_hp -->
                <div class="form-group">
                    <label for="no_hp" class="col-form-label">No HP <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" name="no_hp" required value="{{ $data->profile->no_hp }}">
                    @error('no_hp')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="email" class="col-form-label">Email <span class="text-danger">*</span></label>
                    <input type="email" class="form-control" name="email" required value="{{ $data->email }}">
                    @error('email')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <!-- status  -->
                <div class="form-group">
                    <label for="status" class="col-form-label">Status <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" name="status" required
                        value="{{ $data->profile->status }}">
                    @error('status')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <!-- tanggal lahir  -->
                <div class="form-group">
                    <label for="tanggal_lahir" class="col-form-label">Tanggal Lahir <span
                            class="text-danger">*</span></label>
                    <input type="date" class="form-control" name="tanggal_lahir" required
                        value="{{ $data->profile->tanggal_lahir }}">
                    @error('tanggal_lahir')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>



                <!-- tempat lahir  -->
                <div class="form-group">
                    <label for="tempat_lahir" class="col-form-label">Tempat Lahir <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" name="tempat_lahir" required
                        value="{{ $data->profile->tempat_lahir }}">
                    @error('tempat_lahir')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>




                <!-- email  -->

                <!-- alamat  -->
                <div class="form-group">
                    <label for="alamat" class="col-form-label">Alamat <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" name="alamat" required
                        value="{{ $data->profile->alamat }}">
                    @error('alamat')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <!-- ktp  -->

                <div class="form-group mb-3">
                    <button class="btn btn-success" type="submit">Update</button>
                </div>
            </form>
        </div>
    </div>
@endsection

@push('styles')
    <link rel="stylesheet" href="{{ asset('backend/summernote/summernote.min.css') }}">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.css" />
@endpush
@push('scripts')
    <script src="/vendor/laravel-filemanager/js/stand-alone-button.js"></script>
    <script src="{{ asset('backend/summernote/summernote.min.js') }}"></script>
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
