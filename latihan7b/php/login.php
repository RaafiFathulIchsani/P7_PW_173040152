<?php  
session_start();
require'functions.php';


if (isset($_SESSION['username'])) {
    header("Location: admin.php");
    exit;
}


if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $cek_user = mysqli_query(koneksi(), "SELECT * FROM user WHERE username = '$username'");
    
   // MENCOCOKAN USERNAME DAN PASSWORD
       if (mysqli_num_rows($cek_user) > 0) {
        
        $row = mysqli_fetch_assoc($cek_user);

       if(password_verify($password, $row['password'])){
        $_SESSION['username'] = $_POST['username'];
        $_SESSION['hash'] = hash('sha256',$row['id'], false);

        if ($row['id'] == $_SESSION['hash']) {
        header("Location : admin.php");
        die;
        }
        header("Location: login.php");
        die;
       }
 }
 
    $error = true;


}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>

<?php if (isset($error)) : ?>
	<p style="color: red; font-style: italic; ">UserName atau password salah!</p>
<?php endif; ?>

<form action="" method="post">

<table>
	<tr>
		<td><label for="username">UserName</label></td>
		<td>:</td>
		<td><input type="text" name="username" id="username"></td>
	</tr>

	<tr>
		<td><label for="password">Password</label></td>
		<td>:</td>
		<td><input type="password" name="password" id="password"></td>
	</tr>
</table>
<div class="remember">
	<input type="checkbox" name="remember" id="remember">
	<label for="remember">Remember Me</label>
</div>

<button type="submit" name="submit">Login</button>	
</form>

<div>
    <p>Belum Punya akun ? Registrasi <a href="registrasi.php">Disini</a> </p>
</div>
</body>
</html>