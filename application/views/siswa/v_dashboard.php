<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 offset-2">
                <div class="card">
                    <div class="card-body">
                        <?php foreach ($siswa as $data_siswa) { ?>
                            <div class="form-group row">
                                <label class="form-label col-md-2">NIS</label>
                                <?php echo $data_siswa['nis'] ?>
                            </div>
                            <div class="form-group row">
                                <label class="form-label col-md-2">NAMA</label>
                                <?php echo $data_siswa['nama'] ?>
                            </div>
                            <div class="form-group row">
                                <label class="form-label col-md-2">KELAS</label>
                                <?php echo $data_siswa['kelas'] ?>
                            </div>
                            <div class="form-group row">
                                <label class="form-label col-md-2">TTL</label>
                                <?php echo $data_siswa['tempat_lahir'] . "&emsp;" . "/" . "&emsp;" . $data_siswa['tanggal_lahir'] ?>
                            </div>
                            <div class="form-group row">
                                <label class="form-label col-md-2">ALAMAT</label>
                                <?php echo $data_siswa['alamat'] ?>
                            </div>
                        <?php } ?>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary float-right" data-toggle="modal" data-target="#exampleModalScrollable">
                            EDIT
                        </button>
                    </div>
                </div>
                <!-- Modal -->
                <div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-scrollable" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalScrollableTitle">Modal title</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form class="form-horizontal" action="<?php echo base_url('siswa/edit/' . $data_siswa['nis']) ?>" method="post">
                                    <div class="form-group row">
                                        <label class="form-label col-md-2">NIS</label>
                                        <input type="text" class="form-control" value="<?php echo $data_siswa['nis'] ?>" disabled>
                                    </div>
                                    <div class="form-group row">
                                        <label class="form-label col-md-2">NAMA</label>
                                        <input type="text" class="form-control" value="<?php echo $data_siswa['nama'] ?>" disabled>
                                    </div>
                                    <div class="form-group row">
                                        <label class="form-label col-md-2">KELAS</label>
                                        <input type="text" class="form-control" value="<?php echo $data_siswa['kelas'] ?>" disabled>
                                    </div>
                                    <div class="form-group row">
                                        <label class="form-label col-md-2">TTL</label>
                                        <input type="text" class="form-control" value=" <?php echo $data_siswa['tempat_lahir'] . "&emsp;" . "/" . "&emsp;" . $data_siswa['tanggal_lahir'] ?>    " disabled>
                                    </div>
                                    <div class="form-group row">
                                        <label class="form-label col-md-2">Provinsi</label>
                                        <select class="form-control" id="provinsi" name="provinsi">
                                    </div>
                                    <div class="form-group row">
                                        <label class="form-label col-md-2">Kabupaten</label>
                                        <select class="form-control" id="kabupaten" name="kabupaten">
                                    </div>
                                    <div class="form-group row">
                                        <label class="form-label col-md-2">Kecamatan</label>
                                        <select class="form-control" id="kecamatan" name="kecamatan">
                                    </div>
                                    <div class="form-group row">
                                        <label class="form-label col-md-2">Kelurahan</label>
                                        <select class="form-control" id="kelurahan" name="kelurahan">
                                    </div>


                                    <div id="output"></div>

                                    <!-- <div class="form-group row">

                                        <input type="text" class="form-control" name="alamat" id="alamat" value="<?php echo $data_siswa['alamat'] ?>">
                                    </div> -->
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
    </div><!-- /.container-fluid -->
</section>
<!-- /.content -->

<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 offset-2">
                <p>
                    <div class="chartjs-wrapper"><canvas id="chartjs-1" class="chartjs" width="undefined" height="undefined"></canvas>
                        <script>
                            new Chart(document.getElementById("chartjs-1"), {
                                "type": "bar",
                                "data": {
                                    "labels ": [<?php
                                                foreach ($nilai_chart as $nilaichart) {
                                                    echo $nilaichart['kd']; // you can also use $row if you don't use keys                  
                                                }
                                                ?>],
                                    "datasets": [{
                                        "label": "My First Dataset",
                                        "data": [<?php
                                                    foreach ($nilai_chart as $nilaichart) {
                                                        echo "'" . $nilaichart['nilai'] . "', "; // you can also use $row if you don't use keys                  
                                                    }
                                                    ?>],
                                        "fill": false,
                                        "backgroundColor": ["rgba(255, 99, 132, 0.2)", "rgba(255, 159, 64, 0.2)", "rgba(255, 205, 86, 0.2)", "rgba(75, 192, 192, 0.2)", "rgba(54, 162, 235, 0.2)", "rgba(153, 102, 255, 0.2)", "rgba(201, 203, 207, 0.2)"],
                                        "borderColor": ["rgb(255, 99, 132)", "rgb(255, 159, 64)", "rgb(255, 205, 86)", "rgb(75, 192, 192)", "rgb(54, 162, 235)", "rgb(153, 102, 255)", "rgb(201, 203, 207)"],
                                        "borderWidth": 1
                                    }]
                                },
                                "options": {
                                    "scales": {
                                        "yAxes": [{
                                            "ticks": {
                                                "beginAtZero": true
                                            }
                                        }]
                                    }
                                }
                            });
                        </script>
                        <script src="http://api.iksgroup.co.id/apijs/lokasiapi.js"></script>
                        <script>
                            $(document).ready(function() {
                                var render = createwidgetlokasi("provinsi", "kabupaten", "kecamatan", "kelurahan");
                            });
                        </script>
                        <button type="button" id="show">GET DATA JSON</button>
                        <div id="output"></div>
                        <script>
                            $(document).ready(function() {
                                $("#show").click(function() {
                                    $("#output").html(trackdatalokasi);
                                });
                            });
                        </script>
                    </div>
                </p>
            </div>
        </div>
    </div>
</section>

<!-- chart nilai -->

</div>
<!-- /.content-wrapper -->