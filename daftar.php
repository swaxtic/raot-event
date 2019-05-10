<?php 
    include "config.php";
    if(isset($_POST['register'])) { // jika submit di tekan
        //Validasi
        $cnama = $_POST['nama'];
        $cnick = $_POST['nickname'];
        $cemail = $_POST['email'];
        $vpass  = $_POST['password'];
        $cpass = md5($_POST['password']);
        $cekuser = "SELECT email FROM panitia WHERE email ='$cemail'";
        $ceknick = "SELECT nick FROM panitia WHERE nick ='$cnick'";
        $result = $konak->query($cekuser);
        $result1 = $konak->query($ceknick);
        if (!preg_match("/^[a-zA-Z ]{4,}$/", $cnama)) {
            echo "Invalid Name";
        }else if (!preg_match("(^[a-zA-Z0-9_]{4,}$)", $cnick)) {
            echo "Invalid Nickname"; 
        }else if (!preg_match("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$^",$cemail)) { 
            echo "Invalid email format";
        }else if (!preg_match("/^.*(?=.{8,})(?=.*[0-9])(?=.*[a-z])(?=.*[A-Z]).*$/",$vpass)){
            echo "Password must be at least 8 characters and must contain at least one lower case letter, one upper case letter and one digit";
        }else if($result ->num_rows>0){
            echo "ERROR : email sudah terdaftar..";
        }else if($result1 ->num_rows>0){
            echo "ERROR : Nick has been Taken..";
        //}else if (!filter_var($cemail, FILTER_VALIDATE_EMAIL)) { 
            //echo "Invalid email format";
        }else{
            $simp="insert into panitia (nama,nick,email,pass) values ('$cnama','$cnick','$cemail','$cpass')";
            if(mysqli_query($konak,$simp)){ ?>
        <p>Success Create your account, You will be redirected to login page in <span id="counter">5</span> second(s).</p>
        <script type="text/javascript">
            function countdown() {
                var i = document.getElementById('counter');
                if (parseInt(i.innerHTML)<=0) {
                    location.href = 'login.php';
                }
                i.innerHTML = parseInt(i.innerHTML)-1;
            }
            setInterval(function(){ countdown(); },1000);
        </script>
            <?php
            }else {
                echo "Error: " . $simp . "<br>" . mysqli_error($konak);
            }
        }
    }
    mysqli_close($konak);
?>