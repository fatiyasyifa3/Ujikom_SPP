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
						<h1>Tambah Data</h1>
					</div>
				</div>

				<div class="row">
					<form method="post" action="<?php echo site_url('c_kelas/Proses_Tambah') ?>" class="form-group col-md-6">
						Kelas
						<select name="kelas" class="form-control">
							<option value="">Pilih Kelas</option>
							<option value="X">X (Sepuluh)</option>
							<option value="XI">XI (Sebelas)</option>
							<option value="XII">XII (Dua Belas)</option>
						</select> <br>
						Kompetensi Keahlian
						<input type="text" name="kompetensi" placeholder="Kompetensi Keahlian" class="form-control"> <br>
						<button class="btn btn-sm btn-primary" >Tambah</button>
					</form>
				</div>
			</div>
		</section>
	</div>

</body>
</html>