<?php
// Step 1: Set JSON header
header('Content-Type: application/json');

// Step 2: Create data array
$user = [
    "id" => 1,
    "name" => "Maria",
    "email" => "maria@example.com",
    "status" => "active"
];

// Step 3: Output JSON response
echo json_encode($user);
?>
