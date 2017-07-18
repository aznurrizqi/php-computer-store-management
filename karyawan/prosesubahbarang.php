<?php  
    include "../koneksi.php";  
  
    $idbrg = $_POST['hidbrg'];  
    $nmbrg = strtoupper(addslashes (strip_tags ($_POST['nmbrg'])));  
    $merek = strtoupper(addslashes (strip_tags ($_POST['merek'])));  
    $deskripsi = strtoupper(addslashes (strip_tags ($_POST['deskripsi'])));  
    $kategori = strtoupper(addslashes (strip_tags ($_POST['kategori'])));  
    $stok = strtoupper(addslashes (strip_tags ($_POST['stok'])));  
    $hrg = strtoupper(addslashes (strip_tags ($_POST['hrg'])));  
    $foto = $_FILES['foto']['name'];  

    if (strlen($foto)>0) {  
        if (is_uploaded_file($_FILES['foto']['tmp_name'])) {  
            move_uploaded_file ($_FILES['foto']['tmp_name'], "../gambar/".$foto);  
            mysql_query ("UPDATE barang SET foto='$foto' WHERE idbrg='$idbrg'");  
        }  
    }  
    
    $query = "UPDATE barang SET nmbrg='$nmbrg',merek='$merek',deskripsi='$deskripsi',  
              kategori='$kategori',stok='$stok',hrg='$hrg' WHERE idbrg='$idbrg'";  
    $sql = mysql_query ($query) or die (mysql_error());  
    
    if ($sql) {  
            echo"<script>alert('Data Barang telah berhasil diedit !',document.location.href='indexbarang.php')</script>";  
    } else {  
            echo"<script>alert('Data Barang gagal diedit !',document.location.href='indexbarang.php')</script>";  
    }  
?>