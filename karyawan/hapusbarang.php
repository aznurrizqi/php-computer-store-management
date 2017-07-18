<?php  
    include "../koneksi.php";  
  
    if (isset($_GET['idbrg'])) {
        $idbrg = $_GET['idbrg'];
    } else {  
        die ("Error. No idbrg Selected! ");      
    }
?>

<div id="content"> 
<?php
        if (!empty($idbrg) && $idbrg != "") {
            $query = "DELETE FROM barang WHERE idbrg='$idbrg'";  
            $sql = mysql_query ($query);  
            
            if ($sql) {  
                echo"<script>alert('Data Barang telah berhasil dihapus !',document.location.href='indexbarang.php')</script>";      
            } else {  
                echo"<script>alert('Data Barang gagal dihapus !',document.location.href='indexbarang.php')</script>";      
            }  

        } else {  
            die ("Access Denied");      
        }
?>  
</div>