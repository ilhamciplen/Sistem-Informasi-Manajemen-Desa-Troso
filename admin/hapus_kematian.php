<?php
require '../database/db_login.php';
$no_kematian = $_GET['no_kematian'];

$query = "DELETE FROM kematian WHERE no_kematian = '$no_kematian'";
$result = $mysqli->query($query);
if ($result) {
    echo "<script>window.alert('DATA DIHAPUS'); window.location='data_kematian.php';</script>";
} else {
    echo "<script>window.location='data_kematian.php';</script>";
}
