<?php

class Mahasiswa
{
    //Properti
    public $ipk;
    public $nama;
    public $nim;
    public $prodi;
    public $angkatan;

    //Method
    function __construct($_nim, $_nama)
    {
        $this->nim = $_nim;
        $this->nama = $_nama;
    }

    function predikat_ipk()
    {
        if ($this->ipk < 2.0) {
            return 'cukup';
        } elseif ($this->ipk >= 2.0 && $this->ipk < 3.0) {
            return 'Baik';
        } elseif ($this->ipk >= 3.0 && $this->ipk < 3.75) {
            return 'Memuaskan';
        } elseif ($this->ipk >= 3.75 && $this->ipk < 4.0) {
            return 'Cumlaude';
        } else {
            return 'Nilai Diluar Jangkauan';
        }
    }
}
//instance object
$mahasiswa1 = new Mahasiswa(110223284, 'iam');
$mahasiswa2 = new Mahasiswa(11111111, 'iamnuel');

$mahasiswa1->ipk = 3.86;
$mahasiswa1->prodi = 'Teknik Informatika';
$mahasiswa1->angkatan = '2023';

$mahasiswa2->ipk = 1.9;
$mahasiswa2->prodi = 'Teknik Informatika';
$mahasiswa2->angkatan = '2023';
