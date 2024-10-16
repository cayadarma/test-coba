<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Kopi Fresh Up</title>

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

  <!-- Navbar start -->
  <nav class="navbar">
    <a href="#" class="navbar-logo">fresh<span>up</span>.</a>

    <!-- isi dari navbarnya -->
    <div class="navbar-nav">
      <a href="#home">Home</a>
      <a href="#about">Tentang Kami</a>
      <a href="#menu">Menu</a>
      <a href="#products">Produk</a>
      <a href="#contact">Kontak</a>
    </div>

    <!-- ini extra navbar (button keranjang, search button, and hamburger menu) -->
    <div class="navbar-extra">
      <a href="#" id="search-button"><i data-feather="search"></i></a>
      <a href="#" id="shopping-cart-button"><i data-feather="shopping-cart"></i></a>
      <a href="#" id="hamburger-menu"><i data-feather="menu"></i></a>
    </div>

    <!-- Search Form start -->
    <div class="search-form">
      <input type="search" id="search-box" placeholder="search here...">
      <label for="search-box"><i data-feather="search"></i></label>
    </div>
    <!-- Search Form end -->

    <!-- Shopping Cart start -->
    <div class="shopping-cart">
      <!-- produk 1 -->
      <div class="cart-item">
        <img src="img/products/americano.jpg" alt="Product 1">
        <div class="item-detail">
          <a href="login.php"><h3>Americano</h3></a>
          <div class="item-price">IDR 20K</div>
        </div>
        <i data-feather="trash-2" class="remove-item"></i>
      </div>
      
      <!-- produk 2 -->
      <div class="cart-item">
        <img src="img/products/espresso.jpg" alt="Product 1">
        <div class="item-detail">
        <a href="login.php"><h3>Espresso</h3></a>
          <div class="item-price">IDR 15K</div>
        </div>
        <i data-feather="trash-2" class="remove-item"></i>
      </div>

      <!-- produk 3 -->
      <div class="cart-item">
        <img src="img/products/macchiato.jpg" alt="Product 1">
        <div class="item-detail">
        <a href="login.php"><h3>Caramel Macchiato</h3></a>
          <div class="item-price">IDR 35K</div>
        </div>
        <i data-feather="trash-2" class="remove-item"></i>
      </div>

      <!-- produk 4 -->
      <div class="cart-item">
        <img src="img/products/latte1.jpg" alt="Product 1">
        <div class="item-detail">
        <a href="login.php"><h3>Latte</h3></a>
          <div class="item-price">IDR 30K</div>
        </div>
        <i data-feather="trash-2" class="remove-item"></i>
      </div>
    </div>
    <!-- Shopping Cart end -->

  </nav>
  <!-- Navbar end -->

  <!-- Hero Section start -->
  <section class="hero" id="home">
    <div class="mask-container">
      <main class="content">
        <h1>Mari Nikmati Secangkir <span>Kopi</span></h1>
        <p>Rasakan kelezatan kopi terbaik dengan setiap cangkir di Fresh Up! Di mana
          setiap biji kopi diolah dengan cinta dan keahlian.</p>
      </main>
    </div>
  </section>
  <!-- Hero Section end -->

  <!-- About Section start -->
  <section id="about" class="about">
    <h2><span>Tentang</span> Kami</h2>

    <div class="row">
      <div class="about-img">
        <img src="img/tentang-kami.jpg" alt="Tentang Kami">
      </div>
      <div class="content">
        <h3>Kenapa memilih kopi kami?</h3>
        <p>Di Fresh Up, kami menghadirkan kopi yang bikin kamu ketagihan! Setiap biji kopi kami dipilih dan diproses dengan 
          hati-hati supaya rasanya super enak dan aromanya menggoda.</p>
        <p>Nikmati kopi berkualitas yang bikin setiap hari kamu lebih seru dan penuh energi. Coba sekarang dan rasakan perbedaannya!</p>
      </div>
    </div>
  </section>
  <!-- About Section end -->

  <!-- Menu Section start -->
  <section id="menu" class="menu">
    <h2><span>Menu</span> Kami</h2>

    <div class="row">
      <div class="menu-card">
        <img src="img/menu/espresso.jpg" alt="Espresso" class="menu-card-img">
        <h3 class="menu-card-title">- Espresso -</h3>
        <p class="menu-card-price">IDR 15K</p>
      </div>
      <div class="menu-card">
        <img src="img/menu/rsz_capuccino.jpg" alt="Espresso" class="menu-card-img">
        <h3 class="menu-card-title">- Capuccino -</h3>
        <p class="menu-card-price">IDR 25K</p>
      </div>
      <div class="menu-card">
        <img src="img/menu/latte1.jpg" alt="Espresso" class="menu-card-img">
        <h3 class="menu-card-title">- Latte -</h3>
        <p class="menu-card-price">IDR 30K</p>
      </div>
      <div class="menu-card">
        <img src="img/menu/americano.jpg" alt="Espresso" class="menu-card-img">
        <h3 class="menu-card-title">- Americano -</h3>
        <p class="menu-card-price">IDR 20K</p>
      </div>
      <div class="menu-card">
        <img src="img/menu/macchiato.jpg" alt="Espresso" class="menu-card-img">
        <h3 class="menu-card-title">- Caramel Macchiato -</h3>
        <p class="menu-card-price">IDR 35K</p>
      </div>
      <div class="menu-card">
        <img src="img/menu/piccolo.jpg" alt="Espresso" class="menu-card-img">
        <h3 class="menu-card-title">- Piccolo -</h3>
        <p class="menu-card-price">IDR 25K</p>
      </div>
    </div>
  </section>
  <!-- Menu Section end -->

  <!-- Products Section start -->
  <section class="products" id="products">
    <h2><span>Produk Unggulan</span> Kami</h2>
    <p>Produk terlaris Fresh Up dengan cita rasa unik dan memikat, sehingga menjadi favorit di setiap tegukan.</p>

    <div class="row">
      <!-- produk terlaris 1 -->
      <div class="product-card">
        <div class="product-icons">
          <a href="login.php"><i data-feather="shopping-cart"></i></a>
        </div>
        <div class="product-image">
          <img src="img/products/espresso.jpg" alt="Product 1">
        </div>
        <div class="product-content">
          <h3>Espresso</h3>
          <div class="product-stars">
            <i data-feather="star" class="star-full"></i>
            <i data-feather="star" class="star-full"></i>
            <i data-feather="star" class="star-full"></i>
            <i data-feather="star" class="star-full"></i>
            <i data-feather="star"></i>
          </div>
          <div class="product-price">IDR 15K <span>IDR 25K</span></div>
        </div>
      </div>

      <!-- produk 2 -->
      <div class="product-card">
        <div class="product-icons">
          <a href="login.php"><i data-feather="shopping-cart"></i></a>
        </div>
        <div class="product-image">
          <img src="img/products/macchiato.jpg" alt="Product 1">
        </div>
        <div class="product-content">
          <h3>Caramel Macchiato</h3>
          <div class="product-stars">
            <i data-feather="star" class="star-full"></i>
            <i data-feather="star" class="star-full"></i>
            <i data-feather="star" class="star-full"></i>
            <i data-feather="star" class="star-full"></i>
            <i data-feather="star" class="star-full"></i>
          </div>
          <div class="product-price">IDR 35K <span>IDR 60K</span></div>
        </div>
      </div>

      <!-- produk terlaris 3 -->
      <div class="product-card">
        <div class="product-icons">
          <a href="login.php"><i data-feather="shopping-cart"></i></a>
        </div>
        <div class="product-image">
          <img src="img/products/americano.jpg" alt="Product 1">
        </div>
        <div class="product-content">
          <h3>Americano</h3>
          <div class="product-stars">
            <i data-feather="star" class="star-full"></i>
            <i data-feather="star" class="star-full"></i>
            <i data-feather="star" class="star-full"></i>
            <i data-feather="star" class="star-full"></i>
            <i data-feather="star"></i>
          </div>
          <div class="product-price">IDR 20K <span>IDR 30K</span></div>
        </div>
      </div>

      <!-- produk terlaris 4 -->
      <div class="product-card">
        <div class="product-icons">
          <a href="login.php"><i data-feather="shopping-cart"></i></a>
        </div>
        <div class="product-image">
          <img src="img/products/latte1.jpg" alt="Product 1">
        </div>
        <div class="product-content">
          <h3>Latte</h3>
          <div class="product-stars">
            <i data-feather="star" class="star-full"></i>
            <i data-feather="star" class="star-full"></i>
            <i data-feather="star" class="star-full"></i>
            <i data-feather="star" class="star-full"></i>
            <i data-feather="star"></i>
          </div>
          <div class="product-price">IDR 30K <span>IDR 55K</span></div>
        </div>
      </div>
    </div>
  </section>
  <!-- Products Section end -->

  <!-- Contact Section start -->
  <section id="contact" class="contact">
    <h2><span>Kontak</span> Kami</h2>
    <p>Hubungi kami melalui email di bawah untuk segala pertanyaan atau saran. Kami siap membantu dan mendengarkan kebutuhan Anda!</p>

    <div class="row">
      <form action="">
      <a href="kopifreshup@gmail.com" class="btn">Email: kopifreshup@gmail.com</a>
      </form>

    </div>
  </section>
  <!-- Contact Section end -->

  <!-- Footer start -->
  <footer>
    <div class="socials">
      <a href="instagram.com"><i data-feather="instagram"></i></a>
      <a href="x.com"><i data-feather="twitter"></i></a>
      <a href="faceboo.com"><i data-feather="facebook"></i></a>
    </div>

    <div class="links">
      <a href="#home">Home</a>
      <a href="#about">Tentang Kami</a>
      <a href="#menu">Menu</a>
      <a href="#contact">Kontak</a>
    </div>

    <div class="credit">
      <p>Source <a href="">sandhikagalih</a> - edited by Ri | &copy; 2023 - 2024.</p>
    </div>
  </footer>
  <!-- Footer end -->

  <!-- Feather Icons -->
  <script>
    feather.replace()
  </script>

  <!-- My Javascript -->
  <script src="js/script.js"></script>
</body>

</html>