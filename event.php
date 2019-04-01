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
<title>RAOT Event Finder | Tittle Event</title>
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
include "ndas.php";

?>
<!---->
<div class="blog">
		<div class="container">
		   <?php
		   $id =$_GET['detail'];
		   if(isset($_GET['detail'])){
		       $sql     ="select * from event natural join panitia where idEvent='$id' AND uplink=id_panitia";
		       $que     = mysqli_query($konak,$sql);
		      
		       while ($res=mysqli_fetch_array($que)){
		        
		       
		   ?>
			<div class="col-md-8 blog-left" >
				<div class="blog-info">
					<div class="sub-trailer">
					    <div class="clearfix"> </div>
				   </div>
					<div class="blog-info-text">
			            <div class="col-md-7 abt-info-pic">
			                <h3><strong><?php echo $res['nm_event']; ?></strong></h3> By <?php echo $res['nick']; ?></a></br>
					</br> 
		 	                </div>
						<div class="blog-img">
						<figure>
		<link rel="stylesheet" type="text/css" href="css/Fancybox/dist/jquery.fancybox.min.css">
    	<a href="assetsz/gambir/<?php echo $res['foto']; ?>" data-fancybox data-caption="Caption for single image">
	    	<img class="w-100 rounded" src="assetsz/gambir/<?php echo $res['foto']; ?>" alt="<?php echo $res['nm_event']; ?>" width='680px' height='316px'/>
		</a>
	                	</figure>
						</div>
					</br>
					 <!-- Tab links -->
						<div class="nav nav-tabs">
						  <button class="tablinks" onclick="openCity(event, 'London')">Overview</button>
						  <button class="tablinks" onclick="openCity(event, 'Paris')">Participants</button>
						  <button class="tablinks" onclick="openCity(event, 'Tokyo')">Bracket</button>
						</div>

						<!-- Tab content -->
						<div id="London" class="tabcontent">
						  <h3>-</h3>
						  <p>-</p>
						</div>

						<div id="Paris" class="tabcontent">
						  <h3>-</h3>
						  <p>-</p>
						</div>

						<div id="Tokyo" class="tabcontent">
						  <h3>-</h3>
						  <p>-</p>
						</div> 		
						<p class="snglp">
						<b>Description</b>
                        <p><?php echo $res['deskripsi']; ?></p>
                        <b>Rules/Peraturan</b>
                        <p><?php echo $res['rules']; ?></p>
                        <b>Tanggal Tournament</b>
                        <p><?php echo $res['tgl']; ?></p>
                        <b>Alamat</b>
                        <p><?php echo $res['alamat']; ?></p>
                        <b>Mode</b>
                        <p><?php echo $res['mode']; ?></p>
                        </p>
		
	
					</div>
					<!--
					<div class="comment-icons">
						<ul>
							<li><span></span><a href="#">Mobile Legend</a> </li>
							<li><span class="clndr"></span>21 Desember 2018</li>
							<li><span class="admin"></span> <a href="#"><?php echo $kuerinick['nick']; ?></a></li>
							<li><span class="cmnts"></span> <a href="#">5 comments</a></li>
							<li><a href="#" class="like">15</a></li>
						</ul>
					</div>
					-->
				</div>
			</div>
			<?php
			}
		    }
			?>
			<!-- <div class="col-md-4 single-page-right">
				<div class="category blog-ctgry">
					<h4>Top Games</h4>
					<div class="list-group">
						<a href="single.html" class="list-group-item">Dota 2</a>
						<a href="single.html" class="list-group-item">CS:GO</a>
						<a href="single.html" class="list-group-item">PUBG</a>
						<a href="single.html" class="list-group-item">Mobile Legends</a>
						<a href="single.html" class="list-group-item">Arena Of Valor</a>
						<a href="single.html" class="list-group-item">Point Blank</a>
						<a href="single.html" class="list-group-item">League Of Legend</a>
						<a href="single.html" class="list-group-item">Other</a>
					</div>
				</div>	
				<div class="recent-posts">
					<h4>Recent posts</h4>
					<div class="recent-posts-info">
						<div class="posts-left sngl-img">
							<a href="single.html"> <img src="images/img16.jpg" class="img-responsive zoom-img" alt=""/> </a>
						</div>
						<div class="posts-right">
							<label>March 5, 2015</label>
							<h5><a href="single.html">Finibus Bonorum</a></h5>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing incididunt.</p>
							<a href="single.html" class="btn btn-primary hvr-rectangle-in">Read More</a>
						</div>
						<div class="clearfix"> </div>
					</div>	
					<div class="recent-posts-info">
						<div class="posts-left sngl-img">
							<a href="single.html"> <img src="images/img17.jpg" class="img-responsive zoom-img" alt=""/></a>
						</div>
						<div class="posts-right">
							<label>March 1, 2015</label>
							<h5><a href="single.html">Finibus Bonorum</a></h5>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing incididunt.</p>
							<a href="single.html" class="btn btn-primary hvr-rectangle-in">Read More</a>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="clearfix"> </div>
				</div>				
			</div> -->
			<div class="clearfix"> </div>
		</div>	
</div>	
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
 

<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
	<script src="css/Fancybox/dist/jquery.fancybox.min.js"></script>
	
	<script type="text/javascript">
		
		
	function openCity(evt, cityName) {
	  // Declare all variables
	  var i, tabcontent, tablinks;

	  // Get all elements with class="tabcontent" and hide them
	  tabcontent = document.getElementsByClassName("tabcontent");
	  for (i = 0; i < tabcontent.length; i++) {
		tabcontent[i].style.display = "none";
	  }

	  // Get all elements with class="tablinks" and remove the class "active"
	  tablinks = document.getElementsByClassName("tablinks");
	  for (i = 0; i < tablinks.length; i++) {
		tablinks[i].className = tablinks[i].className.replace(" active", "");
	  }

	  // Show the current tab, and add an "active" class to the button that opened the tab
	  document.getElementById(cityName).style.display = "block";
	  evt.currentTarget.className += " active";
	} 

	</script>
	
</body>

</html>