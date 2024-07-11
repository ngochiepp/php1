<?php
// $mang1 = array("Lan","Hoa","Phượng","Lan");
// $mang2 = ["Lan","Hoa","Phượng","Lan"];
// foreach($mang1 as $i =>$el){
//     echo $el;
// }
// for($i = 0; $i< count($mang1); $i++){
//     echo "<br/>item is:" . $mang1[$i];
// }

// Cho mảng $a=[10,82,5,90,20,10] tìm MAX, MIN và in ra

// $a = [10, 82, 5, 90, 20, 10];

// // Tìm giá trị lớn nhất (MAX)
// $maxValue = max($a);

// // Tìm giá trị nhỏ nhất (MIN)
// $minValue = min($a);

// // In ra giá trị lớn nhất và nhỏ nhất
// echo "Giá trị lớn nhất trong mảng là: " . $maxValue . "<br/>";
// echo "Giá trị nhỏ nhất trong mảng là: " . $minValue . "<br/>";
$a = [10, 82, 5, 90, 20, 10];

$max = $a[0];
$min = $a[0];

for ($i = 1; $i < count($a); $i++) {
    if ($a[$i] > $max) {
        $max = $a[$i];
    }
    if ($a[$i] < $min) {
        $min = $a[$i];
    }
}

echo "Giá trị lớn nhất là: " . $max . "\n";
echo "Giá trị nhỏ nhất là: " . $min . "<br/>";

$a = [10, 82, 5, 91, 20, 10, 23];

$sum = 0;
$count = 0;

foreach ($a as $value) {
    if ($value % 2 != 0) {
        $sum += $value;
        $count++;
    }
}

if ($count > 0) {
    $average = $sum / $count;
    echo "Trung bình cộng của các số lẻ là: " . $average;
} else {
    echo "Không có số lẻ nào trong mảng.";
}

