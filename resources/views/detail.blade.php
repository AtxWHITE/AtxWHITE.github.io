<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/owl.carousel.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- Style -->
    <link rel="stylesheet" href="{{ asset('frontend/css/detail.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.min.css') }}">

    <title>Detail Layanan</title>
</head>

<body>
    <div class="navbar">
        <nav class="navbar sticky-top w-100">
            <div class="container-fluid">
                <div class="row">
                    <div class="col">
                        <a href="{{ url('user') }}"><img src="{{ asset('frontend/assets/image/arrow1.png') }}" alt=""></a>
                    </div>
                    <div class="col">
                        <h1 class="navbar-brand">Detail Layanan</h1>
                    </div>
                </div>
            </div>
        </nav>
    </div>



    <div class="content">

        <div class="container">


            <div class="row justify-content-center">
                <div class="col-md-11">

                    <div class="row align-items-center">
                        <div class="col-lg-5 ml-auto">
                            <h3 class="mb-4">Full body massage.</h3>
                            <p>Full body massage pijat atau massage di seluruh bagian tubuh, mulai dari kaki, tangan, pinggang, punggung, leher, dan kepala (tidak termasuk alat vital). Tujuan dan kegunaan full body massage adalah untuk mempertahankan kondisi tubuh supaya tetap bugar </p>

                        </div>
                        <div class="col-lg-7 mb-5 mb-lg-0">
                            <h2 class="mb-5">Isi Form Pemesanan</h2>

                            <form class="border-right pr-5 mb-5" method="post" id="contactForm" name="contactForm">
                                <div class="row">
                                    <div class="col-md-12 form-group">
                                        <a class="form-control" name="Jumlah Pemesan" data-bs-toggle="modal" data-bs-target="#exampleModal" style="font-weight: 700;">Jumlah Pemesan <img src="{{ asset('frontend/assets/image/right.png') }}" alt="" style="margin-left: 65%;"></a>
                                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Jumlah Pemesanan</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="container">
                                                        <div class="row row-cols-2" style="margin: 5% 0% 5% 0%;">
                                                            <div class="col-4">
                                                                <img src="{{ asset('frontend/assets/image/man.png') }}" alt="">Laki-laki
                                                            </div>
                                                            <div class="col-8">
                                                                <button id="minus">−</button>
                                                                <input type="number" class="text-center" value="0" id="input" />
                                                                <button id="plus">+</button>
                                                            </div>
                                                            <div class="col-4">
                                                                <img src="{{ asset('frontend/assets/image/woman.png') }}" alt="">Perempuan
                                                            </div>
                                                            <div class="col-8">
                                                                <button id="minus1">−</button>
                                                                <input type="number" class="text-center" value="0" id="input1" />
                                                                <button id="plus1">+</button>
                                                            </div>
                                                        </div>
                                                        <div class="row" style="margin-left: 5%;">Catatan Tambahan</div>
                                                        <div class="row" style="margin: 1% 5% 0% 5%;">
                                                            <textarea class="form-control" name="message" id="message" cols="30" rows="7" placeholder="Write your message"></textarea>
                                                        </div>
                                                    </div>

                                                    <script>
                                                        const minusButton = document.getElementById('minus');
                                                        const plusButton = document.getElementById('plus');
                                                        const inputField = document.getElementById('input');
                                                        const minus1Button = document.getElementById('minus1');
                                                        const plus1Button = document.getElementById('plus1');
                                                        const input1Field = document.getElementById('input1');

                                                        minusButton.addEventListener('click', event => {
                                                            event.preventDefault();
                                                            const currentValue = Number(inputField.value) || 0;
                                                            inputField.value = currentValue - 1;
                                                        });

                                                        plusButton.addEventListener('click', event => {
                                                            event.preventDefault();
                                                            const currentValue = Number(inputField.value) || 0;
                                                            inputField.value = currentValue + 1;
                                                        });

                                                        minus1Button.addEventListener('click', event => {
                                                            event.preventDefault();
                                                            const currentValue = Number(input1Field.value) || 0;
                                                            input1Field.value = currentValue - 1;
                                                        });

                                                        plus1Button.addEventListener('click', event => {
                                                            event.preventDefault();
                                                            const currentValue = Number(input1Field.value) || 0;
                                                            input1Field.value = currentValue + 1;
                                                        });
                                                    </script>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                        <button type="button" class="btn btn-primary">Save changes</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 form-group">
                                        <input type="text" class="form-control" name="lname" id="lname" placeholder="Durasi Waktu">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 form-group">
                                        <input type="text" class="form-control" name="email" id="email" placeholder="Email">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12 form-group">
                                        <textarea class="form-control" name="message" id="message" cols="30" rows="7" placeholder="Write your message"></textarea>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <input type="submit" value="Pesan Sekarang" class="btn btn-primary rounded-0 py-2 px-4">
                                        <span class="submitting"></span>
                                    </div>
                                </div>
                            </form>

                            <div id="form-message-warning mt-4"></div>
                            <div id="form-message-success">
                                Your message was sent, thank you!
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/main.js"></script>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>

</html>