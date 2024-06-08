<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="form.css">
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



.footer{
  border-top: 1px solid #dcdcdc;
}

.form-container{
    background-color: #F9F1E7;
    border-radius: 10px;
}

.pembayaran-container{
    background-color: #F9F1E7;
    border-radius: 10px;
}

.form-control{
    border-radius: 10px;
}

.form-select{
    border-radius: 10px;
    
}

.btn {
  
    padding: 10px 40px;
    border-radius: 4px;
    background-color: #FF6F6F;
    border-color: #FF6F6F;
  }

  .btn-primary:hover{
    background-color: #C79B91;
    border-color: #C79B91;
}
.form-title{
  margin-top: 80px;
}
    </style>
  </head>

  <body>
  <!-- Navbar -->
  <?php include __DIR__ . '/../layouts/navbar-admin.php'; ?>

<div class="container mt-5">
  
<h3 class="form-title">Form Pesanan</h3>
<form action="<?=BASEURL?>/admin/update" method="post">
<div class="form-container p-3">
<div class="mb-3">
    <p class="form-desc">Silahkan isi pesanan anda<p>
    <input type="hidden" name="id_order" value="<?= $data['pesanan']['id_order']?>">
  <label for="tanggal">Tanggal Pesan</label>
  <input type="date" class="form-control" name="tanggal" id="tanggal" value="<?= $data['pesanan']['tanggal']?>" readonly>
        
  <br> 
  <label for="inputNama" class="form-label">Nama</label>
  <input type="text" name="nama"class="form-control" id="inputNama" value="<?= $data['pesanan']['nama']?>" readonly>

  <label for="inputAlamat" class="form-label mt-3">Alamat</label>
  <input type="text" name="alamat" class="form-control" value="<?= $data['pesanan']['alamat']?>" readonly>

  <label for="inputTelp" class="form-label mt-3">No. Telp</label>
  <input type="text" name="nomer" class="form-control"  value="<?= $data['pesanan']['no_telp']?>" readonly>

  
  <label for="input" class="form-label mt-3">Produk yang dipesan</label>
  <div class="row g-2">
    <div class="col-9">
  <input type="text" name="produk" class="form-control" value="<?= $data['pesanan']['produk']?>" readonly>
</div>

<div class="col-3">
          <label for="ammount">Jumlah</label>
          <input type="number" id="ammount" name="jumlah"  value="<?= $data['pesanan']['jumlah']?>" readonly>
</div>
</div>
</div>

<label for="inputTelp" class="form-label mt-3">Metode</label>
  <input type="text" name="metode" class="form-control"  value="<?= $data['pesanan']['metode_bank']?>" readonly>

</div>
</div>
</div>
</div>

<div class="container mt-5">
<div class="pembayaran-container p-3">
<p class="form-desc">Silahkan Update Status<p>
<label for="form-desc" class="form-label">Status Pesanan</label>
<div class="col-3">
<select class="form-select" id="statusSelect" name="status" aria-label="statusSelect" >
  <option value="" disabled selected><?= $data['pesanan']['status'] ?></option>
  <option >Menunggu Pembayaran</option>
  <option >Pembayaran Tidak Valid</option>
  <option >Pembayaran Diterima</option>
  <option >Pesanan Selesai</option>
</select>

</div>
</div> 
<div class="container mt-5">
      <div class="row">
        <div class="col-12 text-end">
<button type="submit" class="btn btn-primary mt-3 flex">Update</button>
</div>
</form>
</div>


<!-- Footer -->
<?php include __DIR__ . '/../layouts/footer.php'; ?>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>
</html>