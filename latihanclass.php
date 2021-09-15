<?php
class Rumus_Bangun_Datar {     
   
  
function luas_persegi($s)      
   {      
    echo "Menghitung Luas Persegi";
    echo "<br />";
    echo "Sisinya = $s";
    echo "<br />";
    $luas = $s * $s;
    echo "Luasnya = $luas <hr>";      
   }
function luas_segitiga($a,$t)
{
    echo "<br />";
    echo "Menghitung Luas Segitiga";
    echo "<br />";
    echo "Alasnya = $a";
    echo "<br />";
    echo "Tigginya = $t";
    $luas = $a * $t /2;
    echo "<br />";  
    echo "Luasnya = $luas <hr>";
}
function luas_Lingkaran($jari , $phi)
{
    echo "<br />";
    echo "Menghitung Luas lingkaran";
    echo "<br />";
    echo "Phi = $phi";
    echo "<br />";
    echo "jari-jari = $jari";
    $luas = $phi * $jari * $jari;
    echo "<br />";
    echo "Luasnya = $luas <hr>";
}

  
 
 } 
 $bentuk = new Rumus_Bangun_Datar();

echo $bentuk->luas_persegi(10);
echo $bentuk->luas_segitiga(10,5);
echo $bentuk->luas_Lingkaran(10,3.14);
?>    