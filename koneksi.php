<?php

$hostname = "127.0.0.1";
$username = "root";
$password = "";
$db_name = "be";

$sambung = mysqli_connect($hostname, $username, $password, $db_name);

if (!$sambung) {
    die("Koneksi Bermasalah : " . mysqli_connect_error());
}
