<?php
function luas($r){
    return 22/7 * $r * $r;
}

function keliling($r){
    return 2 * 22/7 * $r;
}

echo "Menghitung Luas dan Keliling Lingkaran r (7, 14): <br><br>";

foreach ([7, 14] as $r){
    echo "Jari-jari = " . $r . " cm<br>";
    echo "Luas = " . luas($r) . " cm<sup>2</sup><br>";
    echo "Keliling = " . keliling($r) . " cm<br><br>";
}
?>