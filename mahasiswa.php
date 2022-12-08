<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Keuangan - Mahasiswa</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <center>
            <h2>Daftar Mahasiswa</h2>
        </center>
        <a href="src/mahasiswa/create_mhs.php" class="btn btn-success btn-lg " tabindex="-1" role="button" aria-disabled="true">Tambah Mahasiswa</a>
        <table class="table table-hover-dark">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">NIM</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Prodi</th>
                    <th scope="col">Angkatan</th>
                    <th scope="col">Email</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Aksi</th>
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
                <a href='src/mahasiswa/edit_mhs.php?nim=$data[nim]' class='btn btn-warning btn-sm' style='font-weight: 600;'>Edit</a> |
                <a href='src/mahasiswa/delete_mhs.php?nim=$data[nim]' class='btn btn-danger btn-sm' style='font-weight: 600;'>Delete</a>
                </td>";
                        echo "</tr>";
                        $no++;
                    }
                    ?>
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</body>

</html>