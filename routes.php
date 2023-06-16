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


$requestUrl = $_SERVER['REQUEST_URI'];
$requestMethod = $_SERVER['REQUEST_METHOD'];

if ($requestMethod === 'POST' && $requestUrl === '/api/register') {
    registerHandler();
} 

if ($requestMethod === 'POST' && $requestUrl === '/api/login') {
    loginHandler();
}

if ($requestMethod === 'POST' && $requestUrl === '/api/changePass') {
    changePassword();
}

if ($requestMethod === 'GET' && $requestUrl === '/api/logout') {
    logout();
}

if ($requestMethod === 'GET' && $requestUrl === '/api/getPoints') {
    getPoints();
}

if ($requestMethod === 'POST' && $requestUrl === '/api/addPoints') {
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

if ($requestMethod === 'GET' && $requestUrl === '/api/getAllCategories') {
    getAllCategories();
}

if ($requestMethod === 'POST' && $requestUrl === '/api/addFeedback') {
    addFeedback();
}

if ($requestMethod === 'GET' && $requestUrl === '/api/getAllFeedback') {
    getAllFeedback();
}



