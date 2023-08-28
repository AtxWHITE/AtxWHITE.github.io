@extends('backend.layouts.master')

@section('main-content')
<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="row">
        <div class="col-md-12">
        </div>
    </div>
    <div class="card-header py-4">
        <h5 class="m-0 font-weight-bold text-primary float-left">Data Customer</h5>
        <!-- <a href="javascript:void(0)" id="tambah" class="btn btn-primary btn-sm float-right" data-toggle="modal" data-target="#customerModal"><i class="fas fa-plus"></i> Tambah Customer</a> -->
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <!-- form input  -->
            <form action="{{route('customers.index')}}" method="GET" role="search">
                <div class="row">
                    <div class="col-md-3">
                        <div class="input-group mb-3">
                            <!-- <input type="text" class="form-control" name="name" placeholder="Search By Name" aria-label="Recipient's username" aria-describedby="basic-addon2"> -->
                            <!-- <input type="text" class="form-control" name="name" placeholder="Search By Name" aria-label="Recipient's username" aria-describedby="basic-addon2" value="{{request()->input('name')}}"> -->
                            <!-- <select name="" id=""></select> -->
                            <select name="name" id="" class="form-control">
                                <option value="">-- Pilih Nama --</option>
                            </select>
                            <div class="input-group-append">

                                <button class="btn btn-primary" type="submit"><i class="fas fa-search"></i> Cari</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            <!-- //button tambah  -->
            <table class="table table-bordered" id="post-category-dataTable" width="100%" cellspacing="0">
                <thead style="background: linear-gradient(180deg, #036666 0%, #67B99A 100%);">
                    <tr style="color: white;">
                        <th>No.</th>
                        <!-- Nama -->
                        <th>Nama</th>
                        <!-- Email -->
                        <th>Email</th>
                        <!-- No.Telp -->
                        <th>No.Telp</th>
                        <!-- Alamat -->
                        <th>JK</th>
                        <!-- KTP -->
                        <th>Daerah Pengguna</th>
                        <!-- KTP -->
                        <th>KTP</th>
                        <!-- foto  -->
                        <th>Foto</th>
                        <!-- Aksi -->
                        <!-- status -->
                        <!-- Aksi -->
                        <th>TTL </th>
                        <!-- Aksi -->
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($data as $customer)
                    <tr>
                        <td>{{$loop->index +1}}</td>
                        <td>{{$customer->customers->nama}}</td>
                        <td>{{$customer->email}}</td>
                        <td>{{$customer->customers->no_hp}}</td>
                        <td>{{$customer->customers->jenis_kelamin}}</td>
                        <td>{{$customer->customers->alamat}}</td>
                        <td>
                            <img src="{{asset('storage/foto/'.$customer->customers->foto)}}" width="100px" alt="">
                        </td>
                        <td>
                            <img src="{{asset('storage/foto/'.$customer->customers->foto)}}" width="100px" alt="">

                        </td>
                        <td>{{$customer->customers->tempat_lahir}}</td>
                        <td>
                            <!-- //buttom lihat  -->
                            <a href="javascript:void(0)" id="lihat" name="lihat" data-toggle="modal" data-target="#customerModal" class="btn btn-info btn-sm" data-id="{{$customer->id}}"><i class="fas fa-eye"></i> </a>
                            <a href="javascript:void(0)" id="edit" name="edit" data-toggle="modal" data-target="#customerModalEdit" class="btn btn-warning btn-sm" data-id="{{$customer->id}}"><i class="fas fa-edit"></i> </a>
                            <form method="POST" action="{{url('superadmin/customers/destroy',[$customer->id])}}">
                                @csrf
                                @method('delete')
                                <button class="btn btn-danger btn-sm dltBtn" data-id="{{$customer->id}}" data-toggle="tooltip" data-placement="bottom" title="Delete"><i class="fas fa-trash-alt"></i> </button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- //modal tambah customer  -->
<!-- <div  -->

<!-- Button trigger modal -->
<!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
    Launch demo modal
</button> -->

<!-- Modal Tambah Customer -->
<div class="modal fade" id="customerModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="card">
                    <div class="card-body">
                        <p><b>Nama : </b><span id="view_name"></span></p>
                        <p><b>Email : </b><span id="view_email"></span></p>
                        <p><b>No.Telp : </b><span id="view_no_hp"></span></p>
                        <p><b>NIK : </b><span id="view_nik"></span></p>
                        <p><b>Jenis Kelamin : </b><span id="view_jenis_kelamin"></span></p>
                        <!-- //nik  -->
                        <p><b>Tanggal Lahir : </b><span id="view_tanggal_lahir"></span></p>
                        <p><b>Tempat Lahir : </b><span id="view_tempat_lahir"></span></p>
                        <p><b>Daerah Pengguna : </b><span id="view_alamat"></span></p>

                        <p><b>Foto Profil: </b><img src="" alt="" id="view_foto" style="width: 200px; height:150px;"></p>
                        <p><b>Foto KTP : </b><img src="" alt="" id="view_foto_ktp" style="width: 200px; height:150px;"></p>
                    </div>
                </div>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
            </div>
        </div>
    </div>
