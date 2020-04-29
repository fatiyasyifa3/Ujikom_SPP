<!DOCTYPE html>
<html lang="en">
<head>
	<title>Data Siswa</title>


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
					<a class="btn btn-outline-primary" href="<?php echo site_url('c_siswa/Tambah_Siswa') ?>">Tambah Data</a>
					<br>
					<div class="row">
						<table width="95%" cellspacing="0" class="table text-center table-sm table-bordered table-hover">
						<thead class="thead-dark">
					<tr>
						<th>No</th>
						<th>NISN</th>
						<th>NIS</th>
						<th>Nama</th>
						<th>Kelas</th>
						<th>Alamat</th>
						<th>NO Telepon</th>
						<th>SPP Tahun</th>
						<th>Option</th>
					</tr>
					</thead>
					<?php $no=1; ?>
					<?php foreach ($siswa as $s) { ?>
					<tr>
						<td><?php echo $no++ ?></td>
						<td><?php echo $s['nisn']; ?></td>
						<td><?php echo $s['nis']; ?></td>
						<td><?php echo $s['nama']; ?></td>
						<td><?php echo $s['nama_kelas'].' '.$s['kompetensi_keahlian']; ?></td>
						<td><?php echo $s['alamat']; ?></td>
						<td><?php echo $s['no_telp'] ?></td>
						<td><?php if ($s['tahun'] == '0') {
									  $tahun = 'Belum Bayar';
								  }else{
								  	$tahun = 'Tahun Ke'.$s['tahun'];
								  }
								  echo $tahun; ?>			
						</td>
						<td>
							<a class="btn btn-sm btn-primary" href="<?php echo site_url('c_siswa/Edit_Siswa/'.$s['nisn']) ?>">Edit</a>
							<a class="btn btn-sm btn-primary" href="<?php echo site_url('c_siswa/Hapus_Siswa/'.$s['nisn']) ?>" onclick="return confirm('Yakin Ingin Menghapus Data Ini')">Hapus</a>
						</td>
					</tr>
					<?php } ?>
					</table>
					</div>
				</div>
			</section>


		</div>




	

	<div class="table-resposive">
	
	</div>
	</div>
	</div>
	</div>


	<script src="https://www.youtube.com/iframe_api"></script>
		<script src="<?php echo site_url('js/jquery.min.js') ?>"></script>
        <script src="<?php echo site_url('js/jquery.plugin.min.js')?>"></script>
        <script src="<?php echo site_url('js/bootstrap.min.js')?>"></script>
        <script src="<?php echo site_url('js/jquery.flexslider-min.js')?>"></script>
        <script src="<?php echo site_url('js/smooth-scroll.min.js')?>"></script>
        <script src="<?php echo site_url('js/skrollr.min.js')?>"></script>
        <script src="<?php echo site_url('js/spectragram.min.js')?>"></script>
        <script src="<?php echo site_url('js/scrollReveal.min.js')?>"></script>
        <script src="<?php echo site_url('js/isotope.min.js')?>"></script>
        <script src="<?php echo site_url('js/twitterFetcher_v10_min.js')?>"></script>
        <script src="<?php echo site_url('js/lightbox.min.js')?>"></script>
        <script src="<?php echo site_url('js/jquery.countdown.min.js')?>"></script>
        <script src="<?php echo site_url('js/scripts.js')?>"></script>
</body>
</html>