<?php
    // JUALAN PRODUK
    // KOMIK
    // GAME

    class Produk{
        //property
        public $judul = "Judul",
               $penulis = "Penulis",
               $penerbit = "penerbit",
               $harga = "0"; 
        // end property
        
        public function getLabel(){
                return "$this->penulis , $this->penerbit"; 
        }

        // Membuat konstruktor
        public function __contruct($judul, $penulis, $penerbit, $harga){
            $this->$judul = $judul;
            $this->$penulis = $penulis;
            $this->$penerbit = $penerbit;
            $this->$harga = $harga;
        }
        // end konstruktor
    }

        $produk1 = new Produk("Naruto","Masashi Kishimoto","Shonen Jump",30000);
        $produk2 = new Produk("Uncharted","Neil Druckman","sony Computer",2500000);
     
        echo "Komik : " . $produk1->getLabel();
        echo "<br>";
        echo "Game : " . $produk2->getLabel();

?> 