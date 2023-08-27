@extends('backend.layouts.master')

@section('main-content')
<!-- DataTales Example -->
<div class="card shadow mb-4">
    
    <div class="card-body">
        <div class="table-responsive">
            <!-- form input  -->
                
            <!-- //button tambah  -->
            <table class="data-table table table-sm table-bordered table-striped" id="data-table" width="100%" cellspacing="0">
                <thead style="background: linear-gradient(180deg, #036666 0%, #67B99A 100%);">
                    <tr style="color: rgb(245, 240, 240);">
                        <th>No.</th>
                        <!-- Nama -->
                        <th>Nama Admin</th>
                        <!-- Email -->
                        <th>Email</th>
                        <!-- No.Telp -->
                        <th>No.Telp</th>
                        <!-- Alamat -->
                        <th>Jenis Kelamin</th>
                        <!-- KTP -->
                        <th>Alamat</th>
                        <!-- foto  -->
                        <th>Foto</th>
                        <!-- tempat_lahir -->
                        <th>Tempat Lahir</th>
                        <!-- tanggal_lahir -->
                        <th>Tanggal Lahir</th>
                        <!-- Aksi -->
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
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
    $(document).ready(function() {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        // tamipilkan table order
        var table = $('.data-table').DataTable({
                processing: true,
                serverSide: true,
                ajax: {
                    url: "{{ route('admin.index') }}",
                    data: function(d) {
                        d.status = $('#sts').val(),
                        d.search = $('input[type="search"]').val()
                    }
                },
                columns: [
                    {data: 'DT_RowIndex', name: 'DT_RowIndex'},
                    {data: 'nama', name: 'nama'},
                    {data: 'email', name: 'email'},
                    {data: 'no_hp', name: 'no_hp'},
                    {data: 'jenis_kelamin', name: 'jenis_kelamin'},
                    {data: 'alamat', name: 'alamat'},
                    {data: 'foto', name: 'foto'},
                    {data: 'tempat_lahir', name: 'tempat_lahir'},
                    {data: 'tanggal_lahir', name: 'tanggal_lahir'},
                    // {data: 'status', name: 'status'},
                    {data: 'action', name: 'action', orderable: false, searchable: false},
                ]
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

</script>
@endpush