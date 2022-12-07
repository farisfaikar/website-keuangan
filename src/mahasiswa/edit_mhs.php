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

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <title>Keuangan - Edit Mahasiswa</title>
</head>

<body>

    <div class="container">
        <center>
            <h3>Silahkan Masukkan Data</h3>
            <form action="edit_mhs.php" method="post" name="form1">
                <table width="50%" border="0">
                    <tr>
                        <td>NIM</td>
                        <td><input type="text" name="nim" value=<?php echo $nim; ?>></td>
                    </tr>
                    <tr>
                        <td>Nama</td>
                        <td><input type="text" name="nama" value=<?php echo $nama; ?>></td>
                    </tr>
                    <tr>
                        <td>Prodi</td>
                        <td><input type="text" name="prodi" value=<?php echo $prodi; ?>></td>
                    </tr>
                    <tr>
                        <td>Angkatan</td>
                        <td><input type="number" name="angkatan" value=<?php echo $angkatan; ?>></td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td><input type="text" name="email" value=<?php echo $email; ?>></td>
                    </tr>
                    <tr>
                        <td>Alamat</td>
                        <td><input type="text" name="alamat" value=<?php echo $alamat; ?>></td>
                    </tr>
                    <td></td>
                    <td><input class="btn btn-success" type="submit" name="update" value="Update Data"></td>
                    </tr>
                </table>
            </form>

            <br>
            <a href="../../mahasiswa.php" class="btn btn-primary btn-lg " tabindex="-1" role="button" aria-disabled="true">Kembali</a>

        </center>

    </div>

</body>

</html>