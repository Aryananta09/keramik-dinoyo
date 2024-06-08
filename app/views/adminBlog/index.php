<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
  <link rel="stylesheet" />
  <title>ManageBlog</title>
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

    a.btn-primary {
    padding: 15px 35px;
    border-radius: 4px;
    background-color: #FF6F6F;
    border-color: #FF6F6F;
    margin-bottom: 20px;
  }

    a.btn-primary:hover{
    background-color: #C79B91;
    border-color: #C79B91;
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
      width: 580px;
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
        margin-top : 40px;
    }
  </style>
</head>

<body>
  <!-- Navbar -->
  <?php include __DIR__ . '/../layouts/navbar-admin.php'; ?>

  <div id="hero" class="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="<?=BASEURL?>/uploads/heroBlog.png" hero-shop class="d-block w-100" />
        <div class="text-container">
          <div class="text-top">Manage Blog</div>
          <div class="text-bottom">Home > Manage Blog</div>
        </div>
      </div>
    </div>
  </div>

  <main>
  <div class="container mt-5">
    <a href="<?=BASEURL?>/adminBlog/blogForm" class="btn-primary">Tambah Artikel</a>
  

  <div class="col-6 flasher">
    <?php Flasher::flash(); ?></div>
    </div> 

    <div class="container-product mt-5">
      <div class="product-list">
      <?php foreach($data['blog'] as $blog) : ?>
        <div class="product-item">
          <img src="<?=BASEURL?>/uploads/blog/<?= $blog['gambar']?>" alt="Blog 1">
          <h3><?= $blog['judul']?> </h3>
          <p><?= $blog['formatted_tanggal']?></p>
          <a href="<?=BASEURL?>/adminBlog/hapus/<?= $blog['id_blog'] ?>" class="badge badge-danger float-right"
              onclick="return confirm('Yakin?')" >Delete</a>
        </div>
        <?php endforeach;   ?>
      </div>
      
  </main>

  <!-- Footer -->
  <?php include __DIR__ . '/../layouts/footer.php'; ?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>
