User
<?php

$nilai= [80,  78, 72, 84, 92, 88];
echo "nilai saya : " . implode(",", $nilai) . "<br>";;
echo "nilai terbesar adalah : " . max($nilai) . "<br>";;
echo "nilai terkecil adalah : " . min($nilai) . "<br>";;


// asort($nilai);
// echo "Urutan dari terkecil : ";
// $arrlength = count($nilai);
// for($x = 0; $x < $arrlength; $x++) {
//   echo $nilai[$x] . ",";

// }

asort($nilai);
echo "diurutkan terkecil : " . implode (",", $nilai) . "<br>";

// echo "<br>";
// arsort($nilai);
// echo "Urutan dari terbesar : ";
// $arrlength = count($nilai);
// for($x = 0; $x < $arrlength; $x++) {
//   echo $nilai[$x] . ",";

// } 
// echo "<br>";
arsort($nilai);
echo "diurutkan terbesar : " . implode (",", $nilai) . "<br>";

// echo "Rata-rata nilai : ";
// $average = round(array_sum($nilai)/count($nilai));
// echo $average . "<br>" ;

$retata = round (array_sum($nilai) / count($nilai));
echo "Rata-rata : " . $retata;


// $nilai= [80,  78, 72, 84, 92, 88];
// $nilai[2] = 75;
// echo "nilai saya : ";
// foreach ($nilai as $key => $value) {
//     echo $value , "," ;
// }

ksort($nilai);
array_splice($nilai,2,1, 75);

echo "<br>";
// rsort($nilai);
// echo "Urutan dari terbesar : ";
// $arrlength = count($nilai);
// for($x = 0; $x < $arrlength; $x++) {
//   echo $nilai[$x] . ",";

// }
echo "nilai sekarang : " . implode (",", $nilai) . "<br>";




?>