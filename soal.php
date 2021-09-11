<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>

<!--navbar --->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">ALI</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="soal.php">Penggajihan <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="soal2.php">Vaksin</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="soal3">Pengulangan</a>
      </li>
    </ul>
  </div>
</nav>

<!--- form --->
<div class="card">
  <div class="card-header"><center>
    PENGGAJIHAN PT GARUDA KELINCI AKUR</center>
  </div>
  <div class="card-body">
  <form method="POST" action="">
<div class= "container">
  <div class="form-group">
    <label for="exampleInputEmail1">Nama Bendahara</label>
    <input type="text" class="form-control" name ="nb" id="exampleInputEmail1" aria-describedby="emailHelp">
    <small id="emailHelp" class="form-text text-muted"></small>
  </div>
  
  <div class="form-group">
    <label for="exampleInputPassword1">Nama Pekerja</label>
    <input type="text" class="form-control" name="np" id="exampleInputPassword1">
  </div>
  
  <label for="exampleInputEmail1">Jenis kelamin</label>  
    <br><input type="radio" name="jk" value="Laki-laki">Laki-laki
    <br>
    <br><input type="radio" name="jk" value="Perempuan">Perempuan<br>

    <br>
    <label for="exampleInputEmail1">Tanggal Gaji</label>
        
        <br><input type="date" class="form-control" name="tgl" required><br>

        <label for="exampleInputEmail1">Jabatan</label>
        <select class ="form-control" name="jabatan" Value="" required>
    <option value="--- Pilih Jabatan ---" required>--- Pilih Jabatan ---</option>
        <option value="Direktur" >Direktur</option>
        <option value="Manager">Manager</option>
        <option value="Karyawan">Karyawan</option>
        <option value="OB">OB</option>
        </select><br>

        <label for="exampleInputEmail1">Pendidikan Terakhi</label> 
    
    <select class="form-control"name="pt" Value="" required>
    <option value="--- Pendidikan Terakhir ---" required>--- Pendidikan Terakhir ---</option>
        <option value="SD" >SD</option>
        <option value="SMP">SMP</option>
        <option value="SMA/SMK">SMA/SMK</option>
        <option value="S1">S1</option>
        </select><br>

        <label for="exampleInputEmail1">Lembur</label>
    <input type="text" class ="form-control" name="lembur"required>Hari/Rp.20.000,- <br>
    
   <br> <label for="exampleInputEmail1">Potongan</label>
    <input type="text" class ="form-control" name="potongan" required><br>

  <button type="submit" name = "simpan" class="btn btn-primary">Submit</button>
  </div>
</form>
    
</div>
</html>


<?php

