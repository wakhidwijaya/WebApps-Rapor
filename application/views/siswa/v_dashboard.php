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
                            "labels": ["January", "February", "March", "April", "May", "June", "July"],
                            "datasets": [{
                                "label": "My First Dataset",
                                "data": [65, 59, 80, 81, 56, 55, 40],
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
            </div>
        </p>
            </div>
        </div>
    </div>
</section>

<!-- chart nilai -->

</div>
<!-- /.content-wrapper -->