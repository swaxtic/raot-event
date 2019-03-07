<?php 
include "config.php";
if(isset($_POST['register'])) { // jika submit di tekan
//Validasi
    $cnick=$_POST['nickname'];
    $cemail=$_POST['email'];
    $cpass=$_POST['password'];
    $cekuser = "SELECT email FROM panitia WHERE email ='$cemail'";
    $ceknick = "SELECT nick FROM panitia WHERE nick ='$cnick'";
    $result = $konak->query($cekuser);
    $result1 = $konak->query($ceknick);
    if($result ->num_rows>0){
        echo "ERROR : email sudah terdaftar..";
    }else if($result1 ->num_rows>0){
        echo "ERROR : Nick has been Taken..";
    }
    else if (!filter_var($cemail, FILTER_VALIDATE_EMAIL)) {
        echo "Invalid email format";
    }else if (!preg_match("(^[a-zA-Z0-9_]{1,}$)", $cnick)) {
        echo "Invalid Nickname"; 
    }else{
        $simp="insert into panitia (nick,email,pass) values ('$cnick','$cemail','$cpass')";
        
        if(mysqli_query($konak,$simp)){ 
        ?>
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
        <?
        }else {
            echo "Error: " . $simp . "<br>" . mysqli_error($konak);
        }
    }
}
mysqli_close($konak);
?>