</div>

<!-- customerModalEdit -->
<!-- Modal -->
<div class="modal fade" role="dialog" id="customerModalEdit" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">EDIT POST</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- @csrf -->
                <!-- <form class='form-horizontal' id='document_form' enctype="multipart/form-data"> -->
                <div class="form-group">
                    <input type="text" id="idCustomers" name="idCustomers">
                    <label for="name" class="col-form-label">Name <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="name" name="name" required value="{{ old('name') }}">
                    @error('name')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <!-- //email -->
                <div class="form-group">
                    <label for="email" class="col-form-label">Email <span class="text-danger">*</span></label>
                    <input type="email" class="form-control" name="email" required value="{{ old('email') }}" id="email">
                    @error('email')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                    </span>
                </div>
                <!-- //nik  -->
                <div class="form-group">
                    <label for="nik" class="col-form-label">NIK <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" name="nik" required value="{{ old('nik') }}" id="nik">
                    @error('nik')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <!-- //jenis kelamin  -->
                <div class="form-group">
                    <label for="jenis_kelamin" class="col-form-label">Jenis Kelamin <span class="text-danger">*</span></label>
                    <select name="jenis_kelamin" id="jenis_kelamin" class="form-control" id="jenis_kelamin">
                        <option value="">-- Pilih Jenis Kelamin --</option>
                        <option value="Laki-laki">Laki-Laki</option>
                        <option value="Perempuan">Perempuan</option>
                        @error('jenis_kelamin')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </select>
                </div>
                <!-- //tempat lahir  -->
                <!-- //no_hp -->
                <div class="form-group">
                    <label for="no_hp" class="col-form-label">No.Hp <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" name="no_hp" required value="{{ old('no_hp') }}" id="no_hp">
                    @error('no_hp')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>


                <div class="form-group">
                    <label for="password" class="col-form-label">Password <span class="text-danger">*</span></label>
                    <input type="password" class="form-control" name="password" required id="password">

                </div>
                <div class="form-group">
                    <label for="inputPhoto" class="col-form-label">Foto <span class="text-danger">*</span></label>
                    <!-- img -->
                    <div class="imgWrap" style="margin-bottom: 10px;">
                        <img src="" id="fotoimg" class="img-fluid img-thumbnail" style="width: 100px; height:100px;">
                    </div>

                    <div class="input-group">
                        <input id="foto" class="form-control" type="file" name="foto" value="">
                    </div>
                    @error('photo')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="foto_ktp" class="col-form-label">Foto KTP <span class="text-danger">*</span></label>
                    <div class="imgWrap" style="margin-bottom: 10px;">
                        <img src="" id="fotoKtpImg" class="img-fluid img-thumbnail" style="width: 100px; height:100px;">
                    </div>

                    <div class="input-group">
                        <input id="foto_ktp" class="form-control" type="file" name="foto_ktp" value="">
                    </div>
                    <div id="holder" style="margin-top:15px;max-height:100px;"></div>
                    @error('foto_ktp')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <!-- tanggal_lahir -->
                <div class="form-group">
                    <label for="tanggal_lahir" class="col-form-label">Tanggal Lahir <span class="text-danger">*</span></label>
                    <input type="date" class="form-control" name="tanggal_lahir" required value="{{ old('tanggal_lahir') }}" id="tanggal_lahir">
                    @error('tanggal_lahir')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <!-- //tempat_lahir -->
                <div class="form-group">
                    <label for="tempat_lahir" class="col-form-label">Tempat Lahir <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" name="tempat_lahir" required value="{{ old('tempat_lahir') }}" id="tempat_lahir">
                    @error('tempat_lahir')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <!-- alamat -->
                <div class="form-group">
                    <label for="alamat" class="col-form-label">Daerah Pengguna <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" name="alamat" required value="{{ old('alamat') }}" id="alamat">
                    @error('alamat')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <!-- </form> -->
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">TUTUP</button>
                <button type="button" class="btn btn-primary" id="update">UPDATE</button>
            </div>
        </div>
    </div>
</div>

