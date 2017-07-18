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
    <h2 align="center">Data merek</h2>  

    <form name="formcari" method="post" action="carimerek.php">
    <input type="text" name="cari" placeholder="Masukkan merek">
    <input type="SUBMIT" name="SUBMIT" id="SUBMIT" value="Cari"> 
    </form>
    <br/>

    <a href="indexmerek.php?page=tambah"><input type="button" name="" value="Input Data Merek"/></a>   
    <table width="35%" id="tabel">  

    <tr bgcolor="#efefef" align="center">  
        <td width="3%">NO</td>  
        <td width="10%">ID MEREK</td>  
        <td width="17%">NAMA MEREK</td>  
        <td width="5%">ACTION</td>  
    </tr>  

    <?php  
    $no = 1;  
    $cari = strtoupper(addslashes (strip_tags ($_POST['cari'])));  
    $query = "SELECT * FROM merek WHERE nmmerek LIKE '%$cari%' ORDER BY idmerek";  
    //$query = "SELECT * FROM merek ORDER BY idmerek";  
    $sql = mysql_query ($query);  
    while ($hasil = mysql_fetch_array ($sql)) {  
        $idmerek = stripslashes ($hasil['idmerek']);  
        $nmmerek = stripslashes ($hasil['nmmerek']);  
        $warna = ($no%2==1)?"#ffffff":"#efefef";  
    ?>  
        <tr bgcolor="<?php echo $warna; ?>" align="center">  
            <td><?php echo $no; ?></td>  
            <td><?php echo $idmerek; ?></td>  
            <td><?php echo $nmmerek; ?></td>  
            <td>
            <a href="indexmerek.php?page=ubah&idmerek=<?php echo $idmerek; ?>"><input type="button" name="" value=" Edit "/></a>  
            <a href="indexmerek.php?page=hapus&idmerek=<?php echo $idmerek; ?>" onclick="return confirm('Anda yakin akan menghapus data merek <?php echo $nmmerek; ?> ?')"><input type="button" name="" value="Hapus"/></a></td>  
        </tr>      
    <?php $no++; }?>  
    </table>  
</div>

        </div>  
    </body>  
</html>
