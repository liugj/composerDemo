<?php 
/**
 * Created by JetBrains PhpStorm.
 * User: Kendoctor
 * Date: 14-3-19
 * Time: 上午9:39
 * To change this template use File | Settings | File Templates.
 */
namespace Course\Behavior;
class AuthBehavior {
    public function addNumbers($x,$y)
    {
        return $x + $y;
    }
    public function output($x)
    {
        return $x + 7;
    }
}
