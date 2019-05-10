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
			<!-- Multi Tab links -->
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
      <p>Bracket Here</p>
    </div>
    <div id="contact" class="tab-pane fade">
      <p>Contact Person</p>
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
			<?php
		       $sql1     = "select * from daftarevent where id_event='$id'";
					 $que1     = mysqli_query($konak,$sql1);
					 $data = array ();
					 while (($row = mysqli_fetch_array($que1)) != null){
						 $data[] = $row;
					 }
						 $cont = count ($data);
		   ?>
			<div class="col-md-4 single-page-right">
				<div class="category blog-ctgry">
					<h4>Registration Open</h4>
					<div class="list-group">
						<div class="list-group-item"><?php echo $cont ?> Player Registered.
						 </div>
						 <?php if(!isset($_SESSION['status'])){ ?>
							<center> <a href="login.php" class="list-group-item">  <strong> Login to join the tournament </strong> </a> </center>
						<?php
						}else{ ?>
						<div class="nav">
						<ul class="nav nav-tabs">	
							<center> <a href="#daftarevent" class="list-group-item" type="submit">  <strong> JOIN THE TOURNAMENT </strong> </a> </center>
						</ul>
						<!-- FORM -->
							<div class="tab-content">
    					<div id="daftarevent" class="tab-pane">
							<div class="list-group-item">
								<div class="coment-form">
							<form action="event.php" method="post">
							<label class="control-label" for="basicinput">Nama Team</label><br>
								<input type="text" name="namateam" placeholder="Nama Team" required=""/><br>
							<label class="control-label" for="basicinput">Pendaftar</label><br>
								<input type="text" name="nickname" value="<?php echo $_SESSION['nick'] ?>" disabled/>
								<br>
								<input type="submit" name="register" value="REGISTER">
						</form>
						</div>
						 </div>
				</div>
						</div>
						</div>
  </div>
			<?php
			if(isset($_POST['register'])) {
				$nteam = $_POST['namateam'];
				$idpanitia = $_SESSION['id_panitia'];
				$idevent = $id;
				$cekdaftar = "SELECT id_user FROM daftarevent WHERE id_user ='$idpanitia'";
				$resultcek = $konak->query($cekdaftar);
				if($resultcek ->num_rows>0){
            echo "ERROR : Anda Sudah Mendaftar..";
				}
				// if else panitia tdk bisa mendaftar eventnya sendiri
				else{
					$ins="insert into daftarevent (id_user,tim,id_event) values ('$idpanitia','$nteam','$idevent')";
            
					if(mysqli_query($konak,$ins)){ ?>
						<p>Success register to this Tournament, You will be redirected to event page <span id="counter">5</span> second(s).</p>
						<script type="text/javascript">
						function countdown() {
							var i = document.getElementById('counter');
							if (parseInt(i.innerHTML)<=0) {
									location.href = 'event.php?detail=<?php echo $res['idEvent']; ?>';
							}
							i.innerHTML = parseInt(i.innerHTML)-1;
						}
						setInterval(function(){ countdown(); },1000);
						</script>
					<?php
					}else {
							echo "Error: " . $ins . "<br>" . mysqli_error($konak);
					}
				}
			}
		  ?>

						<?php //ELSE LOGIN
						} 
						?>
						 </div>
					</div>
				</div>				
			</div> 
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