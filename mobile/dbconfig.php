<?php
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'hack');    // DB username
define('DB_PASSWORD', 'qwe123');    // DB password
define('DB_DATABASE', 'CLIMAX');      // DB name
$connection = mysql_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD) or die( "Unable to connect");
$database = mysql_select_db(DB_DATABASE) or die( "Unable to select database");
?>