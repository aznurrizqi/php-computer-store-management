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
                    <td width="15%"><a href="laporanbarang.php">LAPORAN BARANG</a></td>  
                    <td width="15%"><a href="laporanpelanggan.php">LAPORAN PELANGGAN</a></td>  
                    <td width="15%"><a href="laporantransaksi.php">LAPORAN TRANSAKSI</a></td>  
                    <td width="15%"><a href="#">PROFIL</a></td>  
                </tr>
                </table>  
                <br/>
            </div>  
<div id="content">  
    <h2 align="center">Data Transaksi</h2>  
    <table width="100%" id="tabel">  

    <tr bgcolor="#efefef" align="center">  
        <td width="3%">NO</td>  
        <td width="10%">ID TRANSAKSI</td>  
        <td width="30%">TANGGAL TRANSAKSI</td>  
        <td width="10%">TOTAL BAYAR</td>  
        <td width="20%">NAMA KARYAWAN</td>  
        <td width="10%">NAMA PELANGGAN</td>  
    </tr>  

    <?php  
    $no = 1;  
    $query = "SELECT * FROM transaksi ORDER BY idtransaksi";  
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
        </tr>      
    <?php $no++; }?>  
    </table>  
    <br/>
    <a href="#"><button onClick="window.print();">Print</button></a>
</div>
        </div>  
    </body>  
</html>
