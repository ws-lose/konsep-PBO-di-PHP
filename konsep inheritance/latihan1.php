<?php 
class penguna {
    public $nama;
    public $email;

    public function tampilkanData() {
        echo $this->nama . "<br>";
        echo $this->email . "<br>";
    }
}

$pengguna1 = new penguna();

$pengguna1->nama = "Andi";
$pengguna1->email = "Andi@gmail.com";

$pengguna1->tampilkanData();
?>