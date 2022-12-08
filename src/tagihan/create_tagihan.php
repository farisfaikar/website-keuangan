<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
  <title>Keuangan - Tambahkan Tagihan</title>
</head>

<body>
  <div class="container">
    <center>
      <h3>Silahkan Masukkan Data</h3>
      <form action="create_tagihan.php" method="post" name="form1">
        <table width="50%" border="0">
          <tr>
            <td>NIM</td>
            <td><input type="text" maxlength="16" name="nim"></td>
          </tr>
          <tr>
            <td>Nominal</td>
            <td><input type="text" name="nominal"></td>
          </tr>
          <tr>
            <td>Kode Golongan</td>
            <td><input type="text" name="kode_golongan"></td>
          </tr>
          </tr>
          <td></td>
          <td><input class="btn btn-success" type="submit" name="Submit" value="Tambah Data"></td>
          </tr>
        </table>
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
      <br>
      <a href="../../tagihan.php" class="btn btn-primary btn-lg " tabindex="-1" role="button" aria-disabled="true">Kembali</a>

    </center>
  </div>
</body>
</html>