<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">

    <!-- my style -->
    <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}">

    <!-- responsive style -->
    <link rel="stylesheet" href="{{ asset('frontend/css/responsive.css') }}">

    <!-- logo tittle bar -->
    <link rel="icon" href="{{ asset('frontend/assets/image/logo-70.png') }}" style="image/x-icon">

    <title>Pijat.in</title>
</head>

<body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark nav-color position-fixed w-100">
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
                                <img src="{{asset('storage/foto/'.Auth()->user()->profile->foto)}}" alt="" class="rounded-circle" width="40" height="40" aria-expanded="false">

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
                    <p><span class="fw-bold">Pijat.in</span> mengingatkan agar selalu menjaga kesehatan pada tubuh kita
                        sendiri dengan cara yang sangat mudah, yaitu dengan metode Massage, Spa & Pijat.</p>

                    <button class="button-lg-primary">Tanya Kami</button>
                    <a href="#"><img src="{{ asset('frontend/assets/image/arrow.png') }}" alt=""></a>
                </div>
            </div>
            <img src="{{ asset('frontend/assets/image/rafiki.jpg') }}" alt="" class="position-absolute end-0 bottom-0 img-hero">
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
                        Diskon khusus untuk bulan ini 30%
                    </h2>
                    <p>
                        Lakukan pemesanan sekarang juga dan langsung dapatkan potongan harga spesial.
                    </p>
                </div>

                <div class="col-10 mx-auto mt-5">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                        </li>
                    </ul>
                    <!--Dropdown Tipe Rumah-->
                    <div class="input-group input-cari mb-">
                        <input type="text" class="form-control" aria-label="Text input with dropdown button" placeholder="Email Address">
                        <button class="button-primary" type="button" id="button-addon2">Subscribe Now</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimoni -->
    <section class="testimonials">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h2>Testimoni</h2>
                    <span class="sub-title">Sebagian pelanggan kami memberikan ulasan tentang pijat.in</span>
                </div>
            </div>

            <div class="row mt-5">
                <div class="col-md-4">
                    <div class="card mb-4">
                        <div class="avatar">
                            <img src="{{ asset('frontend/assets/image/orang1.jpeg') }}" alt="John Doe" class="img-fluid rounded-circle">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">John Doe</h5>
                            <p class="card-text">"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam viverra urna sed mi sodales."</p>
                            <div class="rating">
                                <span class="star">&#9733;</span>
                                <span class="star">&#9733;</span>
                                <span class="star">&#9733;</span>
                                <span class="star">&#9733;</span>
                                <span class="star">&#9734;</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4">
                        <div class="avatar">
                            <img src="{{ asset('frontend/assets/image/orang2.png') }}" alt="John Doe" class="img-fluid rounded-circle">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">John Doe</h5>
                            <p class="card-text">"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam viverra urna sed mi sodales."</p>
                            <div class="rating">
                                <span class="star">&#9733;</span>
                                <span class="star">&#9733;</span>
                                <span class="star">&#9733;</span>
                                <span class="star">&#9733;</span>
                                <span class="star">&#9734;</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4">
                        <div class="avatar">
                            <img src="{{ asset('frontend/assets/image/orang3.jpeg') }}" alt="John Doe" class="img-fluid rounded-circle">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">John Doe</h5>
                            <p class="card-text">"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam viverra urna sed mi sodales."</p>
                            <div class="rating">
                                <span class="star">&#9733;</span>
                                <span class="star">&#9733;</span>
                                <span class="star">&#9733;</span>
                                <span class="star">&#9733;</span>
                                <span class="star">&#9734;</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Tampilan Contact -->
    <section id="contact">
        <div class="container-fluid overlay h-100">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h3>
                            Butuh Konsultasi..?
                            Silahkan kontak kami
                            Kami Siap Membantu
                        </h3>
                        <div class="kontak">
                            <h6>Kontak</h6>
                            <div class="mb-3 d-flex align-items-center">
                                <div>
                                    <img src="{{ asset('frontend/assets/image/alamat-icon.png') }}" alt="">
                                </div>
                                <a href="#">Jl. Janti Gg. Arjuna No. 59, Karangjambe, Banguntapan, Bantul, Yogyakarta 55198</a>
                            </div>

                            <div class="mb-3">
                                <img src="{{ asset('frontend/assets/image/telphone-icon.png') }}" alt="">
                                <a href="#">0895-2900-2944</a>
                            </div>

                            <div class="mb-3">
                                <img src="{{ asset('frontend/assets/image/email-icon.png') }}" alt="">
                                <a href="#">pijatin@gmail.com</a>
                            </div>
                        </div>
                        <div>
                            <h6>Sosial Media</h6>
                            <a href="#" class="me-3"><img src="{{ asset('frontend/assets/image/facebook-icon.png') }}" alt=""></a>
                            <a href="#" class="me-3"><img src="{{ asset('frontend/assets/image/twiter-icon.png') }}" alt=""></a>
                            <a href="#" class="me-3"><img src="{{ asset('frontend/assets/image/instagram-icon.png') }}" alt=""></a>
                            <a href="#" class="linkpijatin">Pijat.in</a>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="card-contact w-100">
                            <form>
                                <h2>ada pertanyaan..?</h2>
                                <div class="form-floating mb-3">
                                    <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                                    <label for="floatingInput" class="d-flex align-items-center">Masukan email anda disini...</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com">
                                    <label for="floatingInput" class="d-flex align-items-center">Pertanyaan Anda..</label>
                                </div>
                                <button type="submit" class="button-kontak">Kirim</button>
                                </from>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Tampilan Footer -->
    <footer class="d-flex align-items-center position-relative">
        <div class="container-fluid">
            <div class="container">
                <div class="row">
                    <div class="col-md-7 d-flex align-items-center">
                        <img src="{{ asset('frontend/assets/image/logo-70.png')}}" alt="">
                        <a href="#" class="ms-3">Pijat.in</a>
                    </div>
                    <div class="col-md-5 d-flex justify-content-evenly">
                        <a href="#hero">Beranda</a>
                        <a href="#layanan">Layanan</a>
                        <a href="#fitur">Fitur</a>
                        <a href="#contact">Contact</a>
                    </div>
                </div>
                <div class="row position-absolute copyright start-50 translate-middle">
                    <div class="col-12">
                        <p>Copyright bg Creative Academy All Right Reserved.</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Optional JavaScript; choose one of the two! -->

    <script>
        const navbar = document.getElementsByTagName('nav')[0];
        window.addEventListener('scroll', function() {
            console.log(window.scrollY);
            if (window.scrollY > 1) {
                navbar.classList.replace('bg-transparent', 'nav-color');
            } else if (this.window.scrollY <= 0) {
                navbar.classList.replace('nav-color', 'bg-transparent');
            }
        });
    </script>

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