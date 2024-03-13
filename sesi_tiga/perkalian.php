<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    for ($i = 1; $i <= 3; $i++) {
        echo "<h3>Perkalian $i</h3>";
        for ($j = 1; $j <= 10; $j++) {
            $hasil = $i * $j;
            echo "<p>$i x $j = $hasil</p>";
        }
}
?>
       
</body>
</html>