<?php 

    include "../assets/database.php";

    $kucing = "INSERT INTO spp(id,tahun,nominal) values(
    '" . $_POST['nis'] . "',   
    '" . $_POST['nama_lengkap'] . "',   
    '" . $_POST['tanggal_lahir'] . "',
    '" . $_POST['jenis_kelamin'] . "',
    '" . $_POST['alamat'] . "',
    '" . $_POST['no_hp'] . "',
    '" . $_POST['kelas_id'] . "',
    '" . $_POST['spp_id'] . "'
   )";
   
   $koneksi->query($kucing);

?>