<?php
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'raoteven_ra0t');    // DB username
define('DB_PASSWORD', 'Raot1897!');    // DB password
define('DB_DATABASE', 'raoteven_raoteven');      // DB name
$konak = mysqli_connect (DB_SERVER, DB_USERNAME, DB_PASSWORD) or die( "Unable to connect");
$database = mysqli_select_db($konak,DB_DATABASE) or die( "Unable to select database");

?>
