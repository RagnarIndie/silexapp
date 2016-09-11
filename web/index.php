<?php
ini_set('display_errors', 0);

define('BASE_PATH', __DIR__.'/../');
$loader = require_once __DIR__.'/../vendor/autoload.php';

$app = require BASE_PATH.'app/bootstrap.php';
require BASE_PATH.'config/prod.php';

$app->run();
