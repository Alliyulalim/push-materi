<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gajih Pegawai</title>
</head>
<body>
<center>
<h2>Perogram Penggajihan</h2>
<h2>PT.GARUDA KELINCI AKUR</h2>
<form method= "POST" action="">
    <table>
    <tr>
        <td>Nama Bendahara</td>
        <td>:</td>
        <td><input type="text" name="nb" required></td>
    </tr>
    
    <tr>
        <td>Nama Pekerja</td>
        <td>:</td>
        <td><input type="text" name="np" required></td>
    </tr>

    <tr>
    <td>Jenis Kelamin</td>
    <td>:</td>
    <td><input type="radio" name="jk" value="Laki-laki">Laki-laki
    <input type="radio" name="jk" value="Perempuan">Perempuan
    </tr>
    
    <tr>
        <td>Tanggal Gaji</td>
        <td>:</td>
        <td><input type="date" name="tgl" required></td>
    </tr>

    <tr>
    <td>Jabatan </td>
    <td>:</td>
    <td><select name="jabatan" Value="" required>
    <option value="--- Pilih Jabatan ---" required>--- Pilih Jabatan ---</option>
        <option value="Direktur" >Direktur</option>
        <option value="Manager">Manager</option>
        <option value="Karyawan">Karyawan</option>
        <option value="OB">OB</option>
        </select>
        </td>
    </tr>
    <tr>
    <td>Pendidikan Terakhir </td>
    <td>:</td>
    <td><select name="pt" Value="" required>
    <option value="--- Pendidikan Terakhir ---" required>--- Pendidikan Terakhir ---</option>
        <option value="SD" >SD</option>
        <option value="SMP">SMP</option>
        <option value="SMA/SMK">SMA/SMK</option>
        <option value="S1">S1</option>
        </select>
        </td>
    </tr>

    <tr>
    <td>Lembur</td>
    <td>:</td>
    <td><input type="text" name="lembur"required>Hari/Rp.20.000,-</td>
    </tr>

    <tr>
    <td>Potongan</td>
    <td>:</td>
    <td><input type="text" name="potongan" required></td>
    </tr>

    <tr>
    <td></td>
    <td></td>
    <td><input type="submit" name="simpan" Value= "kirim"></td>
    </tr>
    </table>
    </form>
</center>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VAKSIN DULU ATUH</title>
</head>
<body>
<center>
<h2>Syarat Masuk ke Miko Mall</h2>
<form method= "POST" action="">
    <table>
    <tr>
        <td>Nama Anda</td>
        <td>:</td>
        <td><input type="text" name="nama" required></td>
    </tr>
    
    <tr>
        <td>Umur</td>
        <td>:</td>
        <td><input type="text" name="umur" required></td>
    </tr>

    <tr>
    <td>Status Vaksin </td>
    <td>:</td>
    <td><select name="vaksin" required>
    <option value="--- Pilih Jabatan ---" required>--- Status vaksin ---</option>
        <option value="Belum Vaksin" >belum vaksin</option>
        <option value="Sudah Vaksin">sudah vaksin</option>

    <tr>
    <td></td>
    <td></td>
    <td><input type="submit" name="simpan" Value= "kirim"></td>
    </tr>
    </table>
    </form>
    
</center>
</body>
</html>
