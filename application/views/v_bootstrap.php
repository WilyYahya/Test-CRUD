<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<html>
<head>
 <title>Memasukan Template Bootstrap Ke CodeIgniter</title>
 <link rel="stylesheet" media="all" href="<?php echo base_url()?>assets/css/bootstrap.min.css" type="text/css">
 <script src="<?php echo base_url()?>assets/js/bootstrap.min.js" type="text/javascript"></script>
 <script src="<?php echo base_url()?>assets/js/jquery-3.2.1.min.js" type="text/javascript"></script>
</head>
<body>

<!-- INI ADALAH HEADER -->
   <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="http://www.kioscoding.com">KiosCoding</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="http://www.kioscoding.com">Beranda</a></li>
            <li><a href="http://www.kioscoding.com/search/label/CODEIGNITER">CodeIgniter</a></li>
            <li><a href="http://www.kioscoding.com/search/label/PHP">Php</a></li>
   <li><a href="http://www.kioscoding.com/search/label/JAVA">Java</a></li>
   <li><a href="http://www.kioscoding.com/search/label/ANDROID STUDIO">Android Studio</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#">Hubungi Kami</a></li>
            <li><a href="#">Tentang Kami</a></li>
          </ul>
        </div>
      </div>
    </nav>
 <br><br><br><br><br>
 
 
 <!-- INI ADALAH TAMPILAN MENU UTAMA -->
    <div class="container">
      <div class="jumbotron">
        <h1>Selamat Datang</h1><br>
        <p>KiosCoding adalah sebuah website yang membahas seputar tutorial mengenai bahasa pemrograman 
  seperti pemrograman dekstop, pemrograman web, dan pemrograman mobile.</p>
        <p>KiosCoding juga membahas beberapa tutorial mengenai framework-framework pendukung yang cukup terkenal seperti Codeigniter, Bootstrap, dan Springboot .</p>
        <br><p>
          <a class="btn btn-lg btn-primary" href="http://www.smtown.com" role="button">Lihat Website &raquo;</a>
        </p>
      </div>

    </div>
</body>
</html>