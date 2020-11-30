<?php
require '../database/db_login.php';
if (isset($_POST['tambah']));

$user = $_GET['user'];
$id_kegiatan = $_POST['id_kegiatan'];
$nama_kegiatan = $_POST['nama_kegiatan'];
$tgl_kegiatan = $_POST['tgl_kegiatan'];
$rt = $_POST['rt'];
$rw = $_POST['rw'];



$query = "INSERT INTO kegiatan values ('$id_kegiatan','$nama_kegiatan','$tgl_kegiatan','1','$rt','$rw')";
$result = $mysqli->query($query);
if ($result) {
    echo "<script>window.alert('DATA BERHASIL DIMASUKKAN'); window.location='data_kegiatan.php'</script>";
} else {
    echo "<script>window.alert('MOHON MAAF ID SUDAH ADA'); window.location='insert_kegiatan.php'</script>";
}
