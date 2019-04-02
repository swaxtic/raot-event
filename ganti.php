<?php
    include 'config.php';
    session_start();

    $email = $_SESSION['email'];
    $new_password = md5($_POST['new_password']);
    if(isset($_POST['submit'])){
        $ganti = mysqli_query($konak, "update panitia set pass='$new_password' where email='$email'");
        if($ganti){
            header("location:login.php");
        }
    }
?>