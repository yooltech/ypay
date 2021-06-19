<?php namespace YPay\Api;

use YPay\Common\YPayModel;

/**
 * Class Transaction
 * @property \YPay\Api\Amount amount
 *
 */

class Transaction extends YPayModel
{

    /**
     * @param \YPay\Api\Amount $amount
     *
     * @return $this
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;
        return $this;
    }

    public function getAmount()
    {
        return $this->amount;
    }
}