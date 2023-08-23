@extends('layouts.app')
@section('content')
<div class="container">

    <div class="row justify-content-center">

        <div class="col-md-8">

            <div class="card">

                <div class="card-header">Dashboard</div>

                <div class="card-body">

                    You are normal user.
                    <!-- //form verifikasi email -->
                    <form method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-primary">Resend Email</button>
                    </form>
                    <!-- //form verifikasi email -->

                </div>

            </div>

        </div>

    </div>

</div>
@endsection