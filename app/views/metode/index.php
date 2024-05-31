<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="metode.css">
    <title>Metode Pembayaran</title>
    <style>

  .col-6 h3{
    margin: 30px auto;
}
  .delete-badge {
    margin-left: auto;
}
    a.btn-primary {
        margin-top: 80px;
        height: 7vh;
        border-radius: 4px;
        background-color: #FF6F6F;
        border-color: #FF6F6F;
  }

    .flasher{
        margin-top : 80px;
    }
    </style>
</head>
<body>

<!-- Navbar -->
<?php include __DIR__ . '/../layouts/navbar.php'; ?>

<!-- Content -->
<div class="container mt-5">

    <div class="row">
        <div class="col-6">
            <!-- Button trigger modal -->
            <a type="button" class="btn btn-primary btnAdd mb-3" data-bs-toggle="modal" data-bs-target="#formModal">
            Tambah Metode Pembayaran
            </a>

            <?php Flasher::flash(); ?>
                

            <h3>Daftar Metode Pembayaran Pengguna</h3>
            <ul class="list-group">
                <?php foreach($data['metode'] as $metode) : ?>
                <li class="list-group-item">
                    <div class="ms-2 me-auto">
                        <div class="fw-bold"><?= $metode['nama_bank']?></div>
                        <?= $metode['nama_rek']?> 
                        <a href="<?=BASEURL?>/metode/hapus/<?= $metode['pembayaran_id'] ?>/<?= $_SESSION['user_id'] ?>" class="badge badge-danger float-right"
                        onclick="return confirm('Yakin?')" >Delete</a>
                        <br> 
                        <?= $metode['no_rek']?>
                </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Metode Pembayaran</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="<?=BASEURL?>/metode/tambah" method="post">
        <input type="hidden" name="user_id" value="<?= $_SESSION['user_id']; ?>">
        <div class="mb-3">
            <label for="metode" class="form-label">Metode Pembayaran</label>
            <select class="form-select" aria-label="Default select example" id="metode" name="metode">
                <option selected></option>
                <option value="Bank">Bank</option>
                <option value="E-Wallet">E-Wallet</option>
            </select>

            <label for="namaBank" class="form-label">Nama Bank/E-Wallet</label>
            <input type="text" class="form-control" id="namaBank" name ="namaBank" required>

            <label for="namaRek" class="form-label">Nama Rekening</label>
            <input type="text" class="form-control" id="namaRek" name ="namaRek" required>

            <label for="noRek" class="form-label">Nomor Rekening</label>
            <input type="text" class="form-control" id="noRek" name ="noRek" required>
        </div>
            
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Tambah</button>
        </form>
      </div>
    </div>
  </div>
</div>


<!-- Footer -->
<?php include __DIR__ . '/../layouts/footer.php'; ?>
                


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
            
</body>
</html>