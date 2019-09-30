<?php
// cara pertama
define('NAMA', 'Afif Firmansyah');

echo NAMA;
// end

echo "<br>";

// CARA KEDUA
const UMUR = 20;
echo UMUR;

echo "<hr>";

class Coba{
    const NAMA2 = 'Afif';
}

echo Coba::NAMA2;

echo "<hr>";
// MAGIC CONSTANT
// echo __LINE__; // MENAMPILKAN  BARIS SOURCODE BERADA
// echo __FILE__; // MENGETAHUI TEMPAT FILE DI SIMPAN
// echo __DIR__; // MENGETAHUI DIREKTORI FILE YANG BERSANGKUTAN
// echo __FUNCTION__; // MENGETAHUI  KITA LAGI DI FUNCTION APA
// echo __CLASS__; // MENGETAHUI  KITA LAGI DI CLASS APA
// echo __TRAIT__; //
// echo __METHOD__;
// echo __NAMESPACE__;

function coba2(){
    return __FUNCTION__; 
}

echo coba2();

echo "<hr>";

class coba3{
    public $kelas = __CLASS__; 
}

$obj = new coba3;
echo $obj->kelas;


?>