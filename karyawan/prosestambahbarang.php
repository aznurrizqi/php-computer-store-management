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
 
    $idbrg = strtoupper(addslashes (strip_tags ($_POST['idbrg'])));  
    $nmbrg = strtoupper(addslashes (strip_tags ($_POST['nmbrg'])));  
    $merek = strtoupper(addslashes (strip_tags ($_POST['merek'])));  
    $deskripsi = strtoupper(addslashes (strip_tags ($_POST['deskripsi'])));  
    $kategori = strtoupper(addslashes (strip_tags ($_POST['kategori'])));  
    $stok = strtoupper(addslashes (strip_tags ($_POST['stok'])));  
    $hrg = strtoupper(addslashes (strip_tags ($_POST['hrg'])));  
    $foto = $_FILES['foto']['name'];  
  
    /*if (strlen($foto)>0) {  
        if (is_uploaded_file($_FILES['foto']['tmp_name'])) {  
            move_uploaded_file ($_FILES['foto']['tmp_name'], "../gambar/".$foto);  
        }  
    }*/

    $query = "INSERT INTO barang VALUES ('$idbrg','$nmbrg','$merek','$deskripsi','$kategori','$stok','$hrg','$foto')";  
    $sql = mysql_query ($query) or die (mysql_error());  
    
    if ($sql) {  
            echo"<script>alert('Data Barang telah berhasil ditambahkan !',document.location.href='indexbarang.php')</script>";  
    } else {  
            echo"<script>alert('Data Barang gagal ditambahkan !',document.location.href='indexbarang.php')</script>";  
    }  
?>  
