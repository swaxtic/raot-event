<?php 
// mengaktifkan session php
session_start();

// menghubungkan dengan koneksi
include 'config.php';

// menangkap data yang dikirim dari form
if (isset($_POST['submit'])){
$email = $_POST['email'];
$password = $_POST['password'];

// menyeleksi data admin dengan username dan password yang sesuai
$data = mysqli_query($konak,"select * from panitia where email='$email' and pass='$password'");

// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($data);

if($cek > 0){
    $r = mysqli_fetch_assoc($data);
    $_SESSION['id_panitia'] = $r['id_panitia'];
    $_SESSION['nick'] = $r['nick'];
	$_SESSION['email'] = $r['email'];
	$_SESSION['status'] = "login";
	header("location:index.php");
}else{
	header("location:index.php?pesan=gagal");
}	
}
else{
		header("location:index.php?pesan=gagal");

}

?>