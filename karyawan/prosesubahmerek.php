<?php  
    include "../koneksi.php";  
  
    $idmerek = $_POST['hidmerek'];  
    $nmmerek = strtoupper(addslashes (strip_tags ($_POST['nmmerek'])));  
    
    $query = "UPDATE merek SET nmmerek='$nmmerek' WHERE idmerek='$idmerek'";  
    $sql = mysql_query ($query) or die (mysql_error());  
    
    if ($sql) {  
            echo"<script>alert('Data Merek telah berhasil diedit !',document.location.href='indexmerek.php')</script>";  
    } else {  
            echo"<script>alert('Data Merek gagal diedit !',document.location.href='indexmerek.php')</script>";  
    }  
?>
