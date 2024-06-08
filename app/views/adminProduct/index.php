<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" />
    <title>ManageProduct</title>
    <style>
      .carousel-item img {
        width: 100%;
        height: auto;
      }

      .text-container {
        position: absolute;
        top: 50%;
        left: 42%;
        text-align: center;
      }

      .text-top {
        font-size: 36px;
        font-family: "Poppins ", sans-serif;
        font-weight: 600;
        color: black;
      }

      .text-bottom {
        font-size: 16px;
        font-family: "Poppins Light", sans-serif;
        font-weight: 100;
        color: black;
      }

      .footer {
        border-top: 1px solid #dcdcdc;
      }

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

      .delete-btn {
        background-color: #ff6f6f;
        color: white;
        border: none;
        border-radius: 4px;
        padding: 5px 10px;
        cursor: pointer;
        font-size: 14px;
        position: absolute;
        bottom: 20px;
        right: 20px;
      }
      .flasher{
        margin-top : 80px;
    }

    </style>
  </head>
  <body>
    <!-- Navbar -->
  <?php include __DIR__ . '/../layouts/navbar-admin.php'; ?>

    <div id="hero" class="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="<?=BASEURL?>/uploads/heroshop.png" hero-shop class="d-block w-100" />
          <div class="text-container">
            <div class="text-top">Manage Product</div>
            <div class="text-bottom">Home > Manage Product</div>
          </div>
        </div>
      </div>
    </div>

    <main>
    <div class="container mt-5">
      <a href="<?=BASEURL?>/adminProduct/productForm" class="btn-primary">Tambah Produk</a>

    <div class="col-6">
    <?php Flasher::flash(); ?></div>

      <div class="container-product">
        <div class="product-list">
        <?php foreach($data['produk'] as $produk) : ?>
          <div class="product-item">
            <img src="<?=BASEURL?>/uploads/produk/<?= $produk['gambar']?>" alt="Produk 1" />
            <h3><?= $produk['nama']?></h3>
            <p><?= $produk['kategori']?></p>
            <p>Rp <?= $produk['harga']?></p>
            <a href="<?=BASEURL?>/adminProduct/hapus/<?= $produk['id_produk'] ?>" class="badge badge-danger float-right"
              onclick="return confirm('Yakin?')" >Delete</a>
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