if(isset($_POST['simpan'])){
    $np = $_POST['np'];
    $nb = $_POST['nb'];
    $jk = $_POST['jk'];
    $tgl = $_POST['tgl'];
    $jabatan = $_POST['jabatan'];
    $pt = $_POST['pt'];
    $lembur = $_POST['lembur'];
    $potongan = $_POST['potongan'];

    echo "<center><h2>Strukt Gaji Karyawan</h2><br>";
    echo "--------------------------------------------------------------------------------<br>";
    echo "---------<br>";
    echo "<table>";
    echo "<tr>";
    echo "<td></td>";
    echo "<td></td>";
    echo "<td></td>";
    echo "<td><b>Tanggal : <i>$tgl</i> </b></td>";
    echo "</tr>";

    echo "<tr>";
    echo "<td><b><i>Gaji Pokok</i><br></b></td>";
    echo "</tr>";
    echo "<tr></tr>";
    echo "<tr></tr>";
    echo "<tr>";

    echo "<td>Nama Karyawan</td>";
    echo "<td> :</td>";
    echo "<td> $np</td></tr>";

    echo "<tr>";
    echo "<td>Jenis Kelamin</td>";
    echo "<td> : </td>";
    echo "<td>$jk</td></tr>";
    
    echo "<tr>";
    echo "<td>Pendidikan Terakhir</td>";
    echo "<td> : </td>";
    echo "<td>$pt</td></tr>";
    
    echo "<tr>";
    echo "<td>Jabatan </td>";
    echo "<td>:</td>";
    echo "<td> $jabatan</td>";

    if ($jabatan == "Direktur") {
        $jabatan = 10000000;
        echo "<tr>";
        echo "<td>Gaji </td>";
        echo "<td>:</td>";
        echo "<td>Rp.$jabatan</td></tr>";    
    }
    else if ($jabatan == "Manager") {
        $jabatan = 7500000;
        echo "<tr>";
        echo "<td>Gaji </td>";
        echo "<td>:</td>";
        echo "<td>Rp.$jabatan</td></tr>";    
    }
    else if ($jabatan == "Karyawan") {
        $jabatan = 5000000;
        echo "<tr>";
        echo "<td>Gaji </td>";
        echo "<td>:</td>";
        echo "<td>Rp.$jabatan</td></tr>";    
    }
    else if ($jabatan == "BO") {
        $jabatan = 2500000;
        echo "<tr>";
        echo "<td>Gaji </td>";
        echo "<td>:</td>";
        echo "<td>Rp.$jabatan</td></tr>";    
    }
    
    echo "<tr>";
    echo "<td><b><i>Tunggakan</i></b></td></tr>";

    if ($pt == "SD") {
        $pt = 250000;
        echo "<tr>";
        echo "<td>Tunjangan Pendidikan</td>";
        echo "<td> : </td>";
        echo "<td>Rp.$pt</td></tr>";
        
    }
    else if ($pt == "SMP") {
        $pt = 500000;
        echo "<tr>";
        echo "<td>Tunjangan Pendidikan</td>";
        echo "<td> : </td>";
        echo "<td>Rp.$pt</td></tr>";
        
    }
    else if ($pt == "SMA/SMK") {
        $pt = 1000000;
        echo "<tr>";
        echo "<td>Tunjangan Pendidikan</td>";
        echo "<td> : </td>";
        echo "<td>Rp.$pt</td></tr>";
        
    }
    else if ($pt == "S1") {
        $pt = 1500000;
        echo "<tr>";
        echo "<td>Tunjangan Pendidikan</td>";
        echo "<td> : </td>";
        echo "<td>Rp.$pt</td></tr>";
        
    }
    if ($lembur) {
        $blembur = $lembur * 20000;
        echo "<tr>";
        echo "<td>Vaksi Lembur</td>  ";
        echo "<td>:</td>";
        echo "<td>Rp.$blembur</td></tr>";
    }
    else if ($lembur =="0") {
        echo "<tr>";
        echo "<td>Vaksi Lembur</td>  ";
        echo "<td>:</td>";
        echo "<td>Rp. $lembur</td></tr>";
    }
    # code...
    echo "<tr>";
    echo "<td><b><i>Potongan</i></b></td></tr>";
    
    
    echo "<tr>";
    echo "<td>Potongan</td> ";
    echo "<td>:</td>";
    echo "<td>Rp.$potongan</td></tr>";
    
    
    if ($lembur) {
        echo "<tr>";
        echo "<td>Total Gaji</td>  ";
        echo "<td>:</td>";
        $gaji = $jabatan + $pt + $blembur - $potongan;
        echo "<td>Rp.$gaji</td></tr>";
        
        echo "<tr>";
        echo "<td></td><td></td><td></td>";
        echo "<td>Bendahara : $nb</td>";
        echo "</table>";
    }
    else  {
        echo "<tr>";
        echo "<td>Total Gaji</td>  ";
        echo "<td>:</td>";
        $gaji = $jabatan + $pt + $lembur - $potongan;
        echo "<td>Rp.$gaji</td></tr>";
        
        echo "<tr>";
        echo "<td></td><td></td><td></td>";
        echo "<td>Bendahara : $nb</td>";
        echo "</table>";
    }
    }

?>