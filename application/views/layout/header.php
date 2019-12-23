<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Raport-Online</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/adminlte/plugins/fontawesome-free/css/all.min.css">

  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/adminlte/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/adminlte/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/adminlte/plugins/jqvmap/jqvmap.min.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/adminlte/dist/css/adminlte.min.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/adminlte/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/adminlte/plugins/daterangepicker/daterangepicker.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/adminlte/plugins/summernote/summernote-bs4.css">
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <style>
    canvas {
      -moz-user-select: none;
      -webkit-user-select: none;
      -ms-user-select: none;
    }
  </style>
  <script src="<?php echo base_url() ?>assets/Chart.js-2.9.3/dist/Chart.min.js"></script>
  <script src="<?php echo base_url() ?>assets/Chart.js-2.9.3/samples/utils.js"></script>
</head>

<body class="hold-transition sidebar-mini layout-fixed text-sm">
  <div class="wrapper">

    <nav class="main-header navbar navbar-expand navbar-dark navbar-info">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown">
          <a class="nav-link" data-toggle="dropdown" href="#">
            <i class="fas fa-th-large"></i>
          </a>
          <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
            <div class="container">
              <div>
                You are logged :
                <div><label><?= $this->session->userdata('nama'); ?></label></div>
              </div>
              <small>
                <a href="#">
                  <i style="color: green" class="fa fa-circle fa-1x text-success disabled"></i> Online
              </small>
            </div>
            <div class="dropdown-divider"></div>
            <a href="<?php echo base_url('logout') ?>" class="dropdown-item dropdown-footer">Logout</a>
          </div>
        </li>

      </ul>
    </nav>