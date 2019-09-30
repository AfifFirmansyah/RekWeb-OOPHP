<?php
    // JUALAN PRODUK
    // KOMIK
    // GAME

    class Produk{
      //property
      public    $judul,
                $penulis ,
                $penerbit,
                $harga ,
                $jumlahHalaman,
                $waktuMain;
        
// end property

    // Membuat konstruktor
    public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "
        penerbit",  $harga = 0 , $jumlahHalaman = 0, $waktuMain = 0){
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->jumlahHalaman = $jumlahHalaman;
        $this->waktuMain = $waktuMain;
    }
    // end konstruktor

    public function getLabel(){
        return "$this->penulis , $this->penerbit"; 
    } 

    public function getInfoProduk(){
        $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
        return $str;
    }
}

class CetakInfoProduk{
    public function cetak( Produk $produk){
        $str = "{$produk->judul} | {$produk->getLabel()} (RP. {$produk->harga})";
        return $str;
    }
}

// membuat kelas komik yang extends kelas produk (child class)

class Komik extends Produk{
    public function getInfoProduk (){
        $str = "Komik : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga}) - {$this->jumlahHalaman} Halaman.";
        return $str;
    }
}
// end

// membuat kelas Game yang extends kelas produk (child class) 

class Game extends Produk{
    public function getInfoProduk (){
        $str = "Game : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga}) ~ {$this->waktuMain} Jam.";
        return $str;
    }
}
// end



$produk1 = new Komik("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000 , 100 ,  0 );
$produk2 = new Game("Uncharted", "Neil Druckman", "sony Computer", 2500000 , 0, 50 );
 
echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();
?> 