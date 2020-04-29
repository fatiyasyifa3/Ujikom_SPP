<!DOCTYPE html>
<html>
<head>
	<title>Tambah Data Kelas</title>
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
					<form method="post" action="<?php echo site_url('c_spp/Proses_Tambah') ?>" class="form-group col-md-6">
						Tahun Ke
						<input type="text" name="tahun" placeholder="Masukan Tahun" class="form-control"> <br>
						Nominal 1 Tahun
						<input type="text" name="nominal" placeholder="Masukan Nominal" class="form-control"> <br>
						<button class="btn btn-sm btn-primary">Tambah</button>
					</form>
				</div>
			</div>
		</section>
	</div>

</body>
</html>