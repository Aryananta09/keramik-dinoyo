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
    <title>Blog</title>
    <style>

      .carousel-item img {
        width: 100%;
        height: auto;
      }

      .text-container {
        position: absolute;
        top: 50%;
        left: 48%;
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

      .flex-article {
        display: flex;
        padding: 20px;
        margin: 10px 0 0 0;
      }

      .flex-article img {
        width: 50%;
        height: auto;
        margin: 50px 0 0 100px;
      }

      .post-info {
        font-size: 16px;
        font-family: "Poppins Light", sans-serif;
        color: #9f9f9f;
        margin: 50px 0 0 100px;
      }

      .content h2 {
        font-size: 30px;
        font-family: "Poppins Light", sans-serif;
        color: black;
        margin: 10px 0 0 100px;
      }

      .content p {
        font-size: 15px;
        font-family: "Poppins Light", sans-serif;
        color: #9f9f9f;
        margin: 10px 0 0 100px;
        max-width: 70%;
      }
    </style>
  </head>
  <body>
  <!-- Navbar -->
  <?php include __DIR__ . '/../layouts/navbar.php'; ?>

    <div id="hero" class="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="<?=BASEURL?>/uploads/heroBlog.png" class="d-block w-100" />
          <div class="text-container">
            <div class="text-top">Blog</div>
            <div class="text-bottom">Home > Blog</div>
          </div>
        </div>
      </div>
    </div>

    <main>
      <?php foreach($data['blog'] as $blog) :?>
      <div class="content">
        <article class="flex-article">
          <img src="<?=BASEURL?>/uploads/blog/<?=$blog['gambar']?>" alt="Produk baru, difusser cantik" />
          <div class="text-content">
            <div class="post-info">
              <span>Admin</span> | <span><?=$blog['formatted_tanggal']?></span>
            </div>
            <h2><? $blog['judul']?> </h2>
            <p>
              <?= $blog['isi'] ?>
            </p>
          </div>
        </article>
      </div>
      <?php endforeach; ?>
    </main>

    <!-- Footer -->
    <?php include __DIR__ . '/../layouts/footer.php'; ?>

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>
