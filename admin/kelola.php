<?php 
include('koneksi.php');
include('cek.php');
?>

<html>
<head> 
<center> Berhasil Login, <a href="logout.php">Logout</a> </center>
<hr/>
	<title>Sistem Informasi Penjualan Hardware Komputer</title>
<h1><center>Sistem Informasi Penjualan Hardware Komputer</center> </h1>
	<center><h3>DATA USER</h3></center>
	<hr>
</head>
	<table border=1 align='center'>
		<tr>
			<td width=150 align='center'> <a href='kelola.php'> Kelola Akun </a> </td>
            <td width=150 align='center'> <a href='profil.php'> Profil </a> </td>
		</tr>
	</table>
	<br/>
<body>
<center>
<?php 
	if (!empty($_GET['message']) && $_GET['message'] == 'success') {
		echo '<h3>Berhasil meng-update data!</h3>';
	} 
	else if (!empty($_GET['message']) && $_GET['message'] == 'delete') {
		echo '<h3>Berhasil menghapus data!</h3>';
	}
?>


<a href="daftar.php">+ Tambah Data</a>

<table border="1" cellpadding="5" cellspacing="0">
	<thead>
    	<tr>
        	<td>id</td>
        	<td>Nama</td>
        	<td>Username</td>
        	<td>Password</td>
        	<td>No. Telepon</td>
        	<td>Alamat</td>
        	<td>Email</td>
        	<td>Jabatan</td>
            <td>Aksi</td>
        </tr>
    </thead>
    <tbody>
    <?php 
		$query = mysql_query("select * from user");
		$id = 1;
		while ($data = mysql_fetch_array($query)) {
	?>
    	<tr>
        	<td><?php echo $id; ?></td>
        	<td><?php echo $data['nama']; ?></td>
        	<td><?php echo $data['username']; ?></td>
        	<td><?php echo $data['password']; ?></td>
        	<td><?php echo $data['telepon']; ?></td>
        	<td><?php echo $data['alamat']; ?></td>
        	<td><?php echo $data['email']; ?></td>
            <td><?php echo $data['jabatan']; ?></td>
            <td>
            	<a href="../edit.php?id=<?php echo $data['id_user']; ?>">Edit</a> || 
                <a href="../delete.php?id=<?php echo $data['id_user']; ?>">Hapus</a>
            </td>
        </tr>
    <?php 
		$id++;
	} 
	?>
    </tbody>
</table>
</center>
</body>
</html>