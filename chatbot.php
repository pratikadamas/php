<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user_message = $_POST["message"];

    // Your Gemini API Key
    $api_key = "YOUR_GEMINI_API_KEY";  // Replace with your actual key

    // API Endpoint
    $url = "https://generativelanguage.googleapis.com/v1beta/models/gemini-pro:generateText?key=" . $api_key;

    // API Request Data
    $data = json_encode([
        "prompt" => ["text" => $user_message]
    ]);

    // Initialize cURL
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);

    // Execute API Request
    $response = curl_exec($ch);
    curl_close($ch);

    // Decode API Response
    $result = json_decode($response, true);

    // Extract chatbot response
    if (isset($result["candidates"][0]["output"]["text"])) {
        echo $result["candidates"][0]["output"]["text"];
    } else {
        echo "Sorry, I couldn't generate a response. Please try again.";
    }
}
?>
