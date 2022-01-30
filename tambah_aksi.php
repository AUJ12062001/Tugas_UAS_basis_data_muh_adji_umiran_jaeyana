<?php 
// koneksi database
include 'koneksi.php';
 

$nama = $_POST['nama'];
$spesialis = $_POST['spesialis'];
$tempat_praktek = $_POST['tempat_praktek'];
 if (!empty($nama) || !empty($spesialis) || !empty($tempat_praktek)) {
// menginput data ke database
mysqli_query($koneksi,"insert into dokter values('','$nama','$spesialis','$tempat_praktek')");
 }
// mengalihkan halaman kembali ke index.php
header("location:index.php");
 
?>