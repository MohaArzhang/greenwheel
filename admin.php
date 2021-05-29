<?php
require_once 'vendor/autoload.php';

require_once 'init.php';

use Slim\Http\Request;
use Slim\Http\Response;

$app->get('/admin', function ($request, $response, $args) {
    return $this->view->render($response, '/admin/admin.html.twig', ['curruser' => $_SESSION['bikeUser']]);
});

$app->get('/errorlogin', function ($request, $response, $args) {
});

$app->get('/viewusers', function ($request, $response, $args) {
    $user = DB::query('SELECT * FROM users');
    return $this->view->render($response, '/admin/viewusers.html.twig', ['alluser' => $user]);
});

$app->get('/userdelete{id}', function ($request, $response, $args) {
    $user = DB::query('SELECT * FROM users WHERE userId=%s', $args['id']);
    DB::delete('users', 'userId=%s', $args['id']);
    $this->view->render($response, 'admin/delete-successful.html.twig', ['curruser' => $user[0]]);
    // return $response->withRedirect('/viewusers');
});

$app->get('/adminuser{id}', function ($request, $response, $args) {
    $user = DB::query('SELECT * FROM users WHERE userId=%s', $args['id']);
    $this->view->render($response, 'admin/admin_edit_user.html.twig', ['curruser' => $user[0]]);
});

$app->post('/adminuser{id}', function (Request $request, Response $response, $args) {
    $name = $request->getParam('name');
    $address = $request->getParam('address');
    $postcode = $request->getParam('postcode');
    $email = $request->getParam('email');
    $pass = $request->getParam('pass');
    $phone = $request->getParam('phone');
    $id = $args['id'];

    //validation
    $errorList = [];
    if (strlen($name) < 2 || strlen($name) > 100) {
        $name = "";
        $errorList[] = "Name must have between 2 and 100 characters.";
    }
    if (strlen($address) < 10 || strlen($name) > 200) {
        $address = "";
        $errorList[] = "Address must have between 10 and 200 characters.";
    }
    if (!preg_match("/^[A-Za-z]\d[A-Za-z][ ]?\d[A-Za-z]\d$/", $postcode)) {
        $postcode = "";
        $errorList[] = "Postal code should use the pattern A0A 0A0.";
    }
    if (!preg_match("/^[a-zA-Z0-9._-]+@[a-zA-Z0-9-]+\.[a-zA-Z.]{2,5}$/", $email)) {
        $email = "";
        $errorList[] = "Email format is not correct.";
    }

    if (filter_var($phone, FILTER_VALIDATE_INT) === false) {
        $phone = "";
        $errorList[] = "Phone must be 10 digits.";
    }

    if ($errorList) { 
        $valuesList = ['name' => $name, 'address' => $address, 'postcode' => $postcode, 'email' => $email, 'pass' => $pass, 'phone' => $phone];
        return $this->view->render($response, "admin/admin_edit_user.html.twig", ['errorList' => $errorList, 'v' => $valuesList]);
    } else { 
        DB::update('users', ['name' => $name, 'address' => $address, 'postcode' => $postcode, 'email' => $email, 'pass' => $pass, 'phone' => $phone], "userId=%s", $id);
        $this->view->render($response, 'admin/update-successful.html.twig', ['nameUser' => $name]);
        // return $response->withRedirect('viewusers');
    }
});


$app->get('/internalerror', function ($request, $response, $args) {
    $this->view->render($response, 'admin/internalerror.html.twig');
});

$app->get('/logs', function ($request, $response, $args) {
    return $this->view->render($response, '/logs/errors.log');
});

$app->get('/statistics', function ($request, $response, $args) {

    $list = DB::query("SELECT count(*) AS count, bikeType FROM bikes GROUP BY bikeType");
    $bikeCountList = array();
    $bikeTypeList = array();

    foreach ($list as $item) {
        array_push($bikeCountList, $item['count']);
        array_push($bikeTypeList, $item['bikeType']);
    }

    $list2 = DB::query("SELECT sum(b.payment) AS sum, c.bikeType FROM bikes As c , bookings As b WHERE b.bikeId = c.bikeId GROUP BY c.biketype");
    $bikeAmountList = array();
    $bikeIdList = array();

    foreach ($list2 as $item2) {
        array_push($bikeAmountList, $item2['sum']);
        array_push($bikeIdList, $item2['bikeType']);
    }
    return $this->view->render($response, 'admin/statistics.html.twig', ['bikeCountList' => $bikeCountList, 'bikeTypeList' => $bikeTypeList, 'bikeAmountList' => $bikeAmountList, 'bikeIdList' => $bikeIdList]);
});
