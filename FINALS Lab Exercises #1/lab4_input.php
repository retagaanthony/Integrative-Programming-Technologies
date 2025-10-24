<?php
// Step 1: Read raw JSON input
$jsonData = file_get_contents('php://input');

// Step 2: Decode JSON
$data = json_decode($jsonData, true);

// Step 3: Check if data is valid
if ($data && isset($data['username']) && isset($data['password'])) {
    echo "Username: " . htmlspecialchars($data['username']) . "<br>";
    echo "Password: " . htmlspecialchars($data['password']);
} else {
    echo " No JSON data received or invalid JSON format.";
}
?>
