<?php

/*
 * @author Puneet Mehta
 * @website: http://www.PHPHive.info
 * @facebook: https://www.facebook.com/pages/PHPHive/1548210492057258
 */
 
error_reporting(E_ALL & ~E_DEPRECATED & ~E_NOTICE);
ob_start();
session_start();

define('PROJECT_NAME', 'Twitter Connect Login System with PHP and MySQL - www.PHPHive.info');

define('DB_DRIVER', 'mysql');
define('DB_SERVER', 'localhost');
define('DB_SERVER_USERNAME', 'root');
define('DB_SERVER_PASSWORD', '');
define('DB_DATABASE', 'testdatabase');


$dboptions = array(
    PDO::ATTR_PERSISTENT => FALSE,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
);
try {
  //$DB = new PDO(DB_DRIVER . ':host=' . DB_SERVER . ';dbname=' . DB_DATABASE, DB_SERVER_USERNAME, DB_SERVER_PASSWORD, $dboptions);
} catch (Exception $ex) {
  echo $ex->getMessage();
  die;
}


define("CLIENT_ID", "3059691325-cNVIClJdropFZTYV3gyh2HAJMnKMniWdv9RiTwO
C");
define("SECRET_KEY", "gFEnsz6DDeo7NhgrtQ6tdfQ7RpuToD4HoWCIjILYlQWPlH9gwh");
/* make sure the url end with a trailing slash, give your site URL */
define("SITE_URL", "https://twitterpostsiri.herokuapp.com/twitterapi/");
/* the page where you will be redirected for authorization */
define("REDIRECT_URL", SITE_URL."twitter_login.php");

define("LOGOUT_URL", SITE_URL."logout.php");
?>