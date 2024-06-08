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

    .container-product {
        width: 100%;
        max-width: 1200px;
        margin: 0 auto;
        text-align: center;
      }
      /* a.btn-primary {
      padding: 15px 35px;
      border-radius: 4px;
      background-color: #FF6F6F;
      border-color: #FF6F6F;
      }

  a.btn-primary:hover{
    background-color: #C79B91;
    border-color: #C79B91;
} */

      a.btn-primary {
        padding: 15px 35px;
        border-radius: 4px;
        background-color: #FF6F6F;
        border-color: #FF6F6F;
        max-width: 15%;
        padding: 10px 20px;
        cursor: pointer;
        font-size: 16px;
        margin-bottom: 20px;
        margin-top: 20px;
        display: flex;
        align-items: flex-start;
        font-size: 18px;
        font-family: "Poppins Light", sans-serif;
        text-align: center;
      }

      .product-list {
        display: flex;
        justify-content: space-around;
        flex-wrap: wrap;
      }

      .product-item {
        background-color: #ffffff;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        padding: 20px;
        margin: 10px;
        text-align: left;
        width: 270px;
        position: relative;
      }

      .product-item img {
        width: 100%;
        border-radius: 8px;
      }

      .product-item h3 {
        font-size: 24px;
        font-family: "Poppins Light", sans-serif;
        margin: 10px 0 5px;
      }

      .product-item p {
        font-size: 16px;
        font-family: "Poppins Light", sans-serif;
        margin: 5px 0;
        color: #777;
      }
  </style>
  </head>
  <body>

<!-- Navbar -->
<?php include __DIR__ . '/../layouts/navbar.php'; ?>

<div><div id="heroImage" class="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
    <img src="<?=BASEURL?>/uploads/heroshop.png" class="d-block w-100 " alt="Hero Image">
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

<main>
    <div class="container mt-5">
      <div class="container-product">
        <div class="product-list">
        <?php foreach($data['produk'] as $produk) : ?>
          <div class="product-item">
            <img src="<?=BASEURL?>/uploads/produk/<?= $produk['gambar']?>" alt="Produk 1" />
            <h3><?= $produk['nama']?></h3>
            <p><?= $produk['kategori']?></p>
            <p>Rp <?= $produk['harga']?></p>
          </div>
          <?php endforeach; ?>
          
        </div>
      </div>
      </div> 
    </main>

    
<!-- Footer -->
<?php include __DIR__ . '/../layouts/footer.php'; ?>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>
</html>