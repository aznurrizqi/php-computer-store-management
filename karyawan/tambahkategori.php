<?php  
    include "../koneksi.php";  
    
    $query = mysql_query("select * from kategori order by idkategori desc limit 1");
        
    if(mysql_num_rows($query) == 0){
        $jmlNol = "0001";
    }
    else{
        $hasil = mysql_fetch_array($query);
        $id = substr($hasil['idkategori'],1);
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
 
    $idkategori = "K".$jmlNol;
?>

<div id="content">  
    <h2 align="center">Input Data Kategori</h2>  
    <FORM ACTION="prosestambahkategori.php" METHOD="POST" NAME="input" enctype="multipart/form-data">  
	        <table cellpadding="0" cellspacing="0" border="0" width="950">  
            <tr>  
                <td>ID Kategori</td>  
                <td>: <input type="text" name="idkategori" size="30" maxlength="30" required readonly value="<?php echo $idkategori; ?>"></td>  
            </tr>  
            <tr>  
                <td>Nama Kategori</td>  
                <td>: <input type="text" name="nmkategori" size="30" maxlength="30" autofocus required placeholder="Masukkan nama"></td>  
            </tr>  
                <td>&nbsp;</td>  
                <td>&nbsp;&nbsp;<input type="submit" name="submit" value=" Simpan ">&nbsp;  
                <input type="reset" name="Reset" value=" reset ">&nbsp;  
                <a href="indexkategori.php"><input type="button" name="" value=" Kembali "/></a></td>  
            </tr>  
        </table>  
    </form>  
</div>
