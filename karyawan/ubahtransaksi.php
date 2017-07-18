<?php  
    include "../koneksi.php";  
    
    if (isset($_GET['idtransaksi'])) {  
        $idtransaksi = $_GET['idtransaksi'];  
    } else {  
        die ("Error. No idtransaksi Selected! ");      
    }

    $query = "SELECT * FROM transaksi WHERE idtransaksi='$idtransaksi'";  
    
    $sql = mysql_query ($query);  
    $hasil = mysql_fetch_array ($sql);  

    $idtransaksi = stripslashes ($hasil['idtransaksi']);  
    $tgltransaksi = $hasil['tgltransaksi'];  
    $totalbayar = stripslashes ($hasil['totalbayar']);  
    $nmkaryawan = stripslashes ($hasil['nmkaryawan']);  
    $nmpelanggan = stripslashes ($hasil['nmpelanggan']);  
?>

<div id="content">  
    <h2 align="center">Ubah Data Transaksi</h2>  
    <FORM ACTION="prosesubahtransaksi.php" METHOD="POST" NAME="ubah" enctype="multipart/form-data">  
        <table cellpadding="0" cellspacing="0" border="0" width="950">  
              
            <tr>  
                <td>Id Transaksi</td>  
                <td>: <input type="text" name="idtransaksi" size="30" maxlength="30" readonly value="<?php echo $idtransaksi; ?>"></td>  
            </tr>  
            <tr>  
                <td>Tanggal Transaksi</td>  
                <td>: <input type="text" name="tgltransaksi" size="30" maxlength="30" required value="<?php echo $tgltransaksi; ?>"></td>  
            </tr>  
            <!--<tr>  
                <td>Nama Karyawan</td>  
                <td>: 
                    <select name="nmpelanggan" required>
                        <option><?php /*echo $nmpelanggan; ?></option>
                        <?php
                            include "../koneksi.php";
                            $plg = mysql_query('SELECT * FROM pelanggan ORDER BY nmpelanggan ASC;');
                        ?>
                        <?php 
                            if(mysql_num_rows($plg)>0){ 
                        ?>                      
                        <?php
                            while($row=mysql_fetch_array($plg)){ 
                        ?>
                        <option><?php echo $row['nmpelanggan'] ?></option>
                        <?php } ?>
                        <?php } */?>
                    </select>
                </td>  
            </tr>-->
            <tr>  
                <td>Nama Pelanggan</td>  
                <td>: 
                    <select name="nmpelanggan" required>
                        <option><?php echo $nmpelanggan; ?></option>
                        <?php
                            include "../koneksi.php";
                            $plg = mysql_query('SELECT * FROM pelanggan ORDER BY nmpelanggan ASC;');
                        ?>
                        <?php 
                            if(mysql_num_rows($plg)>0){ 
                        ?>                      
                        <?php
                            while($row=mysql_fetch_array($plg)){ 
                        ?>
                        <option><?php echo $row['nmpelanggan'] ?></option>
                        <?php } ?>
                        <?php } ?>
                    </select>
                </td>  
            </tr>






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
    $query = "SELECT * FROM detailtransaksi WHERE iddetail LIKE '$idtransaksi%' ORDER BY iddetail";  
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








            <tr>  
                <td>Total Bayar</td>  
                <td>: <input type="number" name="totalbayar" min="0" size="30" maxlength="30" required value="<?php echo $totalbayar; ?>"></td>  
            </tr>  
            <br/>
            <tr>  
                <td>&nbsp;</td>  
                <td>&nbsp;&nbsp;  
                <input type="hidden" name="hidtransaksi" value="<?php echo $idtransaksi; ?>">  
                <input type="submit" name="submit" value=" Simpan ">&nbsp;  
                <input type="reset" name="reset" value=" Reset ">&nbsp;  
                <a href="indextransaksi.php"><input type="button" name="" value=" Kembali "/></a></td>  
                <a href="#"><button onClick="window.print();">Print</button></a>
                <td>&nbsp;</td>  
            </tr>  
        </table>  
    </FORM>  
</div>

