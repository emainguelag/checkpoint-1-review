<?php

require_once __DIR__.'/controllers/vinyl-controller.php';

$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

if ('/' === $urlPath) 
{
    browseVinyls();
} 
elseif ('/add' === $urlPath) 
{
    addVinyl();
} 
else {
    header('HTTP/1.1 404 Not Found');
}