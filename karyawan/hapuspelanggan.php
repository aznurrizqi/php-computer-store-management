<?php  
    include "../koneksi.php";  
  
    if (isset($_GET['idpelanggan'])) {
        $idpelanggan = $_GET['idpelanggan'];
    } else {  
        die ("Error. No idpelanggan Selected! ");      
    }
?>

<div id="content"> 
<?php
        if (!empty($idpelanggan) && $idpelanggan != "") {
            $query = "DELETE FROM pelanggan WHERE idpelanggan='$idpelanggan'";  
            $sql = mysql_query ($query);  
            
            if ($sql) {  
                echo"<script>alert('Data Pelanggan telah berhasil dihapus !',document.location.href='indexpelanggan.php')</script>";      
            } else {  
                echo"<script>alert('Data Pelanggan gagal dihapus !',document.location.href='indexpelanggan.php')</script>";      
            }          
        } else {  
            die ("Access Denied");      
        }
?>  
</div>
