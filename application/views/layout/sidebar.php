	<aside class="main-sidebar">
		<section class="sidebar">
		    <div class="user-panel">
				<div class="pull-left image">
					<img src="<?php echo base_url('assets/img/profile1.jpg') ?>" class="img-circle" alt="User Image">
				</div>

				<div class="pull-left info">
					<p><?=$this->session->userdata('user_username');?></p>
					<a href="#" style="color:#6b6b6b" ><i style="color: green" class="fa fa-circle text-success" ></i> Online</a>
				</div>
			</div>

			<ul style="font-weight: bold"  class="sidebar-menu">
				<li class="header">
					<small>MAIN NAVIGATION</small>
				</li>
				<?php foreach ($menu as $key => $val): ?>
				<li>
					<a href="<?=base_url() . $val['controller_name'] . '/' . $val['action_name'] ?>"><i class="fa fa-<?=!empty($val['menu_icon']) ? $val['menu_icon'] : 'home' ?>"></i><span><?=$val['menu_name'] ?></span></a>
				</li>
				<?php endforeach ?>
				<!-- <li>
					<a href="<?php echo base_url('dasboard') ?>"><i class="fa fa-home"></i><span>Dashboard</span></a>
				</li>
				<li>
					<a href="<?php echo base_url('account') ?>"><i class="fa fa-users"></i><span>Account</span></a>
				</li>
				<li>
					<a href="<?php echo base_url('update') ?>"><i class="fa fa-tv"></i><span>Update Data</span></a>
				</li>
				<li>
					<a href="<?php echo base_url('monitoring') ?>"><i class="fa fa-tv"></i><span>Monitoring</span></a>
				</li> -->
			</ul>
		</section>
	</aside>
	<div class="wrapper">
		<div class="content-wrapper">