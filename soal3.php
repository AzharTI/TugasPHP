<?php
$nilai = 23;

if ($nilai >= 80) {
    echo "$nilai = Predikat A";
} elseif ($nilai >= 70) {
    echo "$nilai = Predikat B";
} elseif ($nilai >= 50) {
    echo "$nilai = Predikat C";
} else {
    echo "$nilai = Predikat E";
}