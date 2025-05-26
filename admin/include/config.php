<?php
define('DB_SERVER','sql100.infinityfree.com');
define('DB_USER','if0_39013524');
define('DB_PASS' ,'JXW7NoG3GELPjkb');
define('DB_NAME', 'if0_39013524_phone_shop');


$con = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
if (mysqli_connect_errno())
{
 echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>