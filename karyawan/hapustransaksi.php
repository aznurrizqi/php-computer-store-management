<?php  
    include "../koneksi.php";  
  
    if (isset($_GET['idtransaksi'])) {
        $idtransaksi = $_GET['idtransaksi'];
    } else {  
        die ("Error. No idtransaksi Selected! ");      
    }
?>

<div id="content"> 
<?php
        if (!empty($idtransaksi) && $idtransaksi != "") {
            $query = "DELETE FROM transaksi WHERE idtransaksi='$idtransaksi'";
            $query2 = "DELETE FROM detailtransaksi WHERE iddetail LIKE '$idtransaksi%'";  
            $sql = mysql_query ($query);  
            $sql2 = mysql_query ($query2);  
            
            if ($sql) {  
                echo"<script>alert('Data Transaksi telah berhasil dihapus !',document.location.href='indextransaksi.php')</script>";      
            } else {  
                echo"<script>alert('Data Transaksi gagal dihapus !',document.location.href='indextransaksi.php')</script>";      
            }  

        } else {  
            die ("Access Denied");      
        }
?>  
</div>