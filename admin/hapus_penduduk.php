<?php
require '../database/db_login.php';
$nik = $_GET['nik'];

$query = "DELETE FROM penduduk WHERE nik = '$nik'";
$result = $mysqli->query($query);
if ($result) {
    echo "<script>window.alert('DATA DIHAPUS'); window.location='data_penduduk.php';</script>";
} else {
    echo "<script>window.location='data_penduduk.php';</script>";
}
