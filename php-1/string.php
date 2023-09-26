<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>String PHP</title>
</head>
<body>
<h1>Berlatih String PHP</h1>
<?php
echo "<h3> Soal No 1</h3>";

$first_sentence = "Hello PHP!";
$second_sentence = "I'm ready for the challenges";

// Calculate and display the length of the strings
echo "Panjang string (first_sentence): " . strlen($first_sentence) . "<br>";
echo "Panjang string (second_sentence): " . strlen($second_sentence) . "<br>";

// Calculate and display the number of words in the strings
echo "Jumlah kata (first_sentence): " . str_word_count($first_sentence) . "<br>";
echo "Jumlah kata (second_sentence): " . str_word_count($second_sentence) . "<br>";
?>
<?php
echo "<h3> Soal No 2</h3>";

$string2 = "I love PHP";

echo "<label>String: </label> \"$string2\" <br>";

// Split the string into words and display the first three words
$words = explode(" ", $string2);
if (count($words) >= 3) {
    echo "Kata pertama: " . $words[0] . "<br>";
    echo "Kata kedua: " . $words[1] . "<br>";
    echo "Kata ketiga: " . $words[2] . "<br>";
} else {
    echo "String tidak memiliki cukup kata.";
}
?>
<?php
echo "<h3> Soal No 3</h3>";

$string3 = "PHP is old but sexy!";
echo "String: \"$string3\" <br>";

// Replace "sexy" with "awesome" in the string
$modified_string = str_replace("sexy", "awesome", $string3);

echo "OUTPUT: \"$modified_string\"";
?>

</body>
</html>