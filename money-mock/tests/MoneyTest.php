<?php
/**
* From: https://phpunit.de/getting-started.html
*/
class MoneyTest extends PHPUnit_Framework_TestCase
{
    // ...

    public function testCanBeNegated()
    {
        // Arrange
        $a = new Money(1);

        // Act
        $b = $a->negate();

        // Assert
        $this->assertEquals(-1, $b->getAmount());
    }

    public function testInitFromBank()
    {
        $bankStub = $this->getMock('Bank');
        $bankStub->method('getVaultTotal')->willReturn(1.47);

        $money = Money::initFromBank($bankStub);
        $this->assertEquals(100.47, $money->getAmount());
    }

    // ...
}
