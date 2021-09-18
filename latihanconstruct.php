<?php
class manusia{
    //property
    
    function __construct($nama,$kelas,$jk){
        echo "Nama saya :". $nama ."<br />";
        echo "Kelas : ".$kelas ."<br />";
        echo "Jenis kelamin : ".$jk ."<br />";
        echo "<hr>";
    }
    
}
//instansiasi class manusia
$manusia = new manusia("Muhamad aliyul alim","Saya XII RPL 2","Laki-laki");
$manusia = new manusia("Indah permata","Saya XII RPL 5","Perempuan");
$manusia = new manusia("Muhamad hasanudin","Saya XII RPL 2","Laki-laki");
 
//memanggil method tampilkan_nama dari class manusia


?>