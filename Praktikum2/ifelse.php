<?php

$nilai = 100;

if ($nilai > 90) {
    echo "Bjir Keren Parah Nilaimu ajib";
} else if ($nilai <= 90 && $nilai > 70) { // rentang nilai 70 - 90
    echo "Nilai Kamu Bagus";
} else { // dibawah 70
    echo "Nilai Kamu Buruk";
}
