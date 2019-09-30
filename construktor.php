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
    }
    
    
        

        $produk3 = new Produk();
        $produk3->judul    = "Naruto";
        $produk3->penulis  = "Masashi Kishimoto";
        $produk3->penerbit = "Shonen Jump";
        $produk3->harga    = 30000;
        var_dump($produk3);


        $produk4 = new Produk();
        $produk4->judul    = "Uncharted";
        $produk4->penulis  = "Neil Druckman";
        $produk4->penerbit = "sony Computer";
        $produk4->harga    = 2500000;

        echo "Komik : " . $produk3->getLabel();
        echo "<br>";
        echo "Game : " . $produk4->getLabel();

?> 