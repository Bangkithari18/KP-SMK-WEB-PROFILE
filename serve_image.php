<?php
$uploadDir = 'C:/';

$fileName = $_GET['file'];
$filePath = $uploadDir . $fileName;

if (file_exists($filePath)) {
    header('Content-Type: ' . mime_content_type($filePath));
    readfile($filePath);
    exit;
} else {
    http_response_code(404);
    echo 'File not found.';
}
