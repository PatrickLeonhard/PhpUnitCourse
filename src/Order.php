<?php

class Order{
    public int $amount;

    /**
     * @var PaymentGateway
     */
    protected $gateway;

    /**
     * @return void
     */
    public function __construct(PaymentGateway $gateway)
    {
        $this->gateway = $gateway;
    }

    /**
     * @return boolean
     */
    public function process()
    {
        return $this->gateway->charge($this->amount);
    }
}