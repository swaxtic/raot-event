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
<title>RAOT Event Finder | Events</title>
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
<!-- content -->
<div class="review">
	 <div class="container">
		 <h2 >Events</h2><br>
		 <nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <a class="navbar-brand"><b>Search Events</b></a>
    </div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <form class="navbar-form navbar-left" role="button">
        <div class="form-group">
          <select class="form-control placeholder">
            <option value="">All Games</option>
            <option value="1">Dota 2</option>
            <option value="2">Point Blank</option>
            <option value="3">Mobile Legend</option>
            <option value="3">PUBG</option>
            <option value="3">Counter Strike : GO</option>
          </select>
          <select class="form-control placeholder">
            <option value="">All Platform</option>
            <option value="1">PC</option>
            <option value="2">Mobile</option>
            
          </select>
		  </div>
      </form>
      
      <form class="navbar-form navbar-right" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search a Tournament">
        </div>
        <button type="submit" class="btn glyphicon glyphicon-search"></button>
      </form>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
			<div class="review-md1">
				 <?php 
				    $sql = "select * from event ORDER by idEvent DESC";
				    $que = mysqli_query($konak,$sql);				    
				    while($res=mysqli_fetch_array($que)){
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
				?>	
				 <div class="clearfix"> </div>
			
			</div>
	 <nav>
	 <center>
		<ul class="pagination">
		<li class="disabled"><a href="#" aria-label="Previous"><span aria-hidden="true">«</span></a></li>
		<li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
		<li><a href="#">2</a></li>
		<li><a href="#">3</a></li>
		<li><a href="#">4</a></li>
		<li><a href="#">5</a></li>
		<li><a href="#" aria-label="Next"><span aria-hidden="true">»</span></a></li>
		</ul>
		</center>
	</nav>
</div>
</div>


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