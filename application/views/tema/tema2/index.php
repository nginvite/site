<!DOCTYPE html>
<html>

<head>
    <meta name="generator" content="Hugo 0.40.1" />
    <title>Walimatul &#39;Ursy - <?= $mempelai_pria ?> & <?= $mempelai_wanita ?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta content="#e91e63" name="theme-color">

    <meta itemprop="name" content="Walimatul &#39;Ursy">
    <meta itemprop="description" content="<?= $mempelai_pria ?> ❤ <?= $mempelai_wanita ?>">


    <meta property="og:title" content="Walimatul &#39;Ursy" />
    <meta property="og:description" content="Hadi ❤ Sofi" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://<?= $domain ?>.nginvite.com/" />

    <meta name="twitter:card" content="summary" />
    <meta name="twitter:title" content="Walimatul &#39;Ursy" />
    <meta name="twitter:description" content="" />


    <link rel="icon" href="<?= base_url('assets-' . app_version() . '/tema2/') ?>img/logo.png" />

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="<?= base_url('assets-' . app_version() . '/tema2/') ?>css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection" />
    <link href="<?= base_url('assets-' . app_version() . '/tema2/') ?>css/style.css" type="text/css" rel="stylesheet" media="screen,projection" />


</head>

<body id="home">
    <div class="navbar-fixed" id="navbar-auto">
        <nav class="white" role="navigation">
            <div class="nav-wrapper container">
                <a id="logo-container" href="https://<?= $domain ?>.nginvite.com/" class="brand-logo left gray-text darken-1 flow-text logo-auto">
                    <img src="<?= base_url('assets-' . app_version() . '/tema2/') ?>img/logo.png">
                    <span class="site-title marcellus"><b>Walimatul &#39;Ursy </b></span>
                </a>

                <ul class="right hide-on-med-and-down menu-navigasi">
                    <li class="waves-effect waves-teal"><a data-scroll href="#home">Home</a></li>
                    <li class="waves-effect waves-teal"><a data-scroll href="#kami">Tentang</a></li>
                    <li class="waves-effect waves-teal"><a data-scroll href="#waktu">Waktu</a></li>
                    <li class="waves-effect waves-teal"><a data-scroll href="#lokasi">Lokasi</a></li>
                    <li class="waves-effect waves-teal"><a data-scroll href="#buku">BukuTamu</a></li>
                </ul>

                <a data-target="nav-mobile" class="sidenav-trigger">
                    <i class="material-icons">menu</i>
                </a>

            </div>
        </nav>
    </div>
    <ul id="nav-mobile" class="sidenav white-text">
        <div style="background-color:rgb(136, 159, 160); padding:30px;">
            <div class="white-text">
                <span>e-invitation by</span>
                <b>Nginvite.com</b>
            </div>
        </div>
        <li class="waves-effect waves-teal"><a class="sidenav-close" data-scroll href="#home">Home</a></li>
        <li class="waves-effect waves-teal"><a class="sidenav-close" data-scroll href="#kami">Tentang Kami</a></li>
        <li class="waves-effect waves-teal"><a class="sidenav-close" data-scroll href="#waktu">Waktu</a></li>
        <li class="waves-effect waves-teal"><a class="sidenav-close" data-scroll href="#lokasi">Lokasi</a></li>
        <li class="waves-effect waves-teal"><a class="sidenav-close" data-scroll href="#buku">BukuTamu</a></li>
    </ul>
    <div id="index-banner" class="parallax-container">
        <nav class="nav-first" role="navigation">
            <div class="nav-wrapper container">
                <a href="#" data-target="nav-mobile" class="sidenav-trigger">
                    <i class="material-icons white-text">menu</i>
                </a>
                <a href="#" data-target="nav-mobile" class="sidenav-trigger-first">
                    <i class="material-icons white-text">menu</i>
                </a>

                <ul class="right hide-on-med-and-down menu-navigasi" id="menu-first">
                    <li class="waves-effect waves-teal scroll"><a class="anc white-text" data-scroll href="#home">Home</a></li>
                    <li class="waves-effect waves-teal scroll"><a class="anc white-text" data-scroll href="#kami">Tentang</a></li>
                    <li class="waves-effect waves-teal scroll"><a class="anc white-text" data-scroll href="#waktu">Waktu</a></li>
                    <li class="waves-effect waves-teal scroll"><a class="anc white-text" data-scroll href="#lokasi">Lokasi</a></li>
                    <li class="waves-effect waves-teal scroll"><a class="anc white-text" data-scroll href="#buku">BukuTamu</a></li>
                </ul>

            </div>
        </nav>

        <div class="container">
            <br><br><br>
            <div class="row">
                <div class="col s12 l6">
                    <div class="container center">
                        <p class='white-text marcellus flow-text text-shadow'><b>You're</b> invited to the <b>WEDDING</b></p>
                        <br>
                        <div class="white-text amsterdam-1 center text-shadow">
                            <p><?= $mempelai_pria ?> </p>
                            <p style="font-size:1.1rem; margin:40px">and</p>
                            <p> <?= $mempelai_wanita ?></p>
                        </div>
                        <br><br>
                    </div>
                </div>
                <div class="col s12 l6">
                    <div class="container">
                        <br>
                        <div class="card">
                            <div class="card-content">
                                <br>
                                <div class="grey-text text-darken-3 marcellus flow-text">
                                    <i class="material-icons">date_range</i><b> Save The Date</b>
                                </div>
                                <br>
                                <h5 class="grey-text text-darken-1 marcellus flow-text">
                                    <?= date("l, d F Y", strtotime($tgl_resepsi_mulai)) ?>
                                </h5>
                                <!-- <span class="grey-text text-darken">(12 Jumadil Akhir 1440 Hijr.)</span> -->
                                <br><br><br>
                                <a href="#waktu" style="float: right;" class="btn btn-4">Add to Calendar</a>
                                <br><br><br>
                            </div>
                        </div>
                        <br>
                    </div>
                </div>
                <div class="col s12 l12">
                    <div class="center">
                        <p class='white-text marcellus flow-text text-shadow'>
                            <span><i class="material-icons">place</i> <?= $alamat_resepsi ?> </span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="parallax"><img src="<?= base_url('assets-' . app_version() . '/tema2/') ?>img/RCARUBA_00070_conversion.svg" alt="">
            <div class="over"></div>
        </div>
    </div>

    <img class="parallax-bottom" src="<?= base_url('assets-' . app_version() . '/tema2/') ?>img/header-bottom.svg">

    <section style="margin-bottom: -10px;">
        <div class="container">
            <div class="row">
                <div class="col m12 center flow-text">
                    <p class="amiri mygreen-text-2 text-darken-4">بِسْمِ اللهِ الرَّحْمنِ الرَّحِيمِ</p>
                    <br>
                    <p class="mygreen-text amsterdam">Assalamualaikum Warahmatulloh Wabarakatuh.</p>
                </div>
            </div>
        </div>
    </section>

    <div class="center">
        <img src="<?= base_url('assets-' . app_version() . '/tema2/') ?>img/flower.png" height="170px" style="margin-right: -50px;">
    </div>
    <section style="background-image:url('<?= base_url('assets-' . app_version() . '/tema2/') ?>img/bg-gray.png'); background-repeat: no-repeat; -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover; margin-top:-60px;">
        <div class="row center-align center-block">
            <br><br>
            <div class="container">
                <div class="row">
                    <div class="col s12 centered marcellus flow-text valign-wrapper grey-text text-darken-3" style="text-shadow: 1px 0.4px 0.1px rgba(0, 0, 0, 0.212);">
                        <p>"Ada dua pilihan ketika bertemu cinta, Jatuh cinta atau Bangun cinta.
                            Maka padamu aku pilih yang kedua. agar cinta kita menjadi istana tinggi menggapai surga"</p>
                    </div>
                </div>
            </div>
            <br>
        </div>
    </section>

    <div id="kami"></div>
    <br><br><br><br>
    <section>
        <div class="container">
            <div class="row">
                <div class="col m12 s12">
                    <p class="mygreen-text amsterdam-0">Tentang Kami</p>
                    <span class="mygreen-text-2 marcellus flow-text">LATAR BELAKANG CALON MEMPELAI</span>
                </div>
            </div>
            <br><br><br>
            <div class="row">
                <div class="col m6 flow-text">
                    <img src="img/waloeh2.png" style="margin-top:-20px;" class="materialboxed" width="80%">
                </div>
                <div class="col m6 flow-text">
                    <h2 class="mygreen-text-2 text-darken-2 marcellus"><?= $mempelai_pria ?></h2>
                    <p class="grey-text text-darken-2 marcellus">
                        <b>Putra Bpk. <?= $putra_dari_bapak ?> & Ibu <?= $putra_dari_ibu ?> </b>
                    </p>
                </div>
            </div>
            <div class="center">
                <img src="<?= base_url('assets-' . app_version() . '/tema2/') ?>img/flower-line.png" style="height:90px; margin:20px;">
            </div>
            <div class="row">
                <div class="col m6 flow-text">
                    <h2 class="mygreen-text-2 text-darken-2 marcellus"><?= $mempelai_wanita ?></h2>
                    <p class="grey-text text-darken-2 marcellus">
                        <b>Putri Bpk. <?= $putri_dari_bapak ?> & Ibu <?= $putri_dari_ibu ?> </b>
                    </p>
                </div>
                <div class="col m6 flow-text right">
                    <img src="img/sofi.png" style="margin-top:-20px;" class="materialboxed" width="80%">
                </div>
            </div>
            <br><br><br><br>
        </div>
    </section>
    <section class="pink" style="background-image: url('<?= base_url('assets-' . app_version() . '/tema2/') ?>img/bg-gray.png'); margin-bottom: -20px;">
        <div class="container">
            <div class="row">
                <div class="col m12 center flow-text">
                    <br>
                    <div class="col s12 centered marcellus flow-text grey-text text-darken-3" style="text-shadow: 1px 0.4px 0.1px rgba(0, 0, 0, 0.212);">
                        Rasa haru dan bahagia terukir di hati kami atas limpahan Rahmat Allah SWT dan kami bersimpuh
                        memohon Ridho Nya untuk melangsungkan resepsi pernikahan kami <br> yang Inshaa Allah akan
                        <b>dilaksanakan pada</b>
                        :
                        </p>
                        <br>
                        <br>
                    </div>
                </div>
            </div>
    </section>
    <div id="waktu"></div>
    <div class="center">
        <img src="<?= base_url('assets-' . app_version() . '/tema2/') ?>img/flower.png" height="170px" style="margin-top:-120px;">
    </div>
    <section style="margin-bottom: -20px !important;  margin-top: -56px;     background-color: #e9e9e9;">
        <div class="container">
            <div class="row">
                <br><br><br><br><br>
                <div class="col m6 s12">
                    <div class="card hoverable">
                        <div class="card-content flow-text center">
                            <i class="material-icons large mygreen-text-2">event_available</i>
                            <p class="amsterdam-0 mygreen-text">Akad Nikah :</p>
                            <table class="">
                                <tr>
                                    <td>Hari</td>
                                    <td>:</td>
                                    <td><?= date("l", strtotime($tanggal_akad)) ?></td>
                                </tr>
                                <tr>
                                    <td>Tanggal</td>
                                    <td>:</td>
                                    <td><?= date("d F Y", strtotime($tanggal_akad)) ?></td>
                                </tr>
                                <tr>
                                    <td>Jam</td>
                                    <td>:</td>
                                    <td><?= $jam_akad_mulai ?> WIB - <?= $jam_akad_selesai ?> WIB</td>
                                </tr>
                                <tr>
                                    <td>Tempat</td>
                                    <td>:</td>
                                    <td><?= $alamat_akad ?></td>
                                </tr>
                            </table>
                        </div>
                        <div class="card-action button">
                            <a target="_blank" href="http://www.google.com/calendar/event?action=TEMPLATE&dates=<?= date("Ymd", strtotime($tanggal_akad)) ?>%2F<?= date("Ymd", strtotime($tanggal_akad)) ?>&text=Akad%20<?= $mempelai_pria ?>%20dan%20<?= $mempelai_wanita ?>&location=<?= $alamat_akad ?>&details=Acara%Akad%20<?= $mempelai_pria ?> dan <?= $mempelai_wanita ?>" class="cta gmail-show teal-text">Simpan Tanggal Acara</a>
                        </div>
                    </div>

                </div>
                <div class="col m6 s12">
                    <div class="card hoverable">
                        <div class="card-content flow-text center">
                            <i class="material-icons large mygreen-text-2">event_note</i>
                            <p class="amsterdam-0 mygreen-text">Resepsi :</p>
                            <table class="">
                                <tr>
                                    <td>Hari</td>
                                    <td>:</td>
                                    <td><?= date("l", strtotime($tgl_resepsi_mulai)) ?> </td>
                                </tr>
                                <tr>
                                    <td>Tanggal</td>
                                    <td>:</td>
                                    <td><?= date("d F Y", strtotime($tgl_resepsi_mulai)) ?> </td>
                                </tr>
                                <tr>
                                    <td>Jam</td>
                                    <td>:</td>
                                    <td><?= $jam_resepsi_mulai ?> WIB - <?= $jam_resepsi_selesai ?> WIB</td>
                                </tr>
                                <tr>
                                    <td>Tempat</td>
                                    <td>:</td>
                                    <td><?= $alamat_resepsi ?></td>
                                </tr>
                            </table>
                        </div>
                        <div class="card-action">
                            <a target="_blank" href="http://www.google.com/calendar/event?action=TEMPLATE&dates=<?= date("Ymd", strtotime($tgl_resepsi_mulai)) ?>%2F<?= date("Ymd", strtotime($tgl_resepsi_selesai)) ?>&text=Resepsi%20<?= $mempelai_pria ?>%20dan%20<?= $mempelai_wanita ?>&location=<?= $alamat_resepsi ?>&details=Acara%Akad%20<?= $mempelai_pria ?> dan <?= $mempelai_wanita ?>" class="cta gmail-show teal-text">Simpan Tanggal Acara</a>
                        </div>
                    </div>
                </div>
            </div>
            <br>
        </div>
    </section>
    <section style="margin-bottom: -20px !important;">
        <div class="container">
            <div class="row">
                <div id="lokasi"></div>
                <br><br><br><br>
                <div class="col m12 s12">
                    <p class="mygreen-text amsterdam-0">Lokasi Acara</p>
                    <span class="mygreen-text-2 marcellus flow-text">GIRIJAYA, CIBINONG, KAB. CIANJUR</span>
                </div>
            </div>
            <div class="col l8 m8 s12">
                <div class="card hoverable">
                    <!-- <div id="map" class="center">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.2897474149327!2d107.09917901477519!3d-7.321314794716237!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zN8KwMTknMTYuNyJTIDEwN8KwMDYnMDQuOSJF!5e0!3m2!1sen!2sid!4v1549670080589" width="100%" height="420" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                    <br>
                    <div class="card-action">
                        <a target="_blank" href="https://goo.gl/maps/7gLwsV4hs7L2" class="btn btn-1 right">Buka di
                            Google
                            Map</a>
                        <br>
                    </div> -->
                    <br>
                </div>
            </div>
        </div>
    </section>
    <div id="buku"></div>
    <br><br><br>
    <!-- <section class="pink" style="background-image: url('img/bg-gray.png'); margin-bottom: -20px;">
        <div class="container">
            <div class="row">
                <div class="col m12 center flow-text">
                    <br>
                    <p class="mygreen-text amsterdam-0">Buku Tamu</p>
                    <div class="col s12 centered marcellus flow-text mygreen-text-2" style="text-shadow: 1px 0.4px 0.1px rgba(0, 0, 0, 0.212);">
                        BESAR HARAPAN KAMI ATAS KEHADIRAN ANDA
                        </p>
                        <br>
                        <br>
                        <br>
                    </div>
                </div>
            </div>
    </section>
    <div class="center">
        <img src="img/flower.png" height="170px" style="margin-top:-120px;">
    </div>
    <section style="margin-bottom: -20px !important;  margin-top: -60px;     background-color: #e9e9e9;">
        <div class="container">
            <div class="row">
                <br><br><br><br><br>
                <div class="col l12 m12 s12">
                    <div class="card hoverable">
                        <div class="card-content flow-text center" style="padding:50px;">
                            <br><br>
                            <form action="https://formspree.io/waloeh.tauco@gmail.com" method="POST" class="center">
                                <div class="row">
                                    <div class="input-field col l6 m6 s12">
                                        <input id="name" type="text" name="name" class="validate">
                                        <label for="name">Nama Anda</label>
                                    </div>
                                    <div class="input-field field-blue col l6 m6 s12">
                                        <input id="email" type="email" name="email" class="validate">
                                        <label for="email">Alamat Email </label>
                                    </div>
                                    <div class="input-field col s12">
                                        <textarea id="textarea1" name="message" class="materialize-textarea"></textarea>
                                        <label for="textarea1">Tinggalkan Pesan</label>
                                    </div>
                                    <button class="btn btn-1 right" type="submit" name="action">
                                        &nbsp;&nbsp;Kirim&nbsp;&nbsp;
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <br>
        </div>
    </section> -->

    <footer class="page-footer white accent-4">
        <div class="container">
            <div class="row">
                <div class="col l12 s12 center">
                    <p class="mygreen-text amsterdam-0">Beri Kami Doa Restu</p>
                    <p class="mygreen-text-2 flow-text marcellus">Mohon doa restu atas pernikahan kami. Semoga Allah
                        SWT beri
                        kemudahan dan kelancaran prosesi sampai akhir. Amiin..
                    </p>
                </div>
            </div>
        </div>
        <div class="footer-copyright teal accent-5 center">
            <div class="container">
                <div class="col l12 s12">
                    &copy; 2019 <a class="white-text" href="https://hadi-sofi.nginvite.com/">
                        Walimatul &#39;Ursy
                    </a>
                    (Hadi & Sofi) <br> Made With <b class="pink-text">❤</b> By <a class="white-text" href="https://nginvite.com">Nginvite.com</a>
                    & Programmer Adzan Subuh.
                </div>
            </div>
        </div>
    </footer>
    <script src="<?= base_url('assets-' . app_version() . '/tema2/') ?>js/jquery-3.2.1.slim.min.js"></script>
    <script src="<?= base_url('assets-' . app_version() . '/tema2/') ?>js/materialize.js"></script>
    <script type="text/javascript" src="https://addevent.com/libs/atc/1.6.1/atc.min.js" async defer></script>
    <script src="<?= base_url('assets-' . app_version() . '/tema2/') ?>js/init.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/cferdinandi/smooth-scroll/dist/smooth-scroll.polyfills.min.js"></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAkJWNNVYMlpUqnhAz1PYeav309FnsEfjI&callback=initMap">
    </script>

    <script>
        var scroll = new SmoothScroll('a[href*="#"]');
    </script>
</body>

</html>