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
    $reg->registerHandler();
} 

if ($requestMethod === 'POST' && $requestUrl === '/api/login') {
    $log = new Login();
    $log->loginHandler();
}

if ($requestMethod === 'POST' && $requestUrl === '/api/changePass') {
    $change = new ChangePassword();
    $change->changePassword();
}

if ($requestMethod === 'GET' && $requestUrl === '/api/logout') {
    logout();
}

if ($requestMethod === 'GET' && $requestUrl === '/api/Points') {
    getPoints();
}

if ($requestMethod === 'POST' && $requestUrl === '/api/Points') {
    addPoints();
}

if ($requestMethod === 'GET' && $requestUrl === '/api/clasament') {
    first20();
}

if ($requestMethod === 'GET' && $requestUrl === '/api/clasament/puncteleTale') {
    puncteleTale();
}

if ($requestMethod === 'POST' && $requestUrl === '/api/mediu') {
    addPointsCategory();
}

if ($requestMethod === 'GET' && $requestUrl === '/api/cont') {
    accountInfo();
}

if ($requestMethod === 'GET' && $requestUrl === '/api/CategoryPoints') {
    getAllCategories();
}

if ($requestMethod === 'POST' && $requestUrl === '/api/Feedback') {
    addFeedback();
}

if ($requestMethod === 'GET' && $requestUrl === '/api/Feedback') {
    getAllFeedback();
}

if ($requestMethod === 'GET' && $requestUrl === '/api/clasamentRss') {
    createRss();
}

