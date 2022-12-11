<?php
// include database connection file
require '../../connection.php';
include_once("../../connection.php");

// Check if form is submitted for user update, then redirect to homepage after update
if (isset($_POST['update'])) {
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $prodi = $_POST['prodi'];
    $angkatan = $_POST['angkatan'];
    $email = $_POST['email'];
    $alamat = $_POST['alamat'];

    // update user data
    $result = mysqli_query($koneksi, "UPDATE tbl_mahasiswa SET 
    nim = '$nim', 
    nama = '$nama', 
    prodi = '$prodi', 
    angkatan = '$angkatan', 
    email = '$email',
    alamat = '$alamat' 
    WHERE nim = '$nim'");

    // Redirect to homepage to display updated user in list
    header("Location: ../../mahasiswa.php");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$nim = $_GET['nim'];
// echo $nim;
// Fetech user data based on id
$result = mysqli_query($koneksi, "SELECT * FROM tbl_mahasiswa WHERE nim='$nim'");

while ($data = mysqli_fetch_array($result)) {
    $nim = $data['nim'];
    $nama = $data['nama'];
    $prodi = $data['prodi'];
    $angkatan = $data['angkatan'];
    $email = $data['email'];
    $alamat = $data['alamat'];
}
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="">

    <title>Keuangan - Edit Mahasiswa</title>

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
                        <a class="nav-link" href="../../home.php">Home</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link active" href="../../mahasiswa.php">Mahasiswa</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="../../tagihan.php">Tagihan</a>
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
                            <form action="edit_mahasiswa.php" method="post" name="form1">
                                <h4>Edit Mahasiswa</h4>
                                <div class="form-group" style="margin-bottom: 1em;">
                                    <label>NIM</label>
                                    <input type="text" class="form-control" placeholder="Masukkan NIM" name="nim" required value="<?php echo $nim; ?>">
                                </div>
                                <div class="form-group" style="margin-bottom: 1em;">
                                    <label>Nama</label>
                                    <input type="text" class="form-control" placeholder="Masukkan Nama" name="nama" required value="<?php echo $nama; ?>">
                                </div>
                                <div class="form-group" style="margin-bottom: 1em;">
                                    <label>Prodi</label>
                                    <input type="text" class="form-control" placeholder="Masukkan Prodi" name="prodi" required value="<?php echo $prodi; ?>">
                                </div>
                                <div class="form-group" style="margin-bottom: 1em;">
                                    <label>Angkatan</label>
                                    <input type="text" class="form-control" placeholder="Masukkan Angkatan" name="angkatan" required value="<?php echo $angkatan; ?>">
                                </div>
                                <div class="form-group" style="margin-bottom: 1em;">
                                    <label>Email</label>
                                    <input type="email" class="form-control" placeholder="Masukkan Email" name="email" required value="<?php echo $email; ?>">
                                </div>
                                <div class="form-group" style="margin-bottom: 1em;">
                                    <label>Alamat</label>
                                    <input type="text" class="form-control" placeholder="Masukkan Alamat" name="alamat" required value="<?php echo $alamat; ?>">
                                </div>
                                <input class="btn btn-success" style="margin-bottom: 1em;" type="submit" name="update" value="Update Data">
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