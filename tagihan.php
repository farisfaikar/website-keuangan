<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="">

    <title>Database Keuangan</title>

    <!-- CSS FILES -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link href="css/bootstrap-icons.css" rel="stylesheet">

    <link href="css/templatemo-kind-heart-charity.css" rel="stylesheet">
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
                        <a class="nav-link click-scroll" href="home.php">Home</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link click-scroll" href="mahasiswa.php">Mahasiswa</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link click-scroll" href="tagihan.php">Tagihan</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link click-scroll" href="pembayaran.php">Pembayaran</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link click-scroll" href="bank.php">Bank</a>
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
                        <div class="card-header">
                            <h4 class="card-title" align="center">Tabel Tagihan</h4>
                        </div>
                        <div align="center">
                            <br>
                            <a href="src/tagihan/create_tagihan.php" class="btn btn-success" role="button" aria-disabled="true">Tambah Tagihan</a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped verticle-middle table-responsive-sm">
                                    <thead>
                                        <tr>
                                            <th scope="col">No</th>
                                            <th scope="col">NIM</th>
                                            <th scope="col">Nominal</th>
                                            <th scope="col">Kode Golongan</th>
                                            <th scope="col">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        require 'connection.php';
                                        $hasil = mysqli_query($koneksi, "SELECT * FROM tbl_tagihan")
                                        ?>
                                        <?php
                                        $no = 1;
                                        while ($data = mysqli_fetch_array($hasil)) {
                                            echo "<tr>";
                                            echo "<th>" . $no . "</th>";
                                            echo "<td>" . $data['nim'] . "</td>";
                                            echo "<td>" . $data['nominal'] . "</td>";
                                            echo "<td>" . $data['kode_golongan'] . "</td>";
                                            echo "<td>
                                                <a href='src/tagihan/edit_tagihan.php?nim=$data[nim]' class='btn btn-warning btn-sm' style='font-weight: 600;'>Edit</a> |
                                                <a href='src/tagihan/delete_tagihan.php?nim=$data[nim]' class='btn btn-danger btn-sm' style='font-weight: 600;'>Delete</a>
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
    <script src="js/click-scroll.js"></script>
    <script src="js/counter.js"></script>
    <script src="js/custom.js"></script>

</body>

</html>