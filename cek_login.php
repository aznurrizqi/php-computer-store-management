<?php
session_start();

	include 'koneksi.php';
	$username = $_POST['username'];
	$password = $_POST['password'];
	
	// query untuk mendapatkan record dari username
	$query = "SELECT * FROM user WHERE username = '$username'";
	$hasil = mysql_query($query);
	$data = mysql_fetch_array($hasil);
	// cek kesesuaian password
	if ($password == $data['password']) {
		echo "sukses";
		// menyimpan username dan level ke dalam session
		$_SESSION['jabatan'] = $data['jabatan'];
		$_SESSION['username'] = $data['username'];
		header('location: level.php');
	}
	else 
		echo '<h1>Login gagal</h1>';
?>
