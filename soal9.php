KALKULATOR DENGAN SWITCH<br><br>
<form method="post">
    Masukkan angka pertama: <input type="number" name="n1"><br>
    Masukkan angka kedua: <input type="number" name="n2"><br>
<select name="opr">
    <option hidden>Pilih Operasi Hitung</option>
    <option value="+">Pertambahan</option>
    <option value="-">Pengurangan</option>
    <option value="*">Perkalian</option>
    <option value="/">Pembagian</option>
    <option value="%">Sisa Bagi</option>
    <option value="**">Perpangkatan</option>
</select><br><br>

<input type="submit" value="Hitung!">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $n1 = $_POST["n1"];
    $n2 = $_POST["n2"];
    $opr = $_POST["opr"];
    $hasil = 0;
    $error = "";

    switch($opr){
        case '+':
            $hasil = $n1 + $n2;
            break;
        case '-':
            $hasil = $n1 - $n2;
            break;
        case '*':
            $hasil = $n1 * $n2;
            break;
        case '/':
            if ($n2 == 0){
                $error = "Angka tidak dapat dibagi dengan nol!!";
            } else {$hasil = $n1 / $n2;}
            break;
        case '%':
            if ($n2 == 0){
                $error = "Modulus tidak dapat dengan nol!";
            } else {
                $hasil = $n1 % $n2;
            }
            
            break;
        case '**':
            $hasil = $n1 ** $n2;
            break;
      default:
         $error = "Operasi tidak valid!";
    }

    if ($error == ""){
        echo $error;
    } else {
        echo "Hasil: $n1 " . ($opr == '+' ? '+' : ($opr == '-' ? '-' : ($opr == '*' ? '*' : ($opr == '/' ? '/' : ($opr == '%' ? '%' : ($opr == '**' ? '**' : '')))))) . " $n2 = $hasil";
    }
}
?>