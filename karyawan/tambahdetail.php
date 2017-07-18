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

    $query2 = mysql_query("select * from detailtransaksi order by iddetail desc limit 1");
        
    if(mysql_num_rows($query2) == 0){
        $jmlNol2 = "0001";
    }
    else{
        $hasil2 = mysql_fetch_array($query2);
        $id2 = substr($hasil2['iddetail'],6);
        $tambah2 = $id2+1;
        $nol2 = strlen($id2) - strlen($tambah2);
        $jmlNol2 = "";
            
        if($nol2 < strlen($id2) && $nol2 >= 0){
            for($j=0;$j<$nol2;$j++){
                $jmlNol2 .= "0";
            }
        
            $jmlNol2 .= $tambah2;
        }        
    }
 
    $iddetailtemp = "D".$jmlNol2;
    $iddetail = $idtransaksi.$iddetailtemp;    
?>

<div id="content">  
    <h2 align="center">Input Data Detail</h2>  
    <FORM ACTION="prosestambahdetail.php" METHOD="POST" NAME="input" enctype="multipart/form-data">  
	        <table cellpadding="0" cellspacing="0" border="0" width="950">  
            <tr>  
                <td>ID Detail</td>  
                <td>: <input type="text" name="iddetail" size="30" maxlength="30" required readonly value="<?php echo $iddetail; ?>"></td>  
            </tr>  
            <tr>  
                <td>Nama Barang</td>  
                <td>: 
                    <select name="nmbrg" required>
                        <option selected disabled>PILIH BARANG</option>
                        <?php
                            include "../koneksi.php";
                            $brg = mysql_query('SELECT * FROM barang ORDER BY nmbrg ASC;');
                        ?>
                        <?php 
                            if(mysql_num_rows($brg)>0){ 
                        ?>                      
                        <?php
                            while($row=mysql_fetch_array($brg)){ 
                        ?>
                        <option><?php echo $row['nmbrg'] ?></option>
                        <?php } ?>
                        <?php } ?>
                    </select>
                </td>  
            </tr>  
            <tr>  
                <td>Merek</td>  
                <td>: 
                    <select name="merekbrg" required>
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
                    <select name="ktgbrg" required>
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
                <td>Harga</td>  
                <td>: <input type="number" name="hrgbrg" min="0" size="30" maxlength="30"  required placeholder="Masukkan harga"></td>  
            </tr>  
            <tr>  
                <td>Jumlah</td>  
                <td>: <input type="number" name="jmlbrg" min="0" size="30" maxlength="30"  required placeholder="Masukkan jumlah"></td>  
            </tr>   
            <tr>  
                <td>&nbsp;</td>  
                <td>&nbsp;&nbsp;<input type="submit" name="submit" value=" Simpan ">&nbsp;  
                <input type="reset" name="Reset" value=" reset ">&nbsp;  
                <a href="tambahtransaksi.php"><input type="button" name="" value=" Kembali "/></a></td>  
            </tr>  
        </table>  
    </form>  
</div>
