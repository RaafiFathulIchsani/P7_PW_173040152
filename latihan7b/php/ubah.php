<?php 


require'functions.php';

$id = $_GET["id"];
$mkn = query("SELECT * FROM makanan WHERE id = $id")[0];


if(isset($_POST['ubah'])){
	if (ubah($_POST) > 0) {
		echo "<script>
		alert('data berhasil diubah');
		document.location.href ='admin.php';
		</script>";
	}else{
		echo"<script>
		alert('data gagal diubah');
		document.location.href ='admin.php';
		</script>";
	}

}


 ?>




<!DOCTYPE html>
<html>
<head>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<title>Ubah Data</title>
	<style type="text/css">
		
	</style>
</head>
<body>
	<div class="container">
<h3>FORM UBAH DATA MAKANAN</h3>
<form action="" method="post">
	<div class="container">
<ul>

	<input type="hidden" name="id" id="id" value="<?= $mkn["id"]; ?>">
	
<li>
	<label for="foto">File Gambar</label>
	<input value="<?= $mkn["foto"]; ?>" type="text" name="foto" id="foto" required="" > <br><br>
</li>
<li>
	<label for="nama">Nama Makanan</label>
	<input  class="form-control" type="text" placeholder="Masukkan Nama" name="nama" id="nama" required="" autofocus="" value="<?= $mkn["nama"]; ?>"><br><br>
</li>
<li>
	<label for="jenis">Jenis Makanan</label>
	<select name="jenis" id="jenis" required="" value="<?= $mkn["jenis"]; ?>">
		<option >----------------Jenis Makanan----------------</option>
		<option value="Makanan Asin">Makanan Asin</option>
		<option value="Makanan Manis">Makanan Manis</option>
		<option value="Makanan Tradisional">Makanan Tradisional</option>
		<option value="Makanan Laut">Makanan Laut</option>
	</select><br><br>
</li>
<li>
	<label for="harga">Harga</label>
	<input  class="form-control" type="text" placeholder="Masukkan harga" name="harga" id="harga" required="" value="<?= $mkn["harga"]; ?>"> <br><br>
</li>
<li>
	<label for="kedaluarsa">Tgl_Kedaluarsa</label>
	<input  class="form-control" type="text" placeholder="Masukkan Tgl_Kedaluarsa" name="kedaluarsa" id="kedaluarsa" required="" value="<?= $mkn["kedaluarsa"];  ?>"><br><br>
</li>
<br><br>
<button type="submit" name="ubah"  class="btn btn-outline-success">Ubah Data!</button>
<button type="submit" class="btn btn-outline-primary">
	<a href="admin.php">Kembali</a>
</button>
</ul>
</form>
</body>
</html>