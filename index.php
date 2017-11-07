<?php

// Общие настройки
ini_set('display_errors', 1);
error_reporting(E_ALL);

// Подключение файлов
define('ROOT', dirname(__FILE__));
require(ROOT.'/vendor/autoload.php');
require_once(ROOT.'/components/Router.php');

// Установка соединения с БД

// Вызов Router
$router = new Router();
$router->run();

      
