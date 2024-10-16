<?php
session_start();
require "koneksi.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>log-in</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</head>
<!-- style untuk box login -->
<style>
    .main{
        height: 100vh;
    }

    .login-box{
        width: 500px;
        height: 400px;
        box-sizing: border-box;
        border-radius: 10px;
    }

    .warna-btn{
        background-color: #914F1E;
    }

    .no-decoration{
        text-decoration: none;
    }
</style>

<!-- isi box login -->
<body>
<!-- warna background, penataan teks -->
<div class="p-3 mb-2 bg-black text-white">
    <div class="main d-flex flex-column justify-content-center align-items-center">
        <div class="login-box p-5 border-white shadow-white">
            <form action="" method="post">
                <h2>Login sebelum pesan!</h2>
                <div>
                    <label for="username">Username</label>
                    <input type="text" class="form-control" name="username" id="username">
                </div>
                <div>
                    <label for="password">Password</label>
                    <input type="password" class="form-control" name="password" id="password">
                </div>
                <div class="mb-3">
                    <button class="btn warna-btn class form-control mt-3" type="submit" name="loginbtn">Login</button>
                </div>
                <p class="text-center">Belum punya akun? Daftar <a href="register.php" class="text-white">disini!</a></p>
            </form>
        </div>

        <div class="mt-3" style="width: 500px">
            <!-- kondisi dalam box login -->
            <?php
            if(isset($_POST['loginbtn'])){
                $username = htmlspecialchars($_POST['username']);
                $password = htmlspecialchars($_POST['password']);

                $query = mysqli_query($con, "SELECT * FROM user WHERE username='$username'");
                $countdata = mysqli_num_rows($query);
                $data = mysqli_fetch_array($query);

                //memeriksa username dan password
                if($countdata>0){
                    if(password_verify($password, $data['password'])){
                       $_SESSION['username'] = $data['username'];
                       $_SESSION['login'] = true;
                       header('location: beli.php');
                    } else {
                        ?>
                        <div class="alert alert-warning" role="alert">
                            Password salah!
                        </div>
                        <?php
                    }
                } else {
                    ?>
                    <div class="alert alert-warning" role="alert">
                        Akun tidak tersedia!
                    </div>
                    <?php
                }
            }
            ?>
        </div>
    </div>

</div>
</body>
</html>