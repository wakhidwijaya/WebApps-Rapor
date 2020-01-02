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
                <div class="col-md-4 offset-md-4 my-auto">
                    <div class="card text-white bg-info mb-3">
                        <div class="card-header mx-auto">
                            <h2>SMP N INDONESIA</h2>
                        </div>
                        <div class="card-body">
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
                        if($this->session->flashdata('errormsg')){

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
                    <?php if($this->session->flashdata('errormsg')){ ?>
                        <div class="card bg-danger text-light p-2 text-center">
                                <?php echo $this->session->flashdata('errormsg'); // Tampilkan pesannya ?>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>

        <script src="<?php echo base_url('assets/js/jquery-2.2.0.min.js'); ?>"></script>
        <script src="<?php echo base_url('assets/plugins/bootstrap/js/bootstrap.min.js'); ?>"></script>
    </body>

    </html>