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
        <div class="col-lg-3 mx-auto mt-4">
            <div class="card p-4">
                <form action="<?php echo base_url('login/proses_login'); ?>" method="POST">
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
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                        <small class="form-text text-danger"><?php echo form_error('password'); ?></small>
                    </div>

                    <div class="checkbox mb-3">
                        <label>
                            <input type="checkbox" value="remember-me"> Remember me
                        </label>
                    </div>
                    <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
                    <p class="mt-5 mb-1 text-muted text-center">© <?= date('Y', time()) ?></p>
                </form>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="<?= base_url('assets-' . app_version() . '/') ?>plugins/bootstrap/js/bootstrap.bundle.js"></script>
</body>

</html>