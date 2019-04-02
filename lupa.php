<?php
    include 'config.php';
    session_start();
    
    $email = $_POST['email'];

    if(isset($_POST['next'])){
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            echo "Email Tidak Valid !!!";
        }else{
            $query = mysqli_query($konak, "select * from panitia where email='$email'");
            $cek = mysqli_num_rows($query);
            
            if($cek > 0){
                $data = mysqli_fetch_array($query);
                $_SESSION['email'] = $email;

                header("location:ganti_password.php");
            }else{
                echo "Email Tidak Ditemukan !!!";
            }
        }
    }
?>