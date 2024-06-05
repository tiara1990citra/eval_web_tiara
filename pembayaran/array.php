<?php
$bulan = [1,2,3,4,5,6,7,8,9,10,11,12];

$lunas = [1, 2, 3, 4, 5, 6]; 

foreach ($bulan as $t) {
    if (in_array($t, $lunas)) {
        echo "Bulan $t lunas.<br>";
    } else {
        echo "Bulan $t belum dibayar.<br>";
    }
}
?>