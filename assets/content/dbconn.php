<?php
//database connect
define('DB_NAME', 'unn_w21037098');
define('DB_USER', 'unn_w21037098');
define('DB_PASSWORD', 'OMsai@123');
define('DB_HOST', 'localhost');
$conn = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME) or
die("Can not connect to DB");
?>