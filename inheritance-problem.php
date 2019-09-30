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
                $waktuMain,
                $tipe;
// end property

    // Membuat konstruktor
    public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "
        penerbit",  $harga = 0 , $jumlahHalaman = 0, $waktuMain = 0, $tipe){
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->jumlahHalaman = $jumlahHalaman;
        $this->waktuMain = $waktuMain;
        $this->tipe= $tipe;
    }
    // end konstruktor

    public function getLabel(){
        return "$this->penulis , $this->penerbit"; 
    }

    public function getInfoLengkap(){
        $str = "{$this->tipe} : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
        if($this->tipe == "Komik"){
            $str .= " - {$this->jumlahHalaman} Halaman. "; 
        }else if($this->tipe == "Game"){
            $str .= " - {$this->waktuMain} Jam. "; 
        }

        return $str;
    }

}


class CetakInfoProduk{
    public function cetak( Produk $produk){
        $str = "{$produk->judul} | {$produk->getLabel()} (RP. {$produk->harga})";
        return $str;
    }
}

$produk1 = new Produk("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000 , 100 ,  0 , "Komik");
$produk2 = new Produk("Uncharted", "Neil Druckman", "sony Computer", 2500000 , 0, 50 , "Game");

echo "Komik : " . $produk1->getLabel();
echo "<br>";
echo "Game : " . $produk2->getLabel();
echo "<br>";
 
$infoProduk1 = new CetakInfoProduk();
echo $infoProduk1->cetak($produk1);

// Komik : asashi Kishimoto, Shonen Jump
// Game : Neil Druckman , Sony Computer
// Naruto | Masashi Kishimoto, Shonen Jump (Rp.30000)

// menjadi

// Komik : Naruto | Masashi Kishimoto, Shonen Jump (Rp. 30000) - 100 Halaman
// Game : Uncharted | Neil Druckman, Sony Computer (Rp. 2500000) - 50 jam
echo "<br>";
echo $produk1->getInfoLengkap();
echo "<br>";
echo $produk2->getInfoLengkap();
?> 