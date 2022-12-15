<?php
declare(strict_types=1);

namespace app\adapter\payments;

use app\adapter\payments\interfaces\PaymentAdapterInterface;

class PaymentAdapter implements  PaymentAdapterInterface
{
    private ?PaymentBusiness $paid = null;

    public function __construct(PaymentBusiness $payment)
    {
        $this->paid = $payment;
    }

    public function pay($amount)
    {
        // TODO: Implement pay() method.
        return $this->paid->sendPayment($amount);
    }
}