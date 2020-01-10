<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="mb-2">
                <a href="<?php echo base_url('guru/rombel/nilai/').$kelas?>"  class="btn btn-warning text-light"><i class="fas fa-arrow-left"></i> KEMBALI</a>
            </div>
            <table class="table table-sm table-bordered text-center">
                <tr>
                    <th rowspan="2">No</th>
                    <th rowspan="2">NIM</th>
                    <th rowspan="2">Nama</th>
                    <th rowspan="2">Kelas</th>
                    <th colspan="<?php if (count($kd) > 2){ echo count($kd)+1;} else {echo count($kd);} ?>">Nilai</th>
                    <th rowspan="2">ket</th>
                </tr>
                <tr>
                    <?php for ($i = 1; $i <= count($kd)-2; $i++){ ?>
                        <td>KD <?php echo $i?></td>
                    <?php } ?>
                    <?php if (count($kd) > 2){?>
                        <td>AVG KD</td>
                    <?php } ?>
                    <td>UTS</td>
                    <td>UAS</td>
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
                                array_push($totalkd, array_sum($arraykd));
                            }
                        }
                         if ($arraykd != null){
                            foreach ($arraykd as $kdnilai){
                                echo '<td>'.$kdnilai.'</td>';
                            }
                        echo '<td>'.array_sum($arraykd)/count($arraykd).'</td>';
                        }?>
                        <?php foreach ($ujian as $nilaiujian){ ?>
                            <td><?php echo $nilaiujian ?></td>
                        <?php } ?>
                        <td></td>
                    </tr>
                <?php } ?>
                    <tr>
                        <td colspan="4">Total Nilai</td>
                        <td><?php echo array_sum($totalkd) ?></td>
                        <td><?php echo array_sum($totaluts) ?></td>
                        <td><?php echo array_sum($totaluas) ?></td>
                    </tr>
            </table>
        </div>
    </div>
</section>
</div>