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
        <a href="javascript:void(0)" id="tambah" class="btn btn-primary btn-sm float-right" data-toggle="modal" data-target="#customerModal"><i class="fas fa-plus"></i> Tambah Customer</a>
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
                        <th>Status</th>
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
                        <td>{{$customer->customers->status}}</td>
                        <td>{{$customer->customers->tempat_lahir}}</td>
                        <td>
                            <!-- //buttom lihat  -->
                            <a href="{{route('customers.show', $customer->id)}}" class="btn btn-primary btn-sm"><i class="fas fa-eye"></i></a>
                            <a href="{{route('customers.edit', $customer->id)}}" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i> </a>
                            <!-- //buttom delete  -->
                            <form method="POST" action="{{route('customers.destroy',[$customer->id])}}">
                                @csrf
                                @method('delete')
                                <button class="btn btn-danger btn-sm dltBtn" data-id={{$customer->id}} data-toggle="tooltip" data-placement="bottom" title="Delete"><i class="fas fa-trash-alt"></i> </button>
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

<!-- Modal -->
<div class="modal fade" id="customerModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
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


    $(document).ready(function() {
        $('#tambah').click(function() {
            //modal title setting
            $('#customerModal').find('.modal-title').text('Tambah Customer');
        })



    })
</script>
@endpush