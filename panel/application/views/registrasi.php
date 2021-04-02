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
    <link rel="stylesheet" href="<?= base_url('assets-' . app_version() . '/') ?>dist/css/style.css">
    <link rel="stylesheet" href="<?= base_url('assets-' . app_version() . '/') ?>plugins/coreui-icons/css/all.min.css">
    <link rel="stylesheet" href="<?= base_url('assets-' . app_version() . '/') ?>dist/css/adminlte.css">
    <link rel="stylesheet" href="<?= base_url('assets-' . app_version() . '/') ?>plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <link rel="shortcut icon" href="<?= base_url('assets-' . app_version() . '/') ?>dist/img/favicon.png" />

</head>

<body>

    <div class="row mt-4">
        <div class="col-lg-5 mx-auto mt-4">
            <div class="card p-4">
                <form action="<?php echo base_url('Registrasi/proses_registrasi'); ?>" method="POST">
                    <div class="text-center">
                        <img class="mb-4" src="<?= base_url('assets-' . app_version() . '/') ?>dist/img/logo.svg" alt="" width="72" height="57">
                    </div>
                    <h1 class="h3 mb-3 fw-normal text-center">Registration</h1>

                    <div class="mb-3">
                        <label for="username">Username</label>
                        <input type="text" name="username" class="form-control" id="username" placeholder="username">
                    </div>

                    <div class="mb-3">
                        <label for="email">Email</label>
                        <input type="email" name="email" class="form-control" id="email" placeholder="name@example.com">
                    </div>

                    <div class="mb-3">
                        <label for="no_hp">No Handphone</label>
                        <input type="phone" name="no_hp" class="form-control" id="no_hp" placeholder="08xxxx">
                    </div>

                    <div class="mb-3">
                        <label for="domain">Name Domain</label>
                        <input type="text" name="domain" class="form-control" id="domain" placeholder="domain">
                    </div>
                    <div class="mb-2">
                        <label for="password">Password</label>
                        <input type="password" name="password" class="form-control" id="password" placeholder="password">
                    </div>

                    <!-- <div class="checkbox mb-3">
                        <label>
                            <input type="checkbox" value="remember-me"> Remember me
                        </label>
                    </div> -->
                    <button class="w-100 btn btn-lg btn-primary mt-3" type="submit">Sign Up</button>
                    <p class="mt-3 mb-1 text-muted text-center">© <?= date('Y', time()) ?></p>
                </form>
            </div>
        </div>
    </div>

    <script src="<?= base_url('assets-' . app_version() . '/') ?>plugins/bootstrap/js/bootstrap.bundle.js"></script>
</body>

</html>