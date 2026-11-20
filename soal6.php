<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Nilai Siswa</title>
    <style>
        table {
            width: 50%;
            border-collapse: collapse;
            margin: 20px 0;
        }

        th, td {
            border: 1px solid #110e0e;
            padding: 8px 12px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        tfoot {
            font-weight: bold;
            background-color: #f9f9f9;
        }



    </style>
</head>
<body>

<h2> Daftar Nilai Siswa</h2>

<?php
$Data = [
    "Andi" => 95,
    "Ibnu" => 78,
    "Prabiwo" => 85,
    "Joko" => 55,
    "Arul" => 60
];

$total = array_sum($Data);
$siswa = count($Data);
$rata = $total / $siswa;
$tinggi = max($Data);
$rendah = min($Data);

?>

<table>
    <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Nilai</th>
    </tr>

<?php 
$no = 1;
foreach ($Data as $s => $n):
?>
    <tr>
        <td><?= $no++ ?></td>
        <td><?= $s ?></td>
        <td><?= $n ?></td>
    </tr>
<?php endforeach; ?>

<tfoot>
    <tr>
        <td colspan="2">Total Nilai</td>
        <td><?= $total ?></td>
    </tr>
    <tr>
        <td colspan="2">Rata-Rata</td>
        <td><?= $rata ?></td>
    </tr>
    <tr>
        <td colspan="2">Tertinggi</td>
        <td><?= $tinggi ?></td>
    </tr>
    <tr>
        <td colspan="2">Terendah</td>
        <td><?= $rendah ?></td>
    </tr>
</tfoot>




</body>
</html>