<script>
    //button create post event
    $('#edit').click(function(e) {
        var id = $(this).data('id');
        var token = $("meta[name='csrf-token']").attr("content");
        console.log(id);
        // modal append 
        $.ajax({
            url: "/superadmin/customers/" + id + "/edit",
            type: "GET",
            dataType: "JSON",
            data: {
                "id": id,
                "_token": token
            },
            success: function(data) {
                console.log(data.id);
                console.log(data.nama);
                // exampleModalLabel
                $("#exampleModalLabel").text('Edit Customer');
                $("#idCustomers").val(data.id);
                $("#name").val(data['customers'].nama);
                $("#email").val(data.email);
                $("#nik").val(data['customers'].nik);
                //password
                // ("#password").val(data.password);
                $("#no_hp").val(data['customers'].no_hp);
                $("#alamat").val(data['customers'].alamat);
                $("#jenis_kelamin").val(data['customers'].jenis_kelamin);
                $("#tempat_lahir").val(data['customers'].tempat_lahir);
                $("#tanggal_lahir").val(data['customers'].tanggal_lahir);
                $("#fotoimg").attr('src', "{{asset('storage/foto/')}}" + '/' + data['customers'].foto);
                $("#fotoKtpImg").attr('src', "{{asset('storage/foto_ktp/')}}" + '/' + data['customers'].foto_ktp);
            }
        })
    });

    //action update post
    $('#update').click(function(e) {
        e.preventDefault();
        var id = $("#idCustomers").val();

        var name = $("#name").val();
        var email = $("#email").val();
        var nik = $("#nik").val();
        //password
        var password = $("#password").val();
        var no_hp = $("#no_hp").val();
        var alamat = $("#alamat").val();
        var jenis_kelamin = $("#jenis_kelamin").val();
        var tempat_lahir = $("#tempat_lahir").val();
        var tanggal_lahir = $("#tanggal_lahir").val();
        // var foto = $("#foto").val();
        var imgnama = $("#fotoimg").attr('src');
        var foto = imgnama.replace(/^.*[\\\/]/, '');
        // var foto_ktp = $("#foto_ktp").val();
        var imgktp = $("#fotoKtpImg").attr('src');
        var foto_ktp = imgktp.replace(/^.*[\\\/]/, '');
        //
        // var foto_ktp = $("#foto_ktp").val();
        let token = $("meta[name='csrf-token']").attr("content");
        console.log(id);
        $.ajax({
            url: "/superadmin/customers/" + id,
            type: "PUT",
            cache: false,
            data: {
                "id": id,
                "name": name,
                "email": email,
                "nik": nik,
                "no_hp": no_hp,
                "alamat": alamat,
                "password": password,
                "jenis_kelamin": jenis_kelamin,
                "tempat_lahir": tempat_lahir,
                "tanggal_lahir": tanggal_lahir,
                "foto": foto,
                "foto_ktp": foto_ktp,
                "_token": token
            },
            success: function(response) {
                console.log(response);
                // $("#customerModalEdit").modal('hide');
                // alert("Data berhasil diupdate");
                // location.reload();
                swal({
                    title: "Sukses",
                    text: "Data berhasil diupdate",
                    icon: "success",
                    button: "OK",
                }).then((value) => {
                    location.reload();
                });
            },
        });
    });
</script>


@endsection

@push('styles')
<link href="{{asset('backend/vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css" />
<style>
    div.dataTables_wrapper div.dataTables_paginate {
        display: none;
    }
</style>
@endpush

@push('scripts')

<!-- Page level plugins -->
<script src="{{asset('backend/vendor/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('backend/vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
<!-- //ajax -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


<!-- Page level custom scripts -->
<script src="{{asset('backend/js/demo/datatables-demo.js')}}"></script>
<script>
    $('#post-category-dataTable').DataTable({
        "columnDefs": [{
            "orderable": false,
            "targets": [3, 4]
        }]
    });

    // Sweet alert
</script>
<script>
    $(document).ready(function() {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }


        });
        $('.dltBtn').click(function(e) {
            var form = $(this).closest('form');
            var dataID = $(this).data('id');
            // alert(dataID);
            e.preventDefault();
            swal({
                    title: "Apakah Kamu Yakin?",
                    text: "Setelah dihapus, Anda tidak akan dapat memulihkan data ini!",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                .then((willDelete) => {
                    if (willDelete) {
                        form.submit();
                    } else {
                        swal("Data Anda aman!");
                    }
                }).then(() => {
                    swal({
                        title: "Berhasil!",
                        text: "Data telah berhasil dihapus.",
                        icon: "success",
                    }).then(() => {
                        location.reload();
                    });
                });
        })
    });


    $(document).ready(function() {
        $('#lihat').on('click', function() {
            var id = $(this).data('id');
            var token = $("meta[name='csrf-token']").attr("content");
            $.ajax({
                url: "/superadmin/customers/" + id,
                type: "GET",
                dataType: "JSON",
                data: {
                    "id": id,
                    "_token": token
                },
                success: function(data) {
                    console.log(data.id);
                    console.log(data.nama);
                    // exampleModalLabel
                    $("#exampleModalLabel").text('Detail Customer');
                    $("#view_name").text(data['customers'].nama);
                    $("#view_email").text(data.email);
                    $("#view_nik").text(data['customers'].nik);
                    $("#view_no_hp").text(data['customers'].no_hp);
                    $("#view_alamat").text(data['customers'].alamat);
                    $("#view_jenis_kelamin").text(data['customers'].jenis_kelamin);
                    $("#view_tempat_lahir").text(data['customers'].tempat_lahir);
                    $("#view_tanggal_lahir").text(data['customers'].tanggal_lahir);
                    $("#view_foto").attr('src', "{{asset('storage/foto/')}}" + '/' + data['customers'].foto);
                    $("#view_foto_ktp").attr('src', "{{asset('storage/foto_ktp/')}}" + '/' + data['customers'].foto_ktp);
                }
            })
        })
    })
</script>
@endpush