<?php

// define('BASEURL', 'http://localhost/olshop/public');

require_once (__DIR__.'../../../vendor/autoload.php');
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__.'/../..');
$dotenv->load();

// $host =  $_ENV['DB_HOST'];
// $username = $_ENV['DB_USERNAME'];
// $password = $_ENV['DB_PASSWORD'];
// $db = $_ENV['DB_DATABASE'];

// $koneksi = mysqli_connect($host, $username, $password, $db) or die("GAGAL");

// $base_url = $_ENV['APP_URL'];
define('base_url', $_ENV['APP_URL']);

define('DB_HOST', $_ENV['DB_HOST']);
define('DB_USER', $_ENV['DB_USERNAME']);
define('DB_PASS', $_ENV['DB_PASSWORD']);
define('DB_NAME', $_ENV['DB_DATABASE']);

$server = $_ENV['APP_SERVER'];
date_default_timezone_set('Asia/Jakarta');