<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Title Page</title>

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="<?php echo base_url('') ?>assets/plugins/bootstrap/css/bootstrap.min.css">
		<script src="<?php echo base_url('') ?>assets/plugins/bootstrap/js/bootstrap.min.js"></script> 
		<!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">-->

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>
		<h1 class="text-center">Login</h1>
	

	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		<div class="row">
  			<div class="col-md-4 col-md-offset-4">
  				<?php echo form_open('login/cekLogin'); ?>
  				<?php echo validation_errors(); ?>
  				<div class="form-group">
					<label for="username">Username</label>
					<input type="text" class="form-control" id="username" name="username" placeholder="Username">
				</div>
				<div class="form-group">
					<label for="password">Password</label>
					<input type="Password" class="form-control" id="password" name="password" placeholder="Password">
				</div>
				<button type="submit" class="btn btn-primary">Login</button>

				<a href="<?php echo site_url('login/register')?>" type="button" class="btn btn-group-lg">Daftar Baru</a> 
		
				<?php echo form_close(); ?>
	</div>


		

		<!-- jQuery -->
		<script src="//code.jquery.com/jquery.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="<?php echo base_url('') ?>assets/plugins/bootstrap/js/bootstrap.min.js"></script>
		<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
 		<script src="Hello World"></script>
	</body>
</html>