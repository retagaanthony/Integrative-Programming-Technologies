<?php

header("Content-Type: application/json");


$file = __DIR__ . "/messages.json";


if (!file_exists($file)) {
    file_put_contents($file, json_encode(["messages" => []], JSON_PRETTY_PRINT));
}


$messages = json_decode(file_get_contents($file), true);


$method = $_SERVER['REQUEST_METHOD'];

if ($method === 'GET') {
    
    echo json_encode($messages);

} elseif ($method === 'POST') {
    $input = json_decode(file_get_contents("php://input"), true);

    if (isset($input['message']) && !empty($input['message'])) {
        $messages["messages"][] = $input['message'];

      
        file_put_contents($file, json_encode($messages, JSON_PRETTY_PRINT));

        echo json_encode(["message" => "Message added!"]);
    } else {
        http_response_code(400);
        echo json_encode(["error" => "No message provided"]);
    }

} else {
    http_response_code(405);
    echo json_encode(["error" => "Method not allowed"]);
}
