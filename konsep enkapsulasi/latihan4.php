<?php 
class Mahasiswa {
    private $nim;
    private $nilai;

    public function setNama($nama){
        $this->nama = $nama;
    }
    public function setNilai($nilai){
        if ($nilai >= 0 && $nilai <= 100) {
            $this->nilai = $nilai;
        } else {
            echo "Nilai tidak valid.<br>";
        }
    }
    public function getNama(){
        return $this->nama;
    }
    public function getNilai(){
        return $this->nilai;
    }
    }
    $mhs1 = new Mahasiswa();
    $mhs1->setNama("Andi");
    $mhs1->setNilai(85);
    echo "Nama : ", $mhs1->getNama(), "<br>";
    echo "Nilai : ", $mhs1->getNilai(), "<br>";
?>