<?php  
    include "../koneksi.php";  
  
    $iddetail = $_POST['hiddetail'];  
    $nmbrg = strtoupper(addslashes (strip_tags ($_POST['nmbrg'])));  
    $merekbrg = strtoupper(addslashes (strip_tags ($_POST['merekbrg'])));  
    $ktgbrg = strtoupper(addslashes (strip_tags ($_POST['ktgbrg'])));  
    $hrgbrg = strtoupper(addslashes (strip_tags ($_POST['hrgbrg'])));  
    $jmlbrg = strtoupper(addslashes (strip_tags ($_POST['jmlbrg'])));  
    
    $query = "UPDATE detailtransaksi SET nmbrg='$nmbrg',merekbrg='$merekbrg',ktgbrg='$ktgbrg',  
              hrgbrg='$hrgbrg',jmlbrg='$jmlbrg' WHERE iddetail='$iddetail'";  
    $sql = mysql_query ($query) or die (mysql_error());  
    
    if ($sql) {  
            echo"<script>alert('Data Detail telah berhasil diedit !',document.location.href='tambahtransaksi.php')</script>";  
    } else {  
            echo"<script>alert('Data Detail gagal diedit !',document.location.href='tambahtransaksi.php')</script>";  
    }  
?>