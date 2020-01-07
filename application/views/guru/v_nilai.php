<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-4">
                <div class="card bg-light">
                    <div class="card-header">
                        <span class="h5 font-weight-bold">Kompetensi Dasar</span>
                        <a href="#" class="float-right btn btn-sm btn-info" data-toggle="modal" data-target="#add_kd">
                            <i class="fas fa-plus"></i>
                        </a>
                    </div>
                    <div class="card-body">
                        <ul class="list-group">
                            <?php foreach ($kd as $data_kd) { ?>
                                <li class="list-group-item">
                                    <a class="lihatnilai" href="#" data-namakd="<?php echo $data_kd['kd']?>" data-kd="<?php echo $data_kd['id_kd'] ?>" data-kelas="<?php echo $data_kd['id_kelas'] ?>">
                                        <i class="fa fa-chevron-right"> </i> <?php echo $data_kd['kd'] ?>
                                    </a>
                                    <?php if ($data_kd['status'] == 0){
                                        echo '<a href="'.base_url('guru/rombel/hapuskd/').$data_kd['id_kd'].'/'.$data_kd['id_kelas'].'" class="float-right text-danger"><i class="far fa-times-circle"></i></a>';
                                    } ?>
                                </li>
                            <?php } ?>
                        </ul>
                    </div>
                </div>
                <div class="card bg-light d-none" id="chartpiekd">
                    <div class="card-header">
                        <span class="h5 font-weight-bold">Grafik Nilai</span><br/>
                        <small id="kdname"></small>
                    </div>
                    <div class="card-body">
                        <canvas id="chartkd"></canvas>
                    </div>
                </div>
            </div>
            <div class="nilai col-8 d-none">
                <div class="card bg-light">
                    <div class="card-header">
                        <span class="h5 font-weight-bold">Input Nilai - <small id="kd" class="d-none"></small></span>
                    </div>
                    <div class="card-body">
                        <form method="post" action="<?= base_url('guru/rombel/nilai/simpan')?>">
                            <table class="table table-condensed table-bordered table-hover table-sm">
                                    <tr>
                                        <th>NIS</th>
                                        <th>NAMA</th>
                                        <th>NILAI</th>
                                    </tr>
                                </thead>
                                <tbody class="datanilai">
                                </tbody>
                            </table>
                            <div class="mt-2 float-right">
                                <input type="submit" class="btn btn-sm bg-info text-white" value="Simpan">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="add_kd" tabindex="-1" role="dialog" aria-labelledby="addnilai" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <h4 class="modal-title font-weight-bold">Tambah KD</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body mx-3">
                    <form method="post" action="<?php echo base_url('guru/rombel/addkd')?>">
                        <input name="nip" type="hidden" class="form-control" value="<?php echo $data_kd['nip'] ?>" >
                        <input name="kelas" type="hidden" class="form-control" value="<?php echo $data_kd['id_kelas'] ?>" >
                        <input name="status" type="hidden" class="form-control" value="0" >
                        <div class="form-group row">
                            <input id="input_kd" name="kd" type="text" class="form-control" placeholder="Keterangan KD">
                        </div>
                        <div class="form-group row float-right">
                            <input type="submit" class="btn btn-sm bg-info text-white" value="Simpan">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
</div>
<script>
    const urllihatnilai = '<?= base_url('guru/rombel/nilai') ?>';
    const urlchartkd = '<?php base_url('guru/rombel/nilai/kd') ?>';
</script>