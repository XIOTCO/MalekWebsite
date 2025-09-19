<?php
// Simple router for PHP built-in server to serve index.html for root requests
$request_uri = $_SERVER['REQUEST_URI'];

// If requesting the root path, serve index.html
if ($request_uri === '/' || $request_uri === '') {
    include 'index.html';
    exit;
}

// For all other requests, try to serve the file directly
$file_path = ltrim($request_uri, '/');

// Security check - prevent directory traversal
if (strpos($file_path, '..') !== false) {
    http_response_code(403);
    exit('Access denied');
}

// If the file exists, serve it
if (file_exists($file_path)) {
    // Get file extension
    $extension = pathinfo($file_path, PATHINFO_EXTENSION);
    
    // If it's a PHP file, execute it
    if ($extension === 'php') {
        include $file_path;
        exit;
    }
    
    // For other files, set appropriate content type and serve as static
    $mime_types = [
        'html' => 'text/html',
        'css' => 'text/css',
        'js' => 'application/javascript',
        'png' => 'image/png',
        'jpg' => 'image/jpeg',
        'jpeg' => 'image/jpeg',
        'gif' => 'image/gif',
        'svg' => 'image/svg+xml',
        'ico' => 'image/x-icon',
        'woff' => 'font/woff',
        'woff2' => 'font/woff2',
        'ttf' => 'font/ttf',
        'eot' => 'application/vnd.ms-fontobject'
    ];
    
    if (isset($mime_types[$extension])) {
        header('Content-Type: ' . $mime_types[$extension]);
    }
    
    readfile($file_path);
    exit;
}

// If file doesn't exist, return 404
http_response_code(404);
echo "File not found: " . htmlspecialchars($file_path);
?>