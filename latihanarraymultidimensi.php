<?php

$menu = [
  ['jenis' => "olahraga",'cabang'=>[
    ['lomba' => "sepak bola ", 'artikel'=>[
      ['judul' => "sepak bola nasional"],
      ['judul' => "sepak bola internasional"]
    ]],
    ['lomba'=> "bulutangkis", 'artikel'=>[
      ['judul'=> "bulu tangkis nasional"],
      ['judul'=> "bulu tangkis internasional"]
    ]],
    ['lomba' => "atletik" ,'artikel'=>[
      ['judul' => "atletik nasional"],
      ['judul'=> "atletik internasional"]
    ]]
  ]],
  ['jenis' => "ekonomi",'cabang'=>[
    ['lomba' => "saham ", 'artikel'=>[
      ['judul' => "investasi saham perusahaan global"],
      ['judul' => "investasi saham perusahaan local"]
    ]],
    ['lomba'=> "Bank", 'artikel'=>[
      ['judul'=> "BRI bank rakyat indonesia"],
      ['judul'=> "Mandiri Syariat"]
    ]]
  ]],
    ['jenis' => "Politik",'cabang'=>[
      ['lomba' => "Hukum Rimba", 'artikel'=>[
        ['judul' => "UUD 1945 dasar negara indonesia"],
        ['judul' => "Penetapan hukum oleh pemerintah"]
      ]],
      ['lomba'=> "Pemerintahan", 'artikel'=>[
        ['judul'=> "presidensil"],
        ['judul'=> "demokrasi"]
      ]]
    ]]
          ];

          echo "artikel : detik.com";
          echo "<br>";
          echo "jenis berita :";
          foreach ($menu as $data) {
            echo "<ul>";
            echo "<li>" .$data['jenis'] ."</li>";
          
          foreach($data['cabang'] as $data2){
            echo "<ul>";
            echo "<li>" . $data2['lomba'] . "</li>";
        
        foreach($data2['artikel'] as $data3){
            echo "<ul>";
            echo "<li>" . $data3['judul'] . "</li>";
            echo "</ul>";
        }
        echo "</ul>";
      }
      echo "</ul>";
    }

?>