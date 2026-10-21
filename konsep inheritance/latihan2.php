<?php 
class pengguna {
    public $nama;
    public $email;

    public function tampilkanData() {
        echo "Nama: " . $this->nama . "<br>";
        echo "Email: " . $this->email . "<br>";
    }
}

class mahasiswa extends pengguna {
    public $prodi;
    public $nim;
}

$mhs1 = new mahasiswa();

$mhs1->nim = "0809";
$mhs1->nama = "Andi";
$mhs1->email = "Andi@gmail.com";
$mhs1->prodi = "Sistem Informasi";

$mhs1->tampilkanData();

echo "NIM : " . $mhs1->nim . "<br>";
echo "Prodi : " . $mhs1->prodi;
?>