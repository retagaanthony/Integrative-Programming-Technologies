<?php
header('Content-Type: application/json');

// Get input data
$input = json_decode(file_get_contents('php://input'), true);

$username = $input['username'];
$password = $input['password'];

// Example response
if ($username == "Maria" && $password == "1234") {
    $response = ["status" => "success", "message" => "Welcome, Maria!"];
} else {
    $response = ["status" => "error", "message" => "Invalid credentials."];
}

// Send JSON back
echo json_encode($response);
?>
