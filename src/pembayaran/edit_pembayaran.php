<?php
// include database connection file
require '../../connection.php';
include_once("../../connection.php");

// Check if form is submitted for user update, then redirect to homepage after update
if (isset($_POST['update'])) {
    $no_va = $_POST['no_va'];
    $nim = $_POST['nim'];
    $kode_bank = $_POST['kode_bank'];
    $tanggal = $_POST['tanggal'];
    $stats = $_POST['stats'];

    // update user data
    $result = mysqli_query($koneksi, "UPDATE tbl_pembayaran SET 
    nim = '$nim', 
    kode_bank = '$kode_bank', 
    tanggal = '$tanggal',
    stats = '$stats'
    WHERE no_va = '$no_va'");

    // Redirect to homepage to display updated user in list
    header("Location: ../../pembayaran.php");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$no_va = $_GET['no_va'];
// echo $nim;
// Fetech user data based on id
$result = mysqli_query($koneksi, "SELECT * FROM tbl_pembayaran WHERE no_va='$no_va'");

while ($data = mysqli_fetch_array($result)) {
    $no_va = $data['no_va'];
    $nim = $data['nim'];
    $kode_bank = $data['kode_bank'];
    $tanggal = $data['tanggal'];
    $stats = $data['stats'];
}
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="">

    <title>Keuangan - Edit Pembayaran</title>

    <!-- CSS FILES -->
    <link href="../../css/bootstrap.min.css" rel="stylesheet">

    <link href="../../css/bootstrap-icons.css" rel="stylesheet">

    <link href="../../css/templatemo-kind-heart-charity.css" rel="stylesheet">

    <link rel="icon" href="../../images/icons/scholarship.png">
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
                        <a class="nav-link" href="../../mahasiswa.php">Mahasiswa</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="../../tagihan.php">Tagihan</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link active" href="../../pembayaran.php">Pembayaran</a>
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
                            <form action="edit_pembayaran.php" method="post" name="form1">
                                <h4>Edit Pembayaran</h4>
                                <div class="form-group" style="margin-bottom: 1em;">
                                    <label>No VA</label>
                                    <input type="number" class="form-control" placeholder="Masukkan No VA" name="no_va" required value="<?php echo $no_va; ?>">
                                </div>
                                <div class="form-group" style="margin-bottom: 1em;">
                                    <label>NIM</label>
                                    <input type="number" class="form-control" placeholder="Masukkan NIM" name="nim" required value="<?php echo $nim; ?>">
                                </div>
                                <div class="form-group" style="margin-bottom: 1em;">
                                    <label>Kode Bank</label>
                                    <input type="text" class="form-control" placeholder="Masukkan Kode Bank" name="kode_bank" required value="<?php echo $kode_bank; ?>">
                                </div>
                                <div class="form-group" style="margin-bottom: 1em;">
                                    <label>Tanggal</label>
                                    <input type="date" class="form-control" placeholder="Masukkan Tanggal" name="tanggal" required value="<?php echo $tanggal; ?>">
                                </div>
                                <div class="form-group" style="margin-bottom: 1em;">
                                    <label>Status Pembayaran</label>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="stats" value="Sudah Dibayar" <?php
                                                                                                                        if ($stats == "Sudah Dibayar") {
                                                                                                                            echo "checked";
                                                                                                                        }
                                                                                                                        ?>>
                                        <label class="form-check-label">
                                            Sudah Dibayar
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="stats" value="Belum Dibayar" <?php
                                                                                                                        if ($stats == "Belum Dibayar") {
                                                                                                                            echo "checked";
                                                                                                                        }
                                                                                                                        ?>>
                                        <label class="form-check-label">
                                            Belum Dibayar
                                        </label>
                                    </div>
                                </div>
                                <input class="btn btn-success" style="margin-bottom: 1em;" type="submit" name="update" value="Update Data">
                                <br>
                                <a href="../../pembayaran.php" class="btn btn-primary" tabindex="-1" role="button" aria-disabled="true">Kembali</a>
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