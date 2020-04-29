 <!DOCTYPE html>
<html>
<head>
	<title>Edit Data SPP</title>
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
						<h1>Edit Data SPP</h1>
					</div>
				</div>

				<div class="row">
					<form method="post" action="<?php echo site_url('c_spp/Proses_Edit/'.$spp->id_spp) ?>" class="form-group col-md-6">
						Tahun Ke
						<input type="text" name="tahun" placeholder="Masukan Tahun" value="<?php echo $spp->tahun ?>" class="form-control"> <br>
						Nominal 1 Tahun
						<input type="text" name="nominal" placeholder="Masukan Nominal" value="<?php echo $spp->nominal ?>" class="form-control"> <br>
						<button class="btn btn-sm btn-primary">Edit</button>
					</form>
				</div>
			</div>
		</section>
	</div>
</body>
</html>