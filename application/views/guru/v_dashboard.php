<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-8">
                <div class="card bg-light">
                    <div class="card-header h5 text-bold">
                        Biodata
                        <a href="#" class="float-right text-gray-dark">
                            <i class="fas fa-user-edit"></i>
                        </a>
                    </div>
                    <div class="card-body row">
                    <div class="col-4">
                        <img class="card-img-top" src="<?php echo base_url('assets/img/me.png')?>" alt="Card image">
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
        </div>
    </div>
</section>
</div>