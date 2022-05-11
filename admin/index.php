<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="../assets/img/favicon.png">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
  <title>Selamat Datang Admin</title>
</head>
<body style="overflow-x: hidden;">
  <!-- Header -->
  <?php require "./headerAdmin.php"; ?>
  
  <div class="row justify-content-center mt-5">
    <div class="col-10 col-lg-8">
      <div class="card p-md-4 shadow-sm">
        <div class="card-body">
          <h2 class="h2">
            Atur Jadwal Pendaftaran
          </h2><hr>
          <?php
            if(isset($_POST['submit'])) {
              require "../koneksi.php";
              
              $waktuNama = $_POST['tahunAjaran'];
              $waktuMulai = $_POST['tanggalBuka'];
              $waktuAkhir = $_POST['tanggalTutup'];
              
              $sql = mysqli_query($connect, "SELECT * FROM waktu");
              $check = mysqli_num_rows($sql);
              
              if($check > 0) {
                $query = "UPDATE waktu SET `waktu_nama`='$waktuNama',`waktu_mulai`='$waktuMulai',`waktu_create`=CURRENT_TIMESTAMP WHERE `waktu_id`='1'";
              }else{
                $query = "INSERT INTO waktu (`waktu_Id`,`waktu_nama`,`waktu_mulai`,`waktu_akhir`,`waktu_create`) VALUES ('','$waktuNama','$waktuMulai','$waktuAkhir',CURRENT_TIMESTAMP)";
              }

              if(mysqli_query($connect, $query)) {
                echo "<div class='alert alert-success' id='alert' role='alert'>
                        Data Berhasil dimasukan !
                      </div>"; 
              } else {
                echo "<div class='alert alert-danger' id='alert' role='alert'>
                        Data Gagal dimasukan !
                      </div>"; 
                die(mysqli_error($connect));
              }
              
              mysqli_close($connect);
            }
          ?>
          <div class="alert alert-warning" id="alert" role="alert">
            Pengaturan Jadwal Pembukaan Pendaftaran dan Penutupan Pendaftaran Penerimaan Peserta Didik Baru (PPDB) serta Tahun Ajaran Pendidikan.
          </div>
          <form class="px-2 px-md-5 pt-3" method="POST" enctype="multipart/form-data" action="">
            <div class="mb-4">
              <label for="tahunAjaran" class="form-label">Tahun Ajaran</label>
              <input type="text" class="form-control" name="tahunAjaran" placeholder="20xx - 20xx" required>
            </div><hr>
            <div class="mb-3">
              <label for="tanggalBuka" class="form-label">Pembukaan Tanggal Pendaftaran</label>
              <input type="date" class="form-control" name="tanggalBuka" autocomplete="off" required>
            </div>
            <div class="mb-3">
              <label for="tanggalTutup" class="form-label">Penutupan Tanggal Pendaftaran</label>
              <input type="date" class="form-control" name="tanggalTutup" autocomplete="off" required>
            </div>
            <button type="submit" class="btn btn-primary mt-3 mb-4" name="submit">Submit</button>
          </form>
        </div>
      </div>
    </div>
  </div>
  
  <?php require "../footer.php"; ?>

  <script src="../assets/js/bootstrap.min.js"></script>
</body>
</html>