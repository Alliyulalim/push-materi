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
 VAKSIN DULU BROU</center>
  </div>
  <div class="card-body">
  <form method="POST" action="">
<div class= "container">
  <div class="form-group">
    <label for="exampleInputEmail1">Nama Anda</label>
    <input type="text" class="form-control" name ="nama" id="exampleInputEmail1" aria-describedby="emailHelp">
    <small id="emailHelp" class="form-text text-muted"></small>
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1">Umur</label>
    <input type="text" class="form-control" name="umur" id="exampleInputPassword1">
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1" >Status vaksin</label>
    <select name="vaksin" required>
    <option value="--- Pilih Jabatan ---"  required>--- Status vaksin ---</option>
        <option value="Belum Vaksin" >belum vaksin</option>
        <option value="Sudah Vaksin">sudah vaksin</option>
  </div>
  </div>
  <button type="submit" name = "simpan" class="btn btn-primary">Submit</button>
</form>
    
</div>
</html>

<?php
if(isset($_POST['simpan'])){
    $nama = $_POST['nama'];
    $umur = $_POST['umur'];
    $vaksin = $_POST['vaksin'];

    echo "<br>";
    echo "<center>";
    echo "<table>";
    echo "<tr>";
    
    echo "<td><b>Nama Anda</td><td> :</td><td> <i>$nama</i> </b></td>";
    echo "</tr>";

    echo "<tr>";
    
    echo "<td><b>Umur</b> </td><td>:</td> <td><i>$umur</i> </b></td>";
    echo "</tr>";

    if($umur >= 12 && $umur <=50){
        echo "<tr>";
        echo "<td> <b>Status vaksin</b> </td>";
        echo "<td> : </td>";
        echo "<td><b>$vaksin</b> </td>";
        echo "</tr>";
        echo "</table>";
        if($vaksin == "Sudah Vaksin"){
            echo "<br><b><i>Diizinkan</i></b></br>";
        }else if($vaksin == "Belum Vaksin"){
            echo "<br><b><i>Tidak Diizinkan</i></b></br>";
            ?>
            <br>
            <a href="https://pedulilindungi.id/">Silahkan Daftar Vaksin</a>

            <?php
        }
    } else {
        echo "<tr>";
        echo "<td> <b>Status vaksin</b> </td>";
        echo "<td> : </td>";
        echo "<td> <b>$vaksin </b></td>";
        echo "</tr>";
        echo "</table>";
        if($vaksin == "Sudah vaksin"){
            echo "<br><b><i>D\Tdak Diizinkan</i></b></br>";
        }else if($vaksin == "Belum vaksin"){
            echo "<br><b><i>Tidak Diizinkan</i></b></br>";
            ?>
            <br>
            <a href="https://pedulilindungi.id/">Silahkan Daftar Vaksin</a>

            <?php
        }
    }
    echo "</center>";
}
?>
