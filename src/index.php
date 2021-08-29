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
    'controller' => 'Makerfaires',
    'action' => 'index'
  ),

    'tutorial' => array(
      'controller' => 'Makerfaires',
      'action' => 'tutorial'
    ),

    'overzichtM' => array(
      'controller' => 'Makerfaires',
      'action' => 'overzichtM'
    ),
    'overzichtZ' => array(
      'controller' => 'Makerfaires',
      'action' => 'overzichtZ'
    ),

    'stap1Z' => array(
      'controller' => 'Makerfaires',
      'action' => 'stap1Z'
    ),

    'stap1M' => array(
      'controller' => 'Makerfaires',
      'action' => 'stap1M'
    ),

    'stap2Z' => array(
      'controller' => 'Makerfaires',
      'action' => 'stap2Z'
    ),

    'stap2M' => array(
      'controller' => 'Makerfaires',
      'action' => 'stap2M'
    ),

    'stap3M' => array(
      'controller' => 'Makerfaires',
      'action' => 'stap3M'
    ),

    'stap3Z' => array(
      'controller' => 'Makerfaires',
      'action' => 'stap3Z'
    ),

    'stap4Z' => array(
      'controller' => 'Makerfaires',
      'action' => 'stap4Z'
    ),
    'stap4M' => array(
      'controller' => 'Makerfaires',
      'action' => 'stap4M'
    ),

    'winkelkar' => array(
      'controller' => 'Makerfaires',
      'action' => 'winkelkar'
    ),

    'bedankt' => array(
      'controller' => 'Makerfaires',
      'action' => 'bedankt'
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
