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
            Atur Alur Pendaftaran
          </h2><hr>
          <?php
			      if(isset($_POST['submit'])) {
              require "../koneksi.php";

              $nama_foto = $_FILES['foto']['name'];
              $tmp_foto = $_FILES['foto']['tmp_name']; 
              move_uploaded_file($tmp_foto, '../assets/img/'.$nama_foto);

              $sql = mysqli_query($connect, "SELECT * FROM alur");
              $check = mysqli_num_rows($sql);

              if($check > 0) {
                $query = "UPDATE alur SET `alur_nama`='$nama_foto',`alur_create`=CURRENT_TIMESTAMP WHERE `alur_id`='1'";
              }else{
                $query = "INSERT INTO alur (`alur_Id`,`alur_nama`,`alur_create`,`alur_update`) VALUES ('','$nama_foto',CURRENT_TIMESTAMP,CURRENT_TIMESTAMP)";
              }

              if(mysqli_query($connect, $query)) {
                echo "<div class='alert alert-success' id='alert' role='alert'>
                        Gambar Berhasil dimasukan !
                      </div>"; 
              } else {
                echo "<div class='alert alert-danger' id='alert' role='alert'>
                        Gambar Gagal dimasukan !
                      </div>"; 
                die(mysqli_error($connect));
              }
              
              mysqli_close($connect);
            }
          ?>
          <div class="alert alert-warning" id="alert" role="alert">
            Upload diagram Alur yang akan digunakan sebagai panduan didalam proses penerimaan peserta didik baru. Diagram Alur dibuat dengan format *.JPG dengan demensi ukuran 865 x 555 pixels.
          </div>
          <form class="px-3 px-md-5 pt-3" method="POST" enctype="multipart/form-data" action="">
            <div class="form-group ">
              <label for="foto">Upload Gambar Alur Diagram</label>
              <div class="custom-file mt-2 mb-3 p-2 border border-primary rounded">
                <input type="file" class="custom-file-input" name="foto" required>
              </div>
              <button type="submit" class="btn btn-primary mb-4" name="submit">Submit</button>
            </div>
          </form>
          
        </div>
      </div>
    </div>
  </div>

  <?php require "../footer.php"; ?>

  <script src="../assets/js/bootstrap.min.js"></script>
</body>
</html>