<?php 

include 'php/functions.php';

$makan = query("SELECT * FROM makanan ");




 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>Tugas2_173040152</title>
 	<style type="text/css">
 		.gaya{
 			text-align: center;
 		}

 			
 
 	</style>
 </head>
 <body>
 	<a href="php/login.php">
 		<button type="submit">Masuk Kehalaman Admin</button>
 	</a>
 	<div class="container">
 	<?php foreach($makan as $mkn) :?>
 		<p class="nama">
 			<a href="php/detail.php?id=<?php echo $mkn["id"]; ?>">
 				<?php echo$mkn["nama"]; ?>
 			</a>
 			
 		</p>

<?php endforeach; ?>
</div>

 </table>
 </body>
 </html>