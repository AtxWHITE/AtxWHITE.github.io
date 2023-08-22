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
        <!-- <a href="" class="btn btn-primary btn-sm float-right" data-toggle="tooltip" data-placement="bottom" title="Add User"><i class="fas fa-plus"></i> Add Post Category</a> -->
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
                                @foreach($user as $data)
                                <option value="{{$data->name}}">{{$data->profile->alamat}}</option>
                                @endforeach
                            </select>
                            <div class="input-group-append">

                                <button class="btn btn-primary" type="submit"><i class="fas fa-search"></i> Cari</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>

            @if(count($user)>0)
            <table class="table table-bordered" id="post-category-dataTable" width="100%" cellspacing="0">
                <thead style="background: linear-gradient(180deg, #036666 0%, #67B99A 100%);">
                    <tr style="color: white;">
                        <th>No.</th>
                        <!-- Nama -->
                        <th>Nama Pengguna</th>
                        <!-- Email -->
                        <th>Email</th>
                        <!-- No.Telp -->
                        <th>No.Telp</th>
                        <!-- Alamat -->
                        <th>Daeraah Pengguna</th>
                        <!-- KTP -->
                        <th>KTP</th>
                        <th>Aksi</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach($user as $data)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$data->name}}</td>
                        <td>{{$data->email}}</td>
                        <td>{{$data->profile->no_hp}}</td>
                        <td>{{$data->profile->alamat}}</td>
                        <td>
                            <img src="{{asset('storage/foto_ktp/'.$data->profile->ktp)}}" class="img-fluid" style="max-width: 80px" alt="{{$data->profile->ktp}}">
                        </td>
                        <!-- //button detail  -->
                        <td>
                            <a href="{{route('customers.show',$data->id)}}" class="btn btn-success btn-sm"><i class="fas fa-eye"></i></a>
                            <!-- //button edit  -->
                            <a href="{{route('customers.edit',$data->id)}}" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a>
                            <!-- //button delete  -->

                            <form method="POST" action="{{route('customers.destroy',[$data->id])}}" style="display: inline-block">
                                @csrf
                                @method('delete')
                                <button class="btn btn-danger btn-sm dltBtn" data-id={{$data->id}}><i class="fas fa-trash"></i></button>
                            </form>
                        </td>


                    </tr>
                    @endforeach
                </tbody>
            </table>
            @else
            @endif
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


    $(document).ready(function() {
        //filter databale 

    })
</script>
@endpush