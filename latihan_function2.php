<?php
function luasLingkaran($jari , $phi=22/7)
{
    $luas = $phi * $jari * $jari;
    return $luas;
}
function luasSegitiga($alas , $tinggi)
{
    $luas =  ($alas * $tinggi)/2;
    return $luas;
}
function luasPersegiP($panjang , $lebar)
{
    $luas = $panjang*$lebar;
    return $luas;
}
?>
<!-- (jari) -->
Luas Lingkaran = <?php echo luaslingkaran(10); ?> <br>
<!-- (alas , tinggi) -->
Luas Segitiga = <?php echo luasSegitiga(2,5); ?> <br>
<!-- (panjang , lebar) -->
Luas Persegi Panjang = <?php echo luasPersegiP(10,4); ?> <br>