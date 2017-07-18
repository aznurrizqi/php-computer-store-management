<?php  
    include "../koneksi.php";  
    
    $query = mysql_query("select * from transaksi order by idtransaksi desc limit 1");
        
    if(mysql_num_rows($query) == 0){
        $jmlNol = "0001";
    }
    else{
        $hasil = mysql_fetch_array($query);
        $id = substr($hasil['idtransaksi'],1);
        $tambah = $id+1;
        $nol = strlen($id) - strlen($tambah);
        $jmlNol = "";
            
        if($nol < strlen($id) && $nol >= 0){
            for($i=0;$i<$nol;$i++){
                $jmlNol .= "0";
            }
        
            $jmlNol .= $tambah;
        }        
    }
 
    $idtransaksi = "T".$jmlNol;
?>

<div id="content">  
    <h2 align="center">Input Data Transaksi</h2>  
    <FORM ACTION="prosestambahtransaksi.php" METHOD="POST" NAME="input" enctype="multipart/form-data">  
	        <table cellpadding="0" cellspacing="0" border="0" width="950">  
            <tr>  
                <td>ID Transaksi</td>  
                <td>: <input type="text" name="idtransaksi" size="30" maxlength="30" required readonly value="<?php echo $idtransaksi; ?>"></td>  
            </tr>  
            <tr>  
                <td>Tanggal Transaksi</td>  
                <td>: <input type="text" name="tgltransaksi" size="30" maxlength="30" required readonly value="<?php echo date("Y-m-d"); ?>"></td>  
            </tr>  
            <tr>  
                <td>Nama Karyawan</td>  
                <td>: <input type="text" name="nmkaryawan" min="0" size="30" maxlength="30"  required placeholder="Masukkan nama karyawan"></td>  
            </tr>  
            <tr>  
                <td>Nama Pelanggan</td>  
                <td>: 
                    <select name="nmpelanggan" required>
                        <option selected disabled>PILIH NAMA PELANGGAN</option>
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
        <!--<td width="10%">ID DETAIL</td>-->  
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
            <!--<td><?php //echo $iddetail; ?></td>-->  
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


                        <?php
                            include "../koneksi.php";
                            $total = mysql_query('SELECT * FROM detailtransaksi LIKE $idtransaksi% ORDER BY idetail ASC;');
                            if(mysql_num_rows($total)>0){ 
                                while($row=mysql_fetch_array($total)){ 
                                    $har = $row['hrgbrg'];
                                    $jum = $row['jmlbrg'];
                                    $tot = $har+$jum;
                                    echo $tot;
                                }
                            }
                        ?>

            <tr>  
                <td>Total Bayar</td>  
                <td>: <input type="number" name="totalbayar" min="0" size="40" maxlength="30" required placeholder="Masukkan total bayar"></td>  
            </tr>  
            <br/>
            <tr>  
                <td>&nbsp;</td>  
                <td>&nbsp;&nbsp;<input type="submit" name="submit" value=" Simpan ">&nbsp;  
                <input type="reset" name="Reset" value=" reset ">&nbsp;  
                <a href="indextransaksi.php"><input type="button" name="" value=" Kembali "/></a></td>  
                <a href="#"><button onClick="window.print();">Print</button></a>
            </tr>  
        </table>  
    </form>  
</div>




                         
