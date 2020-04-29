 <!DOCTYPE html>
<html>
<head>
	<title>Edit Data Petugas</title>
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
					<div class="col-md-12 text-center">
						<h1>Edit Data Petugas</h1>
					</div>
				</div>

				<div class="row">
					<form method="post" action="<?php echo site_url('c_petugas/Proses_Edit/'.$petugas->id_petugas) ?>" class="form-group col-md-6">
						Nama Petugas
						<input type="text" name="nama" placeholder="Masukan Nama" value="<?php echo $petugas->nama_petugas ?>" class="form-control"> <br>
						Level
						<input type="text" name="level" placeholder="Masukan Level" value="<?php echo $petugas->level ?>" class="form-control"> <br>
						Username
						<input type="text" name="username" value="<?php echo $petugas->username ?>" class="form-control"><br>
						Password
						<input type="text" name="password" placeholder="Masukan password" value="<?php echo $petugas->password ?>" class="form-control"> <br>
						<button class="btn btn-sm btn-primary">Edit</button>
					</form>
				</div>
			</div>
		</section>
	</div>

</body>
</html>