<!doctype html>
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
  <!--

TemplateMo 581 Kind Heart Charity

https://templatemo.com/tm-581-kind-heart-charity

-->

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
            <a class="nav-link click-scroll" href="../../home.php">Home</a>
          </li>

          <li class="nav-item">
            <a class="nav-link click-scroll" href="../../mahasiswa.php">Mahasiswa</a>
          </li>

          <li class="nav-item">
            <a class="nav-link click-scroll" href="../../tagihan.php">Tagihan</a>
          </li>

          <li class="nav-item">
            <a class="nav-link click-scroll" href="../../pembayaran.php">Pembayaran</a>
          </li>

          <li class="nav-item">
            <a class="nav-link click-scroll" href="../../bank.php">Bank</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <main>
    <section class="donate-section">
      <div class="section-overlay"></div>
      <div class="container">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
              <form action="create_tagihan.php" method="post" name="form1">
                <h4>Masukkan Tagihan</h4>
                <div class="form-group">
                  <label for="inputNim">NIM</label>
                  <input type="text" class="form-control" placeholder="Masukkan NIM" name="nim">
                </div>
                <div class="form-group">
                  <label for="inputNominal">Nominal</label>
                  <input type="number" class="form-control" placeholder="Masukkan Nominal" name="nominal">
                </div>
                <div class="form-group">
                  <label for="inputKodeGolongan">Kode Golongan</label>
                  <input type="text" class="form-control" placeholder="Masukkan Kode Golongan" name="kode_golongan">
                </div>
                <br>
                <input class="btn btn-success" type="submit" name="Submit" value="Tambah Data">
                <br>
                <a href="../../tagihan.php" class="btn btn-primary" tabindex="-1" role="button" aria-disabled="true">Kembali</a>
              </form>
              <?php
              // Check If form submitted, insert form data into users table.
              if (isset($_POST['Submit'])) {
                $nim = $_POST['nim'];
                $nominal = $_POST['nominal'];
                $kode_golongan = $_POST['kode_golongan'];

                // include database connection file
                require '../../connection.php';

                // Insert user data into table
                $result = mysqli_query($koneksi, "INSERT INTO tbl_tagihan(nim, nominal, kode_golongan) VALUES('$nim', '$nominal', '$kode_golongan')");

                // Show message when user added
                // echo "Data berhasil ditambahkan  <a class='btn btn-primary' href=../'../tagihan.php'>Lihat Data</a>";
                header("Location: ../../tagihan.php");
              }
              ?>
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