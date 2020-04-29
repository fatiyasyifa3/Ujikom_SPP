<!DOCTYPE html>
<html>
<head>
	<title>Petugas</title>

	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>">
</head>
<body>
	<nav class="navbar navbar-expand navbar-dark bg-dark static-top">
    <a href="<?= site_url('petugas/home')?>" class="navbar-brand"><?= $this->session->userdata("nama_petugas")?></a>
	  <ul class="navbar-nav">
	  	<li class="nav-item">
	  		<a href="nav-link"></a>
	  	</li>
	    <li class="nav-item">
	      <a class="nav-link" href="<?php echo site_url('petugas/bayar') ?>">Bayar</a>
	    </li>
	    <li class="nav-item">
	      <a class="nav-link" href="<?php echo site_url('Pembayaran/Data_Pembayaran') ?>">Data Pembayaran</a>
	  	</li>
	  	<li class="nav-item">
	  		<a class="nav-link" href="<?php echo site_url('petugas/profile') ?>">Profile</a>
	  	</li>
	  </ul>
	</nav>

</body>
</html> 