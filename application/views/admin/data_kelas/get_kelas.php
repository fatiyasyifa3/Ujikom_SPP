<!DOCTYPE html>
<html>
<head>
	<title>Data Kelas</title>
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
				<a class="btn btn-outline-primary" href="<?php echo site_url('c_kelas/Tambah_Kelas') ?>">Tambah Data</a>
				<div class="row">
					<table width="95%" cellspacing="0" class="table text-center table-sm table-bordered table-hover">
					<thead class="thead-dark">
					<tr>
						<th>No</th>
						<th>Kelas</th>
						<th>Kompetensi Keahlian</th>
						<th>Option</th>
					</tr>
					</thead>
					<?php $no=1; ?>
					<?php foreach ($kelas as $k) { ?>
						<tr>
							<td><?php echo $no++ ?></td>
							<td><?php echo $k['nama_kelas'] ?></td>
							<td><?php echo $k['kompetensi_keahlian'] ?></td>
							<td>
								<a class="btn btn-sm btn-primary" href="<?php echo site_url('c_kelas/Edit_Kelas/'.$k['id_kelas']) ?>">Edit</a>
								<a class="btn btn-sm btn-primary" href="<?php echo site_url('c_kelas/Hapus_Kelas/'.$k['id_kelas']) ?>" onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus</a>
							</td>
						</tr>
					<?php } ?>
					</table>
				</div>
			</div>
		</section>
	</div>

</body>
</html>