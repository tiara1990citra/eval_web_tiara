<?php 
$koneksi =  new mysqli("localhost","root","","uprak_tiara");
if ($koneksi->connect_error){
die ("".$koneksi->connect_error);


}

; ?>