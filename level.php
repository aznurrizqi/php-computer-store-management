<?php
// memulai session
	session_start();

	error_reporting(0);

	if (isset($_SESSION['jabatan'])) {
		// jika jabatan pemilik
		if ($_SESSION['jabatan'] == "PEMILIK") {   
			header('location:pemilik/laporanbarang.php');
		}
		// jika kondisi jabatan karyawan maka akan diarahkan ke halaman lain
		else if ($_SESSION['jabatan'] == "KARYAWAN") {
		   header('location:karyawan/indexbarang.php');
	   }
	}
	if (!isset($_SESSION['jabatan'])) {
		header('location:login.php');
	}
 ?>
 