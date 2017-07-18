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
    <h2 align="center">Data Transaksi</h2>  
    
    <form name="formcari" method="post" action="caritransaksi.php">
    <input type="text" name="cari" placeholder="Masukkan idtransaksi, tanggal, atau nmpelanggan">
    <input type="SUBMIT" name="SUBMIT" id="SUBMIT" value="Cari"> 
    </form>
    <br/>

    <a href="indextransaksi.php?page=tambah"><input type="button" name="" value="Input Data Transaksi"/></a>   
    <table width="100%" id="tabel">  

    <tr bgcolor="#efefef" align="center">  
        <td width="3%">NO</td>  
        <td width="10%">ID TRANSAKSI</td>  
        <td width="30%">TANGGAL TRANSAKSI</td>  
        <td width="10%">TOTAL BAYAR</td>  
        <td width="20%">NAMA KARYAWAN</td>  
        <td width="10%">NAMA PELANGGAN</td>  
        <td width="5%">ACTION</td>  
    </tr>  

    <?php  
    $no = 1;  
    $cari = strtoupper(addslashes (strip_tags ($_POST['cari'])));  
    $query = "SELECT * FROM transaksi WHERE idtransaksi OR tgltransaksi OR nmpelanggan LIKE '%$cari%' ORDER BY idtransaksi";  
    //$query = "SELECT * FROM transaksi ORDER BY idtransaksi";  
    $sql = mysql_query ($query);  
    while ($hasil = mysql_fetch_array ($sql)) {  
        $idtransaksi = stripslashes ($hasil['idtransaksi']);  
        $tgltransaksi = $hasil['tgltransaksi'];
        $totalbayar = stripslashes ($hasil['totalbayar']);  
        $nmkaryawan = stripslashes ($hasil['nmkaryawan']);  
        $nmpelanggan = stripslashes ($hasil['nmpelanggan']);  
        $warna = ($no%2==1)?"#ffffff":"#efefef";  
    ?>  
        <tr bgcolor="<?php echo $warna; ?>" align="center">  
            <td><?php echo $no; ?></td>  
            <td><?php echo $idtransaksi; ?></td>  
            <td><?php echo $tgltransaksi; ?></td>  
            <td><?php echo $totalbayar; ?></td>  
            <td><?php echo $nmkaryawan; ?></td>  
            <td><?php echo $nmpelanggan; ?></td>  

            <td>
            <a href="indextransaksi.php?page=ubah&idtransaksi=<?php echo $idtransaksi; ?>"><input type="button" name="" value=" Edit "/></a>  
            <a href="indextransaksi.php?page=hapus&idtransaksi=<?php echo $idtransaksi; ?>" onclick="return confirm('Anda yakin akan menghapus data transaksi <?php echo $idtransaksi; ?> ?')"><input type="button" name="" value="Hapus"/></a></td>  
        </tr>      
    <?php $no++; }?>  
    </table>  
</div>

        </div>  
    </body>  
</html>
