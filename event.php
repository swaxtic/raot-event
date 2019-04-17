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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
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
		       $sql     = "select * from event natural join panitia where idEvent='$id' AND uplink=id_panitia";
		       $que     = mysqli_query($konak,$sql);
		      
		       while ($res=mysqli_fetch_array($que)){
		        
		       
		   ?>
			<div class="col-md-8 blog-left" >
				<div class="blog-info">
					<div class="sub-trailer">
					    <div class="clearfix">
							<!-- foto panitia -->
							<img src="images/coc-logo.png" alt="..." class="img-user">
							<div class="col-md-6 profilev">
									<a href="http://103.28.53.243/~raoteven/event.php?detail=22"><?php echo $res['nama']; ?></a><br>
									Member Since 
							 
					   </div>
							<!-- end foto panitia -->
							 </div>
				   </div>
					<div class="blog-info-text">
			            <div class="clearfix">
											<br>
			                <h3><strong><?php echo $res['nm_event']; ?></strong></h3>
											 </div>
				<!-- Poster Event -->
	<hr class='gradient1'>
	<div class="blog-img">
		<figure>
			<link rel="stylesheet" type="text/css" href="css/Fancybox/dist/jquery.fancybox.min.css">
    		<a href="assetsz/gambir/<?php echo $res['foto']; ?>" data-fancybox data-caption="<?php echo $res['nm_event']; ?>">
	    		<img class="w-100 rounded" src="assetsz/gambir/<?php echo $res['foto']; ?>" alt="<?php echo $res['nm_event']; ?>" width='680px' height='316px'/>
				</a>
	  </figure>
	</div>
				<!-- Poster Event END -->
			<hr class='gradient1'>
			<!-- Desc -->
			<h4><strong>About This Tournament</strong></h4>
				<p><?php echo $res['deskripsi']; ?></p><br>
			<!-- Desc -->			
					 <!-- Tab links -->
					<div class="nav">
					<ul class="nav nav-tabs">
    <li class="active"><a href="#overview">Overview</a></li>
    <li><a href="#participants">Participants</a></li>
    <li><a href="#bracket">Bracket</a></li>
    <li><a href="#contact">Contact</a></li>
  </ul>

  <div class="tab-content">
    <div id="overview" class="tab-pane fade in active">
			<br>
			<b>Rules/Peraturan</b>
					<p><?php echo $res['rules']; ?></p><br>
				<b>Tanggal Tournament</b>
        	<p><?php echo $res['tgl']; ?></p><br>
        <b>Alamat</b>
          <p><?php echo $res['alamat']; ?></p><br>
        <b>Mode</b>
          <p><?php echo $res['mode']; ?></p><br>
		</div>
    <div id="participants" class="tab-pane fade">
		<br>
			<b>Pending</b>
			<p></p>
		<br>
			<b>Active</b>
      <p></p>
    </div>
    <div id="bracket" class="tab-pane fade">
      <h3>Menu 2</h3>
      <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
    </div>
    <div id="contact" class="tab-pane fade">
      <h3>Menu 3</h3>
      <p>Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
    </div>
  </div>
</div>
						<!-- Tab content END -->
						<!-- Tab links END --> 		
</div>
					<!--
					<div class="comment-icons">
						<ul>
							<li><span></span><a href="#">Mobile Legend</a> </li>
							<li><span class="clndr"></span>21 Desember 2018</li>
							<li><span class="admin"></span> <a href="#"></a></li>
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
			
			<!-- KANAN  -->
			<!--
			<div class="col-md-4 single-page-right">
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
			</div> 
		-->
			<!-- KANAN END --> 
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
 	<script src="css/Fancybox/dist/jquery.fancybox.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

<script type="text/javascript">

$(document).ready(function(){
  $(".nav-tabs a").click(function(){
    $(this).tab('show');
  });
});
</script>
	
</body>

</html>