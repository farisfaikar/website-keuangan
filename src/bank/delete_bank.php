<?php
// include database connection file
include_once("../../connection.php");

// Get id from URL to delete that user
$kode_bank = $_GET['kode_bank'];

// Delete user row from table based on given id
$result = mysqli_query($koneksi, "DELETE FROM tbl_bank WHERE kode_bank='$kode_bank'");

// After delete redirect to Home, so that latest user list will be displayed.
header("Location:../../bank.php");
