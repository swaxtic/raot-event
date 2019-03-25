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
				 <div class="search">
					 <form>
						 <input type="submit" value="">
						 <input type="text" value="" placeholder="Search...">					 
					 </form>
				 </div>
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
	                           <?php if((isset($_SESSION['status']) && $_SESSION['status']!="login")){ ?>
	                                <li><h3><a href="login.php"><span class="label label-primary">LOGIN</span></a> </h3></li>
	                        <?php        
	                        }else{
	                        $idipan = isset($_SESSION['id_panitia']);
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