<?php
// Kelas induk
class Kendaraan {
    public function jalan() {
        echo "Kendaraan berjalan\n";
    }
}
// Kelas turunan Mobil
class Mobil extends Kendaraan {
    public function jalan() {
        echo "Mobil berjalan\n";
    }
}
// Kelas turunan Motor
class Motor extends Kendaraan {
    public function jalan() {
        echo "Motor berjalan\n";
    }
}
// Membuat objek
$mobil = new Mobil();
$motor = new Motor();

// Memanggil method jalan()
$mobil->jalan();
$motor->jalan();
?>