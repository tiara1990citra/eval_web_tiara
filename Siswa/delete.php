<?php

    include '../assets/database.php';

    $sql = 'DELETE FROM siswa WHERE nis=' .$_GET['nis'];

    $koneksi->query($sql);
    header('locatiaon:tabelsiswa.php');

?>