<?php
declare(strict_types=1);

namespace app\adapter\payments\interfaces;

interface PaymentAdapterInterface
{
    public function pay($amount);
}