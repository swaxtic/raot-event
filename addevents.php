<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<?php 
session_start();

?>
<html>
<head>
<title>RAOT Event Finder | Tambah Tournament</title>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary JavaScript plugins) -->
<script src="js/bootstrap.js"></script>
<!-- Custom Theme files -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Jadwal Tournament, Tournament E-Sport, Jadwal E-Sport,Jadwal turnamen mobile legend, jadwal turnamen ml,jadwal turnamen pubg, jadwal turnamen pubgm" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

<script src="js/jquery.min.js"></script>

</head>
<body>
<!-- header -->
<?php
include "ndas.php"
?>
<!--pages-starts-->
<?php if(!isset($_SESSION['status'])){ ?>
<div class="pages">
<div class="contact">
<div class="container">
  <div class="team">
      
    <h3><strong>RAOT YOUR TOURNAMENT PARTNER</strong></h3>
    <a href="javascript:void(0)" class="toggle-accordion active" accordion-id="#accordion"></a>
  </div>
  <div class="clearfix"></div>
  <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
    <div class="panel panel-default">
      <div class="panel-heading" role="tab" id="headingOne">
        <h4 class="panel-title">
        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          Mengapa Memilih RAOT ?
        </a>
      </h4>
      </div>
      <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
        <div class="panel-body">
           Fast - Easy To Use - Totally Free  
        </div>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading" role="tab" id="headingTwo">
        <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
         RAOT Mebantu Anda
        </a>
      </h4>
      </div>
      <div id="collapseTwo" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingTwo">
        <div class="panel-body">
         Kami memudahkan anda dalam menemukan informasi seputar Tournament E-Sport 
        </div>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading" role="tab" id="headingThree">
        <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
           Bergabunglah Bersama Kami
        </a>
      </h4>
      </div>
      <div id="collapseThree" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingThree">
        <div class="panel-body">
         Segera daftarkan Tournamen anda. Enjoy The Game
        </div>
      </div>
    </div>
  </div>
</div>

<div class="Buttons"><center><h1><a href="register.php"><span class="label label-info">Sign Up, Its Free</span></a></h1></center></div>
<div class="clearfix"> </div>
	    </div>
	</div>

<?php
}
else {
 header("location:panitia/index.php");
}
?>
<!----pages-end---->

<!-- footer -->
<div class="footer">
	 <div class="container">
		 <div class="footer-grids">
			 
		 	<div style="text-align: center;">
 				
			 <!..gambar>

			</div>
		 
	 </div>
</div>

<div class="copywrite">
	 <div class="container">
		 <p> © 2019 RAOT-event Dev. All rights reserved</p>
	 </div>
</div>
<!---->
</body>
</html>