<?php  
    include "../koneksi.php";  
  
    if (isset($_GET['idkategori'])) {
        $idkategori = $_GET['idkategori'];
    } else {  
        die ("Error. No idkategori Selected! ");      
    }
?>

<div id="content"> 
<?php
        if (!empty($idkategori) && $idkategori != "") {
            $query = "DELETE FROM kategori WHERE idkategori='$idkategori'";  
            $sql = mysql_query ($query);  
            
            if ($sql) {  
                echo"<script>alert('Data Kategori telah berhasil dihapus !',document.location.href='indexkategori.php')</script>";      
            } else {  
                echo"<script>alert('Data Kategori gagal dihapus !',document.location.href='indexkategori.php')</script>";      
            }  

        } else {  
            die ("Access Denied");      
        }
?>  
</div>

