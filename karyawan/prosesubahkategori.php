<?php  
    include "../koneksi.php";  
  
    $idkategori = $_POST['hidkategori'];  
    $nmkategori = strtoupper(addslashes (strip_tags ($_POST['nmkategori'])));  
    
    $query = "UPDATE kategori SET nmkategori='$nmkategori' WHERE idkategori='$idkategori'";  
    $sql = mysql_query ($query) or die (mysql_error());  
    
    if ($sql) {  
            echo"<script>alert('Data Kategori telah berhasil diedit !',document.location.href='indexkategori.php')</script>";  
    } else {  
            echo"<script>alert('Data Kategori gagal diedit !',document.location.href='indexkategori.php')</script>";  
    }  
?>
