<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="assets/img/favicon.png">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
  <title>Selamat Datang - PPDB Online SMA Kartika I-2 Medan</title>
</head>
<body style="overflow-x: hidden">
  <?php require "./header.php"; ?>
  <?php require "./koneksi.php" ?>

  <div class="row justify-content-center mt-5">
    <div class="col-10 col-lg-8">
      <div class="card p-md-4 shadow-sm">
        <div class="card-body">
          <h2 class="h2">
            Alur Pendaftaran
          </h2><hr>
          <?php
            $link = "SELECT * FROM alur";
            $sql = mysqli_query($connect, $link);
            $check = mysqli_num_rows($sql);
          ?>
          <?php if($check > 0): ?>
            <?php
              $data = $connect->query($link);
              while ($row = $data->fetch_array()) {
                echo "<img src='./assets/img/".$row['alur_nama']."' class='img-fluid' alt='Sekma Alur Pendaftaran Peserta Didik Baru Online SMA Kartika I-2 Medan'/>";
              }
            ?>
          <?php else: ?>
            <div class='alert alert-warning' id='alert' role='alert'>
              Skema Alur Pendaftaran Belum Ditentukan !
            </div>
          <?php endif; ?>
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