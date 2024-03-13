<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$data = [
    [
        'nama' => 'Andi',
        'tahun' => 2008,
    ],
    [
        'nama' => 'Beni',
        'tahun' => 2001,
    ],
    [
        'nama' => 'Dani',
        'tahun' => 2004,
    ],
    [
        'nama' => 'Eko',
        'tahun' => 2006,
    ]
];

echo "<ol>";
foreach ($data as $nilai) {
    if ($nilai['tahun'] % 4 == 0 ) {
       
        echo $nilai['nama'] . " : lahir pada tahun kabisat (" . $nilai['tahun'] . ")";
        echo "<br>";
    } else {
        echo  $nilai['nama'] . " : lahir BUKAN pada tahun kabisat (" . $nilai['tahun'] . ")";
        echo "<br>";
    }
}
echo"</ol>";
?>
</body>
</html>