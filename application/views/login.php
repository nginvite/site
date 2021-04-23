<!DOCTYPE html>
<!--
Developed by Haerul Muttaqin - Nov 2020
-->
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title><?= app_name() ?> — Login</title>
    <!-- Ionicons -->
    <link rel="stylesheet" href="<?= base_url('assets-' . app_version() . '/') ?>plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="<?= base_url('assets-' . app_version() . '/') ?>dist/css/style.css">
    <link rel="stylesheet" href="<?= base_url('assets-' . app_version() . '/') ?>dist/css/adminlte.css">
    <link rel="stylesheet" href="<?= base_url('assets-' . app_version() . '/') ?>plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <link rel="shortcut icon" href="<?= base_url('assets-' . app_version() . '/') ?>dist/img/favicon.png" />

</head>

<body>

    <div class="row mt-4">
        <div class="col-lg-3 mx-auto mt-4">
            <div class="card p-4">
                <form action="<?php echo base_url('panel/login/proses_login'); ?>" method="POST">
                    <div class="text-center">
                        <img class="mb-4" src="<?= base_url('assets-' . app_version() . '/') ?>dist/img/logo.svg" alt="" width="72" height="57">
                    </div>
                    <h1 class="h3 mb-3 fw-normal text-center">Silahkan Masuk!</h1>

                    <?php echo $this->session->flashdata('error'); ?>

                    <div class="mb-3">
                        <label for="email">Email address</label>
                        <input type="text" class="form-control" name="email" id="email" placeholder="name@example.com">
                        <small class="form-text text-danger"><?php echo form_error('email'); ?></small>
                    </div>
                    <div class="mb-2">
                        <label>Password</label>
                        <div class="input-group" id="show_hide_password1">
                            <input name="password" class="form-control" type="password" placeholder="Password">
                            <div class="input-group-append">
                                <a class="input-group-text" href=""><i class="fa fa-eye-slash" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="checkbox mb-3">
                        <label>
                            <input type="checkbox" value="remember-me"> Tetap masuk
                        </label>
                    </div>
                    <button class="w-100 btn btn-lg btn-primary" type="submit">Masuk</button>
                    <p class="mt-2">Belum punya akun? <a href="<?php echo base_url('panel/registrasi'); ?>">daftar disini</a> </p>
                    <p class="mt-5 mb-1 text-muted text-center">© <?= date('Y', time()) ?></p>
                </form>
            </div>
        </div>
    </div>

    <script src="<?= base_url('assets-' . app_version() . '/') ?>plugins/bootstrap/js/bootstrap.bundle.js"></script>

    <script src="<?= base_url('assets-' . app_version() . '/') ?>plugins/jquery/jquery-3.3.1.js"></script>

    <script src="<?= base_url('assets-' . app_version() . '/') ?>plugins/bootstrap/js/bootstrap.bundle.js"></script>

    <script>
        $(document).ready(function() {
            $("#show_hide_password1 a").on('click', function(event) {
                event.preventDefault();
                if ($('#show_hide_password1 input').attr("type") == "text") {
                    $('#show_hide_password1 input').attr('type', 'password');
                    $('#show_hide_password1 i').addClass("fa-eye-slash");
                    $('#show_hide_password1 i').removeClass("fa-eye");
                } else if ($('#show_hide_password1 input').attr("type") == "password") {
                    $('#show_hide_password1 input').attr('type', 'text');
                    $('#show_hide_password1 i').removeClass("fa-eye-slash");
                    $('#show_hide_password1 i').addClass("fa-eye");
                }
            });

            $("#show_hide_password2 a").on('click', function(event) {
                event.preventDefault();
                if ($('#show_hide_password2 input').attr("type") == "text") {
                    $('#show_hide_password2 input').attr('type', 'password');
                    $('#show_hide_password2 i').addClass("fa-eye-slash");
                    $('#show_hide_password2 i').removeClass("fa-eye");
                } else if ($('#show_hide_password2 input').attr("type") == "password") {
                    $('#show_hide_password2 input').attr('type', 'text');
                    $('#show_hide_password2 i').removeClass("fa-eye-slash");
                    $('#show_hide_password2 i').addClass("fa-eye");
                }
            });
        });
    </script>

</body>

</html>