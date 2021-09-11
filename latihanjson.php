<?php
$dataFilem ='{

"Title": "The Graduate",
"Year": "1967",
"Rated": "Approved",
"Released": "22 dec 1967",
"Runtime": "106 min",
"Genre": [
"Comedy",
"Drama",
"Romance"
],
"Director": "Mike Nichols",
  "Writers": [
    "Calder Willingham (screenplay)",
    "Buck Henry (screenplay)",
    "Charles Webb (based on the novel by)"
  ],
  "Actors": [
    "Anne Bancroft",
    "Dustin Hoffman",
    "Katharine Ross",
    "William Daniels"
  ],
  "Plot": "Ben has recently graduated college, with his parents now expecting great things from him. At his \"Homecoming\" party, Mrs. Robinson, the wife of his fathers business partner, has Ben drive her home, which leads to an affair between the two. The affair eventually ends, but comes back to haunt him when he finds himself falling for Elaine, Mrs. Robinsons daughter.",
  "Language": "English",
  "Country": "USA",
  "Awards": "Won 1 Oscar. Another 22 wins & 13 nominations.",
  "Poster": "http://ia.media-imdb.com/images/M/MV5BMTQ0ODc4MDk4Nl5BMl5BanBnXkFtZTcwMTEzNzgzNA@@._V1_SX300.jpg",
  "imdbRating": "8.1",
  "imdbVotes": "183,131",
  "imdbID": "tt0061722"
}';
$film = json_decode($dataFilem);
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
    <table>

        <center>
            <h4>Data Film</h4>
    <h4>The Graduate</h4>
</center>
<center>
    <img src="https://timlo.net/wp-content/uploads/2020/10/spider-verse.jpg" alt="">
</center>


<tr>
<td></td>
<td></td> 
   <td><?php echo "<center>" . $film -> Plot."<br> </center>"; ?></td>
</tr>

<tr>
<td>Judul Film</td>
     <td>:</td>
    <td><?php echo $film->Title."<br>"; ?></td>
</tr>

<tr>
    <td>Tahun Rilis</td>
    <td>:</td>
<td><?php echo $film->Year ."<br>"; ?></td>
</tr>

<tr>
    <td>Tanggal Rilis</td>
    <td>:</td>
<td><?php echo $film->Released ."<br>"; ?></td>
</tr>

<tr>
    <td>Durasi</td>
    <td>:</td>
<td><?php echo $film->Runtime ."<br>";?></td>
</tr>

<tr>
    <td>Genre</td>
    <td>:</td>
<td><?php echo implode(",", $film->Genre) ."<br>"; ?></td>
</tr>

<tr>
Aktor :
<ul>
    <li>
        <?php echo implode("<li>", $film->Actors) ."</li><br>"; ?>        
    </li>
</ul>
</tr>

Direktor :
<ul>
    
    <li>
        <?php echo $film -> Director ."<br>";?>
    </li>
</ul>

Language :
<?php echo $film -> Language ."<br>";?>

Country :
<?php echo $film -> Country."<br>"; ?>

Awards :
<?php echo $film -> Awards ."<br>";?>

IMBD Votes :
<?php echo $film -> imdbVotes ."<br>";?>

IMDB Rating :
<?php echo $film -> imdbRating ."<br>";?>

Poster :
<?php echo $film -> Poster ."<br>";?>

</table>
</body>
</html>