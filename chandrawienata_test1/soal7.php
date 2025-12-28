<?php
// SOAL 7 – OOP Dasar
// Pertanyaan:
// Class Mahasiswa.
class Mahasiswa
{
    public $nama;
    public $nim;
    public $jurusan;

    public function __construct($nama, $nim, $jurusan)
    {
        $this->nama = $nama;
        $this->nim = $nim;
        $this->jurusan = $jurusan;
    }

    public function tampilData()
    {
        return "Nama: $this->nama | NIM: $this->nim | Jurusan: $this->jurusan";
    }
}

$mahasiswa1 = new Mahasiswa("Chandra", "123456", "Sistem Informasi");
$mahasiswa2 = new Mahasiswa("Nata", "123457", "Ilmu Komputer");

// Output
echo $mahasiswa1->tampilData() . PHP_EOL;
echo $mahasiswa2->tampilData() . PHP_EOL;
?>