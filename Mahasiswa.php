<?php

class Mahasiswa {
    public $nim;
    public $nama;
    public $kuliah;
    public $matkul; 
    public $nilai;
    public $grade;
    public $predikat;
    public $status;
    
    public function __construct($nim, $nama, $kuliah, $matkul, $nilai) { 
        $this->nim = $nim;
        $this->nama = $nama;
        $this->kuliah = $kuliah;
        $this->matkul = $matkul; 
        $this->nilai = $nilai;
        $this->hitungGradePredikat();
        $this->hitungStatus();
    }

    private function hitungGradePredikat() {
        if ($this->nilai >= 85) {
            $this->grade = 'A';
            $this->predikat = 'Sangat Memuaskan';
        } elseif ($this->nilai >= 75) {
            $this->grade = 'B';
            $this->predikat = 'Memuaskan';
        } elseif ($this->nilai >= 60) {
            $this->grade = 'C';
            $this->predikat = 'Cukup';
        } elseif ($this->nilai >= 40) {
            $this->grade = 'D';
            $this->predikat = 'Kurang';
        } else {
            $this->grade = 'E';
            $this->predikat = 'Sangat Kurang';
        }
    }

    private function hitungStatus() {
        $this->status = ($this->nilai >= 65) ? 'Lulus' : 'Tidak Lulus';
    }
}

?>
