<?php 
namespace Tests\Behavior;
use  Course\Behavior\AuthBehavior;

class AuthBehaviorTest extends \PHPUnit_Framework_TestCase
{
    public $behavior = NULL;
    function setUp() 
    {
        $this->behavior =  new AuthBehavior();
    }

    function testAddNumbersSuc()
    {
        $sum = $this->behavior->addNumbers(1,4);
        $this->assertEquals(5, $sum);
    }

    function testAddNumbersFail()
    {
        $sum = $this->behavior->addNumbers(1,4);
        $this->assertEquals(6, $sum);
    }
    function testOuputSuc()
    {
        $sum = $this->behavior->output(5);
        $this->assertEquals(12, $sum);
    }
}
