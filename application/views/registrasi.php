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
                <form action="<?php echo base_url('panel/registrasi'); ?>" method="POST">
                    <div class="text-center">
                        <img class="mb-4" src="<?= base_url('assets-' . app_version() . '/') ?>dist/img/logo.svg" alt="" width="72" height="57">
                    </div>
                    <h1 class="h3 mb-3 fw-normal text-center">Registrasi</h1>

                    <div class="mb-3">
                        <label for="name">Nama</label>
                        <input name="nama_pengguna" type="name" class="form-control" id="name">
                        <small class="form-text text-danger"><?php echo form_error('nama_pengguna'); ?></small>
                    </div>

                    <div class="mb-3">
                        <label for="email">Email</label>
                        <input name="email" type="email" class="form-control" id="email">
                        <small class="form-text text-danger"><?php echo form_error('email'); ?></small>
                    </div>

                    <div class="mb-3">
                        <label for="no_hp">No. Hp</label>
                        <input name="no_hp" type="no_hp" class="form-control" id="no_hp">
                        <small class="form-text text-danger"><?php echo form_error('no_hp'); ?></small>
                    </div>

                    <div class="mb-3">
                        <label>Password</label>
                        <div class="input-group" id="show_hide_password1">
                            <input name="password" class="form-control" type="password" placeholder="Password">
                            <div class="input-group-append">
                                <a class="input-group-text" href=""><i class="fa fa-eye-slash" aria-hidden="true"></i></a>
                            </div>
                        </div>
                        <small class="form-text text-danger"><?php echo form_error('password'); ?></small>
                    </div>

                    <div class="mb-3">
                        <label>Repeat Password</label>
                        <div class="input-group" id="show_hide_password2">
                            <input name="passwordc" class="form-control" type="password" placeholder="Repeat Password">
                            <div class="input-group-append">
                                <a class="input-group-text" href=""><i class="fa fa-eye-slash" aria-hidden="true"></i></a>
                            </div>
                            <small class="form-text text-danger"><?php echo form_error('password'); ?></small>
                        </div>
                    </div>

                    <div class="checkbox">
                        <label>
                            <input type="checkbox" value="remember-me"> Setuju penggunaan
                        </label>
                    </div>

                    <button class=" mt-3 w-100 btn btn-lg btn-primary" type="submit">Register</button>

                    <p class="mt-2">Sudah punya akun? <a href="<?php echo base_url('panel/login'); ?>">masuk disini</a> </p>

                    <p class="mt-5 mb-1 text-muted text-center">© <?= date('Y', time()) ?></p>
                </form>
            </div>
        </div>
    </div>

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