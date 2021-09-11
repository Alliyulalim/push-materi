<?php
if(isset($_POST['simpan'])){
    $nis =$_POST['nis'];
    $nama =$_POST['nama'];
    $kelas =$_POST['kelas'];
    $bindo=$_POST['bindo'];
    $bing =$_POST['bing'];
    $mtk =$_POST['mtk'];
    $produktif =$_POST['produktif'];
}
?>
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
        <h2>Data Nilai Siswa Kelas XII RPL</h2>
        <table border="1">
            <tr>
                <th>NIS</th>
                <th>Nama</th>
                <th>Kelas</th>
                <th>Bahasa Indonesia</th>
                <th>Bahasa Inggris</th>
                <th>Matematika</th>
                <th>Produktif</th>
                <th>Total Nilai</th>
                <th>Rata-rata</th>
                <th>Grade</th>
                <th>Status</th>
    
            </tr>
            <?php
            for($i=0; $i<count($nis); $i++){
                ?>
        <tr>
            <td><?php echo $nis[$i];?></td>
            <td><?php echo $nama[$i]; ?></td>
            <td><?php echo $kelas[$i]; ?></td>
            <td><?php echo $bindo[$i];?></td>
            <td><?php echo $bing[$i];?></td>
            <td><?php echo $mtk[$i];?></td>
            <td><?php echo $produktif[$i];?></td>
           
        <?php
        $total = $bindo[$i] + $bing[$i] + $mtk[$i] + $produktif[$i]; 
        ?>
        <td><?= $total; ?></td>
        <?php
        $rata = $total / 4;
        ?>
        <td><?= $rata;?></td>
        <?php
        if  ($rata >=90 && $rata <=100){
            echo "<td>A</td>";
        }else if ($rata >=80 && $rata <=89){
            echo "<td>B</td>";
        }else if ($rata >=75 && $rata <=79){
            echo "<td>C</td>";
        }else if ($rata >=50 && $rata <=74){
            echo "<td>D</td>";
        }else if ($rata >=0 && $rata <=49){
            echo "<td>E</td>";
        }
        ?>
        <?php
        if($rata >= 75){
            ?>
            <td>Lulus</td>
            <?php
        }else {
            ?><td>Tidak Lulus</td>
            <?php
        }
        }
        ?>
        </tr>
        
        </table>
    </center>
</body> 
</html>