<?php
// SOAL 2 – Percabangan
// Pertanyaan:
// Menentukan grade nilai.
$nilai = 70;

if ($nilai >= 90) {
    $predikat = "A";
} 
else if ($nilai >= 80) {
    $predikat = "B";
} 
else if ($nilai >= 70) {
    $predikat = "C";
} 
else {
    $predikat = "D";
} 

if ($nilai >= 70) {
    if ($predikat == "A" || $predikat == "B") {
        $status = "Lulus dengan Baik";
    } else {
        $status = "Lulus";
    }
} else {
    $status = "Tidak Lulus";
}

echo "Nilai: $nilai" . PHP_EOL;
echo "Predikat: $predikat" . PHP_EOL;
echo "Status: $status" . PHP_EOL;
?>