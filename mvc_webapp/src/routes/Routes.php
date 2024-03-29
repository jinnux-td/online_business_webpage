<?php

// Chứa tất cả các route mà ứng dụng có trong đây

// Các controllers trong hệ thống và các action có thể gọi ra từ controller đó.
$controllers = array(
  'HomeController' => ['index', 'error', 'about', 'contact', 'home'],
  'AuthenticationController' => ['index', 'error', 'login', 'logout', 'register'],
  'ProductDetailController' => ['index', 'error', 'products', 'pricing', 'order'],
  'UserController' => ['index', 'error', 'account', 'bills', 'billsAdmin', 'servicesAdmin', 'postAdmin', 'password'],
  'PostsController' => ['index', 'error', 'news', 'post'],
  'AdminController' => ['index', 'error'],
); 


// Nếu các tham số nhận được từ URL không hợp lệ (không thuộc list controller và action có thể gọi
// thì trang báo lỗi sẽ được gọi ra.
if (!array_key_exists($controller, $controllers) || !in_array($action, $controllers[$controller])) {
  $controller = 'HomeController';
  $action = 'error';
}

// Nhúng file định nghĩa controller vào để có thể dùng được class định nghĩa trong file đó
require_once  APP_ROOT.'/src/controllers/' . $controller . '.php';

$klass = $controller;
$controller = new $klass;
$controller->$action();

?>