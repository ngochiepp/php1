<?php
// // vòng lặp for
// for($i=0; $i<10; $i++){
// 	echo "số này là $i <br/>";
// }
// // vòng lặp while
// $i = 2;
// while ($i <10){
//     echo "số này là $i <br/>";
//     $i++;
// }
// // vòng lặp do while 
// $i = 10;
// do {
//     echo "số này là $i <br/>";
//     $i--;
// }while ($i >0);

// In ra các số chẵn có trong khoảng từ 0 đến 20 sử dụng 3 vòng lặp for trên

// vòng lặp for
echo "Sử dụng vòng lặp for:<br/>";
for ($i = 0; $i <= 20; $i++) {
    if ($i % 2 == 0) {
        echo $i . "<br/>";
    }
}
// vòng lặp while
echo "Sử dụng vòng lặp while:<br/>";
$i = 0;
while ($i <= 20) {
    if ($i % 2 == 0) {
        echo $i . "<br/>";
    }
    $i++;
}
// vòng lặp do while 
echo "Sử dụng vòng lặp do-while:<br/>";
$i = 20;
do {
    if ($i % 2 == 0) {
        echo $i . "<br/>";
    }
    $i--;
} while ($i >= 0);
