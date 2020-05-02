<?php 

if(!isset($_GET['id'])){
	header ("location : ../detail.php");
	exit;
}

require 'functions.php';

$id = $_GET['id'];


$makan = query("SELECT * FROM makanan WHERE id = $id")[0];


 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>DETAIL</title>
 	<style type="text/css">
 		.container{
 			
 				 width: 300px;
  				border: 15px solid green;
  				padding: 50px;
  				margin: 20px;


 		}

 	</style>
 </head>
 <body>
 
 <div class="container">
 	<div class="gambar">
 		<img src="../assets/img/<?= $makan["foto"]; ?>" width = 250px; height= 250px; >
 	</div>

 	<div class="keterangan">
 		<p><?= $makan["nama"]; ?></p>
 		<p><?= $makan["jenis"]; ?></p>
 		<p><?= $makan["harga"];?></p>
 		<p><?= $makan["kedaluarsa"]; ?></p>
 	</div>
 <a href="../index.php">Kembali</a>
</div>
 </body>
 </html>