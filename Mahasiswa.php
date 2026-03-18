<?php

class Mahasiswa {
    public $nama, $kelas, $tugas, $uts, $uas;

    public function __construct($nama, $kelas, $tugas, $uts, $uas) {
        $this->nama = $nama;
        $this->kelas = $kelas;
        $this->tugas = $tugas;
        $this->uts = $uts;
        $this->uas = $uas;
    }

    public function rata() {
        return ($this->tugas + $this->uts + $this->uas) / 3;
    }

    public function grade() {
        $r = $this->rata();
        if ($r >= 85) return "A";
        elseif ($r >= 75) return "B";
        elseif ($r >= 65) return "C";
        else return "D";
    }
}
