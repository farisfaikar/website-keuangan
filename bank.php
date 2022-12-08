<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Keuangan - bank</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <center>
            <h2>Daftar Bank</h2>
        </center>
        <a href="src/bank/create_bank.php" class="btn btn-success btn-lg " tabindex="-1" role="button" aria-disabled="true">Tambah Bank</a>
        <table class="table table-hover-dark">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">No.</th>
                    <th scope="col">Nama Bank</th>
                    <th scope="col">Kode Bank</th>
                </tr>
            </thead>
            <tbody>
                <?php
                require 'connection.php';
                $hasil = mysqli_query($koneksi, "SELECT * FROM tbl_bank")
                ?>
                <?php
                $no = 1;
                while ($data = mysqli_fetch_array($hasil)) {
                    echo "<tr>";
                    echo "<th>" . $no . "</th>";
                    echo "<td>" . $data['nama_bank'] . "</td>";
                    echo "<td>" . $data['kode_bank'] . "</td>";
                    echo "<td>
            <a href='src/bank/edit_bank.php?kode_bank=$data[kode_bank]' class='btn btn-warning btn-sm' style='font-weight: 600;'>Edit</a>|
            <a href='src/bank/delete_bank.php?kode_bank=$data[kode_bank]' class='btn btn-danger btn-sm' style='font-weight: 600;'>Delete</a>
            </td>";
                    echo "</tr>";
                    $no++;
                }
                ?>
            </tbody>
        </table>
    </div>
    <!-- <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script> -->
</body>

</html>
