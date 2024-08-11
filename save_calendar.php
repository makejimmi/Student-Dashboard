<?php
$data = file_get_contents('php://input');
$file = 'calendar.json';

if (file_put_contents($file, $data)) {
    echo json_encode(["success" => true, "message" => "Data saved successfully!"]);
} else {
    http_response_code(500);
    echo json_encode(["success" => false, "message" => "Error saving data"]);
}
?>
