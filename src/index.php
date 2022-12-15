<?php
require __DIR__ . "/vendor/autoload.php";
$run = new app\controller\AccountController();
print_r($run->run());