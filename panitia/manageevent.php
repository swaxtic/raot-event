<!DOCTYPE html>
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

                    <div class="pure-u-1 pure-u-lg-1-1">
                        <div class="column-block"><br> 
                        <a href="addparticipant.php?detail=<?php echo $res['idEvent']; ?>" class="btn btn-lg span4 btn-primary">
                            <i class="fa fa-plus fa-5x"></i><br/>
                            Add Participant
                        </a>                      
                        <a href="editevent.php?detail=<?php echo $res['idEvent']; ?>" class="btn btn-lg span4 btn-primary">
                            <i class="fa fa-plus fa-5x"></i><br/>
                            Edit Your Tournament
                        </a>                        
                        <a href="addevents.php?detail=<?php echo $res['idEvent']; ?>" class="btn btn-lg span4 btn-primary">
                            <i class="fa fa-plus fa-5x"></i><br/>
                            Generate Bracket
                        </a>
                        <a href="addparticipant.php?detail=<?php echo $res['idEvent']; ?>" class="btn btn-lg span4 btn-primary">
                            <i class="fa fa-plus fa-5x"></i><br/>
                            Delete Tournament
                        </a>    
                        </div>
                    </div>
            
            </div>

            <!-- FOOTER START -->  

                <div class="footer">
                    <div class="pure-menu pure-menu-horizontal">
                        <ul>
                            <li class="pure-menu-item"><a href="http://purecss.io/" class="pure-menu-link">PURE CSS</a></li>
                            <li class="pure-menu-item"><a href="http://fikiruretgeci.com" class="pure-menu-link">FIKIR URETGECI</a></li>
                            <li class="pure-menu-item"><a href="http://pure-themes.com" class="pure-menu-link">PURE THEMES</a></li>
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
