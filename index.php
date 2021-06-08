<?php

// $controllername = ucfirst(($_REQUEST['/'] ?? 'My') . "Controller");
// $action = $_REQUEST['action'] ?? "index";


// echo $controllername.$action;

// require("./Controller/${controllername}.php");
// require("./Controller/$url/$action ");
// $OBJ = new $controllername ;
// $OBJ->$action();


define('PATH_ROOT', __DIR__);

// Autoload class trong PHP
spl_autoload_register(function (string $class_name) {
    include_once PATH_ROOT . '/' . $class_name . '.php';
});

// Lấy url hiện tại của trang web. Mặc định la /
$request_url = !empty($_GET['url']) ? '/' . $_GET['url'] : '/';

// Lấy phương thức hiện tại của url đang được gọi. (GET | POST). Mặc định là GET.
$method_url = !empty($_SERVER['REQUEST_METHOD']) ? $_SERVER['REQUEST_METHOD'] : 'GET';
