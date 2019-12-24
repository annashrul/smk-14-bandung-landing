<?php
$this->load->view('layout/header');
?>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Forum&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/css/login.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
</head>
<body>
<div class="banner-wrapper">
    <div class="topbar-one">
        <div class="container">
            <div class="topbar-one__left col-lg-6">
                <div class="logo-box clearfix">
                    <a class="brand" href="<?=base_url();?>">
                        <img src="<?=base_url();?>assets/images/logo-dark.png" class="main-logo" width="75" alt="Awesome Image" />
                    </a>
                </div><!-- /.logo-box -->
            </div><!-- /.topbar-one__left -->
            <div class="col-lg-6 col-md-offset-7" style="margin-top:20px;">
                <a class="btn btn-primary " href="<?=$this->config->item('perpus')?>auth/auth_siswa" style="color:white;">Perpustakaan</a>
                <a class="btn btn-primary " href="<?=base_url();?>" style="color:white;">Beranda</a>
            </div><!-- /.topbar-one__right -->

        </div><!-- /.container -->
    </div><!-- /.topbar-one -->
    <div class="card-container container-fluid">
        <div class="row">
            <div class="col-md-6 col-md-offset-3" style="padding:60px">
                <div class="toggle"><i class="fa fa-user fa-pencil fa-lg" style='display:none'></i></div>
                <div class="card login-register login-reset">

                    <h1 class="title">Login</h1>
                    <form action="<?=base_url();?>auth/login" method="post">
                        <div class = "input-container has-feedback">
                            <input type="text" id="username" name="username" required autocomplete="off" pattern="[\w_-]{3,20}" title="Must contain from 3 to 20 characters such as any letter, number, an underscore, or a hyphen."/>
                            <label for="Username">Username</label>
                            <i class="fa fa-user form-control-feedback"><?php echo form_error('username'); ?></i>
                        </div>
                        <div class = "input-container has-feedback">
                            <input type="password" id="password" name="password" required autocomplete="off" />
                            <label for="Password">Password</label>
                            <i class="fa fa-lock form-control-feedback"><?php echo form_error('password'); ?></i>
                        </div>
                        <div class = "input-container has-feedback">
                            <?php if ($this->session->flashdata('error')) { ?>
                                <div style='font-style:italic;color:red'> <?= $this->session->flashdata('error') ?> </div>
                            <?php } ?>
                        </div>
                        <div class="button-container">
                            <input type="submit" name="type" class="btn btn-primary" value="masuk">
                        </div>
                        <div class="footer"><a href="#">Forgot your password?</a></div>
                    </form>
                </div>
                <div class="card login-register">
                    <h1 class="title">Create an account</h1>
                    <form>
                        <div class = "input-container has-feedback">
                            <input type="text" id="nama_user" name="nama_user" required autocomplete="off" pattern="[\w_-]{3,20}" title="Username must contain from 3 to 20 characters such as any letter, number, an underscore, or a hyphen."/>
                            <label for="Username">Nama Lengkap</label>
                            <i class="fa fa-user form-control-feedback"></i>
                            <div class="check"></div>
                            <div class="bar"></div>
                        </div>

                        <div class = "input-container has-feedback">
                            <input type="text" id="username" name="username" required autocomplete="off" pattern="[\w_-]{3,20}" title="Username must contain from 3 to 20 characters such as any letter, number, an underscore, or a hyphen."/>
                            <label for="Username">Username</label>
                            <i class="fa fa-user form-control-feedback"></i>
                            <div class="check"></div>
                            <div class="bar"></div>
                        </div>

                        <div class = "input-container has-feedback">
                            <input type="text" id="nama_user" name="nama_user" required autocomplete="off" pattern="[\w_-]{3,20}" title="Username must contain from 3 to 20 characters such as any letter, number, an underscore, or a hyphen."/>
                            <label for="Username">Jabatan</label>
                            <i class="fa fa-user form-control-feedback"></i>
                            <div class="check"></div>
                            <div class="bar"></div>
                        </div>



                        <div class = "input-container has-feedback">
                            <input type="email" id="E-mail" name="E-mail" required pattern="[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+" title="Not an e-mail!" autocomplete="off"/>
                            <label for="E-mail">E-mail</label>
                            <i class="fa fa-envelope form-control-feedback"></i>
                            <div class="check"></div>
                            <div class="bar"></div>
                        </div>
                        <div class = "input-container has-feedback">
                            <input type="password" id="Password" name="Password" required autocomplete="off" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,20}" title="Password must contain at least one number and one uppercase and lowercase letter, and from 8 to 20 characters."/>
                            <label for="Password">Password</label>
                            <i class="fa fa-lock form-control-feedback"></i>
                            <div class="check"></div>
                            <div class="bar"></div>
                        </div>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" id="terms" required>
                                <span class="cr"><i class="cr-icon fa fa-rocket"></i></span>
                                I accept something I never read
                            </label>
                        </div>
                        <div class="button-container">
                            <button><span>Register</span></button>
                        </div>
                    </form>
                </div>
                <div class="card login-reset">
                    <h1 class="title">Reset password</h1>
                    <p class="reset-info">Password reset instruction will be send to your e-mail.</p>
                    <form>
                        <div class = "input-container has-feedback">
                            <input type="email" id="E-mail" name="E-mail" required  pattern="[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+" title="Not an e-mail!" autocomplete="off"/>
                            <label for="E-mail">E-mail</label>
                            <i class="fa fa-envelope form-control-feedback"></i>
                            <div class="check"></div>
                            <div class="bar"></div>
                        </div>
                        <div class="button-container">
                            <button><span>Reset</span></button>
                        </div>
                        <div class="footer"><a href="#">Back to Login</a></div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>
</body>
</html>


<script>
	//move input label function
	$('.input-container').find('input').on('keyup blur focus', function (e) {
		var $this = $(this),
			label = $this.next('label');
		if(e.type == 'blur') {
			if($this.val() === '' ) {
				label.removeClass('active');
			}
		} else if (e.type === 'focus') {
			if( $this.val() === '' ) {
				label.addClass("active");
			}
		}
	});

	// Toggle Function
	$('.toggle').click(function(){
		// Switches the Icon
		$(this).children('i').toggleClass('fa-pencil');
		$('.tooltip').text(($('.tooltip').text() === 'SIGNUP') ? 'SIGNUP' : 'SIGNUP');
		// Switches the forms
		$('.login-register').animate({
			height: "toggle",
			'padding-top': 'toggle',
			'padding-bottom': 'toggle',
			opacity: "toggle"
		}, "slow");
	});

	$('.footer a').click(function(){
		// Switches the forms
		$('.card-container').children('.toggle').toggle();
		$('.login-reset').animate({
			height: "toggle",
			'padding-top': 'toggle',
			'padding-bottom': 'toggle',
			opacity: "toggle"
		}, "slow");
	});
</script>