<!doctype html>
<html lang="en">

<head>

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="favicon-32x32.png" sizes="32x32" />
    <link rel="icon" type="image/png" href="favicon-16x16.png" sizes="16x16" />

    <!-- Material Icon -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta content="#6200ff" name="theme-color">

    <meta itemprop="icon" content="img/logo.svg">
    <meta itemprop="name" content="Nginvite.com">
    <meta itemprop="url" content="https://nginvite.com">
    <meta itemprop="description" content="Undangan Digital (Online) Gratis 100%">


    <meta property="og:title" content="Nginvite.com" />
    <meta property="og:description" content="Undangan Digital (Online) Gratis 100%" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://nginvite.com/" />

    <meta name="icon" content="img/logo.svg">
    <meta name="name" content="Nginvite.com">
    <meta name="url" content="https://nginvite.com">
    <meta name="description" content="Undangan Digital (Online) Gratis 100%">

    <meta name="rating" content="adult" />
    <meta name="rating" content="RTA-5042-1996-1400-1577-RTA" />

    <meta name="google-site-verification" content="BoqrF70kx71frWRWSpVrzzz75ikLG4ZaJd90vqUuiOs" />

    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?= base_url('assets-' . app_version() . '/') ?>dist/css/main.css">
    <link rel="stylesheet" href="<?= base_url('assets-' . app_version() . '/') ?>dist/css/bootstrap.min.css">

    <link rel="shortcut icon" href="<?= base_url('assets-' . app_version() . '/') ?>dist/img/favicon.ico" />

    <title>Nginvite - Undangan Online Gratis</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="">
                <img src="<?= base_url('assets-' . app_version() . '/') ?>dist/img/logo.svg" width="30" height="30" class="d-inline-block align-top" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div id="navbarNavDropdown" class="navbar-collapse collapse">
                <ul class="navbar-nav mr-auto">
                </ul>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" href="">HOME PAGE</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#product">PRODUCT</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#faq">FAQ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="panel/login">LOGIN</a>
                    <li class="nav-item">
                        <a class="nav-link" href="panel/regist">REGISTER</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <br>
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-6">
                    <div class="carousel slide" id="slideshow-carousel-1" data-ride="carousel" data-interval="5000">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="d-block w-100" src="<?= base_url('assets-' . app_version() . '/') ?>dist/img/macbook-air.png" alt="First slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="<?= base_url('assets-' . app_version() . '/') ?>dist/img/phone.png" alt="Second slide">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-6">
                    <div class="col-md-12 col-lg-12 col-sm-12">
                        <h1 class="h1 title text-center text-sm-left">Nginvite.com</h1>
                        <p class="lead description-title font-weight-thin text-center text-sm-left ">Bikin <span
                                class="font-weight-normal">Undangan
                                Online</span> Kamu Sekarang <br>100% Gratis!</p>
                    </div>
                    <div class="col-md-12 col-lg-12 col-sm-6  text-center text-sm-left">
                        <a href="panel/login"
                            target="_blank" class="btn btn-lg btn-primary anim-slideup">
                            <i class="icon-apple icon-3x pull-left"></i>
                            <span class="font-btn-small font-weight-thin align-middle">Bikin Sekarang
                                &nbsp;&#10142;</span>
                        </a>
                    </div>
                    <!--<div class="col-md-8 col-lg-12 col-sm-6  text-center text-sm-left">
                        <a href="#demo">
                            <div class="font-btn-small font-weight-thin align-middle mt-2">
