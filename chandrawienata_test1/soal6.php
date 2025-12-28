<?php
// SOAL 6 – Modularisasi
// Pertanyaan:
// Program BMI.

$berat = 20;
function BMI($berat, $tinggi)
{
    if ($berat < 18.5) 
        return "Kurus";
    if ($berat < 25) 
        return "Normal";
    if ($berat < 30) 
        return "Gemuk";
    return "Obesitas";  

    return $berat / ($tinggi * $tinggi);
}
echo " " .  PHP_EOL;
?>