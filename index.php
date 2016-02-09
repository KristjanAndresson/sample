<?php namespace Halo;

// Init composer auto-loading
require 'vendor/autoload.php';

// Project constants
define('PROJECT_NAME', 'sample');
define('DEFAULT_CONTROLLER', 'welcome');
define('DEBUG', true);

// Load app
require 'system/classes/Application.php';
$app = new Application;
