<?php
require '../database/db_login.php';
$id_kegiatan = $_GET['id_kegiatan'];

$query = "DELETE FROM kegiatan WHERE id_kegiatan = '$id_kegiatan'";
$result = $mysqli->query($query);
if ($result) {
    echo "<script>window.alert('DATA DIHAPUS'); window.location='data_kegiatan.php';</script>";
} else {
    echo "<script>window.location='data_kegiatan.php';</script>";
}
