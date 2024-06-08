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
    <title>Add Blog</title>
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

      .footer {
        border-top: 1px solid #dcdcdc;
      }

      .Upload {
        background-color: #ffffff;
        margin-top: 80px;
        margin-left: auto;
        margin-right: auto;
        margin-bottom: 20px;
        padding: 20px;
        width: 1000px;
      }

      .form-header {
        margin-bottom: 20px;
      }

      .form-header h2 {
        font-size: 24px;
        font-family: "Poppins Light", sans-serif;
        margin: 0;
        font-weight: bold;
      }

      .form-group {
        margin-bottom: 20px;
      }

      label {
        font-size: 16px;
        font-family: "Poppins Light", sans-serif;
        display: block;
        margin-bottom: 5px;
        color: #333;
      }

      input[type="text"] {
        font-size: 16px;
        font-family: "Poppins Light", sans-serif;
        width: 100%;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
      }

      .image-upload {
        position: relative;
        width: 100%;
        height: 150px;
        border: 2px dashed #ccc;
        border-radius: 4px;
        display: flex;
        justify-content: center;
        align-items: center;
        background-color: #f8f8f8;
      }

      input[type="file"] {
        display: none;
      }

      .upload-label {
        display: inline-block;
        padding: 10px 20px;
        background-color: #008cba;
        color: white;
        border-radius: 4px;
        cursor: pointer;
        font-size: 14px;
      }

      .form-actions {
        display: flex;
        justify-content: flex-end;
        align-items: center;
      }

      .btn {
        padding: 10px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        font-size: 14px;
      }

      .btn-danger {
        background-color: #e74c3c;
        color: white;
      }

      #preview {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
      }

      #preview img {
        max-width: 100%;
        max-height: 100%;
        object-fit: cover;
        display: none;
        z-index: 0;
      }
    </style>
  </head>
  <body>
    <!-- Navbar -->
  <?php include __DIR__ . '/../layouts/navbar-admin.php'; ?>

    <div class="Upload">
      <div class="form-header">
        <h2>Tambah artikel</h2>
      </div>

      <form action="<?=BASEURL?>/adminBlog/insertBlog" method="post" enctype="multipart/form-data">
        <div class="form-group">
          <label for="product-name">Judul artikel</label>
          <input
            type="text"
            id="product-name"
            name="judul"
            placeholder="Judul"
          />
        </div>
        <div class="form-group">
          <label for="category">Isi detail</label>
          <input
            type="text"
            id="category"
            name="isi"
            placeholder="Masukkan Isi Berita"
          />
        </div>
        <div class="form-group">
          <label for="tanggal">Tanggal Upload</label>
          <input type="date" value="today" class="form-control" name="tanggal" id="tanggal" placeholder="Tanggal Upload Berita">
        </div>
        <div class="form-group">
          <label for="image-upload">Upload gambar</label>
          <div class="image-upload" onclick="document.getElementById('image-upload').click();">
            <input
              type="file"
              id="image-upload"
              name="gambar"
              accept="image/*"
              onchange="previewFile()"
            />
            <label for="image-upload" class="upload-label">Choose File</label>
            <div id="preview">
              <img id="preview-image" src="" alt="Preview" />
            </div>
          </div>
          <span id="file-name"></span>
        </div>
        <div class="form-actions">
          <button type="submit" class="btn btn-danger">Selesai</button>
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
      function previewFile() {
        const file = document.getElementById("image-upload").files[0];
        const previewImage = document.getElementById("preview-image");
        const fileName = document.getElementById("file-name");
        const uploadLabel = document.querySelector('.upload-label');

        if (file) {
          const reader = new FileReader();
          reader.onloadend = function() {
            if (file.type.startsWith("image/")) {
              previewImage.src = reader.result;
              previewImage.style.display = "block";
              uploadLabel.style.display = "none";
              fileName.textContent = "";
            } else {
              previewImage.style.display = "none";
              uploadLabel.style.display = "block";
              fileName.textContent = "File";
            }
          };
          reader.readAsDataURL(file);
        } else {
          previewImage.style.display = "none";
          uploadLabel.style.display = "block";
          fileName.textContent = "";
        }
      }
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    </body>
</html>