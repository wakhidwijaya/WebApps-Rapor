<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card bg-light">
                    <div class="card-header">
                        <span class="h5 font-weight-bold">Daftar Nilai</span>
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <td>No</td>
                                    <td>Nama</td>
                                    <td>NIS</td>
                                    <td>Kelas</td>
                                    <td>Semester</td>
                                    <td>Mata Pelajaran</td>
                                    <td>Keterangan</td>
                                    <td>Nilai</td>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1;
                                foreach ($nilai as $nilai_siswa) { ?>
                                    <tr>
                                        <td><?php echo $no ?></td>
                                        <td><?php echo $nilai_siswa['nama'] ?></td>
                                        <td><?php echo $nilai_siswa['nis'] ?></td>
                                        <td><?php echo $nilai_siswa['kelas'] ?></td>
                                        <td><?php echo $nilai_siswa['semester'] ?></td>
                                        <td><?php echo $nilai_siswa['mapel'] ?></td>
                                        <td><?php echo $nilai_siswa['kd'] ?></td>
                                        <td><?php echo $nilai_siswa['nilai'] ?></td>

                                    </tr>
                                <?php $no++;
                                } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="addnilai" tabindex="-1" role="dialog" aria-labelledby="addnilai" aria-hidden="true">
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