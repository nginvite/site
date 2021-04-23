<!DOCTYPE html>
<!--
Developed by Haerul Muttaqin - Nov 2020
-->
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title><?= app_name() ?> — <?= $title ?></title>
    <!-- Ionicons -->
    <link rel="stylesheet" href="<?= base_url('assets-' . app_version() . '/') ?>plugins/select2/css/select2.css">
    <link rel="stylesheet" href="<?= base_url('assets-' . app_version() . '/') ?>dist/css/adminlte.css">
    <link rel="stylesheet" href="<?= base_url('assets-' . app_version() . '/') ?>dist/css/style.css">
    <link rel="stylesheet" href="<?= base_url('assets-' . app_version() . '/') ?>plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="<?= base_url('assets-' . app_version() . '/') ?>plugins/coreui-icons/css/all.min.css">
    <link rel="stylesheet" href="<?= base_url('assets-' . app_version() . '/') ?>plugins/checkbox/pretty-checkbox.min.css">
    <link rel="stylesheet" href="<?= base_url('assets-' . app_version() . '/') ?>plugins/sweetalert2/sweetalert2.css">
    <link rel="stylesheet" href="<?= base_url('assets-' . app_version() . '/') ?>plugins/daterangepicker/daterangepicker.css">
    <link rel="stylesheet" href="<?= base_url('assets-' . app_version() . '/') ?>plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <link rel="stylesheet" href="<?= base_url('assets-' . app_version() . '/') ?>plugins/datatables/dataTables.bootstrap4.css">
    <link rel="stylesheet" href="<?= base_url('assets-' . app_version() . '/') ?>plugins/datatables/extensions/Mark/datatables.mark.min.css">
    <link rel="stylesheet" href="<?= base_url('assets-' . app_version() . '/') ?>plugins/datatables/extensions/FixedColumns/css/dataTables.fixedColumns.css">
    <link rel="stylesheet" href="<?= base_url('assets-' . app_version() . '/') ?>plugins/datatables/dataTables.checkboxes.css">
    <link rel="stylesheet" href="<?= base_url('assets-' . app_version() . '/') ?>plugins/crop/css/cropper.css">
    <link rel="stylesheet" href="<?= base_url('assets-' . app_version() . '/') ?>plugins/shimmer/shimmer.css">
    <link rel="stylesheet" href="<?= base_url('assets-' . app_version() . '/') ?>plugins/progress/pace.css">
    <link rel="stylesheet" href="<?= base_url('assets-' . app_version() . '/') ?>dist/css/bootstrap-iconpicker.css">
    <link rel="stylesheet" href="<?= base_url('assets-' . app_version() . '/') ?>plugins/view-bigimg/view-bigimg.css">
    <link rel="shortcut icon" href="<?= base_url('assets-' . app_version() . '/') ?>dist/img/favicon.ico" />

</head>

