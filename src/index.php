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

    'overzichtM' => array(
      'controller' => 'Makerfaire',
      'action' => 'overzichtM'
    ),
    'overzichtZ' => array(
      'controller' => 'Makerfaire',
      'action' => 'overzichtZ'
    ),

    'stap1Z' => array(
      'controller' => 'Makerfaire',
      'action' => 'stap1Z'
    ),

    'stap1M' => array(
      'controller' => 'Makerfaire',
      'action' => 'stap1M'
    ),

    'stap2Z' => array(
      'controller' => 'Makerfaire',
      'action' => 'stap2Z'
    ),

    'stap2M' => array(
      'controller' => 'Makerfaire',
      'action' => 'stap2M'
    ),

    'stap3M' => array(
      'controller' => 'Makerfaire',
      'action' => 'stap3M'
    ),

    'stap3Z' => array(
      'controller' => 'Makerfaire',
      'action' => 'stap3Z'
    ),

    'stap4Z' => array(
      'controller' => 'Makerfaire',
      'action' => 'stap4Z'
    ),
    'stap4M' => array(
      'controller' => 'Makerfaire',
      'action' => 'stap4M'
    ),

    'verzendgegevens' => array(
      'controller' => 'Makerfaire',
      'action' => 'verzendgegevens'
    ),

    'bedankt' => array(
      'controller' => 'Makerfaire',
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
