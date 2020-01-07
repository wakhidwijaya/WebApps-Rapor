
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-8">
                <div class="card bg-light">
                    <div class="card-header h5 text-bold">
                        Biodata
                        <a href="#" class="float-right text-gray-dark" data-toggle="modal" data-target="#editprofil">
                            <i class="fas fa-user-edit"></i>
                        </a>
                    </div>
                    <div class="card-body row">
                        <div class="col-4">
                            <img class="card-img-top" src="<?php echo base_url('assets/img/me.png') ?>" alt="Card image">
                        </div>
                        <div class="col-8">
                            <?php foreach ($datadiri as $data_diri) { ?>
                                <div class="form-group row">
                                    <label class="form-label col-3">NIP</label>
                                    <?php echo $data_diri['nip'] ?>
                                </div>
                                <div class="form-group row">
                                    <label class="form-label col-3">Nama</label>
                                    <?php echo $data_diri['nama'] ?>
                                </div>
                                <div class="form-group row">
                                    <label class="form-label col-3">Jenis Kelamin</label>
                                    <?php if ($data_diri['jenis_kelamin'] = 0) {
                                        echo "Laki - Laki";
                                    } else {
                                        echo "Perempuan";
                                    }
                                    ?>
                                </div>
                                <div class="form-group row">
                                    <label class="form-label col-3">Alamat</label>
                                    <?php echo $data_diri['alamat'] ?>
                                </div>
                                <div class="form-group row">
                                    <label class="form-label col-3">TTL</label>
                                    <?php echo $data_diri['tempat_lahir'] ?>,
                                    <?php echo date('d F Y', strtotime($data_diri['tanggal_lahir'])) ?>
                                </div>
                                <div class="form-group row">
                                    <label class="form-label col-3">Mata Pelajaran</label>
                                    <?php echo $data_diri['mapel'] ?>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-4">
                <div class="info-box bg-info">
                    Info
                </div>
                <div class="info-box bg-danger">
                    <div class="">
                        <small class="text-bold">Today Schedule</small>
                        Mengajar
                        Kelas 8A
                    </div>
                </div>
            </div>

            <div class="modal fade" id="editprofil" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabel">Edit Biodata</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form class="form-horizontal" action="<?php echo base_url('guru/edit/' . $data_diri['nip']) ?>" method="post">
                               <div class="row">
                                   <div class="form-group col-md-4">
                                       <label class="form-label col-md-2">NIP</label>
                                       <input type="text" class="form-control" value="<?php echo $data_diri['nip'] ?>" disabled>
                                   </div>
                                   <div class="form-group col-md-8">
                                       <label class="form-label col-md-2">NAMA</label>
                                       <input type="text" class="form-control" value="<?php echo $data_diri['nama']?>" disabled>
                                   </div>
                               </div>
                                <div class="row">
                                    <div class="col-md-4 form-group">
                                        <label class="form-label">Jenis Kelamin</label>
                                        <input type="text" class="form-control" value="<?php if ($data_diri['jenis_kelamin'] = 0) {echo "Laki - Laki";} else {echo "Perempuan";} ?>" disabled>
                                    </div>
                                    <div class="col-md-3 form-group">
                                        <label class="form-label col-md-2">TTL</label>
                                        <input type="text" class="form-control" value="<?php echo  $data_diri['tempat_lahir'] ?>" disabled>
                                    </div>
                                    <div class="col-md-5 form-group">
                                        <label class="form-label col-md-2 text-light">a</label>
                                        <input type="text" class="form-control" value=" <?php echo $data_diri['tanggal_lahir'] ?>" disabled>
                                    </div>


                                </div>

<!--                                    <input type="text" class="form-control" name="alamat" id="alamat" value="--><?php //echo $data_diri['alamat'] ?><!--">-->
                                <div class="form-group">
                                    <label class="form-label col-md-2">ALAMAT</label>
                                    <select name="provinsi" class="form-control" type="text" id="provinsi">
                                </div>
                                <div class="form-group">
                                    <label class="form-label col-md-2">ALAMAT</label>
                                    <select name="kabupaten" class="form-control" type="text" id="kabupaten">
                                </div>
                                <div class="form-group">
                                    <label class="form-label col-md-2">ALAMAT</label>
                                    <select name="kecamatan" class="form-control" type="text" id="kecamatan">
                                </div>
                                <div class="form-group">
                                    <label class="form-label col-md-2">ALAMAT</label>
                                    <select name="kelurahan" class="form-control" type="text" id="kelurahan">
                                </div>
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
</section>
</div>
