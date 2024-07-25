<?php
require_once "vendor/autoload.php";
// require_once 'C:\xampp\htdocs\php_project\vendor\autoload.php';
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/..');
$dotenv->load();

define('DB_HOST', $_ENV['DB_HOST']);
define('DB_SERVER', $_ENV['DB_SERVER']);
define('DB_PASS', $_ENV['DB_PASS']);
define('DB_NAME', $_ENV['DB_NAME']);

$con = mysqli_connect(DB_HOST, DB_SERVER, DB_PASS, DB_NAME);
if (!$con) {
    die("database not connected");
}
?>