<?php

// //class manusia
// class manusia{
//     //prop
//     public $nama;
    
//     //method manusia
//     public function tampilkan_nama(){
//         echo "Nama saya Ujang ";
//     }
//     public function biodata(){
//         echo $this->tampilkan_nama();
//     }
    
// }
// //instansiasi class manusia
// $manusia = new manusia();

// //memanggil method tampilkan_nama dari class manusia
// echo $manusia->biodata();



// private
// class manusia{
//     //menentukan property dengan private
//     private $nama = "kadal";    
    
//     //method public
//     public function tampilkan_nama(){
//         return "Nama saya " .$this->nama;
//     }
    
    
// }
// //instansiasi class manusia
// $manusia = new manusia();
 
// //memanggil method public tampilkan_nama dari class manusia
// echo $manusia->tampilkan_nama();

// protected
class manusia{
    //menentukan property dengan protected
        protected $nama = "malas ngoding";    
        
        //method protected
        protected function nama(){
            return "Nama saya " .$this->nama;
        }
        
        public function tampilkan_nama(){
            return $this->tampilkan_nama;
        }
        
    }
     
    //instansiasi class manusia
    $manusia = new manusia();
     
    //memanggil method public tampilkan_nama dari class manusia
    echo $manusia->nama();
?>