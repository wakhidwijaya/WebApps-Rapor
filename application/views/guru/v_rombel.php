<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="alert alert-warning d-flex">
                    <div class="col-10">
                        <b>Petunjuk :</b><br/>
                        Jumlah Kelas yang bisa diampu adalah <b><?php echo $slot?></b> kelas<br/>
                        <b>Keterangan :</b><br/>
                        <?php if ($rombel != null){$ket = "Anda sudah mengambil kelas"; $btn_ambil ="d-none";}
                            else{$ket = "Anda belum mengambil kelas, silahkan tekan button Ambil Kelas"; $btn_ambil="";}
                        ?>
                        <?php echo $ket?>
                    </div>
                    <div class="col-2 <?php echo $btn_ambil?>">
                        <a href="<?php echo base_url('guru/rombel/ambilkelas')?>" class="btn btn-sm bg-info float-right text-decoration-none">
                            <i></i>Ambil Kelas
                        </a>
                    </div>
                </div>
            </div>
        </div>
            <div class="row">
                <?php foreach ($rombel as $datarombel){?>
                <div class="col-3">
                    <div class="small-box bg-info">
                            <div class="inner row">
                                <div class="col-4 h1 font-weight-bold"><?php echo $datarombel['kelas']?></div>
                                <div class="col-8">
                                    <div class="row h5">
                                        <?php echo $datarombel['mapel']?>
                                        <small><?php echo $datarombel['nama']?></small>
                                    </div>
                                </div>
                            </div>
<!--                            <div class="icon">-->
<!--                                <i class="ion ion-bag"></i>-->
<!--                            </div>  -->
                            <a href="<?php echo base_url('guru/rombel/nilai/'.$datarombel['id_kelas'])?>" class="small-box-footer">Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <?php } ?>
            </div>
    </div>
</section>
</div>