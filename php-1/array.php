<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Array</title>
</head>
<body>
<h1>Berlatih Array</h1>
<?php
echo "<h3> Soal 1 </h3>";
$kids = array("Mike", "Dustin", "Will", "Lucas", "Max", "Eleven");
$adults = array("Hopper", "Nancy", "Joyce", "Jonathan", "Murray");
echo "<ol>";
foreach ($kids as $kid) {
       echo "<li> $kid </li>";
   }
   echo "</ol>";
   echo "<ol>";
foreach ($adults as $adult) {
       echo "<li> $adult </li>";
   }
   echo "</ol>";
?>
<?php
echo "<h3> Soal 2</h3>";

echo "Cast Stranger Things: ";
echo "<br>";

// Display the total number of kids and list them
echo "Total Kids: " . count($kids) . "<br>";
echo "<ol>";
foreach ($kids as $kid) {
    echo "<li> $kid </li>";
}
echo "</ol>";

// Display the total number of adults and list them
echo "Total Adults: " . count($adults) . "<br>";
echo "<ol>";
foreach ($adults as $adult) {
    echo "<li> $adult </li>";
}
echo "</ol>";
?>
<?php
echo "<h3> Soal No 3</h3>";

$data = array
       (
        "Name" => "Will Byers",
        "Age" => 12,
        "Aliases" => "Will the Wise",
        "Status" => "Alive"
       );
$data1 = array
       (
              "Name" => "Mike Wheeler",
              "Age" => 12,
              "Aliases" => "Dungeon Master",
              "Status" => "Alive"
       );
$data2 = array
       (
              "Name" => "Jim Hopper",
              "Age" => 43,
              "Aliases" => "Chief Hopper",
              "Status" => "Deceased"
       );
$data3 = array
       (
              "Name" => "Eleven",
              "Age" => 12,
              "Aliases" => "El",
              "Status" => "Alive"
       );
echo "<ol>";
foreach ($data as $data) {
       echo "<li> $data </li>";
   }
echo "</ol>";
echo "<ol>";
foreach ($data1 as $data1) {
       echo "<li> $data1 </li>";
   }
echo "</ol>";
echo "<ol>";
foreach ($data2 as $data2) {
       echo "<li> $data2 </li>";
   }
echo "</ol>";
echo "<ol>";
foreach ($data3 as $data3) {
       echo "<li> $data3 </li>";
   }
echo "</ol>";
?>
</body>
</html>