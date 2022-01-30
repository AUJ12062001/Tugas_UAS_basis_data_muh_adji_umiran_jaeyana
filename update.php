<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$id = $_POST['id'];
$nama = $_POST['nama'];
$spesialis = $_POST['spesialis'];
$tempat_praktek = $_POST['tempat_praktek'];
 
// update data ke database
mysqli_query($koneksi,"update dokter set nama='$nama', spesialis='$spesialis', tempat_praktek='$tempat_praktek' where id='$id'");
 
// mengalihkan halaman kembali ke index.php
header("location:index.php");
 
?>