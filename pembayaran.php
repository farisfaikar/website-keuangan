<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="">

    <title>Keuangan - Tabel Pembayaran</title>

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
                        <a class="nav-link" href="mahasiswa.php">Mahasiswa</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="tagihan.php">Tagihan</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link active" href="pembayaran.php">Pembayaran</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="bank.php">Bank</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <main class="donate-section">
        <section style="padding-top: 100px;">
            <div class="section-overlay"></div>
            <div class="container">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title" align="center" style="margin-top: 8px;"><strong>Tabel Pembayaran</strong></h3>
                        </div>
                        <div align="left" style="padding: 1em; padding-bottom: 0;">
                            <a href="src/pembayaran/create_pembayaran.php" class="btn btn-success" role="button" aria-disabled="true">
                                <i class="bi bi-plus-circle"> Tambah Pembayaran</i></a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped verticle-middle table-responsive-sm">
                                    <thead>
                                        <tr>
                                            <th scope="col">No</th>
                                            <th scope="col">No VA</th>
                                            <th scope="col">NIM</th>
                                            <th scope="col">Kode Bank</th>
                                            <th scope="col">Tanggal</th>
                                            <th scope="col">Status</th>
                                            <th scope="col">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        require 'connection.php';
                                        $hasil = mysqli_query($koneksi, "SELECT * FROM tbl_pembayaran")
                                        ?>
                                        <?php
                                        $no = 1;
                                        while ($data = mysqli_fetch_array($hasil)) {
                                            echo "<tr>";
                                            echo "<th>" . $no . "</th>";
                                            echo "<td>" . $data['no_va'] . "</td>";
                                            echo "<td>" . $data['nim'] . "</td>";
                                            echo "<td>" . $data['kode_bank'] . "</td>";
                                            echo "<td>" . $data['tanggal'] . "</td>";
                                            if ($data['stats'] == 0){
                                                echo "<td><p class='center text-danger fw-semibold' align='center' style='margin-bottom: 0'>Belum Dibayar</p></td>";
                                            } else if ($data['stats'] == 1){
                                                echo "<td><p class='center text-success fw-semibold' align='center' style='margin-bottom: 0'>Sudah Dibayar</p></td>";
                                            }
                                            echo "<td>
                                            <a href='src/pembayaran/edit_pembayaran.php?no_va=$data[no_va]' class='btn btn-warning btn-sm' style='font-weight: 600; margin-right: 10px;'><i class='bi bi-pencil-square'> Edit</i></a>
                                            <a href='src/pembayaran/delete_pembayaran.php?no_va=$data[no_va]' class='btn btn-danger btn-sm' style='font-weight: 600; margin-right: 10px;'><i class='bi bi-trash'> Delete</i></a>
                                            </td>";
                                            echo "</tr>";
                                            $no++;
                                        }
                                        ?>
                                    </tbody>
                                </table>
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
