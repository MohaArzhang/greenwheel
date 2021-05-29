<?php

$app->get('/payment', function ($request, $response, $args) {
    return $this->view->render($response, 'payment.html.twig');
});