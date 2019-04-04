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
include "config.php";
?>
 <div class="top-banner">
	 <div class="header">
		 <div class="container">
			 <div class="headr-left">
				 <div class="social">							
						<a href="#"><i class="facebook"></i></a>
						<a href="#"><i class="twitter"></i></a>
						<a href="#"><i class="gplus"></i></a>	
						<a href="https://www.instagram.com/raot.id/"><i class="pin"></i></a>	
						<a href="#"></a>	
				 </div>
				 <!--<div class="search">
					 <form>
						 <input type="submit" value="">
						 <input type="text" value="" placeholder="Search...">					 
					 </form>
				 </div>-->
				 <div class="clearfix"></div>
			 </div>
			 <div class="headr-right">
				 <div class="details">
					 <ul>
						  <li><a href="mailto@example.com"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>raotevent@.gmail.com</a></li>
						 <li><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>08xxxxxxxxx</li>
					 </ul>
				 </div>
			 </div>
			 <div class="clearfix"></div>
		 </div>
	 </div>
	 <!--banner-info-->	
	 <div class="banner-info">
		  <div class="container">
			  <div class="logo">
			    <h1 class="active"><a href="index.php">RAOT</a></h1>
			  </div>
			 <div class="top-menu">
				 <span class="menu"></span>
					<ul class="nav1">
						 <li class="active"><a href="index.php">Home</a></li>
						 <li><a href="about.php">About</a></li>
						 <li><a href="events.php">Events</a></li>
		                 <li><a href="addevents.php">Add Events</a></li>
						 <li><a href="contact.php">Mail</a></li>
	                           <?php if(!isset($_SESSION['status'])){ ?>
	                                <li><h3><a href="login.php"><span class="label label-primary">LOGIN</span></a> </h3></li>
	                        <?php        
	                        }else{
	                        $idipan = $_SESSION['id_panitia'];
				            $sql = "select * from panitia WHERE id_panitia ='$idipan'";
				            $que = mysqli_query($konak,$sql);		    
				            $res=mysqli_fetch_array($que);
	                        ?>
	                                <li><h3><a href="profile.php?id=<?php echo $res['id_panitia']; ?>"><span class="label label-primary">PROFILE</span></a> </h3></li>
	                        
	                        <?php
	                        }
	                        ?>
				  </ul>
			 </div>
	 <!-- script-for-menu -->
						<script>
							 $( "span.menu" ).click(function() {
							$( "ul.nav1" ).slideToggle( 300, function() {
							// Animation complete.
								});
								});
						</script>
					<!-- /script-for-menu -->
			 
			 <div class="clearfix"></div>
		 </div>
	 </div>
	 
</div>
<!-- banner -->
	 <!-- Slider-starts-Here -->
	 <script src="js/responsiveslides.min.js"></script>
	 <script>
		$(function () {
		  $("#slider").responsiveSlides({
			auto:true,
			nav: false,
			speed: 500,
			namespace: "callbacks",
			pager:true,
		  });
		});
		
	   </script>
<div class="slider">
		  <div class="callbacks_container">
			  <ul class="rslides" id="slider">
				
					<div class="slid banner1">
						  <div class="caption">
								<h3>RAOT EVENT - Your eSport Partner</h3>
								<p>Easy to manage, easy to share, and find your tournament events</p>
						  </div>
					</div>
				
				
					 <div class="slid banner2">	
						  <div class="caption">
								<h3>Temukan Event Tournament Sesuai Genre Game</h3>
								<p>Kami membantu ada menemukan event sesuai dengan pilihan game anda. Bertahan hidup dalam sebuah permainan adalah spesialis anda</p>
						  </div>
					 </div>
				
				
					<div class="slid banner3">	
						<div class="caption">
							<h3>Bantu Tim Anda Untuk Meraih Kejayaan</h3>
							<p>Kejayaan Hanya Untuk Yang Bertahan Terakhir Di Arena.Berjuanglah sampai titik darah penghabisan. Bantu tim anda untuk meraih kejayaan</p>
						</div>
					</div>
				
			  </ul>
		 </div>
	 </div>

