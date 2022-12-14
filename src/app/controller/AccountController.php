<?php
namespace app\controller;

use app\model\AccountModel;

class AccountController
{
    private $model;
    public function __construct()
    {
        $this->model = new AccountModel();
    }

    public function run()
    {
        return $this->model->getData();
    }
}