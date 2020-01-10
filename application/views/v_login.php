<php <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/custom.css'); ?>">
        <link rel="stylesheet" href="<?php echo base_url('assets/plugins/bootstrap/css/bootstrap.min.css'); ?>">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/plugins/Font-Awesome/4.3.0/css/font-awesome.min.css'); ?>">
        <title>Rapor - Online</title>
    </head>

    <body id="bg-login">
        <div class="container">
            <div class="row h-100">
                <div class="col-md-8 offset-2 my-auto">
                    <div class="card card-custom mb-3">
                        <div class="card-body row">
                                <div class="col-md-6">
                                    <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                                        <div class="carousel-inner">
                                            <div class="carousel-item active">
                                                <div class="carousel-caption text-dark">
                                                    <p>FITUR</p>
                                                    <p>Login Siswa</p>
                                                    <p>Cek Data Diri</p>
                                                    <p>Cek Nilai</p>
                                                    <p>Cek Jadwal Pelajaran</p>
                                                    <p>Chart Nilai</p>
                                                </div>
                                            </div>
                                            <div class="carousel-item">
                                                <div class="carousel-caption text-dark">
                                                    <p>Login Guru</p>
                                                    <p>Cek Data Diri</p>
                                                    <p>Cek Nilai</p>
                                                    <p>Cek Jadwal Mengajar</p>
                                                    <p>Update Delete Materi</p>
                                                </div>
                                            </div>
                                            <div class="carousel-item">
                                                <div class="carousel-caption text-dark">
                                                    <p>Update Nilai Siswa</p>
                                                    <p>Report Tiap kelas</p>
                                                    <p>Chart Nilai tiap kelas</p>
                                                    <p>Wali Kelas</p>
                                                    <p>rapor siswa kelas</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h3 class="card-title text-center mb-3 text-dark">SMP N INDONESIA</h2>
                                        <form method="post" action="<?php echo base_url("login") ?>" class="form-custom mt-4">
                                            <div class="form-label-group">
                                                <input type="text" id="inputuName" class="form-control" placeholder="username" name="username">
                                                <label for="inputuName">Username</label>
                                            </div>
                                            <div class="form-label-group">
                                                <input type="password" id="inputPassword" class="form-control mt-3" placeholder="Password" name="password">
                                                <label for="inputPassword">Password</label>
                                            </div>
                                            <input type="submit" class="btn btn-block bg-dark text-white mt-5" value="LOGIN">
                                        </form>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php
        if ($this->session->flashdata('errormsg')) {
        }
        ?>

        <div class="modal fade in" id="modalerror" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        asu
                    </div>
                </div>
            </div>
        </div>
        <?php if ($this->session->flashdata('errormsg')) { ?>
            <div class="card bg-danger text-light p-2 text-center">
                <?php echo $this->session->flashdata('errormsg'); // Tampilkan pesannya 
                ?>
            </div>
        <?php } ?>
        </div>
        </div>
        </div>

        <script src="<?php echo base_url('assets/js/jquery-2.2.0.min.js'); ?>"></script>
        <script src="<?php echo base_url('assets/plugins/bootstrap/js/bootstrap.min.js'); ?>"></script>
    </body>

    </html>