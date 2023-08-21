@extends('backend.layouts.master')
@section('title', 'Pijat.in || Terapis')
@section('main-content')
<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="row">
        <div class="col-md-12">
        </div>
    </div>
    <div class="card-header py-4">
        <h5 class="m-0 font-weight-bold text-primary float-left">Data Terapis</h5>
        <!-- <a href="" class="btn btn-primary btn-sm float-right" data-toggle="tooltip" data-placement="bottom" title="Add User"><i class="fas fa-plus"></i> Add Post Category</a> -->
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="post-category-dataTable" width="100%" cellspacing="0">
                <thead style="background: linear-gradient(180deg, #036666 0%, #67B99A 100%);">
                    <tr style="color: white;">
                        <!-- No -->
                        <th>No.</th>
                        <!-- Nama Terapis -->
                        <th>Nama Terapis</th>
                        <!-- ID Terapis -->
                        <th>ID Terapis</th>
                        <!-- Foto Terapis -->
                        <th>Foto</th>
                        <!-- NIK -->
                        <th>NIK</th>
                        <!-- Foto Ktp -->
                        <th>Foto KTP</th>
                        <!-- No Telp -->
                        <th>No Telp</th>
                        <!-- Daerah Terapis -->
                        <th>Daerah Terapis</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($user as $data)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$data->name}}</td>
                        <td>TRP-{{$data->id}}</td>
                        <td>

                            <a href="#" id="foto" data-toggle="modal" data-target="#modalFoto" class="btn btn-success btn-sm">lihat</a>
                        </td>
                        <td>{{$data->profile->nik_ktp}}</td>
                        <td>
                            <!-- button lihat  -->
                            <a href="#" id="foto_ktp" data-toggle="modal" data-target="#modalKtp" class="btn btn-success btn-sm">lihat</a>
                            <!-- <img src="{{asset('storage/foto_ktp/'.$data->profile->ktp)}}" class="img-fluid" style="max-width: 80px" alt="{{$data->profile->ktp}}"> -->
                        </td>
                        <td>{{$data->profile->no_hp}}</td>
                        <td>{{$data->profile->alamat}}</td>
                        <!-- //button detail  -->
                        <td>
                            <a href="{{route('terapis.show',$data->id)}}" class="btn btn-success btn-sm"><i class="fas fa-eye"></i></a>
                            <!-- //button edit  -->
                            <a href="{{route('terapis.edit',$data->id)}}" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a>
                            <!-- //button delete  -->
                            <form method="POST" action="{{route('terapis.destroy',[$data->id])}}" style="display: inline-block">
                                @csrf
                                @method('delete')
                                <button class="btn btn-danger btn-sm dltBtn" data-id={{$data->id}}><i class="fas fa-trash"></i></button>
                            </form>
                        </td>
                        @endforeach

                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- modalKtp -->
<div class="modal fade" id="modalKtp" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable" role="document">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">
                        Foto Profil
                    </h5>
                </div>
                <div class="modal-body">
                    <img src="{{ asset('storage/foto_ktp/'.$data->profile->ktp) }}" class="img-fluid" alt="foto" id="holder">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- modalFoto -->




<div class="modal fade" id="modalFoto" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">
                    Foto KTP
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <img src="{{ asset('storage/foto/'.$data->profile->foto) }}" class="img-fluid" alt="foto" id="holder">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
            </div>
        </div>
    </div>
</div>
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

    function deleteData(id) {

    }
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
                    title: "Are you sure?",
                    text: "Once deleted, you will not be able to recover this data!",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                .then((willDelete) => {
                    if (willDelete) {
                        form.submit();
                    } else {
                        swal("Your data is safe!");
                    }
                });
        })
    })


    // $(document).ready(function() {
    //     //filter databale 
    //     $('#post-category-dataTable').DataTable({
    //         "columnDefs": [{
    //             "orderable": false,
    //             "targets": [3, 4]
    //         }]
    //     });
    // })
</script>
@endpush