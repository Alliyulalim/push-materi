<?php
$url = "https://api.kawalcorona.com/indonesia/provinsi/";
$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, $url);
// return the transfer
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
// output contain the output string
$dataCovid = curl_exec($ch);
// tutup curl
curl_close($ch);
// menampilkan hasil curl
// echo autput
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
        <h1><i> Data Covid-19 Indonesia</i></h1>
        <table border="1">
            <tr>
            <th>Kode provinsi</th>
            <th>Provinsi</th>
            <th>positif</th>
            <th>Sembuh brader</th>
            <th>Meninggal</th>

            </tr>
            <?php
            $data = json_decode($dataCovid);
            foreach ($data as $covid){
                ?>
                <tr>
                    <td><center><?php echo $covid->attributes->Kode_Provi;?></td></center>
                    <td><center><?php echo $covid->attributes->Provinsi;?></td></center>
                    <td><center><?php echo $covid->attributes->Kasus_Posi;?></td></center>
                    <td><center><?php echo $covid->attributes->Kasus_Semb;?></td></center>
                    <td><center><?php echo $covid->attributes->Kasus_Meni;?></td></center>
                </tr>
                <?php
            }
            ?>

        </table>
    </center>
</body>
</html>