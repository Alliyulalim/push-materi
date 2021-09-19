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
<h2>PENGGAJIHAN </h2>
    <h2>GURU/KARYAWAN YAYASAN ASSALAAM
</h2>
<form method= "POST" action="">
    <table>
    <tr>
    <td>No</td>
    <td>:</td>
    <td><input type="text" name="no" required></td><br>
    </tr>
    <tr>
    <td>Nama</td>
    <td>:</td>
    <td><input type="text" name="nama" required></td>    
</tr>
    <tr>
    <td>Unit</td>
    <td>:</td>
        <td><select  name="unit" Value="" required>
        <option value="TK" >TK</option>
        <option value="SD">SD</option>
        <option value="SMP">SMP</option>
        <option value="SMA">SMA/SMK</option>
        </select></td>        
</tr>
    <td>Tanggal</td>
    <td>:</td>
    <td><input type="date" name="tanggal" required></td><br>
    </tr>

    <td>gaji</td>
s
<tr>
    <td><label for="exampleInputEmail1">Jabatan</label></td>
    <td>:</td>
       <td> <select class ="form-control" name="jabatan" Value="" required>
        <option value="kepsek" >kepala sekolah</option>
        <option value="Guru">Manager</option>
        <option value="Karyawan">Karyawan</option>
        </select></td>
        </tr>
        <tr>
    <td>Lama kerja</td>
    <td>:</td>
    <td><input type="number" name="lama" required></td>
<br>
</tr>
<tr>
<td><label for="exampleInputEmail1">Status kerja</label></td>
<td>:</td>
        <td><select class ="form-control" name="status" Value="" required>
    <option value="--- Pilih Jabatan ---" required>--- Pilih Jabatan ---</option>
        <option value="tetap" >pegawai tetap</option>
        <option value="kontrak">pegawai kontrak</option>
    </select></td>
</tr>
    
    <td>Potongan</td>

<tr>
    <td>BPJS</td>
    <td>:</td>
    <td><input type="text" name="bpjs" required></td>
    </tr>
    <tr>
    <td>pinjaman</td>
    <td>:</td>
    <td><input type="number" name="pinjaman" required></td>
    </tr>
    <tr>
    <td><label for="exampleInputEmail1">Tabungan</label>
    <td>:</td>
    <td><input type="text" name="tabungan" required></td>
    </tr>
    <tr>
        <td><button type="submit" name = "simpan" class="btn btn-primary">Submit</button></td>
</tr>
    </table>
    </form>
    
</center>
</body>
</html>

<?php
if(isset($_POST['simpan'])){
    $no = $_POST['no'];
    $nama = $_POST['nama'];
    $unit = $_POST['unit'];
    $tanggal = $_POST['tanggal'];
    $jabatan = $_POST['jabatan'];
    $lama = $_POST['lama'];
    $status = $_POST['status'];
    $bpjs = $_POST['bpjs'];
    $pinjaman = $_POST['pinjaman'];
    $tabungan = $_POST['tabungan'];

    class penggajihan{
        public function jihan()


    }
    class gaji extends penggajihan{
        public function tampilgaji($jabatan,$lama,$status){
            $this->jabatan = $jabatan;
            $this->lama = $lama;
            $this->status = $status;

            if($jabatan == "kepala sekolah"){
                $gaji = 5000000;
            }else if($jabatan == "Guru"){
                
            }
        }

    }
    class potongan extends penggajihan{
        public function
    }
?>