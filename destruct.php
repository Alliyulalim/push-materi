<?php
class manusia{
    //property
    
    //method construct di jalankan pertama kali
    function __destruct(){
        echo "ini adalah isi method DESTRUCT <br/>";
    }
    
    //method destruct di jalankan terakhir
    function tampilkan_nama(){
        echo "Nama saya Muhamad alliyul alim <br/>";
    }
    
    //method manusia
    function __construct(){
        echo "ini adalah isi method CONSTRUCT <br/>";
    }
    
}
//instansiasi class manusia
$manusia = new manusia();
 
//memanggil method tampilkan_nama dari class manusia
echo $manusia->tampilkan_nama();
?>