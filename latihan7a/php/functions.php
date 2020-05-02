<?php 
function koneksi(){
	$conn = mysqli_connect("localhost","root","") or die ("KONEKSI KE DB GAGAL!");
	mysqli_select_db($conn, "pw_173040152") or die ("DATABASE SALAH!");

	return $conn;
}


function query($sql){
 $conn = koneksi();

  $result = mysqli_query($conn,$sql);

  $rows =[];
  while($row = mysqli_fetch_assoc($result)){
  	$rows[] = $row;
  }
  return $rows;
  
}

function tambah($data){
	$conn = koneksi();
	
	$foto = htmlspecialchars($data['foto']);
	$nama = htmlspecialchars($data['nama']);
	$jenis =htmlspecialchars($data['jenis']) ;
	$harga = htmlspecialchars($data['harga']) ;
	$kedaluarsa = htmlspecialchars($data['kedaluarsa']);

	$query = "INSERT INTO makanan VALUES

				('','$foto','$nama', '$jenis','$harga', '$kedaluarsa')";

	mysqli_query($conn,$query);

	return mysqli_affected_rows($conn);
}

function hapus($id){

$conn = koneksi();

mysqli_query($conn,"DELETE FROM makanan WHERE id= $id");

return mysqli_affected_rows($conn);

}

function ubah($data){
	$conn = koneksi();

	$id = $data["id"];
	$foto = htmlspecialchars($data["foto"]);
	$nama = htmlspecialchars($data["nama"]);
	$jenis =htmlspecialchars($data['jenis']) ;
	$harga = htmlspecialchars($data['harga']) ;
	$kedaluarsa = htmlspecialchars($data['kedaluarsa']);


	$query = "UPDATE makanan SET
				foto ='$foto',
				nama = '$nama',
				jenis = '$jenis',
				harga = '$harga',
				kedaluarsa = '$kedaluarsa'

				WHERE id = '$id'

				";

				mysqli_query($conn, $query);

				return mysqli_affected_rows($conn);
}



 ?>

