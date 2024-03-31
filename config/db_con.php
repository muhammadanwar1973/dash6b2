<?php
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'parkash');
define('DB_PASSWORD', 'apnaifmp@32%ICM');
define('DB_NAME', 'parkash_ifmp_lms');

$con = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

if($con === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>
