<?php
session_start();
ini_set('display_errors', true);
error_reporting(E_ALL);

// basic .env file parsing
if (file_exists("../.env")) {
  $variables = parse_ini_file("../.env", true);
  foreach ($variables as $key => $value) {
    putenv("$key=$value");
  }
}

$routes = array(
  'home' => array(
    'controller' => 'Makerfaire',
    'action' => 'index'
  ),

    'tutorial' => array(
      'controller' => 'Makerfaire',
      'action' => 'tutorial'
    ),

    'winkelkar' => array(
      'controller' => 'Makerfaire',
      'action' => 'winkelkar'
    ),


    'verzendgegevens' => array(
      'controller' => 'Makerfaire',
      'action' => 'verzendgegevens'
    ),

    'bedankt' => array(
      'controller' => 'Makerfaire',
      'action' => 'bedankt'
    ),
    'shop' => array (
      'controller' => 'Makerfaire',
      'action' => 'shop'
    )
  );

if(empty($_GET['page'])) {
  $_GET['page'] = 'home';
}
if(empty($routes[$_GET['page']])) {
  header('Location: index.php');
  exit();
}

$route = $routes[$_GET['page']];
$controllerName = $route['controller'] . 'Controller';

require_once __DIR__ . '/controller/' . $controllerName . ".php";

$controllerObj = new $controllerName();
$controllerObj->route = $route;
$controllerObj->filter();
$controllerObj->render();
