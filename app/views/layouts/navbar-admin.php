<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="home.css">
    <title>Navbar</title>
    <style>
        .navbar-nav {
            margin-left: auto;
            margin-right: auto;
            color: black;
        }
        
        .nav-item {
            margin-left: 30px;
            margin-right: 30px;
            color: black;
        }
        
        .nav-link {
            color: black !important; /* Memastikan link berwarna hitam */
        }
        
        .navbar-brand {
            margin-right: 50px;
            color: black !important; /* Warna teks navbar brand hitam */
            padding-left: 0; /* Menyesuaikan posisi navbar brand lebih ke kiri */
        }
        .navbar-toggler button{
            color: black;
        }

        /* Tambahkan background untuk navbar ketika di-scroll */
        .navbar.scrolled {
            background-color: #f8f9fa !important; /* Warna background navbar ketika di-scroll */
        }
    </style>
  </head>
  <body>

  <!-- Navbar -->
  <nav id="navbar-custom" class="w-full fixed-top navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="#">
            <img src="<?=BASEURL?>/uploads/logotext.png" alt="Logo"  class="d-inline-block align-text-top">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav fw-bold">
                    <li class="nav-item">
                        <a class="nav-link" href="<?=BASEURL?>/admin">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?=BASEURL?>/adminBlog">Manage Blog</a>
                    </li>
                    <?php if (isset($_SESSION['user_id'])) : ?>
                        <li class="nav-item">
                            <a class="nav-link" href="<?=BASEURL?>/adminProduct">Manage Product</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?=BASEURL?>/admin#bottomSect">Order</a>
                        </li>
                        <!-- <li class="nav-item"><a class="nav-link" href="<?=BASEURL?>/auth/logout" onclick="return confirm('Apakah Anda Yakin Ingin Logout?')">Logout</a></li> -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Profil
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item">Hi,<?php echo $_SESSION['username'] ?> !</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="<?=BASEURL?>/auth/logout" onclick="return confirm('Apakah Anda Yakin Ingin Logout?')">Logout</a></li>
                            </ul>
                        </li>
                    <?php else : ?>
                        <li class="nav-item">
                            <a class="nav-link" href="<?=BASEURL?>/auth/login">Login</a>
                        </li>
                        <!-- <li class="nav-item">
                            <a class="nav-link text-white" href="?c=User&m=register_form">Register</a>
                        </li> -->
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Bootstrap JS and dependencies -->
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>

</html>