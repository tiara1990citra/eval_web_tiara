<?php 
$koneksi =  new mysqli("localhost","root","","uprak_tiara");
$query = $query = "select * from kasir";

$hasil =$koneksi->query($query);
$kasir=[];

while($item =$hasil->fetch_assoc()){
$kasir[]=$item;
}
; ?>