<!-- content -->
<div class="content">
	 <div class="container">
		 <div class="top-games">
			 <h3>Top Games</h3>
			 <span></span>
		 </div>
		 <div class="top-game-grids">
			 <ul id="flexiselDemo1">
				 <li>
					 <div class="game-grid">
						 <h4>MOBILE LEGEND</h4>
						 
						 <img src="images/mobilelegends-logo1.png" class="img-responsive" alt=""/>
					 </div>	
				 </li>
				 <li>
					 <div class="game-grid">
						 <h4>DOTA 2</h4>
						 
						 <img src="images/dota2-logo1.png" class="img-responsive" alt=""/>
					 </div>
				 </li>
				 <li>
					 <div class="game-grid">
						 <h4>PUBG MOBILE & PUBG</h4>
						 
						 <img src="images/pubg-logo.png" class="img-responsive" alt=""/>
					 </div>
				 </li>
				 <li>
					 <div class="game-grid">
						 <h4>CLASH OF ROYAL</h4>
						 
						 <img src="images/coc-logo.png" class="img-responsive" alt=""/>
					 </div>
				 </li>
				 <li>
					 <div class="game-grid">
						 <h4>CLASH ROYALE</h4>
						 
						 <img src="images/clashroyale-logo.png" class="img-responsive" alt=""/>
					 </div>
				 </li>
				  <li>
					 <div class="game-grid">
						 <h4>CS : GO</h4>
						 
						 <img src="images/csgo-logo.png" class="img-responsive" alt=""/>
					 </div>
				 </li>
				 <li>
					 <div class="game-grid">
						 <h4>ARENA OF VALOR</h4>
						 
						 <img src="images/areanaofvalor-logo.png" class="img-responsive" alt=""/>
					 </div>	
				 </li>				 				 	
			 </ul>
			 
			 <script type="text/javascript">
			 $(window).load(function() {			
			  $("#flexiselDemo1").flexisel({
				visibleItems: 4,
				animationSpeed: 1000,
				autoPlay: true,
				autoPlaySpeed: 3000,    		
				pauseOnHover:true,
				enableResponsiveBreakpoints: true,
				responsiveBreakpoints: { 
					portrait: { 
						changePoint:480,
						visibleItems: 1
					}, 
					landscape: { 
						changePoint:640,
						visibleItems: 2
					},
					tablet: { 
						changePoint:768,
						visibleItems: 3
					}
				}
			});
			});
			</script>
			<script type="text/javascript" src="js/jquery.flexisel.js"></script>	
		 </div>
	 </div>
</div>
<!-- latest -->
<div class="latest">
	 <div class="container">
		 <div class="latest-games">
			 <h3>Latest Events</h3>
			 <span></span>
		 </div>
		 <div class="latest-top">				
				<div class="col-md-5 trailer-text">
				   <div class="sub-trailer">
				       <div class="col-md-4 sub-img">
							<img src="images/ML1.png" alt="img07"/>
					   </div>
					   <div class="col-md-8 sub-text">
					   		 <a href="http://103.28.53.243/~raoteven/event.php?detail=22">Turnamen Mobile Legends - HCP SEASON 2</a>
							 
					   </div>
					    <div class="clearfix"> </div>
				   </div>
				    <div class="sub-trailer">
				       <div class="col-md-4 sub-img">
							<img src="images/ML1.png" alt="img07"/>
					   </div>
					   <div class="col-md-8 sub-text">
					   		 <a href="http://103.28.53.243/~raoteven/event.php?detail=21"> Turnamen Mobile Legends - VINZ SEASON 7 </a>
							 
					   </div>
					   
					    <div class="clearfix"> </div>
				   </div>
				    <div class="sub-trailer">
				       <div class="col-md-4 sub-img">
							<img src="images/cs1.png" alt="img07"/>
					   </div>
					   <div class="col-md-8 sub-text">
					   		 <a href="http://103.28.53.243/~raoteven/event.php?detail=20">Turnamen CS:GO - 8 Technology Festival</a>
							 
					   </div>
					    <div class="clearfix"> </div>
				   </div>
				</div>
				<div class="col-md-7 trailer">
				 <iframe src="https://www.youtube.com/embed/V5-DyoVlNOg?list=PLiVunv1pnIs2c0ORVqY60K3n8XMO9CoGp" frameborder="0" allowfullscreen></iframe>
				</div>
				 <div class="clearfix"> </div>
			</div>
	 </div>
</div>
			 <!-- footer -->
<div class="footer">
	 <div class="container">
		 <div class="footer-grids">
			 <!--<div class="col-md-3 ftr-info">
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
		 </div>-->
		 	<div style="text-align: center;">
 				
			 <!..gambar>
			 <img src="images/RAOT-Circlezz.png"/>

			</div>
		 
	 </div>
</div>

<div class="copywrite">
	 <div class="container">
		 <p> © 2019 RAOT-event Dev. All rights reserved</p>
	 </div>
</div>

<!--<div class="bottom">
	 <div class="bots">
	 	 <p> Bottom </p>
	 </div>
</div>-->
</body>
</html>