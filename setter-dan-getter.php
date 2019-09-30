<?php
    // JUALAN PRODUK
    // KOMIK
    // GAME

    class Produk{
      //property
      public $judul,
             $penulis ,
             $penerbit;

        protected $diskon;     
        private $harga ;
        
    // end property

    // Membuat konstruktor
    public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit",  $harga = 0){
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }
    // end konstruktor

    public function getHarga(){
        return $this->harga - ( $this->harga * $this->diskon / 100);
    }

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
   
    public $jumlahHalaman;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit",  $harga = 0 ,  $jumlahHalaman = 0){
       
        parent::__construct($judul, $penulis, $penerbit,  $harga,  $jumlahHalaman);
    
        $this->jumlahHalaman = $jumlahHalaman;
    }

   

    public function getInfoProduk (){
        $str = "Komik : " . parent::getInfoProduk() . " - {$this->jumlahHalaman} Halaman.";
        return $str;
    }
}
// end

// membuat kelas Game yang extends kelas produk (child class) 

class Game extends Produk{
    public $waktuMain;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit",  $harga = 0 ,  $waktuMain = 0){
   
        parent::__construct($judul, $penulis, $penerbit,  $harga ,  $waktuMain);
   
        $this->waktuMain = $waktuMain;
    } 

    public function setDiskon($diskon){
        $this->diskon = $diskon;

    }

    public function getInfoProduk (){
        $str = "Game : " . parent::getInfoProduk() . " ~ {$this->waktuMain} Jam.";
        return $str;
    }
}
// end



$produk1 = new Komik("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000 , 100 );
$produk2 = new Game("Uncharted", "Neil Druckman", "Sony Computer", 2500000 ,  50 );
 
echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();
echo "<hr>";

$produk2->setDiskon(50);
echo $produk2->getHarga();








?> 