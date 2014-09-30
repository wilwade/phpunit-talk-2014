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
        if($this->amount < 0)
        {
            throw new Exception('Already Negative');
        }
        return new Money(-1 * $this->amount);
    }

    // ...
}
