<?php
session_start();
ob_start();
error_reporting(E_ALL ^ E_NOTICE | E_WARNING);
ini_set('display_errors', 'ON');
mb_internal_encoding('UTF-8');
date_default_timezone_set("Europe/Paris");
header('Content-type: text/html; charset=utf-8');

define('DB_DSN', 'mysql:dbname=alexandreb_db;host=localhost');
define('DB_USER', 'alexandreb');
define('DB_PASSWORD', 'Bu7H06Ng5u');

require_once 'functions.common.php';