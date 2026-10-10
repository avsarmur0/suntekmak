<?php
// Router for PHP built-in server to support extensionless URLs.
$path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$path = urldecode($path);

// Let existing files/directories be served directly.
if ($path !== '/' && file_exists(__DIR__ . $path)) {
    return false;
}

$route = trim($path, '/');
if ($route === '') {
    require __DIR__ . '/index.php';
    exit;
}

$phpFile = __DIR__ . '/' . $route . '.php';
if (is_file($phpFile)) {
    require $phpFile;
    exit;
}

http_response_code(404);
require __DIR__ . '/404.php';
