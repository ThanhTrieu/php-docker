<?php
declare(strict_types=1);

namespace app\controller;

use app\adapter\payments\PaymentAdapter;
use app\adapter\payments\PaymentBusiness;

class AdapterController
{
    private ?PaymentAdapter $adapter = null;

    public function __construct()
    {
        $this->adapter = new PaymentAdapter(new PaymentBusiness());
    }

    public function run() : void
    {
        echo $this->adapter->pay(10000);
    }
}