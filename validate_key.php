<?php
// List of valid enrollment keys for demonstration purposes
$valid_keys = [
    "Tari" => "TARIINSTIKI2024",
    // Tambahkan UKM lainnya dengan key-nya masing-masing
];

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $ukm = $_POST["ukm"];
    $key = $_POST["key"];

    if (isset($valid_keys[$ukm]) && $valid_keys[$ukm] === $key) {
        echo json_encode(["valid" => true]);
    } else {
        echo json_encode(["valid" => false]);
    }
} else {
    http_response_code(405);
    echo json_encode(["error" => "Method not allowed"]);
}
?>
