<?php  
    include "../koneksi.php";  
  
    if (isset($_GET['iddetail'])) {
        $iddetail = $_GET['iddetail'];
    } else {  
        die ("Error. No iddetail Selected! ");      
    }
?>

<div id="content"> 
<?php
        if (!empty($iddetail) && $iddetail != "") {
            $query = "DELETE FROM detailtransaksi WHERE iddetail='$iddetail'";  
            $sql = mysql_query ($query);  
            
            if ($sql) {  
                echo"<script>alert('Data Detail Transaksi telah berhasil dihapus !',document.location.href='tambahtransaksi.php')</script>";      
            } else {  
                echo"<script>alert('Data Detail Transaksi gagal dihapus !',document.location.href='tambahtransaksi.php')</script>";      
            }  

        } else {  
            die ("Access Denied");      
        }
?>  
</div>