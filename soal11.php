Menghitung Jari-Jari Lingkaran<br><br>
<form method="POST">
    Luas lingkaran= <input type="number" name="luas" required><br>
    <select name="phi">
        <option hidden>Pilih Phi</option>
        <option value="biasa">22/7</option>
        <option value="dsm">3.14</option>
    <select><br>
    <input type="submit" value="Hitung"><br>
</form>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $luas = $_POST["luas"];
    $phi = $_POST["phi"];
    $hasil = 0;
    $error = "";
   
    if ($luas == 0){
        echo "Luas tidak dapat 0!";
    } else {
         switch ($phi){
             case 'biasa':
            $hasil = sqrt($luas / (22/7));
            break;
             case 'dsm':
            $hasil = sqrt($luas / 3.14);
            break;
            default:
            $error = "Operasi Tidak Valid!";
        }
    }
    echo "___________________________________<br><br>";
    if ($error != ""){
        echo $error;
    } else {
        echo "Luas = " . $luas . "cm<sup>2</sup><br>";
        echo "Jari-Jari = " . number_format($hasil, 2, ',', '.') . "cm";
    }

}