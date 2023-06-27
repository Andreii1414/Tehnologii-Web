<?php

require 'Tehnologii-web/php/registerController.php';
require 'Tehnologii-web/php/loginController.php';
require 'Tehnologii-web/php/changePassController.php';
require 'Tehnologii-web/php/logoutController.php';
require 'Tehnologii-web/php/pointsController.php';
require 'Tehnologii-web/php/clasamentController.php';
require 'Tehnologii-web/php/mediuController.php';
require 'Tehnologii-web/php/accountController.php';
require 'Tehnologii-web/php/feedbackController.php';
require 'Tehnologii-web/php/rss.php';

$requestUrl = $_SERVER['REQUEST_URI'];
$requestMethod = $_SERVER['REQUEST_METHOD'];


if ($requestMethod === 'POST' && $requestUrl === '/api/register') {
    $reg = new Register();
    $reg->nHandler();
} 

if ($requestMethod === 'POST' && $requestUrl === '/api/login') {
    $log = new Login();
    $log->nHandler();
}

if ($requestMethod === 'POST' && $requestUrl === '/api/changePass') {
    if(isset($_COOKIE['jwt'])){
        $jwt = $_COOKIE['jwt'];
        
        $jwtInstance = new Jwt();
        if($jwtInstance->verifyToken($jwt)){
            $change = new ChangePassword();
            $change->nHandler();
        }
        else{
            header('HTTP/1.1 401 Unauthorized');
            header('Content-Type: text/plain');
            exit;
        }
    }
    else{
        header('HTTP/1.1 401 Unauthorized');
        header('Content-Type: text/plain');
        exit;
    }
}

if ($requestMethod === 'GET' && $requestUrl === '/api/logout') {
    if(isset($_COOKIE['jwt'])){
        $jwt = $_COOKIE['jwt'];
        
        $jwtInstance = new Jwt();
        if($jwtInstance->verifyToken($jwt)){
            $log = new Logout();
            $log->logout();
        }
        else{
            header('HTTP/1.1 401 Unauthorized');
            header('Content-Type: text/plain');
            exit;
        }
    }
    else{
        header('HTTP/1.1 401 Unauthorized');
        header('Content-Type: text/plain');
        exit;
    }
}

if ($requestMethod === 'GET' && $requestUrl === '/api/Points') {
    if(isset($_COOKIE['jwt'])){
        $jwt = $_COOKIE['jwt'];
        
        $jwtInstance = new Jwt();
        if($jwtInstance->verifyToken($jwt)){
            $point = new Points();
            $point->getPoints();
        }
        else{
            header('HTTP/1.1 401 Unauthorized');
            header('Content-Type: text/plain');
            exit;
        }
    }
    else{
        header('HTTP/1.1 401 Unauthorized');
        header('Content-Type: text/plain');
        exit;
    }
}

if ($requestMethod === 'POST' && $requestUrl === '/api/Points') {
    if(isset($_COOKIE['jwt'])){
        $jwt = $_COOKIE['jwt'];
        
        $jwtInstance = new Jwt();
        if($jwtInstance->verifyToken($jwt)){
            $point = new Points();
            $point->addPoints();
        }
        else{
            header('HTTP/1.1 401 Unauthorized');
            header('Content-Type: text/plain');
            exit;
        }
    }
    else{
        header('HTTP/1.1 401 Unauthorized');
        header('Content-Type: text/plain');
        exit;
    }
}

if ($requestMethod === 'GET' && $requestUrl === '/api/clasament') {
    $clas = new Clasament();
    $clas->first20();
}

if ($requestMethod === 'GET' && $requestUrl === '/api/clasament/puncteleTale') {
    if(isset($_COOKIE['jwt'])){
        $jwt = $_COOKIE['jwt'];
        
        $jwtInstance = new Jwt();
        if($jwtInstance->verifyToken($jwt)){
            $clas = new Clasament();
            $clas->puncteleTale();
        }
        else{
            header('HTTP/1.1 401 Unauthorized');
            header('Content-Type: text/plain');
            exit;
        }
    }
    else{
        header('HTTP/1.1 401 Unauthorized');
        header('Content-Type: text/plain');
        exit;
    }

}

if ($requestMethod === 'POST' && $requestUrl === '/api/mediu') {
    if(isset($_COOKIE['jwt'])){
        $jwt = $_COOKIE['jwt'];
        
        $jwtInstance = new Jwt();
        if($jwtInstance->verifyToken($jwt)){
            $mediu = new Mediu();
            $mediu->addPointsCategory();
        }
        else{
            header('HTTP/1.1 401 Unauthorized');
            header('Content-Type: text/plain');
            exit;
        }
    }
    else{
        header('HTTP/1.1 401 Unauthorized');
        header('Content-Type: text/plain');
        exit;
    }
}

if ($requestMethod === 'GET' && $requestUrl === '/api/cont') {
    if(isset($_COOKIE['jwt'])){
        $jwt = $_COOKIE['jwt'];
        
        $jwtInstance = new Jwt();
        if($jwtInstance->verifyToken($jwt)){
            $account = new Account();
            $account->accountInfo();
        }
        else{
            header('HTTP/1.1 401 Unauthorized');
            header('Content-Type: text/plain');
            exit;
        }
    }
    else{
        header('HTTP/1.1 401 Unauthorized');
        header('Content-Type: text/plain');
        exit;
    }
}

if ($requestMethod === 'GET' && $requestUrl === '/api/CategoryPoints') {
    if(isset($_COOKIE['jwt'])){
        $jwt = $_COOKIE['jwt'];
        
        $jwtInstance = new Jwt();
        if($jwtInstance->verifyToken($jwt)){
            $point = new Points();
            $point->getAllCategories();
        }
        else{
            header('HTTP/1.1 401 Unauthorized');
            header('Content-Type: text/plain');
            exit;
        }
    }
    else{
        header('HTTP/1.1 401 Unauthorized');
        header('Content-Type: text/plain');
        exit;
    }
}

if ($requestMethod === 'POST' && $requestUrl === '/api/Feedback') {
    if(isset($_COOKIE['jwt'])){
        $jwt = $_COOKIE['jwt'];
        
        $jwtInstance = new Jwt();
        if($jwtInstance->verifyToken($jwt)){
            $feedback = new Feedback();
            $feedback->addFeedback();
        }
        else{
            header('HTTP/1.1 401 Unauthorized');
            header('Content-Type: text/plain');
            exit;
        }
    }
    else{
        header('HTTP/1.1 401 Unauthorized');
        header('Content-Type: text/plain');
        exit;
    }
}

if ($requestMethod === 'GET' && $requestUrl === '/api/Feedback') {
    $feedback = new Feedback();
    $feedback->getAllFeedback();
}

if ($requestMethod === 'GET' && $requestUrl === '/api/clasamentRss') {
    $rss = new Rss();
    $rss->createRss();
}

