<?php

echo "<h2>Ветка test</h2>";
for($i = 0; $i < 10; $i++){
	echo "Hello world <br>";
}

//echo phpinfo();

exit;

// Общие настройки
ini_set('display_errors', 1);
error_reporting(E_ALL);

// Подключение файлов
define('ROOT', dirname(__FILE__));
require_once(ROOT.'/components/Router.php');

// Установка соединения с БД

// Вызов Router
$router = new Router();
$router->run();

      
