<?php 
define('DB_HOST', 'localhost');
define('DB_USER', 'Clay');
define('DB_PASS', '1234');
define('DB_NAME', 'feedback');

//create connection 

$conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

//check connection

if($conn->connect_error){
    die('Connection Faild!'.$conn->connect_error);
}

echo 'CONNECTED SUCCESSFULLY';