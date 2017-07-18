<?php  
    include "../koneksi.php";  
    
    if (isset($_GET['iddetail'])) {  
        $iddetail = $_GET['iddetail'];  
    } else {  
        die ("Error. No iddetail Selected! ");      
    }

    $query = "SELECT * FROM detailtransaksi WHERE iddetail='$iddetail'";  
    
    $sql = mysql_query ($query);  
    $hasil = mysql_fetch_array ($sql);  

    $iddetail = stripslashes ($hasil['iddetail']);  
    $nmbrg = stripslashes ($hasil['nmbrg']);  
    $merekbrg = stripslashes ($hasil['merekbrg']);  
    $ktgbrg = stripslashes ($hasil['ktgbrg']);  
    $hrgbrg = stripslashes ($hasil['hrgbrg']);  
    $jmlbrg = stripslashes ($hasil['jmlbrg']);  
?>

<div id="content">  
    <h2 align="center">Ubah Data Detail Transaksi</h2>  
    <FORM ACTION="prosesubahdetail.php" METHOD="POST" NAME="ubah" enctype="multipart/form-data">  
        <table cellpadding="0" cellspacing="0" border="0" width="950">  
              
            <tr>  
                <td>Id Detail</td>  
                <td>: <input type="text" name="iddetail" size="30" maxlength="30" readonly value="<?php echo $iddetail; ?>"></td>  
            </tr>  
            <tr>  
                <td>Nama Barang</td>  
                <td>: 
                    <select name="nmbrg" required>
                        <option selected disabled>PILIH BARANG</option>
                        <?php
                            include "../koneksi.php";
                            $nmbrg = mysql_query('SELECT * FROM barang ORDER BY nmbrg ASC;');
                        ?>
                        <?php 
                            if(mysql_num_rows($nmbrg)>0){ 
                        ?>                      
                        <?php
                            while($row=mysql_fetch_array($nmbrg)){ 
                        ?>
                        <option><?php echo $row['nmbrg'] ?></option>
                        <?php } ?>
                        <?php } ?>
                    </select>
                </td>  
            </tr>  
            <tr>  
                <td>Merek Barang</td>  
                <td>: 
                    <select name="merekbrg" required>
                        <option><?php echo $merekbrg; ?></option>
                        <?php
                            include "../koneksi.php";
                            $merekbrg = mysql_query('SELECT * FROM merek ORDER BY nmmerek ASC;');
                        ?>
                        <?php 
                            if(mysql_num_rows($merekbrg)>0){ 
                        ?>                      
                        <?php
                            while($row=mysql_fetch_array($merekbrg)){ 
                        ?>
                        <option><?php echo $row['nmmerek'] ?></option>
                        <?php } ?>
                        <?php } ?>
                    </select>
                </td>  
            </tr>  
            <tr>  
                <td>Kategori Barang</td>  
                <td>: 
                    <select name="ktgbrg" required>
                        <option><?php echo $ktgbrg; ?></option>
                        <?php
                            include "../koneksi.php";
                            $ktgbrg = mysql_query('SELECT * FROM kategori ORDER BY nmkategori ASC;');
                        ?>
                        <?php 
                            if(mysql_num_rows($ktgbrg)>0){ 
                        ?>                      
                        <?php
                            while($row=mysql_fetch_array($ktgbrg)){ 
                        ?>
                        <option><?php echo $row['nmkategori'] ?></option>
                        <?php } ?>
                        <?php } ?>
                    </select>
                </td>  
            </tr>  
            <tr>  
                <td>Harga Barang</td>  
                <td>: <input type="number" name="hrgbrg" min="0" size="30" maxlength="30" required value="<?php echo $hrgbrg; ?>"></td>  
            </tr>  
            <tr>  
                <td>Jumlah Barang</td>  
                <td>: <input type="number" name="jmlbrg" min="0"  size="30" maxlength="30" required value="<?php echo $jmlbrg; ?>"></td>  
            </tr>  
            <tr>  
                <td>&nbsp;</td>  
                <td>&nbsp;&nbsp;  
                <input type="hidden" name="hiddetail" value="<?php echo $iddetail; ?>">  
                <input type="submit" name="submit" value=" Simpan ">&nbsp;  
                <input type="reset" name="reset" value=" Reset ">&nbsp;  
                <a href="tambahtransaksi.php"><input type="button" name="" value=" Kembali "/></a></td>  
                <td>&nbsp;</td>  
            </tr>  
        </table>  
    </FORM>  
</div>

