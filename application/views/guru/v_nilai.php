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
                                    <a id="lihatnilai" href="#" data-kd="<?php echo $data_kd['id_kd'] ?>" data-kelas="<?php echo $data_kd['id_kelas'] ?>">
                                        <i class="fa fa-chevron-right"> </i> <?php echo $data_kd['kd'] ?>
                                    </a>
                                </li>
                            <?php } ?>
                        </ul>
                    </div>
                </div>
            </div>
            <div id="nilai" class="col-8 d-none">
                <div class="card bg-light">
                    <div class="card-header">
                        <span class="h5 font-weight-bold">Input Nilai</span>
                    </div>
                    <div>
                        <table id="table-nilai">
                            <!-- <tr>
                                <td>as</td>
                            </!--> -->
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="add_kd" tabindex="-1" role="dialog" aria-labelledby="addnilai" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <h4 class="modal-title font-weight-bold">Tambah Nilai</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body mx-3">
                </div>
            </div>
        </div>
    </div>
</section>
</div>
<script>
    const urllihatnilai = '<?= base_url('guru/rombel/nilai') ?>';
</script>