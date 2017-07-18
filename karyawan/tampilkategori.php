<?php  
    include "../koneksi.php";  
?>  
<div id="content">  
    <h2 align="center">Data Kategori</h2>  
    
    <form name="formcari" method="post" action="carikategori.php">
    <input type="text" name="cari" placeholder="Masukkan kategori">
    <input type="SUBMIT" name="SUBMIT" id="SUBMIT" value="Cari"> 
    <br/>

    <a href="indexkategori.php?page=tambah"><input type="button" name="" value="Input Data Kategori"/></a>   
    <table width="35%" id="tabel">  

    <tr bgcolor="#efefef" align="center">  
        <td width="3%">NO</td>  
        <td width="10%">ID KATEGORI</td>  
        <td width="17%">NAMA KATEGORI</td>  
        <td width="5%">ACTION</td>  
    </tr>  

    <?php  
    $no = 1;  
    $query = "SELECT * FROM kategori ORDER BY idkategori";  
    $sql = mysql_query ($query);  
    while ($hasil = mysql_fetch_array ($sql)) {  
        $idkategori = stripslashes ($hasil['idkategori']);  
        $nmkategori = stripslashes ($hasil['nmkategori']);  
        $warna = ($no%2==1)?"#ffffff":"#efefef";  
    ?>  
        <tr bgcolor="<?php echo $warna; ?>" align="center">  
            <td><?php echo $no; ?></td>  
            <td><?php echo $idkategori; ?></td>  
            <td><?php echo $nmkategori; ?></td>  
            <td>
            <a href="indexkategori.php?page=ubah&idkategori=<?php echo $idkategori; ?>"><input type="button" name="" value=" Edit "/></a>  
            <a href="indexkategori.php?page=hapus&idkategori=<?php echo $idkategori; ?>" onclick="return confirm('Anda yakin akan menghapus data kategori <?php echo $nmkategori; ?> ?')"><input type="button" name="" value="Hapus"/></a></td>  
        </tr>      
    <?php $no++; }?>  
    </table>  
</div>
