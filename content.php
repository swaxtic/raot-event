<?php

    $s = isset($_GET['page']) ? $_GET['page'] : null;
    
switch($s){
    
    case "detail" : include ("event.php");break;
    
default : inlcude("index.php");break;
}

?>