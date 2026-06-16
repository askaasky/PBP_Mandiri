<?php
class Mahasiswa {
    public $nama;
    public $nim;
    public $jurusan;

    // Constructor
    public function __construct($nama, $nim, $jurusan) {
        $this->nama = $nama;
        $this->nim = $nim;
        $this->jurusan = $jurusan;
    }
    // Method menampilkan informasi mahasiswa
    public function tampilkanInfo() {
        echo "Nama     : $this->nama\n";
        echo "NIM      : $this->nim\n";
        echo "Jurusan  : $this->jurusan\n\n";
    }
}
// Membuat objek mahasiswa
$mhs1 = new Mahasiswa("Yus Askia", "F1G124021", "Ilmu Komputer");
$mhs2 = new Mahasiswa("Tina Rahmasari", "A1P124066", "Pendidikan Geografi");
$mhs3 = new Mahasiswa("Muhamad Resqy Prasetyo", "H1A125198", "Ilmu Hukum");

// Menampilkan informasi mahasiswa
$mhs1->tampilkanInfo();
$mhs2->tampilkanInfo();
$mhs3->tampilkanInfo();
?>