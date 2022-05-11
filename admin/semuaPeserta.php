<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="../assets/img/favicon.png">
  
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
  <title>Selamat Datang - PPDB Online SMA Kartika I-2 Medan</title>
</head>
<body style="overflow-x: hidden;">
  <!-- Header -->
  <?php require "./headerAdmin.php"; ?>

  <div class="row justify-content-center mt-5">
    <div class="col-11">
      <div class="card p-md-4 shadow-sm">
        <div class="card-body">
          <h2 class="h2">
            List Semua Peserta PPDB SMA Kartika I-2 Medan
          </h2><hr>
          <?php 
            require '../koneksi.php';
            
            $sql = "SELECT * FROM daftar WHERE NOT dfr_no='admin'";
            $data = $connect->query($sql);
          ?>
          <?php if (mysqli_num_rows($data) > 0): ?>
            <table class="table table-striped table-hover border border-dark">
              <thead>
                <tr class="fw-bold text-center">
                  <th class="border-end border-dark">No. Pendaftaran</th>
                  <th class="border-end border-dark pb-3">Nama</th>
                  <th class="border-end border-dark">Tanggal Daftar</th>
                  <th class="border-end border-dark">Jenis Kelamin</th>
                  <th class="border-end border-dark pb-3">NISN</th>
                  <th class="border-end border-dark">Tanggal Lahir</th>
                  <th class="border-end border-dark">Nilai MTK</th>
                  <th class="border-end border-dark">Nilai B. Indonesia</th>
                  <th class="border-end border-dark">Nilai B. Inggris</th>
                  <th class="border-end border-dark">Nilai IPA</th>
                  <th class="border-end border-dark">Nilai IPS</th>
                </tr>
              </thead>
              <tbody class="text-center">
                <?php while ($row = $data->fetch_array()): ?>
                <tr>
                  <td class="border-end border-dark"><?php echo $row['dfr_no']; ?></td>
                  <td class="border-end border-dark"><?php echo $row['dft_nama']; ?></td>
                  <td class="border-end border-dark"><?php echo $row['dfr_tanggal']; ?></td>
                  <td class="border-end border-dark"><?php echo ($row['dfr_jekel'] == 1)? "Pria" : "Wanita"; ?></td>
                  <td class="border-end border-dark"><?php echo $row['dfr_nisn']; ?></td>
                  <td class="border-end border-dark"><?php echo $row['dfr_tgl_lahir']; ?></td>
                  <td class="border-end border-dark"><?php echo $row['dfr_nilai_mm']; ?></td>
                  <td class="border-end border-dark"><?php echo $row['dfr_nilai_indo']; ?></td>
                  <td class="border-end border-dark"><?php echo $row['dfr_nilai_eng']; ?></td>
                  <td class="border-end border-dark"><?php echo $row['dfr_nilai_ipa']; ?></td>
                  <td class="border-end border-dark"><?php echo $row['dfr_nilai_ips']; ?></td>
                </tr>
                <?php endwhile; ?>
              </tbody>
            </table>
          <?php else: ?>
            <div class='alert alert-warning' id='alert' role='alert'>
              Data Tidak Tersedia
            </div>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>

  <?php require "../footer.php"; ?>
  
  <!-- Bootstrap JS -->
  <script src="../assets/js/bootstrap.min.js"></script>
</body>
</html>