<?php
declare(strict_types=1);

namespace app\controller;

use app\model\AccountModel;

class SingletonController
{
    private ?AccountModel $model = null;

    public function __construct()
    {
        $this->model = new AccountModel();
    }

    public function run() : void
    {
        $data = $this->model->getData();
        print_r($data);
    }
}