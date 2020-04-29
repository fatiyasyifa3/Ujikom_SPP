 <!DOCTYPE html>
<html>
<head>
	<title>Tambah Data petugas</title>
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
						<h1>Tambah data </h1>
					</div>
				</div>

				<div class="row">
					<form method="post" action="<?php echo site_url('c_petugas/Proses_Tambah') ?>" class="form-group col-md-6">
						Nama Petugas
						<input type="text" name="nama" placeholder="Masukan Nama" class="form-control"> <br>
						Level
						<select name="level" class="form-control">
							<option value="">Pilih Level</option>
							<option value="admin">Admin</option>
							<option value="petugas">Petugas</option>
						</select> <br>
						Username
						<input type="text" name="username" placeholder="Masukan Username" class="form-control"> <br>
						Password
						<input type="password" name="password" placeholder="Masukan Password" class="form-control"> <br>
						<button class="btn btn-sm btn-primary">Tambah</button>
					</form>
				</div>
			</div>
		</section>
	</div>

</body>
</html>