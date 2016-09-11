<?php

use Symfony\Component\Debug\Debug;

define('BASE_PATH', __DIR__.'/../');
$loader = require_once BASE_PATH.'vendor/autoload.php';

Debug::enable();

$app = require BASE_PATH.'app/bootstrap.php';
require BASE_PATH.'config/dev.php';

$app->run();
