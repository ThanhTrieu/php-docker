<?php
declare(strict_types=1);

namespace app\adapter\payments;

class PaymentBusiness
{
    public function __construct()
    {
        // Hàm khởi tạo
    }

    public function sendPayment($amount)
    {
        // Code xử lý gửi thanh toán tại đây
        return $amount;
    }
}