<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');

chdir(dirname(__DIR__));
require_once "vendor/autoload.php";
Zend\Mvc\Application::init(require 'config/application.config.php')->run();