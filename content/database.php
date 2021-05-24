<?php
$host = "localhost"; /* Host name */
$user = "pcbuilder"; /* User */
$password = "1234"; /* Password */
$dbname = "pcbuilder"; /* Database name */
global $con;
$con = mysqli_connect($host, $user, $password, $dbname);
$con->set_charset("utf8");
// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}
?>