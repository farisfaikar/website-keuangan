<?php
// include database connection file
include_once("../../connection.php");

// Get id from URL to delete that user
$nim = $_GET['nim'];

// Delete user row from table based on given id
$result = mysqli_query($koneksi, "DELETE FROM tbl_mahasiswa WHERE nim='$nim'");

// After delete redirect to Home, so that latest user list will be displayed.
header("Location:../../mahasiswa.php");
