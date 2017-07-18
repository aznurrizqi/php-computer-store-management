<?php  
    include "../koneksi.php";  
    
    if (isset($_GET['idpelanggan'])) {  
        $idpelanggan = $_GET['idpelanggan'];  
    } else {  
        die ("Error. No idpelanggan Selected! ");      
    }

    $query = "SELECT * FROM pelanggan WHERE idpelanggan='$idpelanggan'";  
    
    $sql = mysql_query ($query);  
    $hasil = mysql_fetch_array ($sql);  

    $idpelanggan = stripslashes ($hasil['idpelanggan']);  
    $nmpelanggan = stripslashes ($hasil['nmpelanggan']);  
    $telp = stripslashes ($hasil['telp']);  
    $alamat = stripslashes ($hasil['alamat']);  
    $email = stripslashes ($hasil['email']);  
    /*$stok = stripslashes ($hasil['stok']);  
    $hrg = stripslashes ($hasil['hrg']);  
    $foto = $hasil['foto'];*/
?>

<div id="content">  
    <h2 align="center">Ubah Data Pelanggan</h2>  
    <FORM ACTION="prosesubahpelanggan.php" METHOD="POST" NAME="ubah" enctype="multipart/form-data">  
        <table cellpadding="0" cellspacing="0" border="0" width="950">  
              
            <tr>  
                <td>Id Pelanggan</td>  
                <td>: <input type="text" name="idpelanggan" size="30" maxlength="30" readonly value="<?php echo $idpelanggan; ?>"></td>  
            </tr>  
            <tr>  
                <td>Nama Pelanggan</td>  
                <td>: <input type="text" name="nmpelanggan" size="30" maxlength="30" required value="<?php echo $nmpelanggan; ?>"></td>  
            </tr>  
            <tr>  
                <td>Nomor Telpon</td>  
                <td>: <input type="text" name="telp" size="30" maxlength="30" required value="<?php echo $telp; ?>"></td>  
            </tr>  
            <tr>  
                <td>Alamat</td>  
                <td>: <textarea name="alamat" rows="3" cols="43"><?php echo $alamat; ?></textarea></td>  
            </tr>  
            <tr>  
                <td>Email</td>  
                <td>: <input type="text" name="email" size="30" maxlength="30" required value="<?php echo $email; ?>"></td>  
            </tr>  
            <!--<tr>  
                <td>Foto</td>  
                <td>: <input type="file" name="foto"/></td>
                <td>&nbsp;</td>  
            </tr>-->  
            <tr>  
                <td>&nbsp;</td>  
                <td>&nbsp;&nbsp;  
                <input type="hidden" name="hidpelanggan" value="<?php echo $idpelanggan; ?>">  
                <input type="submit" name="submit" value=" Simpan ">&nbsp;  
                <input type="reset" name="reset" value=" Reset ">&nbsp;  
                <a href="indexpelanggan.php"><input type="button" name="" value=" Kembali "/></a></td>  
                <td>&nbsp;</td>  
            </tr>  
        </table>  
    </FORM>  
</div>

