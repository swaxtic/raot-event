<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<? 
include "config.php";
session_start();

?>
<html>
<head>
<title>RAOT Event Finder | Tittle Event</title>
<?
include "ndas.php"
?>
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
<!-- banner -->
<div class="banner">		  			
		<div class="bnr2">						  
	   </div>			 
</div>
<!---->
<div class="blog">
		<div class="container">
		   <?php
		   $id =$_GET['detail'];
		   if(isset($_GET['detail'])){
		       $sql     ="select * from event where idEvent='$id'";
		       $que     = mysqli_query($konak,$sql);
		      
		       while ($res=mysqli_fetch_array($que)){
		        
		       //$upl            = "select uplink from event where idEvent='$id'";
		       //$kueriuplink    = mysqli_query($konak,$upl);
		       //$sql2           = "select nick from panitia where id_panitia='$kueriuplink' ";
		       //$kuerinick      = mysqli_query($konak,$sql2);
		   ?>
			<div class="col-md-8 blog-left" >
				<div class="blog-info">
					<div class="blog-info-text">
			            <div class="team">
			                <h3><?php echo $res['nm_event']; ?></h3>	  
		 	                </div>
						<div class="blog-img">
							<figure>
	    	<img class="w-100 rounded" src="assetsz/gambir/<?php echo $res['foto']; ?>" alt="<?php echo $res['nm_event']; ?>"/>
	                </figure>
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
			<?
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
 


</body>
</html>