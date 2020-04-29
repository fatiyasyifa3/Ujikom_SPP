 <!DOCTYPE html>
<html>
<head>
	<title>Data Petugas</title>
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
				<a class="btn btn-outline-primary" href="<?php echo site_url('c_petugas/Tambah_Petugas') ?>">Tambah Data</a>
				<div class="row">
					<table width="95%" cellspacing="0" class="table text-center table-sm table-bordered table-hover">
						<thead class="thead-dark">
						<tr>
							<th>No</th>
							<th>Nama Petugas</th>
							<th>level</th>
							<th>Username</th>
							<th>Option</th>
						</tr>
						</thead>
						<?php $no=1; ?>
						<?php foreach ($petugas as $p) { ?>
							<tr>
								<td><?php echo $no++ ?></td>
								<td><?php echo $p['nama_petugas'] ?></td>
								<td><?php echo $p['level'] ?></td>
								<td><?php echo $p['username'] ?></td>
								<td>
									<a class="btn btn-sm btn-primary" href="<?php echo site_url('c_petugas/Edit_Petugas/'.$p['id_petugas']) ?>">Edit</a>
									<a class="btn btn-sm btn-primary" href="<?php echo site_url('c_petugas/Hapus_Petugas/'.$p['id_petugas']) ?>" onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus</a>
								</td>
							</tr>
						<?php } ?>
					</table>

</body>
</html>