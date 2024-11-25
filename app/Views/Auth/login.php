
<!doctype html>
<html lang="en">
  <head>
  	<title>Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Customized Bootstrap Stylesheet -->
	<link href="<?php echo base_url('/css/bootstrap.min.css'); ?>" rel="stylesheet">

<!-- Template Stylesheet -->
<link href="<?php echo base_url('/css/style.css'); ?>" rel="stylesheet">

<style>
	.darkened-image {
		background-image:linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('<?php echo base_url('/business-financial-investment-credit-card-600nw-2040338441.png'); ?>');
		background-size: cover;
	}
</style>

	</head>
	<body class="img js-fullheight darkened-image" >
	<section class="ftco-section">
		<div class="container">
			
			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-4">
					<div class="login-wrap p-5 " >
					<h3 class="mb-4 text-center">Login</h3>
		      	<form action="<?php echo base_url('/dologin');?>" class="signin-form" method="post">
					
		      		<div class="form-group">

		      			<input <?php if(session() -> getFlashdata('error') == 'Wrong Username') :?> style="border-color: red" <?php endif; ?> type="text" value="<?= old('username') ?>" class="form-control-auth" placeholder="Username" name="username" required>
		      		</div>
					
					<?php if(session() -> getFlashdata('error') == 'Wrong Username') :?>
						<div class="error"><?php echo session()->getFlashdata('error'); ?></div>
					<?php endif; ?>
					
	            <div class="form-group py-2">
				<!-- <label class="text-white" for="name">Password</label> -->

	              <input <?php if(session() -> getFlashdata('error') == 'Wrong Password') :?> style="border-color: red" <?php endif; ?> id="password-field" value="<?= old('password') ?>" type="password" class="form-control-auth" placeholder="Password" name="password" required>
	              <!-- <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span> -->
	            </div>
				
				<?php if(session() -> getFlashdata('error') == 'Wrong Password') :?>
						<div class="error"><?php echo session()->getFlashdata('error'); ?></div>
					<?php endif; ?>
	            <div class="form-group text-center py-2">
	            	<button type="submit" class="btn btn-primary submit px-3">Sign In</button>
	            </div>
	           
	          </form>
	          <div class="text-center"><a href="<?php echo base_url('/register');?>" class="text-white">&mdash; Create Account &mdash;</a></div>
	          
		      </div>
				</div>
			</div>
		</div>
	</section>

	</body>
</html>

