    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md">
                    <!-- general form elements -->
                    <div class="card card-secondary card-outline">
                        <!-- User Field -->
                        <form role="form" method="post" action="<?= base_url('user/add') ?>" autocomplete="off">
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
                                                <input type="text" class="form-control" autocapitalize="characters" autocomplete="off" name="putra_ke" id="putra_ke" value="<?= set_value('putra_ke') ?>">
                                                <?= form_error('putra_ke', '<small class="text-danger">', '</small>') ?>
                                            </div>
                                            <div class="form-group col-lg-5">
                                                <label for="putra_dari_bapak">Putra dari bapak</label>
                                                <input type="number" class="form-control" autocapitalize="characters" autocomplete="off" name="putra_dari_bapak" id="putra_dari_bapak" value="<?= set_value('putra_dari_bapak') ?>">
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
                                            <label for="mempelai_pria">Mempelai Wanita</label>
                                            <input type="text" class="form-control" autocapitalize="characters" autocomplete="off" name="mempelai_pria" id="mempelai_pria" value="<?= set_value('no_induk') ?>">
                                            <?= form_error('mempelai_pria', '<small class="text-danger">', '</small>') ?>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-lg-2">
                                                <label for="putri_ke">Putri ke</label>
                                                <input type="text" class="form-control" autocapitalize="characters" autocomplete="off" name="putri_ke" id="putri_ke" value="<?= set_value('putri_ke') ?>">
                                                <?= form_error('putri_ke', '<small class="text-danger">', '</small>') ?>
                                            </div>
                                            <div class="form-group col-lg-5">
                                                <label for="putri_dari_bapak">Putri dari bapak</label>
                                                <input type="number" class="form-control" autocapitalize="characters" autocomplete="off" name="putri_dari_bapak" id="putri_dari_bapak" value="<?= set_value('putri_dari_bapak') ?>">
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
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <a class="btn btn-secondary float-left" href="<?= base_url('user') ?>" role="button">Cancel</a>
                                <button type="submit" class="btn btn-success float-right"><i class="fas fa-save"></i> Save Changes</button>
                            </div>
                        </form>
                    </div>
                    <!-- /.card -->
                </div>
                <!--/.col (left) -->
            </div>
            <!-- /.row -->
        </div>
    </section>