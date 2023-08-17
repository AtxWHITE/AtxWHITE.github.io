<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Google font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">

    <!-- my style -->
    <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}">

    <title>Hello, world!</title>
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-transparent position-fixed w-100">
    <div class="container">
      <a class="navbar-detail" href="#">
        <img src="{{ asset('frontend/assets/image/logo-70.png') }}" alt="Logo" width="30" height="24" class="d-inline-block align-text-top me-3">
        Pijat.in
      </a>
      </div>
    </div>
  </nav>

<section id="hero">
    <div class="container h-100">
      <div class="row h-100">
        <div class="col-md-6 hero-tagline my-auto">
          <h1>Santai tubuh dan pikiran, biarkan pijatan mengalirkan kebahagiaan </h1>
          <p><span class="fw-bold">Nikmati momen istimewa</span> untuk meremajakan tubuh dan pikiran di Oasis Pijat Sehat dan Relaksasi. Kami memiliki tim terlatih dan berpengalaman dalam memberikan layanan pijat berkualitas yang membantu Anda meraih ketenangan dan kesejahteraan.</p>

          <button class="button-lg-primary">Temukan Rumah</button>
          <a href="#"><img src="{{ asset('frontend/assets/image/arrow.png') }}" alt=""></a>
        </div>
      </div>
      <img src="{{ asset('frontend/assets/image/pijit.png') }}" alt="" class="position-absolute end-0 bottom-0 img-hero">
      <img src="{{ asset('frontend/assets/image/accent.png') }}" alt="" class="accent-img h-100 position-absolute top-0 start-0">
    </div>
  </section>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

</body>

</html>
