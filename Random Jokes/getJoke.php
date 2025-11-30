<?php
header("Content-Type: application/json");

// API endpoint
$apiUrl = "https://official-joke-api.appspot.com/random_joke";

// Initialize curl
$ch = curl_init($apiUrl);

// Return the transfer as a string
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// Execute
$response = curl_exec($ch);

// Check for errors
if (curl_errno($ch)) {
    echo json_encode([
        "setup" => "Error fetching joke 😢",
        "punchline" => curl_error($ch)
    ]);
    curl_close($ch);
    exit;
}

curl_close($ch);

// Output API response directly
echo $response;
?>
