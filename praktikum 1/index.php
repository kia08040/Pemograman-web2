<?php 
//  ini komentar
/* ini komentar */
#ini komentar

echo "Hello World <br>";
print_r("saskia <br>");
var_dump("stt nf <br>");
echo "<hr>";

$nama = "saskia putri";
$umur = "18";
$berat = "37";
$mahasiswa = true;

echo "nama saya $nama <br>";
echo "umur saya $umur <br>";
echo "berar saya $berat kg <br>";
echo "<hr>";

// membuat array
$programs = ["php","javascript","html","css"];
echo $programs[0];
foreach ($programs as $program){
    echo $program;
}
?>