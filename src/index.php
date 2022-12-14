<?php
require __DIR__ . "/vendor/autoload.php";
//require_once "app/controller/AccountController.php";
$run = new app\controller\AccountController();
echo $run->run();