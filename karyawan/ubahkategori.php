<?php  
    include "../koneksi.php";  
    
    if (isset($_GET['idkategori'])) {  
        $idkategori = $_GET['idkategori'];  
    } else {  
        die ("Error. No idkategori Selected! ");      
    }

    $query = "SELECT * FROM kategori WHERE idkategori='$idkategori'";  
    
    $sql = mysql_query ($query);  
    $hasil = mysql_fetch_array ($sql);  

    $idkategori = stripslashes ($hasil['idkategori']);  
    $nmkategori = stripslashes ($hasil['nmkategori']);  
?>

<div id="content">  
    <h2 align="center">Ubah Data Kategori</h2>  
    <FORM ACTION="prosesubahkategori.php" METHOD="POST" NAME="ubah" enctype="multipart/form-data">  
        <table cellpadding="0" cellspacing="0" border="0" width="950">  
              
            <tr>  
                <td>Id Kategori</td>  
                <td>: <input type="text" name="idkategori" size="30" maxlength="30" readonly value="<?php echo $idkategori; ?>"></td>  
            </tr>  
            <tr>  
                <td>Nama Kategori</td>  
                <td>: <input type="text" name="nmkategori" size="30" maxlength="30" required value="<?php echo $nmkategori; ?>"></td>  
            </tr>  
            <tr>  
                <td>&nbsp;</td>  
                <td>&nbsp;&nbsp;  
                <input type="hidden" name="hidkategori" value="<?php echo $idkategori; ?>">  
                <input type="submit" name="submit" value=" Simpan ">&nbsp;  
                <input type="reset" name="reset" value=" Reset ">&nbsp;  
                <a href="indexkategori.php"><input type="button" name="" value=" Kembali "/></a></td>  
                <td>&nbsp;</td>  
            </tr>  
        </table>  
    </FORM>  
</div>

