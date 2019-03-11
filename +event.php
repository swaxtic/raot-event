<?
include "config.php";

error_reporting(E_ALL);
ini_set('display_errors', 'on');
$currentDir = getcwd();
if(isset($_POST['submitEv'])) {
    session_start();
    $ekstensi = array('jpg','png','jpeg');
    $target_dir     = "assetsz/gambir/";
    $target_file    = $target_dir . $_FILES['gambarEvent']['name'];
    $fileName       = $_FILES['gambarEvent']['name'];
    $x              = explode('.',$fileName);
    $fileExtension  = strtolower(end($x));
    $ukuran         = $_FILES['gambarEvent']['size'];
    $eventName	=	$_POST['namaevent'];    
    $namaGame	=	$_POST['namagame'];
    $Platform	=	$_POST['platform'];
    $tgl		=	$_POST['tanggal'];
    $Alamat		=	$_POST['alamat'];
    $mode		=	$_POST['mode'];
    $desk		=	$_POST['deskripsi'];
    $rules		=	$_POST['rules'];
    $id_panitia =   $_SESSION['id_panitia']; //ambil session untuk mengisi uplink
    
/******************************************************************************
 * Swaxtic Here*
 *****************************************************************************/
if($fileName != ""){
    $rando = rand(1,10000);
    $nfile = $rando."-".$fileName;
    
    if(in_array($fileExtension,$ekstensi)==true){
        if($ukuran < 2000000){
            move_uploaded_file($_FILES['gambarEvent']['tmp_name'],$target_dir.$nfile);
            $simp   =   "insert into event (nm_event,foto,game,platform,tgl,deskripsi,rules,alamat,mode,uplink,tgl_upload) values ('$eventName','$nfile','$namaGame','$Platform','$tgl','$desk','$rules','$Alamat','$mode','$id_panitia',now())";
            if(mysqli_query($konak,$simp)){
                $q      = "select idEvent from event WHERE foto ='$nfile'";
				$que    = mysqli_query($konak,$q);
				$res    = mysqli_fetch_array($que);
            ?>
            
            <p>Success Create your Event, will be redirected to login page
            <a href="event.php?detail=<? echo $res['idEvent']; ?>">Link</a></p>
                <?
                }else{
                    echo $id_panitia;
                    print_r($_SESSION);
                    echo "gagal konak";
                }
            }
            
            
            
        }
    }
}
mysqli_close($konak);
?>
