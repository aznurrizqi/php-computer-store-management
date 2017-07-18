<?php
include "koneksi.php";
session_start();
	isset($_SESSION['username']);
?>

<html>
<head>
	<title>Sistem Informasi Penjualan Hardware Komputer</title>
</head>
<center><h3>LOGIN USER</h3></center>
<hr>
<body>
	<form method="post" name="login" action="cek_login.php">
	<table border=1 align="center" cellpadding=5 cellspacing=0>
		<tr>
			<td>Username</td>
			<td><input type="text" name="username"></td>
		</tr>
		<tr>
			<td>Password</td>
			<td><input type="password" name="password"></td>
		</tr>
		<tr>
			<td colspan=2 align="center">
				<input type="submit" name="submit" value="LOGIN">
			</td>
		</tr>
	</table>
</form>
</body>
</html>