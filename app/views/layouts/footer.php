<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .footer{
            border-top: 1px solid #dcdcdc;
        }
        .hero h1{
                color: #D37E1A;
                margin :auto auto 0px 130px;
            }
            .square-btn {
                background-color: #FF6D3F;
                border-radius: 0; /* Menghilangkan efek rounded */
                margin :auto auto 80px 130px;
                height: 15%;
                width: 20%;
                display: flex;
                justify-content: center;
                align-items: center;
                text-align: center; /* Pusatkan teks di tengah */
                padding: 0; /* Hapus padding default */
            }
    </style>
</head>
<body>
  <footer>
    <div class="container mt-5 footer">
      <div class="row">
        <div class="mt-5 col-lg-3">
          <img src="<?=BASEURL?>/uploads/logotext.png" alt="Logo" class="img-fluid mb-3">
        </div>
        <div>
          <p class="mt-5 mb-0">Universitas Brawijaya</p>
          <p class="mt-0 mb-0">Jl. Veteran No.10-11, Ketawanggede, Kec. Lowokwaru, </p>
          <p class="mt-0 mb-0">Kota Malang, Jawa Timur 65145</p>
        </div>
        <div>
          <p class="mt-5">2024 kelompok 7 project akhir PEMWEB A</p>
        </div>
      </div>
    </div>
  </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
