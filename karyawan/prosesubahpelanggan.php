<?php  
    include "../koneksi.php";  
  
    $idpelanggan = $_POST['hidpelanggan'];  
    $nmpelanggan = strtoupper(addslashes (strip_tags ($_POST['nmpelanggan'])));  
    $telp = strtoupper(addslashes (strip_tags ($_POST['telp'])));  
    $alamat = strtoupper(addslashes (strip_tags ($_POST['alamat'])));  
    $email = strtoupper(addslashes (strip_tags ($_POST['email'])));  
    /*$stok = strtoupper(addslashes (strip_tags ($_POST['stok'])));  
    $hrg = strtoupper(addslashes (strip_tags ($_POST['hrg'])));  
    $foto = $_FILES['foto']['name'];  

    if (strlen($foto)>0) {  
        if (is_uploaded_file($_FILES['foto']['tmp_name'])) {  
            move_uploaded_file ($_FILES['foto']['tmp_name'], "../gambar/".$foto);  
            mysql_query ("UPDATE barang SET foto='$foto' WHERE idbrg='$idbrg'");  
        }  
    }*/ 
    
    $query = "UPDATE pelanggan SET nmpelanggan='$nmpelanggan',telp='$telp',alamat='$alamat', email='$email' WHERE idpelanggan='$idpelanggan'";  
    $sql = mysql_query ($query) or die (mysql_error());  
    
    if ($sql) {  
            echo"<script>alert('Data Pelanggan telah berhasil diedit !',document.location.href='indexpelanggan.php')</script>";  
    } else {  
            echo"<script>alert('Data Pelanggan gagal diedit !',document.location.href='indexpelanggan.php')</script>";  
    }  
?>
