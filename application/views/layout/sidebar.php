<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <a href="<?php echo base_url() ?>" class="brand-link">
    <img src="<?php echo base_url() ?>assets/adminlte/dist/img/AdminLTELogo.png" alt="Smanindo" class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-bold">SMP N INDONESIA</span>
  </a>

  <div class="sidebar">
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="text-white">
        <i class="fa fa-user-circle fa-3x img-circle elevation-2"></i>
      </div>
      <div class="info">
        <a href="<?php echo base_url() ?>" class="d-block"><?php echo $this->session->userdata('nama') . " - " . $this->session->userdata('username') ?></a>
        <small class="text-light"><i class="fa  text-success fa-circle fa-1x disabled"></i> Online</small>
      </div>
    </div>

    <nav id="guru" class="mt-2 <?php if ($this->session->userdata('status') == 1) {
                                  echo 'd-none';
                                } ?>">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <li class="nav-item">
          <a href="<?php echo base_url() ?>" class="nav-link <?php if ($this->uri->segment(2) == "") {
                                                                echo 'active';
                                                              } ?>">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>Dashboard</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="<?php echo base_url('guru/jadwal') ?>" class="nav-link   <?php if ($this->uri->segment(2) == "jadwal") {
                                                                              echo 'active';
                                                                            } ?>">
            <i class="nav-icon fas fa-calendar-alt"></i>
            <p>Jadwal Mengajar</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="<?php echo base_url('guru/rombel') ?>" class="nav-link  <?php if ($this->uri->segment(2) == "rombel") {
                                                                              echo 'active';
                                                                            } ?>">
            <i class="nav-icon fas fa-list-ul"></i>
            <p>Nilai Siswa</p>
          </a>
        </li>
        <li class="nav-item has-treeview">
          <a href="#" class="nav-link   <?php if ($this->uri->segment(2) == "wali") {
                                          echo 'active';
                                        } ?>">
            <i class="nav-icon fas fa-users"></i>
            <p>Wali Kelas</p>
            <i class="fas fa-angle-left right"></i>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="<?php echo base_url('guru/wali') ?>" class="nav-link">
                  <i class="fas fa-chalkboard-teacher"></i>
                <p>Kelas</p>
              </a>
            </li>
          </ul>
        </li>
      </ul>
    </nav>
    <nav id="siswa" class="mt-2 <?php if ($this->session->userdata('status') == 2) {
                                  echo 'd-none';
                                } ?>">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <li class="nav-item">
          <a href="<?php echo base_url() ?>" class="nav-link <?php if ($this->uri->segment(2) == "") {
                                                                echo 'active';
                                                              } ?>">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>Dashboard</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="<?php echo base_url('siswa/jadwal') ?>" class="nav-link <?php if ($this->uri->segment(2) == "jadwal") {
                                                                              echo 'active';
                                                                            } ?>">
            <i class="nav-icon fas fa-calendar-alt"></i>
            <p>Jadwal Sekolah</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="<?php echo base_url('siswa/nilai') ?>" class="nav-link <?php if ($this->uri->segment(2) == "nilai") {
                                                                            echo 'active';
                                                                          } ?>">
            <i class="nav-icon fas fa-list-ul"></i>
            <p>Nilai</p>
          </a>
        </li>
        <!-- <li class="nav-header">MISCELLANEOUS</li>
        <li class="nav-item">
          <a href="https://adminlte.io/docs/3.0" class="nav-link">
            <i class="nav-icon fas fa-file"></i>
            <p>Documentation</p>
          </a>
        </li> -->
      </ul>
    </nav>

  </div>
</aside>

<div class="content-wrapper">
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Dashboard
            <?php if ($this->session->userdata('status') == 2) {
              echo "Guru";
            } else {
              echo "Siswa";
            } ?>
          </h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="<?php echo base_url($this->uri->segment(1)) ?>">Home</a></li>
            <li class="breadcrumb-item active"><?php echo $this->uri->segment(2) ?></li>
          </ol>
        </div>
      </div>
    </div>
  </div>