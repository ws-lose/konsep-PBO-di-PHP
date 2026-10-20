<?php
class Mahasiswa {
    private $nim;
    private $nama;
    private $prodi;
    private $nilai;
    private $grade;
    private $semester;

    public function __construct($nim, $nama, $prodi, $semester) {
        $this->nim = $nim;
        $this->nama = $nama;
        $this->prodi = $prodi;
        $this->semester = $semester;
    }

    public function setNilai($nilai) {
        if ($nilai >= 0 && $nilai <= 100) {
            $this->nilai = $nilai;

            if ($nilai >= 80) {
                $this->grade = "A";
            } elseif ($nilai >= 70) {
                $this->grade = "B";
            } elseif ($nilai >= 60) {
                $this->grade = "C";
            } elseif ($nilai >= 50) {
                $this->grade = "D";
            } else {
                $this->grade = "E";
            }

        } else {
            echo "Nilai tidak valid.<br>";
        }
    }

    public function getNim() {
        return $this->nim;
    }

    public function getNama() {
        return $this->nama;
    }

    public function getProdi() {
        return $this->prodi;
    }

    public function getNilai() {
        return $this->nilai;
    }

    public function getGrade() {
        return $this->grade;
    }
    public function getSemester() {
        return $this->semester;
    }
}

$mhs1 = new Mahasiswa(
    "202490",
    "Arifin",
    "Sistem Informasi",
    5
);

$mhs1->setNilai(100);

echo "NIM : " . $mhs1->getNim() . "<br>";
echo "Nama : " . $mhs1->getNama() . "<br>";
echo "Prodi : " . $mhs1->getProdi() . "<br>";
echo "Semester : " . $mhs1->getSemester() . "<br>";
echo "Nilai : " . $mhs1->getNilai() . "<br>";
echo "Grade : " . $mhs1->getGrade() . "<br>";
?>