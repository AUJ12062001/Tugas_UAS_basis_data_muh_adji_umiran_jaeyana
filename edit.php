<html>
<head>
	<title>TABEL DOKTER</title>
</head>
<body>
 
	<h3>TABEL DOKTER</h3>
	<br/>
	<a href="index.php">Kembali</a>
	<br/>
	<br/>
	<h3>Edit Data dokter</h3>
 
	<?php
	include 'koneksi.php';
	$id = $_GET['id'];
	$data = mysqli_query($koneksi,"select * from dokter where id='$id'");
	while($d = mysqli_fetch_array($data)){
		?>
		<form method="post" action="update.php">
			<table>
				<tr>			
					<td>Nama</td>
					<td>
						<input type="hidden" name="id" value="<?php echo $d['id']; ?>">
						<input type="text" name="nama" value="<?php echo $d['nama']; ?>">
					</td>
				</tr>
				<tr>
					<td>spesialis</td>
					<td><input type="text" name="spesialis" value="<?php echo $d['spesialis']; ?>"></td>
				</tr>
				<tr>
					<td>tempat praktek</td>
					<td><input type="text" name="tempat_praktek" value="<?php echo $d['tempat_praktek']; ?>"></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" value="SIMPAN"></td>
				</tr>		
			</table>
		</form>
		<?php 
	}
	?>
 
</body>
</html>