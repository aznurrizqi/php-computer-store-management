<?php  
    include "../koneksi.php";  
?>  
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

            <td>
            <a href="indextransaksi.php?page=ubah&idtransaksi=<?php echo $idtransaksi; ?>"><input type="button" name="" value=" Edit "/></a>  
            <a href="indextransaksi.php?page=hapus&idtransaksi=<?php echo $idtransaksi; ?>" onclick="return confirm('Anda yakin akan menghapus data transaksi <?php echo $idtransaksi; ?> ?')"><input type="button" name="" value="Hapus"/></a></td>  
        </tr>      
    <?php $no++; }?>  
    </table>  
</div>
