<!doctype html>
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
    <?php include 'header.php'; ?>
        <div class="content pure-u-1 pure-u-md-21-24">
            <div class="header-small">
            <?php //...MENGHITUNG JUMLAH PENDAFTAR YANG DI TERIMA
                  //...LALU MEMBANDINGKAN DENGAN SLOT
		        $sqldaftar     = "select * from daftarevent where id_event='$id' AND status=1";
			    $quedaftar     = mysqli_query($konak,$sqldaftar);
				$data          = array ();
			    while (($row = mysqli_fetch_array($quedaftar)) != null){
					$data[] = $row;
			    }
                    $cont = count ($data);
                    $sqlslot = "select slot from event where idEvent='$id'";
                    $queslot = mysqli_query($konak,$sqlslot);
                    $slot    = mysqli_fetch_assoc($queslot);

		        ?>
                <div class="items">
                    <h1 class="subhead">Add Participant<a class="pure-button button-small button-secondary" href="#">Pending</a> - <?php echo $res['nm_event']; ?></h1>     
                    <table class="pure-table pure-table-bordered">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Nickname</th>
                            <th>Username</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <?php
                        $id =$_GET['detail'];
                        if(isset($_GET['detail'])){
                            $sql     = "SELECT event.idEvent, event.nm_event, daftarevent.status, daftarevent.id_user, panitia.nama, panitia.nick, tim

                            FROM daftarevent JOIN panitia
                            
                            ON daftarevent.id_user = panitia.id_panitia
                            
                            JOIN event
                            
                            ON event.idEvent = daftarevent.id_event
                            
                            WHERE event.idEvent = $id AND daftarevent.status= '0'";
                            $que     = mysqli_query($konak,$sql);
                            $r=0;
                            while ($res=mysqli_fetch_array($que)){
                            $r++;
                        ?>
                        <tbody>
                        <tr>
                            <td><?php echo $r; ?></td>
                            <td><?php echo $res['tim']; ?></td>
                            <td>@<?php echo $res['nick']; ?></td>
                            <td><?php echo $res['status']; ?></td>
                            <td>                                
                                <a class="pure-button button-small button-success" href="post-form.html">Accept</a>
                                <a class="pure-button button-small button-error" href="#" onclick="return confirm('Are you sure?');">Decline</a>
                            </td>
                        </tr>
                        </tbody>
                    <?php
                            }
                        }
                            ?>
                    </table>
                </div>
                <br>
                <br>
                <br>
                <br>
                
                <div class="items">
                    <h1 class="subhead">Add Participant <a class="pure-button button-small button-secondary" href="#">Active</a></h1>

                    

                    <table class="pure-table pure-table-bordered">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Nickname/Team</th>
                            <th>Username</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <?php
                        $id =$_GET['detail'];
                        if(isset($_GET['detail'])){
                            $sql     = "SELECT event.idEvent, event.nm_event, daftarevent.status, daftarevent.id_user, panitia.nama, panitia.nick ,tim

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
                        <tbody>
                        <tr>
                        <td><?php echo $r; ?></td>
                            <td><?php echo $res['tim']; ?></td>
                            <td>@<?php echo $res['nick']; ?></td>
                            <td><?php echo $res['status']; ?></td>
                            <td>                              
                                <a class="pure-button button-small button-success" href="post-form.html">Accept</a>
                                <a class="pure-button button-small button-error" href="#" onclick="return confirm('Are you sure?');">Decline</a>
                            </td>
                        </tr>
                        </tbody>
                        <?php
                            }
                        }
                            ?>
                    </table>
                </div>
                

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