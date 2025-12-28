<?php
// SOAL 8 – Inheritance
// Pertanyaan:
// Override hitungGaji.
class GajiPegawai {
    public function hitungGaji() {
        echo "5000000";
    }
}

class Pegawai extends GajiPegawai {
    public $gaji, $pajak;
    public function hitungGaji() {
        echo $this->gaji - $this->pajak . PHP_EOL;
    }
}

$pegawai = new Pegawai();
$pegawai->gaji =  5000000;
$pegawai->pajak = 0.05;
$pegawai->hitungGaji();

?>