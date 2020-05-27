<?php
require __DIR__ . DIRECTORY_SEPARATOR . 'vendor/autoload.php';
require __DIR__ . DIRECTORY_SEPARATOR . 'Extract.php';
session_start();
use App\Extract;
$data = json_decode(file_get_contents('php://input'), true);
if(!$_SESSION['counter']) {
    $_SESSION['counter'] = 0;
} else {
    $_SESSION['counter'] = $_SESSION['counter'] + 1;
}
header('Content-Type: application/json');
$resp = [
    "counter" => $_SESSION['counter']
];
if(isset($data["email"]) && $data["email"]) {
    if(strlen($data["email"]) > 10) {
        if(Extract::go(trim($data["email"]))) {
            $resp['response'] = $data["email"] . " <font color=green>valid</font>";
        } else {
            $resp['response'] = $data["email"] . " <font color=red>invalid</font>";
        }

        echo json_encode($resp);
    }
    flush();
    ob_flush();
}