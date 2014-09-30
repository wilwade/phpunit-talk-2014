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

    /**
     * @expectedException Exception
     * @expectedExceptionMessage Already Negative
     */
    public function testNegatedException()
    {
        $money = new Money(-1);
        $money->negate();
    }

    /**
     * @expectedException Exception
     * @expectedExceptionMessage Bad Message
     */
    public function testNegatedExceptionFail()
    {
        $money = new Money(-1);
        $money->negate();
    }

    // ...
}
