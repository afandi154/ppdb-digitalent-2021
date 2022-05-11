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
<body style="overflow-x: hidden;">
  <!-- Header -->
  <?php require "./header.php"; ?>
  
  <div class="row justify-content-center mt-5">
    <div class="col-10 col-lg-6">
      <div class="card shadow border-primary">
        <div class="card-head p-2 p-md-4 bg-primary text-light">
          <h2 class="h2 text-center fw-bold">
            Member Login
          </h2>
        </div>
        <div class="card-body mx-md-3">
          <?php
            if(isset($_POST['submit'])) {
              require "koneksi.php";
              $connect = mysqli_connect($server, $username, $password, $database);

              $id = $_POST['id'];
              $pass = $_POST['password'];
              
              $data = mysqli_query($connect,"SELECT * FROM daftar WHERE dfr_no='$id' AND dfr_password='$pass'");
              $cek = mysqli_num_rows($data);
              
              if($cek > 0){
                $_SESSION['username'] = $id;
                if($id == "admin") {
                  header("location:./admin/index.php");
                }else{
                  header("location:./index.php");
                }
              }else{
                echo "<div class='alert alert-danger' id='alert' role='alert'>
                        Maaf, Nomor Pendaftaran atau Password yang anda masukan tidak terdaftar!.
                      </div>";
                mysqli_close($connect);
              }
            }
          ?>
          <form class="px-5 pt-3" method="POST" enctype="multipart/form-data" action="">
            <div class="mb-3">
              <label for="id" class="form-label">No. Pendaftaran</label>
              <input type="text" class="form-control" name="id" autocomplete="off" required>
            </div>
            <div class="mb-3">
              <label for="password" class="form-label">Password</label>
              <input type="password" class="form-control" name="password" autocomplete="off" required>
            </div>
            <button type="submit" class="btn btn-primary mt-3 mb-4" name="submit">Submit</button>
          </form>
        </div>
      </div>
    </div>
  </div>

  <?php require "./footer.php"; ?>

  <!-- Bootstrap JS -->
  <script src="./assets/js/bootstrap.min.js"></script>
</body>
</html>