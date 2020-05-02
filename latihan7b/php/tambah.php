
<?php 


require'functions.php';

if(isset($_POST['tambah'])){
	if (tambah($_POST) > 0) {
		echo "<script>
		alert('data berhasil ditambah');
		document.location.href ='admin.php';
		</script>";
	}else{
		echo"<script>
		alert('data gagal ditambahkan');
		document.location.href ='admin.php';
		</script>";
	}

}

 ?>




<!DOCTYPE html>
<html>
<head>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<title>Tambah Data</title>
	<style type="text/css">
		
	</style>
</head>
<body>
	<div class="container">
<h3>FORM TAMBAH DATA MAKANAN</h3>
<form action="" method="post">
	<div class="container">
<ul>
	
<li>
	<label for="foto">File Gambar</label>
	<input type="file" name="foto" id="foto" required=""> <br><br>
</li>
<li>
	<label for="nama">Nama Makanan</label>
	<input  class="form-control" type="text" placeholder="Masukkan Nama" name="nama" id="nama" required="" autofocus=""><br><br>
</li>
<li>
	<label for="jenis">Jenis Makanan</label>
	<select name="jenis" id="jenis" required="">
		<option value="">----------------Jenis Makanan----------------</option>
		<option value="asin">Makanan Asin</option>
		<option value="manis">Makanan Manis</option>
		<option value="tradisional">Makanan Tradisional</option>
		<option value="laut">Makanan Laut</option>
	</select><br><br>
</li>
<li>
	<label for="harga">Harga</label>
	<input  class="form-control" type="text" placeholder="Masukkan harga" name="harga" id="harga" required=""><br><br>
</li>
<li>
	<label for="kedaluarsa">Tgl_Kedaluarsa</label>
	<input  class="form-control" type="text" placeholder="Masukkan Tgl_Kedaluarsa" name="kedaluarsa" id="kedaluarsa" required=""><br><br>
</li>
<br><br>
<button type="submit" name="tambah"  class="btn btn-outline-success">Tambah Data!</button>
<button type="submit" class="btn btn-outline-primary">
	<a href="admin.php">Kembali</a>
</button>
</ul>
</form>
</body>
</html>