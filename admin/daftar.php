<?php
include "koneksi.php";
session_start();
	isset($_SESSION['username']);
?>


<html>
<head> 
	<title>Sistem Informasi Penjualan Hardware Komputer</title>
</head>
<center> Berhasil Login, <a href="logout.php">Logout</a> </center>
<hr/>
<h1><center>Sistem Informasi Penjualan Hardware Komputer</center> </h1>
	<center><h3>DAFTAR USER BARU</h3></center>
	<hr>
	<table border=1 align='center'>
		<tr>
			<td width=150 align='center'> <a href='kelola.php'> Kelola Akun </a> </td>
            <td width=150 align='center'> <a href='profil.php'> Profil </a> </td>
		</tr>
	</table>
	<br/>
<body>
	<form method="post" name="pendaftaran" action="proses_daftar.php">
		<table border=1 align="center" cellpadding=5 cellspacing=0>
			<tr>
				<td>Nama</td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr>
				<td>Username</td>
				<td><input type="text" name="username"></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="password" name="password"></td>
			</tr>
			<tr>
				<td>Telepon</td>
				<td><input type="text" name="telepon"></td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td><input type="text" name="alamat"></td>
			</tr>
			<tr>
				<td>Email</td>
				<td><input type="text" name="email"></td>
			</tr>
			<tr>
				<td>Jabatan</td>
                <td>    <select name="jabatan" required>
                        <option selected disabled>PILIH JABATAN</option>
                        <option>PEMILIK</option>
                        <option>KARYAWAN</option>
                    </select>
                </td>
			</tr>			
			<tr>
				<td colspan=2 align="center">
					<input type="submit" name="submit" value="DAFTAR">
				</td>
			</tr>
		</table>
		<br/>
	</form>
</body>

</html>