<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HOLLA</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="<?= base_url('assets/login/'); ?>fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="<?= base_url('assets/login/'); ?>css/style.css">

    <!-- btn -->
        <link href="<?= base_url('assets/'); ?>css/flexslider.min.css" rel="stylesheet" type="text/css" media="all"/>
        <link href="<?= base_url('assets/'); ?>css/line-icons.min.css" rel="stylesheet" type="text/css" media="all"/>
        <link href="<?= base_url('assets/'); ?>css/elegant-icons.min.css" rel="stylesheet" type="text/css" media="all"/>
        <link href="<?= base_url('assets/'); ?>css/lightbox.min.css" rel="stylesheet" type="text/css" media="all"/>
        <link href="<?= base_url('assets/'); ?>css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all"/>
        <link href="<?= base_url('assets/'); ?>css/theme-1.css" rel="stylesheet" type="text/css" media="all"/>
        <link href="<?= base_url('assets/'); ?>css/custom.css" rel="stylesheet" type="text/css" media="all"/>
</head>
<body>

    <div class="main">



        <!-- Sign up form -->
        <!-- <section class="signup"> -->
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <img class="logo logo-dark" alt="Logo" src="<?php echo site_url('assets/img/logo.png') ?>">
                        <br><br><br>
                        <div class="col-sm-12 col-md-10 col-md-offset-1 ">
                        <a class="btn btn-primary btn-primary" href="<?php echo site_url('c_login/index') ?>">Login Petugas</a>
                        <br>
                        <a  class="btn btn-primary btn-primary"href="<?php echo site_url('user/index') ?>" id="signin" class="form-sumbit">Login Siswa</a>
                        </div>
                        
                    
                    </div>
                    <div class="signup-image">
                        <figure><img src="<?= base_url('assets/login/'); ?>images/signup-image.jpg" alt="sing up image"></figure>
                        
                    </div>
                </div>
            </div>
        </section>
     </div>

    <!-- JS -->
    <script src="<?= base_url('assets/login/'); ?>vendor/jquery/jquery.min.js"></script>
    <script src="<?= base_url('assets/login/'); ?>js/main.js"></script>

    <!-- btn -->
        <script src="js/jquery.min.js"></script>
        <script src="js/jquery.plugin.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.flexslider-min.js"></script>
        <script src="js/smooth-scroll.min.js"></script>
        <script src="js/skrollr.min.js"></script>
        <script src="js/spectragram.min.js"></script>
        <script src="js/scrollReveal.min.js"></script>
        <script src="js/isotope.min.js"></script>
        <script src="js/jquery.countdown.min.js"></script>
        <script src="js/scripts.js"></script>
</body>
</html>