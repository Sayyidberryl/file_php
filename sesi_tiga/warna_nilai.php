<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
      <?php
      $nilai = 8;

      $kompeten = ($nilai >= 75) ? 'Kompeten' : 'Belum Kompeten';
      $warna = ($nilai >= 75) ? 'green' : 'red';
  
      echo "Nilai : {$nilai} <span style='color: {$warna};'>    ($kompeten)</span>"
      ?>
       
</body>
</html>