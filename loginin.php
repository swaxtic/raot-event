<?php 
	include "config.php";

	if(isset($_POST['submit'])){
		$email = $_POST['email'];
		$password = md5($_POST['password']);

		$login = mysqli_query($konak, "select * from panitia where email='$email' and pass='$password'");
		$cek = mysqli_num_rows($login);

		if($cek > 0){
			session_start();
			$r = mysqli_fetch_assoc($login);
			$_SESSION['id_panitia'] = $r['id_panitia'];
			$_SESSION['email'] = $r['email'];
			$_SESSION['nick'] = $r['nick'];
			$_SESSION['status'] = "login";
			header("location:panitia/index.php");
		}else{
			header("location:index.php?pesan=gagal");
		}
	}
?>