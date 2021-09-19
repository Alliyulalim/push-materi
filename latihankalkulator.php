<?php

class kalkulator
{
  protected $x;
  protected $y;

  public function Tambah($x, $y)
  {
    $this->x = $x;
    $this->y = $y;
    $hasilnya = $this->x + $this->y;
    return $hasilnya;
  }

  public function Kali($x, $y)
  {
    $this->x = $x;
    $this->y = $y;
    $hasilnya = $this->x * $this->y;
    return $hasilnya;
  }

  public function Kurang($x, $y)
  {
    $this->x = $x;
    $this->y = $y;
    $hasilnya = $this->x - $this->y;
    return $hasilnya;
  }

  public function Bagi($x, $y)
  {
    $this->x = $x;
    $this->y = $y;
    $hasilnya = $this->x / $this->y;
    return $hasilnya;
  }

  public function TampilkanForm()
  {
      echo "<h2>kalkulator</h2>";
    echo '<form method="POST">';
    echo '<input type="text" name="x"> &nbsp;';
    echo '<select name="operasi">
      <option value="tambah">+</option>
      <option value="kali">x</option>
      <option value="kurang">-</option>
      <option value="bagi">/</option>
    </select> &nbsp;';
    echo '<input type="text" name="y"> &nbsp;';
    echo '<label>=</label> &nbsp;';
    echo '<input type="submit" value="Hitung">';
    echo '</form>';
  }
}

$data = new kalkulator();
$data->TampilkanForm();

if ($_POST) {
  $x = $_POST['x'];
  $y = $_POST['y'];
  if ($_POST['operasi'] == "tambah") {
    echo "Hasil ".$x." + ".$y." = ".$data->Tambah($x, $y)."<br /><br />";
  } elseif ($_POST['operasi'] == "kali") {
    echo "Hasil ".$x." x ".$y." = ".$data->Kali($x, $y)."<br /><br />";
  } elseif ($_POST['operasi'] == "kurang") {
    echo "Hasil ".$x." - ".$y." = ".$data->Kurang($x, $y)."<br /><br />";
  } elseif ($_POST['operasi'] == "bagi") {
    echo "Hasil ".$x." / ".$y." = ".$data->Bagi($x, $y)."<br /><br />";
  }
}
?>