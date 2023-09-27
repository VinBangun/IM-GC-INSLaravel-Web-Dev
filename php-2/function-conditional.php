<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Function</title>
</head>
<body>
<h1>Berlatih Function PHP</h1>
<?php
echo "<h3> Soal No 1 Greetings </h3>";
function greetings($name) {
       echo "Halo " . ucfirst($name) . ", Selamat Datang di Garuda Cyber Institute!";
   }
?>
<?php
echo "<br>"; 
echo "<h3>Soal No 2 Reverse String</h3>";

function reverseString($str) {
    $reversed = '';
    $length = strlen($str);
    for ($i = $length - 1; $i >= 0; $i--) {
        $reversed .= $str[$i];
    }
    echo $reversed;
}
?>
<?php
echo "<br>"; 
echo "<h3>Soal No 3 Palindrome </h3>";

function isPalindrome($str) {
    $str = strtolower($str); // Convert the string to lowercase for case-insensitive comparison
    $length = strlen($str);
    for ($i = 0; $i < $length / 2; $i++) {
        if ($str[$i] !== $str[$length - $i - 1]) {
            echo "false";
            return;
        }
    }
    echo "true";
}
?>
<?php
echo "<h3>Soal No 4 Tentukan Nilai </h3>";

function tentukan_nilai($score) {
    if ($score >= 85 && $score <= 100) {
        echo "Sangat Baik";
    } elseif ($score >= 70 && $score < 85) {
        echo "Baik";
    } elseif ($score >= 60 && $score < 70) {
        echo "Cukup";
    } else {
        echo "Kurang";
    }
}
?>
