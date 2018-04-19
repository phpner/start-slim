<?php

require_once $_SERVER['DOCUMENT_ROOT']. '/vendor/autoload.php';

// Instantiate the app
$app = new \Slim\App(['settings' => require $_SERVER['DOCUMENT_ROOT']. '/App/Settings/settings.php']);

// Set up dependencies
require __DIR__ . '/container.php';

// Register middleware
require __DIR__ . '/middleware.php';

// Register routes
require __DIR__ . '/../routes.php';

return $app;