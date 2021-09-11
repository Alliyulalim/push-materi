<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <fieldset>
        <legend>Formulir</legend>
        <form action="" method="post">
        <table>

            <tr>
                <td>Nama</td>
                <td> : </td>
            <td>
                <input type="text" name="nama" required>
            </td>
        </tr>

        <tr>
        <td>Jenis Kelamin</td>
        <td> : </td>
            
                <td><input type="radio" name="jk" id="l" value="Laki-laki">Laki-laki</td>
                <td><input type="radio" name="jk" id="p" value="Perempuan"> Perempuan </td>
                
                </tr>

            <tr>
                <td>Tanggal Lahir</td>
                    <td> : </td>
                    <td><input type="date" name="tanggal"></td>
                </tr>
                
                <tr>
                    <td>Pilih Agama </td>
                        <td>:</td>
                       
                    <td>
                        <select name="agama" required>
                            <option value="">Pilih</option>
                            <option value="Islam">Islam</option>
                            <option value="Kristen">Kristen</option>
                            <option value="Katolik">Katolik</option>
                            <option value="Budha">Budha</option>
                            <option value="Konghucu">Konghucu</option>
                        </select>
                    </td>
                </tr> 

                    <tr>
                        <td>Alamat</td>
                        <td> : </td>
                        <td> <textarea name="alamat" id="" cols="30" rows="10"></textarea></td>
                    </tr>

                    <tr>
                    
                    <td>Hobi</td>
                    <td> : </td>
                    
                    <td><input type="checkbox" name="hobi[]" value="Membca"> Membaca
                    <input type="checkbox" name="hobi[]" value="Bermain"> Bermain 
                    <input type="checkbox" name="hobi[]" value="Berenang"> Berenang 
                    <input type="checkbox" name="hobi[]" value="Memasak"> Memasak 
                    <input type="checkbox" name="hobi[]" value="Olahraga"> Olahraga 
                    <input type="checkbox" name="hobi[]" value="Makan"> Makan</td>
             </tr>
                    
                    <td><input type="submit" name="simpan" value="simpan"></td>
                </table>
                </form>
            </fieldset>
        </body>
        </html>
        
        <?php 
if(isset($_POST['simpan']))
{
    $nama = $_POST['nama'];
    $jenis = $_POST['jk'];
    $tglLahir = $_POST['tanggal'];
    $agama = $_POST['agama'];
    $alamat = $_POST['alamat'];
    $hobi = $_POST['hobi'];
    
    function dataDiri($nama,$jenis,$tglLahir,$agama,$alamat,$hobi)
    {
$bioData = "Nama : $nama <br>";
$bioData .= "Jenis Kelamin : $jenis <br>";
$bioData .= "Tanggal Lahir : $tglLahir <br>";
$bioData .= "Agama : $agama <br>";
$bioData .= "Alamat : $alamat <br>";
$bioData .= "Hobi : " . implode (",", $hobi);
return $bioData;
}

echo dataDiri ($nama,$jenis,$tglLahir,$agama,$alamat,$hobi);
}
?>