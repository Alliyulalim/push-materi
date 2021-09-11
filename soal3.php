<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LATIHAN DULU BROU</title>
</head>
<body>
<center>
<h2>Form pengulangan</h2>
<form method= "POST" action="">
    <table>
    <tr>
        <td></td>
        <td></td>
        <td>1. Deret Bilangan Ganjil</td>
    </tr>
    
    <tr>
        <td></td>
        <td></td>
        <td>2. Segitiga sama kaki terbalik</td>
    </tr>

    <tr>
    <td></td>
    <td></td>
    <td>3. Deret bilangan kelipatan 3</td>
    </tr>

    <tr>
    <td>Pilih</td>
    <td>:</td>
    <td><input type="text" name="pilih" required></td>
    </tr>
    <tr>
    <td>Masukan  Angka</td>
    <td>:</td>
    <td><input type="text" name="angka" required></td>
    </tr>
    <tr>
    <td></td>
    <td></td>
    <td><input type="submit" name="simpan" required></td>
    </tr>
    </table>
    </form>
    
</center>
</body>
</html>

<?php
if(isset($_POST['simpan'])){
    $pilih = $_POST['pilih'];
    $angka = $_POST['angka'];
    switch($pilih){
        case 1:
        echo "<center><h3>Deret bilangan ganjil</h3></center>";
        echo "<center>";
        for ($i = 1; $i <= $angka; $i+=2){
            echo "$i";
        }
        echo "</center>";
        break;
        case 2:
            echo "<center><h3>Segitiga Sama Kaki Terbalik<h3></center>";
            echo "<center>";
            for($a = 1; $a <= $angka; $a++){
                for($b = 1; $b <= $a; $b++){
                    echo "";
                }
                for($c = $angka; $c >=$a; $c-=1){
                    echo "*";
                }
                echo "<br>";
            }
            echo "</center>";
            break;
            case 3:
                echo "<center><h3>Deret Bilangan Kelipatan 3</h3></center>";
                echo "<center>";
                for ($i = 3; $i <= $angka; $i+=3){
                    echo "$i ";
                }
                echo "</center>";
                break;
                default:
                echo "<br>";
                echo "<center>Tidak Ada Woi Atuh Brou !!!</center>";
                break;
    }
}
?>