<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
  <title>Keuangan - Tambah Mahasiswa</title>
</head>

<body>
  <div class="container">
    <center>
      <h3>Silahkan Masukkan Data</h3>
      <form action="create_mhs.php" method="post" name="form1">
        <table width="50%" border="0">
          <tr>
            <td>NIM</td>
            <td><input type="text" maxlength="16" name="nim"></td>
          </tr>
          <tr>
            <td>Nama</td>
            <td><input type="text" name="nama"></td>
          </tr>
          <tr>
            <td>Angkatan</td>
            <td><input type="year" name="angkatan"></td>
          </tr>
          <tr>
            <td>Prodi</td>
            <td><input type="text" name="prodi"></td>
          </tr>
          <tr>
            <td>Alamat</td>
            <td><input type="text" name="alamat"></td>
          </tr>
          <tr>
            <td>Email</td>
            <td><input type="email" name="email"></td>
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
        $nama = $_POST['nama'];
        $angkatan = $_POST['angkatan'];
        $prodi = $_POST['prodi'];
        $alamat = $_POST['alamat'];
        $email = $_POST['email'];

        // include database connection file
        require '../../connection.php';

        // Insert user data into table
        $result = mysqli_query($koneksi, "INSERT INTO tbl_mahasiswa(nim, nama, angkatan, prodi, alamat, email) VALUES('$nim', '$nama', '$angkatan', '$prodi', '$alamat', '$email')");

        // Show message when user added
        // echo "Data berhasil ditambahkan  <a class='btn btn-primary' href=../'../mahasiswa.php'>Lihat Data</a>";
        header("Location: ../../mahasiswa.php");
      }
      ?>
      <br>
      <a href="../../mahasiswa.php" class="btn btn-primary btn-lg " tabindex="-1" role="button" aria-disabled="true">Kembali</a>

    </center>

  </div>

</body>

</html>