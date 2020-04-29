<!DOCTYPE html>
<html>
<head>
	<title>Pembayaran SPP</title>
</head>
<body>
	<div class="card w-80 mx-auto">
    	<div class="card-body">
			<div class="card-header">
    	    	<h2> Data Siswa</h2>
    	    </div>

		<div class="form-row" >
			<div class="col">
				<br>
				<?php if ($siswa->id_spp == 4) {
						  $spp = '<p class="card-text" style="color: red;"><b>Belum bayar</b></p>';
				}else{
					$spp = '<p class="card-text" style="color: red;"><b>Tahun Ke '.$siswa->id_spp.'</b></p>';
				} ?>

				<center>
					<div class="form-row">
						<div class="form-grup cold-md-16">
							NISN
							<input type="text" readonly="" name="nisn" value="<?= $siswa->nisn?>" class="form-control">
						</div> <br>
						<div class="form-grup col-md-16">
							NIS
							<input type="text" readonly="" name="nis" value="<?= $siswa->nis?>" class="form-control">
						</div> <br>
						<div class="form-grup col-md-16">
							Nama
							<input type="text" readonly="" name="nama" value="<?= $siswa->nama?>" class="form-control">
						</div > <br>
						<div class="form-grup col-md-16">
							Alamat
							<input type="text" readonly="" name="alamat" value="<?= $siswa->alamat?>" class="form-control">
						</div> <br>
						<div class="form-grup col-md-16">
							NO.Telp
							<input type="text" readonly="" name="no_telp" value="<?= $siswa->no_telp?>" class="form-control">
						</div> <br>
						<div class="form-grup col-md-16">
							Kompetensi Keahlian
							<input type="text" readonly="" name="kelas" value="<?= $siswa->nama_kelas.' '.$siswa->kompetensi_keahlian?>" class="form-control">
						</div> <br>

						<div>
							<?= $spp; ?>
						</div><br>

					</div>
				</center>
			</div>
		</div>
	</div>

		<center><br>
			<h5>Pembayaran SPP</h5><br>
		</center>

		<div class="row">
			<div class="col"> 
				<center>
					<h6 style="padding: 10px;">Tahun Ke 1</h6>
				</center>

				<div class="container">
					<?php 
						$no 				= ['0','1','2','3','4','5','6','7','8','9','10','11'];
						$data_bulan_nomor 	= ['1','2','3','4','5','6','7','8','9','10','11','12'];
						$data_bulan_nama  	= ['Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember'];

						foreach($no as $bn){
							$hitung = count(( array)$ambil1[$bn]);
							
							if($hitung > 0){  ?>

							<div class="row" style="margin: 3px 0 3px 0;padding-top: 10px;border-radius: 2px;border: 1px solid rgba(2,2,2,.1);color: #333;background: rgba(200,200,200,.1);">
								<div class="col-md-4">
									<p style="text-align: left;"><?= $data_bulan_nama[$bn]; ?></p>
								</div>
								<div class="col">
								<button readonly="" class="btn btn-sm btn-success">Sudah di Bayar</button>
								</div>
							</div>

						<?php
							}else{ ?>

							<form method="post" action="<?= site_url('C_pembayaran/Proses_Bayar') ?>">
		 						<div class="row" style="margin: 3px 0 3px 0;padding-top: 10px;border-radius: 2px;border: 1px solid rgba(2,2,2,.1);color: #333;">
		 							<div class="col-md-5">
		 								<p style="text-align: left;"><?= $data_bulan_nama[$bn]; ?></p>
		 								<input type="hidden" name="nisn" value="<?= $siswa->nisn ?>">
		 								<input type="hidden" name="nis" value="<?= $siswa->nis ?>">
		 								<input type="hidden" name="bulan" value="<?= $data_bulan_nomor[$bn]; ?>">
		 								<input type="hidden" name="id_spp" value="1">
		 							</div>
		 							<div class="col">
		 							</div>
		 							<div class="col">
		 								<button class="btn btn-sm btn-danger">Bayar</button>
		 							</div>
		 						</div>
		 					</form>

						<?php		
							}
						}
					?>
				</div>
			</div>
				
				<!-- PEMBAYARAN KELAS XI KEN -->
		
			<div class="col">
				<center>
					<h6 style="padding: 10px;">Tahun Ke 2</h6>
				</center>

				<div class="container">
					<?php 
						foreach($no as $bn2 ){
							$hitung2 = count((array)$ambil2[$bn2]);

							if($hitung2 > 0){  ?>

							<div class="row" style="margin: 3px 0 3px 0;padding-top: 10px;border-radius: 2px;border: 1px solid rgba(2,2,2,.1);color: #333;background: rgba(200,200,200,.1);">
								<div class="col-md-4">
									<p style="text-align: left;"><?= $data_bulan_nama[$bn2]; ?></p>
								</div>
								<div class="col">
								<button readonly="" class="btn btn-sm btn-success">Sudah di Bayar</button>
								</div>
							</div>

						<?php
							}else{ ?>

							<form method="post" action="<?= site_url('C_pembayaran/Proses_Bayar') ?>">
		 						<div class="row" style="margin: 3px 0 3px 0;padding-top: 10px;border-radius: 2px;border: 1px solid rgba(2,2,2,.1);color: #333;">
		 							<div class="col-md-5">
		 								<p style="text-align: left;"><?= $data_bulan_nama[$bn2]; ?></p>
		 								<input type="hidden" name="nisn" value="<?= $siswa->nisn ?>">
		 								<input type="hidden" name="nis" value="<?= $siswa->nis ?>">
		 								<input type="hidden" name="bulan" value="<?= $data_bulan_nomor[$bn2]; ?>">
		 								<input type="hidden" name="id_spp" value="2">
		 							</div>
		 							<div class="col">
		 							</div>
		 							<div class="col">
		 								<?php if($numrows_1 < 12){ ?>
		 								<?php }else{ ?>
		 									<button class="btn btn-sm btn-danger">Bayar</button>
		 								<?php } ?>
		 							</div>
		 						</div>
		 					</form>

						<?php		
							}
						}
					?>
				</div>
			</div>
			<!-- PEMBAYARAN KELAS XII-->
			<div class="col">
				<center>
					<h6 style="padding: 10px;">Tahun Ke 3</h6>
				</center>

				<div class="container">
					<?php 
						foreach($no as $bn3){
							$hitung3 = count ((array)$ambil3[$bn3]);

							if($hitung3 > 0){  ?>

							<div class="row" style="margin: 3px 0 3px 0;padding-top: 10px;border-radius: 2px;border: 1px solid rgba(2,2,2,.1);color: #333;background: rgba(200,200,200,.1);">
								<div class="col-md-6">
									<p style="text-align: left;"><?= $data_bulan_nama[$bn3]; ?></p>
								</div>
								<div class="col">
									<button readonly="" class="btn btn-sm btn-success">Sudah di Bayar</button>
									
								</div>
							</div>

						<?php
							}else{ ?>

							<form method="post" action="<?= site_url('C_pembayaran/Proses_Bayar') ?>">
		 						<div class="row" style="margin: 3px 0 3px 0;padding-top: 10px;border-radius: 2px;border: 1px solid rgba(2,2,2,.1);color: #333;">
		 							<div class="col-md-5">
		 								<p style="text-align: left;"><?= $data_bulan_nama[$bn3]; ?></p>
		 								<input type="hidden" name="nisn" value="<?= $siswa->nisn ?>">
		 								<input type="hidden" name="nis" value="<?= $siswa->nis ?>">
		 								<input type="hidden" name="bulan" value="<?= $data_bulan_nomor[$bn3]; ?>">
		 								<input type="hidden" name="id_spp" value="3">
		 							</div>
		 							<div class="col">
		 							</div>
		 							<div class="col">
		 								<?php if($numrows_2 < 12){ ?>
		 								<?php }else{ ?>
		 									<button class="btn btn-sm btn-danger">Bayar</button>
		 								<?php } ?>
		 							</div>
		 						</div>
		 					</form>

						<?php		
							}
						}
					?>
			</div>
		</div>

	</div>
</body>
</html>