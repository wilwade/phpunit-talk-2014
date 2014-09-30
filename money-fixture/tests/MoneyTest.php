<?php
/**
* From: https://phpunit.de/getting-started.html
*/
class MoneyTest extends PHPUnit_Framework_TestCase
{
    protected $initValues;

    protected function setUp(){
        $this->initValues = [1, 2, 3, 4];
    }

    protected function tearDown(){
        //Not really needed...
        unset($this->initValues);
    }

    public function testCanBeNegated()
    {
        // Arrange
        $a = new Money(1);

        // Act
        $b = $a->negate();

        // Assert
        $this->assertEquals(-1, $b->getAmount());
    }

    public function testInit()
    {
        $this->assertCount(4, $this->initValues);
        $this->initValues[] = 5;
        $this->initValues[] = 6;
        $this->assertCount(6, $this->initValues);
    }

    public function testInitAgain()
    {
        $this->assertCount(4, $this->initValues);
    }

    // ...
}
