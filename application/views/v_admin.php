<html>
<head>
 <title>Membuat login dengan codeigniter</title>
<link rel="stylesheet" media="all" href="<?php echo base_url()?>assets/css/bootstrap.min.css" type="text/css">
<script src="<?php echo base_url()?>assets/js/bootstrap.min.js" type="text/javascript"></script>
<script src="<?php echo base_url()?>assets/js/jquery-3.2.1.min.js" type="text/javascript"></script>
<style type="text/css">
	.btn{
		cursor: pointer;
	}
	.jumbotron{
		background-color: #071D65;
		color: snow;
	}
</style>
</head>
<body>
<div class="container">
	<div class="jumbotron">
 <h1>Login berhasil !</br><small>Hello, <?php echo $this->session->userdata("nama"); ?> Selamat Datang</small></h1>
 <br>
 <br>
 <a href="login/logout"><button class="btn btn-danger">Logout</button></a>
 <a href="Data"><button class="btn btn-info">Lihat Data</button></a>		
	</div>

	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
</div>
</body>
</html>