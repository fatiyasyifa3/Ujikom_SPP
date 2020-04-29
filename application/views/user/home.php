<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>">
    <title>PROFILE</title>
</head>
<body>
    <div id="container">
        <div class="card w-80 mx-auto">
        	    <div class="card-header">
                    <div class="form-row">
                        <h5><?= $this->session->userdata("nama")?></h5> &nbsp;&nbsp;&nbsp;&nbsp;
						<h5><a href="<?= site_url('user/Profile')?>">Profile</a></h5>
           	        </div>
                </div><br><br>
				<div class="col">
				
           	    </div>
				
                
                <?php $bulan 	= ['Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember']; ?>
		            <div class="container" style="border: 1px solid rgba(2,2,2,.1);border-radius: 2px;">
			            <div class="row">
				            <div class="col"><br>
					            <center><h6> Kelas X</h6></center><br>

					<div class="container">
                         <?php  
						    for ($i=0; $i < 12; $i++) { 
							$cek1 = count((array)$spp_tahun1[$i]);
							if($cek1 > 0){ ?>

						<div class="row" >
							<div class="col">
								<p ><?php echo $bulan[$i]; ?></p>
							</div>
							<div class="col">
								<button readonly="" class="btn btn-sm btn-success">Sudah di Bayar</button>
							</div>
						</div>
								
					<?php	}else{ ?>

						<div class="row">
							<div class="col">
								<p><?php echo $bulan[$i]; ?></p>
							</div>
							<div class="col">
	        					<button readonly="" class="btn btn-sm btn-danger">Belum Pembayaran</button>
	        				</div>
						</div>

					<?php	}
						}
					?>
					</div>
					<br><br>
				</div>



                <!-- DATA KELAS XI -->

                    <div class="col"><br>
					<center><h6>KELAS XI</h6></center><br>

					<div class="container">
					<?php  
						for ($i=0; $i < 12; $i++) { 
							$test = count((array)$spp_tahun2[$i]);
							if($test > 0){ ?>
								
						<div class="row" >
							<div class="col">
								<p><?= $bulan[$i]; ?></p>
							</div>
							<div class="col">
								<button readonly="" class="btn btn-sm btn-success">Sudah di Bayar</button>
							</div>
						</div>

					<?php	}else{ ?>
							
						<div class="row">
							<div class="col">
								<p><?= $bulan[$i]; ?></p>
							</div>
							<div class="col">
	        					<button readonly="" class="btn btn-sm btn-danger">belum Pembayaran</button>
	        				</div>
						</div>

					<?php 	}
						}
					?>
					</div>
					<br><br>
				</div>

                <div class="col"><br>
					<center><h6>KELAS XII</h6></center><br>

					<div class="container">
					<?php  
						for ($i=0; $i < 12; $i++) { 
							$cek3 = count((array)$spp_tahun3[$i]);
							if($cek3 > 0){ ?>

						<div class="row" >
							<div class="col">
								<p><?= $bulan[$i]; ?></p>
							</div>
							<div class="col">
								<button readonly="" class="btn btn-sm btn-success">Sudah di Bayar</button>
							</div>
						</div>

					<?php	}else{ ?>

						<div class="row">
							<div class="col">
								<p><?= $bulan[$i]; ?></p>
							</div>
							<div class="col">
	        					<button readonly="" class="btn btn-sm btn-danger">belum  Pembayaran</button>
	        				</div>
						</div>

					<?php	}
						}
					?>
					</div>
					<br><br>
				</div>
			</div>
			
			<div class="row">
				<div class="col">
					<p><b>Total Pembayaran :</b></p>
				</div>
				<div class="col">
					<?php 
						$total = 0;
						foreach($pembayaran as $p){
							$total = $total+$p['jumlah_bayar'];
						}
					?>
					<p><b>Rp.<?= $total; ?>;</b></p>
				</div>
			</div>

   
    	
        </div>	
    </div>	
</body>
</html>