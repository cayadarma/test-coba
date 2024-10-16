<!-- navbar.php -->
<nav class="navbar">
  <a href="index.php#" class="navbar-logo">fresh<span>up</span>.</a>

  <!-- isi dari navbarnya -->
  <div class="navbar-nav">
    <a href="index.php#home">Home</a>
    <a href="index.php#about">Tentang Kami</a>
    <a href="index.php#menu">Menu</a>
    <a href="index.php#products">Produk</a>
    <a href="index.php#contact">Kontak</a>
  </div>

  <!-- ini extra navbar (button keranjang, search button, and hamburger menu) -->
  <div class="navbar-extra">
    <a href="#" id="search-button"><i data-feather="search"></i></a>
    <a href="#" id="shopping-cart-button"><i data-feather="shopping-cart"></i></a>
    <a href="#" id="hamburger-menu"><i data-feather="menu"></i></a>

    <!-- Search Form start -->
    <div class="search-form">
      <input type="search" id="search-box" placeholder="search here...">
      <label for="search-box"><i data-feather="search"></i></label>
    </div>
    <!-- Search Form end -->

        <!-- Shopping Cart start -->
        <div class="shopping-cart">
      <div class="cart-item">
        <img src="img/products/1.jpg" alt="Product 1">
        <div class="item-detail">
          <a href="beli.php"><h3>Product 1</h3></a>
          <div class="item-price">IDR 30K</div>
        </div>
        <i data-feather="trash-2" class="remove-item"></i>
      </div>
      <div class="cart-item">
        <img src="img/products/1.jpg" alt="Product 1">
        <div class="item-detail">
          <h3>Product 1</h3>
          <div class="item-price">IDR 30K</div>
        </div>
        <i data-feather="trash-2" class="remove-item"></i>
      </div>
      <div class="cart-item">
        <img src="img/products/1.jpg" alt="Product 1">
        <div class="item-detail">
          <h3>Product 1</h3>
          <div class="item-price">IDR 30K</div>
        </div>
        <i data-feather="trash-2" class="remove-item"></i>
      </div>
    </div>
    <!-- Shopping Cart end -->

  </nav>
  <!-- Navbar end -->

  
  </div>
</nav>
