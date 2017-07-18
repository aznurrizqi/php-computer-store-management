<?php
include('koneksi.php');
include('cek.php');

//tangkap data dari form
	$id = $_POST['user_id'];
	$nama = $_POST['nama'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	$email = $_POST['email'];

//update data di database sesuai user_id
$query = mysql_query("update admin set nama='$nama', username='$username', password='$password', email='$email' where user_id='$id'") or die(mysql_error());

if ($query) {
	header('location:profil.php?message=success');
}
?>