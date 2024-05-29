<?php 
$koneksi =  new mysqli("localhost","root","","kara");
$query  = "select * from spp";

$hasil =$koneksi->query($query);
$kasir=[];

while($item =$hasil->fetch_assoc()){
$kasir[]=$item;
}
; ?>