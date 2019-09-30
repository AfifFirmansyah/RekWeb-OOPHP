<?php
    // JUALAN PRODUK
    // KOMIK
    // GAME

    class Produk{
      //property
      public $judul,
      $penulis ,
      $penerbit,
      $harga ; 
// end property

// Membuat konstruktor
public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga =0 ){
    $this->judul = $judul;
    $this->penulis = $penulis;
    $this->penerbit = $penerbit;
    $this->harga = $harga;
 }
 // end konstruktor

public function getLabel(){
       return "$this->penulis , $this->penerbit"; 
}


}

$produk1 = new Produk("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000);
$produk2 = new Produk("Uncharted", "Neil Druckman", "sony Computer", 2500000);
$produk3 = new Produk("Dragon Ball");
echo "Komik : " . $produk1->getLabel();
echo "<br>";
echo "Game : " . $produk2->getLabel();

echo "<br>";
var_dump($produk3);
?> 