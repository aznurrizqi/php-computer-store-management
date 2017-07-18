<?php  
    include "../koneksi.php";  
?>  
<div id="content">  
    <h2 align="center">Data merek</h2>  

    <form name="formcari" method="post" action="carimerek.php">
    <input type="text" name="cari" placeholder="Masukkan merek">
    <input type="SUBMIT" name="SUBMIT" id="SUBMIT" value="Cari"> 
    </form>
    <br/>

    <a href="indexmerek.php?page=tambah"><input type="button" name="" value="Input Data Merek"/></a>   
    <table width="35%" id="tabel">  

    <tr bgcolor="#efefef" align="center">  
        <td width="3%">NO</td>  
        <td width="10%">ID MEREK</td>  
        <td width="17%">NAMA MEREK</td>  
        <td width="5%">ACTION</td>  
    </tr>  

    <?php  
    $no = 1;  
    $query = "SELECT * FROM merek ORDER BY idmerek";  
    $sql = mysql_query ($query);  
    while ($hasil = mysql_fetch_array ($sql)) {  
        $idmerek = stripslashes ($hasil['idmerek']);  
        $nmmerek = stripslashes ($hasil['nmmerek']);  
        $warna = ($no%2==1)?"#ffffff":"#efefef";  
    ?>  
        <tr bgcolor="<?php echo $warna; ?>" align="center">  
            <td><?php echo $no; ?></td>  
            <td><?php echo $idmerek; ?></td>  
            <td><?php echo $nmmerek; ?></td>  
            <td>
            <a href="indexmerek.php?page=ubah&idmerek=<?php echo $idmerek; ?>"><input type="button" name="" value=" Edit "/></a>  
            <a href="indexmerek.php?page=hapus&idmerek=<?php echo $idmerek; ?>" onclick="return confirm('Anda yakin akan menghapus data merek <?php echo $nmmerek; ?> ?')"><input type="button" name="" value="Hapus"/></a></td>  
        </tr>      
    <?php $no++; }?>  
    </table>  
</div>
