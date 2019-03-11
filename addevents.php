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
<!-- banner -->
<div class="banner">		  			
		<div class="bnr2">						  
	   </div>			 
</div>
<!--pages-starts-->
<?php if((isset($_SESSION['status']) && $_SESSION['status']!="login")){ ?>
<div class="pages">
		<div class="contact">
	    <div class="container">
		 <div class="contact-head">
		     <div class="contact-head">
		 	 <h2>Add Your Event</h2>
		 	 <div class="alerts">
			   <div class="alert alert-danger" role="alert">
					<strong>Perhatian</strong> Deskripsikan event anda sedetail mungkin, masukkan deskripsi berupa hadiah,contact person,atau link terkait.
			   </div>
			   <div class="alert alert-danger" role="alert">
					Inputkan rules sejelas dan sedetail mungkin sesuai dari event yang akan diselenggarakan.
			   </div>
		    </div>
			  <form action="+event.php" method="post" enctype="multipart/form-data">
				  <div class="col-md-6 contact-left"> 
				    <h4>Nama Event</h4>
					<input type="text" class="text" name="namaevent" placeholder="Nama Event..." required=""/>
					<h4>Nama Game</h4>
					<input type="text" class="text" name="namagame" placeholder="Nama Game" required=""/>
					<h4>Platform</h4>
					<input type="text" class="text" name="platform" placeholder="Platform" required=""/>
					<h4>Tanggal Tournament</h4>
					<input type="text" class="text" name="tanggal" placeholder="DD/MM/YYYY" required=""/>
					<h4>Alamat</h4>
					<input type="text" class="text" name= "alamat" placeholder="Alamat" required=""/>
					<h4>Mode</h4>
					<input type="text" class="text" name="mode" placeholder="Mode" required=""/>
					
				 </div>
				 <div class="col-md-6 contact-right">
				        <h4>Deskripsi</h4>
						 <textarea class="ckeditor" name="deskripsi" placeholder="Deskripsikan Event Sedetail mungkin.." required/></textarea>
						 <h4>Rules</h4>
						 <textarea class="ckeditor" name="rules" placeholder="Masukkan Peraturan, Mis: jumlah peserta,dll" required/></textarea>
					Gambar Event (Poster,dsb)<input type="file" name="gambarEvent" id="gambarEvent"><br>
					<input type="submit" name="submitEv" value="SUBMIT"/>
				 </div>
				 <div class="clearfix"></div>
				 
			 </form>
			 
		 </div>
			   <div class="clearfix"> </div>
	    </div>
	    </div>
	</div>
<?php
}
else { ?>
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

<div class="Buttons"><center><h1><a href="#"><span class="label label-info">Sign Up, Its Free</span></a></h1></center></div>
<div class="clearfix"> </div>
	    </div>
	</div>		

<?php
}
?>
<!----pages-end---->

<!-- footer -->
<div class="footer">
	 <div class="container">
		 <div class="footer-grids">
			 <div class="col-md-3 ftr-info">
				 <h3>About Us</h3>
				 <p>RAOT-even Temukan event tournament game anda disini sesuai genre yang anda minati.</p>
			 </div>
			 <div class="col-md-3 ftr-grid">
				 <h3>Categories</h3>
				 <ul class="ftr-list">
					 <li><a href="#">Action</a></li>
					 <li><a href="#">Racing</a></li>
					 <li><a href="#">Adventure</a></li>
					 <li><a href="#">Simulation</a></li>
					 <li><a href="#">Bike</a></li>
				 </ul>				 
			 </div>
			 <div class="col-md-3 ftr-grid">
				 <h3>Platform</h3>
				 <ul class="ftr-list">
					 <li><a href="#">Pc</a></li>
					 <li><a href="#">Mobile</a></li>
				 </ul>				 
			 </div>
			 <div class="col-md-3 ftr-grid">
				 <h3>Information</h3>
				 <ul class="ftr-list">	
					 <li><a href="#">Contact Us</a></li>
					 <li><a href="#">Wish Lists</a></li>
					 <li><a href="#">Site Map</a></li>
					 <li><a href="#">Terms & Conditions</a></li>					 
				 </ul>				 
			 </div>		
			 <div class="clearfix"></div>
		 </div>
	 </div>
</div>
<!---->
</body>
</html>