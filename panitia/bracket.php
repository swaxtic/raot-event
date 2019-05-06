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
        <link type="text/css" href="bracket/jquery.bracket.min.css" rel="stylesheet"/>
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
                            
                            
                            <!--
                               <ul class="widget widget-menu unstyled">
                                <li><a href="ui-button-icon.php"><i class="menu-icon icon-bold"></i> Buttons </a></li>
                                <li><a href="ui-typography.php"><i class="menu-icon icon-book"></i>Typography </a></li>
                                <li><a href="form.php"><i class="menu-icon icon-paste"></i>Forms </a></li>
                                <li><a href="table.php"><i class="menu-icon icon-table"></i>Tables </a></li>
                                <li><a href="charts.php"><i class="menu-icon icon-bar-chart"></i>Charts </a></li>
                            </ul>
                            -->
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
                                        <?php echo $res['nm_event']; ?> - Generate Bracket</h3>
                                </div>
                        </div>
                <div class="module">
                    <div class="module-head">
                        <h3>
                            Generate Bracket</h3>
                        </div>
                        <div class="module-body">
                        <div class="module-option clearfix">
                                    <div class="pull-right">
                                        <a href="#" class="btn btn-primary">Generate Bracket</a>
                                    </div>
                                </div>
                        <div class="row-fluid">
                        <table class="table table-bordered">
                        <thead>
							<tr>
							<th>#</th>
							<th>Nama Tim</th>
							<th>Nama Pendaftar</th>
							<th>Username</th>
							</tr>
						</thead>
                        <?php
                            $sql     = "SELECT event.idEvent, event.nm_event, daftarevent.status, daftarevent.id_user, panitia.nama, panitia.nick, daftarevent.tim

                            FROM daftarevent JOIN panitia
                            
                            ON daftarevent.id_user = panitia.id_panitia
                            
                            JOIN event
                            
                            ON event.idEvent = daftarevent.id_event
                            
                            WHERE event.idEvent = $id AND daftarevent.status= '1'";
                            $que     = mysqli_query($konak,$sql);
                            $r=0;
                            while ($res=mysqli_fetch_array($que)){
                            $r++;
                    ?>
                                <!--/.row-fluid-->
								  <tbody>
									<tr>
									  <td><?php echo $r; ?></td>
									  <td><?php echo $res['tim']; ?></td>
									  <td><?php echo $res['nama']; ?></td>
									  <td><?php echo $res['nick']; ?></td>
									</tr>
                                  </tbody>								
                            <?php
                            }
                            ?>
                            </table>
                                <!--/.row-fluid-->
                            
                        </div>
                        <div class="demo"> 
                        
                    </div>
                    </div>
                    <div class="module-option clearfix">
                                    <div class="pull-right">
                                        <a href="#" class="btn btn-primary">SAVE</a>
                                    </div>
                                </div>
                    </div>
						
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
        <!-- BAGAN START -->
        <script src="bracket/jquery.min.js"></script>
        <script src="bracket/jquery.bracket.min.js"></script>
        <script>
                    /* Custom data objects passed as teams */
                    var customData = {
                        teams : [
                        [{name: "Team 1"}, {name: "Team2"}],
                        [{name: "Team 3"}, {name: "Team 4"}]
                        ],
                        results : []
                    }
                        
                    /* Edit function is called when team label is clicked */
                        function edit_fn(container, data, doneCb) {
                        var input = $('<input type="text">')
                        input.val(data ? data.name : '')
                        container.html(input)
                        input.focus()
                        input.blur(function() {
                            var inputValue = input.val()
                            if (inputValue.length === 0) {
                            doneCb(null);
                            } else {
                            var AndName = inputValue.split(':') // Expects correct input
                            doneCb({name: AndName[0]})
                            }
                        })
                        }
                        
                    /* Render function ini dipanggil ketika label team di rubah
                        *
                        * 'state' berisi:
                        * - empty-bye: No data or score and there won't team advancing to this place
                        * - empty-tbd: No data or score yet. A team will advance here later
                        * - entry-no-score: Data available, but no score given yet
                        * - entry-default-win: Data available, score will never be given as opponent is BYE
                        * - entry-complete: Data and score available
                    */
                    function render_fn(container, data, score, state) {
                    switch(state) {
                    case "empty-bye":
                    container.append("No team")
                    return;
                    case "empty-tbd":
                    container.append("Upcoming")
                    return;
                     
                    case "entry-no-score":
                    case "entry-default-win":
                    case "entry-complete":
                    container.append(data.name)
                    return;
                    }
                    }
                        
                    $(function() {
                    $('.demo').bracket({ //tambahclickfuntion u/ trigger generator
                        init: customData,
                        disableToolbar: true,
                        disableTeamEdit: true,
                        save: function(){}, 
                        decorator: {edit: edit_fn,
                                    render: render_fn}})
                    })
        </script>
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