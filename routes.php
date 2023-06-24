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
    $change = new ChangePassword();
    $change->nHandler();
}

if ($requestMethod === 'GET' && $requestUrl === '/api/logout') {
    $log = new Logout();
    $log->logout();
}

if ($requestMethod === 'GET' && $requestUrl === '/api/Points') {
    $point = new Points();
    $point->getPoints();
}

if ($requestMethod === 'POST' && $requestUrl === '/api/Points') {
    $point = new Points();
    $point->addPoints();
}

if ($requestMethod === 'GET' && $requestUrl === '/api/clasament') {
    $clas = new Clasament();
    $clas->first20();
}

if ($requestMethod === 'GET' && $requestUrl === '/api/clasament/puncteleTale') {
    $clas = new Clasament();
    $clas->puncteleTale();
}

if ($requestMethod === 'POST' && $requestUrl === '/api/mediu') {
    $mediu = new Mediu();
    $mediu->addPointsCategory();
}

if ($requestMethod === 'GET' && $requestUrl === '/api/cont') {
    $account = new Account();
    $account->accountInfo();
}

if ($requestMethod === 'GET' && $requestUrl === '/api/CategoryPoints') {
    $point = new Points();
    $point->getAllCategories();
}

if ($requestMethod === 'POST' && $requestUrl === '/api/Feedback') {
    $feedback = new Feedback();
    $feedback->addFeedback();
}

if ($requestMethod === 'GET' && $requestUrl === '/api/Feedback') {
    $feedback = new Feedback();
    $feedback->getAllFeedback();
}

if ($requestMethod === 'GET' && $requestUrl === '/api/clasamentRss') {
    $rss = new Rss();
    $rss->createRss();
}
