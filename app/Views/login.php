<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Appakabaji</title>
	<link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css') ?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/css/style.css') ?>">
	<link rel="icon" href="<?php echo base_url('assets/img/lpmp.ico'); ?>">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<script src="<?php echo base_url('assets/js/jquery-3.5.1.js'); ?>"></script>
	<script src="<?php echo base_url('assets/js/popper.min.js'); ?>"></script>
	<script src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>


</head>

<body>
	<div class="container">
		<div class="user">

			<form action="<?= base_url('login/auth') ?>" method="post">
				<?= csrf_field();  ?>
				<div class="avatar">
					<img src="<?php echo base_url('assets/img/logo.png') ?>">
				</div>
				<h2 class="text-center text-bold text-blue">APPAKABAJI</h2>

				<?php if (session()->getflashdata('pesan')) { ?>
					<div class="alert alert-danger" role="alert">
						<div class="alert-icon"><i class="flaticon-warning"></i></div>
						<?php echo session()->getflashdata('pesan'); ?>
					</div>
				<?php } ?>


				<div class="form-group">
					<input type="text" class="form-control numeric" name="nip" placeholder="N I P" id="nip">
				</div>

				<div class="form-group">
					<input type="password" class="form-control" name="password" placeholder="Password" id="password">
				</div>

				<div class="form-group">
					<button type="submit" class="btn btn-primary btn-lg btn-block">M a s u k</button>
				</div>


			</form>

		</div>
	</div>
	<script src="<?php echo base_url('assets/js/sf.js'); ?>"></script>
</body>

</html>