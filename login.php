<?php

require_once 'vendor/autoload.php';

require_once 'init.php';

use Respect\Validation\Validator as Validator;

use Slim\Http\Request;
use Slim\Http\Response;
use Monolog\Logger;
use Monolog\Handler\StreamHandler;

$log = new Logger('main');
$log->pushHandler(new StreamHandler(dirname(__FILE__) . '/logs/everything.log', Logger::DEBUG));
$log->pushHandler(new StreamHandler(dirname(__FILE__) . '/logs/errors.log', Logger::ERROR));

// LOGIN

$app->get('/login', function ($request, $response, $args) {
    if(isset($_SESSION['bikeUser'])){
        echo '<script type="text/JavaScript"> 
            alert("You are already logged in");
            javascript:window.history.back();

            </script>';
    } else {
        return $this->view->render($response, 'login.html.twig');
    }
});

$app->post('/login', function (Request $request, Response $response, $args) use ($log) {
    $email = $request->getParam('email');
    $pass = $request->getParam('pass');
    $user = DB::queryFirstRow("SELECT * FROM users WHERE email=%s AND pass=%s", $email, $pass);
    if (!$user) {
        $log->error(sprintf("Unsuccessful login for email %s and password %s, from %s", $email, $pass, $_SERVER['REMOTE_ADDR']));
        $email = "";
        $pass = "";
        $finalErrorList[] = "Email and/or password is not correct.";
        return $this->view->render($response, "login.html.twig", ['finalErrorList' => $finalErrorList]);
    } else {
        unset($user['pass']);
        $_SESSION['bikeUser'] = $user;
        $log->debug(sprintf("Login successful for user %s, with user id=%d, from %s", $user['name'], $user['userId'], $_SERVER['REMOTE_ADDR']));
        if ($user['isAdmin'] == 1) {
            // return $response->withRedirect('/admin', 301);
            return $this->view->render($response, "admin/admin.html.twig");
        } else {
            return $this->view->render($response, "login-successful.html.twig", ['curruser' => $user]);
        }
    }
});

// REGISTER

$app->get('/registeration', function ($request, $response, $args) {
    return $this->view->render($response, 'register.html.twig');
});

$app->post('/registeration', function (Request $request, Response $response, $args) {
    $name = $request->getParam('name');
    $address = $request->getParam('address');
    $postcode = $request->getParam('postcode');
    $email = $request->getParam('email');
    $pass = $request->getParam('pass');
    $phone = $request->getParam('phone');

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
    if (!preg_match("/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[a-zA-Z]).{4,}$/", $pass)) {
        $pass = "";
        $errorList[] = "Password must have 4 characters, at least an uppercase, a lowercase and a number.";
    }
    if (filter_var($phone, FILTER_VALIDATE_INT) === false) {
        $phone = "";
        $errorList[] = "Phone must be 10 digits.";
    }

    if ($errorList) {
        $valuesList = ['name' => $name, 'address' => $address, 'postcode' => $postcode, 'email' => $email, 'pass' => $pass, 'phone' => $phone];
        return $this->view->render($response, "register.html.twig", ['errorList' => $errorList, 'v' => $valuesList]);
    } else {
        $filename = date('YmdHi') . '.jpg';
        DB::insert('users', ['name' => $name, 'address' => $address, 'postcode' => $postcode, 'email' => $email, 'pass' => $pass, 'phone' => $phone, 'photo' => $filename]);
        return $this->view->render($response, "register-success.html.twig");
    }
});

// LOGOUT

$app->get('/logout', function ($request, $response, $args) use ($log) {
    if ($_SESSION['bikeUser'] == null) {
            return $this->view->render($response, 'logout-unsuccessful.html.twig');
    } else {
        $log->debug(sprintf("Logout successful for uid=%d, from %s", @$_SESSION['bikeUser']['id'], $_SERVER['REMOTE_ADDR']));
        unset($_SESSION['bikeUser']);
        return $this->view->render($response, 'logout.html.twig');
    }
});

