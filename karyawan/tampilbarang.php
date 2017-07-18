<?php  
    include "../koneksi.php";  
?>  
<div id="content">  
    <h2 align="center">Data Barang</h2>  
    
    <form name="formcari" method="post" action="caribarang.php">
    <input type="text" name="cari" placeholder="Masukkan nama, merek, atau kategori">
    <input type="SUBMIT" name="SUBMIT" id="SUBMIT" value="Cari"> 
    </form>
    <br/>

    <a href="indexbarang.php?page=tambah"><input type="button" name="" value="Input Data Barang"/></a>   
    <table width="100%" id="tabel">  

    <tr bgcolor="#efefef" align="center">  
        <td width="3%">NO</td>  
        <td width="10%">ID BARANG</td>  
        <td width="17%">NAMA BARANG</td>  
        <td width="10%">MEREK</td>  
        <td width="20%">DESKRIPSI</td>  
        <td width="10%">KATEGORI</td>  
        <td width="10%">STOK</td>  
        <td width="10%">HARGA</td>  
        <td width="5%">FOTO</td>  
        <td width="5%">ACTION</td>  
    </tr>  

    <?php  
    $no = 1;  
    $query = "SELECT * FROM barang ORDER BY idbrg";  
    $sql = mysql_query ($query);  
    while ($hasil = mysql_fetch_array ($sql)) {  
        $idbrg = stripslashes ($hasil['idbrg']);  
        $nmbrg = stripslashes ($hasil['nmbrg']);  
        $merek = stripslashes ($hasil['merek']);  
        $deskripsi = stripslashes ($hasil['deskripsi']);  
        $kategori = stripslashes ($hasil['kategori']);  
        $stok = stripslashes ($hasil['stok']);  
        $hrg = stripslashes ($hasil['hrg']);  
        $foto = $hasil['foto'];  
        $warna = ($no%2==1)?"#ffffff":"#efefef";  
    ?>  
        <tr bgcolor="<?php echo $warna; ?>" align="center">  
            <td><?php echo $no; ?></td>  
            <td><?php echo $idbrg; ?></td>  
            <td><?php echo $nmbrg; ?></td>  
            <td><?php echo $merek; ?></td>  
            <td><?php echo $deskripsi; ?></td>  
            <td><?php echo $kategori; ?></td>  
            <td><?php echo $stok; ?></td>  
            <td><?php echo $hrg; ?></td>  
            <td><?php echo "<img src='../gambar/$foto' width='50' height='50'/>"; ?></td>  
            <td>
            <a href="indexbarang.php?page=ubah&idbrg=<?php echo $idbrg; ?>"><input type="button" name="" value=" Edit "/></a>  
            <a href="indexbarang.php?page=hapus&idbrg=<?php echo $idbrg; ?>" onclick="return confirm('Anda yakin akan menghapus data barang <?php echo $nmbrg; ?> ?')"><input type="button" name="" value="Hapus"/></a></td>  
        </tr>      
    <?php $no++; }?>  
    </table>  
</div>
