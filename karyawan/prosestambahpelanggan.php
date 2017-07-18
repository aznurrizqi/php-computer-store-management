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
 
    $idpelanggan = strtoupper(addslashes (strip_tags ($_POST['idpelanggan'])));  
    $nmpelanggan = strtoupper(addslashes (strip_tags ($_POST['nmpelanggan'])));  
    $telp = strtoupper(addslashes (strip_tags ($_POST['telp'])));  
    $alamat = strtoupper(addslashes (strip_tags ($_POST['alamat'])));  
    $email = strtoupper(addslashes (strip_tags ($_POST['email'])));  

    /*$foto = $_FILES['foto']['name'];  
  
    if (strlen($foto)>0) {  
        if (is_uploaded_file($_FILES['foto']['tmp_name'])) {  
            move_uploaded_file ($_FILES['foto']['tmp_name'], "../gambar/".$foto);  
        }  
    } */ 

    $query = "INSERT INTO pelanggan VALUES ('$idpelanggan','$nmpelanggan','$telp','$alamat','$email')";  
    $sql = mysql_query ($query) or die (mysql_error());  
    
    if ($sql) {  
            echo"<script>alert('Data Pelanggan telah berhasil ditambahkan !',document.location.href='indexpelanggan.php')</script>";  
    } else {  
            echo"<script>alert('Data Pelanggan gagal ditambahkan !',document.location.href='indexpelanggan.php')</script>";  
    }  
?>  
