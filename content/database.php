<?php
global $conn;
$host = "localhost"; /* Host name */
$user = "pcbuilder"; /* User */
$password = "123456"; /* Password */
$dbname = "pcbuilder"; /* Database name */
$conn = mysqli_connect($host, $user, $password, $dbname);
$conn-> set_charset("utf8");