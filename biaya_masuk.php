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
    <div class="col-10 col-lg-8">
      <div class="card p-md-4 shadow-sm">
        <div class="card-body">
          <h2 class="h2">
            Informasi Biaya Masuk
          </h2><hr>
          <table class="table table-striped table-hover border border-dark">
            <thead>
              <tr class="fw-bold text-center">
                <th rowspan="2" class="border-end border-dark pb-4">NO</th>
                <th rowspan="2" class="border-end border-dark pb-4">Jenis Pembayaran</th>
                <th colspan="3">Gelombang</th>
              </tr>
              <tr class="fw-bold text-center">
                <th class="border-end border-dark">Gelombang I</th>
                <th class="border-end border-dark">Gelombang II</th>
                <th class="border-end border-dark">Gelombang III</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class="fw-bold text-center border-end border-dark" scope="row">1</td>
                <td class="border-end border-dark">Biaya Pendidikan Pembangunan (BPP)</td>
                <td class="text-end border-end border-dark">7.500.000</td>
                <td class="text-end border-end border-dark">8.000.000</td>
                <td class="text-end">8.500.000</td>
              </tr>
              <tr>
                <td class="fw-bold text-center border-end border-dark" scope="row">2</td>
                <td class="border-end border-dark">Biaya Operasional Pendidikan (BOP)</td>
                <td class="text-end border-end border-dark">2.500.000</td>
                <td class="text-end border-end border-dark">3.000.000</td>
                <td class="text-end">3.500.000</td>
              </tr>
              <tr>
                <td class="fw-bold text-center border-end border-dark" scope="row">3</td>
                <td class="border-end border-dark">Biaya Penilaian Semester (Ganjil-Genap)</td>
                <td class="text-end border-end border-dark">500.000</td>
                <td class="text-end border-end border-dark">550.000</td>
                <td class="text-end">600.000</td>
              </tr>
              <tr>
                <td class="fw-bold text-center border-end border-dark" scope="row">4</td>
                <td class="border-end border-dark">Biaya Potensi Test Akademik</td>
                <td class="text-end border-end border-dark">200.000</td>
                <td class="text-end border-end border-dark">200.000</td>
                <td class="text-end">200.000</td>
              </tr>
              <tr>
                <td class="fw-bold text-center border-end border-dark" scope="row">5</td>
                <td class="border-end border-dark">Biaya Osis Semester (Ganjil-Genap)</td>
                <td class="text-end border-end border-dark">100.000</td>
                <td class="text-end border-end border-dark">100.000</td>
                <td class="text-end">100.000</td>
              </tr>
              <tr>
                <td class="fw-bold text-center border-end border-dark" scope="row">6</td>
                <td class="border-end border-dark">Biaya Buku Lembar kerja dan Soal (LKS)</td>
                <td class="text-end border-end border-dark">300.000</td>
                <td class="text-end border-end border-dark">300.000</td>
                <td class="text-end">300.000</td>
              </tr>
              <tr>
                <td class="fw-bold text-center border-end border-dark" scope="row">7</td>
                <td class="border-end border-dark">Biaya Baju Olahraga</td>
                <td class="text-end border-end border-dark">250.000</td>
                <td class="text-end border-end border-dark">250.000</td>
                <td class="text-end">250.000</td>
              </tr>
              <tr class="fw-bold">
                <td class="fw-bold text-center border-end border-dark" scope="row" colspan="2">Jumlah</td>
                <td class="text-end border-end border-dark">11.350.000</td>
                <td class="text-end border-end border-dark">12.400.000</td>
                <td class="text-end">13.450.000</td>
              </tr>
            </tbody>
          </table>
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