<section class="content">
    <div class="container-fluid">

        <?php echo $this->session->flashdata('message'); ?>

        <div class="row">

            <div class="col-lg-4 col-sm-12">
                <!-- Widget: user widget style 2 -->
                <div class="card card-widget widget-user-2">
                    <!-- Add the bg color to the header using any of the bg-* classes -->
                    <div class="widget-user-header bg-gray-light text-dark">
                        <div class="widget-user-image">
                            <img class="img-circle elevation-2" src="<?= base_url('assets-' . app_version() . '/dist/img/user-profile-default.jpg') ?>" alt="User Avatar">
                        </div>
                        <!-- /.widget-user-image -->
                        <h3 class="widget-user-username">Nadia Carmichael</h3>
                        <h5 class="widget-user-desc text-sm">Mempelai pria</h5>

                        <br>

                        <div class="widget-user-image">
                            <img class="img-circle elevation-2" src="<?= base_url('assets-' . app_version() . '/dist/img/user-profile-default.jpg') ?>" alt="User Avatar">
                        </div>
                        <!-- /.widget-user-image -->
                        <h3 class="widget-user-username">Nadia Carmichael</h3>
                        <h5 class="widget-user-desc text-sm">Mempelai wanita</h5>
                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="description-block">
                                    <span class="description-text text-sm">Resepsi</span>
                                    <h5 class="description-header">20 Maret 2021</h5>
                                </div>
                                <!-- /.description-block -->
                            </div>
                            <div class="col-sm-6 border-left">
                                <div class="description-block">
                                    <span class="description-text text-sm">link undangan</span>
                                    <h5 class="description-header"><a href="https://test.nginvite.com">https://test.nginvite.com</a></h5>
                                </div>
                                <!-- /.description-block -->
                            </div>
                        </div>
                        <!-- /.row -->
                        <br>

                        <div class="row">
                            <div class="col-lg-6 col-sm-6">
                                <a href="#" class="btn btn-sm btn-block btn-success">
                                    Edit
                                </a>
                            </div>
                            <div class="col-lg-6 col-sm-6">
                                <a href="#" class="btn btn-sm btn-block btn-primary">
                                    Lihat
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.widget-user -->
            </div>

            <div class="col-lg-4 col-sm-12">
                <!-- Widget: user widget style 2 -->
                <div class="card card-widget widget-user-2">
                    <!-- Add the bg color to the header using any of the bg-* classes -->
                    <div class="widget-user-header bg-gray-light text-dark">
                        <div class="widget-user-image">
                            <img class="img-circle elevation-2" src="<?= base_url('assets-' . app_version() . '/dist/img/user-profile-default.jpg') ?>" alt="User Avatar">
                        </div>
                        <!-- /.widget-user-image -->
                        <h3 class="widget-user-username">Nadia Carmichael</h3>
                        <h5 class="widget-user-desc text-sm">Mempelai pria</h5>

                        <br>

                        <div class="widget-user-image">
                            <img class="img-circle elevation-2" src="<?= base_url('assets-' . app_version() . '/dist/img/user-profile-default.jpg') ?>" alt="User Avatar">
                        </div>
                        <!-- /.widget-user-image -->
                        <h3 class="widget-user-username">Nadia Carmichael</h3>
                        <h5 class="widget-user-desc text-sm">Mempelai wanita</h5>
                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="description-block">
                                    <span class="description-text text-sm">Resepsi</span>
                                    <h5 class="description-header">20 Maret 2021</h5>
                                </div>
                                <!-- /.description-block -->
                            </div>
                            <div class="col-sm-6 border-left">
                                <div class="description-block">
                                    <span class="description-text text-sm">link undangan</span>
                                    <h5 class="description-header"><a href="https://test.nginvite.com">https://test.nginvite.com</a></h5>
                                </div>
                                <!-- /.description-block -->
                            </div>
                        </div>
                        <!-- /.row -->
                        <br>

                        <div class="row">
                            <div class="col-lg-6 col-sm-6">
                                <a href="#" class="btn btn-sm btn-block btn-success">
                                    Edit
                                </a>
                            </div>
                            <div class="col-lg-6 col-sm-6">
                                <a href="#" class="btn btn-sm btn-block btn-primary">
                                    Lihat
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.widget-user -->
            </div>

            <div class="col-lg-4 col-sm-12">
                <a href="<?= base_url('buatundangan') ?>">
                    <div class="card card-widget widget-user-2">
                        <div class="widget-user-header bg-secondary">
                            <div class="widget-user-image">
                                <img class="img-circle elevation-2" src="https://pngimage.net/wp-content/uploads/2018/05/add-image-png-6.png" alt="User Avatar">
                            </div>
                        </div>
                        <div class="card-footer">
                            <h3>Buat baru</h3>
                        </div>
                    </div>
                </a>
            </div>

        </div>
        <!-- /.row -->
    </div>
</section>