<!DOCTYPE html>
<html lang="en">
<?php
    session_start();
    include 'config.php';

    if(!isset($_SESSION['status'])){
        header("location:../login.php");
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
								<h3>Add Your Tournaments Info</h3>
							</div>
							<div class="module-body">

									<div class="alert">
										<button type="button" class="close" data-dismiss="alert">×</button>
										<strong>Warning!</strong> Deskripsikan event anda sedetail mungkin, masukkan deskripsi berupa hadiah,contact person,atau link terkait.
									</div>
									<div class="alert alert-error">
										<button type="button" class="close" data-dismiss="alert">×</button>
										<strong>Oh snap!</strong> Inputkan rules sejelas dan sedetail mungkin sesuai dari event yang akan diselenggarakan.
									</div>

									<br />

									<form class="form-horizontal row-fluid" action="+event.php" method="post" enctype="multipart/form-data">
										<div class="control-group">
											<label class="control-label" for="basicinput">Upload Gambar</label>
											<div class="controls">
											<input type="file" name="gambarEvent" id="gambarEvent">
											<span class="help-inline">Upload Gambar (Poster,dsb)</span>
											</div><br>
											
											<label class="control-label" for="basicinput">Nama Event</label>
											<div class="controls">
												<input type="text" id="basicinput" name="namaevent" placeholder="Type something here..." class="span8">
												<span class="help-inline">Minimum 5 Characters</span>
											</div><br>
											
											<label class="control-label" for="basicinput">Venue</label>
											<div class="controls">
												<textarea class="span8" name="alamat" rows="5"></textarea>
											</div><br>
								
											<label class="control-label" name="tanggal" for="basicinput">Tanggal Event</label>
											<div class="controls">
												<input type="date" id="basicinput" name="tanggal" class="span8">
											</div><br>

											<label class="control-label">Slot/Size</label>
											<div class="controls">
											<select tabindex="1" data-placeholder="Select your tournament size.." class="span8" name="slot">
													<option value="">Select here..</option>
													<option value="2">2</option>
													<option value="4">4</option>
													<option value="8">8</option>
													<option value="16">16</option>
													<option value="32">32</option>
													<option value="64">64</option>
												</select>
											</div>
										</div>
											
											<div class="control-group">
											<label class="control-label" for="basicinput">Nama Game</label>
											<div class="controls">
												<input type="text" id="basicinput" name="namagame" placeholder="Type something here..." class="span8">
											</div><br>
											
											<label class="control-label">Mode</label>
											<div class="controls">
											<select tabindex="1" data-placeholder="Select here.." class="span8" name="mode">
													<option value="">Select here..</option>
													<option value="1">Online</option>
													<option value="0">Offline</option>
												</select>
											</div>
											
										</div>
										<div class="control-group">
											<label class="control-label" for="basicinput">Select Platform</label>
											<div class="controls">
												<select tabindex="1" data-placeholder="Select here.." class="span8" name="platform">
													<option value="">Select here..</option>
													<option value="PC">PC</option>
													<option value="Playstation 4">Playstation 4</option>
													<option value="Xbox One">Xbox One</option>
													<option value="Switch">Switch</option>
													<option value="Mobile">Mobile</option>
													<option value="Playstation 3">Playstation 3</option>
													<option value="Playstation 2">Playstation 2</option>
													<option value="Playstation 1">Playstation 1</option>
													<option value="PS Vita">PS Vita</option>
													<option value="PSP">PSP</option>
													<option value="Xbox 360">Xbox 360</option>
													<option value="Xbox">Xbox</option>
													<option value="PS Vita">PS Vita</option>
													<option value="Wii U">Wii U</option>
													<option value="Wii">Wii</option>
													<option value="Other Platform">Other Platform</option>
												</select>
											</div>
										</div>
										<div class="control-group">
											<label class="control-label" for="basicinput">Deskripsi Event</label>
											<div class="controls">
												<textarea class="ckeditor" name="deskripsi" placeholder="Deskripsikan Event Sedetail mungkin.." rows="5" cols="80" required/></textarea>
											</div>
											
											<label class="control-label" for="basicinput">Peraturan Event</label>
											<div class="controls">
											<textarea class="ckeditor" name="rules"  placeholder="Masukkan Peraturan, Mis: jumlah peserta,dll" rows="5" required/></textarea>
											</div>
										</div>

										<div class="control-group">
											<div class="controls">
												<button type="submit" name="submitEv" class="btn">Submit Form</button>
											</div>
										</div>
									</form>
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
				