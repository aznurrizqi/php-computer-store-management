<?php
include('koneksi.php');
include('cek.php');
include('../edit.php');

//tangkap data dari form
	$id = $_POST['id_user'];
	$nama = $_POST['nama'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	$telepon = $_POST['telepon'];	
	$alamat = $_POST['alamat'];	
	$email = $_POST['email'];
	$jabatan = $_POST['jabatan'];

//update data di database sesuai user_id
$query = mysql_query("update user set nama='$nama', username='$username', password='$password', telepon='$telepon', alamat='$alamat', email='$email', jabatan='$jabatan' where id_user='$id'") or die(mysql_error());

if ($query) {
	header('location:kelola.php?message=success');
}
?>