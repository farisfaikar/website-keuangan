<?php
// Check If form submitted, insert form data into users table.
if (isset($_POST['Submit'])) {
  $nim = $_POST['nim'];
  $nama = $_POST['nama'];
  $angkatan = $_POST['angkatan'];
  $prodi = $_POST['prodi'];
  $alamat = $_POST['alamat'];
  $email = $_POST['email'];

  // include database connection file
  require '../../connection.php';

  // Insert user data into table
  $result = mysqli_query($koneksi, "INSERT INTO tbl_mahasiswa(nim, nama, angkatan, prodi, alamat, email) VALUES('$nim', '$nama', '$angkatan', '$prodi', '$alamat', '$email')");

  // Redirect to different page
  header("Location: ../../mahasiswa.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <meta name="description" content="">
  <meta name="author" content="">

  <title>Keuangan - Tambah Mahasiswa</title>

  <!-- CSS FILES -->
  <link href="../../css/bootstrap.min.css" rel="stylesheet">

  <link href="../../css/bootstrap-icons.css" rel="stylesheet">

  <link href="../../css/templatemo-kind-heart-charity.css" rel="stylesheet">
</head>

<body id="section_1">
  <nav class="navbar navbar-expand-lg bg-light shadow-lg">
    <div class="container">
      <a class="navbar-brand" href="../../home.php">
        <img src="../../images/logo.png" class="logo img-fluid" alt="Database Keuangan">
        <span>
          Database Keuangan
          <small>SPP Mahasiswa</small>
        </span>
      </a>

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link" href="../../home.php">Home</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="../../mahasiswa.php">Mahasiswa</a>
          </li>

          <li class="nav-item active">
            <a class="nav-link active" href="../../tagihan.php">Tagihan</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="../../pembayaran.php">Pembayaran</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="../../bank.php">Bank</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <main>
    <section class="donate-section" style="padding-top: 100px;">
      <div class="section-overlay"></div>
      <div class="container">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
              <form action="create_mahasiswa.php" method="post" name="form1">
                <h4>Tambah Mahasiswa</h4>
                <div class="form-group" style="margin-bottom: 1em;">
                  <label for="inputNim">NIM</label>
                  <input type="text" class="form-control" placeholder="Masukkan NIM" name="nim" required="">
                </div>
                <div class="form-group" style="margin-bottom: 1em;">
                  <label for="inputNama">Nama</label>
                  <input type="text" class="form-control" placeholder="Masukkan Nama" name="nama" required="">
                </div>
                <div class="form-group" style="margin-bottom: 1em;">
                  <label for="inputAngkatan">Angkatan</label>
                  <input type="text" class="form-control" placeholder="Masukkan Angkatan" name="angkatan" required="">
                </div>
                <div class="form-group" style="margin-bottom: 1em;">
                  <label for="inputProdi">Prodi</label>
                  <input type="text" class="form-control" placeholder="Masukkan Prodi" name="prodi" required="">
                </div>
                <div class="form-group" style="margin-bottom: 1em;">
                  <label for="inputAlamat">Alamat</label>
                  <input type="text" class="form-control" placeholder="Masukkan Alamat" name="alamat" required="">
                </div>
                <div class="form-group" style="margin-bottom: 1em;">
                  <label for="inputEmail">Email</label>
                  <input type="text" class="form-control" placeholder="Masukkan Email" name="email" required="">
                </div>
                <input class="btn btn-success" style="margin-bottom: 1em;" type="submit" name="Submit" value="Tambah Data">
                <br>
                <a href="../../mahasiswa.php" class="btn btn-primary" tabindex="-1" role="button" aria-disabled="true">Kembali</a>
              </form>
            </div>
          </div>
        </div>
      </div>
      </div>
    </section>

  </main>

  <!-- JAVASCRIPT FILES -->
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.sticky.js"></script>
  <script src="js/click-scroll.js"></script>
  <script src="js/counter.js"></script>
  <script src="js/custom.js"></script>

</body>

</html>