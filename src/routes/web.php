<?php
if (!defined('APP_ROOT_PATH')) {die('NOT FOUND REQUEST');}

// noi dinh nghia cac route tiep nhan va xu ly cac request
$uri        = $_SERVER['REQUEST_URI'];
$rootString = $_SERVER['PHP_SELF'];
$rootFolder = dirname($rootString);

$strController = substr($uri,strlen($rootFolder)) ;
if(!empty($strController)){
    $arrController = explode('/', $strController);

    $GLOBALS['fullParams']  = $arrController;
    $GLOBALS['paramsQuery'] = array_slice($arrController, 2);

    $controller    = ucfirst($arrController[0] ?? 'singleton');
    $method        = $arrController[1] ?? 'run';
    $queryString   = strpos($method, '?');
    if($queryString !== false){
        $method = substr($method, 0,$queryString);
    }
} else {
    $controller = 'Singleton';
    $method     = 'run';
    $GLOBALS['fullParams'] = [];
    $GLOBALS['paramsQuery'] = [];
}

$obj = NAME_SPACE_CONTROLLER . "{$controller}Controller";
$checkController   = str_replace('\\','/',trim($obj,'\\')).'.php';
$srcFileController = __DIR__ . '/' . $checkController;
$srcFileController = str_replace('routes/', '', $srcFileController);
if(file_exists($srcFileController)){
    $request = new $obj();
    $request->$method(...$paramsQuery);
}else {
    exit('Can not find request');
}

