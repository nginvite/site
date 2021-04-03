    <!-- Main content -->

    <form class="content" action="<?php echo base_url('buatundangan/proses_buat_undangan'); ?>" method="post">

        <section class="content">
            <div class="container-fluid">

                <?php echo $this->session->flashdata('message'); ?>

                <div class="row">
                    <!-- left column -->
                    <div class="col-md-12">
                        <!-- general form elements -->
                        <div class="card card-secondary card-outline">
                            <div class="card-header">
                                <h3 class="card-title text-seconday"><i class="cil-wc mr-2"></i>Informasi Mempelai</h3>

                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-widget="collapse"><i class="cil-minus"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="card-body">

                                <div class="row">

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="mempelai_pria">Mempelai Pria</label>
                                            <input type="text" class="form-control" autocapitalize="characters" autocomplete="off" name="mempelai_pria" id="mempelai_pria" value="<?= set_value('mempelai_pria') ?>">
                                            <?= form_error('mempelai_pria', '<small class="text-danger">', '</small>') ?>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-lg-2">
                                                <label for="putra_ke">Putra ke</label>
                                                <input type="number" class="form-control" autocapitalize="characters" autocomplete="off" name="putra_ke" id="putra_ke" value="<?= set_value('putra_ke') ?>">
                                                <?= form_error('putra_ke', '<small class="text-danger">', '</small>') ?>
                                            </div>
                                            <div class="form-group col-lg-5">
                                                <label for="putra_dari_bapak">Putra dari bapak</label>
                                                <input type="text" class="form-control" autocapitalize="characters" autocomplete="off" name="putra_dari_bapak" id="putra_dari_bapak" value="<?= set_value('putra_dari_bapak') ?>">
                                                <?= form_error('putra_dari_bapak', '<small class="text-danger">', '</small>') ?>
                                            </div>
                                            <div class="form-group col-lg-5">
                                                <label for="putra_dari_ibu">Putra dari ibu</label>
                                                <input type="text" class="form-control" autocapitalize="characters" autocomplete="off" name="putra_dari_ibu" id="putra_dari_ibu" value="<?= set_value('putra_dari_ibu') ?>">
                                                <?= form_error('putra_dari_ibu', '<small class="text-danger">', '</small>') ?>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="mempelai_wanita">Mempelai Wanita</label>
                                            <input type="text" class="form-control" autocapitalize="characters" autocomplete="off" name="mempelai_wanita" id="mempelai_wanita" value="<?= set_value('mempelai_wanita') ?>">
                                            <?= form_error('mempelai_wanita', '<small class="text-danger">', '</small>') ?>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-lg-2">
                                                <label for="putri_ke">Putri ke</label>
                                                <input type="number" class="form-control" autocapitalize="characters" autocomplete="off" name="putri_ke" id="putri_ke" value="<?= set_value('putri_ke') ?>">
                                                <?= form_error('putri_ke', '<small class="text-danger">', '</small>') ?>
                                            </div>
                                            <div class="form-group col-lg-5">
                                                <label for="putri_dari_bapak">Putri dari bapak</label>
                                                <input type="text" class="form-control" autocapitalize="characters" autocomplete="off" name="putri_dari_bapak" id="putri_dari_bapak" value="<?= set_value('putri_dari_bapak') ?>">
                                                <?= form_error('putri_dari_bapak', '<small class="text-danger">', '</small>') ?>
                                            </div>
                                            <div class="form-group col-lg-5">
                                                <label for="putri_dari_ibu">Putri dari ibu</label>
                                                <input type="text" class="form-control" autocapitalize="characters" autocomplete="off" name="putri_dari_ibu" id="putri_dari_ibu" value="<?= set_value('putri_dari_ibu') ?>">
                                                <?= form_error('putri_dari_ibu', '<small class="text-danger">', '</small>') ?>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>
                        <!-- /.card -->
                    </div>


                    <div class="col-lg-6">

                        <div class="card card-secondary card-outline">
                            <div class="card-header">
                                <h3 class="card-title text-seconday"><i class="cil-image-plus mr-2"></i>Foto Mempelai</h3>

                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-widget="collapse"><i class="cil-minus"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="card-body">

                                <div class="row">

                                    <div class="col-lg-12">
                                        <div class="row">
                                            <div class="form-group col-lg-6">
                                                <label for="putra_dari_ibu">Mempelai Pria</label>
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input" name="foto_pria" id="foto_pria">
                                                    <label class="custom-file-label" for="customFile">Pilih foto</label>
                                                </div>
                                            </div>
                                            <div class="form-group col-lg-6">
                                                <label for="putra_dari_ibu">Mempelai Wanita</label>
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input" name="foto_wanita" id="foto_wanita">
                                                    <label class="custom-file-label" for="customFile">Pilih foto</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>

                        <div class="card card-secondary card-outline">
                            <div class="card-header">
                                <h3 class="card-title text-seconday"><i class="cil-sign-language mr-2"></i>Informasi Akad</h3>

                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-widget="collapse"><i class="cil-minus"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="card-body">

                                <div class="row">

                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label for="tanggal_akad">Tanggal Akad</label>
                                            <input type="date" class="form-control" autocapitalize="characters" autocomplete="off" name="tanggal_akad" id="tanggal_akad" value="<?= set_value('tanggal_akad') ?>">
                                            <?= form_error('tanggal_akad', '<small class="text-danger">', '</small>') ?>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-lg-6">
                                                <label for="jam_akad_mulai">Jam Mulai Akad</label>
                                                <input type="time" class="form-control" autocapitalize="characters" autocomplete="off" name="jam_akad_mulai" id="jam_akad_mulai" value="<?= set_value('jam_akad_mulai') ?>">
                                                <?= form_error('jam_akad_mulai', '<small class="text-danger">', '</small>') ?>
                                            </div>
                                            <div class="form-group col-lg-6">
                                                <label for="jam_akad_selesai">Jam Selesai Akad</label>
                                                <input type="time" class="form-control" autocapitalize="characters" autocomplete="off" name="jam_akad_selesai" id="jam_akad_selesai" value="<?= set_value('jam_akad_selesai') ?>">
                                                <?= form_error('jam_akad_selesai', '<small class="text-danger">', '</small>') ?>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="alamat_akad">Alamat Akad</label>
                                            <textarea type="text" class="form-control" autocapitalize="characters" autocomplete="off" name="alamat_akad" id="alamat_akad" value="<?= set_value('alamat_akad') ?>"><?= set_value('alamat_akad') ?></textarea>
                                            <?= form_error('alamat_akad', '<small class="text-danger">', '</small>') ?>
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="card card-secondary card-outline">
                            <div class="card-header">
                                <h3 class="card-title text-seconday"><i class="cil-sofa mr-2"></i>Informasi Resepsi</h3>

                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-widget="collapse"><i class="cil-minus"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="card-body">

                                <div class="row">

                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label for="tgl_resepsi_mulai">Tanggal Mulai Resepsi</label>
                                            <input type="date" class="form-control" autocapitalize="characters" autocomplete="off" name="tgl_resepsi_mulai" id="tgl_resepsi_mulai" value="<?= set_value('tgl_resepsi_mulai') ?>">
                                            <?= form_error('tgl_resepsi_mulai', '<small class="text-danger">', '</small>') ?>
                                        </div>
                                        <div class="form-group">
                                            <label for="tgl_resepsi_selesai">Tanggal Selesai Resepsi</label>
                                            <input type="date" class="form-control" autocapitalize="characters" autocomplete="off" name="tgl_resepsi_selesai" id="tgl_resepsi_selesai" value="<?= set_value('tgl_resepsi_selesai') ?>">
                                            <?= form_error('tgl_resepsi_selesai', '<small class="text-danger">', '</small>') ?>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-lg-6">
                                                <label for="jam_resepsi_mulai">Jam Mulai Resepsi</label>
                                                <input type="time" class="form-control" autocapitalize="characters" autocomplete="off" name="jam_resepsi_mulai" id="jam_resepsi_mulai" value="<?= set_value('jam_resepsi_mulai') ?>">
                                                <?= form_error('jam_resepsi_mulai', '<small class="text-danger">', '</small>') ?>
                                            </div>
                                            <div class="form-group col-lg-6">
                                                <label for="jam_resepsi_selesai">Jam Selesai Resepsi</label>
                                                <input type="time" class="form-control" autocapitalize="characters" autocomplete="off" name="jam_resepsi_selesai" id="jam_resepsi_selesai" value="<?= set_value('jam_resepsi_selesai') ?>">
                                                <?= form_error('jam_resepsi_selesai', '<small class="text-danger">', '</small>') ?>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="alamat_resepsi">Alamat Resepsi</label>
                                            <textarea type="text" class="form-control" autocapitalize="characters" autocomplete="off" name="alamat_resepsi" id="alamat_resepsi" value="<?= set_value('alamat_resepsi') ?>"><?= set_value('alamat_resepsi') ?></textarea>
                                            <?= form_error('alamat_resepsi', '<small class="text-danger">', '</small>') ?>
                                        </div>
                                        <div class="form-group">
                                            <label for="koordinat_resepsi">Koordinat Resepsi</label>
                                            <input type="text" class="form-control" autocapitalize="characters" autocomplete="off" name="koordinat_resepsi" id="koordinat_resepsi" value="<?= set_value('koordinat_resepsi') ?>">
                                            <?= form_error('koordinat_resepsi', '<small class="text-danger">', '</small>') ?>
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <!-- general form elements -->
                        <div class="card card-secondary card-outline">
                            <div class="card-header">
                                <h3 class="card-title text-seconday"><i class="cil-gift mr-2"></i>Settingan Undangan</h3>

                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-widget="collapse"><i class="cil-minus"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="card-body">

                                <div class="row">

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="tema">Pilih tema</label>
                                            <div class="row">
                                                <label class="col-lg-4 col-sm-6">
                                                    <input type="radio" name="tema" autocomplete="off" value="1" checked />
                                                    <span>Tema 1</span> <a class="img-link" href="https://bais-siti.nginvite.com" target="_blank">(lihat demo)</a>
                                                    <img width="100%" class="img-fluid img-demo img-thumbnail img-tema" src="<?= base_url('assets-' . app_version() . '/dist/img/theme1.png') ?>" />
                                                    <span class="checkmark"></span>
                                                </label>
                                                <label class="col-lg-4 col-sm-6">
                                                    <input type="radio" name="tema" autocomplete="off" value="2" />
                                                    <span>Tema 2</span> <a class="img-link" href="https://hadi-sofi.nginvite.com" target="_blank">(lihat demo)</a>
                                                    <img width="100%" class="img-fluid img-demo img-thumbnail img-tema" src="<?= base_url('assets-' . app_version() . '/dist/img/theme2.png') ?>" />
                                                    <span class="checkmark"></span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="domain">Link undangan</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">https://</span>
                                                </div>
                                                <input id="domain" name="domain" type="text" value="<?= set_value('domain') ?>" class="form-control form-control-lg">
                                                <div class="input-group-append">
                                                    <span class="input-group-text">.nginvite.com</span>
                                                </div>
                                            </div>
                                            <?= form_error('domain', '<small class="text-danger">', '</small>') ?>
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>
                        <!-- /.card -->
                    </div>


                </div>
                <!-- /.row -->
            </div>
        </section>

        <div class="card-footer">
            <a class="btn btn-secondary float-left go-back" href="#" role="button">Cancel</a>
            <button type="submit" class="btn btn-success float-right"><i class="fas fa-save"></i> Save Changes</button>
        </div>

    </form>