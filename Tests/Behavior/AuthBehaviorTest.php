<?php

namespace Tests\Behavior;

use  Course\Behavior\AuthBehavior;

class AuthBehaviorTest extends \PHPUnit_Framework_TestCase
{
    public $behavior = null;

    public function setUp()
    {
        $this->behavior = new AuthBehavior();
    }

    public function testAddNumbersSuc()
    {
        $sum = $this->behavior->addNumbers(1, 4);
        $this->assertEquals(5, $sum);
    }

    public function testAddNumbersFail()
    {
        $sum = $this->behavior->addNumbers(1, 4);
        $this->assertEquals(6, $sum);
    }

    public function testOuputSuc()
    {
        $sum = $this->behavior->output(5);
        $this->assertEquals(12, $sum);
    }
}
