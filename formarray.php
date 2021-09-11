<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body><center>
    <form action="" method ="POST">
        <h2>Data Siswa Kelas XII RPL</h2>
        <table>
            <tr>
                <td>Jumlah siswa</td>
                <td>:</td>
                <td><input type="number" name ="jumlah"></td>
            </tr>

            <td></td>
            <td></td>
            <td><input type="submit" name= "proses" value= "proses"></td>
        </table>
        <br>
    </form>

<?php
if(isset($_POST['proses'])){
    $jumlah = $_POST['jumlah'];
?>

<form action="hasilformarray.php" method="POST">
<table>
    <?php
    for($i=1; $i<=$jumlah; $i++){
        ?>
        <tr>
            <td></td>
            <td></td>
            <td>Data Siswa ke -<?php echo $i; ?></td>
        </tr>        
        <tr>
            <td>Nama</td>
            <td>:</td>
            <td><input type="text" name="nama[]"></td>
        </tr>
        <tr>
            <td>Kelas</td>
            <td>:</td>
            <td><input type="text" name="kelas[]" ></td>
        </tr>
        <tr>
            <td>Jurusan</td>
            <td>:</td>
            <td><input type="text" name="jurusan[]"/></td>
        </tr>
        <?php
    }
    ?>
    <tr>
        <td></td>
        <td></td>
        <td><input type="submit" name="simpan" value="simpan"/></td>
    </tr>
</table>
</form>
<?php
}
?>  
</body>
</center>    
</html>