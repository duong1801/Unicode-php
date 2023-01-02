<?php
//1. Viết một chương trình PHP để nhập lương nhân viên
$pay = 14000000;
$actuallyReceived;
$tax;
if ($pay >= 15000000) {
    $tax = 30 / 100;
    $actuallyReceived = $pay - $pay * $tax;
} elseif ($pay >= 7000000 && $pay < 15000000) {
    $tax = 20 / 100;
    $actuallyReceived = $pay - $pay * $tax;
} elseif ($pay < 7000000) {
    $tax = 10 / 100;
    $actuallyReceived = $pay - $pay * $tax;
}
$tax *= 100;
echo "Lương: {$pay} đ" . "<br>"
    . "Thuế thụ nhập cá nhân: {$tax}%" .
    "<br>" . "Lương thực nhận: ${actuallyReceived} đ" .
    "<br>";

//2. Viết chương trình PHP để nhập tuổi


$age = 15;
echo $age >= 16 ? "Học sinh {$age} tuổi - đủ tuổi vào lớp 10"
    : "Học sinh {$age} tuổi - không đủ tuổi vào lớp 10" . "<br>";


//3. Viết chương trình tìm số lớn nhất của 3 số $a, $b, $c
$a = 5;
$b = 4;
$c = 3;
$max = $a;
if ($b > $a) {
    $max = $b;
} elseif ($c > $a) {
    $max = $c;
}
echo "{$max} là số lớn nhất", "<br>";

// 4. Viết chương trình hoán vị 2 số $a, $b (không sử dụng biến trung gian)
$a = 3;
$b = 5;
$a = $a + $b;
$b = $a - $b;
$a = $a - $b;
echo $a;
echo $b;

// 5. Viết chương trình PHP xếp hạng học lực của học sinh dựa trên:
// điểm bài kiểm tra, điểm thi giữa kỳ, điểm thi cuối kỳ

$midtermScore = 7;
$endScore = 7;
$testScore = 6;
$score = ($midtermScore + $endScore + $testScore) / 3;
if ($score >= 9) {
    echo "Hạng A";
} elseif ($score >= 7 && $score < 9) {
    echo "Hạng B";
} elseif ($score >= 5 && $score < 7) {
    echo "Hạng C";
} elseif ($score <  5) {
    echo "Hạng F";
}