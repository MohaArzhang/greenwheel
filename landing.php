<?php
require_once 'vendor/autoload.php';

require_once 'init.php';

use Slim\Http\Request;
use Slim\Http\Response;

$app->get('/', function ($request, $response, $args) {
    global $currentpage;
    $currentpage = "/";
    return $this->view->render($response, 'landing.html.twig', ['current' => 'landing']);
})->setName('/');
