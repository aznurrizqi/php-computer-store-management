<?php  
    include "../koneksi.php";  

    $idtransaksi = strtoupper(addslashes (strip_tags ($_POST['idtransaksi'])));  
    $tgltransaksi = strtoupper (strip_tags ($_POST['tgltransaksi']));  
    $totalbayar = strtoupper(addslashes (strip_tags ($_POST['totalbayar'])));  
    $nmkaryawan = strtoupper(addslashes (strip_tags ($_POST['nmkaryawan'])));  
    $nmpelanggan = strtoupper(addslashes (strip_tags ($_POST['nmpelanggan'])));  

    $query = "INSERT INTO transaksi VALUES ('$idtransaksi','$tgltransaksi','$totalbayar','$nmkaryawan','$nmpelanggan')";  
    $sql = mysql_query ($query) or die (mysql_error());  
    
    if ($sql) {  
            echo"<script>alert('Data Transaksi telah berhasil ditambahkan !',document.location.href='indextransaksi.php')</script>";  
    } else {  
            echo"<script>alert('Data Transaksi gagal ditambahkan !',document.location.href='indextransaksi.php')</script>";  
    }  
?>  
