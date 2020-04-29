<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Petugas</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="<?= base_url('assets/login/'); ?>fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="<?= base_url('assets/login/'); ?>css/style.css">
</head>
<body>

    <div class="main">

        <!-- Sing in  Form -->
        <section class="sign-in">
            <div class="container">
                <div class="signin-content">
                    <div class="signin-image">
                        <figure><img src="<?= base_url('assets/login/'); ?>images/signin-image.jpg" alt="sing up image"></figure>
                    </div>

                    <div class="signin-form">
                        <h2 class="form-title">Login Petugas</h2>
                        <form method="post" action="<?php echo site_url('c_login/Proses_Login') ?>" class="register-form" id="login-form">
                            <div class="form-group">
                                <label for="your_name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="username" id="your_name" placeholder="Username"/>
                            </div>
                            <div class="form-group">
                                <label for="your_pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="password" id="your_pass" placeholder="Password"/>
                            </div>
                            <div class="form-group form-button">
                            	<button name="signin" id="signin" class="form-submit">
                            		Login
                            	</button>
                                <!-- <input type="submit" name="signin" id="signin" class="form-submit" value="Log in"/> -->
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>

    </div>

    <!-- JS -->
    <script src="<?= base_url('assets/login/'); ?>vendor/jquery/jquery.min.js"></script>
    <script src="<?= base_url('assets/login/'); ?>js/main.js"></script>


   <!-- <center>
	<div class="card">
		
		<?php echo form_open('user/Proses_Login') ?>
			<div>
				<h4 style="padding: 40px 0 30px 0;">LOGIN</h4>
			</div>
			<div class="container">
				<div class="card-text col-md-11">
					<input type="text" name="nis" placeholder="Masukan NIS" required="" class="form-control"><br>
					<input type="password" name="password" placeholder="Masukan password" required="" class="form-control"><br>
					<button class="btn btn-success" style="width: 100%;">Login</button>
				</div>
			</div>
		<?php echo form_close() ?><br>

	</div>
	</center>  -->

</body>

</html>