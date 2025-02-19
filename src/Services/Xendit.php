<?php

namespace Otnansirk\Xendit\Services;

use Xendit\BalanceAndTransaction\TransactionApi;
use Xendit\BalanceAndTransaction\BalanceApi;
use Xendit\PaymentRequest\PaymentRequestApi;
use Xendit\PaymentMethod\PaymentMethodApi;
use Xendit\Customer\CustomerApi;
use Xendit\Invoice\InvoiceApi;
use Xendit\Payout\PayoutApi;
use Xendit\Refund\RefundApi;
use Xendit\Configuration;


final class Xendit
{

    /**
     * Invoice utils
     * @return InvoiceApi
     */
    public static function invoice(): InvoiceApi {
        return new InvoiceApi();
    }

    /**
     * Payment request utils
     * @return PaymentRequestApi
     */
    public static function paymentRequest(): PaymentRequestApi {
        return new PaymentRequestApi();
    }

    /**
     * payment method utils
     * @return PaymentMethodApi
     */
    public static function paymentMethod(): PaymentMethodApi {
        return new PaymentMethodApi();
    }

    /**
     * refund utils
     * @return RefundApi
     */
    public static function refund(): RefundApi {
        return new RefundApi();
    }

    /**
     * Balance utils
     * @return BalanceApi
     */
    public static function balance(): BalanceApi {
        return new BalanceApi();
    }

    /**
     * Transaction utils
     * @return TransactionApi
     */
    public static function transaction(): TransactionApi {
        return new TransactionApi();
    }

    /**
     * Customer utils
     * @return CustomerApi
     */
    public static function customer(): CustomerApi {
        return new CustomerApi();
    }

    /**
     * Payout utils
     * @return PayoutApi
     */
    public static function payout(): PayoutApi {
        return new PayoutApi();
    }

    public static function configuration() : Configuration {
        return new Configuration();
    }
}

