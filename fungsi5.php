<?php
function hitungUmur($thn_lahir, $thn_sekarang){
    $umur = $thn_sekarang - $thn_lahir;
    return $umur;
}
function perkenalan($nama, $salam = "Assalamualakum"){
    echo $salam . ",";
    echo "perkenalkan, nama saya" .$nama ."<br/>";
    echo "saya berusia". hitungUmur(2003,2021)."tahun <br/>";
    echo "senang berkenalan dengan anda <br/>";
}
echo perkenalan("Ali");
?>