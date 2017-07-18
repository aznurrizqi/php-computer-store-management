<?php  
    include "../koneksi.php";  
  
    $idtransaksi = $_POST['hidtransaksi'];  
    $tgltransaksi = strtoupper (strip_tags ($_POST['tgltransaksi']));  
    $totalbayar = strtoupper(addslashes (strip_tags ($_POST['totalbayar'])));  
    $nmkaryawan = strtoupper(addslashes (strip_tags ($_POST['nmkaryawan'])));  
    $nmpelanggan = strtoupper(addslashes (strip_tags ($_POST['nmpelanggan'])));  
    
    $query = "UPDATE transaksi SET tgltransaksi='$tgltransaksi',totalbayar='$totalbayar',nmkaryawan='$nmkaryawan',  
              nmpelanggan='$nmpelanggan' WHERE idtransaksi='$idtransaksi'";  
    $sql = mysql_query ($query) or die (mysql_error());  
    
    if ($sql) {  
            echo"<script>alert('Data Transaksi telah berhasil diedit !',document.location.href='indextransaksi.php')</script>";  
    } else {  
            echo"<script>alert('Data Transaksi gagal diedit !',document.location.href='indextransaksi.php')</script>";  
    }  
?>