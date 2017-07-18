<?php  
    include "../koneksi.php";  
    
    $query = mysql_query("select * from barang order by idbrg desc limit 1");
        
    if(mysql_num_rows($query) == 0){
        $jmlNol = "0001";
    }
    else{
        $hasil = mysql_fetch_array($query);
        $id = substr($hasil['idbrg'],1);
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
 
    $idbrg = "B".$jmlNol;
?>

<div id="content">  
    <h2 align="center">Input Data Barang</h2>  
    <FORM ACTION="prosestambahbarang.php" METHOD="POST" NAME="input" enctype="multipart/form-data">  
	        <table cellpadding="0" cellspacing="0" border="0" width="950">  
            <tr>  
                <td>ID Barang</td>  
                <td>: <input type="text" name="idbrg" size="30" maxlength="30" required readonly value="<?php echo $idbrg; ?>"></td>  
            </tr>  
            <tr>  
                <td>Nama Barang</td>  
                <td>: <input type="text" name="nmbrg" size="30" maxlength="30" autofocus required placeholder="Masukkan nama"></td>  
            </tr>  
            <tr>  
                <td>Merek</td>  
                <td>: 
                    <select name="merek" required>
                        <option selected disabled>PILIH MEREK</option>
                        <?php
                            include "../koneksi.php";
                            $mrk = mysql_query('SELECT * FROM merek ORDER BY nmmerek ASC;');
                        ?>
                        <?php 
                            if(mysql_num_rows($mrk)>0){ 
                        ?>                      
                        <?php
                            while($row=mysql_fetch_array($mrk)){ 
                        ?>
                        <option><?php echo $row['nmmerek'] ?></option>
                        <?php } ?>
                        <?php } ?>
                    </select>
                </td>  
            </tr>  
            <tr>  
                <td>Kategori</td>  
                <td>: 
                    <select name="kategori" required>
                        <option selected disabled>PILIH KATEGORI</option>
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
                <td>Deskripsi</td>  
                <td>: <textarea name="deskripsi" rows="3" cols="43" required placeholder="Masukkan deskripsi"></textarea></td>  
            </tr>  
            <tr>  
                <td>Stok</td>  
                <td>: <input type="number" name="stok" min="0" size="30" maxlength="30"  required placeholder="Masukkan stok"></td>  
            </tr>   
            <tr>  
                <td>Harga</td>  
                <td>: <input type="number" name="hrg" min="0" size="30" maxlength="30"  required placeholder="Masukkan harga"></td>  
            </tr>  
            <tr>  
                <td>Foto</td>  
                <td>: <input type="file" name="foto"/></td>  
            </tr>  
            <tr>  
                <td>&nbsp;</td>  
                <td>&nbsp;&nbsp;<input type="submit" name="submit" value=" Simpan ">&nbsp;  
                <input type="reset" name="Reset" value=" reset ">&nbsp;  
                <a href="indexbarang.php"><input type="button" name="" value=" Kembali "/></a></td>  
            </tr>  
        </table>  
    </form>  
</div>
