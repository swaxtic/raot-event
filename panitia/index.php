<!doctype html>
<?php
    session_start();
    include 'config.php';

    if(!isset($_SESSION['status'])){
        header("location:../login.php");
    }else{
        
?>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="robots" content="noindex, nofollow">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A layout example that shows off a blog page with a list of posts.">
    <title>RAOT EVENT ORGANIZER</title>

    <link rel="stylesheet" href="assets/css/pure-min.css">
    <link rel="stylesheet" href="assets/css/pure-responsive-min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link href="../css/style.css" rel='stylesheet' type='text/css' />

</head>
<body>
<?php include 'header.php' ?>

        <div class="content pure-u-1 pure-u-md-21-24">
            <div class="header-small">

                <div class="items">
                    <h1 class="subhead">My Tournament - <?php echo $_SESSION['nick']; ?></h1>
                </div>
            </div>

                <div class="pure-g">

                    <div class="pure-u-1 pure-u-lg-1-2">
                        <div class="column-block"><br>
                        <a href="addevents.php" class="btn btn-lg span4 btn-primary">
                            <i class="fa fa-plus fa-5x"></i><br/>
                            Add Tournament
                        </a>
                        <div class="review-md1">
                        <?php
										$id = $_SESSION['id_panitia'];
										if(isset($_SESSION['id_panitia'])){
		       							$sql	="select * from event where uplink='$id'";
				    					$que 	= mysqli_query($konak,$sql);				    
				    					while($res=mysqli_fetch_array($que)){
										?>
                                       <div class="col-md-4 sed-md"><br>
				 	    <div class="col-1">
						 <a href="event.php?detail=<?php echo $res['idEvent']; ?>"></a>
						 <h4><a href="manageevent.php?detail=<?php echo $res['idEvent']; ?>"><?php echo $res['nm_event']; ?></a></h4>
                         <p><?php echo substr($res['deskripsi'],0,100); ?></p>
                                    </a>
                                <a class="btn btn-success" href="editevent.php">Edit</a>
                                <a class="btn btn-danger" href="#" onclick="return confirm('Are you sure?');">Delete</a>
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
            </div>

            <!-- FOOTER START -->  

                <div class="footer">
                    <div class="pure-menu pure-menu-horizontal">
                        <ul>
                            <li class="pure-menu-item"><a href="#" class="pure-menu-link">RAOT EVENT ORGANIZER</a></li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<?php
    }
?>
</html>
