<?php
//FUNCTION UNTUK REGISTER SAJA

//mengkoneksi ke database
$conn=mysqli_connect("localhost", "root", "", "kedai_kopi");

//function query dengan parameter query
function query($query){
    global $conn;
    $result=mysqli_query($conn, $query);
    $rows=[];
    while ($row=mysqli_fetch_assoc($result)){
        $rows[]=$row;
    }
    return $rows;
}

function register($data){
    global $conn;
    $username=strtolower(stripslashes($data['username']));
    $password=mysqli_real_escape_string($conn, $data['password']);
    $repassword=mysqli_real_escape_string($conn, $data['repassword']);

    //cek apakah username sudah ada/belum
    $result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username'");
    if (mysqli_fetch_assoc($result)) {
        echo "Username telah terdaftar! Silahkan masukkan username lain.";
    }

    //pengecekan password dan repassword
    if($password !== $repassword) {
        echo "Password tidak sama!";
        return false;
    }
    
    //enkripsi password
    $passwordEnkripsi=password_hash($password, PASSWORD_DEFAULT);

    //insert data users
    $query="INSERT INTO user (username, password)
            VALUES ('$username', '$passwordEnkripsi')";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}
?>
