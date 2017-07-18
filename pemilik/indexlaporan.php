<html>  
    <head>  
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />  
        <title>Sistem Informasi Penjualan Hardware Komputer</title>  
        <link href="style.css" rel="stylesheet" type="text/css" />  
    </head>  
    <body>  
        <div id="main_container">  
            <div id="header">  
            <center> Berhasil Login, <a href="../logout.php">Logout</a> </center>
            <h1 align="center">Sistem Informasi Penjualan Hardware Komputer</h1>  
            </div>  
            <div id="navigation">
                <table width="90%" border="1" align="center" id="menu">
                <tr border="1" align="center">  
                    <td width="15%"><a href="laporanbarang.php">LAPORAN BARANG</a></td>  
                    <td width="15%"><a href="laporanpelanggan.php">LAPORAN PELANGGAN</a></td>  
                    <td width="15%"><a href="laporantransaksi.php">LAPORAN TRANSAKSI</a></td>  
                    <td width="15%"><a href="#">PROFIL</a></td>  
                </tr>
                </table>  
                <br/>
            </div>  
            <?php  
            /**$page = (isset($_GET['page']))? $_GET['page'] : "main";  
            switch ($page) {
                case 'tambah' : include "tambahbarang.php"; break;  
                case 'ubah' : include "ubahbarang.php"; break;  
                case 'hapus' : include "hapusbarang.php"; break;  
                case 'utama' :  
                default : **/include 'laporanbarang.php';     
            /**}**/  
            ?>  
        </div>  
    </body>  
</html>
