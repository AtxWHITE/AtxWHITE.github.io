<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">

    <!-- my style -->
    <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}">

    <!-- logo tittle bar -->
    <link rel="icon" href="{{ asset('frontend/assets/image/logo-70.png') }}" style="image/x-icon">

    <title>Hello, world!</title>
</head>

<body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-transparent position-fixed w-100">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="{{ asset('frontend/assets/image/logo-70.png') }}" alt="Logo" width="30" height="24" class="d-inline-block align-text-top me-3">
                Pijat.in
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Beranda</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link" href="#">Layanan</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link" href="#">Fitur</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link" href="#">Kontak</a>
                    </li>
                </ul>
                <div>
                    @if (Auth::check())
                    <div class="dropdown">
                        <!-- //icon profile  -->
                        <?php

                        ?>
                        <a>
                            <!-- //name  -->
                            <a href="#" class="text-decoration-none text-white ms-2" data-bs-toggle="dropdown" aria-expanded="false">
                                <<<<<<< HEAD <img src="{{ asset('storage/foto/' . Auth()->user()->profile->foto) }}" alt="" class="rounded-circle" width="40" height="40" aria-expanded="false">
                                    =======
                                    <img src="{{asset('storage/foto/'.Auth()->user()->profile->foto)}}" alt="" class="rounded-circle" width="40" height="40" aria-expanded="false">
                                    >>>>>>> 3052b5c68d05f82baa0b71187a87b1c832ac5af2

                            </a>
                            <a href="#" class="text-decoration-none text-white ms-2" data-bs-toggle="dropdown" aria-expanded="false">{{ auth()->user()->name }}</a>
                            <ul class="dropdown-menu dropdown-menu-end">
                                <li><a class="dropdown-item" href="#">Profil</a></li>
                                <li><a class="dropdown-item" href="#">Pengaturan</a></li>
                                <li><a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">Keluar</a>
                                </li>

                            </ul>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </a>
                    </div>
                    @else
                    <a href="{{ url('register') }}" class="text-decoration-none text-white me-3">DAFTAR</a>
                    <a href="{{ url('login') }}" class="text-decoration-none text-white">MASUK</a>
                    @endif
                </div>
            </div>
        </div>
    </nav>

    <!-- hero section -->
    <section id="hero">
        <div class="container h-100">
            <div class="row h-100">
                <div class="col-md-6 hero-tagline my-auto">
                    <h1>Jasa Pijat dan Massage Panggilan Terpercaya</h1>
                    <p><span class="fw-bold">Piji.in</span> mengingatkan agar selalu menjaga kesehatan pada tubuh kita
                        sendiri dengan cara yang sangat mudah, yaitu dengan metode Massage, Spa & Pijat.</p>

                    <button class="button-lg-primary">Tanya Kami</button>
                    <a href="#"><img src="{{ asset('frontend/assets/image/arrow.png') }}" alt=""></a>
                </div>
            </div>
            <img src="{{ asset('frontend/assets/image/rafiki.png') }}" alt="" class="position-absolute end-0 bottom-0 img-hero">
            <!-- <img src="{{ asset('frontend/assets/image/accent.png') }}" alt="" class="accent-img h-100 position-absolute top-0 start-0"> -->
        </div>
    </section>

    <!-- Layanan Section -->
    <section id="layanan">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h2>Layanan Kami</h2>
                    <span class="sub-title">Pilih Layanan Sesuai Dengan Kebutuhan Anda</span>
                </div>
            </div>

            <div class="row mt-5">
                <div class="col-md-4 text-center">
                    <div class="card-layanan">
                        <div class="circle-icon position-relative mx-auto">
                            <img src="{{ asset('frontend/assets/image/Physical Therapy.png') }}" alt="" class="position-absolute top-50 start-50 translate-middle">
                        </div>
                        <h3 class="mt-4">Full Body</h3>
                        <p class="mt-3">Rumah impian kini jadi kenyataan, Beli rumah bary dengan fasilitas terbaik
                            dengan lingkungan yang nyaman.</p>
                    </div>
                </div>

                <div class="col-md-4 text-center">
                    <div class="card-layanan">
                        <div class="circle-icon position-relative mx-auto">
                            <img src="{{ asset('frontend/assets/image/Airport Security.png') }}" alt="" class="position-absolute top-50 start-50 translate-middle">
                        </div>
                        <h3 class="mt-4">Tradisional</h3>
                        <p class="mt-3">Rumah impian kini jadi kenyataan, Beli rumah bary dengan fasilitas terbaik
                            dengan lingkungan yang nyaman.</p>
                    </div>
                </div>

                <div class="col-md-4 text-center">
                    <div class="card-layanan">
                        <div class="circle-icon position-relative mx-auto">
                            <img src="{{ asset('frontend/assets/image/General Massage Area.png') }}" alt="" class="position-absolute top-50 start-50 translate-middle">
                        </div>
                        <h3 class="mt-4">Deep Tissue</h3>
                        <p class="mt-3">Rumah impian kini jadi kenyataan, Beli rumah bary dengan fasilitas terbaik
                            dengan lingkungan yang nyaman.</p>
                    </div>
                </div>

                <div class="col-md-4 text-center">
                    <div class="card-layanan">
                        <div class="circle-icon position-relative mx-auto">
                            <img src="{{ asset('frontend/assets/image/Spa.png') }}" alt="" class="position-absolute top-50 start-50 translate-middle">
                        </div>
                        <h3 class="mt-4">Hot Stone</h3>
                        <p class="mt-3">Rumah impian kini jadi kenyataan, Beli rumah bary dengan fasilitas terbaik
                            dengan lingkungan yang nyaman.</p>
                    </div>
                </div>

                <div class="col-md-4 text-center">
                    <div class="card-layanan">
                        <div class="circle-icon position-relative mx-auto">
                            <img src="{{ asset('frontend/assets/image/Oil Massage.png') }}" alt="" class="position-absolute top-50 start-50 translate-middle">
                        </div>
                        <h3 class="mt-4">Thai Massgae</h3>
                        <p class="mt-3">Rumah impian kini jadi kenyataan, Beli rumah bary dengan fasilitas terbaik
                            dengan lingkungan yang nyaman.</p>
                    </div>
                </div>

                <div class="col-md-4 text-center">
                    <div class="card-layanan">
                        <div class="circle-icon position-relative mx-auto">
                            <img src="{{ asset('frontend/assets/image/Massage.png') }}" alt="" class="position-absolute top-50 start-50 translate-middle">
                        </div>
                        <h3 class="mt-4">Swedish Massage</h3>
                        <p class="mt-3">Rumah impian kini jadi kenyataan, Beli rumah bary dengan fasilitas terbaik
                            dengan lingkungan yang nyaman.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Search Section -->
    <section id="search" class="d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h2>
                        Temukan Pijat
                    </h2>
                    <p>
                        Santai tubuh dan pikiran, biarkan pijatan mengalirkan kebahagiaan
                    </p>
                </div>

                <div class="col-10 mx-auto mt-5">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="jual" role="tabpanel" aria-labelledby="home-tab">
                            <!--Dropdown Tipe Rumah-->
                            <div class="input-group input-cari mb-3">
                                <button class="button-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">Tipe Pijat</button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="#">Separated link</a></li>
                                </ul>

                                <input type="text" class="form-control" aria-label="Text input with dropdown button" placeholder="Cari Pijet">
                                <button class="button-primary" type="button" id="button-addon2">Cari</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </section>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
</script>
-->
</body>

</html>