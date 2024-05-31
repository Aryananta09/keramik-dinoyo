<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="shop.css">
    <title>Hello, world!</title>
    <style>
        .navbar-nav {
    margin-left: auto;
    margin-right: auto;
  }
  
  .nav-item {
    margin-left: 30px;
    margin-right: 30px;
  }
  
  .navbar-brand {
    margin-right: auto;
  }

  .carousel-item img {
    width: 100%;
    height: auto;
  }

  .text-container {
    position: absolute;
    top: 50%;
    left: 50%;
    text-align: center;
  
  }
  .text-top{
    font-size: 36px;
    font-family: 'Poppins ',sans-serif ;
    font-weight: 600;
    color: black;

  }
  .text-bottom{
    font-size: 16px;
    font-family: 'Poppins Light',sans-serif ;
    font-weight: 100;
    color: black;
  }

  .produk-text{
    font-family: 'Poppins Semibold',sans-serif ;
    font-weight: 600;
    color: #5E5E5E;
  }
  
  
  .card-custom {
    width: 250px;
    height: 320px;
    border-radius: 20px;
    background: lightgray;
    overflow: hidden;
    position: relative;
}

.card-custom img,
.card-produk img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    z-index: 0;
}

.card-custom span,
.card-produk span {
    position: absolute;
    bottom: 0;
    left: 0;
    right: 0;
    margin: 0 auto;
    padding: 10px;
    color: white;
    font-weight: bold;
    z-index: 10;
}

.card-produk {
    width: 250px;
    height: 250px;
    border-radius: 20px;
    background: lightgray;
    overflow: hidden;
    position: relative;
}
  .btn-card {
    position: absolute;
    bottom: 10px;
    right: 10px;
    padding: 5px 30px;
    border-radius: 4px;
    background-color: #FF6F6F;
    border-color: #FF6F6F;
  }
  
  .btn-primary:hover{
    background-color: #C79B91 !important;
    border-color: #C79B91 !important;
}
  .footer{
    border-top: 1px solid #dcdcdc;
  }
  /* #heroImage {
      padding-top: 70px;
    } */
  </style>
  </head>
  <body>

<!-- Navbar -->
<?php include __DIR__ . '/../layouts/navbar.php'; ?>

<div><div id="heroImage" class="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
    <img src="http://localhost/phpmvc/app/uploads/heroshop.png" class="d-block w-100 " alt="Hero Image">
      <div class= "text-container">
        <div class="text-top">Shop</div>
        <div class="text-bottom">Home > Shop</div>
             </div>
        </div>
    </div>
</div>

<div class="container text-center mt-5 mb-5">
  <h1 class="produk-text">Produk Kami</h1>
</div>

<div class="container">
  <div class="row">
    <div class="col-md-3">
      <div class="card" style="width: 18rem;">
        <img src="<?=BASEURLSrc?>/uploads/produk/produk1.png" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Nama produk</h5>
          <p class="card-text">kategori</p>
          <p class="card-text">Rp harga</p>
          <a href="#" class="btn btn-primary btn-card">pesan</a>
        </div>
      </div>
    </div>

    <div class="col-md-3">
      <div class="card" style="width: 18rem;">
      <img src="<?=BASEURLSrc?>/uploads/produk/produk2.png" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Nama produk</h5>
          <p class="card-text">kategori</p>
          <p class="card-text">Rp harga</p>
          <a href="#" class="btn btn-primary btn-card">pesan</a>
        </div>
      </div>
    </div>

    <div class="col-md-3">
      <div class="card" style="width: 18rem;">
      <img src="<?=BASEURLSrc?>/uploads/produk/produk3.png" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Nama produk</h5>
          <p class="card-text">kategori</p>
          <p class="card-text">Rp harga</p>
          <a href="#" class="btn btn-primary btn-card">pesan</a>
        </div>
      </div>
    </div>

    <div class="col-md-3">
      <div class="card" style="width: 18rem;">
      <img src="<?=BASEURLSrc?>/uploads/produk/produk4.png" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Nama produk</h5>
          <p class="card-text">kategori</p>
          <p class="card-text">Rp harga</p>
          <a href="#" class="btn btn-primary btn-card">pesan</a>
        </div>
      </div>
    </div>
  </div>


  <div class="row mt-5">
    <div class="col-md-3">
      <div class="card" style="width: 18rem;">
        <img src="<?=BASEURLSrc?>/uploads/produk/produk1.png" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Nama produk</h5>
          <p class="card-text">kategori</p>
          <p class="card-text">Rp harga</p>
          <a href="#" class="btn btn-primary btn-card">pesan</a>
        </div>
      </div>
    </div>

    <div class="col-md-3">
      <div class="card" style="width: 18rem;">
      <img src="<?=BASEURLSrc?>/uploads/produk/produk2.png" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Nama produk</h5>
          <p class="card-text">kategori</p>
          <p class="card-text">Rp harga</p>
          <a href="#" class="btn btn-primary btn-card">pesan</a>
        </div>
      </div>
    </div>

    <div class="col-md-3">
      <div class="card" style="width: 18rem;">
      <img src="<?=BASEURLSrc?>/uploads/produk/produk3.png" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Nama produk</h5>
          <p class="card-text">kategori</p>
          <p class="card-text">Rp harga</p>
          <a href="#" class="btn btn-primary btn-card">pesan</a>
        </div>
      </div>
    </div>

    <div class="col-md-3">
      <div class="card" style="width: 18rem;">
      <img src="<?=BASEURLSrc?>/uploads/produk/produk4.png" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Nama produk</h5>
          <p class="card-text">kategori</p>
          <p class="card-text">Rp harga</p>
          <a href="#" class="btn btn-primary btn-card">pesan</a>
        </div>
      </div>
    </div>

<div class="container">
  <div class="row">
    <?php
    if ($produk->num_rows > 0) {
        while ($row = $produk->fetch_assoc()) {
    ?>
      <div class="col-md-3 mb-4">
        <a href="?c=produk&m=detail&id=<?php echo $row["id"]; ?>" class="text-decoration-none text-dark">
          <div class="card">
            <img src="<?php echo $row["gambar"]; ?>" class="card-img-top" alt="Destinasi">
            <div class="card-body">
              <h5 class="card-title"><?php echo $row["nama"]; ?></h5>
              <p class="kategori"><?php echo $row["kategori"]; ?></p>
              <p class="harga">Rp. <?php echo $row["harga"]; ?></p>
              <div class="mt-auto">
                <a href="?c=produk&m=detail&id=<?php echo $row["id"]; ?>" class="btn btn-primary w-100">Lihat Detail</a>
              </div>
            </div>
          </div>
        </a>
      </div>
    <?php
        }
    } else {
        echo '<p class="text-center">Tidak ada produk yang tersedia.</p>';
    }
    ?>
  </div>
</div>

    
<!-- Footer -->
<?php include __DIR__ . '/../layouts/footer.php'; ?>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>
</html>