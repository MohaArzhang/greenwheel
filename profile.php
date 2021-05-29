<?php
require_once 'vendor/autoload.php';
require_once 'init.php';

// EDIT ACCOUNT
$app->get('/profile', function ($request, $response, $args) {
    return $this->view->render($response, 'edit_account.html.twig', ['curruser' => $_SESSION['bikeUser']]);
});

$app->post('/profile', function ($request, $response, $args) {
    $name = $request->getParam('name');
    $address = $request->getParam('address');
    $postcode = $request->getParam('postcode');
    $email = $request->getParam('email');
    $pass = $request->getParam('pass');
    $phone = $request->getParam('phone');
    $user = $_SESSION['bikeUser'];
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
}else{
    $filename = date('YmdHi') . '.jpg';
    DB::update('users', ['name' => $name, 'address' => $address, 'postcode' => $postcode, 'email' => $email, 'pass' => $pass, 'phone' => $phone, 'photo' => $filename], "userId=%s", $user['userId']);
    $newuser = DB::queryFirstRow("SELECT * FROM users WHERE userId=%d", $user['userId']);
    unset($_SESSION['bikeUser']);
    $_SESSION['bikeUser'] = $newuser;
    // return $response->withRedirect('login');
    return $this->view->render($response, 'user-update-success.html.twig', ['curruser' => $_SESSION['bikeUser']]);
}
});

// VIEW ACCOUNT
$app->get('/viewaccount', function ($request, $response, $args) {
    return $this->view->render($response, 'viewaccount.html.twig');
});

// PAYMENT
$app->get('/payment', function ($request, $response, $args) {
    return $this->view->render($response, 'payment.html.twig');
});