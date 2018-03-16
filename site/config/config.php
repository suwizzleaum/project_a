<?php
//APP_KEY
$APP_KEY = '';

//site
$DIR = $_SERVER['DOCUMENT_ROOT'].'site'.'/';
$URL = 'http://'.$_SERVER['HTTP_HOST'].'/'.'site'.'/';

//THEME
define('BOOTSTRAP_URL', $URL.'bootstrap/css/');
define('BOOTSTRAP_JS_URL', $URL.'bootstrap/js/');
define('CSS_URL', $URL.'css/');
define('THEME_HEADER_DIR', $DIR.'/theme/header.php');

//JS
?>