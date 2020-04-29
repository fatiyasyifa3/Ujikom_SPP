<!DOCTYPE html>
<html>
<head>
	<title>Pembayaran SPP</title>
</head>
<body>
	<br>
    <div id="container">
    	<div class="card w-50 mx-auto">
    		<div class="card-header bg-dark text-white">
				<h2>Cari Data Siswa</h2>
			</div><br>
    
			<div class="content-home">

				<form method="post" action="<?= site_url('C_pembayaran/cari_siswa') ?>" class="form-group col-md-6">
					Masukan NIS Siswa :
					<input type="text" name="nis" required="" placeholder="NIS Siswa..." class="form-control"><br>
					<button class="btn btn-sm btn-success">Cari</button>
				</form>
			</div>
    	</div>
    </div>
</body>
</html>