<?php 
include('koneksi.php');
include('cek.php');
?>

<html>
<center> Berhasil Login, <a href="logout.php">Logout</a> </center>
<hr>
<h1><center>Sistem Informasi Penjualan Hardware Komputer</center> </h1>
<hr>
	<table border=1 align='center'>
		<tr>
			<td width=150 align='center'> <a href='kelola.php'> Kelola Akun </a> </td>
            <td width=150 align='center'> <a href='profil.php'> Profil </a> </td>
		</tr>
	</table>
	<br/>
<?php 
	if (!empty($_GET['message']) && $_GET['message'] == 'success') {
		echo '<h3>Berhasil meng-update data!</h3>';
	} 
	else if (!empty($_GET['message']) && $_GET['message'] == 'delete') {
		echo '<h3>Berhasil menghapus data!</h3>';
	}
?>
<br/>
<center>
<table border="1" cellpadding="5" cellspacing="0">
	<thead>
    	<tr>
        	<td>id.</td>
        	<td>nama</td>
        	<td>username</td>
        	<td>password</td>
        	<td>email</td>
			<td>aksi</td>
        </tr>
    </thead>
    <tbody>
    <?php 
		$query = mysql_query("select * from admin");
		$no = 1;
		while ($data = mysql_fetch_array($query)) {
	?>
    	<tr>
        	<td><?php echo $no; ?></td>
        	<td><?php echo $data['nama']; ?></td>
        	<td><?php echo $data['username']; ?></td>
        	<td><?php echo $data['password']; ?></td>
        	<td><?php echo $data['email']; ?></td>
            <td>
            	<a href="edit.php?id=<?php echo $data['user_id']; ?>">Edit</a>
            </td>
        </tr>
    <?php 
		$no++;
	} 
	?>
    </tbody>
</table>
</center>
</body>
</html>