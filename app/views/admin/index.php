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
          <img src="<?=BASEURL?>/uploads/heroshop.png"hero-shop class="d-block w-100" />
          <div class="text-container">
            <div class="text-top">Selamat Datang</div>
            <div class="text-bottom" id="bottomSect"><?= $_SESSION['username']?></div>
          </div>
        </div>
      </div>
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
      <th scope="col">Jumlah</th>
      <th scope="col">Status</th>
      <th scope="col">Detail</th>
      <th scope="col">Update</th>
    </tr>
  </thead>
  <tbody>
  <?php $counter = 1; foreach($data['pesanan'] as $pesanan) : ?>
    <tr>
      <th scope="row"><?= $counter++ ?></th>
      <td><?= $pesanan['id_order']?></td>
      <td><?= $pesanan['tanggal']?> </td>
      <td><?= $pesanan['produk']?></td>
      <td><?= $pesanan['jumlah']?></td>
      <td><?= $pesanan['status']?></td>
      <td><a href="#" class="detail-link" data-bs-toggle="modal" data-bs-target="#orderDetailModal1"
             data-id="<?= $pesanan['id_order']?>"
             data-nama="<?= $pesanan['nama']?>"
             data-alamat="<?= $pesanan['alamat']?>"
             data-telp="<?= $pesanan['no_telp']?>"
             data-produk="<?= $pesanan['produk']?>"
             data-jumlah="<?= $pesanan['jumlah']?>"
             data-tanggal="<?= $pesanan['tanggal']?>"
             data-metode="<?= $pesanan['metode_bank']?>"
             data-status="<?= $pesanan['status']?>">
             Detail</a>
      </td>
      <td><a href="<?=BASEURL?>/admin/formEdit/<?= $pesanan['id_order']?>">Update</a></td>
    </tr>
  <?php endforeach;?>
    

  </tbody>
  </table>
</div>
</div>

<div class="modal fade" id="orderDetailModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Detail Pesanan</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="order-summary">
          <div><strong>Order ID: </strong><span id="modalOrderId"></span></div>
          <div><strong>Nama Pemesan: </strong><span id="modalNamaPemesan"></span></div>
          <div><strong>Alamat: </strong><span id="modalAlamat"></span></div>
          <div><strong>No. Telp Pemesan: </strong><span id="modalTelp"></span></div>
          <div><strong>Produk: </strong><span id="modalProduk"></span></div>
          <div><strong>Jumlah: </strong><span id="modalJumlah"></span></div>
          <div><strong>Tanggal: </strong><span id="modalTanggal"></span></div>
          <div><strong>Metode Pembayaran: </strong><span id="modalBayar"></span></div>
          <div><strong>Status: </strong><span id="modalStatus"></span></div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>


    <!-- Footer -->
    <?php include __DIR__ . '/../layouts/footer.php'; ?>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script>
  document.addEventListener("DOMContentLoaded", function() {
    var detailLinks = document.querySelectorAll('.detail-link');
    
    detailLinks.forEach(function(link) {
      link.addEventListener('click', function() {
        var orderId = this.getAttribute('data-id');
        var namaPemesan = this.getAttribute('data-nama');
        var alamat = this.getAttribute('data-alamat');
        var telp = this.getAttribute('data-telp');
        var produk = this.getAttribute('data-produk');
        var jumlah = this.getAttribute('data-jumlah');
        var tanggal = this.getAttribute('data-tanggal');
        var metode = this.getAttribute('data-metode');
        var status = this.getAttribute('data-status');
        
        document.getElementById('modalOrderId').textContent = orderId;
        document.getElementById('modalNamaPemesan').textContent = namaPemesan;
        document.getElementById('modalAlamat').textContent = alamat;
        document.getElementById('modalTelp').textContent = telp;
        document.getElementById('modalProduk').textContent = produk;
        document.getElementById('modalJumlah').textContent = jumlah;
        document.getElementById('modalTanggal').textContent = tanggal;
        document.getElementById('modalBayar').textContent = metode;
        document.getElementById('modalStatus').textContent = status;
      });
    });
  });
</script>

  </body>
</htm>