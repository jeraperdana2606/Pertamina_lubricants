<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Admin</title>

    <!-- Main css -->
    <link rel="stylesheet" href="<?php echo base_url('css/login.css') ?>">

    <!-- Font Icon -->
    <link rel="stylesheet" href="<?php echo base_url('fonts/material-icon/css/material-design-iconic-font.min.css')?>">
</head>

<body>
    <!-- Sing in  Form -->
    <section class="sign-in">
        <div class="container">
            <div class="signin-content">
                <div class="signin-image">
                    <figure><img src="<?php echo base_url('img/signin-image.jpg') ?>" alt="sing up image"></figure>
                    <a href="<?php echo base_url('welcome') ?>" class="signup-image-link">Beranda</a>
                </div>

                <div class="signin-form">
                    <h2 class="form-title">Sign Up Admin</h2>
                    <div class="text-center">
                        <?php echo $this->session->flashdata('message'); ?>

                    </div>

                    <form method="POST" class="admin" action="<?= base_url('logincontrol')?>">
                        <div class="form-group">
                            <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                            <input type="text" name="name" id="name" placeholder="Your Name" />
                        </div>
                        <div class="form-group">
                            <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                            <input type="password" name="password" id="your_pass" placeholder="Password" />
                        </div>
                        <div class="form-group">
                            <input type="checkbox" name="remember-me" id="remember-me" class="agree-term" />
                            <label for="remember-me" class="label-agree-term"><span><span></span></span>Remember
                                me</label>
                        </div>
                        <div class="form-group form-button">
                            <input type="submit" class="form-submit" value="login" />
                        </div>
                </div>
            </div>
        </div>
    </section>
    <div class="footer">
        <div class="container">
            <div class="fixed-bottom">
                <div class="col-7">
                    <b class="copyright">&copy; 2021 - Masjid Jami Al-Muhajirin </b> All rights reserved.
                </div>
            </div>
        </div>
    </div>
</body>