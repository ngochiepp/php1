<?php
// đơn hàng 
// $dsDonHang = [
//     ["Tên" => "quần", "sl"=>2 , "đơn giá"=> 50000],
//     ["Tên" => "áo", "sl"=>5 , "đơn giá"=> 250000],
//     ["Tên" => "dép", "sl"=>6 , "đơn giá"=> 1000000],
// ];

// // biến để tính tổng giá trị tất cả đơn hàng
// $tongTatCa = 0;

// // in ra nội dung từng đơn hàng
// foreach ($dsDonHang as $donHang) {
//     $tongDonHang = $donHang["sl"] * $donHang["đơn giá"];
//     echo $donHang["Tên"] . " tổng đơn hàng là " . number_format($tongDonHang, 0, ',', '.') . " VND<br>";
//     $tongTatCa += $tongDonHang;
// }

// // in ra tổng giá trị tất cả đơn hàng
// echo "Tổng tất cả có giá trị " . number_format($tongTatCa, 0, ',', '.') . " VND";


// ví dụ 
// tính vé buffet giá người lớn là 200k 
// dưới 90 cm thì free, từ 90 - 120 giá 50k


// giá vé buffet

// $chieuCao1 = 80;
// $chieuCao2 = 100;
// $chieuCao3 = 160;

// // Hàm tính giá vé dựa trên chiều cao
// function tinhGiaVe($chieuCao) {
    
//     if($chieuCao <=0){
//         echo "Không hợp lệ";
//     }
//      elseif ($chieuCao < 90) {
//         echo "free";
//     } elseif ($chieuCao <= 120) {
//         echo 200/2;
//     } else {
//         echo 200;
//     }
// }

// // Tính và in giá vé cho từng chiều cao
// tinhGiaVe(50);
// echo "<br/>";
// tinhGiaVe($chieuCao2);
// echo "<br/>";
// tinhGiaVe($chieuCao3);
// echo "<br/>";


// viết hàm tính chỉ bmi, đầu vào sẽ là chiều cao, cân nặng

// Hàm tính chỉ số BMI
function tinhBMI($chieuCao, $canNang) {
    // Chuyển chiều cao từ cm sang m
    $chieuCaoMet = $chieuCao / 100;
    
    // Tính chỉ số BMI
    $bmi = $canNang / ($chieuCaoMet * $chieuCaoMet);
    
    // Phân loại BMI
    if ($bmi < 18.5) {
        $phanLoai = "Gầy";
    } elseif ($bmi >= 18.5 && $bmi < 24.9) {
        $phanLoai = "Bình thường";
    } elseif ($bmi >= 25 && $bmi < 29.9) {
        $phanLoai = "Thừa cân";
    } else {
        $phanLoai = "Béo phì";
    }
    
    return [
        'bmi' => $bmi,
        'phanLoai' => $phanLoai
    ];
}

// Ví dụ: Tính BMI cho một người với chiều cao 170 cm và cân nặng 65 kg
$chieuCao = 170; // cm
$canNang = 99; // kg

$result = tinhBMI($chieuCao, $canNang);
$bmi = $result['bmi'];
$phanLoai = $result['phanLoai'];

echo "Chỉ số BMI là: " . number_format($bmi, 2) . "<br>";
echo "Phân loại: " . $phanLoai;



?>
 
