<?php
/**
* From https://phpunit.de/getting-started.html
*/
class Money
{
    private $amount;

    public function __construct($amount)
    {
        $this->amount = $amount;
    }

    public function getAmount()
    {
        return $this->amount;
    }

    public function negate()
    {
        return new Money(-1 * $this->amount);
    }

    public static function initFromBank(Bank $bank)
    {
        return new Money($bank->getVaultTotal());
    }

}
