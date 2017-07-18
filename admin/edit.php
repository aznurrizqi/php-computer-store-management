<?php 
//session_start();

	include('koneksi.php');
	include('cek.php');
?>

<html>
<head> 
<center> Berhasil Login, <a href="logout.php">Logout</a> </center>
<hr/>
	<title>Sistem Informasi Penjualan Hardware Komputer</title>
</head>
<h1><center>Sistem Informasi Penjualan Hardware Komputer</center> </h1>
	<center><h3>EDIT DATA ADMIN</h3></center>
	<hr>
	<table border=1 align='center'>
		<tr>
			<td width=150 align='center'> <a href='kelola.php'> Kelola Akun </a> </td>
            <td width=150 align='center'> <a href='profil.php'> Profil </a> </td>
		</tr>
	</table>
	<br/>
<body>

<?php 
	$id = $_GET['id'];
	$query = mysql_query("select * from admin where user_id='$id'") or die(mysql_error());
	$data = mysql_fetch_array($query);
?>

<form name="update_data" action="update.php" method="post">
<input type="hidden" name="user_id" value="<?php echo $id; ?>" />
<table align = center border="1" cellpadding="5" cellspacing="0">
    <tbody>
		<tr>
        	<td>Nama</td>
        	<td><input type="text" name="nama" maxlength="30" required="required" value="<?php echo $data['nama']; ?>" readonly /></td>
        </tr>
    	<tr>
        	<td>Username</td>
        	<td><input type="text" name="username" maxlength="30" required="required" value="<?php echo $data['username']; ?>" /></td>
        </tr>
    	<tr>
        	<td>Password</td>
        	<td><input type="text" name="password" maxlength="30" required="required" value="<?php echo $data['password']; ?>" /></td>
        </tr>
    	<tr>
        	<td>Email</td>
        	<td><input type="text" name="email" required="required" value="<?php echo $data['email']; ?>"  readonly  /></td>
        </tr>
        <tr>
        	<td align="center" colspan="2"><input type="submit" name="submit" value="Simpan" /></td>
        </tr>
    </tbody>
</table>
</form>
<center>
<a href="profil.php">Lihat Data</a>
</center>
</body>
</html>