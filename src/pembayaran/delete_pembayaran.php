<?php
// include database connection file
include_once("../../connection.php");

// Get id from URL to delete that user
$no_va = $_GET['no_va'];

// Delete user row from table based on given id
$result = mysqli_query($koneksi, "DELETE FROM tbl_pembayaran WHERE no_va='$no_va'");

// After delete redirect to Home, so that latest user list will be displayed.
header("Location:../../pembayaran.php");
