<?php 
$koneksi =  new mysqli("localhost","root","","kara");
$query  = "select * from pembayaran";

$hasil =$koneksi->query($query);
$kasir=[];

while($item =$hasil->fetch_assoc()){
$kasir[]=$item;
}
; ?>