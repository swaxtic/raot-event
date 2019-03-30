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
<title>RAOT Event Finder | Home</title>
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
<!---->
<?php if(!isset($_SESSION['status'])){ ?>
<div class="blog">
		<div class="container">
			<div class="col-md-8 blog-left" >
				<div class="coment-form">
					<h4>You need to login first</h4>
				</div>
			</div>	
			<div class="clearfix"> </div>
		</div>	
</div>

<?php        
}else{ ?>
	   <div class="blog">
		<div class="container">
			<div class="col-md-8 blog-left" >
				<div class="coment-form">
					<center><h4>Your Event</h4></center>
					<div class="review-md1">
				        <?php
		   $id =$_GET['id'];
		   if(isset($_GET['id'])){
		       $sql     ="select * from event where uplink='$id'";
		       $que     = mysqli_query($konak,$sql);
		      
		       while ($res=mysqli_fetch_array($que)){
		   ?>
				    <div class="col-md-4 sed-md"><br>
				 	 <div class=" col-1">
						 <a href="event.php?detail=<?php echo $res['idEvent']; ?>"><img class="img-responsive" src="assetsz/gambir/<?php echo $res['foto']?>" alt=""></a>
						 <h4><a href="event.php?detail=<?php echo $res['idEvent']; ?>"><?php echo $res['nm_event']; ?></a></h4>
                         <p><?php echo substr($res['deskripsi'],0,100); ?></p>
						
					 </div>
				 </div>
			    <?php
				}
		        }
				?>	
				 <div class="clearfix"> </div>
			
			</div>
				</div>
			</div>	
			<div class="col-md-4 single-page-right">
				<div class="category blog-ctgry">
					<h4>Welcome <?php echo $_SESSION['nick']; ?>..!!</h4>
					<div class="list-group">
						<a href="addevents.php" class="list-group-item">Add Events</a>
						<a href="events.php" class="list-group-item">Find Tournaments</a>
						<a href="editpass.php" class="list-group-item">Edit Password</a>
						<a href="metu.php" class="list-group-item">Logout</a>
					</div>
				</div>	
			</div>
			<div class="clearfix"> </div>
		</div>	
</div>
	                        
<?php
}
?>
	
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
<div class="copywrite">
	 <div class="container">
		 <p> © 2018 RAOT-even Dev. All rights reserved | Design by <a href="http://w3layouts.com/">W3layouts</a></p>
	 </div>
</div>
<!---->

 


</body>
</html>