<h2>Formulir Pendaftaran</h2>

<form method="post">
    Nama : <input type="text" name="nama" required> <br>
    Umur : <input type="number" name="umur" required> <br>
    Hobi : <input type="text" name="hobi" required> <br>
    Email : <input type="text" name="email" required> <br>
    TTL : <input type="int" name="ttl" required> <br><br>
   <input type="submit" value="Daftar Sekarang"><br>
</form>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST"){

   $nama = $_POST["nama"];
   $umur = $_POST["umur"];
   $hobi = $_POST["hobi"];
   $email = $_POST["email"];
   $ttl = $_POST["ttl"];

   if (empty($nama) || empty($umur) || empty($hobi) || empty($email) || empty($ttl)){
    echo "Semua Data Harus Dilengkapi, Tidak Boleh Kosong!!";
   } else {
    echo "PENDAFTARAAN BERHASIL!<br>";
    echo "Nama: " . htmlspecialchars($nama) . "<br>";
    echo "Umur: " . htmlspecialchars($umur) . "<br>";
    echo "Hobi: " . htmlspecialchars($hobi) . "<br>";
    echo "Email: " . htmlspecialchars($email) . "<br>";
    echo "TTL: " . htmlspecialchars($ttl) . "<br>";
   }
}

?>