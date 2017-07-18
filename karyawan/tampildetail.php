<?php  
    include "../koneksi.php";  
?>  
    <table width="100%" id="tabel">  

    <tr bgcolor="#efefef" align="center">  
        <td width="3%">NO</td>  
        <td width="10%">ID DETAIL</td>  
        <td width="17%">NAMA BARANG</td>  
        <td width="10%">MEREK BARANG</td>  
        <td width="20%">KATEGORI BARANG</td>  
        <td width="10%">HARGA BARANG</td>  
        <td width="10%">JUMLAH BARANG</td>  
        <td width="5%">ACTION</td>  
    </tr>  

    <?php  
    $no = 1;  
    $query = "SELECT * FROM detailtransaksi ORDER BY iddetail";  
    $sql = mysql_query ($query);  
    while ($hasil = mysql_fetch_array ($sql)) {  
        $iddetail = stripslashes ($hasil['iddetail']);  
        $nmbrg = stripslashes ($hasil['nmbrg']);  
        $merekbrg = stripslashes ($hasil['merekbrg']);  
        $ktgbrg = stripslashes ($hasil['ktgbrg']);  
        $hrgbrg = stripslashes ($hasil['hrgbrg']);  
        $jmlbrg = stripslashes ($hasil['jmlbrg']);  
        $warna = ($no%2==1)?"#ffffff":"#efefef";  
    ?>  
        <tr bgcolor="<?php echo $warna; ?>" align="center">  
            <td><?php echo $no; ?></td>  
            <td><?php echo $iddetail; ?></td>  
            <td><?php echo $nmbrg; ?></td>  
            <td><?php echo $merekbrg; ?></td>  
            <td><?php echo $ktgbrg; ?></td>  
            <td><?php echo $hrgbrg; ?></td>  
            <td><?php echo $jmlbrg; ?></td>  

            <td>
            <a href="ubahdetail.php?iddetail=<?php echo $iddetail; ?>"><input type="button" name="" value=" Edit "/></a>  
            <a href="hapusbarang.php?&iddetail=<?php echo $iddetail; ?>" onclick="return confirm('Anda yakin akan menghapus data detail <?php echo $iddetail; ?> ?')"><input type="button" name="" value="Hapus"/></a></td>  
        </tr>      
    <?php $no++; }?>  
    <a href="tambahdetail.php"><input type="button" name="" value="Input Data Detail"/></a>   
    </table>  
