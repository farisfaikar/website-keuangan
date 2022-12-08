<?php
// include database connection file
require '../../connection.php';
include_once("../../connection.php");

// Check if form is submitted for user update, then redirect to homepage after update
if (isset($_POST['update'])) {
    $nama_bank = $_POST['nama_bank'];
    $kode_bank = $_POST['kode_bank'];

    // update user data
    $result = mysqli_query($koneksi, "UPDATE tbl_bank SET 
    nama_bank = '$nama_bank', 
    kode_bank = '$kode_bank' 
    WHERE kode_bank = '$kode_bank'");

    // Redirect to homepage to display updated user in list
    header("Location: ../../bank.php");
}
?>
<?php
// Display selected user data based on id
// Getting id from ur
$kode_bank = $_GET['kode_bank'];
// echo $kode_bank;
// Fetech user data based on id
$result = mysqli_query($koneksi, "SELECT * FROM tbl_bank WHERE kode_bank='$kode_bank'");

while ($data = mysqli_fetch_array($result)) {
    $nama_bank = $data['nama_bank'];
    $kode_bank = $data['kode_bank'];
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <title>Keuangan - Edit Bank</title>
</head>

<body>

    <div class="container">
        <center>
            <h3>Silahkan Masukkan Data</h3>
            <form action="edit_bank.php" method="post" name="form1">
                <table width="50%" border="0">
                    <tr>
                        <td>Nama Bank</td>
                        <td><input type="text" name="nama_bank" value=<?php echo $nama_bank; ?>></td>
                    </tr>
                    <tr>
                        <td>kode_bank</td>
                        <td><input type="text" name="kode_bank" value=<?php echo $kode_bank; ?>></td>
                    </tr>
                    <td></td>
                    <td><input class="btn btn-success" type="submit" name="update" value="Update Data"></td>
                    </tr>
                </table>
            </form>

            <br>
            <a href="../../bank.php" class="btn btn-primary btn-lg " tabindex="-1" role="button" aria-disabled="true">Kembali</a>

        </center>

    </div>

</body>

</html>