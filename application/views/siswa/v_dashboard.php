<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 offset-2">
                <div class="card">
                    <div class="card-body">
                        <?php foreach ($siswa as $data_siswa) { ?>
                            <div class="form-group row">
                                <label class="form-label col-md-2">NIS</label>
                                <?php echo $data_siswa['nis'] ?>
                            </div>
                            <div class="form-group row">
                                <label class="form-label col-md-2">NAMA</label>
                                <?php echo $data_siswa['nama'] ?>
                            </div>
                            <div class="form-group row">
                                <label class="form-label col-md-2">KELAS</label>
                                <?php echo $data_siswa['kelas'] ?>
                            </div>
                            <div class="form-group row">
                                <label class="form-label col-md-2">TTL</label>
                                <?php echo $data_siswa['tempat_lahir'] . "&emsp;" . "/" . "&emsp;" . $data_siswa['tanggal_lahir'] ?>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->