<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="assets/img/favicon.png">
  
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
  <title>Selamat Datang - PPDB Online SMA Kartika I-2 Medan</title>
</head>
<body style="overflow-x: hidden;">
  <!-- Header -->
  <?php require "./header.php"; ?>

  <!-- Index.php Body -->
  <div class="row justify-content-center mt-5">
    <div class="col-10 col-lg-8">
      <div class="card p-md-4 shadow-sm">
        <div class="card-body mb-5">
          <h2 class="h2">
            Selamat Datang
          </h2><hr>
          <p class="fw-bold">
            Selamat datang di portal Penerimaan Peserta Didik Baru - SMA Kartika I-2 Medan.
          </p>
          <p>
            Sebagai upaya untuk melaksanakan kegiatpendidikan yang berkualitas, maka suatu hal yang mutlak dilakukan adalah seleksi awal calon-calon siswa baru.
          </p>
          <p>
            Kegiatan ini merupakan <em>input</em> yang menentukan keberhasilan pelaksanaan proses pendidikan yang menghasilkan <em>output</em> dan <em>outcome</em> terhadap siswa-siswa yang akan melanjutkan studi ke perguruan tinggi.&nbsp;&nbsp;&nbsp;
          </p>
          <div class="row justify-content-center mt-5">
            <div class="col-lg-3 col-md-6">
              <a href="./register.php" style="text-decoration: none;">
                <div class="pt-2 border border-primary rounded text-center">
                  <img src="./assets/img/daftar.png" width="90px" style="">
                  <h6 class="pt-2">PENDAFTARAN</h6>
                </div>
              </a>
            </div>
            <div class="col-lg-3 col-md-6 justify-content-center mt-4 mt-md-0">
              <a href="./alur.php" style="text-decoration: none;">
                <div class="pt-2 border border-primary rounded text-center">
                  <img src="assets/img/alurikon.png" width="90px">
                  <h6 class="pt-2">ALUR</h6>
                </div>
              </a>
            </div>
            <div class="col-lg-3 col-md-6 justify-content-center mt-4 mt-md-3 mt-lg-0">
              <a href="./persyaratan.php" style="text-decoration: none;">
                <div class="pt-2 border border-primary rounded text-center">
                  <img src="assets/img/syarat.png" width="90px">
                  <h6 class="pt-2">PERSYARATAN</h6>
                </div>
              </a>
            </div>
            <div class="col-lg-3 col-md-6 justify-content-center mt-4 mt-md-3 mt-lg-0">
              <a href="./jadwal.php" style="text-decoration: none;">
                <div class="pt-2 border border-primary rounded text-center">
                  <img src="assets/img/jadwal.png" width="90px">
                  <h6 class="pt-2">JADWAL</h6>
                </div>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class=" col-10 col-lg-3 mt-4 mt-lg-0">
      <div class="card p-2 shadow-sm">
        <div class="card-body text-center">
          <img src="assets/img/hotlinenew.png" class="img-fluid" width="180px">
          <hr>
          <h5>- 0821-1234-5678<h5>
          <h5>- 0898-7654-3210<h5>
        </div>
      </div>  
    </div>
  </div>

  <?php require "./footer.php"; ?>

  <!-- Bootstrap JS -->
  <script src="./assets/js/bootstrap.min.js"></script>
</body>
</html>