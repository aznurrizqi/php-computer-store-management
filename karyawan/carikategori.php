<?php  
    include "../koneksi.php";  
?>  
<html>  
    <head>  
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />  
        <title>Sistem Informasi Penjualan Hardware Komputer</title>  
        <link href="style.css" rel="stylesheet" type="text/css" />  
    </head>  
    <body>  
        <div id="main_container">  
            <div id="header">  
            <center> Berhasil Login, <a href="../logout.php">Logout</a> </center>
            <h1 align="center">Sistem Informasi Penjualan Hardware Komputer</h1>  
            </div>  
            <div id="navigation">
                <table width="90%" border="1" align="center" id="menu">
                <tr border="1" align="center">  
                    <td width="15%"><a href="indexbarang.php">DATA BARANG</a></td>  
                    <td width="15%"><a href="indexkategori.php">DATA KATEGORI</a></td>  
                    <td width="15%"><a href="indexmerek.php">DATA MEREK</a></td>  
                    <td width="15%"><a href="indexpelanggan.php">DATA PELANGGAN</a></td>  
                    <td width="15%"><a href="indextransaksi.php">DATA TRANSAKSI</a></td>  
                    <td width="15%">PROFIL</td>  
                </tr>
                </table>  
                <br/>
            </div>  

<div id="content">  
    <h2 align="center">Data Kategori</h2>  
    
    <form name="formcari" method="post" action="carikategori.php">
    <input type="text" name="cari" placeholder="Masukkan kategori">
    <input type="SUBMIT" name="SUBMIT" id="SUBMIT" value="Cari"> 
    <br/>
    <br/>

    <a href="indexkategori.php?page=tambah"><input type="button" name="" value="Input Data Kategori"/></a>   
    <table width="35%" id="tabel">  

    <tr bgcolor="#efefef" align="center">  
        <td width="3%">NO</td>  
        <td width="10%">ID KATEGORI</td>  
        <td width="17%">NAMA KATEGORI</td>  
        <td width="5%">ACTION</td>  
    </tr>  

    <?php  
    $no = 1;  
    $cari = strtoupper(addslashes (strip_tags ($_POST['cari'])));  
    $query = "SELECT * FROM kategori WHERE nmkategori LIKE '%$cari%' ORDER BY idkategori";  
    //$query = "SELECT * FROM kategori ORDER BY idkategori";  
    $sql = mysql_query ($query);  
    while ($hasil = mysql_fetch_array ($sql)) {  
        $idkategori = stripslashes ($hasil['idkategori']);  
        $nmkategori = stripslashes ($hasil['nmkategori']);  
        $warna = ($no%2==1)?"#ffffff":"#efefef";  
    ?>  
        <tr bgcolor="<?php echo $warna; ?>" align="center">  
            <td><?php echo $no; ?></td>  
            <td><?php echo $idkategori; ?></td>  
            <td><?php echo $nmkategori; ?></td>  
            <td>
            <a href="indexkategori.php?page=ubah&idkategori=<?php echo $idkategori; ?>"><input type="button" name="" value=" Edit "/></a>  
            <a href="indexkategori.php?page=hapus&idkategori=<?php echo $idkategori; ?>" onclick="return confirm('Anda yakin akan menghapus data kategori <?php echo $nmkategori; ?> ?')"><input type="button" name="" value="Hapus"/></a></td>  
        </tr>      
    <?php $no++; }?>  
    </table>  
</div>

        </div>  
    </body>  
</html>
