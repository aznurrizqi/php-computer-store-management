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
    <h2 align="center">Data Barang</h2>  
    
    <form name="formcari" method="post" action="caribarang.php">
    <input type="text" name="cari" placeholder="Masukkan nama, merek, atau kategori">
    <input type="SUBMIT" name="SUBMIT" id="SUBMIT" value="Cari"> 
    <br/>

    <a href="indexbarang.php?page=tambah"><input type="button" name="" value="Input Data Barang"/></a>   
    <table width="100%" id="tabel">  

    <tr bgcolor="#efefef" align="center">  
        <td width="3%">NO</td>  
        <td width="10%">ID BARANG</td>  
        <td width="17%">NAMA BARANG</td>  
        <td width="10%">MEREK</td>  
        <td width="20%">DESKRIPSI</td>  
        <td width="10%">KATEGORI</td>  
        <td width="10%">STOK</td>  
        <td width="10%">HARGA</td>  
        <td width="5%">FOTO</td>  
        <td width="5%">ACTION</td>  
    </tr>  

    <?php  
    $no = 1;  
    $cari = strtoupper(addslashes (strip_tags ($_POST['cari'])));  
    $query = "SELECT * FROM barang WHERE nmbrg OR merek OR kategori LIKE '%$cari%' ORDER BY idbrg";  
    $sql = mysql_query ($query);  
    while ($hasil = mysql_fetch_array ($sql)) {  
        $idbrg = stripslashes ($hasil['idbrg']);  
        $nmbrg = stripslashes ($hasil['nmbrg']);  
        $merek = stripslashes ($hasil['merek']);  
        $deskripsi = stripslashes ($hasil['deskripsi']);  
        $kategori = stripslashes ($hasil['kategori']);  
        $stok = stripslashes ($hasil['stok']);  
        $hrg = stripslashes ($hasil['hrg']);  
        $foto = $hasil['foto'];  
        $warna = ($no%2==1)?"#ffffff":"#efefef";  
    ?>  
        <tr bgcolor="<?php echo $warna; ?>" align="center">  
            <td><?php echo $no; ?></td>  
            <td><?php echo $idbrg; ?></td>  
            <td><?php echo $nmbrg; ?></td>  
            <td><?php echo $merek; ?></td>  
            <td><?php echo $deskripsi; ?></td>  
            <td><?php echo $kategori; ?></td>  
            <td><?php echo $stok; ?></td>  
            <td><?php echo $hrg; ?></td>  
            <td><?php echo "<img src='../gambar/$foto' width='50' height='50'/>"; ?></td>  
            <td>
            <a href="indexbarang.php?page=ubah&idbrg=<?php echo $idbrg; ?>"><input type="button" name="" value=" Edit "/></a>  
            <a href="indexbarang.php?page=hapus&idbrg=<?php echo $idbrg; ?>" onclick="return confirm('Anda yakin akan menghapus data barang <?php echo $nmbrg; ?> ?')"><input type="button" name="" value="Hapus"/></a></td>  
        </tr>      
    <?php $no++; }?>  
    </table>  
</div>

        </div>  
    </body>  
</html>
