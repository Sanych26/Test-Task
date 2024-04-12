<?php
require_once(getcwd().'/ApiController.php');
if (isset($_REQUEST) && !empty($_REQUEST)) {
    $data = [
        'firstName' => $_REQUEST['firstName'],
        'lastName' => $_REQUEST['lastName'],
        'phone' => $_REQUEST['phone'],
        'email' => $_REQUEST['email'],
        'box_id' => 28,
        'offer_id' => 5,
        'language' => 'en',
        'countryCode' => 'GB',
        'password' => 'qwerty12',
        'ip' => $_SERVER['REMOTE_ADDR'],
        'landingUrl' => $_SERVER['HTTP_HOST']
    ];
    $res = ApiController::sendOrder($data);

    if ($res['status'] == 1) {
        header("Location: /views/orders.php");
        exit();
    } else {
        echo 'Error when order sending';
    }
} else {
    echo 'Please fill form data!';
}
die();