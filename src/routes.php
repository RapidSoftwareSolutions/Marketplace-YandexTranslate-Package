<?php
$routes = [
    'metadata',
    'getSupportedLanguages',
    'detectLanguage',
    'translate'
];
foreach($routes as $file) {
    require __DIR__ . '/../src/routes/'.$file.'.php';
}

