<section class="content">
    <div class="container-fluid">
        <div class="row">
           <div class="col-12">
               <div class="card bg-light">
                   <div class="card-header">
                       <span class="h5 font-weight-bold">Daftar Nilai</span>
                       <a href="#" class="float-right btn btn-sm btn-info" data-toggle="modal" data-target="#addnilai">
                           <i class="fas fa-plus"></i>
                       </a>

                   </div>
                   <div class="card-body">
                       <table class="table">
                           <thead>
                               <tr>
                                   <td>No</td>
                                   <td>Nis</td>
                                   <td>Nama</td>
                                   <td>Kelas</td>
                                   <td>Semester</td>
                                   <td>Nilai</td>
                                   <td>Aksi</td>
                               </tr>
                           </thead>
                           <tbody>
                           <?php $no = 1; foreach ($nilai as $datanilai) { ?>
                               <tr>
                                   <td><?php echo $no?></td>
                                   <td><?php echo $datanilai['nis']?></td>
                                   <td><?php echo $datanilai['nama']?></td>
                                   <td><?php echo $datanilai['kelas']?></td>
                                   <td><?php echo $datanilai['semester']?></td>
                                   <td><?php echo $datanilai['nilai']?></td>
                                   <td>
                                       <a href="#" class="buttons">edit</a>
                                   </td>
                               </tr>
                           <?php $no++; } ?>
                           </tbody>
                       </table>
                   </div>
               </div>
           </div>
        </div>
    </div>
    <div class="modal fade" id="addnilai" tabindex="-1" role="dialog" aria-labelledby="addnilai"
         aria-hidden="true">
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