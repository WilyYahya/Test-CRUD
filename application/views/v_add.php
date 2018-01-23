<html>
<head>
<title>Add Data</title>
</head>
<link rel="stylesheet" media="all" href="<?php echo base_url()?>assets/css/bootstrap.min.css" type="text/css">
<script src="<?php echo base_url()?>assets/js/bootstrap.min.js" type="text/javascript"></script>
<script src="<?php echo base_url()?>assets/js/jquery-3.2.1.min.js" type="text/javascript"></script>
<style type="text/css">
	.btn-block{
		cursor: pointer;
	}
</style>
<body>
<center><h1>ADD NEW DATA</h1></center>
<form role="form" action="<?= $this->config->base_url(); ?>Data/prosesadd" method="post" enctype="multipart/form-data"> 
<div class="container">
    <h2>Please Insert your data</h2>
    <div class="form-group">
      <p class="bg-inverse text-white rounded-right" style="font-size: 22px;font-family: comic";><label for="id">Id Number :</label>
      <input type="text" class="form-control" id="id" placeholder="Input Your Id" name="id">
    </div>
    <div class="form-group">
      <p class="bg-inverse text-white rounded-right" style="font-size: 22px;font-family: comic";><label for="nama">Name :</label>
      <input type="text" class="form-control" id="nama" placeholder="Enter Your Name" name="nama">
    </div>
    <div class="form-group">
      <p class="bg-inverse text-white rounded-right" style="font-size: 22px;font-family: comic";><label for="alamat">Address :</label>
      <input type="text" class="form-control" id="alamat" placeholder="Where do you live?" name="alamat">
    </div>
    <button type="submit" class="btn btn-block btn-outline-secondary text-gray-dark" value="Login" style="font-family: 'monotype corsiva';font-size: 28px;">Submit</button>
  </form>
</div>

</body>
</html>