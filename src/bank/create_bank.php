<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
  <title>Keuangan - Tambahkan Bank</title>
</head>

<body>
  <div class="container">
    <center>
      <h3>Silahkan Masukkan Data</h3>
      <form action="create_bank.php" method="post" name="form1">
        <table width="50%" border="0">
          <tr>
            <td>Nama Bank</td>
            <td><input type="text" name="nama_bank"></td>
          </tr>
          <tr>
            <td>Kode Bank</td>
            <td><input type="text" name="kode_bank"></td>
          </tr>
          <tr>
          <td></td>
          <td><input class="btn btn-success" type="submit" name="Submit" value="Tambah Data"></td>
          </tr>
        </table>
      </form>

      <?php

      // Check If form submitted, insert form data into users table.
      if (isset($_POST['Submit'])) {
        $nama_bank = $_POST['nama_bank'];
        $kode_bank = $_POST['kode_bank'];

        // include database connection file
        require '../../connection.php';

        // Insert user data into table
        $result = mysqli_query($koneksi, "INSERT INTO tbl_bank(nama_bank, kode_bank) VALUES('$nama_bank', '$kode_bank')");

        // Show message when user added
        // echo "Data berhasil ditambahkan  <a class='btn btn-primary' href=../'../mahasiswa.php'>Lihat Data</a>";
        header("Location: ../../bank.php");
      }
      ?>
      <br>
      <a href="../../bank.php" class="btn btn-primary btn-lg " tabindex="-1" role="button" aria-disabled="true">Kembali</a>

    </center>

  </div>

</body>

</html>