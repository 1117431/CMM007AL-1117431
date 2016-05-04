<?php

// this is used to create a connection the database
define('DB_SERVER', 'ap-cdbr-azure-east-c.cloudapp.net');
define('DB_USERNAME','b727387c05fba8');
define('DB_PASSWORD', 'c56dee69');
define('DB_DATABASE','CMM007ALDB-1117431');
$db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
//kicks off connection with registerd details

?>

