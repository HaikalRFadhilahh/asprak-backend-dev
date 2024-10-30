<?php
require "./koneksi.php";
$username =  @$_GET["username"];

if (empty($username)) {
    // echo "GET Null";
    header("location: ./dashboard.php?err=Query Username Tidak Boleh Kosong!");
} else {
    try {
        //code...
        $query = "DELETE FROM user WHERE username='$username'";
        mysqli_query($sambung, $query);
        header("location: ./dashboard.php");
    } catch (\Throwable $th) {
        //throw $th;
        header("location: ./dashboard.php?err=Gagal Mengapus Data, Internal Server Error!");
    }
}
