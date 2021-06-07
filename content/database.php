<?php
$host = "d85345.mysql.zonevs.eu"; /* Host name */
$user = "d85345_userpc"; /* User */
$password = "BXR9GpAN67h6h4h6dn"; /* Password */
$dbname = "d85345_pcbuilder"; /* Database name */
global $con;
$con = mysqli_connect($host, $user, $password, $dbname);
$con->set_charset("utf8");
// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}
?>