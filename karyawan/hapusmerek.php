<?php  
    include "../koneksi.php";  
  
    if (isset($_GET['idmerek'])) {
        $idmerek = $_GET['idmerek'];
    } else {  
        die ("Error. No idmerek Selected! ");      
    }
?>

<div id="content"> 
<?php
        if (!empty($idmerek) && $idmerek != "") {
            $query = "DELETE FROM merek WHERE idmerek='$idmerek'";  
            $sql = mysql_query ($query);  
            
            if ($sql) {  
                echo"<script>alert('Data Merek telah berhasil dihapus !',document.location.href='indexmerek.php')</script>";      
            } else {  
                echo"<script>alert('Data Merek gagal dihapus !',document.location.href='indexmerek.php')</script>";      
            }  

        } else {  
            die ("Access Denied");      
        }
?>  
</div>

