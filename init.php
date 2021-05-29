<?php

require_once 'vendor/autoload.php';

use Slim\Http\Request;
use Slim\Http\Response;
if (strpos($_SERVER['HTTP_HOST'], "ipd24.ca") !== false) {
    DB::$dbName = 'cp5003_greenwheel';
    DB::$user = 'cp5003_greenwheel';
    DB::$password = '7R[CU0g#KC9i';

} else { 
    DB::$dbName = 'gw_from_database';
    DB::$user = 'root';
    DB::$password = '';
    DB::$host="localhost";   
    DB::$port = 3333;
}

DB::$error_handler = 'db_error_handler';
DB::$nonsql_error_handler = 'db_error_handler'; 

function db_error_handler($params) {
    global $log;
    $log->error("Database error: " . $params['error']);
    if (isset($params['query'])) {
        $log->error("SQL query: " . $params['query']);
    }
    die;
}

$config = ['settings' => [
    'addContentLengthHeader' => false,
    'displayErrorDetails' => true
]];
$app = new \Slim\App($config);

$container = $app->getContainer();
$container['view'] = function ($c) {
    $view = new \Slim\Views\Twig(dirname(__FILE__) . '/templates', [
        'cache' => dirname(__FILE__) . '/tmplcache',
        'debug' => true, 
    ]);

    $view->getEnvironment()->addGlobal('test1','VALUE');
    $router = $c->get('router');
    $uri = \Slim\Http\Uri::createFromEnvironment(new \Slim\Http\Environment($_SERVER));
    $view->addExtension(new \Slim\Views\TwigExtension($router, $uri));
    return $view;
};