<?php
// class parent
class manusia{
 
	// property class manusia
	// public $nama_saya;	
 
 	// method pada class manusia
     private $teman ="rian ganteng";
	protected function berinama(){
		echo "Nama Saya Ujang<br>";
	}
	
}
 
// class turunan atau sub class dari class manusia
// kita menghubungkan class dengan syntax extends
class teman extends manusia{
 
	// property class teman
	// public $nama_teman;
 
 	// method pada class teman
	public function berinamateman(){
        echo "Nama Teman Saya Andi".$this->teman;
	}
}
 
// insta
$malasngoding = new teman;
 
// method beri nama adalah method pada class manusia, tapi kita bisa mengaksesnya karena telah menghubungkan class teman dengan class manusia

$malasngoding->berinamateman();
?>