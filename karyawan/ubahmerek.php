<?php  
    include "../koneksi.php";  
    
    if (isset($_GET['idmerek'])) {  
        $idmerek = $_GET['idmerek'];  
    } else {  
        die ("Error. No idmerek Selected! ");      
    }

    $query = "SELECT * FROM merek WHERE idmerek='$idmerek'";  
    
    $sql = mysql_query ($query);  
    $hasil = mysql_fetch_array ($sql);  

    $idmerek = stripslashes ($hasil['idmerek']);  
    $nmmerek = stripslashes ($hasil['nmmerek']);  
?>

<div id="content">  
    <h2 align="center">Ubah Data Merek</h2>  
    <FORM ACTION="prosesubahmerek.php" METHOD="POST" NAME="ubah" enctype="multipart/form-data">  
        <table cellpadding="0" cellspacing="0" border="0" width="950">  
              
            <tr>  
                <td>Id Merek</td>  
                <td>: <input type="text" name="idmerek" size="30" maxlength="30" readonly value="<?php echo $idmerek; ?>"></td>  
            </tr>  
            <tr>  
                <td>Nama Merek</td>  
                <td>: <input type="text" name="nmmerek" size="30" maxlength="30" required value="<?php echo $nmmerek; ?>"></td>  
            </tr>  
            <tr>  
                <td>&nbsp;</td>  
                <td>&nbsp;&nbsp;  
                <input type="hidden" name="hidmerek" value="<?php echo $idmerek; ?>">  
                <input type="submit" name="submit" value=" Simpan ">&nbsp;  
                <input type="reset" name="reset" value=" Reset ">&nbsp;  
                <a href="indexmerek.php"><input type="button" name="" value=" Kembali "/></a></td>  
                <td>&nbsp;</td>  
            </tr>  
        </table>  
    </FORM>  
</div>

