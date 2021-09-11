<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
        <h2>Nilai Ujian Siswa Kelas XII RPL</h2>
        <table border="1">
            <tr>
                <th>Nama</th>
                <th>Matematika</th>
                <th>Bahasa Inggris</th>
                <th>Bahasa Indonesia</th>
                <th>Produktif</th>
                <th>Rata-rata</th>
                <th>Status</th>
                <th>Grade</th>   
    
            </tr>
          
            
            <?php
function penjumlahan($nama,$mtk,$bingg,$bindo,$produktif){
    echo "<tr><th>$nama</th>";
    echo "<th>$mtk</th>";
    echo "<th>$bingg</th>";
    echo "<th>$bindo</th>";
    echo "<th>$produktif</th>";
    $rata = ($mtk + $bingg + $bindo + $produktif )/4;
    echo "<th><center>$rata</th></center>";
    
    if($rata >= 75){
        ?>
    <th>Lulus</th>
    <?php
}else {
    ?><th>Tidak Lulus</th>
    <?php
}
    
    if  ($rata >=90 && $rata <=100){
        echo "<th><center>A</center></th>";
    }else if ($rata >=80 && $rata <=89){
        echo "<th><center>B</center></th>";
    }else if ($rata >=75 && $rata <=79){
        echo "<th><center>C</center></th>";
    }else if ($rata >=50 && $rata <=74){
        echo "<th><center>D</center></th>";
    }else if ($rata >=0 && $rata <=49){
        echo "<th><center>E</center></th>";
    }
    
echo "</tr>";
}

echo penjumlahan("Ujang",80,50,70,40);
?>
</table>
</center>
</body> 
</html>