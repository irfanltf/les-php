<?php
// for
// lebih kecil dari || sama dengan 
for ($i = 0; $i < 50; $i++) {
    echo "$i | ";
}
for ($k = 10; $k > 1; $k--) {
    echo "$k | ";
}
// while
$count = 0;
while ($count < 10) {
    echo " $count | ";
    $count++;
}
// foreach
$fruits = [
    "apple",
    "banana",
    "orange",
    "avocado"
];
foreach ($fruits as $fruit) {
    echo "$fruit - ";
}
echo "<br>";
echo "<br>";



for ($uuu = 1; $uuu <= 20; $uuu++) {
    if ($uuu % 2 == 0) {
        echo " $uuu . ";
    }
}
echo "<br>";
echo "<br>";

for ($f = 1; $f <= 10; $f++) {
    if ($f % 2 != 0) {
        echo " $f . ";
    }
}
echo "<br>";
echo "<br>";

// for ($k = 2; $k <= 7; $k + 2) {
//     echo "$k . ";
// }
echo "<br>";
echo "<br>";
for ($i = 1; $i <= 3; $i++) {

    for ($j = 1; $j <= 2; $j++) {
        echo $i + $j . " .";
    }
}
// 2
// 3
// 3
// 4
// 4
// 5
echo "<br>";
echo "<br>";
$person = [
    "name" => "nindi",
    "age" => 16,
    "gender" => "Male"
];
foreach ($person as $p) {
    echo " $p";
}
