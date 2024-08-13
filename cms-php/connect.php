<?php
$dbHost = "localhost";
$dbUser = "root";
$dbPass = "";
$dbName = "cms_db";

$conn = mysqli_connect($dbHost, $dbUser, $dbPass, $dbName);
if (!$conn) {
    die("خطا در اتصال به پایگاه داده");
}
?>