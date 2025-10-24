<?php
// Step 1: Declare JSON string
$jsonString = '{"name":"Maria","age":21,"email":"maria@example.com"}';

// Step 2: Decode as an object
$obj = json_decode($jsonString);

// Step 3: Decode as an associative array
$arr = json_decode($jsonString, true);

// Step 4: Display individual values
echo "Object: " . $obj->name . "<br>";
echo "Array: " . $arr["email"];
?>
