<?php  
    include "../koneksi.php";  
    
    if (isset($_GET['idbrg'])) {  
        $idbrg = $_GET['idbrg'];  
    } else {  
        die ("Error. No idbrg Selected! ");      
    }

    $query = "SELECT * FROM barang WHERE idbrg='$idbrg'";  
    
    $sql = mysql_query ($query);  
    $hasil = mysql_fetch_array ($sql);  

    $idbrg = stripslashes ($hasil['idbrg']);  
    $nmbrg = stripslashes ($hasil['nmbrg']);  
    $merek = stripslashes ($hasil['merek']);  
    $deskripsi = stripslashes ($hasil['deskripsi']);  
    $kategori = stripslashes ($hasil['kategori']);  
    $stok = stripslashes ($hasil['stok']);  
    $hrg = stripslashes ($hasil['hrg']);  
    $foto = $hasil['foto'];
?>

<div id="content">  
    <h2 align="center">Ubah Data Barang</h2>  
    <FORM ACTION="prosesubahbarang.php" METHOD="POST" NAME="ubah" enctype="multipart/form-data">  
        <table cellpadding="0" cellspacing="0" border="0" width="950">  
              
            <tr>  
                <td width="271">Id Barang</td>  
                <td width="463">: <input type="text" name="idbrg" size="30" maxlength="30" readonly value="<?php echo $idbrg; ?>"></td>  
                <td width="216">Foto: <?php echo $foto; ?></td>  
            </tr>  
            <tr>  
                <td>Nama Barang</td>  
                <td>: <input type="text" name="nmbrg" size="30" maxlength="30" required value="<?php echo $nmbrg; ?>"></td>  
                <td rowspan="4"><?php echo "<img src='../gambar/$foto' width='180' height='180'/>"; ?></td>  
            </tr>  
            <tr>  
                <td>Merek</td>  
                <td>: 
                    <select name="merek" required>
                        <option><?php echo $merek; ?></option>
                        <?php
                            include "../koneksi.php";
                            $merek = mysql_query('SELECT * FROM merek ORDER BY nmmerek ASC;');
                        ?>
                        <?php 
                            if(mysql_num_rows($merek)>0){ 
                        ?>                      
                        <?php
                            while($row=mysql_fetch_array($merek)){ 
                        ?>
                        <option><?php echo $row['nmmerek'] ?></option>
                        <?php } ?>
                        <?php } ?>
                    </select>
                </td>  
            </tr>  
            <tr>  
                <td>Deskripsi</td>  
                <td>: <textarea name="deskripsi" rows="3" cols="43"><?php echo $deskripsi; ?></textarea></td>  
            </tr>  
            <tr>  
                <td>Kategori</td>  
                <td>: 
                    <select name="kategori" required>
                        <option><?php echo $kategori; ?></option>
                        <?php
                            include "../koneksi.php";
                            $ktg = mysql_query('SELECT * FROM kategori ORDER BY nmkategori ASC;');
                        ?>
                        <?php 
                            if(mysql_num_rows($ktg)>0){ 
                        ?>                      
                        <?php
                            while($row=mysql_fetch_array($ktg)){ 
                        ?>
                        <option><?php echo $row['nmkategori'] ?></option>
                        <?php } ?>
                        <?php } ?>
                    </select>
                </td>  
            </tr>  
            <tr>  
                <td>Stok</td>  
                <td>: <input type="number" name="stok" min="0"  size="30" maxlength="30" required value="<?php echo $stok; ?>"></td>  
            </tr>  
            <tr>  
                <td>Harga</td>  
                <td>: <input type="number" name="hrg" min="0" size="30" maxlength="30" required value="<?php echo $hrg; ?>"></td>  
            </tr>  
            <tr>  
                <td>Foto</td>  
                <td>: <input type="file" name="foto"/></td>
                <td>&nbsp;</td>  
            </tr>  
            <tr>  
                <td>&nbsp;</td>  
                <td>&nbsp;&nbsp;  
                <input type="hidden" name="hidbrg" value="<?php echo $idbrg; ?>">  
                <input type="submit" name="submit" value=" Simpan ">&nbsp;  
                <input type="reset" name="reset" value=" Reset ">&nbsp;  
                <a href="indexbarang.php"><input type="button" name="" value=" Kembali "/></a></td>  
                <td>&nbsp;</td>  
            </tr>  
        </table>  
    </FORM>  
</div>

