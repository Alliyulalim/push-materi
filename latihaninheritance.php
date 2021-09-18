<?php
// class parent
echo "<center><h2>Bangun Datar</h2> </center><hr>";
class bangun_datar{
 
	
     public $luaspersegi = "Persegi";
     public $luaspersegip = "Persegi panjang";
     public $luassegitiga = "Segitiga";
     public $luaslingkaran = "Lingkaran";
     

}

class luas_persegi extends bangun_datar {
    public function persegi($s){
        echo $this->luaspersegi ."<br>";
        echo "Sisi Persegi : $s <br>";
        $luas = $s*$s;
        echo "Luas Persegi : $luas <hr>";
 
	}
    
}

class luas_persegip extends bangun_datar{
    public function persegip($panjang,$lebar){
            echo $this->luaspersegip ."<br>";
            echo "Panjang Persegipajang : $panjang <br>";
            echo "Lebar Persegipanjang : $lebar <br>";
            $luas = $panjang*$lebar;
            echo "Luas Persegipanjang :  $luas <hr>";
    }
}
class luas_segitiga extends bangun_datar{
    public function segitiga($alas,$tinggi){
            echo $this->luassegitiga ."<br>";
            echo "Alas Segitiga : $alas <br>";
            echo "Tinggi Segitiga : $tinggi <br>";
            $luas = $alas*$tinggi/2;
            echo "Luas Segitiga :  $luas <hr>";
    }
}

class luas_lingkaran extends bangun_datar{
    public function lingkaran($r,$a=3.14){
            echo $this->luaslingkaran ."<br>";
            echo "Jari-Jari Lingkaran : $r <br>";
            echo "Art Lingkaran: $a <br>";
            $luas = $r*$a/2;
            echo "Luas Lingkaran :  $luas <hr>";
    }
}
 

 

$cetak = new luas_persegi;
$cetak->persegi(12);
$cetak = new luas_persegip;
$cetak->persegip(12,11);
$cetak = new luas_segitiga;
$cetak->segitiga(20,11);
$cetak= new luas_lingkaran;
$cetak->lingkaran(30);

 


?>