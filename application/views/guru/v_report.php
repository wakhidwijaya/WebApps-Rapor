<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="mb-2">
                <a href="<?php echo base_url('guru/rombel/nilai/').$kelas?>"  class="btn btn-warning text-light"><i class="fas fa-arrow-left"></i> KEMBALI</a>
            </div>
            <table class="table table-sm table-bordered text-center">
                <tr>
                    <th rowspan="3" class="align-middle">No</th>
                    <th rowspan="3" class="align-middle">NIM</th>
                    <th rowspan="3" class="align-middle">Nama</th>
                    <th rowspan="3" class="align-middle">Kelas</th>
                    <th colspan="<?php if (count($kd) > 2){ echo count($kd)+2;} else {echo count($kd)+1;} ?>" class="align-middle">Nilai</th>
                    <th rowspan="3"class="align-middle">ket</th>
                </tr>
                    <tr>
                <?php if (count($kd) > 2){ ?>
                        <th colspan="<?php echo count($kd)-2?>">Kompetensi Dasar</th>
                <?php }?>
                        <?php if (count($kd) > 2){?>
                            <th rowspan="2" class="align-middle">AVG KD</th>
                        <?php } ?>
                        <th rowspan="2" class="align-middle">UTS</th>
                        <th rowspan="2" class="align-middle">UAS</th>
                        <th rowspan="2" class="align-middle">Nilai Akhir</th>
                    </tr>
                <tr>
                    <?php for ($i = 1; $i <= count($kd)-2; $i++){ ?>
                        <th>KD <?php echo $i?></th>
                    <?php } ?>
                </tr>
                <?php $totalkd = array(); $totaluts = array(); $totaluas = array(); $i = 1; foreach ($datanilai as $siswa){?>
                    <tr>
                        <td><?php echo $i++?></td>
                        <td><?php echo $siswa['id_siswa']?></td>
                        <td class="text-left text-uppercase" ><?php echo $siswa['nama']?></td>
                        <td><?php echo $siswa['kelas']?></td>
                        <?php $arraykd = array(); $ujian = array(); foreach ($nilaikd as $nilai) {
                            if ($nilai['nis'] == $siswa['id_siswa']){
                                if ($nilai['status'] == 0){
                                    array_push($arraykd, $nilai['nilai']);
                                } else if ($nilai['status'] == 1){
                                    array_push($ujian, $nilai['nilai']);
                                    array_push($totaluts, $nilai['nilai']);
                                }else{
                                    array_push($ujian, $nilai['nilai']);
                                    array_push($totaluas, $nilai['nilai']);
                                }
                            }
                        }
                         if ($arraykd != null){
                            foreach ($arraykd as $kdnilai){
                                echo '<td>'.$kdnilai.'</td>';
                            }
                            array_push($totalkd,  array_sum($arraykd));
                        echo '<td>'.array_sum($arraykd)/count($arraykd).'</td>';
                        }?>
                        <?php foreach ($ujian as $nilaiujian){ ?>
                            <td><?php echo $nilaiujian ?></td>
                        <?php } ?>
                        <td></td>
                    </tr>
                <?php } ?>
                    <tr class="font-weight-bold">
                        <td colspan="4">Total Nilai</td>
                        <td>urung</td>
                        <td>urung</td>
                        <td><?php echo array_sum($totalkd) ?></td>
                        <td><?php echo array_sum($totaluts) ?></td>
                        <td><?php echo array_sum($totaluas) ?></td>
                        <td></td>
                    </tr>
            </table>
        </div>
    </div>
</section>
</div>