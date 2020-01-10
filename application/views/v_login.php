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
                    <div class="row">
                        <div class="col-md-6 my-auto card-custom-left">
                                <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <blockquote class="text-center p-5">
                                                <p><small>SPARC!</small></p>
                                                <h4 class="font-weight-bold card-title mt-5 text-center text-white">WELCOME TO RAPO</h4>
                                                <p><small><b class="text-warning">Manajemen Nilai dan Rapor Sekolah berbasis Web.</b></small></p>
                                                <p>
                                                    <small>
                                                        <i>"Web Aplikasi menejemen nilai dan raport online sekolah terdiri dari dua level,
                                                            yaitu Siswa dan Guru."</i> <br/><br/>
                                                        <span class="text-warning">Next <i class="fa fa-arrow-right"></i></span>
                                                    </small>
                                                </p>
                                            </blockquote>
                                        </div>
                                        <div class="carousel-item">
                                            <blockquote class="text-center p-5">
                                                <p><small>SPARC!</small></p>
                                                <h4 class="font-weight-bold card-title mt-2 text-center text-white">RAPO - SISWA</h4>
                                                <small>
                                                    <ul class="list-group text-light">
                                                        <li class="list-group-item bg-transparent">Login Siswa</li>
                                                        <li class="list-group-item bg-transparent">Cek Data Diri</li>
                                                        <li class="list-group-item bg-transparent">Cek Nilai</li>
                                                        <li class="list-group-item bg-transparent">Cek Jadwal Pelajaran</li>
                                                        <li class="list-group-item bg-transparent">Chart Nilai</li>
                                                    </ul>
                                                </small>
                                                <small class="mt-1"><span class="text-warning">Next <i class="fa fa-arrow-right"></i></span></small>
                                            </blockquote>
                                        </div>
                                        <div class="carousel-item">
                                            <blockquote class="text-center p-5">
                                                <p><small>SPARC!</small></p>
                                                <h4 class="font-weight-bold card-title mt-2 text-center text-white">RAPO - GURU</h4>
                                                <small>
                                                    <ul class="list-group text-light">
                                                        <li class="list-group-item bg-transparent">Login Guru</>
                                                        <li class="list-group-item bg-transparent">Cek Data Diri</>
                                                        <li class="list-group-item bg-transparent">Cek Nilai</>
                                                        <li class="list-group-item bg-transparent">Cek Jadwal Mengajar</>
                                                        <li class="list-group-item bg-transparent">Update Delete Materi</>
                                                    </ul>
                                                </small>
                                            </blockquote>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <div class="col-md-6 bg-white card-custom-right text-center ">
                            <h3 class="font-weight-bold card-title mt-5 text-dark">SMP N INDONESIA</h3>
                                <small><b>SIGN IN</b></small>
                                <form method="post" action="<?php echo base_url("login") ?>" class="form-custom mt-4">
                                    <div class="form-label-group">
                                        <input type="text" id="inputuName" class="form-control" placeholder="username" name="username">
                                        <label for="inputuName">Username</label>
                                    </div>
                                    <div class="form-label-group">
                                        <input type="password" id="inputPassword" class="form-control mt-3" placeholder="Password" name="password">
                                        <label for="inputPassword">Password</label>
                                    </div>
                                    <div class="form-label-group float-right">
                                        <a href="#"><small><i> forgot your password ?</i></small></a>
                                    </div>
                                    <input type="submit" class="btn btn-block bg-secondary text-white" value="LOGIN">
                                </form>
                        </div>
                    </div>
                </div>
            </div>
<!--                            --><?php //if ($this->session->flashdata('errormsg')) { ?>
<!--                                <div class="toast" role="alert" aria-live="assertive" aria-atomic="true">-->
<!--                                    <div class="toast-header">-->
<!--                                        <img src="..." class="rounded mr-2" alt="...">-->
<!--                                        <strong class="mr-auto">Bootstrap</strong>-->
<!--                                        <small class="text-muted">just now</small>-->
<!--                                        <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">-->
<!--                                            <span aria-hidden="true">&times;</span>-->
<!--                                        </button>-->
<!--                                    </div>-->
<!--                                    <div class="toast-body">-->
<!--                                    --><?php //echo $this->session->flashdata('errormsg'); // Tampilkan pesannya?>
<!--                                    </div>-->
<!--                                </div>-->
<!--                            --><?php //} ?>
        </div>

        <script src="<?php echo base_url('assets/js/jquery-2.2.0.min.js'); ?>"></script>
        <script src="<?php echo base_url('assets/plugins/bootstrap/js/bootstrap.min.js'); ?>"></script>
    </body>

    </html>