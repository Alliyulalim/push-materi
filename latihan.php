<?php
function perkenalan($a,$b){
    if ($b>=17) {
        echo "Umur $a $b tahun, dan $a sudah bisa Punya KTP";
    }
    else {
        echo "Umur $a $b tahun, dan $a belum bisa Punya KTP";
        
    }
}
perkenalan("Muhamad Alliyul alim",19);
?>