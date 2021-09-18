<?php
class gajian {     
    public $tp;
    public $tj;


    function pekerjaan($jabatan,$tingkat){
       echo "<table>";
       if ($jabatan == "Direktur") {
           $gaji = 10000000;
           echo "<tr>";
           echo "<td>Jabatan</td>"; 
           echo "<td>:</td>";
           echo "<td>$jabatan</td>"; 
           echo "<tr>";
           echo "<td>Gaji Pokok</td>";
           echo "<td>:</td>";
           echo "<td>Rp.$gaji</td></tr>";    
        }
        else if ($jabatan == "Manager") {
            $gaji = 5000000;
            echo "<td>Jabatan </td>";
            echo "<td>:</td>";
            echo " <td>$jabatan</td>";
            echo "<tr>";
            echo "<td>Gaji Pokok</td>";
            echo "<td>: </td>";
            echo "<td>Rp.$gaji</td></tr>";    
        }
        else if ($jabatan == "Karyawan") {
            $gaji = 3000000;
            echo "<td>Jabatan</td>";
            echo "<td>:</td>";
            echo "<td>$jabatan</td>";
            echo "<tr>";
            echo "<td>Gaji Pokok</td>";
            echo "<td>:</td>";
            echo "<td>Rp.$gaji</td></tr>";    
        }
        
        
        if ($tingkat == "SMP") {
            $tunjangan = 2000000;
            echo "<td>pendidikan</td>";
            echo "<td>:</td>";
            echo "<td>$tingkat</td>";
            echo "<tr>";
            echo "<td>Tunjangan </td>";
            echo "<td> : </td>";
            echo "<td>Rp.$tunjangan</td></tr>";
            
        }
        else if ($tingkat == "SMA/SMK") {
            $tunjangan = 1000000;
            echo "<td>pendidikan</td>";
            echo "<td>:</td>";
            echo "<td>$tingkat</td>";
            echo "<tr>";
            echo "<td>Tunjangan</td>";
            echo "<td> : </td>";
            echo "<td>Rp.$tunjangan</td></tr>";
            
        }
        else if ($tingkat == "S1") {
            $tunjangan = 500000;
            echo "<td>pendidikan</td>";
            echo "<td>:</td>";
            echo "<td>$tingkat</td>";
            echo "<tr>";
            echo "<td>Tunjangan </td>";
            echo "<td> : </td>";
            echo "<td>Rp.$tunjangan</td></tr>";
        }
        $this->tj = $gaji+$tunjangan;
        echo "<tr><td>Total Gaji</td> ";
        echo "<td> : </td>";
        echo "<td> Rp.".$this->tj."</td></tr>";
        

        echo "</table>";
        echo "<hr>";
    }
    function pengeluaran($listrik,$kontrakan,$kendaraan){
        echo "<table>";
        echo "<tr>";
        echo "<h3>Pengeluaran</h3>";
        echo "<td>Bayar Listrik </td>";
        echo "<td>:</td>";
        echo"<td>Rp.$listrik </td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>Bayar Kontrakan</td>";
        echo"<td> : </td>";
        echo"<td>Rp.$kontrakan </td>";
        echo "</tr>";
        echo "<td>Cicilan Kendaraan</td>"; 
        echo "<td> : </td> </td>";
        echo "<td>Rp.$kendaraan </td>";
        $this->tp = $listrik + $kontrakan + $kendaraan;
        echo "<tr><td>Total Pengeluaran</td> <td>:</td> <td> Rp." . $this->tp . "</td></tr>";
        echo "</table>";
        echo "<hr>";
    }
    function sisa(){
        $total = $this->tj - $this->tp;
        echo "<h3><td>Sisa</td>";
        echo "<td>:</td>";
        echo "<td>Rp.$total</td><h3>";
    }
}
//instansiasi class manusia
$bentuk = new gajian();

echo $bentuk->pekerjaan("Manager","SMP");
echo $bentuk->pengeluaran(200000,1000000,600000);
echo $bentuk->sisa();




?>