<?php 
session_start();
if (!isset($_SESSION['username'])) {
	header("Location : login.php");
	exit;
}
require 'functions.php';
$makan = query("SELECT * FROM makanan");


// tombol cari
if (isset($_GET['cari'])) {
	$keyword = $_GET["keyword"];
	$makan = query("SELECT * FROM makanan WHERE

			nama LIKE '%$keyword%' OR
			jenis LIKE '%$keyword%' OR
			harga LIKE '%$keyword%' OR
			kedaluarsa LIKE '%$keyword%' ");

}else{
	$makan = query("SELECT * FROM makanan");
}


 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
 	<title>ADMIN</title>
 	<style type="text/css" >
 		.font{
 			color: blue;
 		}
 		.table{
 			background-color: silver;
 		}
 	</style>

 </head>
 <body>
 	<table>
<tr>
	<td>
 	<form action="" method="get">
 		<input type="text" name="keyword" autofocus="" autocomplete="off" size="50" placeholder="Masukkan Pencarian" >
 		<button type="submit" name="cari">Cari</button>
 		
 	</form>	
 	</td>
 	<td>
 	<a href="tambah.php"><button type="button" class="btn btn-success btn-sm">Tambah Data</button></a>
 	</td>
 	<td>
 		<a href="logout.php"><button type="submit" class="btn-btn-danger btn-sm">LOGOUT</button></a>

 	</td>
 </tr>
 </table>
 		<div class="continer">
 	<table border ="2" cellpadding="2" cellspacing="1"  class="table table-striped table">
 		<tr class="font">
 			<th>#</th>
 			<th>opsi</th>
 			<th>Gambar</th>
 			<th>Nama Makanan</th>		
 			<th>Jenis Makanan</th>
 			<th>Harga</th>
 			<th>Tgl_Kedaluarasa</th>
 		</tr>
 		<?php $i = 1; ?>
 		<?php foreach($makan as $mkn) : ?>
 			<tr class="font">
 				<td><?= $i; ?></td>
 				<td>
 				
 					<a href="ubah.php?id=<?= $mkn["id"]; ?>"><button type=" button" class="btn btn-primary btn-sm">Ubah</button></a>
 					<a href="hapus.php?id=<?= $mkn["id"]; ?>" onclick="return confirm('yakin hapus data??')"><button type="button" class="btn btn-danger btn-sm">Hapus</button></a>
 				</td>
 				<td><img src="../assets/img/<?= $mkn["foto"];?>" alt="Gambar" width = 250px; weight= 250px;></td>
 				<td ><?= $mkn["nama"]; ?></td>
 				<td><?= $mkn["jenis"]; ?></td>
 				<td><?= $mkn["harga"]; ?></td>
 				<td><?= $mkn["kedaluarsa"]; ?></td>
 			</tr>
 			<?php $i++; ?>
 		<?php endforeach; ?>
 	
 	</table>
 	</div>

 	
 
 </body>
 </html>