<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="pesanan.css">
    <title>Hello, world!</title>
    <style>
    /* #heroImage {
      padding-top: 70px;
    } */

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

  a.btn-primary {
    padding: 15px 35px;
    border-radius: 4px;
    background-color: #FF6F6F;
    border-color: #FF6F6F;
  }

  a.btn-primary:hover{
    background-color: #C79B91;
    border-color: #C79B91;
}

.table-container {
  background-color: #F9F1E7;
  padding: 20px;
  border-radius: 5px;
}

.footer{
  border-top: 1px solid #dcdcdc;
}
    </style>
  </head>
  <body>
  <!-- Navbar -->
  <?php include __DIR__ . '/../layouts/navbar.php'; ?>


<div><div id="heroImage" class="carousel d-flex flex-column justify-content-center align-items-center">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="http://localhost/phpmvc/app/uploads/heroshop.png" class="d-block w-100 " alt="Hero Image">
      <div class= "text-container">
        <div class="text-top">Pesanan</div>
        <div class="text-bottom">Home > Pesanan</div>
             </div>
        </div>
    </div>
</div>


<div class="container mt-5">
    <a href="<?=BASEURL?>/pesanan/form" class="btn-primary">Tambah Pesanan</a>
</div> 

<div class="container mt-5">
<div class="table-container p-3">
    <h3 class="table-title">Riwayat Pesanan</h3>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Order ID</th>
      <th scope="col">Tanggal</th>
      <th scope="col">Produk</th>
      <th scope="col">Status</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>ID-0001</td>
      <td>20-05-2024</td>
      <td>Vas Bunga 1</td>
      <td>Sedang diantar</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>ID-0002</td>
      <td>20-05-2024</td>
      <td>Piring 1</td>
      <td>Sedang diantar</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>ID-0003</td>
      <td>20-05-2024</td>
      <td>Gelas 1</td>
      <td>Sedang diproses</td>
    </tr>
    <tr>
      <th scope="row">4</th>
      <td>ID-0004</td>
      <td>20-05-2024</td>
      <td>Teko 2</td>
      <td>Terkirim</td>
    </tr>
    <tr>
      <th scope="row">5</th>
      <td>ID-0005</td>
      <td>20-05-2024</td>
      <td>Piring 2</td>
      <td>Terkirim</td>
    </tr>

  </tbody>
  </table>
</div>
</div>


<!-- Footer -->
<?php include __DIR__ . '/../layouts/footer.php'; ?>
                


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>
</html>