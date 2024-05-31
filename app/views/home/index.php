<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Halaman Home</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <style>
            .hero {
                background: url("<?=BASEURLSrc?>/uploads/hero.png") no-repeat center center;
                background-size: cover;
                height: 60%;
                width: 100%;
            }
            .h-screen {
                height: 100vh;
            }
            .hero h1{
                color: #D37E1A;
                margin :auto auto 0px 130px;
            }
            .image-text {
              font-size:x-large;
                font-family: 'Poppins ',sans-serif ;
                font-weight: 600;
                color:black;}
          
            

            .square-btn {
                background-color: #FF6D3F;
                border-radius: 0; /* Menghilangkan efek rounded */
                margin :auto auto 80px 130px;
                height: 15%;
                width: 20%;
                display: flex;
                justify-content: center;
                align-items: center;
                text-align: center; /* Pusatkan teks di tengah */
                padding: 0; /* Hapus padding default */
            }
            
        </style>
    </head>
    <body>
    <!-- Navbar -->
    <?php include __DIR__ . '/../layouts/navbar.php'; ?>

    <!-- Hero Image -->
    <div id="home" class="h-screen hero d-flex flex-column justify-content-center align-items-center">
        <h1 class="display-4 fw-bold">Cari Keramik <br> Favorit Anda di <br> website kami.</h1>
        <?php if (isset($_SESSION['user_id'])) : ?>
        <a href="<?= BASEURL ?>/shop" class="btn-primary btn-lg square-btn">Beli Sekarang</a>
    <?php else : ?>
        <a href="<?= BASEURL ?>/auth/login" class="btn-primary btn-lg square-btn">Beli Sekarang</a>
    <?php endif; ?>
    </div>

    <!-- Content -->
    <div class="container text-center mt-5">
  <h2 class="keramik-text">keramik favorit</h2>
</div>
<div class="container text-center mt-3">
  <p1 class="lorem-text" >Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p1>
</div>

<div class=" mt-5">
  <div class="row">
    <div class="col text-center">
      <img src="<?=BASEURLSrc?>/uploads/guci.png" alt="Guci" class="img-fluid">
      <p class="image-text">guci</p>
    </div>

    <div class="col text-center">
      <img src="<?=BASEURLSrc?>/uploads/vas.png" alt="Vas Bunga" class="img-fluid">
      <p class="image-text">vas bunga</p>
    </div>
    
    <div class="col text-center">
      <img src="<?=BASEURLSrc?>/uploads/piring.png" alt="Piring" class="img-fluid">
      <p class="image-text">piring</p>
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

    <!-- Footer -->
    <?php include __DIR__ . '/../layouts/footer.php'; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    </body>
</html>