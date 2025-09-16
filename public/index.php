<?php

echo '<pre>';
var_dump($_SERVER);
echo '</pre>';

switch($server['REQUEST_URI']) {
    case '/';
        include __DIR__ . '/../views/home.php';
        break;
    case '/us';
        include __DIR__ . '/../views/us.php';
        break;
    default:
        http_response_code(404);
        echo '404 Not Found';
        break;
}