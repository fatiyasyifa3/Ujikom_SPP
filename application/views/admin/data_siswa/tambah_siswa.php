<!DOCTYPE html>
<html>
<head>
	<title>Tambah Data Siswa</title>
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
				</div>
			
			</section>

			<section class="duplicatable-content">
			
				<div class="container">
					<div class="row">
						<div class="col-md-12 text-center">
							<h1>Input Data Siswa</h1>
						</div>
					</div>

					<div class="row">
						<form method="post" action="<?php echo site_url('c_siswa/Proses_Tambah') ?>" class="form-group col-md-7">
						Nomor Induk Siswa Nasional
						<input type="text" name="nisn" placeholder="Masukan NISN" required="" class="form-control"> <br>
						Nomor Induk Siswa
						<input type="text" name="nis" placeholder="Masukan NIS" required="" class="form-control"> <br>
						Nama Lengkap
						<input type="text" name="nama" placeholder="Masukan Nama Lengkap" required="" class="form-control"> <br>
						Kelas
						<select name="kelas" required="" class="form-control">
							<option value="">Pilih Kelas</option>
							<?php foreach ($kelas as $k) { ?>
								<option value="<?php echo $k['id_kelas'] ?>"><?php echo $k['nama_kelas'].' '.$k['kompetensi_keahlian']; ?></option>
							<?php } ?>
						</select> <br>
						Nomor Telepon
						<input type="text" name="no_telp" placeholder="masukan nomor telepon" required="" class="form-control"><br>
						Alamat
						<textarea name="alamat" placeholder="Masukan Alamat" required="" class="form-control"></textarea> <br>
						ID SPP
						<input type="text" name="id_spp" placeholder="Masukan ID SPP" class="form-control"><br>
						<button class="btn btn-sm btn-primary">Tambah</button>
						</form>
					</div>
				</div>
			</section>
		</div>

	
</body>
</html>