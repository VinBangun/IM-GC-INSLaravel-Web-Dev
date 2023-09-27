<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Looping</title>
</head>
<body>
<h1>Berlatih Looping</h1>
<?php
echo "<h3>Soal No 1 Looping I Love PHP</h3>";
echo "<p>Looping I Love PHP</p>";

echo "<h4>Ascending</h4>";
for ($i = 1; $i <= 20; $i++) {
    echo "I Love PHP - Iteration $i <br>";
}

echo "<h4>Descending</h4>";
for ($i = 20; $i >= 1; $i--) {
    echo "I Love PHP - Iteration $i <br>";
}
?>
<?php
echo "<h3>Soal No 2 Looping Array Modulo </h3>";

$numbers = [18, 45, 29, 61, 47, 34]; 
echo "array numbers: ";
print_r($numbers);

$rest = []; // Initialize an empty array to store the remainders

// Loop through each number in the $numbers array
foreach ($numbers as $number) {
    // Calculate the remainder when dividing by 5 and add it to the $rest array
    $remainder = $number % 5;
    $rest[] = $remainder;
}

echo "<br>"; 
echo "Array sisa baginya adalah: ";
print_r($rest); // Output the array of remainders
echo "</br>";
?>
<?php
echo "<h3> Soal No 3 Looping Associative Array </h3>";

$items = [
    ['001', 'Keyboard Logitek', 60000, 'Keyboard yang mantap untuk kantoran', 'logitek.jpeg'],
    ['002', 'Keyboard MSI', 300000, 'Keyboard gaming MSI mekanik', 'msi.jpeg'],
    ['003', 'Mouse Genius', 50000, 'Mouse Genius biar lebih pinter', 'genius.jpeg'],
    ['004', 'Mouse Jerry', 30000, 'Mouse yang disukai kucing', 'jerry.jpeg']
];

// Initialize an empty array to store the associative items
$associativeItems = [];

// Loop through each item in the $items array
foreach ($items as $item) {
    // Create an associative array for each item using keys
    $associativeItem = [
        'id' => $item[0],
        'name' => $item[1],
        'price' => $item[2],
        'description' => $item[3],
        'source' => $item[4]
    ];
    
    // Add the associative item to the $associativeItems array
    $associativeItems[] = $associativeItem;
    
    // Output the associative item
    print_r($associativeItem);
    echo "<br>";
}

// Output the entire $associativeItems array
// print_r($associativeItems);
?>
<?php
echo "<h3>Soal No 4 Asterix</h3>";

echo "Asterisk: <br>";

// Loop through each row
for ($row = 1; $row <= 5; $row++) {
    // Loop to print asterisks in each row
    for ($col = 1; $col <= $row; $col++) {
        echo "* ";
    }
    echo "<br>";
}
?>
</body>
</html>