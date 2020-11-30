<?php
require '../database/db_login.php';
if (isset($_POST['tambah']));

$user = $_GET['user'];
$no_kematian = $_POST['no_kematian'];
$nik = $_POST['nik'];
$nama = $_POST['nama'];
$tgl_kematian = $_POST['tgl_kematian'];
$tempat_meninggal = $_POST['tempat_meninggal'];
$penyebab = $_POST['penyebab'];
$rt = $_POST['rt'];
$rw = $_POST['rw'];



$query = "INSERT INTO kematian values ('$no_kematian','$nik','$nama','$tgl_kematian','$tempat_meninggal','$penyebab','$rt','$rw','1')";
$result = $mysqli->query($query);
if ($result) {
    echo "<script>window.alert('DATA BERHASIL DIMASUKKAN'); window.location='data_kematian.php'</script>";
} else {
    echo "<script>window.alert('MOHON MAAF ID SUDAH ADA'); window.location='insert_kematian.php'</script>";
}
