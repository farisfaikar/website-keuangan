<?php
// include database connection file
require '../../connection.php';
include_once("../../connection.php");

// Check if form is submitted for user update, then redirect to homepage after update
if (isset($_POST['update'])) {
    $nim = $_POST['nim'];
    $nominal = $_POST['nominal'];
    $kode_golongan = $_POST['kode_golongan'];

    // update user data
    $result = mysqli_query($koneksi, "UPDATE tbl_tagihan SET 
    nim = '$nim', 
    nominal = '$nominal', 
    kode_golongan = '$kode_golongan'
    WHERE nim = '$nim'");

    // Redirect to homepage to display updated user in list
    header("Location: ../../tagihan.php");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$nim = $_GET['nim'];
// echo $nim;
// Fetech user data based on id
$result = mysqli_query($koneksi, "SELECT * FROM tbl_tagihan WHERE nim='$nim'");

while ($data = mysqli_fetch_array($result)) {
    $nim = $data['nim'];
    $nominal = $data['nominal'];
    $kode_golongan = $data['kode_golongan'];
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <title>Keuangan - Edit Tagihan</title>
</head>

<body>

    <div class="container">
        <center>
            <h3>Silahkan Masukkan Data</h3>
            <form action="edit_tagihan.php" method="post" name="form1">
                <table width="50%" border="0">
                    <tr>
                        <td>NIM</td>
                        <td><input type="text" name="nim" value="<?php echo $nim; ?>"></td>
                    </tr>
                    <tr>
                        <td>Nominal</td>
                        <td><input type="text" name="nominal" value="<?php echo $nominal; ?>"></td>
                    </tr>
                    <tr>
                        <td>Kode Bank</td>
                        <td><input type="text" name="kode_golongan" value="<?php echo $kode_golongan; ?>"></td>
                    </tr>
                    <td><input class="btn btn-success" type="submit" name="update" value="Update Data"></td>
                    </tr>
                </table>
            </form>

            <br>
            <a href="../../tagihan.php" class="btn btn-primary btn-lg " tabindex="-1" role="button" aria-disabled="true">Kembali</a>

        </center>

    </div>

</body>

</html>