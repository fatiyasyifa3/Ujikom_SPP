<!DOCTYPE html>
<html>
<head>
	<title>Edit Data Kelas</title>
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
						<h1>Edit Data Kelas</h1>
					</div>
				</div>

				<div class="row">
					<form method="post" action="<?php echo site_url('c_kelas/Proses_Edit/'.$kelas->id_kelas) ?>" class="form-group col-md-6">
						Kelas
						<input type="text" name="kelas" required="" value="<?php echo $kelas->nama_kelas ?>" class="form-control"> <br>
						Kompetensi Keahlian
						<input type="text" name="kompetensi" placeholder="Kompetensi Keahlian" value="<?php echo $kelas->kompetensi_keahlian ?>" class="form-control"> <br>
						<button class="btn btn-sm btn-primary" >Edit</button>
					</form>
				</div>
			</div>
		</section>
	</div>

</body>
</html>