<?php  
    include "../koneksi.php";  
    
    $query = mysql_query("select * from pelanggan order by idpelanggan desc limit 1");
        
    if(mysql_num_rows($query) == 0){
        $jmlNol = "0001";
    }
    else{
        $hasil = mysql_fetch_array($query);
        $id = substr($hasil['idpelanggan'],1);
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
 
    $idpelanggan = "P".$jmlNol;
?>

<div id="content">  
    <h2 align="center">Input Data Pelanggan</h2>  
    <FORM ACTION="prosestambahpelanggan.php" METHOD="POST" NAME="input" enctype="multipart/form-data">  
	        <table cellpadding="0" cellspacing="0" border="0" width="950">  
            <tr>  
                <td>ID Pelanggan</td>  
                <td>: <input type="text" name="idpelanggan" size="30" maxlength="30" required readonly value="<?php echo $idpelanggan; ?>"></td>  
            </tr>  
            <tr>  
                <td>Nama Pelanggan</td>  
                <td>: <input type="text" name="nmpelanggan" size="30" maxlength="30" autofocus required placeholder="Masukkan nama"></td>  
            </tr>  
            <tr>  
                <td>Nomor Telpon</td>  
                <td>: <input type="text" name="telp" size="30" maxlength="30"  required placeholder="Masukkan nomor telpon"></td>  
            </tr>  
            <tr>  
                <td>Alamat</td>  
                <td>: <textarea name="alamat" rows="3" cols="43" required placeholder="Masukkan alamat"></textarea></td>  
            </tr>  
            <tr>  
                <td>Email</td>  
                <td>: <input type="text" name="email" size="30" maxlength="30"  required placeholder="Masukkan email"></td>  
            </tr>  
            <tr>  
                <td>&nbsp;</td>  
                <td>&nbsp;&nbsp;<input type="submit" name="submit" value=" Simpan ">&nbsp;  
                <input type="reset" name="Reset" value=" reset ">&nbsp;  
                <a href="indexpelanggan.php"><input type="button" name="" value=" Kembali "/></a></td>  
            </tr>  
        </table>  
    </form>  
</div>
