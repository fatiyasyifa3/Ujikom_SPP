<!DOCTYPE html>
<html>
<head>
	<title>Edit Data Siswa</title>
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
						<h1>Edit Data Siswa</h1>
					</div>
				</div>

				<div class="row">
					<form method="post" action="<?php echo site_url('c_siswa/Proses_Edit') ?>" class="form-group col-md-6">
					Nomor Induk Siswa Nasional
					<input type="text" name="nisn" placeholder="Masukan NISN" required="" value="<?php echo $siswa->nisn ?>" class="form-control"> <br>
					Nomor Induk Siswa
					<input type="text" name="nis" placeholder="Masukan NIS" required="" value="<?php echo $siswa->nis ?>" class="form-control"> <br>
					Nama Lengkap
					<input type="text" name="nama" placeholder="Masukan Nama Lengkap" required="" value="<?php echo $siswa->nama ?>" class="form-control"> <br>
					Kelas
					<input type="hidden" name="kelas" value="<?php echo $siswa->id_kelas ?>" class="form-control">
					<input type="text" name="kelas-tampil" value="<?php echo $siswa->nama_kelas.' '.$siswa->kompetensi_keahlian; ?>" class="form-control"> <br>
					Nomor Telepon
					<input type="text" name="no_telp" placeholder="masukan nomor telepon" required="" value="<?php echo $siswa->no_telp ?>" class="form-control"><br>
					Alamat
					<textarea name="alamat" placeholder="Masukan Alamat" required="" class="form-control"><?php echo $siswa->alamat ?></textarea> <br>
					SPP Tahun Ke :
					<input type="text" name="id_spp" placeholder="id_spp" required="" value="<?php echo $siswa->id_spp ?>" class="form-control"> <br>
					<button class="btn btn-sm btn-primary">Simpan</button>
					</form>
				</div>
			</div>
		</section>
	</div>
</body>
</html>