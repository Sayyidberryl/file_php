<?php






// Ver 2

$nilai = 50;

if($nilai >= 80){
    echo "nilai anda" .$nilai. " maka mutu anda A dinyatakan lulus";
}else if ($nilai >= 68){
    echo "nilai anda" .$nilai. " maka mutu anda B dinyatakan lulus";
}else if ($nilai >= 56){
    echo "nilai anda" .$nilai. " maka mutu anda C dinyatakan lulus";
}else if ($nilai >= 45){
    echo "nilai anda" .$nilai. " maka mutu anda D dinyatakan lulus";
}else{
    echo "nilai anda" .$nilai. " maka mutu anda E dinyatakan tidak lulus";
}

//versi 3
$nilai2 = 50;

if($nilai >= 80){
  $nilaimutu = "a";
  $ket = "lulus";
}else if ($nilai >= 68){
    $nilaimutu = "b";
    $ket = "lulus";
}else if ($nilai >= 56){
    $nilaimutu = "c";
  $ket = "lulus";
}else if ($nilai >= 45){
    $nilaimutu = "d";
    $ket = "lulus";
}else{
    $nilaimutu = "e";
  $ket = "tidak lulus";
}

echo "nilai anda" .$nilai2. " maka mutu anda E dinyatakan tidak lulus";
// ver 3
echo "<br><br>";
$nilai3 = 50;

if($nilai >= 80){
  $nilaimutu3 = "a";
 
}else if ($nilai >= 68){
    $nilaimutu3 = "b";
   
}else if ($nilai >= 56){
    $nilaimutu3 = "c";

}else if ($nilai >= 45){
    $nilaimutu3 = "d";
    
}else{
    $nilaimutu3 = "e";
}

if($nilaimutu3=="a"){
    $ket3 = "lulus";
}elseif($nilaimutu3=="b"){
    $ket3 = "lulus";
}elseif($nilaimutu3=="c"){
    $ket3 = "lulus";
}elseif($nilaimutu3=="d"){
    $ket3 = "lulus";
}else {
    $ket3 = "ANDA GAK LU`LUS 1PA`NTEK1KK`K1KK`1`";
}
 
echo "nilai anda " .$nilai3. " maka mutu anda " .$nilaimutu3. " dinyatakan " .$ket;
?>