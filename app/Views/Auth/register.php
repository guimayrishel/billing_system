<!doctype html>
<html lang="en">
  <head>
  	<title>Register</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="icon" href="<?=base_url()?>/cvmc_logo.png" type="image/gif">
	<!-- Customized Bootstrap Stylesheet -->
	<link href="<?php echo base_url('/css/bootstrap.min.css'); ?>" rel="stylesheet">
	<!-- Template Stylesheet -->
	<link href="<?php echo base_url('/css/style.css'); ?>" rel="stylesheet">
	<style>
		.darkened-image {
			background-image: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('<?php echo base_url('/business-financial-investment-credit-card-600nw-2040338441.png'); ?>');
			background-size: cover;
		}
	</style>
	</head>
	<body class="img js-fullheight darkened-image">
		<div class="container py-5">
			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-5">
					<div class="login-wrap p-5">
		      	<h3 class="mb-4 text-center">Registration</h3>
		      	<form action="<?php echo base_url('/doregister');?>" class="signin-form" method="post">
		      		<div class="form-group py-2">
		      			<input type="text" class="form-control-auth" placeholder="Username" name="username" value="<?= old('username') ?>" required>
		      		</div>
                    <div class="form-group py-2">
                        <input <?php if(session() -> getFlashdata('error') == 'Password Validate') :?> style="border-color: red;" <?php endif; ?> id="password-field" type="password" class="form-control-auth" placeholder="Password" name="password" value="<?= old('password') ?>" required>
                        <!-- <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span> -->
                    </div>
					<?php if(session() -> getFlashdata('error') == 'Password Validate') :?>
						<div class="error">Password must be at least 8 characters long and include at least one uppercase letter, one lowercase letter, one number, and one special character.</div>
					<?php endif; ?>
                    <div class="form-group py-2">
		      			<input <?php if(session() -> getFlashdata('error') == 'Email already exists') :?> style="border-color: red;" <?php endif; ?> type="email" class="form-control-auth" placeholder="Email" name="email" value="<?= old('email') ?>" required>
		      		</div>
					  <?php if(session() -> getFlashdata('error') == 'Email already exists') :?>
						<div class="error"><?php echo session()->getFlashdata('error'); ?></div>
					<?php endif; ?>
                      <div class="form-group py-2">
		      			<input type="text" class="form-control-auth" placeholder="Firstname" name="firstname" value="<?= old('firstname') ?>" required>
		      		</div>
                      <div class="form-group py-2">
		      			<input type="text" class="form-control-auth" placeholder="Middlename" name="middlename" value="<?= old('middlename') ?>">
		      		</div>
                      <div class="form-group py-2">
		      			<input type="text" class="form-control-auth" placeholder="Lastname" name="lastname" value="<?= old('lastname') ?>" required>
		      		</div>
	            <div class="form-group py-2 text-center">
	            	<button type="submit" class="btn btn-primary submit px-3">Register</button>
	            </div>
	          </form>
	          <div class="text-center"><a href="<?php echo base_url('/login');?>" class="text-white">&mdash; Login &mdash;</a></div>
		      </div>
				</div>
			</div>
		</div>
	</body>
</html>

