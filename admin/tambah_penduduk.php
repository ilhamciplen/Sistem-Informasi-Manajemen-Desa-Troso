<?php
require '../database/db_login.php';
if (isset($_POST['tambah']));
$user = $_GET['user'];
$nik = $_POST['nik'];
$no_kk = $_POST['no_kk'];
$nama = $_POST['nama'];
$tempat_lahir = $_POST['tempat_lahir'];
$tgl_lahir = $_POST['lahir'];
$lahir = date('d-m-Y', strtotime($tgl_lahir));
$status_kawin = $_POST['status_kawin'];
$kewarganegaraan = $_POST['kewarganegaraan'];
$rt = $_POST['rt'];
$rw = $_POST['rw'];
$pekerjaan = $_POST['pekerjaan'];


$query = "INSERT INTO penduduk values ('$nik','$no_kk','$nama','$tempat_lahir','$lahir','$status_kawin','$kewarganegaraan','$rt','$rw','1','$pekerjaan')";
$result = $mysqli->query($query);
if ($result) {
    echo "<script>window.alert('DATA BERHASIL DIMASUKKAN'); window.location='data_penduduk.php'</script>";
} else {
    echo "<script>window.alert('MOHON MAAF NIK SUDAH ADA'); window.location='insert_penduduk.php'</script>";
}
