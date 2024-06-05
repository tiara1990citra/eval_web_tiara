<?php 

    include "../assets/database.php";

    $kucing = "INSERT INTO spp(id,tahun,nominal) values(
    '" . $_POST['no_transaksi'] . "',   
    '" . $_POST['tanggal'] . "',   
    '" . $_POST['nis'] . "',
    '" . $_POST['bulan_tagihan'] . "',
    '" . $_POST['tahun_tagihan'] . "',
    '" . $_POST['admin_id'] . "'
   )";
   
   $koneksi->query($kucing);

?>