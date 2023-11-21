<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="">

    <title>Keuangan - Tabel Mahasiswa</title>

    <!-- CSS FILES -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link href="css/bootstrap-icons.css" rel="stylesheet">

    <link href="css/templatemo-kind-heart-charity.css" rel="stylesheet">

    <link rel="icon" href="images/icons/scholarship.png">
    <!--

    TemplateMo 581 Kind Heart Charity

    https://templatemo.com/tm-581-kind-heart-charity

    -->
</head>

<body id="section_1">
    <nav class="navbar navbar-expand-lg bg-light shadow-lg">
        <div class="container">
            <a class="navbar-brand" href="home.php">
                <img src="images/logo.png" class="logo img-fluid" alt="Database Keuangan">
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
                        <a class="nav-link" href="home.php">Home</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link active" href="mahasiswa.php">Mahasiswa</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="tagihan.php">Tagihan</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="pembayaran.php">Pembayaran</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="bank.php">Bank</a>
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
                        <div class="card-header">
                            <h3 class="card-title" align="center" style="margin-top: 8px;"><strong>Tabel Mahasiswa</strong></h3>
                        </div>
                        <div align="left" style="padding: 1em; padding-bottom: 0;">
                            <a href="src/mahasiswa/create_mahasiswa.php" class="btn btn-success" role="button" aria-disabled="true">
                                <i class="bi bi-plus-circle"> Tambah Mahasiswa</i></a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped verticle-middle table-responsive-sm">
                                    <thead>
                                        <tr>
                                            <th scope="col">No</th>
                                            <th scope="col">NIM</th>
                                            <th scope="col">Nama</th>
                                            <th scope="col" width="210px">Prodi</th>
                                            <th scope="col">Angkatan</th>
                                            <th scope="col">Email</th>
                                            <th scope="col">Alamat</th>
                                            <th scope="col" width="188px">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        require 'connection.php';
                                        $hasil = mysqli_query($koneksi, "SELECT * FROM tbl_mahasiswa")
                                        ?>
                                        <?php
                                        $no = 1;
                                        while ($data = mysqli_fetch_array($hasil)) {
                                            echo "<tr>";
                                            echo "<th>" . $no . "</th>";
                                            echo "<td>" . $data['nim'] . "</td>";
                                            echo "<td>" . $data['nama'] . "</td>";
                                            echo "<td>" . $data['prodi'] . "</td>";
                                            echo "<td>" . $data['angkatan'] . "</td>";
                                            echo "<td>" . $data['email'] . "</td>";
                                            echo "<td>" . $data['alamat'] . "</td>";
                                            echo "<td>
                                            <a href='src/mahasiswa/edit_mahasiswa.php?nim=$data[nim]' class='btn btn-warning btn-sm' style='font-weight: 600; margin-right: 10px;'><i class='bi bi-pencil-square'> Edit</i></a>
                                            <a href='?hapus=$data[nim]' value='hapus' class='btn btn-danger btn-sm' style='font-weight: 600; margin-right: 10px;' onclick=\"return confirm('Apakah Anda yakin ingin menghapus data ini?');\"><i class='bi bi-trash'> Delete</i></a>
                                            </td>";
                                            echo "</tr>";
                                            $no++;
                                        }
                                        ?>
                                    </tbody>
                                </table>
                                <?php
                                if (isset($_GET['hapus'])) {
                                    $nim = $_GET['hapus'];
                                    $query = "DELETE FROM tbl_mahasiswa WHERE nim='$nim'";
                                    $hasil = mysqli_query($koneksi, $query);
                                    if ($hasil) {
                                        echo "<script>alert('Data Berhasil Dihapus');window.location='mahasiswa.php';</script>";
                                    } else {
                                        echo "<script>alert('Data Gagal Dihapus');window.location='mahasiswa.php';</script>";
                                    }
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
    <script src="js/counter.js"></script>
    <script src="js/custom.js"></script>

</body>

</html>
