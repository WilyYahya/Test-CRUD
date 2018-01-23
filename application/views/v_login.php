<html>
<head>
 <title>Membuat Login Menggunakan CodeIgniter</title>
<link rel="stylesheet" media="all" href="<?php echo base_url()?>assets/css/bootstrap.min.css" type="text/css">
<script src="<?php echo base_url()?>assets/js/bootstrap.min.js" type="text/javascript"></script>
<script src="<?php echo base_url()?>assets/js/jquery-3.2.1.min.js" type="text/javascript"></script>
</head>
<body>
 <h1 align="center">Login Sistem "Data"<br/><small>www.DataManagement.com</small></h1><br />
 <form action="<?php echo base_url('login/cek_login'); ?>" method="post">
  <div class="container">
    <h2>Please Insert your data</h2>
    <div class="form-group">
      <p class="bg-warning text-gray-dark rounded-right" style="font-size: 22px;font-family: comic";><label for="text">Username :</label>
      <input type="text" class="form-control" id="text" placeholder="Enter Username" name="username">
    </div>
    <div class="form-group">
      <p class="bg-warning text-gray-dark rounded-right" style="font-size: 22px;font-family: comic";><label for="pwd">Password :</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="password">
    </div>
    <button type="submit" class="btn btn-warning text-gray-dark" value="Login" style="font-family: 'monotype corsiva';font-size: 24px;">Submit</button>
  </form>
</div>

 </form>
</body>
</html>