<i class="material-icons md-18 align-middle" style="
">
play_arrow
</i> <span class="align-middle">Lihat Demo</span>
</div>
                        </a>
                    </div> -->

                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="card-feature col-lg-10 mx-auto">
                <div class="card">
                    <div class="card-body card-body-feature  text-lg-left">
                        <div class="row">
                            <div class="col-lg-4">
                                <img src="<?= base_url('assets-' . app_version() . '/') ?>dist/img/savemoney.png" alt="Hemat Biaya" height="50px" width="auto">
                                <div class="text-benefit">
                                    <h5 class="medium-title">Hemat Biaya</h5>
                                    <p>Gratis, kamu gak
                                        perlu keluarin biaya, namun informasi tentang pesta/acara kamu akan
                                        tetap tersampaikan.</p>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <img src="<?= base_url('assets-' . app_version() . '/') ?>dist/img/fast.png" alt="Hemat Biaya" height="50px" width="auto">
                                <div class="text-benefit">
                                    <h5 class="medium-title">Mudah dan cepat</h5>
                                    <p>Hanya dengan mengisi form, undangan kamu sudah siap disebar.</p>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <img src="<?= base_url('assets-' . app_version() . '/') ?>dist/img/interest.png" alt="Hemat Biaya" height="50px" width="auto">
                                <div class="text-benefit">
                                    <h5 class="medium-title">Fitur Menarik</h5>
                                    <p>Terdapat beberapa fitur yang akan membuat undangan kamu semakin menarik.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <section>
            <div class="col-md-7 mx-auto">
                <h2 class="title text-center" style="margin-top: 80px;">
                    Rencanakan pesta mu, berikan informasi terbaik untuk semua orang yang kamu cintai.
                </h2>
            </div>
            <div class="col-md-8 mx-auto">
                <p class="text-secondary text-center">Kami hadir membantu kamu untuk menginformasikan tentang pesta
                    kamu.</p>
            </div>
        </section>
    </div>
    <div class="feature-bg">
        <div class="container" style="margin-top: 100px; ">
            <section>
                <div class="row">
                    <div class="col-lg-1 col-md-1 col-sm-12"></div>
                    <div class="col-lg-5 col-md-12 col-sm-12" style="margin-top: 30px; margin-bottom: 30px;">
                        <h3 class="medium-title"><b>&#8212;</b> Fitur Undangan</h3>
                        <p class="text-secondary">Temukan Fitur-Fitur Menarik Yang Akan Membuat Undangan
                            Pernikahan Anda Tampil Beda.</p>
                        <div class="font-btn-small font-weight-thin align-middle">
                            <span class="round-span-purple">CUSTOM DESIGN</span>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-12 col-sm-12">
                        <div class="card">
                            <div class="card-body card-body-feature">
                                <ul class="list-unstyled list-feature">
                                    <li>
                                        <img class="float-left" src="<?= base_url('assets-' . app_version() . '/') ?>dist/img/responsive.png" alt="Responsive" height="50px"
                                            width="auto">
                                        <h6 class="align-middle">Responsive Design</h6>
                                        <p class="text-secondary-feature">Bisa diakses di berbagai jenis device.</p>
                                    </li>
                                    <li>
                                        <img class="float-left" src="<?= base_url('assets-' . app_version() . '/') ?>dist/img/modern.png" alt="Modern" height="50px"
                                            width="auto">
                                        <h6 class="align-middle">Modern</h6>
                                        <p class="text-secondary-feature">Tema undangan dengan desain yang kekinian.</p>
                                    </li>
                                    <li>
                                        <img class="float-left" src="<?= base_url('assets-' . app_version() . '/') ?>dist/img/galery.png" alt="Galery" height="50px"
                                            width="auto">
                                        <h6 class="align-middle">Photo Galery</h6>
                                        <p class="text-secondary-feature">Menampilkan photo-photo dalam undangan.</p>
                                    </li>
                                    <li>
                                        <img class="float-left" src="<?= base_url('assets-' . app_version() . '/') ?>dist/img/location.png" alt="Galery" height="50px"
                                            width="auto">
                                        <h6 class="align-middle">Peta Lokasi</h6>
                                        <p class="text-secondary-feature">Mudah dalam menemukan lokasi acara.</p>
                                    </li>
                                    <li>
                                        <img class="float-left" src="<?= base_url('assets-' . app_version() . '/') ?>dist/img/book.png" alt="Galery" height="50px"
                                            width="auto">
                                        <h6 class="align-middle">Buku Tamu</h6>
                                        <p class="text-secondary-feature">Dapatkan ucapan selamat dari para tamu.</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>

    <div class="container" id="demo">
        <section style="margin-top: 160px">
            <div class="col-md-12 mx-auto">
                <h3 class="title text-center">Demo Undangan</h3>
            </div>
            <div class="col-md-12 mx-auto">
                <p class="text-secondary text-center">Berbagai pilihan tema <span
                        class="round-span-purple">premium</span>
                    responsive dengan desain terkini yang modern.</p>
            </div>
            <div class="row" style="margin-top: 60px">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <a class="img-link" href="https://bais-siti.nginvite.com" target="_blank">
                        <img id="demo1" class="img-fluid img-demo img-thumbnail" src="<?= base_url('assets-' . app_version() . '/') ?>dist/img/theme1.png" alt="Theme 1"
                            height="200px" width="auto" data-toggle="tooltip" data-placement="top" title="View Demo">
                        <div class="star-wrapper mx-auto">
                            <i class="material-icons fill">star</i>
                            <i class="material-icons fill">star</i>
                            <i class="material-icons fill">star</i>
                            <i class="material-icons ">star</i>
                            <i class="material-icons ">star</i>
                        </div>
                        <div class="title-demo">
                            <p>Theme 1</p>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <a class="img-link" href="https://hadi-sofi.nginvite.com" target="_blank">
                        <img id="demo2" class="img-fluid img-demo img-thumbnail" src="<?= base_url('assets-' . app_version() . '/') ?>dist/img/theme2.png" alt="Theme 1"
                            height="200px" width="auto" data-toggle="tooltip" data-placement="top" title="View Demo">
                        <div class="star-wrapper mx-auto">
                            <i class="material-icons fill">star</i>
                            <i class="material-icons fill">star</i>
                            <i class="material-icons fill">star</i>
                            <i class="material-icons fill">star</i>
                            <i class="material-icons ">star</i>
                        </div>
                        <div class="title-demo">
                            <p>Theme 2 <span style="margin-left: 4px;"
                                    class="round-span-yellow font-btn-small font-weight-thin align-middle">BEST</span>
                            </p>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <a class="img-link" href="https://irfan-halimah.nginvite.com" target="_blank">
                        <img id="demo3" class="img-fluid img-demo img-thumbnail" src="<?= base_url('assets-' . app_version() . '/') ?>dist/img/theme3.png" alt="Theme 1"
                            height="200px" width="auto" data-toggle="tooltip" data-placement="top" title="View Demo">
                        <div class="star-wrapper mx-auto">
                            <i class="material-icons fill">star</i>
                            <i class="material-icons fill">star</i>
                            <i class="material-icons fill">star</i>
                            <i class="material-icons fill">star</i>
                            <i class="material-icons ">star</i>
                        </div>
                        <div class="title-demo">
                            <p>Theme 3</p>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <a class="img-link" href="https://fajar-fitria.nginvite.com" target="_blank">
                        <img id="demo4" class="img-fluid img-demo img-thumbnail" src="<?= base_url('assets-' . app_version() . '/') ?>dist/img/theme4.png" alt="Theme 1"
                            height="200px" width="auto" data-toggle="tooltip" data-placement="top" title="View Demo">
                        <div class="star-wrapper mx-auto">
                            <i class="material-icons fill">star</i>
                            <i class="material-icons fill">star</i>
                            <i class="material-icons fill">star</i>
                            <i class="material-icons fill">star</i>
                            <i class="material-icons ">star</i>
                        </div>
                        <div class="title-demo">
                            <p>Theme 4</p>
                        </div>
                    </a>
                </div>
            </div>
        </section>
    </div>

    <div class="container">
        <section style="margin-top: 60px">
            <div class="col-md-12 mx-auto">
                <h4 class="title text-center">Tunggu Apa Lagi — ?</h4>
            </div>
            <div class="col-md-12 text-center">
                <a href="#" class="btn btn-lg btn-success anim-slideup text-center" id="buatSekarang">
                    <i class="icon-apple icon-3x pull-left"></i>
                    <span class="font-btn-small font-weight-thin align-middle">Coba Buat Sekarang</span>
                </a>
            </div>
        </section>

    </div>

    <div class="tanya-bg">
        <div class="container" style="margin-top: 60px;">
            <div class="row">
                <div class="col-lg-10 mx-auto">
                    <div class="card">
                        <div class="card-body card-body-feature">
                            <div class="row">
                                <div class="col-lg-6">
                                    <br>
                                    <div class="align-items-center float-left" style="margin-bottom: 20px;">
                                        <h4 class="medium-title">Memiliki Pertanyaan ? — Tanya yuk..</h4>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <br>
                                    <div class="align-items-center" style="margin-top:-10px; margin-bottom: 20px;">
                                        <span class="text-secondary align-middle" style="float: right;">Hubungi —
                                            &nbsp;&nbsp;</span>
                                        <a href="https://api.whatsapp.com/send?phone=6282199838282&text=Saya%20mau%20tanya%20undangan%20"
                                            class="btn btn-lg btn-success-border anim-slideup text-center align-middle"
                                            style="float: right;">
                                            <span class="font-btn-small font-weight-thin align-middle">Customer
                                                Service</span>
                                        </a>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div style=" background-color: #5b01ec;     margin-top: -20px;">
        <section>
            <!-- Footer -->
            <footer class="page-footer font-small blue pt-4">

                <!-- Footer Links -->
                <div class="container text-center text-md-left text-white" style="margin-top: 40px;">

                    <!-- Grid row -->
                    <div class="row">

                        <!-- Grid column -->
                        <div class="col-md-6 mt-md-0 mt-3">

                            <!-- Content -->
                            <h5 class=" title"><img src="<?= base_url('assets-' . app_version() . '/') ?>dist/img/logo-nginvite.png" height="30px" width="auto"> —
                                Nginvite.com
                            </h5>
                            <p class="text-secondary" style="color: #888bff !important;">Situs untuk membuat
                                undangan
                                online gratis terbaik.</p>
                            <br>

                        </div>
                        <!-- Grid column -->

                        <!-- Grid column -->
                        <div class="col-md-3 mb-md-0 mb-3">

                            <!-- Links -->
                            <h5 class="text-uppercase">Contacts</h5>

                            <ul class="list-unstyled text-white">
                                <li>
                                    <a href="mailto:haerul.muttaqin@gmail.com" class="link-contact"
                                        class="link-contacts">
                                        <div class="font-btn-small font-weight-thin align-middle">
                                            <i class="material-icons md-18">
                                                mail
                                            </i> <span>hello@nginvite.com</span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="tel:+6282199838282" class="link-contact" class="link-contacts">
                                        <div class="font-btn-small font-weight-thin align-middle">
                                            <i class="material-icons md-18">
                                                phone
                                            </i> <span>+62 821 99 83 8282</span>
                                        </div>
                                    </a>
                                </li>
                            </ul>

                        </div>
                        <!-- Grid column -->

                        <!-- Grid column -->
                        <div class="col-md-3 mb-md-0 mb-3">

                            <!-- Links -->
                            <h5 class="text-uppercase">Social Media</h5>

                            <ul class="list-unstyled text-white">
                                <li>
                                    <a target="_blank" href="https://www.instagram.com/nginvite" class="link-contact"
                                        class="link-contacts">
                                        <div class="font-btn-small font-weight-thin align-middle">
                                            <span>Instagram</span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a target="_blank" href="https://www.facebook.com/Nginvitecom-242987239727375"
                                        class="link-contact" class="link-contacts">
                                        <div class="font-btn-small font-weight-thin align-middle">
                                            <span>Facebook</span>
                                        </div>
                                    </a>
                                </li>
                            </ul>


                        </div>
                        <!-- Grid column -->

                    </div>
                    <!-- Grid row -->

                </div>
                <br><br>
                <!-- Footer Links -->

                <!-- Copyright -->
                <div class="footer-copyright text-center py-3 text-white">
                    © 2019 Nginvite.com, all rights reserved
                </div>
                <!-- Copyright -->

            </footer>
            <!-- Footer -->
        </section>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
        </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
        </script>
    <script src="vendor/bootstrap-4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
        </script>
    <script>
        $(document).ready(function () {
            $('#demo1').tooltip();
            $('#demo2').tooltip();
            $('#demo3').tooltip();
            $('#demo4').tooltip();
        });
    </script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-132942028-5"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-132942028-5');
    </script>

</body>

</html>