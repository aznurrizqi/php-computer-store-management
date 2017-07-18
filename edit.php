<?php 
	include('koneksi.php');
	include('admin/cek.php');
?>

<html>
<head> 
	<title>Sistem Informasi Penjualan Hardware Komputer</title>
</head>
<center> Berhasil Login, <a href="logout.php">Logout</a> </center>
<hr/>
<h1><center>Sistem Informasi Penjualan Hardware Komputer</center> </h1>
	<center><h3>EDIT DATA USER</h3></center>
	<hr>
	<table border=1 align='center'>
		<tr>
			<td width=150 align='center'> <a href='admin/kelola.php'> Kelola Akun </a> </td>
            <td width=150 align='center'> <a href='admin/profil.php'> Profil </a> </td>
		</tr>
	</table>
	<br/>
<body>
<?php 
	$id = $_GET['id'];
	$query = mysql_query(("select * from user where id_user='$id'")) or die(mysql_error());
	$data = mysql_fetch_array($query);
?>

<form name="update_data" action="admin/update_user.php" method="post">
<input type="hidden" name="id_user" value="<?php echo $id; ?>" />
<table border="0" align=center cellpadding="5" cellspacing="0">
    <tbody>
		<tr>
        	<td>Nama</td>
        	<td><input type="text" name="nama" maxlength="30" required="required" value="<?php echo $data['nama']; ?>"/></td>
        </tr>
    	<tr>
        	<td>Username</td>
        	<td><input type="text" name="username" maxlength="30" required="required" value="<?php echo $data['username']; ?>" /></td>
        </tr>
    	<tr>
        	<td>Password</td>
        	<td><input type="text" name="password" maxlength="30" required="required" value="<?php echo $data['password']; ?>"  /></td>
        </tr>
    	<tr>
        	<td>Telepon</td>
        	<td><input type="text" name="telepon" required="required" value="<?php echo $data['telepon']; ?>" /></td>
        </tr>
		<tr>
        	<td>Alamat</td>
        	<td><input type="text" name="alamat" required="required" value="<?php echo $data['alamat']; ?>" /></td>
        </tr>
		<tr>
        	<td>Email</td>
        	<td><input type="email" name="email" required="required" value="<?php echo $data['email']; ?>" /></td>
        </tr>
		<tr>
        	<td>Jabatan</td>
        	<td><input type="text" name="jabatan" required="required" value="<?php echo $data['jabatan']; ?>" /></td>
        </tr>
        <tr>
        	<td align="right" colspan="3"><input type="submit" name="submit" value="Simpan" /></td>
        </tr>
    </tbody>
</table>
</form>
<center>
<a href="profil.php">Lihat Data</a>
</center>
</body>
</html>