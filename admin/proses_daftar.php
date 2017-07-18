<?php
include "koneksi.php";
	$nama = strtoupper($_POST['nama']);
	$username = $_POST['username'];
	$password = $_POST['password'];
	$telepon = strtoupper($_POST['telepon']);
	$alamat = strtoupper($_POST['alamat']);
	$email = strtoupper($_POST['email']);
	$jabatan = strtoupper($_POST['jabatan']);

	if (empty($nama)){
		echo "<script>alert('Nama belum diisi')</script>";
		echo "<meta http-equiv='refresh' content='1 url=daftar.php'>";
	}
	else if(empty($username)){
		echo "<script>alert('Username belum diisi')</script>";
		echo "<meta http-equiv='refresh' content='1 url=daftar.php'>";
	}
	else if (empty($password)){
		echo "<script>alert('Password belum diisi')</script>";
		echo "<meta http-equiv='refresh' content='1 url=daftar.php'>";
	}
	else if (empty($telepon)){
		echo "<script>alert('Telepon belum diisi')</script>";
		echo "<meta http-equiv='refresh' content='1 url=daftar.php'>";
	}
	else if (empty($alamat)){
		echo "<script>alert('Alamat belum diisi')</script>";
		echo "<meta http-equiv='refresh' content='1 url=daftar.php'>";
	}
	else if (empty($email)){
		echo "<script>alert('Email belum diisi')</script>";
		echo "<meta http-equiv='refresh' content='1 url=daftar.php'>";
	}
	else if (empty($jabatan)){
		echo "<script>alert('Jabatan belum diisi')</script>";
		echo "<meta http-equiv='refresh' content='1 url=daftar.php'>";
	}
	else{
		$daftar = mysql_query("INSERT INTO user (id_user, nama, username, password, telepon, alamat, email, jabatan) 
								values ('$nama', '$nama', '$username','$password', '$telepon', '$alamat', '$email', '$jabatan')");
		if ($daftar){
			echo "<script>alert('Berhasil Mendaftar')</script>";
			echo "<meta http-equiv='refresh' content='1 url=kelola.php'>";
		}
		else{
			echo "<script>alert('Gagal Mendaftar')</script>";
			echo "<meta http-equiv='refresh' content='1 url=daftar.php'>";
		}
	}
?>