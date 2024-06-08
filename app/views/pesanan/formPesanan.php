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
  <?php include __DIR__ . '/../layouts/navbar.php'; ?>

<div class="container mt-5">
  
<h3 class="form-title">Form Pesanan</h3>
<form action="<?=BASEURL?>/pesanan/form_process" method="post">
<div class="form-container p-3">
<div class="mb-3">
    <p class="form-desc">Silahkan isi pesanan anda<p>
  <input type="hidden" name="user_id" value="<?= $_SESSION['user_id']; ?>">
  <label for="tanggal">Tanggal Pesan</label>
  <input type="date" value="today" class="form-control" name="tanggal" id="tanggal" placeholder="Tanggal Pesan" readonly>
        
  <br> 
  <label for="inputNama" class="form-label">Nama</label>
  <input type="nama" name="nama"class="form-control" id="inputNama" placeholder="Ketik disini">

  <label for="inputAlamat" class="form-label mt-3">Alamat</label>
  <input type="nama" name="alamat" class="form-control" id="inputAlamat" placeholder="Ketik disini">

  <label for="inputTelp" class="form-label mt-3">No. Telp</label>
  <input type="nama" name="nomer" class="form-control" id="inputTelp" placeholder="Ketik disini">

  <label for="input" class="form-label mt-3">Produk yang dipesan</label>
  <div class="row g-2">
    <div class="col-9">
    <select class="form-select" id="produkSelect" name="produk" aria-label="produkSelect">
  <option selected>Pilih Produk</option>
  <?php foreach($data['produk'] as $produk) : ?>
  <option ><?= $produk['nama']?></option>
  <?php endforeach; ?>
  <input type="hidden" name="id_produk" id="id_produk">
</select>
</div>
<div class="col-3">
<div class="form-group">
          <label for="ammount">Jumlah</label>
          <input type="number" id="ammount" name="jumlah" placeholder="Jumlah Produk" />
</div>
</div>
</div>
</div>
</div>
</div>

<div class="container mt-5">
<div class="pembayaran-container p-3">
<p class="form-desc">Silahkan pilih metode pembayaran<p>
<label for="form-desc" class="form-label">Metode Pembayaran</label>
<div class="col-3">
<select class="form-select" id="metodeSelect" name="metode" aria-label="metodeSelect">
  <option selected>Metode Pembayaran</option>
  <?php foreach($data['metode'] as $metode) : ?>
  <option value="<?php echo $metode['pembayaran_id']?>" > <?php echo $metode['nama_bank']?></option>
  <?php endforeach; ?>
</select>
<input type="hidden" name="nama_metode" id="nama_metode">
</div>
</div> 
<div class="container mt-5">
      <div class="row">
        <div class="col-12 text-end">
<button type="submit" class="btn btn-primary mt-3 flex">Pesan</button>
</div>
</form>
</div>


<!-- Footer -->
<?php include __DIR__ . '/../layouts/footer.php'; ?>
<script>
        // Fungsi untuk mendapatkan tanggal hari ini dalam format YYYY-MM-DD
        function getTodayDate() {
            const today = new Date();
            const year = today.getFullYear();
            const month = String(today.getMonth() + 1).padStart(2, '0');
            const day = String(today.getDate()).padStart(2, '0');
            return `${year}-${month}-${day}`;
        }

        // Atur nilai input tanggal menjadi tanggal hari ini
        document.getElementById('tanggal').value = getTodayDate();
    </script>
                
<script>
document.getElementById('metodeSelect').addEventListener('change', function() {
    var select = this;
    var selectedOption = select.options[select.selectedIndex];
    var namaMetode = selectedOption.textContent.trim(); // Menghapus spasi di awal dan akhir
    document.getElementById('nama_metode').value = namaMetode;
});
document.getElementById('produkSelect').addEventListener('change', function() {
    var select = this;
    var selectedOption = select.options[select.selectedIndex];
    var idProduk = selectedOption.value;
    document.getElementById('id_produk').value = idProduk;
});
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>
</html>