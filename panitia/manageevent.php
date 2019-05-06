<!DOCTYPE html>
<html lang="en">
<?php
    session_start();
    include 'config.php';
    $id =$_GET['detail'];
    $sql     ="select * from event where idEvent='$id'";
    $que     = mysqli_query($konak,$sql);
    $res     = mysqli_fetch_array($que);
    $tes     = $res['uplink'];
    if(!isset($_SESSION['status'])){
        header("location:../login.php");
    }else if($_SESSION['id_panitia']!=$tes){
        echo "Can't Do That, We will redirect you back"; ?> <span id="counter">3</span> second(s).</p>
        <script type="text/javascript">
            function countdown() {
                var i = document.getElementById('counter');
                if (parseInt(i.innerHTML)<=0) {
                    location.href = 'index.php';
                }
                i.innerHTML = parseInt(i.innerHTML)-1;
            }
            setInterval(function(){ countdown(); },1000);
        </script>
    <?php 
    }else{
        
?>
<head>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Manage Your Tournaments</title>
        <link type="text/css" href="bootstrap/css/bootstrap.min.css?t[timestamps]" rel="stylesheet">
        <link type="text/css" href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
        <link type="text/css" href="css/theme.css" rel="stylesheet">
        <link type="text/css" href="images/icons/css/font-awesome.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600'
            rel='stylesheet'>
    </head>
    <?php include 'header.php'?>
        <!-- /navbar -->
        <div class="wrapper">
            <div class="container">
                <div class="row">
                    <div class="span3">
                        <div class="sidebar">
                            <ul class="widget widget-menu unstyled">
                                <li class="active"><a href="index.php"><i class="menu-icon fa fa-trophy"></i>My Tournaments
                                </a></li>
                                <!--<li><a href="activity.php"><i class="menu-icon icon-bullhorn"></i>News Feed </a>
                                </li>-->
                                <li><a href="message.php"><i class="menu-icon icon-inbox"></i>Inbox <b class="label green pull-right">
                                    11</b> </a></li>
                                <li><a href="task.php"><i class="menu-icon icon-tasks"></i>Tasks <b class="label orange pull-right">
                                    19</b> </a></li>
                            </ul>
                            <!--/.widget-nav-->
                            <!--/.widget-nav-->
                            <ul class="widget widget-menu unstyled">
                                <li><a class="collapsed" data-toggle="collapse" href="#togglePages"><i class="menu-icon icon-cog">
                                </i><i class="icon-chevron-down pull-right"></i><i class="icon-chevron-up pull-right">
                                </i>More Pages </a>
                                    <ul id="togglePages" class="collapse unstyled">
                                        <li><a href="other-login.php"><i class="icon-inbox"></i>Login </a></li>
                                        <li><a href="other-user-profile.php"><i class="icon-inbox"></i>Profile </a></li>
                                        <li><a href="other-user-listing.php"><i class="icon-inbox"></i>All Users </a></li>
                                    </ul>
                                </li>
                                <li><a href="#"><i class="menu-icon icon-signout"></i>Logout </a></li>
                            </ul>
                        </div>
                        <!--/.sidebar-->
                    </div>
                    <!--/.span3-->
                    
                    <div class="span9">
					<div class="content">
                    <div class="module">
                                <div class="module-head">
                                    <h3>
                                        <?php echo $res['nm_event']; ?> - Overview</h3>
                                </div>
                        </div>
                    <div class="btn-controls">
                                <div class="btn-box-row row-fluid">
                                    <a href="editevent.php?detail=<?php echo $res['idEvent']; ?>" class="btn-box big span4"><i class="icon-edit"></i>
                                        <b><p class="text-muted">
                                            Edit Your Tournament<br><br></p></b>
                                    </a>
                                    <a href="addparticipant.php?detail=<?php echo $res['idEvent']; ?>" class="btn-box big span4"><i class="icon-plus-sign-alt"></i>
                                        <b><p class="text-muted">
                                            Add Participant<br><br></p></b>
                                    </a>
                                    <a href="bracket.php?detail=<?php echo $res['idEvent']; ?>" class="btn-box big span4"><i class="icon-cogs"></i>
                                        <b><p class="text-muted">
                                            Generate Bracket<br><br></p></b>
                                    </a>
                                </div>                  
                            </div>
                            <!--/#btn-controls-->
					</div><!--/.content-->
				</div>
                    <!--/.span9-->
                </div>
            </div>
            <!--/.container-->
        </div>
        <!--/.wrapper-->
        <div class="footer">
            <div class="container">
                <b class="copyright">&copy; Raot </b>All rights reserved.
            </div>
        </div>
        <script src="scripts/jquery-1.9.1.min.js" type="text/javascript"></script>
        <script src="scripts/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
        <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="scripts/flot/jquery.flot.js" type="text/javascript"></script>
        <script src="scripts/flot/jquery.flot.resize.js" type="text/javascript"></script>
        <script src="scripts/datatables/jquery.dataTables.js" type="text/javascript"></script>
        <script src="scripts/common.js" type="text/javascript"></script>
      
    </body>
	<?php
    }
?>
				