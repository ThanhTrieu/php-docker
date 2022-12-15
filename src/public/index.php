<?php
require_once __DIR__ . "/../vendor/autoload.php";
const APP_ROOT_PATH = 'index.php';

if(file_exists(__DIR__ . '/../routes/web.php')){
    require __DIR__ . '/../routes/web.php';
} else {
    die('system updating ...');
}