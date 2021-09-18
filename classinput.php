<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="" method="POST">
        <table>

            <tr>
                <td>NIM</td>
                <td> : </td>
            <td>
                <input type="text" name="nim" required>
            </td>
        </tr>

        <tr>
        <td>NAMA</td>
        <td> : </td>
            
                <td><input type="text" name="nama"></td>
            </tr>
            <tr>
                <td>KELAS</td>
                <td> : </td>
                <td><input type="text" name="kelas"></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" name="proses" value="kirim"></td>
            </tr>
</body>
</html>
<?php

if(isset($_POST['proses'])){
    $nim =$_POST['nim'];
    $nama =$_POST['nama'];
    $kelas =$_POST['kelas'];

    class input
    {
        
        public $x;
        public $y;
        public $z;

        public function data($x,$y,$z)
        {
            $this->x = $x;
            $this->y = $y;
            $this->z = $z;
        }
       
    }

$data = new input();
$data->data($nim,$nama,$kelas);

echo $data->x ."<br>";
echo $data->y ."<br>";
echo $data->z;

}
?>