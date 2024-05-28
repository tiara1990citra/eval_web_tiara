<?php 
$koneksi =  new mysqli("localhost","root","","kara");
$query = $query = "select * from kasir";

$hasil =$koneksi->query($query);
$kasir=[];

while($item =$hasil->fetch_assoc()){
$kasir[]=$item;
}
; ?>