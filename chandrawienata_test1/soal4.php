<?php
// SOAL 4 – Nested Loop
// Pertanyaan:
// Membuat pola bintang.
for ($i = 1; $i <= 4; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo "* ";
    }
    echo " " . PHP_EOL;
}
?>