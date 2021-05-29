<?php

error_reporting(E_ALL);
ini_set('display_errors', 'On');
session_start();
require_once 'vendor/autoload.php';
require_once 'init.php';
require_once 'login.php';
require_once 'profile.php';
require_once 'booking.php';
require_once 'admin.php';
require_once 'landing.php';
$app->run();