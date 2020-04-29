<!DOCTYPE html>
<html>
<head>
	<title>Profile</title>
	<link rel="stylesheet" type="text/css" href="<?php echo site_url('assets/bootstrap/css/bootstrap.min.css') ?>">
</head>
<body>


	<div class="main-container">
		<section class="duplicatable-content">
			<div class="container">
				<div class="row">
					<div class="col-md-12 text-center">		
					</div>
				</div>
				<div class="row">
					<div class="col-md-3 col-sm-6">
						<div class="feature feature-icon-large">
						</div>
					</div>					
				<div class="col-md-3 col-sm-6">
					<div class="feature feature-icon-large">							
					</div>
				</div>
				<div class="col-md-3 col-sm-6">
						<div class="feature feature-icon-large">
					</div>
				</div>										
				<div class="col-md-3 col-sm-6">
					<div class="feature feature-icon-large">
					</div>
				</div>				
			</div>	
		</section>
		
		
		<section class="duplicatable-content">
			
			<div class="container">
				<div class="row">
					<div class="ard w-50 mx-auto text-black">
			<div class="card-body">
				<h5 class="card-header">Profile</h5> <br>

				<div class="row">
					<div class="form-grup col-md-4">
						<p>Nama</p>
					</div>
					<div class="form-grup col-md-4">
						<p class="card-text"><?php echo $profile->nama_petugas; ?></p> 
					</div>
				</div>

				<div class="row">
					<div class="form-grup col-md-4">
						<p>Username</p>
					</div>
					<div class="form-grup col-md-4">
						<p class="card-text"><?php echo $profile->username; ?></p> 
					</div>
				</div> 
			</div> <br>

			<center>
				<a class="btn btn-sm btn-danger" href="<?php echo site_url('welcome/index') ?>">Logout</a>
			</center>
			
		</div>
				</div>
			</div>
		</section>
	</div>





	<div id="container">
		
	</div>
</body>
</html>