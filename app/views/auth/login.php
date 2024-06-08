<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Login</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .container {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh; /* Buat container penuh tinggi viewport */
        }
        .content-wrapper {
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .register-container {
            min-width: 380px;
            max-width: 600px; /* Lebarkan form */
            background-color: #fff;
            padding: 30px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            margin-right: 100px; /* Tambah jarak antara form dan gambar */
        }
        .form-text {
            margin-bottom: 30px;
        }
        .register-image {
            max-width: 250px; /* Ubah sesuai kebutuhan */
        }
        .center-link {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 10px; /* Sesuaikan jarak atas */
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="content-wrapper">
            <div class="register-container">
                <h2 class="form-header">Login</h2>
                <p class="form-text">Masuk ke Akun</p>
                <form action="<?=BASEURL?>/auth/login_process" method="post">
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" class="form-control" name="username" id="username" placeholder="Masukkan nama pengguna" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" name="password" id="password" placeholder="Masukkan kata sandi" required>
                    </div>
                    <button type="submit" value="Login" class="btn btn-dark btn-block">Login</button>
                    <p class="text-center mt-3">Belum punya akun? <a href="<?=BASEURL?>/auth/register">Daftar</a></p>
                    <div class="center-link">
                        <a href="<?=BASEURL?>">Lanjutkan Tanpa Login</a>
                    </div>
                </form>
            </div>
            <img src="<?=BASEURL?>/uploads/logo.jpg" alt="Deskripsi Gambar" class="register-image">
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
