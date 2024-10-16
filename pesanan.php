<?php
//mengkoneksi ke database & session login jika berhasil
require "koneksi.php";
require "session.php";

$queryOrder = mysqli_query($con, "SELECT * FROM pesanan");
$jumlahOrder = mysqli_num_rows($queryOrder);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pessanan</title>
</head>
<body>
    
</body>
</html>