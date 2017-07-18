<?php
include "koneksi.php";
session_start();
	if (!isset($_SESSION['username'])){
		header ("location:login.php");
	}
//$username = "ANISA";
?>

<center> Berhasil Login, <a href="logout.php">Logout</a> </center>
<hr>
<h1><center>Sistem Informasi Penjualan Hardware Komputer/center> </h1>
<hr>
	<table border=1 align='center'>
		<tr>
			<td width=150 align='center'> <a href='kelola.php'> Kelola Akun </a> </td>
            <td width=150 align='center'> <a href='profil.php'> Profil </a> </td>
		</tr>
	</table>
	<br/>
	<table border=1 width=900 align='center'>
		<tr>
			<td> <center>
			<!--<h2> Selamat Datang Admin! <u><?php //echo"$username" ?> </u> </h2>-->
			</td></center>
		</tr>
	</table>
 