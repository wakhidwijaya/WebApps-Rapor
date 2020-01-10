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
                <div class="col-md-5 mx-auto my-auto">
                    <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="carousel-caption">
                                    <p>sdasd</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="carousel-caption">
                                    <p>sdasgbergerg</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="carousel-caption">
                                    <p>nfgdfdsffasd</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mx-auto my-auto">
                    <div class="card text-white card-style mb-3">
                        <div class="card-body card-body">
                            <h2 class="text-center mb-2 text-dark">SMP N INDONESIA</h2>
                            <form method="post" action="<?php echo base_url("login") ?>">
                                <div class="form-group">
                                    <label>Username</label>
                                    <input type="text" class="form-control" name="username">
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="password" class="form-control" name="password">
                                </div>
                                <input type="submit" class="btn btn-block bg-dark text-white" value="LOGIN">
                            </form>
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