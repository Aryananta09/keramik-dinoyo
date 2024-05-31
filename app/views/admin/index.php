<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Home</title>
    <style>

      .btn {
          border-radius: 0;
          background-color: #FF6D3F;
          padding: 15px 30px;
          font-size: 100%;
      }

        
        .carousel-item img {
          width: 100%;
          height: auto;
        }
        .text-container {
          position: absolute;
          top: 50%;
          left: 44%;
          text-align: center;
        }

        .text-top {
          font-size: 36px;
          font-family: "Poppins ", sans-serif;
          font-weight: 600;
          color: black;
          text-align: center;
        }
        
        .text-bottom {
          font-size: 16px;
          font-family: "Poppins Light", sans-serif;
          font-weight: 100;
          color: black;
          text-align: center;
        }
        .footer {
          border-top: 1px solid #dcdcdc;
        }

        .content{
          padding: 20px;
        }

        .table-container {
          background-color: #F9F1E7;
          padding: 20px;
          border-radius: 5px;
        }
    </style>
  </head>
  <body>
  <!-- Navbar -->
  <?php include __DIR__ . '/../layouts/navbar-admin.php'; ?>

    <div id="hero" class="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="<?=BASEURLSrc?>/uploads/heroshop.png"hero-shop class="d-block w-100" />
          <div class="text-container">
            <div class="text-top">Selamat Datang</div>
            <div class="text-bottom" id="bottomSect"><?= $_SESSION['username']?></div>
          </div>
        </div>
      </div>
    </div>

    <div class="container mt-5" id="tabelPesanan">
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
              <th scope="col">Edit</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">1</th>
              <td>ID-0001</td>
              <td>20-05-2024</td>
              <td>Vas Bunga 1</td>
              <td>Sedang diantar</td>
              <td>
                <a href="#" target="_blank">Edit</a>
              </td>
            </tr>
            <tr>
              <th scope="row">2</th>
              <td>ID-0002</td>
              <td>20-05-2024</td>
              <td>Piring 1</td>
              <td>Sedang diantar</td>
              <td>
                <a href="#" target="_blank">Edit</a>
              </td>
            </tr>
            <tr>
              <th scope="row">3</th>
              <td>ID-0003</td>
              <td>20-05-2024</td>
              <td>Gelas 1</td>
              <td>Sedang diproses</td>
              <td>
                <a href="#" target="_blank">Edit</a>
              </td>
            </tr>
            <tr>
              <th scope="row">4</th>
              <td>ID-0004</td>
              <td>20-05-2024</td>
              <td>Teko 2</td>
              <td>Terkirim</td>
              <td>
                <a href="#" target="_blank">Edit</a>
              </td>
            </tr>
            <tr>
              <th scope="row">5</th>
              <td>ID-0005</td>
              <td>20-05-2024</td>
              <td>Piring 2</td>
              <td>Terkirim</td>
              <td>
                <a href="#" target="_blank">Edit</a>
              </td>
            </tr>        
          </tbody>
        </table>
      </div>
    </div>

    <!-- Footer -->
    <?php include __DIR__ . '/../layouts/footer.php'; ?>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script>
        window.addEventListener('scroll', function() {
            var navbar = document.getElementById('navbar-custom');
            if (window.scrollY > 50) { // adjust this value as needed
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  
  </body>
</html>