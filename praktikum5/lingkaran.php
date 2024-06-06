<?php

class lingkaran {
    // property
     private $jari;
     const PHI = 3.14;


    // method / function
    function __construct($r){
        $this ->jari = $r;
    }

    function getluas(){
        return self ::PHI * $this -> jari * $this -> jari;
    }

    function getkeliling(){
        return 2 *self ::PHI * $this -> jari;
    }

}
// instance object
$lingkaran1 = new Lingkaran(10);
echo 'luas Lingkaran1 = ' . $lingkaran1 ->getluas();
echo '<br>Keliling Lingkaran1 = ' . $lingkaran1 ->getkeliling();