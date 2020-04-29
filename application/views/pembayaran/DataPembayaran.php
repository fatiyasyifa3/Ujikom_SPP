<!DOCTYPE html>
<html lang="en">
<head>
	<title>Data Pembayaran</title> 
</head>
<body><br>

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
				<a href="<?php echo site_url('pembayaran/pdf') ?>" class="btn btn-primary">EXPORT PDF</a>

				<div class="row">
					<table width="95%" cellspacing="0" class="table text-center table-sm table-bordered table-hover">
					<thead class="thead-dark">
					<tr>
						<td>No</td>
						<td>Petugas</td>
						<td>NIS</td>
						<td>Nama</td>
						<td>Tanggal Pembayaran</td>
						<td>Bulan Bayar</td>
						<td>Tahun Bayar</td>
						<td>Jumlah Bayar</td>
					</tr>
					</thead>
					<?php 
						$no = 1;
						$bulanbayar = 0;
						$jumlahbayar = 0;

						$data_bulan_nama = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];
						foreach ($pembayaran as $p) {
							for($i=0; $i < $p['bulan_bayar']; $i++) {
								$nama_bulan = $data_bulan_nama[$i];
						}
					 ?>
					 <tr>
					 	<td><?php echo $no++ ?></td>
					 	<td><?php echo $p['nama_petugas'] ?></td>
					 	<td><?php echo $p['nis'] ?></td>
					 	<td><?php echo $p['nama'] ?></td>
					 	<td><?php echo $p['tgl_bayar'] ?></td>
					 	<td><?php echo $nama_bulan; ?></td>
					 	<td><?php echo 'Tahun Ke'.$p['tahun_bayar'] ?></td>
					 	<td><?php echo 'Rp.'.$p['jumlah_bayar'].';' ?></td>

					 </tr>
					 <?php 
					 	$bulanbayar = $bulanbayar+$p['bulan_bayar'];
					 	$jumlahbayar = $jumlahbayar+$p['jumlah_bayar'];
					  } ?>
					  <tr>
					  	<td colspan="7">Total : </td>
					  	<td colspan="2"><?php echo 'Rp.'.$jumlahbayar.';'; ?></td>
					  </tr>
				</table>
				</div>
			</div>
		</section>
	</div>

</body>
</html>