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
    <title>pesan sekarang!</title>

     <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,300;0,400;0,700;1,700&display=swap"
    rel="stylesheet">

  <!-- Feather Icons -->
  <script src="https://unpkg.com/feather-icons"></script>

  <!-- Style website -->
  <link rel="stylesheet" href="css/style.css">

</head>
<body>
<!-- tombol navigasi yang di atas -->
<nav class="navbar">
  <a href="index.php#" class="navbar-logo space-around">fresh<span>up</span>.</a>

  <!-- isi dari navbarnya -->
  <div class="navbar-nav">
    <!-- buat balik ke menu utama/home -->
    <a href="index.php#home">Home</a>
    <a href="logout.php">LOGOUT</a>
  </div>
  </nav>
  <!-- Navbar end -->

    <!-- Contact Section start -->
  <section id="contact" class="contact">
    <h2><span>Pesan</span> Sekarang</h2>

    
    <div class="row">
        <form action="" method="post">
        <!-- form nama pemesan -->
        <div class="input-group">
            <label for="nama">Nama</label>
            <input type="text" id="nama" name="nama" class="form-control" required>
        </div>

        <!-- form alamat pemesan -->
        <div class="input-group">
            <label for="alamat">Alamat</label>
            <input type="text" id="alamat" name="alamat" class="form-control" required>
        </div>

        <!-- form pesanan -->
        <div class="input-group">
            <label for="pesanan">Pesanan</label>
            <input type="text" id="pesanan" name="pesanan" class="form-control" required>
        </div>
        <button type="submit" class="btn" name="pesan">Pesan!</button>
        </form>


        <!-- validasi untuk menambahkan ke tabel pesanan jika tombol pesan ditekan -->
        <?php
        // Proses pengiriman formulir
        if (isset($_POST['pesan'])) {
            $nama = htmlspecialchars($_POST['nama']);
            $alamat = htmlspecialchars($_POST['alamat']);
            $pesanan = htmlspecialchars($_POST['pesanan']);

            // Query untuk menambahkan data ke tabel pesanan
            $queryTambah = mysqli_query($con, "INSERT INTO pesanan (nama, alamat, pesanan) VALUES ('$nama', '$alamat', '$pesanan')");

            if ($queryTambah) {
                // Mengarahkan pengguna ke halaman index.php setelah 1 detik
                echo '<meta http-equiv="refresh" content="1; url=index.php" />';
            } else {
                echo "Terjadi kesalahan: " . mysqli_error($con);
            }
        }
        ?>


    </div>
  </section>
  <!-- Contact Section end -->

</body>
</html>
