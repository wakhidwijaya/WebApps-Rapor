<!-- Main content -->
<section class="content mb-5">
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
                            <div class="form-group row">
                                <label class="form-label col-md-2">ALAMAT</label>
                                <?php echo $data_siswa['alamat'] ?>
                            </div>
                        <?php } ?>
                    </div>
                    <div class="card-footer">
                        <button type="submit" id="editsiswa" class="btn btn-primary float-right" data-toggle="modal" data-target="#exampleModalScrollable">
                            EDIT
                        </button>
                    </div>
                </div>
                <!-- Modal -->
                <div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-scrollable" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalScrollableTitle">Modal title</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form class="form-horizontal" action="<?php echo base_url('siswa/edit/' . $data_siswa['nis']) ?>" method="post">
                                    <div class="form-group row">
                                        <label class="form-label col-md-2">NIS</label>
                                        <input type="text" class="form-control" value="<?php echo $data_siswa['nis'] ?>" disabled>
                                    </div>
                                    <div class="form-group row">
                                        <label class="form-label col-md-2">NAMA</label>
                                        <input type="text" class="form-control" value="<?php echo $data_siswa['nama'] ?>" disabled>
                                    </div>
                                    <div class="form-group row">
                                        <label class="form-label col-md-2">KELAS</label>
                                        <input type="text" class="form-control" value="<?php echo $data_siswa['kelas'] ?>" disabled>
                                    </div>
                                    <div class="form-group row">
                                        <label class="form-label col-md-2">TTL</label>
                                        <input type="text" class="form-control" value=" <?php echo $data_siswa['tempat_lahir'] . "&emsp;" . "/" . "&emsp;" . $data_siswa['tanggal_lahir'] ?>    " disabled>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label col-md-2">Provinsi</label>
                                        <select name="provinsi" class="provinsi form-control"></select>
                                    </div>
                                    <div class="form-group formkab d-none">
                                        <label class="form-label col-md-2">Kabupaten</label>
                                        <select name="kabupaten" class="kabupaten form-control"></select>
                                    </div>
                                    <div class="form-group formkec d-none">
                                        <label class="form-label col-md-2">Kecamatan</label>
                                        <select name="kecamatan" class="kecamatan form-control"></select>
                                    </div>
                                    <div class="form-group formkel d-none">
                                        <label class="form-label col-md-2">Kelurahan</label>
                                        <select name="kelurahan" class="kelurahan form-control"></select>
                                    </div>
                                    <!-- <div class="form-group row">
                                        <label class="form-label col-md-2">Alamat</label>
                                        <input type="text" class="form-control" name="alamat" id="alamat" value="<?php echo $data_siswa['alamat'] ?>">
                                    </div> -->
                            </div>
                            <div class="modal-footer">
                                <!-- <button type="submit" class="btn btn-primary" data-dismiss="modal">Simpan</button> -->
                                <input type="submit" class="btn btn-primary" value="simpan">
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>
<!-- /.content -->

<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 offset-2">
                <h4 class="mb-3">Chart Nilai Siswa</h4>
                <canvas id="myChart" width="400" height="210"></canvas>
            </div>
        </div>
    </div>
    </div>
</section>

<!-- chart nilai -->

</div>
<!-- /.content-wrapper -->
<script>
    const urlchart = '<?= base_url('siswa/chart') ?>';
</script>