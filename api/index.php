<?php

// Forward all requests to the public directory
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$publicDir = __DIR__ . '/../public';

// Normalize URI
if ($uri === '/' || $uri === '') {
    $target = $publicDir . '/index.php';
} else {
    // Try exact file
    $target = $publicDir . $uri;

    // If not found, try with .php extension
    if (!file_exists($target) && file_exists($target . '.php')) {
        $target .= '.php';
    }
}

// Security traversal check
$realTarget = realpath($target);
$realPublicDir = realpath($publicDir);

if ($realTarget && strpos($realTarget, $realPublicDir) === 0 && file_exists($realTarget) && !is_dir($realTarget)) {
    // Serve the file
    // For PHP files, we include them
    if (pathinfo($realTarget, PATHINFO_EXTENSION) === 'php') {
        // Change current directory to public so relative includes work as expected provided they rely on CWD or are just consistent
        chdir($publicDir);
        require $realTarget;
    } else {
        // For static assets that somehow reached here (fallback)
        // Set correct mime type if possible, or just readfile
        // Ideally Vercel routes handle this, but as fallback:
        $mime = mime_content_type($realTarget);
        if ($mime) header("Content-Type: $mime");
        readfile($realTarget);
    }
} else {
    // 404
    http_response_code(404);
    echo "404 Not Found";
}
