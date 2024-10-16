<?php
//mengkoneksi dengan database
$con = mysqli_connect("localhost","root","","kedai_kopi");

//cek koneksi
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit();
    }
?>