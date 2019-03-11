<?php
session_start();
unset($_SESSION['status']);
// mengalihkan halaman sambil mengirim pesan logout
header("location:index.php?logoutsukses");
?>