<body class="hold-transition sidebar-mini layout-navbar-fixed layout-fixed">
    <!--// $this->session->userdata('sidebar_state');-->
    <div class="wrapper bg-header">

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-light border-bottom-2 bg-nav-header navbar-dark">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link text-white" data-widget="pushmenu" href="#"><i class="cil-menu font-weight-normal"></i></a>
                </li>
                <li class="nav-item d-none" id="nav-header-title" style="-webkit-transition: all 0.15s ease;
                    -moz-transition: all 0.15s ease;
                    -o-transition: all 0.15s ease;
                    transition: all 0.15s ease;">
                    <a class="nav-link brand-text font-weight-light text-white align-middle go-back pointer text-truncate" title="Click to go back" data-toggle="tooltip" data-placement="bottom">
                        <i class="cil-arrow-left mr-2"></i><?= $title ?></a>
                </li>
            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">

                <!-- Messages Dropdown Menu -->
                <li class="nav-item dropdown" title="Notification" data-toggle="tooltip" data-placement="bottom">
                    <a class="nav-link text-white" data-toggle="dropdown" href="#" aria-expanded="false">
                        <i class="cil-bell"></i>
                        <span class="notif_count badge badge-danger navbar-badge"></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right animate slideIn">
                        <span class="dropdown-item dropdown-header"><span class="notif_count"></span> Notifications</span>
                        <div class="dropdown-divider"></div>

                        <div class="dropdown-divider"></div>
                        <a href="<?= base_url('notifications') ?>" class="dropdown-item dropdown-footer">See All Notifications</a>
                    </div>
                </li>

                <!-- Messages Dropdown Menu -->
                <li class="nav-item dropdown" title="Profile" data-toggle="tooltip" data-placement="bottom">
                    <a class="nav-link text-white" data-toggle="dropdown" href="#" aria-expanded="false">
                        <i class="cil-user"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right animate slideIn">
                        <a href="<?= base_url('user/profile') ?>" class="dropdown-item">
                            <i class="cil-user mr-2"></i> Profile
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item logout">
                            <i class="cil-account-logout mr-2"></i> Logout
                        </a>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link reload text-white" href="#" title="Refresh" data-toggle="tooltip" data-placement="bottom">
                        <i class="cil-sync"></i>
                        <span class="notif_count badge badge-danger navbar-badge"></span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link text-white" data-widget="control-sidebar" data-slide="true" href="#" title="More" data-toggle="tooltip" data-placement="bottom">
                        <i class="cil-options"></i>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary">
            <!-- Brand Logo -->
            <a href="<?= base_url() ?>" class="brand-link" style="background-color: rgb(26, 31, 44); border-bottom: 0px !important; height: 57px !important;" title="<?= app_name() ?> — v<?= app_version() ?>" data-toggle="tooltip" data-placement="bottom">
                <span class="brand-text ml-2"><?= app_name() ?> <small>(User Panel)</small></span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar" style="margin-top: 56px !important">
                <!-- Sidebar Menu -->
                <nav>
                    <ul class="tree nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

                        <div class="user-panel mt-2 pb-2 mb-2 d-flex">
                            <?php
                            $default = base_url('assets-' . app_version() . '/') . 'dist/img/user-profile-default.jpg';
                            if ($this->session->userdata('profile_img') != null) {
                                $default = 'data:image/jpeg;base64,' . $this->session->userdata('profile_img');
                            }
                            ?>
                            <a href="<?= base_url('user/profile') ?>" data-toggle="tooltip" class="image mt-2" data-placement="bottom" title="Show Profile">
                                <img src="<?= $default ?>" class="img-circle elevation-2 border border-white">
                            </a>
                            <div class="info ml-2" style="color: white;">
                                <span href="#" class="d-block text-truncate" style="max-width: 170px !important;" data-toggle="tooltip" data-placement="bottom" title="">
                                    <span class="font-weight-bold" style="color:#b7bbc7">
                                        <?= $this->session->userdata('nama_pengguna') ?>
                                    </span>
                                    <br>
                                    <small style="color:#b7bbc0">Member</small>
                                </span>
                            </div>
                        </div>
                        <!--MENU QUERY-->
                        <!-- Query Menu-->

                        <li class="nav-item <?php if ('Undangan' == $title) echo 'menu-open' ?>">
                            <a href="<?= base_url('panel/undangan') ?>" class="nav-link">
                                <i class="cil-home nav-icon"></i>
                                <p style="text-transform: capitalize;">Undangan</p>
                            </a>
                        </li>

                        <li class="nav-item <?php if ('Buat Baru' == $title) echo 'menu-open' ?>">
                            <a href="<?= base_url('panel/buatundangan') ?>" class="nav-link">
                                <i class="cil-note-add nav-icon"></i>
                                <p style="text-transform: capitalize;">Buat Baru</p>
                            </a>
                        </li>


                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <script src="<?= base_url('assets-' . app_version() . '/') ?>plugins/jquery/jquery-3.3.1.js"></script>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">

            <!-- Content Header (Page header) -->
            <?php if ($title != 'Dashboard' && $title != 'Meter Data') : ?>
                <div class="content-header mb-3">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-6">
                                <h4 class="m-0 text-dark"><?= $title ?></h4>
                            </div><!-- /.col -->
                            <div class="col-sm-6">
                                <ol class="breadcrumb float-sm-right text-sm pl-3 pr-3 mt-2 mt-lg-0">
                                    <li class="breadcrumb-item active"><a href=""><?= $title ?></a></li>
                                    <li class="breadcrumb-item text-black go-back pointer">Home</li>
                                </ol>
                            </div><!-- /.col -->
                        </div><!-- /.row -->
                    </div><!-- /.container-fluid -->
                </div>
            <?php endif; ?>
            <!-- /.content-header -->