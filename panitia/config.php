<?php
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');    // DB username
define('DB_PASSWORD', '');    // DB password
define('DB_DATABASE', 'raot-event');      // DB name
$konak = mysqli_connect (DB_SERVER, DB_USERNAME, DB_PASSWORD) or die( "Unable to connect");
$database = mysqli_select_db($konak,DB_DATABASE) or die( "Unable to select database");

?>
