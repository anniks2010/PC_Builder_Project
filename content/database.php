<?php
$host = "d86297.mysql.zonevs.eu"; /* Host name */
$user = "d86297_testuser"; /* User */
$password = "Nitrome9090_"; /* Password */
$dbname = "d86297_test"; /* Database name */
global $con;
$con = mysqli_connect($host, $user, $password, $dbname);
$con->set_charset("utf8");
// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}
?>