<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,700,900&display=swap" rel="stylesheet">

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


    <div class="content">

        <div class="container">


            <div class="row justify-content-center">
                <div class="col-md-10">

                    <div class="row align-items-center">
                        <div class="col-lg-7 mb-5 mb-lg-0">
                            <h3 class="mb-4">Full body massage.</h3>
                            <p>Full body massage pijat atau massage di seluruh bagian tubuh, mulai dari kaki, tangan, pinggang, punggung, leher, dan kepala (tidak termasuk alat vital). Tujuan dan kegunaan full body massage adalah untuk mempertahankan kondisi tubuh supaya tetap bugar </p>
                            <p><a href="#">Read more</a></p>


                        </div>
                        <div class="col-lg-4 ml-auto">
                            <h2 class="mb-5">Isi Form Pemesanan !</h2>

                            <form class="border-right pr-5 mb-5" method="post" id="contactForm" name="contactForm">
                                <div class="row">
                                    <div class="col-md-6 form-group">
                                        <input type="text" class="form-control" name="fname" id="fname" placeholder="First name">
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <input type="text" class="form-control" name="lname" id="lname" placeholder="Last name">
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

</html>