<?php
session_start();
ob_start();
date_default_timezone_set('Europe/Istanbul');
 
$db = new PDO("mysql:host=localhost;dbname=admin_232323;charset=utf8", "admin_232323", "123Smoke.");
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
require_once 'AjaxClass.php';

$ajax = new Ajax($db);

DEFINE('IP', $ajax->getIP());
DEFINE('BAN_URL',"https://www.youtube.com/watch?v=S1mbxjBTiIE");

$session = @$_SESSION['loggedIn'];
$useragent = $_SERVER['HTTP_USER_AGENT'];
$acsTime = date('d.m.20y, H:i');