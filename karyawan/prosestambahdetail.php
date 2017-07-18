<?php  
    include "../koneksi.php";  
    
/*    $query = mysql_query("select * from barang order by idbrg desc limit 1");
        
    if(mysql_num_rows($query) == 0){
        $jmlNol = "0001";
    }
    else{
        $hasil = mysql_fetch_array($query);
        $id = substr($hasil['idbrg'],1);
        $tambah = $id+1;
        $nol = strlen($id) - strlen($tambah);
        $jmlNol = "";
            
        if($nol < strlen($id) && $nol >= 0){
            for($i=0;$i<$nol;$i++){
                $jmlNol .= "0";
            }
        
            $jmlNol .= $tambah;
        }        
    }*/
 
    $iddetail = strtoupper(addslashes (strip_tags ($_POST['iddetail'])));  
    $ktgbrg = strtoupper(addslashes (strip_tags ($_POST['ktgbrg'])));  
    $merekbrg = strtoupper(addslashes (strip_tags ($_POST['merekbrg'])));  
    $nmbrg = strtoupper(addslashes (strip_tags ($_POST['nmbrg'])));  
    $hrgbrg = strtoupper(addslashes (strip_tags ($_POST['hrgbrg'])));  
    $jmlbrg = strtoupper(addslashes (strip_tags ($_POST['jmlbrg'])));  

    $query = "INSERT INTO detailtransaksi VALUES ('$iddetail','$ktgbrg','$merekbrg','$nmbrg','$hrgbrg','$jmlbrg')";  
    $sql = mysql_query ($query) or die (mysql_error());  
    
    if ($sql) {  
            echo"<script>alert('Data Barang telah berhasil ditambahkan !',document.location.href='tambahtransaksi.php')</script>";  
    } else {  
            echo"<script>alert('Data Barang gagal ditambahkan !',document.location.href='tambahtransaksi.php')</script>";  
    }  
?>  
