<!DOCTYPE html>
<html lang="en"><head>
	<meta charset="UTF-8">
	<title></title>
	<style>table, tr, td{ border: 1px solid black } table{ border-collapse: collapse; } tr{height: 25px;}</style>
</head><body>
	<table>
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
	
</body></html>