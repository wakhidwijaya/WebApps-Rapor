<section class="content">
    <div class="container-fluid">
            <div class="row">
                <?php foreach ($rombel as $datarombel){?>
                <div class="col-3">
                    <div class="info-box bg-info">
                        <div class="col-4 h1 font-weight-bold"><?php echo $datarombel['kelas']?></div>
                        <div class="col-8">
                            <div class="row h5">
                                <?php echo $datarombel['mapel']?>
                                <small><?php echo $datarombel['nama']?></small>
                            </div>
                            <div class="row float-right h3"><a href="<?php echo base_url('guru/rombel/nilai/'.$datarombel['id_kelas'])?>" class="text-light"> <i class="fas fa-arrow-alt-circle-right"></i></a></div>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
    </div>
</section>
</div>