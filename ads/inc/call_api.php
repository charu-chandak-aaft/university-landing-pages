<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Read JSON input
    $input = json_decode(file_get_contents("php://input"), true);

    // Check if URL is received
    if (!isset($input["url"])) {
        echo json_encode(["error" => "URL is required"]);
        exit;
    }

    $apiUrl = "https://devapi.mcube.com/call-feature/web-data-call";
    $postData = json_encode(["url" => $input["url"]]);

    // Initialize cURL session
    $ch = curl_init($apiUrl);

    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, [
        "Content-Type: application/json"
    ]);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $postData);

    // Execute cURL and get response
    $response = curl_exec($ch);
    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);

    // Return API response
    echo json_encode([
        "status" => $httpCode,
        "response" => json_decode($response, true)
    ]);
} else {
    echo json_encode(["error" => "Invalid request"]);
}
?>
