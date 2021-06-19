<?php
namespace YPay\Api;

use YPay\Common\YPayModel;

/**
 * Class Payer
 * @property string paymentMethod
 *
 */
class Payer extends YPayModel
{

    /**
     * Valid Values: ["YPay"]
     * method will be like YPay, paypal, stripe etc
     * @param  string  $method
     * @return $this
     */
    public function setPaymentMethod($method)
    {
        $this->paymentMethod = $method;
        return $this;
    }

    public function getPaymentMethod()
    {
        return $this->paymentMethod;
    }

}
