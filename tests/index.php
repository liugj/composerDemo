<?php
/**
 * Created by JetBrains PhpStorm.
 * User: kendoctor
 * Date: 14-3-19
 * Time: 上午9:40
 * To change this template use File | Settings | File Templates.
 */

require("../vendor/autoload.php");
use Course\Behavior\AuthBehavior; 

$calc = new AuthBehavior();
echo $calc->addNumbers(10,21);
