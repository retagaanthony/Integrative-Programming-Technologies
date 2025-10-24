<?php
// Step 1: Declare an associative array
$data = [
    "name" => "Maria",
    "age" => 21,
    "course" => "IT"
];

// Step 2: Convert to JSON
$jsonData = json_encode($data);

// Step 3: Output the JSON
echo $jsonData;
?>
