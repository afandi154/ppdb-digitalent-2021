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
  <?php require "./koneksi.php"; ?>

  <div class="row justify-content-center mt-5">
    <div class="col-10 col-lg-8">
      <div class="card p-md-4 shadow-sm">
        <div class="card-body">
          <h2 class="h2">
            Formulir Pendaftaran
          </h2><hr>
          <?php
            $sql = mysqli_query($connect, "SELECT * FROM waktu");
            $check = mysqli_num_rows($sql);
            $row = $sql->fetch_array();

            $sql2 = mysqli_query($connect, "SELECT * FROM daftar");
            $check2 = mysqli_num_rows($sql2);
            $dfrNo = "PS-00".$check2;
            
          ?>
          <?php if(($check > 0) and ($row['waktu_akhir'] > date('Y-m-d'))): ?>
            <?php
                if(isset($_POST['submit'])) {
                  require "./koneksi.php";
                  
                  // Data Siswa
                  $namaLengkap = $_POST['nama'];
                  $password = $_POST['password'];
                  $gender = $_POST['jekel'];
                  $tempatLahir = $_POST['tempat_lahir'];
                  $tanggalLahir = $_POST['tanggal_lahir'];
                  $agama = $_POST['agama'];
                  $anakDari = $_POST['anak_dari'];
                  $nisn = $_POST['nisn'];
                  $asalSekolah = $_POST['asal_sekolah'];
                  $alamatSekolah = $_POST['alamat_sekolah'];
                  $userFoto = $_FILES['userFoto']['name'];
                  $tmp_userFoto = $_FILES['userFoto']['tmp_name']; 
                  move_uploaded_file($tmp_userFoto, './assets/user_img/'.$userFoto);

                  //Data Nilai US
                  $nilaiMTK = $_POST['nilai_mtk'];
                  $nilaiBIndo = $_POST['nilai_indo'];
                  $nilaiBIng = $_POST['nilai_ing'];
                  $nilaiIpa = $_POST['nilai_ipa'];
                  $nilaiIps = $_POST['nilai_ips'];

                  //Data Wali
                  $namaAyah = $_POST['nama_ayah'];
                  $namaIbu = $_POST['nama_ibu'];
                  $alamatOrtu = $_POST['alamat_ortu'];
                  $noTelp = $_POST['notelp'];
                  $buktiTF = $_FILES['buktiTF']['name'];
                  $tmp_buktiTF = $_FILES['buktiTF']['tmp_name']; 
                  move_uploaded_file($tmp_buktiTF, './assets/user_img/'.$buktiTF);
                  
                  //Insert Query
                  $query = "INSERT INTO daftar (`dfr_no`,`dfr_tanggal`,`dfr_password`,`dft_nama`,`dfr_jekel`,`dfr_tmp_lahir`,
                            `dfr_tgl_lahir`,`dft_agama`,`dfr_anak_dr`,`dfr_nisn`,`dfr_asal_sekolah`,`dfr_almt_sekolah`,
                            `dfr_pas_photo`,`dfr_nilai_mm`,`dfr_nilai_indo`,`dfr_nilai_eng`,`dfr_nilai_ipa`,`dfr_nilai_ips`,`dfr_ayah`,
                            `dfr_ibu`,`dfr_alamat`,`dfr_hp_ortu`,`status`,`filetf`) 
                            VALUES ('$dfrNo',CURRENT_TIMESTAMP,'$password','$namaLengkap', '$gender', '$tempatLahir', '$tanggalLahir',
                            '$agama', '$anakDari', '$nisn', '$asalSekolah', '$alamatSekolah', '$userFoto', '$nilaiMTK', '$nilaiBIndo',
                            '$nilaiBIng', '$nilaiIpa', '$nilaiIps', '$namaAyah', '$namaIbu', '$alamatOrtu', '$noTelp', '','$buktiTF')";
                  if(mysqli_query($connect, $query)) {
                    echo "<div class='alert alert-success' id='alert' role='alert'>
                            Selamat Data Anda Berhasil Dimasukan.
                          </div>";
                  }else{
                    echo "<div class='alert alert-danger' id='alert' role='alert'>
                            Maaf, Data Anda Gagal Dimasukan.
                          </div>";
                    die(mysqli_error($connect));
                  }
                  mysqli_close($connect);
                }
              ?>
            <div class="card-body">
              <form class="px-2 px-md-4 pt-3" method="POST" enctype="multipart/form-data" action="">
                <h5 class="h5 mb-4 fw-bold">
                  Data Siswa / Calon Peserta
                </h5>
                <div class="mb-3">
                  <label for="noReg" class="form-label">No. Pendaftaran</label>
                  <input type="text" class="form-control" name="noReg" value="<?php echo $dfrNo; ?>" disabled>
                  <div class='alert alert-warning mt-3' id='alert' role='alert'>
                    <strong>Harap Catat No. Pendaftaran</strong>
                  </div>
                </div>
                <div class="mb-3">
                  <label for="nama" class="form-label">Nama Lengkap</label>
                  <input type="text" class="form-control" name="nama" autocomplete="off" required>
                </div>
                <div class="mb-3">
                  <label for="jekel" class="form-label">Jenis Kelamin</label>
                  <div class="form-check" id="jekel">
                    <input class="form-check-input" type="radio" name="jekel" id="pria" value="1" required>
                    <label class="form-check-label" for="pria">
                      Pria
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="jekel" id="wanita" value="0" required>
                    <label class="form-check-label" for="wanita">
                      Wanita
                    </label>
                  </div>
                </div>
                <div class="mb-3">
                  <label for="ttl" class="form-label">Tempat, Tanggal Lahir</label>
                  <div class="row" id="ttl">
                    <div class="col-12 col-md-6">
                      <input type="text" class="form-control" name="tempat_lahir" autocomplete="off" required>
                    </div>
                    <div class="col-12 mt-3 mt-md-0 col-md-6">
                      <input type="date" class="form-control" name="tanggal_lahir" autocomplete="off" required>
                    </div>
                  </div>
                </div>
                <div class="mb-3">
                  <label for="agama" class="form-label" >Agama</label>
                  <select class="form-select form-select-sm mb-3" name="agama" required>
                    <option selected disabled>Pilih Agama</option>
                    <option value="1">Islam</option>
                    <option value="2">Protestan</option>
                    <option value="3">Katolik</option>
                    <option value="4">Hindu</option>
                    <option value="5">Budha</option>
                    <option value="6">Konghu Cho</option>
                  </select>
                </div>
                <div class="mb-3">
                  <label for="password" class="form-label">Password</label>
                  <input type="text" class="form-control" name="password" autocomplete="off" required>
                </div>
                <div class="mb-3">
                  <label for="anakDari" class="form-label">Anak Dari</label>
                  <div class="form-check" id="anakDari">
                    <input class="form-check-input" type="radio" id="umum" name="anak_dari" value="1" required>
                    <label class="form-check-label" for="umum">
                      Umum
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" id="pa-ad" name="anak_dari" value="2" required>
                    <label class="form-check-label" for="pa-ad">
                      PA-AD
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" id="ba_ta_sip-ad" name="anak_dari" value="3" required>
                    <label class="form-check-label" for="ba_ta_sip-ad">
                      BA TA SIP-AD
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" id="wk-ad" name="anak_dari" value="4" required>
                    <label class="form-check-label" for="wk-ad">
                      WK-AD
                    </label>
                  </div>
                </div>
                <div class="mb-3">
                  <label for="nisn" class="form-label"NISN</label>NISN</label>
                  <input type="text" class="form-control" name="nisn" autocomplete="off" required>
                </div>
                <div class="mb-3">
                  <label for="asalSekolah" class="form-label">Asal Sekolah</label>
                  <textarea class="form-control" id="asalSekolah" name="asal_sekolah" rows="3" autocomplete="off"></textarea>
                </div>
                <div class="mb-3">
                  <label for="alamatSekolah" class="form-label">Alamat Sekolah Asal</label>
                  <textarea class="form-control" id="alamatSekolah" name="alamat_sekolah" rows="3" autocomplete="off"></textarea>
                </div>
                <div class="mb-3">
                  <label for="userFoto" class="form-label">Upload Pas Foto Siswa</label>
                  <div class='alert alert-warning' id='alert' role='alert'>
                    Berkas foto rasio 3x4 dengan height minimal 500px, harus dalam format jpg dan berukuran di bawah 500 KB
                  </div>
                  <div class="custom-file mt-2 mb-3 p-2 border border-primary rounded">
                    <input type="file" class="custom-file-input" name="userFoto" required>
                  </div>
                </div><hr class="mt-4">
                <h5 class="h5 mb-4 fw-bold">
                  Nilai Ujian Sekolah (US)
                </h5>
                <div class='alert alert-warning' id='alert' role='alert'>
                  (Skala nilai ujian : 1 sampai dengan 100) Nilai desimal dapat dilambangkan dengan tanda titik (.) <strong>misal : </strong>70.51
                </div>
                <div class="mb-3">
                  <label for="nilai_mtk" class="form-label">Nilai Akhir Matematika</label>
                  <input type="number" class="form-control" name="nilai_mtk" autocomplete="off" step="any" min="0" max="100" placeholder="1-100" required>
                </div>
                <div class="mb-3">
                  <label for="nilai_b.indo" class="form-label">Nilai Akhir Bahasa Indonesia</label>
                  <input type="number" class="form-control" name="nilai_indo" autocomplete="off" step="any" min="0" max="100" placeholder="1-100" required>
                </div>
                <div class="mb-3">
                  <label for="nilai_b.ing" class="form-label">Nilai Akhir Bahasa Inggris</label>
                  <input type="number" class="form-control" name="nilai_ing" autocomplete="off" step="any" min="0" max="100" placeholder="1-100" required>
                </div>
                <div class="mb-3">
                  <label for="nilai_ipa" class="form-label">Nilai Akhir Ilmu Pengetahuan Alam (IPA)</label>
                  <input type="number" class="form-control" name="nilai_ipa" autocomplete="off" step="any" min="0" max="100" placeholder="1-100" required>
                </div>
                <div class="mb-3">
                  <label for="nilai_ips" class="form-label">Nilai Akhir Ilmu Pengetahuan Sosial (IPS)</label>
                  <input type="number" class="form-control" name="nilai_ips" autocomplete="off" step="any" min="0" max="100" placeholder="1-100" required>
                </div><hr class="mt-4">
                <h5 class="h5 mb-4 fw-bold">
                  Keterangan Orang Tua / Wali
                </h5>
                <div class="mb-3">
                  <label for="nama_ayah" class="form-label">Nama Ayah</label>
                  <input type="text" class="form-control" name="nama_ayah" autocomplete="off" required>
                </div>
                <div class="mb-3">
                  <label for="nama_ibu" class="form-label">Nama Ibu</label>
                  <input type="text" class="form-control" name="nama_ibu" autocomplete="off" required>
                </div>
                <div class="mb-3">
                  <label for="alamatOrtu" class="form-label">Alamat Orang Tua / Wali</label>
                  <textarea class="form-control" id="alamatOrtu" name="alamat_ortu" rows="3" autocomplete="off"></textarea>
                </div>
                <div class="mb-3">
                  <label for="notelp" class="form-label">No. Telp Orang Tua / Wali</label>
                  <input type="text" class="form-control" name="notelp" autocomplete="off" required>
                </div>
                <div class="mb-3">
                  <label for="buktiTF" class="form-label">Upload Bukti Pembayaran</label>
                  <div class='alert alert-warning mb' id='alert' role='alert'>
                    Upload Berkas Bukti Transfer Pembayaran dalam format *.JPG
                  </div>
                  <div class="custom-file mt-2 mb-3 p-2 border border-primary rounded">
                    <input type="file" class="custom-file-input" name="buktiTF" required>
                  </div>
                </div>
                <button type="submit" class="btn btn-primary mt-4 mb-4" name="submit">Submit</button>
              </form>
            </div>
          <?php else: ?>
            <div class="alert alert-warning" role="alert">
              Maaf tanggal pendaftaran belum ditentukan atau sudah ditutup, mohon hubungi pihak sekolah untuk info lebih lanjut.
            </div>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>

  <?php require "./footer.php"; ?>

  <!-- Bootstrap JS -->
  <script src="./assets/js/bootstrap.min.js"></script>
</body>
</html>