<?php
$mang1 = array(
    array(1,2,3),
    array(4,5,6),
    array(7,8,9));
echo $mang1[2][1];
$danhsachSV = [
    ["ten" => "Lan", "tuoi"=> 19],
    ["ten" => "Nam", "tuoi"=> 19],
    ["ten" => "Tai", "tuoi"=> 20],
    ["ten" => "Tú", "tuoi"=> 21],
];
echo $danhsachSV[2]["ten"] . "năm nay " . $danhsachSV[2]["tuoi"] . "tuoi";
foreach($danhsachSV as $SV){
    echo $SV["ten"] . "năm nay " . $SV["tuoi"] . "tuoi";
}